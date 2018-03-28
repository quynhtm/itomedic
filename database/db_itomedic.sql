/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_itomedic

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-03-14 15:37:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for web_banner
-- ----------------------------
DROP TABLE IF EXISTS `web_banner`;
CREATE TABLE `web_banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `banner_image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `banner_image_temp` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'Lưu image lỗi để sau xóa',
  `banner_link` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `banner_order` tinyint(5) DEFAULT '1' COMMENT 'thứ tự hiển thị',
  `banner_total_click` int(11) DEFAULT '0' COMMENT 'lượt click banner theo id',
  `banner_time_click` int(11) DEFAULT '0' COMMENT 'Time click gần nhất',
  `banner_is_target` tinyint(5) DEFAULT '0' COMMENT '0: Không mở tab mới, 1: mở tab mới',
  `banner_is_rel` tinyint(5) DEFAULT '0' COMMENT '0:nofollow, 1:follow',
  `banner_type` tinyint(5) DEFAULT '0' COMMENT '1:banner home to, 2: banner home nhỏ,3: banner trái, 4 banner phải',
  `banner_page` tinyint(5) DEFAULT '0' COMMENT '1: trang chủ, 2: trang list,3: trang detail, 4: trang list danh mục',
  `banner_category_id` int(11) DEFAULT '0',
  `banner_status` tinyint(5) DEFAULT '0',
  `banner_is_run_time` tinyint(5) DEFAULT '0' COMMENT '0: không có time chay,1: có thời gian chạy quảng cáo',
  `banner_start_time` int(11) DEFAULT '0',
  `banner_end_time` int(11) DEFAULT '0',
  `banner_is_shop` tinyint(5) DEFAULT '0' COMMENT '0: Không phải banner shop,1: quảng cáo banner của shop',
  `banner_shop_id` int(11) DEFAULT '0',
  `banner_create_time` int(11) DEFAULT '0',
  `banner_update_time` int(11) DEFAULT '0',
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of web_banner
-- ----------------------------

