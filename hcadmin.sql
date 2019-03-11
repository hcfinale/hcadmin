/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : hcadmin

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-02-01 16:21:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for py_atta
-- ----------------------------
DROP TABLE IF EXISTS `py_atta`;
CREATE TABLE `py_atta` (
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
-- Records of py_atta
-- ----------------------------

-- ----------------------------
-- Table structure for py_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `py_auth_rule`;
CREATE TABLE `py_auth_rule` (
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
-- Records of py_auth_rule
-- ----------------------------
INSERT INTO `py_auth_rule` VALUES ('1', 'admin/index/index', '超级管理', '1', '1', '');
INSERT INTO `py_auth_rule` VALUES ('2', 'view', '查看帖子', '1', '1', '');
INSERT INTO `py_auth_rule` VALUES ('3', 'banUser', '封禁用户', '1', '1', '');
INSERT INTO `py_auth_rule` VALUES ('4', 'move', '移动帖子', '1', '1', '');
INSERT INTO `py_auth_rule` VALUES ('5', 'down', '下载附件', '1', '1', '');
INSERT INTO `py_auth_rule` VALUES ('6', 'delete', '删除帖子', '1', '1', '');
INSERT INTO `py_auth_rule` VALUES ('7', 'comment', '允许回复', '1', '1', '');
INSERT INTO `py_auth_rule` VALUES ('8', 'create', '允许发帖', '1', '1', '');
INSERT INTO `py_auth_rule` VALUES ('9', 'top', '置顶帖子', '1', '1', '');
INSERT INTO `py_auth_rule` VALUES ('10', 'essence', '设置精华', '1', '1', '');
INSERT INTO `py_auth_rule` VALUES ('11', 'update', '编辑帖子', '1', '1', '');
INSERT INTO `py_auth_rule` VALUES ('12', 'message', '发送信息', '1', '1', '');
INSERT INTO `py_auth_rule` VALUES ('13', 'Ebook/Create', '发电子书', '1', '1', '');

-- ----------------------------
-- Table structure for py_comment
-- ----------------------------
DROP TABLE IF EXISTS `py_comment`;
CREATE TABLE `py_comment` (
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
-- Records of py_comment
-- ----------------------------

-- ----------------------------
-- Table structure for py_ebook
-- ----------------------------
DROP TABLE IF EXISTS `py_ebook`;
CREATE TABLE `py_ebook` (
  `eid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fid` int(11) NOT NULL,
  `uid` int(11) NOT NULL DEFAULT '1',
  `description` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `name` char(100) CHARACTER SET utf8mb4 NOT NULL,
  `userip` char(16) CHARACTER SET utf8mb4 NOT NULL,
  `images` varchar(100) CHARACTER SET utf8mb4 NOT NULL DEFAULT '\\public\\static\\images\\ebook_defaule.png',
  `ebook_url` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `tops` smallint(2) NOT NULL DEFAULT '0',
  `essence` smallint(2) NOT NULL DEFAULT '0',
  `views` smallint(11) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0',
  `status` smallint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of py_ebook
-- ----------------------------
INSERT INTO `py_ebook` VALUES ('1', '1', '1', 'asf', 'sfa', '', '/public/static/images/ebook_default.jpg', '\\public\\uploads\\20190117\\0937751bcea500f03e7629bb28f88684.txt', '0', '0', '1', '1547686092', '1547686092', '1');
INSERT INTO `py_ebook` VALUES ('2', '1', '1', 'afasf', 'asf', '', '/public/static/images/ebook_default.jpg', '\\public\\uploads\\20190117\\0c7cb3bcea9544b73d6e10e615e63919.txt', '0', '0', '1', '1547686236', '1547686236', '1');
INSERT INTO `py_ebook` VALUES ('3', '1', '1', '自己想一下描叙', 'python_cs', '', '\\public\\uploads\\20190117\\9daba0d77cda4b224477c20d424aa850.jpg', '\\public\\uploads\\20190117\\55e21b3d8b11b81235231e90de6d53e6.pdf', '0', '0', '2', '1547687766', '1547687766', '1');

-- ----------------------------
-- Table structure for py_forum
-- ----------------------------
DROP TABLE IF EXISTS `py_forum`;
CREATE TABLE `py_forum` (
  `fid` int(11) unsigned NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of py_forum
-- ----------------------------
INSERT INTO `py_forum` VALUES ('1', '综合', '1', '28', '官方信息发布板块', '默认板块公告', '0', '0', '', '官方信息发布板块', '官方');
INSERT INTO `py_forum` VALUES ('2', 'web开发', '', '4', '利用Python对web网站的开发', '', '0', '1545286929', '', '', '');
INSERT INTO `py_forum` VALUES ('3', '系统网络运维', '0', '0', '在运维的工作中，有大量重复性工作的地方，并需要做管理系统、监控系统、发布系统等，将工作自动化起来，提高工作效率，这样的场景Python是一门非常合适的语言。', '', '0', '1545287105', '', '', '');
INSERT INTO `py_forum` VALUES ('4', '科学与数字计算', '1,0', '0', 'Python被广泛的运用于科学和数字计算中，例如生物信息学、物理、建筑、地理信息系统、图像可视化分析、生命科学等，常用numpy、SciPy、Biopython、SunPy等。', '', '0', '1545287162', '', '', '');
INSERT INTO `py_forum` VALUES ('5', '网络编程', '', '0', '网络编程是Python学习的另一方向，网络编程在生活和开发中无处不在，哪里有通讯就有网络，它可以称为是一切开发的“基石”。对于所有编程开发人员必须要知其然并知其所以然，所以网络部分将从协议、封包、解包等底层进行深入剖析。', '', '0', '1546412939', '', '', '');
INSERT INTO `py_forum` VALUES ('6', '爬虫开发', '0', '0', '在爬虫领域，Python几乎是霸主地位，将网络一切数据作为资源，通过自动化程序进行有针对性的数据采集以及处理。从事该领域应学习爬虫策略、高性能异步IO、分布式爬虫等，并针对Scrapy框架源码进行深入剖析，从而理解其原理并实现自定义爬虫框架。', '', '0', '1546412993', '', '', '');
INSERT INTO `py_forum` VALUES ('7', '人工智能', '', '0', 'MASA和Google早期大量使用Python，为Python积累了丰富的科学运算库，当AI时代来临后，Python从众多编程语言中脱颖而出，各种人工智能算法都基于Python编写，尤其PyTorch之后，Python作为AI时代头牌语言的位置基本确定。', '', '0', '1546413125', '', '', '');
INSERT INTO `py_forum` VALUES ('8', '金融分析', '', '0', '金融分析包含金融知识和Python相关模块的学习，学习内容囊括Numpy\\Pandas\\Scipy数据分析模块等，以及常见金融分析策略如“双均线”、“周规则交易”、“羊驼策略”、“Dual Thrust 交易策略”等。', '', '0', '1546413165', '', '', '');
INSERT INTO `py_forum` VALUES ('9', '游戏开发', '0', '0', '在网络游戏开发中，Python也有很多应用，相比于Lua or C++，Python比Lua有更高阶的抽象能力，可以用更少的代码描述游戏业务逻辑，Python非常适合编写1万行以上的项目，而且能够很好的把网游项目的规模控制在10万行代码以内。 ', '', '0', '1546413192', '', '', '');

-- ----------------------------
-- Table structure for py_group
-- ----------------------------
DROP TABLE IF EXISTS `py_group`;
CREATE TABLE `py_group` (
  `gid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `groupName` varchar(30) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of py_group
-- ----------------------------
INSERT INTO `py_group` VALUES ('1', '管理员', '1', '1,2,3,4,5,6,7,8,9,10,11,12,13');
INSERT INTO `py_group` VALUES ('2', '注册会员', '1', '2,7,8,9,10,11');

-- ----------------------------
-- Table structure for py_links
-- ----------------------------
DROP TABLE IF EXISTS `py_links`;
CREATE TABLE `py_links` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `sold` int(11) unsigned NOT NULL DEFAULT '0',
  `title` char(50) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `picurl` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of py_links
-- ----------------------------
INSERT INTO `py_links` VALUES ('1', '0', '作者博客', 'https://www.cnblogs.com/hcfinal/', 'https://pic.cnblogs.com/avatar/1306501/20180608112540.png');
INSERT INTO `py_links` VALUES ('2', '1', '万和官方网站', 'http://www.wanho.net/', 'http://www.wanho.net/images/logo.png');

-- ----------------------------
-- Table structure for py_message
-- ----------------------------
DROP TABLE IF EXISTS `py_message`;
CREATE TABLE `py_message` (
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
-- Records of py_message
-- ----------------------------

-- ----------------------------
-- Table structure for py_options
-- ----------------------------
DROP TABLE IF EXISTS `py_options`;
CREATE TABLE `py_options` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `value` text NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `option_name` (`name`(10))
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of py_options
-- ----------------------------
INSERT INTO `py_options` VALUES ('1', 'defaulegroup', '2', 'reg');
INSERT INTO `py_options` VALUES ('2', 'fromName', 'HC', 'email');
INSERT INTO `py_options` VALUES ('3', 'fromAdress', 'hanchang@wanho.net', 'email');
INSERT INTO `py_options` VALUES ('4', 'smtpHost', 'smtp.exmail.qq.com', 'email');
INSERT INTO `py_options` VALUES ('5', 'smtpPort', '465', 'email');
INSERT INTO `py_options` VALUES ('6', 'replyTo', 'hanchang@wanho.net', 'email');
INSERT INTO `py_options` VALUES ('7', 'smtpUser', 'hcfinale', 'email');
INSERT INTO `py_options` VALUES ('8', 'smtpPass', 'H07c19', 'email');
INSERT INTO `py_options` VALUES ('9', 'encriptionType', 'no', 'email');
INSERT INTO `py_options` VALUES ('10', 'siteTitle', 'Python论坛', 'base');
INSERT INTO `py_options` VALUES ('11', 'siteDes', '只为Python而开发', 'base');
INSERT INTO `py_options` VALUES ('12', 'siteKeywords', '只为Python而开发', 'base');
INSERT INTO `py_options` VALUES ('13', 'forumNum', '25', 'forum');
INSERT INTO `py_options` VALUES ('14', 'siteFooterJs', '', 'base');
INSERT INTO `py_options` VALUES ('15', 'commentNum', '10', 'forum');
INSERT INTO `py_options` VALUES ('16', 'regStatus', '1', 'reg');
INSERT INTO `py_options` VALUES ('17', 'regMail', '0', 'reg');
INSERT INTO `py_options` VALUES ('18', 'reg_mail_content', '<!DOCTYPE html>\r\n<html>\r\n\r\n  <head>\r\n    <meta charset=\"utf-8\" />\r\n    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n    <title>MlTreeForum邮件模板</title>\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\r\n    <meta name=\"keywords\" content=\"MlTreeForum PHP 开源 轻论坛 轻社区 Material Design Thinkphp\" />\r\n    <meta name=\"description\" content=\"本站是 MlTree Forum 论坛社区产品的官方交流站点。MlTree Forum是一款由Thinkphp构建、Material Design风格的轻论坛。\" />\r\n    <meta name=\"author\" content=\"北林\">\r\n    <link rel=\"stylesheet\" href=\"https://cdn.bootcss.com/mdui/0.4.0/css/mdui.min.css\">\r\n    <script src=\"https://cdn.bootcss.com/mdui/0.4.0/js/mdui.min.js\"></script>\r\n  </head>\r\n\r\n  <body class=\"mdui-theme-primary-pink mdui-theme-accent-pink mdui-center\">\r\n    <div class=\"mdui-col-xs-12 mdui-col-sm-9 mdui-center mdui-text-center\">\r\n      <div class=\"mdui-card\">\r\n\r\n        <!-- 卡片的媒体内容，可以包含图片、视频等媒体内容，以及标题、副标题 -->\r\n        <div class=\"mdui-card-media\">\r\n          <img src=\"https://piccdn.freejishu.com/images/2016/04/04/z5gpqMql.jpg\" height=\"300px\" />\r\n        </div>\r\n\r\n        <!-- 卡片的标题和副标题 -->\r\n        <div class=\"mdui-card-primary\">\r\n          <div class=\"mdui-card-primary-title\">注册{siteTitle}账户</div>\r\n          <div class=\"mdui-card-primary-subtitle\">Welcome</div>\r\n        </div>\r\n\r\n        <!-- 卡片的内容 -->\r\n        <div class=\"mdui-card-content\">\r\n          亲爱的用户：\r\n          <br/> 您正在注册{siteTitle}。\r\n          <br/>\r\n          您的验证码为：{code}\r\n        </div>\r\n\r\n      </div>\r\n    </div>\r\n\r\n  </body>\r\n\r\n</html>', 'mailTemplate');
INSERT INTO `py_options` VALUES ('19', 'reset_mail_content', '<!DOCTYPE html>\r\n<html>\r\n\r\n  <head>\r\n    <meta charset=\"utf-8\" />\r\n    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n    <title>MlTreeForum邮件模板</title>\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\r\n    <meta name=\"keywords\" content=\"MlTreeForum PHP 开源 轻论坛 轻社区 Material Design Thinkphp\" />\r\n    <meta name=\"description\" content=\"本站是 MlTree Forum 论坛社区产品的官方交流站点。MlTree Forum是一款由Thinkphp构建、Material Design风格的轻论坛。\" />\r\n    <meta name=\"author\" content=\"北林\">\r\n    <link rel=\"stylesheet\" href=\"https://cdn.bootcss.com/mdui/0.4.0/css/mdui.min.css\">\r\n    <script src=\"https://cdn.bootcss.com/mdui/0.4.0/js/mdui.min.js\"></script>\r\n  </head>\r\n\r\n  <body class=\"mdui-theme-primary-pink mdui-theme-accent-pink mdui-center\">\r\n    <div class=\"mdui-col-xs-12 mdui-col-sm-7 dui-center mdui-text-center\">\r\n      <div class=\"mdui-card\">\r\n\r\n        <!-- 卡片的媒体内容，可以包含图片、视频等媒体内容，以及标题、副标题 -->\r\n        <div class=\"mdui-card-media\">\r\n          <img src=\"https://piccdn.freejishu.com/images/2016/04/04/z5gpqMql.jpg\" height=\"300px\" />\r\n        </div>\r\n\r\n        <!-- 卡片的标题和副标题 -->\r\n        <div class=\"mdui-card-primary\">\r\n          <div class=\"mdui-card-primary-title\">找回{siteTitle}账户</div>\r\n          <div class=\"mdui-card-primary-subtitle\">Welcome</div>\r\n        </div>\r\n\r\n        <!-- 卡片的内容 -->\r\n        <div class=\"mdui-card-content\">\r\n          亲爱的{userName}：\r\n          <br/> 您申请了找回账户，\r\n          <br/>您的验证码为 <code>{code}</code>\r\n        </div>\r\n\r\n      </div>\r\n    </div>\r\n\r\n  </body>\r\n\r\n</html>', 'mailTemplate');
INSERT INTO `py_options` VALUES ('20', 'siteStatus', '1', 'base');
INSERT INTO `py_options` VALUES ('21', 'reg_mail_title', '{siteTitle} 激活邮件', 'mailTemplate');
INSERT INTO `py_options` VALUES ('22', 'notice', '欢迎来到HC的Python论坛', 'base');
INSERT INTO `py_options` VALUES ('23', 'full', '1', 'base');
INSERT INTO `py_options` VALUES ('24', 'editor', '1', 'forum');
INSERT INTO `py_options` VALUES ('26', 'closeContent', '站点正在进行闭站维护…… <br/>预计一小时后完成。', 'base');
INSERT INTO `py_options` VALUES ('27', 'siteIcp', '', 'base');
INSERT INTO `py_options` VALUES ('29', 'golink', '1', 'base');
INSERT INTO `py_options` VALUES ('31', 'allowQQreg', '1', 'reg');
INSERT INTO `py_options` VALUES ('32', 'themePrimary', 'blue', 'theme');
INSERT INTO `py_options` VALUES ('33', 'themeAccent', 'pink', 'theme');
INSERT INTO `py_options` VALUES ('34', 'themeLayout', 'light', 'theme');
INSERT INTO `py_options` VALUES ('35', 'discolour', 'true', 'theme');

-- ----------------------------
-- Table structure for py_topic
-- ----------------------------
DROP TABLE IF EXISTS `py_topic`;
CREATE TABLE `py_topic` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of py_topic
-- ----------------------------
INSERT INTO `py_topic` VALUES ('1', '2', '1', 'h1D47wBP63ZlG5kceWzs2VTvXoQryM', '127.0.0.1', '123456', '1549009066', '1549009235', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;这个是测试内容&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;12345上山打老虎&lt;/p&gt;&lt;p&gt;678910黑黑黑黑黑&lt;/p&gt;&lt;p&gt;文章的页面该怎么修改呢？&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20190201/1549008991117072.jpg&quot; title=&quot;1549008991117072.jpg&quot; alt=&quot;1549008991117072.jpg&quot; width=&quot;382&quot; height=&quot;399&quot;/&gt;&lt;/p&gt;&lt;p&gt;上吧皮卡丘。&lt;/p&gt;', '1', '0', '0', '0', '1', '1', '0');
INSERT INTO `py_topic` VALUES ('2', '2', '1', 'EPeuy56DtfOZ2rwAxn9CQXRJHMFW8q', '127.0.0.1', '索尼第三季度营收213亿美元 净利润37.8亿美元', '1549009184', '1549009184', '<p style=\"margin-top: 0px; margin-bottom: 30px; padding: 0px; text-size-adjust: 100%; font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, &quot;STHeiti Light&quot;, 华文细黑, SimSun, 宋体, Arial, sans-serif; font-size: 18px; letter-spacing: 1px; white-space: normal;\">新浪科技讯&nbsp;北京时间2月1日下午消息，日本电子巨头<a href=\"http://stock.finance.sina.com.cn/usstock/quotes/SNE.html\" class=\"keyword f_st\" target=\"_blank\" style=\"text-decoration-line: none; outline: 0px; -webkit-tap-highlight-color: transparent; color: rgb(73, 150, 199);\">索尼</a>发布第三季度财报，财报显示，索尼的净利润为37.8亿美元，营收高达213亿美元。</p><p style=\"margin-top: 0px; margin-bottom: 30px; padding: 0px; text-size-adjust: 100%; font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, &quot;STHeiti Light&quot;, 华文细黑, SimSun, 宋体, Arial, sans-serif; font-size: 18px; letter-spacing: 1px; white-space: normal;\">　　索尼的影业部门——涉及电视与电影、内容与电视频道等业务——的利润从去年同期的9200万美元，增长至1.02亿美元。销售按美元计，则增长了6%至24.5亿美元。</p><p style=\"margin-top: 0px; margin-bottom: 30px; padding: 0px; text-size-adjust: 100%; font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, &quot;STHeiti Light&quot;, 华文细黑, SimSun, 宋体, Arial, sans-serif; font-size: 18px; letter-spacing: 1px; white-space: normal;\">　　音乐部门的运营利润从先前的393亿日元高涨至1470亿日元，营收为2090亿日元。</p><p style=\"margin-top: 0px; margin-bottom: 30px; padding: 0px; text-size-adjust: 100%; font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, &quot;STHeiti Light&quot;, 华文细黑, SimSun, 宋体, Arial, sans-serif; font-size: 18px; letter-spacing: 1px; white-space: normal;\">　　在公布财报之前，分析师预期的每股收益为1.9美元左右。公司财报中给出的每股收益远高于分析师预期，为2.93美元。</p><p style=\"margin-top: 0px; margin-bottom: 30px; padding: 0px; text-size-adjust: 100%; font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, &quot;STHeiti Light&quot;, 华文细黑, SimSun, 宋体, Arial, sans-serif; font-size: 18px; letter-spacing: 1px; white-space: normal;\">　　索尼称，由于电影《毒液》的高票房以及电视节目的高销售，公司影业部门在第三季度表现强劲。归因于索尼集团的剧场营收在第三季度为5.32亿美元，高于去年同期的3.02亿美元，以及上一季度的3.69亿美元。</p><p style=\"margin-top: 0px; margin-bottom: 30px; padding: 0px; text-size-adjust: 100%; font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, &quot;STHeiti Light&quot;, 华文细黑, SimSun, 宋体, Arial, sans-serif; font-size: 18px; letter-spacing: 1px; white-space: normal;\">　　但是由于频道资产重组导致的成本，影业部门的盈利表现略受影响。该部门的全年预期与之前保持一致：运营收入预期为4.59亿美元，营收为91.7亿美元。</p><p style=\"margin-top: 0px; margin-bottom: 30px; padding: 0px; text-size-adjust: 100%; font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, &quot;STHeiti Light&quot;, 华文细黑, SimSun, 宋体, Arial, sans-serif; font-size: 18px; letter-spacing: 1px; white-space: normal;\">　　音乐部门的营收受录制音乐销售量的减少以及视觉媒体和平台（手游）销售量的减少影响，而有所降低，但与EMI的合并促进了该部门的营收表现。同样的，音乐部门的全年预期也与之前的保持一致：运营收入为21.1亿美元，营收为75亿美元。(小白)</p><p><br/></p>', '1', '0', '0', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for py_user
-- ----------------------------
DROP TABLE IF EXISTS `py_user`;
CREATE TABLE `py_user` (
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of py_user
-- ----------------------------
INSERT INTO `py_user` VALUES ('1', '1', '3127176962@qq.com', 'admin', '$2y$10$cR/GPY7Fyipmb2ckyp3uPOqcjD4Y/dMR/RmUL9i2w9khx6PDSb7By', '/public/avatar/20181221\\dad97ebbb0a0d772f6afd02eaf1d3083.jpg', '不晓得这是啥', '', '', '3', '3', '0', '0', '0', '0', '0', '127.0.0.1', '1549008862', '30', '1', null);
INSERT INTO `py_user` VALUES ('2', '2', '691301630@qq.com', '小白', '$2y$10$ny5cjHwsNrDZkZ6Dg278huBMpXU.cHZLEmOqrSv6zfbS6Jp.KC8Ym', '\\public\\static\\images\\user_defaule.png', null, '', '', '0', '0', '0', '0', '0', '127.0.0.1', '0', '127.0.0.1', '1546828838', '6', '1', null);
INSERT INTO `py_user` VALUES ('3', '2', '3127176962@163.com', '小强', '$2y$10$LKHb3LWl7nOwmce2y2Jf2OClVgZyTwH3IiUBMpJRMKiKa3gYPaPQO', '\\public\\static\\images\\user_defaule.png', null, '', '', '0', '0', '0', '0', '0', '127.0.0.1', '0', '127.0.0.1', '1546498946', '1', '1', null);
