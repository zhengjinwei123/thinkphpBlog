CREATE DATABASE IF NOT EXISTS `jade_blogdb` CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `jade_blogdb`;

CREATE TABLE IF NOT EXISTS `t_user`(
  `id` bigint(20) not null auto_increment comment 'id',
  `username` VARCHAR(40) CHARACTER set utf8 COLLATE utf8_bin not null DEFAULT '' comment '用户名',
  `password` VARCHAR(32) not null DEFAULT '' comment '用户密码',
  `site_theme` VARCHAR(20) CHARACTER set utf8 COLLATE utf8_bin not null DEFAULT '' comment '网站主题',
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;