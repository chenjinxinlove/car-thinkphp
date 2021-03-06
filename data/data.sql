-- MySQL Script generated by MySQL Workbench
-- 02/22/16 09:31:44
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema GWCH
-- -----------------------------------------------------
-- 公务车管理系统库

-- -----------------------------------------------------
-- Schema GWCH
--
-- 公务车管理系统库
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `GWCH` DEFAULT CHARACTER SET utf8 ;
USE `GWCH` ;

-- -----------------------------------------------------
-- Table `GWCH`.`Car_User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GWCH`.`Car_User` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT 'id',
  `username` CHAR(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `pwd` CHAR(32) NOT NULL DEFAULT '' COMMENT '密码',
  `lock` INT UNSIGNED NOT NULL DEFAULT 0 COMMENT '锁定',
  `pock` INT NOT NULL DEFAULT 0 COMMENT '角色',
  `time` CHAR(12) NOT NULL DEFAULT '' COMMENT '时间戳',
  `ip` CHAR(20) NOT NULL DEFAULT '' COMMENT 'Ip',
  `section` VARCHAR(45) NOT NULL DEFAULT '' COMMENT '部门',
  `tel` CHAR(15) NOT NULL DEFAULT '' COMMENT '部门电话',
  `phone` CHAR(11) NOT NULL DEFAULT '' COMMENT '手机号',
  PRIMARY KEY (`id`),
  INDEX `username` (`username` ASC))
ENGINE = MyISAM
COMMENT = '用户表';


-- -----------------------------------------------------
-- Table `GWCH`.`Car_Driver`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GWCH`.`Car_Driver` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '姓名',
  `sex` ENUM('男', '女') NOT NULL DEFAULT '男' COMMENT '性别',
  `card` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '身份证号',
  `tell` VARCHAR(15) NOT NULL DEFAULT '' COMMENT '驾驶员电话',
  `state` INT NOT NULL DEFAULT 0 COMMENT '驾驶员状态\n在职(0)、出差(1)、待岗(2)、休假(3)、离职(4)',
  `type` INT NOT NULL DEFAULT 0 COMMENT '驾驶员驾驶证类型\nC1(0)、C2(1)、C3(2)、B1(3)、B2(4)、A1(5)、A2(6)、A3(7)',
  `collection_time` VARCHAR(14) NOT NULL DEFAULT '' COMMENT '领证时间',
  `VFD` VARCHAR(14) NOT NULL DEFAULT '' COMMENT '证件有效期开始时间',
  `Ve` VARCHAR(14) NOT NULL DEFAULT '' COMMENT '证件有效期结束时间',
  `QC` VARCHAR(25) NOT NULL DEFAULT '' COMMENT 'QualificationCode\n从业证号',
  `QCE` VARCHAR(14) NOT NULL DEFAULT '' COMMENT '从业证失效时间',
  `note` CHAR(255) NULL COMMENT '备注',
  PRIMARY KEY (`id`),
  INDEX `driver_name` (`name` ASC))
ENGINE = MyISAM
COMMENT = '驾驶员表';


-- -----------------------------------------------------
-- Table `GWCH`.`Car_Car`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GWCH`.`Car_Car` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `num` CHAR(10) NOT NULL DEFAULT '' COMMENT '车牌号码',
  `type` CHAR(10) NOT NULL DEFAULT '' COMMENT '车辆类型',
  `model` CHAR(10) NOT NULL DEFAULT '' COMMENT '车辆型号',
  `nums` CHAR(10) NOT NULL DEFAULT '' COMMENT '座位数',
  `color` CHAR(5) NOT NULL DEFAULT '' COMMENT '颜色',
  `state` INT NOT NULL DEFAULT 0 COMMENT '车辆状态\n正常(0)、维修(1)、保养(2)、封停(3)、变卖(4)、报废(5)',
  `time` VARCHAR(14) NOT NULL DEFAULT '' COMMENT '购车时间',
  `money` CHAR(8) NOT NULL DEFAULT '' COMMENT '购车金额',
  `car_note` VARCHAR(255) NULL COMMENT '备注',
  ` ins_creat_time` VARCHAR(14) NOT NULL DEFAULT '',
  `ins_expire_time` VARCHAR(14) NOT NULL DEFAULT '' COMMENT '到保日期',
  `ins_money` CHAR(8) NOT NULL DEFAULT '' COMMENT '投保金额',
  PRIMARY KEY (`id`))