-- ----------------------------
-- Table structure for web_category
-- ----------------------------
DROP TABLE IF EXISTS `web_category`;
CREATE TABLE `web_category` (
  `category_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `category_depart_id` int(12) DEFAULT NULL,
  `category_type` tinyint(2) DEFAULT '0' COMMENT 'loại danh mục',
  `category_level` tinyint(2) DEFAULT '1' COMMENT 'cấp danh mục',
  `category_image_background` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_icons` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_status` tinyint(1) DEFAULT '0',
  `category_menu_status` tinyint(1) DEFAULT '0',
  `category_menu_right` tinyint(1) DEFAULT NULL,
  `category_order` tinyint(5) DEFAULT '0',
  PRIMARY KEY (`category_id`),
  KEY `status` (`category_status`) USING BTREE,
  KEY `id_parrent` (`category_parent_id`,`category_status`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of web_category
-- ----------------------------

-- ----------------------------
-- Table structure for web_contact
-- ----------------------------
DROP TABLE IF EXISTS `web_contact`;
CREATE TABLE `web_contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_title` varchar(255) DEFAULT NULL COMMENT 'tên liên hệ',
  `contact_content` mediumtext,
  `contact_content_reply` mediumtext,
  `contact_user_id_send` int(11) DEFAULT '0' COMMENT '0: khách vãng lai gửi, > 0 shop gửi liên hệ',
  `contact_user_name_send` varchar(255) DEFAULT NULL,
  `contact_phone_send` varchar(255) DEFAULT NULL,
  `contact_email_send` varchar(255) DEFAULT NULL,
  `contact_type` tinyint(5) DEFAULT '1' COMMENT '1:loại gửi , 2: loại nhận',
  `contact_reason` tinyint(5) DEFAULT '1' COMMENT 'Lý do gửi liên hệ: 1: liên hệ ở ngoài site, 2: shop liên hệ với quản trị',
  `contact_status` tinyint(5) DEFAULT '1' COMMENT '1: liên hệ mới, 2: đã xác nhận,3: đã xử lý',
  `contact_time_creater` int(11) DEFAULT NULL,
  `contact_user_id_update` int(11) DEFAULT NULL COMMENT 'Người xử lý liên hệ',
  `contact_user_name_update` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `contact_time_update` int(11) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web_contact
-- ----------------------------

-- ----------------------------
-- Table structure for web_group_user
-- ----------------------------
DROP TABLE IF EXISTS `web_group_user`;
CREATE TABLE `web_group_user` (
  `group_user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id nhom nguoi dung',
  `group_user_name` varchar(50) NOT NULL COMMENT 'Ten nhom nguoi dung',
  `group_user_status` int(1) NOT NULL DEFAULT '1' COMMENT '1 : hiá»‡n , 0 : áº©n',
  `group_user_type` int(1) NOT NULL DEFAULT '1' COMMENT '1:admin;2:shop',
  `group_user_order` tinyint(5) DEFAULT '1',
  `group_user_view` tinyint(2) DEFAULT '1' COMMENT '1:view quyền: 0 là ko view',
  PRIMARY KEY (`group_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web_group_user
-- ----------------------------
INSERT INTO `web_group_user` VALUES ('1', 'Super Admin', '1', '1', '1', '1');
INSERT INTO `web_group_user` VALUES ('2', 'Tech code', '1', '1', '1', '1');
INSERT INTO `web_group_user` VALUES ('4', 'Boss', '1', '1', '1', '0');

-- ----------------------------
-- Table structure for web_group_user_permission
-- ----------------------------
DROP TABLE IF EXISTS `web_group_user_permission`;
CREATE TABLE `web_group_user_permission` (
  `group_user_id` int(11) NOT NULL COMMENT 'id nhÃ³m',
  `permission_id` int(11) NOT NULL COMMENT 'id quyÃ¨n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web_group_user_permission
-- ----------------------------
INSERT INTO `web_group_user_permission` VALUES ('2', '13');
INSERT INTO `web_group_user_permission` VALUES ('2', '18');
INSERT INTO `web_group_user_permission` VALUES ('2', '23');
INSERT INTO `web_group_user_permission` VALUES ('2', '28');
INSERT INTO `web_group_user_permission` VALUES ('2', '33');
INSERT INTO `web_group_user_permission` VALUES ('2', '38');
INSERT INTO `web_group_user_permission` VALUES ('2', '41');
INSERT INTO `web_group_user_permission` VALUES ('2', '42');
INSERT INTO `web_group_user_permission` VALUES ('3', '42');
INSERT INTO `web_group_user_permission` VALUES ('3', '43');
INSERT INTO `web_group_user_permission` VALUES ('5', '2');
INSERT INTO `web_group_user_permission` VALUES ('5', '3');
INSERT INTO `web_group_user_permission` VALUES ('1', '1');

-- ----------------------------
-- Table structure for web_menu_system
-- ----------------------------
DROP TABLE IF EXISTS `web_menu_system`;
CREATE TABLE `web_menu_system` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `menu_url` varchar(100) DEFAULT NULL,
  `menu_name` varchar(100) DEFAULT NULL,
  `menu_name_en` varchar(100) DEFAULT NULL,
  `menu_icons` varchar(30) DEFAULT NULL,
  `menu_type` char(10) DEFAULT NULL,
  `role_id` varchar(100) DEFAULT NULL,
  `showcontent` smallint(2) DEFAULT '0',
  `show_permission` smallint(2) DEFAULT '0',
  `show_menu` smallint(2) DEFAULT '1',
  `ordering` int(6) DEFAULT '1',
  `position` tinyint(4) DEFAULT NULL,
  `active` tinyint(4) DEFAULT '1',
  `access_data` text,
  `allow_guest` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web_menu_system
-- ----------------------------
INSERT INTO `web_menu_system` VALUES ('1', '0', '#', 'Quản lý Hệ thống', 'System management', 'fa fa-home icon-4x', null, null, '0', '1', '1', '2', null, '1', null, '1');
INSERT INTO `web_menu_system` VALUES ('2', '1', 'admin.user_view', 'Quản lý Người dùng', 'User Management', 'fa fa-user icon-4x', null, null, '0', '1', '1', '0', null, '1', null, '0');
INSERT INTO `web_menu_system` VALUES ('3', '0', '#', 'Quản lý nhân sự', 'HR Management', 'fa fa-users icon-4x', null, null, '0', '0', '1', '3', null, '1', null, '0');
INSERT INTO `web_menu_system` VALUES ('4', '1', 'admin.roleView', 'Quản lý Role', 'System SettingRole', 'fa fa-cog icon-4x', null, null, '0', '0', '1', '1', null, '1', null, '0');
INSERT INTO `web_menu_system` VALUES ('8', '11', 'admin.menuView', 'Menu admin', 'Menu Site', 'fa fa-sitemap', null, null, '0', '0', '0', '3', null, '1', null, '0');
INSERT INTO `web_menu_system` VALUES ('9', '11', 'admin.permission_view', 'Phân quyền hệ thống', 'System permission', 'fa fa-user icon-4x', null, null, '0', '0', '0', '1', null, '1', null, '0');
INSERT INTO `web_menu_system` VALUES ('10', '11', 'admin.groupUser_view', 'Nhóm quyền', 'Group Permission', 'fa fa-users icon-4x', null, null, '0', '0', '0', '1', null, '1', null, '0');
INSERT INTO `web_menu_system` VALUES ('11', '0', '#', 'Quản trị Site', 'Manager Site', 'fa fa-cogs icon-4x', null, null, '0', '0', '0', '1', null, '1', null, '0');
INSERT INTO `web_menu_system` VALUES ('18', '0', '#', 'Quản lý tài sản', 'SMS Management', 'fa fa-cubes icon-4x', null, null, '0', '0', '1', '4', null, '1', null, '0');
INSERT INTO `web_menu_system` VALUES ('35', '11', 'admin.viewRole', 'Phân quyền Role', 'Role permission', 'fa fa-cog icon-4x', null, null, '0', '0', '0', '4', null, '1', null, '0');
INSERT INTO `web_menu_system` VALUES ('37', '0', '#', 'Thống kê báo cáo', null, 'fa fa-line-chart icon-4x', null, null, '0', '0', '1', '8', null, '1', null, '0');
INSERT INTO `web_menu_system` VALUES ('38', '0', '#', 'QL thư, tin nhắn', null, 'fa fa-envelope icon-4x', null, null, '0', '0', '1', '6', null, '1', null, '0');
INSERT INTO `web_menu_system` VALUES ('39', '0', '#', 'QL văn bản', null, 'fa fa-book icon-4x', null, null, '0', '0', '1', '7', null, '1', null, '0');

-- ----------------------------
-- Table structure for web_news
-- ----------------------------
DROP TABLE IF EXISTS `web_news`;
CREATE TABLE `web_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) DEFAULT NULL,
  `news_desc_sort` text,
  `news_content` text,
  `news_image` varchar(255) DEFAULT NULL COMMENT 'ảnh đại diện của bài viết',
  `news_image_other` varchar(255) DEFAULT NULL COMMENT 'Lưu ảnh của bài viết',
  `news_type` tinyint(5) DEFAULT '1' COMMENT 'Kiểu tin',
  `news_category` int(11) DEFAULT NULL,
  `news_category_name` varchar(255) DEFAULT NULL,
  `news_status` tinyint(5) DEFAULT NULL,
  `news_hot` tinyint(2) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `news_create` int(11) DEFAULT NULL,
  `news_user_create` varchar(255) DEFAULT NULL,
  `news_update` int(11) DEFAULT NULL,
  `news_user_update` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web_news
-- ----------------------------

-- ----------------------------
-- Table structure for web_permission
-- ----------------------------
DROP TABLE IF EXISTS `web_permission`;
CREATE TABLE `web_permission` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `permission_code` varchar(50) NOT NULL COMMENT 'MÃ£ quyá»n',
  `permission_name` varchar(50) NOT NULL COMMENT 'TÃªn quyá»n',
  `permission_status` int(1) NOT NULL DEFAULT '1' COMMENT '1:hiá»‡n , 0:áº©n',
  `permission_group_name` varchar(255) DEFAULT NULL COMMENT 'group ten controller',
  PRIMARY KEY (`permission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web_permission
-- ----------------------------
INSERT INTO `web_permission` VALUES ('1', 'root', 'Root', '1', 'Root');
INSERT INTO `web_permission` VALUES ('2', 'user_view', 'Xem danh sách user Admin', '1', 'Tài khoản Admin');
INSERT INTO `web_permission` VALUES ('3', 'user_create', 'Tạo user Admin', '1', 'Tài khoản Admin');
INSERT INTO `web_permission` VALUES ('4', 'user_edit', 'Sửa user Admin', '1', 'Tài khoản Admin');
INSERT INTO `web_permission` VALUES ('5', 'user_change_pass', 'Thay đổi user Admin', '1', 'Tài khoản Admin');
INSERT INTO `web_permission` VALUES ('6', 'user_remove', 'Xóa user Admin', '1', 'Tài khoản Admin');
INSERT INTO `web_permission` VALUES ('7', 'group_user_view', 'Xem nhóm quyền', '1', 'Nhóm quyền');
INSERT INTO `web_permission` VALUES ('8', 'group_user_create', 'Tạo nhóm quyền', '1', 'Nhóm quyền');
INSERT INTO `web_permission` VALUES ('9', 'group_user_edit', 'Sửa nhóm quyền', '1', 'Nhóm quyền');
INSERT INTO `web_permission` VALUES ('10', 'permission_full', 'Full tạo quyền', '1', 'Tạo quyền');
INSERT INTO `web_permission` VALUES ('11', 'permission_create', 'Tạo tạo quyền', '1', 'Tạo quyền');
INSERT INTO `web_permission` VALUES ('12', 'permission_edit', 'Sửa tạo quyền', '1', 'Tạo quyền');
INSERT INTO `web_permission` VALUES ('13', 'banner_full', 'Full quảng cáo', '1', 'Quyền quảng cáo');
INSERT INTO `web_permission` VALUES ('14', 'banner_view', 'Xem quảng cáo', '1', 'Quyền quảng cáo');
INSERT INTO `web_permission` VALUES ('15', 'banner_delete', 'Xóa quảng cáo', '1', 'Quyền quảng cáo');
INSERT INTO `web_permission` VALUES ('16', 'banner_create', 'Tạo quảng cáo', '1', 'Quyền quảng cáo');
INSERT INTO `web_permission` VALUES ('17', 'banner_edit', 'Sửa quảng cáo', '1', 'Quyền quảng cáo');
INSERT INTO `web_permission` VALUES ('18', 'category_full', 'Full danh mục', '1', 'Quyền danh mục');
INSERT INTO `web_permission` VALUES ('19', 'category_view', 'Xem danh mục', '1', 'Quyền danh mục');
INSERT INTO `web_permission` VALUES ('20', 'category_delete', 'Xóa danh mục', '1', 'Quyền danh mục');
INSERT INTO `web_permission` VALUES ('21', 'category_create', 'Tạo danh mục', '1', 'Quyền danh mục');
INSERT INTO `web_permission` VALUES ('22', 'category_edit', 'Sửa danh mục', '1', 'Quyền danh mục');
INSERT INTO `web_permission` VALUES ('23', 'items_full', 'Full tin rao', '1', 'Quyền tin rao');
INSERT INTO `web_permission` VALUES ('24', 'items_view', 'Xem tin rao', '1', 'Quyền tin rao');
INSERT INTO `web_permission` VALUES ('25', 'items_delete', 'Xóa tin rao', '1', 'Quyền tin rao');
INSERT INTO `web_permission` VALUES ('26', 'items_create', 'Tạo tin rao', '1', 'Quyền tin rao');
INSERT INTO `web_permission` VALUES ('27', 'items_edit', 'Sửa tin rao', '1', 'Quyền tin rao');
INSERT INTO `web_permission` VALUES ('28', 'news_full', 'Full tin tức', '1', 'Quyền tin tức');
INSERT INTO `web_permission` VALUES ('29', 'news_view', 'Xem tin tức', '1', 'Quyền tin tức');
INSERT INTO `web_permission` VALUES ('30', 'news_delete', 'Xóa tin tức', '1', 'Quyền tin tức');
INSERT INTO `web_permission` VALUES ('31', 'news_create', 'Tạo tin tức', '1', 'Quyền tin tức');
INSERT INTO `web_permission` VALUES ('32', 'news_edit', 'Sửa tin tức', '1', 'Quyền tin tức');
INSERT INTO `web_permission` VALUES ('33', 'province_full', 'Full tỉnh thành', '1', 'Quyền tỉnh thành');
INSERT INTO `web_permission` VALUES ('34', 'province_view', 'Xem tỉnh thành', '1', 'Quyền tỉnh thành');
INSERT INTO `web_permission` VALUES ('35', 'province_delete', 'Xóa tỉnh thành', '1', 'Quyền tỉnh thành');
INSERT INTO `web_permission` VALUES ('36', 'province_create', 'Tạo tỉnh thành', '1', 'Quyền tỉnh thành');
INSERT INTO `web_permission` VALUES ('37', 'province_edit', 'Sửa tỉnh thành', '1', 'Quyền tỉnh thành');
INSERT INTO `web_permission` VALUES ('38', 'user_customer_full', 'Full khách hàng', '1', 'Quyền khách hàng');
INSERT INTO `web_permission` VALUES ('39', 'user_customer_view', 'Xem khách hàng', '1', 'Quyền khách hàng');
INSERT INTO `web_permission` VALUES ('40', 'user_customer_delete', 'Xóa khách hàng', '1', 'Quyền khách hàng');
INSERT INTO `web_permission` VALUES ('41', 'user_customer_create', 'Tạo khách hàng', '1', 'Quyền khách hàng');
INSERT INTO `web_permission` VALUES ('42', 'user_customer_edit', 'Sửa khách hàng', '1', 'Quyền khách hàng');
INSERT INTO `web_permission` VALUES ('43', 'toolsCommon_full', 'Full view share', '1', 'Full Quyền share');
INSERT INTO `web_permission` VALUES ('44', 'is_boss', 'Boss 2', '1', 'Boss');
INSERT INTO `web_permission` VALUES ('45', 'waittingSms_full', 'Full waittingSms', '1', 'Quyền waittingSms');
INSERT INTO `web_permission` VALUES ('46', 'waittingSms_view', 'Xem waittingSms', '1', 'Quyền waittingSms');
INSERT INTO `web_permission` VALUES ('47', 'waittingSms_delete', 'Xóa waittingSms', '1', 'Quyền waittingSms');
INSERT INTO `web_permission` VALUES ('48', 'waittingSms_create', 'Tạo waittingSms', '1', 'Quyền waittingSms');
INSERT INTO `web_permission` VALUES ('49', 'waittingSms_edit', 'Sửa waittingSms', '1', 'Quyền waittingSms');
INSERT INTO `web_permission` VALUES ('50', 'systemSetting_full', 'Full systemSetting', '1', 'Quyền systemSetting');
INSERT INTO `web_permission` VALUES ('51', 'systemSetting_view', 'Xem systemSetting', '1', 'Quyền systemSetting');
INSERT INTO `web_permission` VALUES ('52', 'systemSetting_delete', 'Xóa systemSetting', '1', 'Quyền systemSetting');
INSERT INTO `web_permission` VALUES ('53', 'systemSetting_create', 'Tạo systemSetting', '1', 'Quyền systemSetting');
INSERT INTO `web_permission` VALUES ('54', 'systemSetting_edit', 'Sửa systemSetting', '1', 'Quyền systemSetting');
INSERT INTO `web_permission` VALUES ('55', 'stationSetting_full', 'Full stationSetting', '1', 'Quyền stationSetting');
INSERT INTO `web_permission` VALUES ('56', 'stationSetting_view', 'Xem stationSetting', '1', 'Quyền stationSetting');
INSERT INTO `web_permission` VALUES ('57', 'stationSetting_delete', 'Xóa stationSetting', '1', 'Quyền stationSetting');
INSERT INTO `web_permission` VALUES ('58', 'stationSetting_create', 'Tạo stationSetting', '1', 'Quyền stationSetting');
INSERT INTO `web_permission` VALUES ('59', 'stationSetting_edit', 'Sửa stationSetting', '1', 'Quyền stationSetting');
INSERT INTO `web_permission` VALUES ('60', 'sendSmsHistory_full', 'Full sendSmsHistory', '1', 'Quyền sendSmsHistory');
INSERT INTO `web_permission` VALUES ('61', 'sendSmsHistory_view', 'Xem sendSmsHistory', '1', 'Quyền sendSmsHistory');
INSERT INTO `web_permission` VALUES ('62', 'sendSmsHistory_delete', 'Xóa sendSmsHistory', '1', 'Quyền sendSmsHistory');
INSERT INTO `web_permission` VALUES ('63', 'sendSmsHistory_create', 'Tạo sendSmsHistory', '1', 'Quyền sendSmsHistory');
INSERT INTO `web_permission` VALUES ('64', 'sendSmsHistory_edit', 'Sửa sendSmsHistory', '1', 'Quyền sendSmsHistory');
INSERT INTO `web_permission` VALUES ('65', 'sendSms_full', 'Full sendSms', '1', 'Quyền sendSms');
INSERT INTO `web_permission` VALUES ('66', 'sendSms_delete', 'Xóa sendSms', '1', 'Quyền sendSms');
INSERT INTO `web_permission` VALUES ('67', 'sendSms_create', 'Tạo sendSms', '1', 'Quyền sendSms');
INSERT INTO `web_permission` VALUES ('68', 'sendSms_edit', 'Sửa sendSms', '1', 'Quyền sendSms');
INSERT INTO `web_permission` VALUES ('69', 'stationReport_full', 'Full reportChart', '1', 'Quyền reportChart');
INSERT INTO `web_permission` VALUES ('70', 'stationReport_view', 'Xem reportChart', '1', 'Quyền reportChart');
INSERT INTO `web_permission` VALUES ('71', 'reportChart_full', 'Full stationSetting', '1', 'Quyền stationSetting');
INSERT INTO `web_permission` VALUES ('72', 'reportChart_view', 'Xem stationSetting', '1', 'Quyền stationSetting');
INSERT INTO `web_permission` VALUES ('73', 'modem_full', 'Full Modem', '1', 'Quyền Modem');
INSERT INTO `web_permission` VALUES ('74', 'modem_view', 'Xem Modem', '1', 'Quyền Modem');
INSERT INTO `web_permission` VALUES ('75', 'modem_delete', 'Xóa Modem', '1', 'Quyền Modem');
INSERT INTO `web_permission` VALUES ('76', 'modem_create', 'Tạo Modem', '1', 'Quyền Modem');
INSERT INTO `web_permission` VALUES ('77', 'modem_edit', 'Sửa Modem', '1', 'Quyền Modem');
INSERT INTO `web_permission` VALUES ('78', 'menu_full', 'Full menu', '1', 'Quyền menu');
INSERT INTO `web_permission` VALUES ('79', 'menu_view', 'Xem menu', '1', 'Quyền menu');
INSERT INTO `web_permission` VALUES ('80', 'menu_delete', 'Xóa menu', '1', 'Quyền menu');
INSERT INTO `web_permission` VALUES ('81', 'menu_create', 'Tạo menu', '1', 'Quyền menu');
INSERT INTO `web_permission` VALUES ('82', 'menu_edit', 'Sửa menu', '1', 'Quyền menu');
INSERT INTO `web_permission` VALUES ('83', 'deviceToken_full', 'Full thiết bị', '1', 'Quyền thiết bị');
INSERT INTO `web_permission` VALUES ('84', 'deviceToken_view', 'Xem thiết bị', '1', 'Quyền thiết bị');
INSERT INTO `web_permission` VALUES ('85', 'deviceToken_delete', 'Xóa thiết bị', '1', 'Quyền thiết bị');
INSERT INTO `web_permission` VALUES ('86', 'deviceToken_create', 'Tạo thiết bị', '1', 'Quyền thiết bị');
INSERT INTO `web_permission` VALUES ('87', 'deviceToken_edit', 'Sửa thiết bị', '1', 'Quyền thiết bị');
INSERT INTO `web_permission` VALUES ('88', 'carrierSetting_full', 'Full nhà mạng', '1', 'Quyền nhà mạng');
INSERT INTO `web_permission` VALUES ('89', 'carrierSetting_view', 'Xem nhà mạng', '1', 'Quyền nhà mạng');
INSERT INTO `web_permission` VALUES ('90', 'carrierSetting_delete', 'Xóa nhà mạng', '1', 'Quyền nhà mạng');
INSERT INTO `web_permission` VALUES ('91', 'carrierSetting_create', 'Tạo nhà mạng', '1', 'Quyền nhà mạng');
INSERT INTO `web_permission` VALUES ('92', 'carrierSetting_edit', 'Sửa nhà mạng', '1', 'Quyền nhà mạng');
INSERT INTO `web_permission` VALUES ('93', 'sendSmsTemplate_full', 'Full sendSmsTemplate', '1', 'Quyền sendSmsTemplate');
INSERT INTO `web_permission` VALUES ('94', 'sendSmsTemplate_view', 'Xem sendSmsTemplate', '1', 'Quyền sendSmsTemplate');
INSERT INTO `web_permission` VALUES ('95', 'sendSmsTemplate_delete', 'Xóa sendSmsTemplate', '1', 'Quyền sendSmsTemplate');
INSERT INTO `web_permission` VALUES ('96', 'sendSmsTemplate_create', 'Tạo sendSmsTemplate', '1', 'Quyền sendSmsTemplate');
INSERT INTO `web_permission` VALUES ('97', 'sendSmsTemplate_edit', 'Sửa sendSmsTemplate', '1', 'Quyền sendSmsTemplate');

-- ----------------------------
-- Table structure for web_role
-- ----------------------------
DROP TABLE IF EXISTS `web_role`;
CREATE TABLE `web_role` (
  `role_id` int(10) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(250) DEFAULT NULL,
  `role_project` int(11) DEFAULT '0',
  `role_order` tinyint(10) DEFAULT NULL COMMENT 'danh sách quyền',
  `role_status` tinyint(2) DEFAULT '1',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web_role
-- ----------------------------
INSERT INTO `web_role` VALUES ('6', 'Supper Admin', '0', '1', '1');
INSERT INTO `web_role` VALUES ('7', 'Manager', '0', '2', '1');
INSERT INTO `web_role` VALUES ('10', 'Poster', '0', '3', '1');

-- ----------------------------
-- Table structure for web_role_menu
-- ----------------------------
DROP TABLE IF EXISTS `web_role_menu`;
CREATE TABLE `web_role_menu` (
  `role_menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_group_menu_id` varchar(250) DEFAULT NULL COMMENT 'danh sách id menu',
  `role_group_permission` varchar(250) DEFAULT NULL COMMENT 'danh sách quyền',
  `role_status` tinyint(2) DEFAULT '1',
  `role_id` int(10) DEFAULT NULL,
  `role_name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`role_menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web_role_menu
-- ----------------------------
INSERT INTO `web_role_menu` VALUES ('1', '1,2,42,41,40,43,44,45', '1', '1', '6', 'Supper Admin');
INSERT INTO `web_role_menu` VALUES ('2', '41,40', '1', '1', '10', 'Poster');
INSERT INTO `web_role_menu` VALUES ('3', '40', '1,2', '1', '10', 'Poster');

-- ----------------------------
-- Table structure for web_user
-- ----------------------------
DROP TABLE IF EXISTS `web_user`;
CREATE TABLE `web_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_object_id` int(11) DEFAULT '0' COMMENT 'Id nhân sự có account hệ thống',
  `user_parent` int(11) DEFAULT '0',
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_full_name` varchar(255) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_phone` varchar(11) DEFAULT NULL COMMENT 'Số điện thoại cố định',
  `user_status` int(2) NOT NULL DEFAULT '1' COMMENT '-1: xÃ³a , 1: active',
  `user_sex` tinyint(2) DEFAULT '1',
  `user_group` varchar(255) DEFAULT NULL,
  `user_group_menu` varchar(255) DEFAULT NULL COMMENT 'view menu admin',
  `user_view` tinyint(2) DEFAULT '1',
  `user_last_login` int(11) DEFAULT NULL,
  `user_last_ip` varchar(15) DEFAULT NULL,
  `user_create_id` int(11) DEFAULT NULL,
  `user_create_name` varchar(255) DEFAULT NULL,
  `user_edit_id` int(11) DEFAULT NULL,
  `user_edit_name` varchar(255) DEFAULT NULL,
  `user_created` int(11) DEFAULT NULL,
  `user_updated` int(11) DEFAULT NULL,
  `role_type` tinyint(2) DEFAULT '3' COMMENT '1:SuperAdmin, 2:Admin, 3:Customer',
  `role_name` varchar(200) DEFAULT NULL COMMENT 'Tên tài khoản tương ứng: SuperAdmin, Admin, Customer',
  `address` varchar(255) DEFAULT NULL COMMENT 'Địa chỉ',
  `number_code` varchar(250) DEFAULT NULL COMMENT 'Số giấy phép kinh doanh',
  `address_register` varchar(255) DEFAULT NULL COMMENT 'địa chỉ kinh doanh',
  `telephone` varchar(250) DEFAULT NULL COMMENT 'Số điện thoại di động',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web_user
-- ----------------------------
INSERT INTO `web_user` VALUES ('2', '0', '0', 'admin', '44efae715828ed9b7398268095162683', 'Root', 'quynh@gmail.com', '', '1', '1', '1', '1,3,28,2,4,15,29,31,6,26,27', '1', '1510040205', '127.0.0.1', null, null, '3', 'quynhtm', null, '1512385692', '1', 'SuperAdmin', null, null, null, null);
INSERT INTO `web_user` VALUES ('3', '0', '0', 'quynhtm', '0efe590a71b5c28fea63b87ace3b3911', 'Trương Mạnh Quynh', 'quynh@gmail.com', '09838413368', '1', '1', '1', '1,3,28,2,4,15,29,31,6,26,27', '0', '1521016241', '::1', '2', 'admin', '3', 'quynhtm', '1499654993', '1512385683', '1', 'SuperAdmin', null, null, null, null);
INSERT INTO `web_user` VALUES ('4', '0', '0', 'duynx', '3170aa0b05d30a3a4362da262a92479b', 'Nguyễn Xuân Duy', 'duynguyen@gmail.com', '', '1', '1', '1', '1,3,18,16,28,2,4,15,29,31,6,5,22,23,24,25,17,36,20,30,19,33,21,34,26,27', '0', '1520180074', '116.107.152.183', '2', 'admin', '3', 'quynhtm', '1510040284', '1514392213', '1', 'SuperAdmin', null, null, null, null);
INSERT INTO `web_user` VALUES ('7', '0', '0', 'quantriAdmin', '2aed6c871788e127e77d46323136fa13', 'Quản trị Admin SMS', 'leeduxng@gmail.com', '0192424222', '1', '1', '1', '1,2,42,41,40,43,44,45,46,47,48', '1', '1520656021', '183.91.4.105', '2', 'admin', '3', 'quynhtm', '1510040642', '1519230607', '6', 'Supper Admin', null, '23623632723723', 'TP Thanh Hóa, tỉnh Thanh Hóa', '02421525444');
INSERT INTO `web_user` VALUES ('8', '0', '0', 'vult', '913ce47851469a832170046fd6e40240', 'Lê Tuấn Vũ', 'vult@gmail.com', '0965497386', '1', '1', '1', '1,2,42,41,40,43,44,45,46,47,48', '0', '1520685126', '14.162.193.138', '7', 'quantriAdmin', '3', 'quynhtm', '1520561642', '1521016499', '1', 'Admin', null, '164306617', 'Yên Nghĩa, Hà Đông, Hà Nội', '0965497386');

-- ----------------------------
-- Table structure for web_video
-- ----------------------------
DROP TABLE IF EXISTS `web_video`;
CREATE TABLE `web_video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `video_name_alias` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `video_sort_desc` text CHARACTER SET utf8,
  `video_content` text CHARACTER SET utf8,
  `video_link` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `video_file` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `video_img` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `video_img_temp` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `video_status` tinyint(5) DEFAULT NULL,
  `video_view` int(11) DEFAULT '0' COMMENT 'lượt view xem video tren site',
  `video_hot` tinyint(4) DEFAULT NULL,
  `video_time_creater` int(11) DEFAULT '0',
  `video_category` int(10) DEFAULT NULL,
  `type_language` tinyint(5) DEFAULT '1',
  `video_time_update` int(11) DEFAULT '0',
  `video_meta_title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `video_meta_keyword` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `video_meta_description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of web_video
-- ----------------------------
