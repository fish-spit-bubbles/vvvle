SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS  `vvvle_adminuser`;
CREATE TABLE `vvvle_adminuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员id自增',
  `users` varchar(255) DEFAULT NULL COMMENT '管理员账号',
  `pwd` varchar(255) DEFAULT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='后台管理员数据库';

insert into `vvvle_adminuser`(`id`,`users`,`pwd`) values
('8','张涛','e10adc3949ba59abbe56e057f20f883e'),
('9','蔡瑞','e10adc3949ba59abbe56e057f20f883e'),
('12','冯扬','e10adc3949ba59abbe56e057f20f883e');
SET FOREIGN_KEY_CHECKS = 1;

