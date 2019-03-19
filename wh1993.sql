/*
Navicat MySQL Data Transfer

Source Server         : 万和在线
Source Server Version : 50636
Source Host           : 139.196.143.137:3306
Source Database       : wh1993

Target Server Type    : MYSQL
Target Server Version : 50636
File Encoding         : 65001

Date: 2019-03-19 14:18:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for pa_atta
-- ----------------------------
DROP TABLE IF EXISTS `pa_atta`;
CREATE TABLE `pa_atta` (
  `aid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sign` varchar(60) DEFAULT '0' COMMENT '附件标识确保与Topic附加标识一致',
  `uid` int(11) unsigned NOT NULL DEFAULT '0',
  `fileName` varchar(100) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `downs` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '下载次数',
  `isimages` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pa_atta
-- ----------------------------

-- ----------------------------
-- Table structure for pa_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `pa_auth_rule`;
CREATE TABLE `pa_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pa_auth_rule
-- ----------------------------
INSERT INTO `pa_auth_rule` VALUES ('1', 'admin/index/index', '超级管理', '1', '1', '');
INSERT INTO `pa_auth_rule` VALUES ('2', 'view', '查看帖子', '1', '1', '');
INSERT INTO `pa_auth_rule` VALUES ('3', 'banUser', '封禁用户', '1', '1', '');
INSERT INTO `pa_auth_rule` VALUES ('4', 'move', '移动帖子', '1', '1', '');
INSERT INTO `pa_auth_rule` VALUES ('5', 'down', '下载附件', '1', '1', '');
INSERT INTO `pa_auth_rule` VALUES ('6', 'delete', '删除帖子', '1', '1', '');
INSERT INTO `pa_auth_rule` VALUES ('7', 'comment', '允许回复', '1', '1', '');
INSERT INTO `pa_auth_rule` VALUES ('8', 'create', '允许发帖', '1', '1', '');
INSERT INTO `pa_auth_rule` VALUES ('9', 'top', '置顶帖子', '1', '1', '');
INSERT INTO `pa_auth_rule` VALUES ('10', 'essence', '设置精华', '1', '1', '');
INSERT INTO `pa_auth_rule` VALUES ('11', 'update', '编辑帖子', '1', '1', '');
INSERT INTO `pa_auth_rule` VALUES ('12', 'message', '发送信息', '1', '1', '');
INSERT INTO `pa_auth_rule` VALUES ('13', 'Ebook/Create', '发电子书', '1', '1', '');

-- ----------------------------
-- Table structure for pa_comment
-- ----------------------------
DROP TABLE IF EXISTS `pa_comment`;
CREATE TABLE `pa_comment` (
  `cid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(11) unsigned NOT NULL DEFAULT '0',
  `uid` int(11) unsigned NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `likes` int(11) unsigned NOT NULL DEFAULT '0',
  `downs` int(11) unsigned NOT NULL DEFAULT '0',
  `reCid` int(5) unsigned NOT NULL DEFAULT '0' COMMENT '回复id',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pa_comment
-- ----------------------------

-- ----------------------------
-- Table structure for pa_ebook
-- ----------------------------
DROP TABLE IF EXISTS `pa_ebook`;
CREATE TABLE `pa_ebook` (
  `eid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fid` int(11) NOT NULL,
  `uid` int(11) NOT NULL DEFAULT '1',
  `description` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `name` char(100) CHARACTER SET utf8mb4 NOT NULL,
  `userip` char(16) CHARACTER SET utf8mb4 NOT NULL,
  `images` varchar(100) CHARACTER SET utf8mb4 NOT NULL DEFAULT '/public/static/images/ebook_defaule.png',
  `ebook_url` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `tops` smallint(2) NOT NULL DEFAULT '0',
  `essence` smallint(2) NOT NULL DEFAULT '0',
  `views` smallint(11) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0',
  `status` smallint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pa_ebook
-- ----------------------------
INSERT INTO `pa_ebook` VALUES ('1', '4', '1', '深入 Python 3 中文版', '深入 Python 3 中文版', '', '/public/static/images/ebook_default.jpg', '\\public\\uploads\\20190313/803ea2b55d83d38721f836b53ae4ceef.pdf', '0', '0', '3', '1552456818', '1552456818', '1');
INSERT INTO `pa_ebook` VALUES ('2', '4', '1', 'Python学习手册(第4版)', 'Python学习手册(第4版)', '', '/public/static/images/ebook_default.jpg', '\\public\\uploads\\20190313/50da1500ae97cee2a159da0ca5bc2de6.pdf', '0', '0', '3', '1552456818', '1552456818', '1');
INSERT INTO `pa_ebook` VALUES ('3', '4', '1', '廖雪峰 JavaScript Python Git 教程', '廖雪峰 JavaScript Python Git 教程', '', '/public/static/images/ebook_default.jpg', '\\public\\uploads\\20190313/89e6eaa11a9d09bae371360ecdc45962.pdf', '0', '0', '3', '1552456818', '1552456818', '1');
INSERT INTO `pa_ebook` VALUES ('4', '4', '1', 'python绝技，violent-python', 'python绝技，violent-python', '', '/public/static/images/ebook_default.jpg', '\\public\\uploads\\20190313/460c680c382a046a303c052503ea4f11.pdf', '0', '0', '3', '1552456818', '1552456818', '1');
INSERT INTO `pa_ebook` VALUES ('5', '1', '1', '笨办法学python', '笨办法学python', '', '/public/static/images/ebook_default.jpg', '/public/uploads/20190313/86d5435cef3753399239b8142e2afb1f.pdf', '0', '0', '1', '1552459451', '1552459451', '1');
INSERT INTO `pa_ebook` VALUES ('6', '1', '1', '编程小白的第一本 Python 入门书', '编程小白的第一本 Python 入门书', '', '/public/static/images/ebook_default.jpg', '/public/uploads/20190313/796e59b5138b7013d057750b675b1eab.pdf', '0', '0', '0', '1552459507', '1552459507', '1');
INSERT INTO `pa_ebook` VALUES ('7', '1', '1', '零基础学python', '零基础学python', '', '/public/static/images/ebook_default.jpg', '/public/uploads/20190313/d9ae68d8a296b890d1222c0f572856c5.pdf', '0', '0', '0', '1552459547', '1552459547', '1');
INSERT INTO `pa_ebook` VALUES ('8', '1', '1', 'Python 编码规范(Google) _ 菜鸟教程', 'Python 编码规范(Google) _ 菜鸟教程', '', '/public/static/images/ebook_default.jpg', '/public/uploads/20190313/171ef9389f5bdb5fc5586f9ef9744e8c.pdf', '0', '0', '0', '1552459567', '1552459567', '1');
INSERT INTO `pa_ebook` VALUES ('9', '1', '1', 'Python练习集100题', 'Python练习集100题', '', '/public/static/images/ebook_default.jpg', '/public/uploads/20190313/8ae7ca623f582c8d3107e3adc31349e5.pdf', '0', '0', '1', '1552459585', '1552459585', '1');
INSERT INTO `pa_ebook` VALUES ('10', '1', '1', 'python官方文档', 'python官方文档', '', '/public/static/images/ebook_default.jpg', '/public/uploads/20190313/5f25e0267f312ad5d95d4d1b98afb3ca.pdf', '0', '0', '0', '1552459585', '1552459585', '1');
INSERT INTO `pa_ebook` VALUES ('11', '6', '1', '[MySQL.Cookbook(第2版)].(美)迪布瓦.中文版.扫描版', '[MySQL.Cookbook(第2版)].(美)迪布瓦.中文版.扫描版', '', '/public/static/images/ebook_default.jpg', '/public/uploads/20190313/b6b46339e2186c4eb2a6d1bae3c651f3.pdf', '0', '0', '1', '1552460617', '1552460617', '1');
INSERT INTO `pa_ebook` VALUES ('12', '3', '1', 'JavaScript高级程序设计（第3版）', 'JavaScript高级程序设计（第3版）', '', '/public/static/images/ebook_default.jpg', '/public/uploads/20190313/97c63486175a48b18f3464e226a485fe.pdf', '0', '0', '0', '1552460776', '1552460776', '1');
INSERT INTO `pa_ebook` VALUES ('13', '3', '1', 'Node.js实战 中文版', 'Node.js实战 中文版', '', '/public/static/images/ebook_default.jpg', '/public/uploads/20190313/ebf9a39f868a74513f605c1feb3680a4.pdf', '0', '0', '2', '1552460818', '1552460818', '1');
INSERT INTO `pa_ebook` VALUES ('14', '4', '1', 'Python学习手册(第4版)', 'Python学习手册(第4版)', '', '/public/static/images/ebook_default.jpg', '/public/uploads/20190313/24c521a1b8137b9a36fa3404f6c240c9.pdf', '0', '0', '0', '1552460818', '1552460818', '1');
INSERT INTO `pa_ebook` VALUES ('15', '4', '1', 'python标准库', 'python标准库', '', '/public/static/images/ebook_default.jpg', '/public/uploads/20190313/350eb9612afc921a74baf7e67803a415.pdf', '0', '0', '0', '1552460818', '1552460818', '1');
INSERT INTO `pa_ebook` VALUES ('16', '4', '1', 'PYTHON网络编程基础', 'PYTHON网络编程基础', '', '/public/static/images/ebook_default.jpg', '/public/uploads/20190313/f5bfe0b99541ecd435d56d9d6fdaa219.pdf', '0', '0', '9', '1552461544', '1552461544', '1');

-- ----------------------------
-- Table structure for pa_forum
-- ----------------------------
DROP TABLE IF EXISTS `pa_forum`;
CREATE TABLE `pa_forum` (
  `fid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(5) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `cgroup` varchar(100) NOT NULL DEFAULT '0' COMMENT '允许发帖用户组',
  `topics` int(11) unsigned NOT NULL DEFAULT '0',
  `introduce` text NOT NULL COMMENT '介绍',
  `notice` text NOT NULL,
  `sort` smallint(6) NOT NULL DEFAULT '0' COMMENT '排序顺序',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `icon` char(60) NOT NULL DEFAULT '',
  `seoDes` varchar(255) NOT NULL DEFAULT '',
  `seoKeywords` varchar(255) NOT NULL DEFAULT '',
  `img` varchar(255) NOT NULL DEFAULT '/public/static/images/tea_column_default.jpg',
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pa_forum
-- ----------------------------
INSERT INTO `pa_forum` VALUES ('1', '0', '综合', '1', '29', '官方信息发布板块', '默认板块公告', '0', '0', '', '官方信息发布板块', '官方', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('2', '0', 'Java', '', '4', '利用Python对web网站的开发', '', '0', '1545286929', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('3', '0', 'Web', '0', '2', '在运维的工作中，有大量重复性工作的地方，并需要做管理系统、监控系统、发布系统等，将工作自动化起来，提高工作效率，这样的场景Python是一门非常合适的语言。', '', '0', '1545287105', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('4', '0', 'Python', '1,0', '0', 'Python被广泛的运用于科学和数字计算中，例如生物信息学、物理、建筑、地理信息系统、图像可视化分析、生命科学等，常用numpy、SciPy、Biopython、SunPy等。', '', '0', '1545287162', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('5', '0', 'UI', '', '0', '网络编程是Python学习的另一方向，网络编程在生活和开发中无处不在，哪里有通讯就有网络，它可以称为是一切开发的“基石”。对于所有编程开发人员必须要知其然并知其所以然，所以网络部分将从协议、封包、解包等底层进行深入剖析。', '', '0', '1546412939', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('6', '0', '大数据', '0', '0', '在爬虫领域，Python几乎是霸主地位，将网络一切数据作为资源，通过自动化程序进行有针对性的数据采集以及处理。从事该领域应学习爬虫策略、高性能异步IO、分布式爬虫等，并针对Scrapy框架源码进行深入剖析，从而理解其原理并实现自定义爬虫框架。', '', '0', '1546412993', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('7', '6', '云计算', '1', '0', '云计算描述', '', '0', '1546413125', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('8', '0', 'Android', '', '0', '金融分析包含金融知识和Python相关模块的学习，学习内容囊括Numpy\\Pandas\\Scipy数据分析模块等，以及常见金融分析策略如“双均线”、“周规则交易”、“羊驼策略”、“Dual Thrust 交易策略”等。', '', '0', '1546413165', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('9', '4', '人工智能', '0', '0', '在网络游戏开发中，Python也有很多应用，相比于Lua or C++，Python比Lua有更高阶的抽象能力，可以用更少的代码描述游戏业务逻辑，Python非常适合编写1万行以上的项目，而且能够很好的把网游项目的规模控制在10万行代码以内。 ', '', '0', '1546413192', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('10', '5', '视觉工程', '1', '0', '视觉工程', '', '0', '1552616192', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('11', '5', '三维表现', '1', '0', '三维表现', '', '0', '1552616209', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('12', '5', 'HTML5+CSS3', '1', '0', 'HTML5+CSS3', '', '0', '1552616241', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('13', '5', '移动端设计', '1', '0', '移动端设计', '', '0', '1552616262', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('14', '5', '工具使用', '1', '0', '工具使用', '', '0', '1552616276', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('15', '4', 'Python基础', '1', '0', 'Python基础', '', '0', '1552616300', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('16', '4', 'Web开发', '1', '0', 'Web开发', '', '0', '1552616321', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('17', '4', '爬虫开发', '1', '0', '爬虫开发', '', '0', '1552616342', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('18', '4', '数据分析', '1', '0', '数据分析', '', '0', '1552616358', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('19', '4', '科学计算', '1', '0', '科学计算', '', '0', '1552616374', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('20', '4', '自动化运维', '1', '0', '自动化运维', '', '0', '1552616445', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('21', '4', '游戏开发', '1', '0', '游戏开发', '', '0', '1552616458', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('22', '3', 'HTML', '1', '0', 'HTML', '', '0', '1552616489', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('23', '3', 'CSS3', '1', '0', 'CSS3', '', '0', '1552616505', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('24', '3', 'JS', '1', '0', 'es5、es6', '', '0', '1552616547', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('25', '3', 'JQuery', '1', '0', 'JQuery', '', '0', '1552616562', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('26', '3', 'less和sass/scss', '1', '0', 'less和sass/scss', '', '0', '1552616593', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('27', '3', 'Ajax', '1', '0', 'Ajax', '', '0', '1552616610', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('28', '3', 'Node.js', '1', '0', 'Node.js', '', '0', '1552616630', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('29', '3', 'Git', '1', '0', 'Git', '', '0', '1552616655', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('30', '3', 'Webpack', '1', '0', 'Webpack', '', '0', '1552616670', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('31', '3', 'Vue', '1', '0', 'Vue', '', '0', '1552616682', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('32', '3', '小程序开发', '1', '0', '小程序开发', '', '0', '1552616697', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('33', '3', '公众号开发', '1', '0', '公众号开发', '', '0', '1552616713', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('34', '3', 'BootStrap', '1', '0', 'BootStrap', '', '0', '1552616731', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('35', '2', 'Java基础', '1', '4', 'Java基础', '', '0', '1552616768', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('36', '2', '面向对象', '1', '0', '面向对象', '', '0', '1552616782', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('37', '2', '集合与泛型', '1', '0', '集合与泛型', '', '0', '1552616807', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('38', '2', '反射', '1', '0', '反射', '', '0', '1552616818', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('39', '2', 'IO流', '1', '0', 'IO流', '', '0', '1552616834', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('40', '2', '多线程', '1', '0', '多线程', '', '0', '1552616850', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('41', '2', 'Socket', '1', '0', 'Socket', '', '0', '1552616883', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('42', '2', '框架', '1', '0', '框架', '', '0', '1552616900', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('43', '2', '分布式和微服务', '1', '0', '分布式和微服务', '', '0', '1552616920', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('44', '9', '图像处理', '1', '0', '图像处理', '', '0', '1552616956', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('45', '9', '语言识别', '1', '0', '语言识别', '', '0', '1552616974', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('46', '9', '自然语言处理', '1', '0', '自然语言处理', '', '0', '1552616991', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('47', '9', '机器学习', '1', '0', '机器学习', '', '0', '1552617005', '', '', '', '/public/static/images/tea_column_default.jpg');
INSERT INTO `pa_forum` VALUES ('48', '9', '深度学习', '1', '0', '深度学习', '', '0', '1552617022', '', '', '', '/public/static/images/tea_column_default.jpg');

-- ----------------------------
-- Table structure for pa_group
-- ----------------------------
DROP TABLE IF EXISTS `pa_group`;
CREATE TABLE `pa_group` (
  `gid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `groupName` varchar(30) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pa_group
-- ----------------------------
INSERT INTO `pa_group` VALUES ('1', '管理员', '1', '1,2,3,4,5,6,7,8,9,10,11,12,13');
INSERT INTO `pa_group` VALUES ('2', '注册会员', '1', '2,7,8,9,10,11');

-- ----------------------------
-- Table structure for pa_links
-- ----------------------------
DROP TABLE IF EXISTS `pa_links`;
CREATE TABLE `pa_links` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `sold` int(11) unsigned NOT NULL DEFAULT '0',
  `title` char(50) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `picurl` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pa_links
-- ----------------------------
INSERT INTO `pa_links` VALUES ('1', '0', '作者博客', 'https://www.cnblogs.com/hcfinal/', 'https://pic.cnblogs.com/avatar/1306501/20180608112540.png');
INSERT INTO `pa_links` VALUES ('2', '1', '万和官方网站', 'http://www.wanho.net/', 'http://www.wanho.net/images/logo.png');

-- ----------------------------
-- Table structure for pa_message
-- ----------------------------
DROP TABLE IF EXISTS `pa_message`;
CREATE TABLE `pa_message` (
  `mid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) unsigned NOT NULL COMMENT '发送者uid',
  `avatar` varchar(100) NOT NULL DEFAULT '',
  `userName` varchar(20) NOT NULL,
  `toUid` int(11) unsigned NOT NULL COMMENT '目标uid',
  `title` varchar(30) DEFAULT NULL,
  `content` text NOT NULL COMMENT '消息内容',
  `status` int(1) unsigned zerofill NOT NULL DEFAULT '0' COMMENT '是否已阅0未阅1已阅',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pa_message
-- ----------------------------

-- ----------------------------
-- Table structure for pa_options
-- ----------------------------
DROP TABLE IF EXISTS `pa_options`;
CREATE TABLE `pa_options` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `value` text NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `option_name` (`name`(10))
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pa_options
-- ----------------------------
INSERT INTO `pa_options` VALUES ('1', 'defaulegroup', '2', 'reg');
INSERT INTO `pa_options` VALUES ('2', 'fromName', 'HC', 'email');
INSERT INTO `pa_options` VALUES ('3', 'fromAdress', 'hanchang@wanho.net', 'email');
INSERT INTO `pa_options` VALUES ('4', 'smtpHost', 'smtp.exmail.qq.com', 'email');
INSERT INTO `pa_options` VALUES ('5', 'smtpPort', '465', 'email');
INSERT INTO `pa_options` VALUES ('6', 'replyTo', 'hanchang@wanho.net', 'email');
INSERT INTO `pa_options` VALUES ('7', 'smtpUser', 'hcfinale', 'email');
INSERT INTO `pa_options` VALUES ('8', 'smtpPass', 'H07c19', 'email');
INSERT INTO `pa_options` VALUES ('9', 'encriptionType', 'no', 'email');
INSERT INTO `pa_options` VALUES ('10', 'siteTitle', '万和图文课', 'base');
INSERT INTO `pa_options` VALUES ('11', 'siteDes', '万和图文课', 'base');
INSERT INTO `pa_options` VALUES ('12', 'siteKeywords', '万和图文课', 'base');
INSERT INTO `pa_options` VALUES ('13', 'forumNum', '25', 'forum');
INSERT INTO `pa_options` VALUES ('14', 'siteFooterJs', '', 'base');
INSERT INTO `pa_options` VALUES ('15', 'commentNum', '10', 'forum');
INSERT INTO `pa_options` VALUES ('16', 'regStatus', '1', 'reg');
INSERT INTO `pa_options` VALUES ('17', 'regMail', '0', 'reg');
INSERT INTO `pa_options` VALUES ('18', 'reg_mail_content', '<!DOCTYPE html>\r\n<html>\r\n\r\n  <head>\r\n    <meta charset=\"utf-8\" />\r\n    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n    <title>MlTreeForum邮件模板</title>\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\r\n    <meta name=\"keywords\" content=\"MlTreeForum PHP 开源 轻论坛 轻社区 Material Design Thinkphp\" />\r\n    <meta name=\"description\" content=\"本站是 MlTree Forum 论坛社区产品的官方交流站点。MlTree Forum是一款由Thinkphp构建、Material Design风格的轻论坛。\" />\r\n    <meta name=\"author\" content=\"北林\">\r\n    <link rel=\"stylesheet\" href=\"https://cdn.bootcss.com/mdui/0.4.0/css/mdui.min.css\">\r\n    <script src=\"https://cdn.bootcss.com/mdui/0.4.0/js/mdui.min.js\"></script>\r\n  </head>\r\n\r\n  <body class=\"mdui-theme-primary-pink mdui-theme-accent-pink mdui-center\">\r\n    <div class=\"mdui-col-xs-12 mdui-col-sm-9 mdui-center mdui-text-center\">\r\n      <div class=\"mdui-card\">\r\n\r\n        <!-- 卡片的媒体内容，可以包含图片、视频等媒体内容，以及标题、副标题 -->\r\n        <div class=\"mdui-card-media\">\r\n          <img src=\"https://piccdn.freejishu.com/images/2016/04/04/z5gpqMql.jpg\" height=\"300px\" />\r\n        </div>\r\n\r\n        <!-- 卡片的标题和副标题 -->\r\n        <div class=\"mdui-card-primary\">\r\n          <div class=\"mdui-card-primary-title\">注册{siteTitle}账户</div>\r\n          <div class=\"mdui-card-primary-subtitle\">Welcome</div>\r\n        </div>\r\n\r\n        <!-- 卡片的内容 -->\r\n        <div class=\"mdui-card-content\">\r\n          亲爱的用户：\r\n          <br/> 您正在注册{siteTitle}。\r\n          <br/>\r\n          您的验证码为：{code}\r\n        </div>\r\n\r\n      </div>\r\n    </div>\r\n\r\n  </body>\r\n\r\n</html>', 'mailTemplate');
INSERT INTO `pa_options` VALUES ('19', 'reset_mail_content', '<!DOCTYPE html>\r\n<html>\r\n\r\n  <head>\r\n    <meta charset=\"utf-8\" />\r\n    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n    <title>MlTreeForum邮件模板</title>\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\r\n    <meta name=\"keywords\" content=\"MlTreeForum PHP 开源 轻论坛 轻社区 Material Design Thinkphp\" />\r\n    <meta name=\"description\" content=\"本站是 MlTree Forum 论坛社区产品的官方交流站点。MlTree Forum是一款由Thinkphp构建、Material Design风格的轻论坛。\" />\r\n    <meta name=\"author\" content=\"北林\">\r\n    <link rel=\"stylesheet\" href=\"https://cdn.bootcss.com/mdui/0.4.0/css/mdui.min.css\">\r\n    <script src=\"https://cdn.bootcss.com/mdui/0.4.0/js/mdui.min.js\"></script>\r\n  </head>\r\n\r\n  <body class=\"mdui-theme-primary-pink mdui-theme-accent-pink mdui-center\">\r\n    <div class=\"mdui-col-xs-12 mdui-col-sm-7 dui-center mdui-text-center\">\r\n      <div class=\"mdui-card\">\r\n\r\n        <!-- 卡片的媒体内容，可以包含图片、视频等媒体内容，以及标题、副标题 -->\r\n        <div class=\"mdui-card-media\">\r\n          <img src=\"https://piccdn.freejishu.com/images/2016/04/04/z5gpqMql.jpg\" height=\"300px\" />\r\n        </div>\r\n\r\n        <!-- 卡片的标题和副标题 -->\r\n        <div class=\"mdui-card-primary\">\r\n          <div class=\"mdui-card-primary-title\">找回{siteTitle}账户</div>\r\n          <div class=\"mdui-card-primary-subtitle\">Welcome</div>\r\n        </div>\r\n\r\n        <!-- 卡片的内容 -->\r\n        <div class=\"mdui-card-content\">\r\n          亲爱的{userName}：\r\n          <br/> 您申请了找回账户，\r\n          <br/>您的验证码为 <code>{code}</code>\r\n        </div>\r\n\r\n      </div>\r\n    </div>\r\n\r\n  </body>\r\n\r\n</html>', 'mailTemplate');
INSERT INTO `pa_options` VALUES ('20', 'siteStatus', '1', 'base');
INSERT INTO `pa_options` VALUES ('21', 'reg_mail_title', '{siteTitle} 激活邮件', 'mailTemplate');
INSERT INTO `pa_options` VALUES ('22', 'notice', '欢迎来到HC的万和图文课论坛', 'base');
INSERT INTO `pa_options` VALUES ('23', 'full', '1', 'base');
INSERT INTO `pa_options` VALUES ('24', 'editor', '1', 'forum');
INSERT INTO `pa_options` VALUES ('26', 'closeContent', '站点正在进行闭站维护…… <br/>预计一小时后完成。', 'base');
INSERT INTO `pa_options` VALUES ('27', 'siteIcp', '', 'base');
INSERT INTO `pa_options` VALUES ('29', 'golink', '1', 'base');
INSERT INTO `pa_options` VALUES ('31', 'allowQQreg', '1', 'reg');
INSERT INTO `pa_options` VALUES ('32', 'themePrimary', 'indigo', 'theme');
INSERT INTO `pa_options` VALUES ('33', 'themeAccent', 'pink', 'theme');
INSERT INTO `pa_options` VALUES ('34', 'themeLayout', 'light', 'theme');
INSERT INTO `pa_options` VALUES ('35', 'discolour', 'true', 'theme');

-- ----------------------------
-- Table structure for pa_topic
-- ----------------------------
DROP TABLE IF EXISTS `pa_topic`;
CREATE TABLE `pa_topic` (
  `tid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fid` smallint(5) unsigned NOT NULL DEFAULT '1',
  `uid` int(11) unsigned NOT NULL DEFAULT '1',
  `sign` varchar(60) DEFAULT NULL COMMENT '附件标识',
  `userip` char(16) NOT NULL DEFAULT '',
  `subject` char(128) NOT NULL DEFAULT '',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '最后修改时间',
  `content` text NOT NULL,
  `views` int(11) unsigned NOT NULL DEFAULT '0',
  `comment` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '评论数',
  `images` int(11) unsigned NOT NULL DEFAULT '0',
  `closed` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '是否关闭',
  `tops` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '是否置顶',
  `essence` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '精华',
  `likes` int(11) unsigned DEFAULT '0' COMMENT '点赞人数',
  PRIMARY KEY (`tid`),
  KEY `fid` (`fid`,`tid`),
  KEY `uid` (`uid`,`userip`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pa_topic
-- ----------------------------
INSERT INTO `pa_topic` VALUES ('2', '3', '1', 'EPeuy56DtfOZ2rwAxn9CQXRJHMFW8q', '127.0.0.1', '索尼第三季度营收213亿美元 净利润37.8亿美元 地方', '1549009184', '1552965973', '&lt;p style=&quot;margin-top: 0px; margin-bottom: 30px; padding: 0px; text-size-adjust: 100%; font-family: &quot;&gt;新浪科技讯&amp;nbsp;北京时间2月1日下午消息，日本电子巨头&lt;a href=&quot;http://stock.finance.sina.com.cn/usstock/quotes/SNE.html&quot; class=&quot;keyword f_st&quot; target=&quot;_blank&quot; style=&quot;text-decoration-line: none; outline: 0px; -webkit-tap-highlight-color: transparent; color: rgb(73, 150, 199);&quot;&gt;索尼&lt;/a&gt;发布第三季度财报，财报显示，索尼的净利润为37.8亿美元，营收高达213亿美元。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 30px; padding: 0px; text-size-adjust: 100%; font-family: &quot;&gt;　　索尼的影业部门——涉及电视与电影、内容与电视频道等业务——的利润从去年同期的9200万美元，增长至1.02亿美元。销售按美元计，则增长了6%至24.5亿美元。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 30px; padding: 0px; text-size-adjust: 100%; font-family: &quot;&gt;　　音乐部门的运营利润从先前的393亿日元高涨至1470亿日元，营收为2090亿日元。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 30px; padding: 0px; text-size-adjust: 100%; font-family: &quot;&gt;　　在公布财报之前，分析师预期的每股收益为1.9美元左右。公司财报中给出的每股收益远高于分析师预期，为2.93美元。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 30px; padding: 0px; text-size-adjust: 100%; font-family: &quot;&gt;　　索尼称，由于电影《毒液》的高票房以及电视节目的高销售，公司影业部门在第三季度表现强劲。归因于索尼集团的剧场营收在第三季度为5.32亿美元，高于去年同期的3.02亿美元，以及上一季度的3.69亿美元。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 30px; padding: 0px; text-size-adjust: 100%; font-family: &quot;&gt;　　但是由于频道资产重组导致的成本，影业部门的盈利表现略受影响。该部门的全年预期与之前保持一致：运营收入预期为4.59亿美元，营收为91.7亿美元。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 30px; padding: 0px; text-size-adjust: 100%; font-family: &quot;&gt;　　音乐部门的营收受录制音乐销售量的减少以及视觉媒体和平台（手游）销售量的减少影响，而有所降低，但与EMI的合并促进了该部门的营收表现。同样的，音乐部门的全年预期也与之前的保持一致：运营收入为21.1亿美元，营收为75亿美元。(小白)&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '41', '0', '0', '0', '0', '1', '0');
INSERT INTO `pa_topic` VALUES ('3', '1', '1', 'bq7lKQsRCjtmhwYEy0B4UuTSMIOn5v', '58.212.190.223', '留给谷歌云的时间不多了，掉队或与沉迷技术相关', '1551839204', '1551839204', '<p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); font-family: &quot;Microsoft YaHei&quot;, 微软雅黑, SimSun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);\">2月底的时候有消息称，谷歌云将收购总部位于硅谷、在以色列也开展业务的小型云端数据迁移公司Alooma。与去年收购云基础设施迁移公司Velostrata的条件类似，Alooma的新客户只能迁移数据至谷歌云平台，不能再接触亚马逊AWS或微软Azure。</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); font-family: &quot;Microsoft YaHei&quot;, 微软雅黑, SimSun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);\">　　谷歌云CEO库里安也明确表示要加码投入云计算了。</p><p style=\"text-align: center;\"><img src=\"/ueditor/php/upload/image/20190306/1551839122133782.jpg\" title=\"1551839122133782.jpg\" alt=\"1551839122133782.jpg\" width=\"200\" height=\"65\"/></p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); font-family: &quot;Microsoft YaHei&quot;, 微软雅黑, SimSun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);\">当前可以看出，谷歌云挑战的亚马逊与微软的火药味很浓，眼看着亚马逊与微软的云业务风生水起，谷歌在云业务上焦虑了。</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); font-family: &quot;Microsoft YaHei&quot;, 微软雅黑, SimSun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);\">　　2006年8月，Google首席执行官埃里克·施密特就首次提出云计算概念，但今天这个的战场成为了亚马逊与微软两大巨头的战争。</p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); font-family: &quot;Microsoft YaHei&quot;, 微软雅黑, SimSun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);\">　　在最新财报中，Google 没有对外披露云业务的营收数据，称价值 100 万美元的云业务合同比去年翻了一番。但是业内人士都清楚，<strong>谷歌不愿披露云业务的数据，是因为它拿不出手。</strong></p><p style=\"margin-top: 15px; margin-bottom: 15px; padding: 0px; font-size: 14px; line-height: 23px; color: rgb(51, 51, 51); font-family: &quot;Microsoft YaHei&quot;, 微软雅黑, SimSun, 宋体; white-space: normal; background-color: rgb(255, 255, 255);\">　　目前云服务业务排名上，谷歌屈居第五，根据Synergy Research数据，2018年的第三季度，谷歌云仍然落后于 AWS、微软，甚至落后于IBM。根据Canalys的给出的数据，谷歌只占据了云计算市场的8%份额，微软的一半，亚马逊的四分之一。</p><p><br/></p>', '13', '0', '0', '0', '0', '0', '0');
INSERT INTO `pa_topic` VALUES ('4', '3', '1', 'Q0ylhM6Y2kOPiAzdGuXHVtBSsWa5o8', '58.212.190.223', '集成开发工具的使用-【02】idea创建web项目', '1552462622', '1552462622', '<h3>1、环境约束</h3><p>win10 64为操作系统</p><p>idea2018.1.5</p><p>apache-tomcat-8.5.38</p><p>jdk-8u162-windows-x64</p><p><br/></p><h3>2、软件下载</h3><p>百度网盘：</p><p>链接：https://pan.baidu.com/s/1gfnI8NqUYgYK1g0ULGIV2w</p><p>提取码：q9pl</p><p><br/></p><h3>3、前提约束</h3><p>操作系统中安装好jdk，并已经完成配置</p><p>操作系统中安装好tomcat，并已经完成配置</p><p><br/></p><h3>4、创建项目</h3><p>（1）打开idea。</p><p style=\"text-align: center;\"><img src=\"/ueditor/php/upload/image/20190313/1552462526864940.png\" title=\"1552462526864940.png\" alt=\"1552462526864940.png\" width=\"722\" height=\"422\"/></p><p>（2）点击“File”--&gt;点击“New”--&gt;&quot;Project&quot;，结果如下图所示：</p><p><br/></p><p><br/></p><p><br/></p><p>（3）点击“JAVA”--&gt;选中&quot;Web Application&quot;--&gt;选中“Create web.xml”--&gt;点击“Next”，显示结果如下图所示：</p><p><br/></p><p><br/></p><p><br/></p><p>（4）修改项目名称--&gt;点击“Finish”，显示结果如下图所示：</p><p><br/></p><p><br/></p><p><br/></p><p>（5）点击“New Window”，会打开一个新的窗口，显示结果如下图所示：</p><p><br/></p><p><br/></p><p><br/></p><p>（6）点击左侧的“1:Project”，打开项目结构，src当中是java代码，web当中是页面。如下图所示：</p><p><br/></p><p><br/></p><p><br/></p><p>5、启动项目</p><p><br/></p><p><br/></p><p>（1）点击下拉列表，选中“Edit Configurations”，出现如下图所示：</p><p><br/></p><p><br/></p><p><br/></p><p>（2）点击“+”--&gt;选中“Tomcat Server”--&gt;点击“Local”，出现如下图所示：</p><p><br/></p><p><br/></p><p><br/></p><p>（3）修改启动项目名称--&gt;配置Application Server--&gt;配置JRE--&gt;点击“Fix”，出现如下图所示：</p><p><br/></p><p><br/></p><p><br/></p><p>（4）点击“OK”，出现如下图所示：</p><p><br/></p><p><br/></p><p><br/></p><p>（5）以debug方式启动。等待，弹出页面。</p><p><br/></p><p>至此，我们完成了在idea中创建web项目，并且依靠tomcat启动。</p><p><br/></p>', '9', '0', '0', '0', '0', '0', '0');
INSERT INTO `pa_topic` VALUES ('5', '35', '1', '8xTrfk6Sug9mAXacWwD0VZEoPji1NM', '58.212.190.223', 'Java IO流学习总结一：输入输出流', '1552637007', '1552637007', '<h2 style=\"margin: 10px 0px; padding: 0px; font-size: 21px; line-height: 1.5; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\">流的概念和作用</h2><p style=\"margin: 10px auto; padding: 0px; line-height: 1.5; font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\">流是一组有顺序的，有起点和终点的字节集合，是对数据传输的总称或抽象。即数据在两设备间的传输称为流，流的本质是数据传输，根据数据传输特性将流抽象为各种类，方便更直观的进行数据操作。</p><h2 style=\"margin: 10px 0px; padding: 0px; font-size: 21px; line-height: 1.5; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\">IO流的分类</h2><ul style=\"margin-left: 30px; padding: 0px; word-break: break-all; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; white-space: normal; background-color: rgb(254, 254, 242);\" class=\" list-paddingleft-2\"><li><p>根据处理数据类型的不同分为：字符流和字节流</p></li><li><p>根据数据流向不同分为：输入流和输出流</p></li></ul><h2 style=\"margin: 10px 0px; padding: 0px; font-size: 21px; line-height: 1.5; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\">字符流和字节流</h2><p style=\"margin: 10px auto; padding: 0px; line-height: 1.5; font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\">字符流的由来： 因为数据编码的不同，而有了对字符进行高效操作的流对象。本质其实就是基于字节流读取时，去查了指定的码表。 字节流和字符流的区别：</p><ul style=\"margin-left: 30px; padding: 0px; word-break: break-all; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; white-space: normal; background-color: rgb(254, 254, 242);\" class=\" list-paddingleft-2\"><li><p>读写单位不同：字节流以字节（8bit）为单位，字符流以字符为单位，根据码表映射字符，一次可能读多个字节。</p></li><li><p style=\"margin: 10px auto; padding: 0px; line-height: 1.5;\">处理对象不同：字节流能处理所有类型的数据（如图片、avi等），而字符流只能处理字符类型的数据。</p></li><li><p>字节流：一次读入或读出是8位二进制。</p></li><li><p style=\"margin: 10px auto; padding: 0px; line-height: 1.5;\">字符流：一次读入或读出是16位二进制。</p></li></ul><p style=\"margin: 10px auto; padding: 0px; line-height: 1.5; font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\"><strong style=\"margin: 0px; padding: 0px;\">设备上的数据无论是图片或者视频，文字，它们都以二进制存储的。二进制的最终都是以一个8位为数据单元进行体现，所以计算机中的最小数据单元就是字节。意味着，字节流可以处理设备上的所有数据，所以字节流一样可以处理字符数据。</strong></p><h4 style=\"margin: 10px 0px; padding: 0px; font-size: 14px; color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\"><strong style=\"margin: 0px; padding: 0px;\">结论：只要是处理纯文本数据，就优先考虑使用字符流。 除此之外都使用字节流。</strong></h4><h2 style=\"margin: 10px 0px; padding: 0px; font-size: 21px; line-height: 1.5; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\">输入流和输出流</h2><p style=\"margin: 10px auto; padding: 0px; line-height: 1.5; font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\">输入流只能进行读操作，输出流只能进行写操作，程序中需要根据待传输数据的不同特性而使用不同的流。</p><h2 style=\"margin: 10px 0px; padding: 0px; font-size: 21px; line-height: 1.5; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\">输入字节流 InputStream</h2><ul style=\"margin-left: 30px; padding: 0px; word-break: break-all; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; white-space: normal; background-color: rgb(254, 254, 242);\" class=\" list-paddingleft-2\"><li><p><code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">InputStream</code>&nbsp;是所有的输入字节流的父类，它是一个抽象类。</p></li><li><p><code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">ByteArrayInputStream</code>、<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">StringBufferInputStream</code>、<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">FileInputStream</code>&nbsp;是三种基本的介质流，它们分别从<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">Byte 数组</code>、<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">StringBuffer</code>、和<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">本地文件</code>中读取数据。</p></li><li><p><code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">PipedInputStream</code>&nbsp;是从与其它线程共用的管道中读取数据，与Piped 相关的知识后续单独介绍。</p></li><li><p><code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">ObjectInputStream</code>&nbsp;和所有<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">FilterInputStream</code>&nbsp;的子类都是装饰流（装饰器模式的主角）。</p></li></ul><h2 style=\"margin: 10px 0px; padding: 0px; font-size: 21px; line-height: 1.5; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\">输出字节流 OutputStream</h2><ul style=\"margin-left: 30px; padding: 0px; word-break: break-all; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; white-space: normal; background-color: rgb(254, 254, 242);\" class=\" list-paddingleft-2\"><li><p><code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">OutputStream</code>&nbsp;是所有的输出字节流的父类，它是一个抽象类。</p></li><li><p><code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">ByteArrayOutputStream</code>、<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">FileOutputStream</code>&nbsp;是两种基本的介质流，它们分别向<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">Byte 数组</code>、和<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">本地文件</code>中写入数据。</p></li><li><p><code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">PipedOutputStream</code>&nbsp;是向与其它线程共用的管道中写入数据。</p></li><li><p><code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">ObjectOutputStream</code>&nbsp;和所有<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">FilterOutputStream</code>&nbsp;的子类都是装饰流。</p></li></ul><p style=\"margin: 10px auto; padding: 0px; line-height: 1.5; font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\"><strong style=\"margin: 0px; padding: 0px;\">总结：</strong></p><ul style=\"margin-left: 30px; padding: 0px; word-break: break-all; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; white-space: normal; background-color: rgb(254, 254, 242);\" class=\" list-paddingleft-2\"><li><p>输入流：InputStream或者Reader：从文件中读到程序中；</p></li><li><p>输出流：OutputStream或者Writer：从程序中输出到文件中；</p></li></ul><h2 style=\"margin: 10px 0px; padding: 0px; font-size: 21px; line-height: 1.5; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\">节点流</h2><p style=\"margin: 10px auto; padding: 0px; line-height: 1.5; font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\">节点流：直接与数据源相连，读入或读出。<br/>直接使用节点流，读写不方便，为了更快的读写文件，才有了处理流。<br/><img src=\"http://img.blog.csdn.net/20170105194412271?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQvemhhb3lhbmp1bjY=/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/SouthEast\" alt=\"这里写图片描述\"/></p><h3 style=\"margin: 10px 0px; padding: 0px; font-size: 16px; line-height: 1.5; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\">常用的节点流</h3><ul style=\"margin-left: 30px; padding: 0px; word-break: break-all; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; white-space: normal; background-color: rgb(254, 254, 242);\" class=\" list-paddingleft-2\"><li><p>父　类 ：<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">InputStream</code>&nbsp;、<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">OutputStream</code>、&nbsp;<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">Reader</code>、&nbsp;<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">Writer</code></p></li><li><p>文　件 ：<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">FileInputStream</code>&nbsp;、&nbsp;<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">FileOutputStrean</code>&nbsp;、<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">FileReader</code>&nbsp;、<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">FileWriter</code>&nbsp;文件进行处理的节点流</p></li><li><p>数　组 ：<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">ByteArrayInputStream</code>、&nbsp;<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">ByteArrayOutputStream</code>、&nbsp;<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">CharArrayReader</code>&nbsp;、<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">CharArrayWriter</code>&nbsp;对数组进行处理的节点流（对应的不再是文件，而是内存中的一个数组）</p></li><li><p>字符串 ：<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">StringReader</code>、&nbsp;<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">StringWriter</code>&nbsp;对字符串进行处理的节点流</p></li><li><p>管　道 ：<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">PipedInputStream</code>&nbsp;、<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">PipedOutputStream</code>&nbsp;、<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">PipedReader</code>&nbsp;、<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">PipedWriter</code>&nbsp;对管道进行处理的节点流</p></li></ul><h2 style=\"margin: 10px 0px; padding: 0px; font-size: 21px; line-height: 1.5; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\">处理流</h2><p style=\"margin: 10px auto; padding: 0px; line-height: 1.5; font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\">处理流和节点流一块使用，在节点流的基础上，再套接一层，套接在节点流上的就是处理流。如<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">BufferedReader</code>.处理流的构造方法总是要带一个其他的流对象做参数。一个流对象经过其他流的多次包装，称为流的链接。<br/><img src=\"http://img.blog.csdn.net/20170105194522390?watermark/2/text/aHR0cDovL2Jsb2cuY3Nkbi5uZXQvemhhb3lhbmp1bjY=/font/5a6L5L2T/fontsize/400/fill/I0JBQkFCMA==/dissolve/70/gravity/SouthEast\" alt=\"这里写图片描述\"/></p><h3 style=\"margin: 10px 0px; padding: 0px; font-size: 16px; line-height: 1.5; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\">常用的处理流</h3><ul style=\"margin-left: 30px; padding: 0px; word-break: break-all; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; white-space: normal; background-color: rgb(254, 254, 242);\" class=\" list-paddingleft-2\"><li><p>缓冲流：<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">BufferedInputStrean</code>&nbsp;、<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">BufferedOutputStream</code>、&nbsp;<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">BufferedReader</code>、&nbsp;<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">BufferedWriter</code>&nbsp;增加缓冲功能，避免频繁读写硬盘。</p></li><li><p>转换流：<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">InputStreamReader</code>&nbsp;、<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">OutputStreamReader</code>实现字节流和字符流之间的转换。</p></li><li><p>数据流：&nbsp;<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">DataInputStream</code>&nbsp;、<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">DataOutputStream</code>&nbsp;等-提供将基础数据类型写入到文件中，或者读取出来。</p></li></ul><h3 style=\"margin: 10px 0px; padding: 0px; font-size: 16px; line-height: 1.5; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\">转换流</h3><p style=\"margin: 10px auto; padding: 0px; line-height: 1.5; font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(254, 254, 242);\"><code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">InputStreamReader</code>&nbsp;、<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">OutputStreamWriter</code>&nbsp;要<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">InputStream</code>或<code style=\"margin: 1px 5px; padding: 0px 5px !important; line-height: 1.8; vertical-align: middle; display: inline-block; font-family: &quot;Courier New&quot;, sans-serif !important; font-size: 12px !important; background-color: rgb(245, 245, 245) !important; border: 1px solid rgb(204, 204, 204) !important; border-radius: 3px !important;\">OutputStream</code>作为参数，实现从字节流到字符流的转换。</p><p><br/></p>', '6', '0', '0', '0', '0', '0', '0');
INSERT INTO `pa_topic` VALUES ('6', '35', '1', 'b9cLIuXQNOp6g0CZ5UshH8wxnMSAVy', '58.212.190.223', 'Java常用基础类第二节', '1552637124', '1552637124', '<p>1 概述</p><p><br/></p><p>在基础库部分，Sun公司提供了极其丰富的功能类，为了便于区分，根据类的功能大致把这些类放在了不同的包内，例如java.lang包、java.util包、java.io包、java.sql包、java.text包等等。这里主要讲解java.lang包及java.text包中的部分类，对于其他的三个包，将会在后续单独讲解。</p><p><br/></p><p>对于初学者来说，最为常用的工具类有封装类、String、StringBuffer、Random、Date、Calendar、SimpleDateFormat及Math静态类等等；但是，Java学习之路漫长也曲折，Sun公司提供的支持类成千上万，很难一次掌握，即便是本章内容，也拥有众多类和方法的介绍，在后续的学习、工作过程中，也会遇到自己不会甚至没有见过的新类，你会发现，这众多的类和方法之间，其实充满了联系与区别，是有规律可循的，类的名字、方法的名字，也非常便于记忆。只要各位从容面对，勤加练习，善于归纳总结，多多翻阅JDK API帮助文档，那么学好这部分内容是不困难的。</p><p>2包装类</p><p><br/></p><p>我们知道，java中的基本数据类型是在堆栈上创建的，而所有的对象类型都是在堆上创建的（对象的引用在堆栈上创建）。比如String s=new String(“good luck!”); 其中new String()是在堆上创建的，而它的引用String s是在堆栈上。</p><p><br/></p><p>很显然，栈内存上的数据比堆内存上的数据速度要快很多，不过，虽然在堆栈上分配内存效率高，不过在堆栈上分配内存有内存泄露的问题，而这并不是任意一个程序员都能解决的问题。并且，对于基本数据类型来说，早在一学期我们就知道它是按值传递的。所以，如果各位想把一个基本数据类型的数据按引用传递，那么是办不到的。包装类（Wrapper Class）的出现，正是为了解决这个问题，包装类把基本数据类型的数据封装为引用类型的对象，而且提供了很多有用的方法。</p><p><br/></p><p>对于Java的基本数据类型，Sun公司均提供了对应的包装类，如下表所示，各位可以通过查阅API文档来获得这些包装类的详细信息。值得注意的是，所有的包装类均位于java.lang包下，而这个包会由JVM编译器在编译时自动导入我们的程序，所以可以不用手工导入该包下的类而直接使用。</p><p><br/></p><p>基本数据类型</p><p><span style=\"white-space:pre\">	</span></p><p><br/></p><p>对应包装类</p><p><br/></p><p>boolean</p><p><span style=\"white-space:pre\">	</span></p><p><br/></p><p>Boolean</p><p><br/></p><p>byte</p><p><span style=\"white-space:pre\">	</span></p><p><br/></p><p>Byte</p><p><br/></p><p>short</p><p><span style=\"white-space:pre\">	</span></p><p><br/></p><p>Short</p><p><br/></p><p>int</p><p><span style=\"white-space:pre\">	</span></p><p><br/></p><p>Integer</p><p><br/></p><p>long</p><p><span style=\"white-space:pre\">	</span></p><p><br/></p><p>Long</p><p><br/></p><p>char</p><p><span style=\"white-space:pre\">	</span></p><p><br/></p><p>Character</p><p><br/></p><p>float</p><p><span style=\"white-space:pre\">	</span></p><p><br/></p><p>Float</p><p><br/></p><p>double</p><p><span style=\"white-space:pre\">	</span></p><p><br/></p><p>Double</p><p><br/></p><p>大多包装类均具有如下方法：</p><p><br/></p><p>·带有基本值参数并创建包装类对象的构造方法，如可以利用Integer包装类创建对象，Integer obj=new Integer(145) 1aD&gt;Zn</p><p><br/></p><p>·带有字符串参数并创建包装类对象的构造方法，如new Integer(&quot;-45.36&quot;) A =:(IcM#</p><p><br/></p><p>d9G{S9X</p><p><br/></p><p>&nbsp;</p><p><br/></p><p>&nbsp;</p><p><br/></p><p>·生成字符串表示法的toString()方法，如obj.toString()</p><p><br/></p><p>·:%^D,MGi ··&nbsp; &nbsp;对同一个类的两个对象进行比较的equals()方法，如obj1.eauqls(obj2) 6=Hxw$6u0U</p><p><br/></p><p>·生成哈稀表代码的hashCode方法，如obj.hasCode() w_+c$E i+b ?Zt</p><p><br/></p><p>·将字符串转换为基本值的 parseType方法，如Integer.parseInt(args[0]) (i&#39; a 4</p><p><br/></p><p>·可生成对象基本值的typeValue方法，如obj.intValue()</p><p><br/></p><p>下以int基本类型的包装类Integer和Character为例，带领各位了解包装类。</p><p>---------------------&nbsp;</p><p>作者：邱邱&nbsp;</p><p>来源：CSDN&nbsp;</p><p>原文：https://blog.csdn.net/qwert2190/article/details/81227840&nbsp;</p><p>版权声明：本文为博主原创文章，转载请附上博文链接！</p><p><br/></p>', '4', '0', '0', '0', '0', '0', '0');
INSERT INTO `pa_topic` VALUES ('7', '35', '1', 'gs0iHEnQS5mahxyk84ejulMN72pOfc', '58.212.190.223', 'JAVA基础，字符串第三节', '1552637237', '1552637237', '<h2>字符串String(一个字符数组，常量，不可变)：</h2><p>1. 创建并初始化字符串：</p><p>　　1). 使用字符串常量直接初始化 String s=&quot;hello!&quot;;</p><p>　　2). 使用构造方法创建并初始化</p><p>　　　　String();//初始化一个对象，表示空字符序列</p><p>　　　　String(value);//利用已存在的字符串常量创建一个新的对象</p><p>　　　　String (char[] value);//利用一个字符数组创建一个字符串</p><p>　　　　String(char[] value,int offset,int count);//截取字符数组offset到count的字符创建一个非空串</p><p>　　　　String(StringBuffer buffer);//利用StringBuffer对象初始化String对象</p><p>2. 字符串的常用方法：</p><p>　　获取字符串信息：</p><p>　　　　下标：indexOf(子字符)lastIndexOf(子字符)</p><p>　　　　字符：charAt(下标)</p><p>　　　　字节数组：getBytes()</p><p>　　　　字符数组：toCharArray()</p><p>　　　　长度：length()</p><p>　　判断字符串</p><p>　　　　相等：equals(字符串)</p><p>　　　　前缀：startsWith(前缀)</p><p>　　　　后缀：endsWith(后缀)</p><p>　　　　大小：compareTo()</p><p>　　　　子字符串：reagionMatches()（通过参数列表可以设置是否忽略大小写）</p><p>　　替换字符串</p><p>　　　　去掉前后空格：trim()</p><p>　　　　子字符串：split(字符串)，StringTokenizer()</p><p>　　截取字符串</p><p>　　　　单点截取：subString(开始下标)</p><p>　　　　双点截取：subString(开始下标，结束下标)</p><p class=\"ListParagraph\">　　1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; charAt(下标)：获取字符串指定下标位置的字符，返回char值</p><p class=\"ListParagraph\">　　2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; length():返回字符串的长度，返回int值</p><p class=\"ListParagraph\">　　3)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; getBytes():将字符串转换为字节数组，返回byte[]值</p><p class=\"ListParagraph\">　　4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; indexOf(子字符串)：返回指定子字符串在源字符串中的下标，返回int值，没找到返回-1.(可以指定开始检索的位置下标)</p><p class=\"ListParagraph\">　　5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lastIndexOf()：返回指定子字符串在源字符串中最后一次出现的下标</p><p class=\"ListParagraph\">　　6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; isEmpty()：判断字符串的length是否为0，返回Boolean值</p><p class=\"ListParagraph\">　　7)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; replace(旧子字符串，新字符串)：用指定的新字符串替换源字符串中的旧子字符串部分，返回替换后的字符串，返回值String</p><p class=\"ListParagraph\">　　8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; subString(开始下标，结束下标)：截取从开始到结束下标范围的字符串，结果包含开始，不包含结束，如果不给结束下标，表示直接截取到末尾</p><p class=\"ListParagraph\">　　9)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; split(字符串)：按照指定的字符串拆分源字符串，返回String[]数组</p><p class=\"ListParagraph\">　　10)&nbsp;&nbsp;&nbsp; trim():用于返回去掉首尾空格的字符串</p><p class=\"ListParagraph\">　　11)&nbsp;&nbsp;&nbsp; valueOf(其他类型数据)：将指定数据转换为字符串值返回</p><p class=\"ListParagraph\">　　12)&nbsp;&nbsp;&nbsp; toCharArray()：返回将此字符串转换为一个新的字符数组</p><p class=\"ListParagraph\">　　13)&nbsp;&nbsp;&nbsp; toString()：返回此对象本身</p><p class=\"ListParagraph\">　　14)&nbsp;&nbsp;&nbsp; toLowerCase()：把字符串全部转换为小写</p><p class=\"ListParagraph\">　　15)&nbsp;&nbsp;&nbsp; toUpperCase()：把字符串全部转换为大写</p><p class=\"ListParagraph\">　　16)&nbsp;&nbsp;&nbsp; startsWith(前缀)：判断前缀是否相同</p><p class=\"ListParagraph\">　　17)&nbsp;&nbsp;&nbsp; endsWith(后缀)：判断后缀是否相同</p><p class=\"ListParagraph\">　　18)&nbsp;&nbsp;&nbsp; compareTo()：判断字符串的大小关系，参考ASSCI表</p><p class=\"ListParagraph\">　　19)&nbsp;&nbsp;&nbsp; compareToIgnoreCase()：忽略大小写判断字符串的大小关系</p><p class=\"ListParagraph\">　　20)&nbsp;&nbsp;&nbsp; equals(字符串):比较字符串和指定字符串是否相等，返回boolean值</p><p class=\"ListParagraph\">　　21)&nbsp;&nbsp;&nbsp; equalsIgnoreCase()：忽略大小写的情况下判断内容是否相同</p><p class=\"ListParagraph\">　　22)&nbsp;&nbsp;&nbsp; reagionMatches() ：测试两个字符串区域是否相等</p><p class=\"ListParagraph\">3. 字符串转换</p><p>　　全部转换为大/小写：</p><p>　　　　大写：toLowerCase()</p><p>　　　　小写：toUpperCase()</p><p>　　与其他基本类型的转换：</p><p>　　　　把双引号中为数字的字符串转换成数字类型：包装类.parse包装类(字符串);</p><p>　　　　　　Long.parseLong(&quot;1231&quot;);</p><p>　　　　　　Double.parseDouble(&quot;0.213&quot;);</p><p>　　　　把其他类型的参数转换为字符串类型：valueOf()</p><p>　　　　　　第一种方法：基本数据类型变量+&quot;&quot;</p><p>　　　　　　第二种方法：String.valueOf(其他类型的参数)；</p><p>4. 关于字符串类的说明：</p><p>　　字符串类是常量类，所以字符串是常量，不可改变</p><p><br/></p>', '3', '0', '0', '0', '0', '0', '0');
INSERT INTO `pa_topic` VALUES ('8', '35', '1', 'FWSrwTUL1tmkYo6ziAHnZJExbM3d5v', '58.212.190.223', 'java中的算术运算符、赋值运算符、比较运算符、逻辑运算符、条件运算符', '1552637899', '1552637899', '<p><strong>一、算术运算符</strong><br/></p><p>算术运算符主要用于进行基本的算术运算，如加法、减法、乘法、除法等。</p><p>Java 中常用的算术运算符：</p><p><a href=\"http://img.mukewang.com/5368a1a10001da7603050148.jpg\"><img src=\"/ueditor/php/upload/image/20190315/1552637725323336.jpg\" alt=\"1552637725323336.jpg\"/></a></p><p>&nbsp;其中，<strong>++ </strong>和 -- 既可以出现在操作数的左边，也可以出现在右边，但结果是不同滴</p><p>例1：</p><pre class=\"brush:java;toolbar:false;\">public&nbsp;class&nbsp;HelloWorld{\n&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;static&nbsp;void&nbsp;main(String[]&nbsp;args)&nbsp;{\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int&nbsp;age1=24;\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int&nbsp;age2=18;\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int&nbsp;age3=36;\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int&nbsp;age4=27;\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int&nbsp;sum=age1+age2+age3+age4;\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double&nbsp;avg=sum/4;\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int&nbsp;minus=Math.abs(age1-age2);\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int&nbsp;newAge=--age1;\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(&quot;四个年龄的总和：&quot;+sum);\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(&quot;四个年龄的平均值：&quot;+avg);\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(&quot;age1&nbsp;和&nbsp;age2年龄差值：&quot;+minus);\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(&quot;age1自减后的年龄：&quot;+newAge);\n\n&nbsp;&nbsp;&nbsp;&nbsp;}\n}</pre><p><strong>二、赋值运算符</strong></p><p>赋值运算符是指为变量或常量指定数值的符号。如可以使用&nbsp;“=” 将右边的表达式结果赋给左边的操作数。</p><p>Java 支持的常用赋值运算符，如下表所示：</p><p><br/></p>', '5', '0', '0', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for pa_user
-- ----------------------------
DROP TABLE IF EXISTS `pa_user`;
CREATE TABLE `pa_user` (
  `uid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gid` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '用户组编号',
  `email` char(40) NOT NULL DEFAULT '' COMMENT '邮箱',
  `username` char(32) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(70) NOT NULL DEFAULT '' COMMENT '密码',
  `avatar` varchar(100) NOT NULL DEFAULT '\\public\\static\\images\\user_defaule.png' COMMENT '头像URL',
  `motto` varchar(255) DEFAULT NULL COMMENT '签名',
  `mobile` char(11) NOT NULL DEFAULT '' COMMENT '手机号',
  `qq` char(15) NOT NULL DEFAULT '' COMMENT 'QQ',
  `topics` int(11) NOT NULL DEFAULT '0' COMMENT '发帖数',
  `ebooks` int(11) NOT NULL DEFAULT '0',
  `essence` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '精华数',
  `comments` int(11) NOT NULL DEFAULT '0' COMMENT '回帖数',
  `credits` int(11) NOT NULL DEFAULT '0' COMMENT '积分',
  `create_ip` char(16) NOT NULL DEFAULT '0' COMMENT '创建时IP',
  `create_date` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `login_ip` char(16) NOT NULL DEFAULT '0' COMMENT '登录时IP',
  `login_date` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '登录时间',
  `logins` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '登录次数',
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '用户状态',
  `qqconnectId` varchar(32) DEFAULT NULL COMMENT 'QQ互联UserOpenId',
  PRIMARY KEY (`uid`),
  KEY `gid` (`gid`,`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pa_user
-- ----------------------------
INSERT INTO `pa_user` VALUES ('1', '1', '3127176962@qq.com', 'admin', '$2y$10$cR/GPY7Fyipmb2ckyp3uPOqcjD4Y/dMR/RmUL9i2w9khx6PDSb7By', '/public/avatar/20181221\\dad97ebbb0a0d772f6afd02eaf1d3083.jpg', '不晓得这是啥', '', '', '8', '14', '0', '0', '0', '0', '0', '121.229.180.134', '1552963846', '44', '1', null);
INSERT INTO `pa_user` VALUES ('2', '2', '691301630@qq.com', '小白', '$2y$10$ny5cjHwsNrDZkZ6Dg278huBMpXU.cHZLEmOqrSv6zfbS6Jp.KC8Ym', '\\public\\static\\images\\user_defaule.png', null, '', '', '0', '0', '0', '0', '0', '127.0.0.1', '0', '211.162.27.201', '1552692947', '8', '1', null);
INSERT INTO `pa_user` VALUES ('3', '1', '3127176962@163.com', '小强', '$2y$10$kGsHxvs1ciaWxLsx9OqfwO.4cVie.yk1f.y3npYHLJyIk6XE8nele', '\\public\\static\\images\\user_defaule.png', null, '', '', '0', '0', '0', '0', '0', '127.0.0.1', '0', '127.0.0.1', '1546498946', '1', '1', null);
INSERT INTO `pa_user` VALUES ('4', '1', '1531132763@qq.com', '小和老师', '$2y$10$kYy0EQSHFdBHWFgYAFZwcuMgqUpzuOJsdFiAKysCYkMeJVV.lkIFa', '/public/avatar/20190319/6f6f0e6b7a34cca95cc0b61df9a98e00.jpg', null, '', '', '0', '0', '0', '0', '0', '121.229.180.134', '0', '121.229.180.134', '1552966684', '1', '1', null);