ENGINE = MyISAM
COMMENT = '车辆信息表';


-- -----------------------------------------------------
-- Table `GWCH`.`Car_Indent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GWCH`.`Car_Indent` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `indent` CHAR(10) NOT NULL DEFAULT '' COMMENT '订单编号',
  `state` INT NOT NULL DEFAULT 0 COMMENT '状态\n待审批(0)、审批不通过(1)、审批通过(2)、关闭(3)、完成(4)',
  `evaluate` CHAR(255) NOT NULL DEFAULT '' COMMENT '评价',
  `car` CHAR(10) NOT NULL DEFAULT '' COMMENT '车辆',
  `driver` CHAR(10) NOT NULL DEFAULT '' COMMENT '驾驶员',
  `create` VARBINARY(14) NOT NULL DEFAULT '' COMMENT '创建时间',
  `complete` VARCHAR(14) NOT NULL DEFAULT '' COMMENT '完成时间',
  `evaluate_time` VARCHAR(14) NOT NULL DEFAULT '' COMMENT '完成时间',
  `carpooling` TINYINT(1) NOT NULL DEFAULT '1' COMMENT '是否同意拼车',
  `section` CHAR(45) NOT NULL DEFAULT '' COMMENT '用车部门',
  `num` INT NOT NULL DEFAULT 0 COMMENT '同行人数',
  `destination` INT NOT NULL DEFAULT 0 COMMENT '目的地\n三河（0）、燕郊（1）、北京（2）、廊坊（3）、石家庄（4）、秦皇岛（5）、其它（6）',
  `adress` CHAR(255) NOT NULL DEFAULT '' COMMENT '具体地址',
  `reason` CHAR(255) NOT NULL DEFAULT '' COMMENT '事由',
  `note` CHAR(255) NULL DEFAULT '' COMMENT '备注',
  `distance` INT NOT NULL DEFAULT 0 COMMENT '里程',
  PRIMARY KEY (`id`))
ENGINE = MyISAM
COMMENT = '订单表';


-- -----------------------------------------------------
-- Table `GWCH`.`Car_Apply`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GWCH`.`Car_Apply` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `start_time` VARCHAR(14) NOT NULL DEFAULT '' COMMENT '出车时间',
  `return_time` VARCHAR(14) NOT NULL DEFAULT '' COMMENT '预计返回时间',
  `section` CHAR(45) NOT NULL DEFAULT '' COMMENT '用车部门',
  `num` INT NOT NULL DEFAULT 0 COMMENT '同行人数',
  `adrid` INT NOT NULL DEFAULT 0 COMMENT '目的地\n三河（0）、燕郊（1）、北京（2）、廊坊（3）、石家庄（4）、秦皇岛（5）、其它（6）',
  `adress` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '具体地址',
  `reason` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '事由',
  `note` VARCHAR(255) NULL COMMENT '备注',
  `carpooling` TINYINT(1) NOT NULL DEFAULT '1' COMMENT '是否同意拼车',
  `creat_time` VARCHAR(14) NOT NULL DEFAULT '' COMMENT '创建时间',
  `CUid` INT NOT NULL,
  `Did` INT NOT NULL,
  `CCid` INT NOT NULL DEFAULT 0,
  `CIid` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Car_Apply_Car_User` (`CUid` ASC),
  INDEX `fk_Car_Apply_Car_Driver1` (`Did` ASC),
  INDEX `fk_Car_Apply_Car_Car1` (`CCid` ASC),
  INDEX `fk_Car_Apply_Car_Indent1` (`CIid` ASC))
ENGINE = MyISAM
COMMENT = '申请表';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
