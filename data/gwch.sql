/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50538
Source Host           : localhost:3306
Source Database       : gwch

Target Server Type    : MYSQL
Target Server Version : 50538
File Encoding         : 65001

Date: 2016-03-13 18:58:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for car_apply
-- ----------------------------
DROP TABLE IF EXISTS `car_apply`;
CREATE TABLE `car_apply` (
  `uid` char(32) NOT NULL,
  `start_time` varchar(14) NOT NULL DEFAULT '' COMMENT '出车时间',
  `return_time` varchar(14) NOT NULL DEFAULT '' COMMENT '预计返回时间',
  `section` char(45) NOT NULL DEFAULT '' COMMENT '用车部门',
  `num` int(11) NOT NULL DEFAULT '0' COMMENT '同行人数',
  `adrid` int(11) NOT NULL DEFAULT '0' COMMENT '目的地\n三河（0）、燕郊（1）、北京（2）、廊坊（3）、石家庄（4）、秦皇岛（5）、其它（6）',
  `adress` varchar(255) NOT NULL DEFAULT '' COMMENT '具体地址',
  `reason` varchar(255) NOT NULL DEFAULT '' COMMENT '事由',
  `tel` char(11) NOT NULL,
  `note` varchar(255) NOT NULL COMMENT '备注',
  `carpooling` char(1) NOT NULL DEFAULT '1' COMMENT '是否同意拼车',
  `creat_time` varchar(14) NOT NULL DEFAULT '' COMMENT '创建时间',
  `state` int(1) unsigned zerofill NOT NULL,
  `padrid` int(11) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `preturn_time` varchar(14) NOT NULL,
  `pnote` varchar(10) NOT NULL,
  `pnum` int(10) NOT NULL,
  `ptel` varchar(11) NOT NULL,
  `pyongtu` varchar(255) NOT NULL,
  `psection` varchar(20) NOT NULL,
  `preason` varchar(255) NOT NULL,
  `close_reason` varchar(255) NOT NULL,
  `pclose_reason` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`),
  KEY `uniquem` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='申请表';

-- ----------------------------
-- Records of car_apply
-- ----------------------------
INSERT INTO `car_apply` VALUES ('56e3ad274c05b', '1457740800', '1457766000', '信息管理', '3', '0', '三河农业银行', '办理网络账单', '18252698562', '陈静', '0', '1457761575', '3', '0', '积极fghfg的', '1457762400', '陈萨达', '2', '18255445855', '', '总裁办', '阿斯达as大声道', '', '');
INSERT INTO `car_apply` VALUES ('56e3ad4384d01', '1457827200', '1457866800', '信息管理', '3', '0', '三河农业银行', '办理网络账单', '18252698562', '萨达', '1', '1457761603', '2', '0', '', '', '', '0', '', '', '', '', '', '');
INSERT INTO `car_apply` VALUES ('56e3ad536e92f', '1457917200', '1457874000', '信息管理', '3', '0', '三河农业银行', '办理网络账单', '18252698562', '萨达', '2', '1457761619', '1', '0', '', '', '', '0', '', '', '', '', '自己关闭，请重新申请', '');
INSERT INTO `car_apply` VALUES ('56e3b34e78f7a', '1457856000', '1457859600', '总裁办', '3', '2', '水电费水电费', '是短发是撒旦法', '18525635896', '大神', '0', '1457763150', '7', '0', '6546466', '1458043440', 'YUUYYU', '2', '18455214555', '', '信息管理', 'HGFHFJ', '', '');
INSERT INTO `car_apply` VALUES ('56e3beb37d146', '1457852400', '1457863200', '信息管理', '3', '0', '天洋城4号楼', '接人', '15111112233', '王浩', '1', '1457766067', '1', '0', '', '', '', '0', '', '', '', '', '', '');
INSERT INTO `car_apply` VALUES ('56e3bf14b4e17', '1457852400', '1457863200', '信息管理', '3', '0', '天洋城4号楼', '接人', '15111112233', '王浩', '1', '1457766164', '3', '0', '', '', '', '0', '', '', '', '', '', '');
INSERT INTO `car_apply` VALUES ('56e40513cae26', '1457787600', '1457874000', '信息管理', '3', '0', 'SDFSDFSDF', 'IUYUIYIH', '18225851335', 'DSFSDF', '1', '1457784083', '1', '0', '', '', '', '0', '', '', '', '', '自己关闭，请重新申请', '');
INSERT INTO `car_apply` VALUES ('56e52692950cd', '1457944560', '1457949600', '', '5', '0', '还是地方开始', 'asdas', '18223255546', '才看见好看', '1', '1457858194', '1', '0', '', '', '', '0', '', '', '', '', '', '');
INSERT INTO `car_apply` VALUES ('56e5437565ebc', '1457956800', '1457956800', '信息管理', '3', '0', '萨达阿斯达', '阿斯达', '18212184945', '存储', '1', '1457865589', '2', '0', '', '', '', '0', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for car_car
-- ----------------------------
DROP TABLE IF EXISTS `car_car`;
CREATE TABLE `car_car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` char(10) NOT NULL DEFAULT '' COMMENT '车牌号码',
  `type` char(10) NOT NULL DEFAULT '' COMMENT '车辆类型',
  `model` char(10) NOT NULL DEFAULT '' COMMENT '车辆型号',
  `numsq` char(10) NOT NULL DEFAULT '' COMMENT '座位数',
  `color` char(5) NOT NULL DEFAULT '' COMMENT '颜色',
  `state` int(11) NOT NULL DEFAULT '0' COMMENT '车辆状态\n正常(0)、维修(1)、保养(2)、封停(3)、变卖(4)、报废(5)',
  `time` varchar(14) NOT NULL DEFAULT '' COMMENT '购车时间',
  `money` char(8) NOT NULL DEFAULT '' COMMENT '购车金额',
  `car_note` varchar(255) DEFAULT NULL COMMENT '备注',
  ` ins_creat_time` varchar(14) NOT NULL DEFAULT '',
  `ins_expire_time` varchar(14) NOT NULL DEFAULT '' COMMENT '到保日期',
  `ins_money` char(8) NOT NULL DEFAULT '' COMMENT '投保金额',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='车辆信息表';

-- ----------------------------
-- Records of car_car
-- ----------------------------
INSERT INTO `car_car` VALUES ('1', '冀HG1254', 'MVP', '别克GL8', '8', '红色', '0', '2012.12.25', '20w', '', '', '2015.12.12', '5000k');
INSERT INTO `car_car` VALUES ('2', '京GH7872', 'B级', '北京现代', '6', '黑色', '0', '', '', '', '', '', '');
INSERT INTO `car_car` VALUES ('3', '京hg2315', '阿斯达', '萨达', '', '是', '0', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for car_driver
-- ----------------------------
DROP TABLE IF EXISTS `car_driver`;
CREATE TABLE `car_driver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '姓名',
  `sex` enum('男','女') NOT NULL DEFAULT '男' COMMENT '性别',
  `card` varchar(50) NOT NULL DEFAULT '' COMMENT '身份证号',
  `tell` varchar(15) NOT NULL DEFAULT '' COMMENT '驾驶员电话',
  `state` int(11) NOT NULL DEFAULT '0' COMMENT '驾驶员状态\n在职(0)、出差(1)、待岗(2)、休假(3)、离职(4)',
  `type` int(11) NOT NULL DEFAULT '0' COMMENT '驾驶员驾驶证类型\nC1(0)、C2(1)、C3(2)、B1(3)、B2(4)、A1(5)、A2(6)、A3(7)',
  `collection_time` varchar(14) NOT NULL DEFAULT '' COMMENT '领证时间',
  `VFD` varchar(14) NOT NULL DEFAULT '' COMMENT '证件有效期开始时间',
  `Ve` varchar(14) NOT NULL DEFAULT '' COMMENT '证件有效期结束时间',
  `QC` varchar(25) NOT NULL DEFAULT '' COMMENT 'QualificationCode\n从业证号',
  `QCE` varchar(14) NOT NULL DEFAULT '' COMMENT '从业证失效时间',
  `note` char(255) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`),
  KEY `driver_name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='驾驶员表';

-- ----------------------------
-- Records of car_driver
-- ----------------------------
INSERT INTO `car_driver` VALUES ('5', '沉浸', '男', '1302864656464698', '18233008640', '0', '0', '', '', '', '', '', null);
INSERT INTO `car_driver` VALUES ('6', '王萨达', '男', '1308216464794645', '15512254646', '0', '0', '', '', '', '', '', null);

-- ----------------------------
-- Table structure for car_indent
-- ----------------------------
DROP TABLE IF EXISTS `car_indent`;
CREATE TABLE `car_indent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evaluate` char(255) NOT NULL DEFAULT '' COMMENT '评价',
  `chepai` char(20) NOT NULL,
  `car` char(10) NOT NULL DEFAULT '' COMMENT '车辆',
  `driver` char(10) NOT NULL DEFAULT '' COMMENT '驾驶员',
  `driver_tell` varchar(15) NOT NULL,
  `create` varchar(14) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '' COMMENT '创建时间',
  `shenhe` varchar(14) NOT NULL,
  `menweili` varchar(14) NOT NULL,
  `slicheng` varchar(14) NOT NULL,
  `complete` varchar(14) NOT NULL DEFAULT '' COMMENT '完成时间',
  `swancheng` varchar(14) NOT NULL,
  `evaluate_time` varchar(14) NOT NULL DEFAULT '' COMMENT '完成时间',
  `uid` char(32) NOT NULL,
  `uniqueppp` char(32) NOT NULL,
  `name` varchar(10) NOT NULL,
  `residue` varchar(10) NOT NULL,
  PRIMARY KEY (`id`,`uid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8 COMMENT='订单表';

-- ----------------------------
-- Records of car_indent
-- ----------------------------
INSERT INTO `car_indent` VALUES ('62', '4', '冀HG1254', '别克GL8', '王萨达', '', '1457761576', '1457761658', '52145', '1457784397', '1457784405', '5555855', '', '56e3ad274c05b', '', '', '5');
INSERT INTO `car_indent` VALUES ('63', '', '京GH7872', '北京现代', '李荣飞', '', '1457761604', '1457761671', '', '', '', '', '', '56e3ad4384d01', '', '', '3');
INSERT INTO `car_indent` VALUES ('64', '', '', '', '', '', '1457761620', '', '', '', '', '', '', '56e3ad536e92f', '', '', '');
INSERT INTO `car_indent` VALUES ('65', '', '冀HG1254', '别克GL8', '王萨达', '', '1457763151', '1457763376', '', '', '', '', '', '56e3b34e78f7a', '', '', '5');
INSERT INTO `car_indent` VALUES ('66', '', '', '', '', '', '1457766068', '', '', '', '', '', '', '56e3beb37d146', '', '', '');
INSERT INTO `car_indent` VALUES ('67', '4', '冀HG1254', '别克GL8', '王萨达', '', '1457766165', '1457766230', '25457', '1457766360', '1457766383', '5654984', '', '56e3bf14b4e17', '', '', '5');
INSERT INTO `car_indent` VALUES ('68', '', '', '', '', '', '1457784084', '', '', '', '', '', '', '56e40513cae26', '', '', '');
INSERT INTO `car_indent` VALUES ('69', '', '', '', '', '', '1457858195', '', '', '', '', '', '', '56e52692950cd', '', '', '');
INSERT INTO `car_indent` VALUES ('70', '', '京hg2315', '萨达', '王萨达', '15512254646', '1457865590', '1457865804', '', '', '', '', '', '56e5437565ebc', '', '', '-3');

-- ----------------------------
-- Table structure for car_user
-- ----------------------------
DROP TABLE IF EXISTS `car_user`;
CREATE TABLE `car_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `username` char(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `pwd` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `lock` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '锁定',
  `pock` int(11) NOT NULL DEFAULT '0' COMMENT '角色',
  `time` char(12) NOT NULL DEFAULT '' COMMENT '时间戳',
  `ip` char(20) NOT NULL DEFAULT '' COMMENT 'Ip',
  `section` varchar(45) NOT NULL DEFAULT '' COMMENT '部门',
  `tel` char(15) NOT NULL DEFAULT '' COMMENT '部门电话',
  `phone` char(11) NOT NULL DEFAULT '' COMMENT '手机号',
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of car_user
-- ----------------------------
INSERT INTO `car_user` VALUES ('1', 'admin', '66cff10c2d878e421f1463e18b4450ce', '0', '0', '', '', '', '', '');
INSERT INTO `car_user` VALUES ('4', 'caiwu', '66cff10c2d878e421f1463e18b4450ce', '0', '2', '1457662548', '', '财务管理', '1823008640', '');
INSERT INTO `car_user` VALUES ('3', 'xinxin', '66cff10c2d878e421f1463e18b4450ce', '0', '2', '1457662514', '', '信息管理', '1823008640', '');
INSERT INTO `car_user` VALUES ('5', 'xingxiao', '66cff10c2d878e421f1463e18b4450ce', '0', '2', '1457662582', '', '销售中心', '1845468454', '');
INSERT INTO `car_user` VALUES ('7', 'menwei', '66cff10c2d878e421f1463e18b4450ce', '0', '1', '1457684364', '', '门卫', '18255526523', '');
INSERT INTO `car_user` VALUES ('8', 'chen', '66cff10c2d878e421f1463e18b4450ce', '0', '1', '1457860115', '', '大妈', '18233008521', '');
