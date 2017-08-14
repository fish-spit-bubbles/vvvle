SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS  `vvvle_users`;
CREATE TABLE `vvvle_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `username` varchar(255) DEFAULT NULL COMMENT 'vvvle登陆用户名',
  `email` varchar(255) DEFAULT NULL COMMENT 'vvvle登陆email',
  `pwd` varchar(255) DEFAULT NULL COMMENT 'vvvle登陆密码',
  `qq` int(50) DEFAULT NULL COMMENT 'vvvle登陆 qq',
  `wechat` varchar(255) DEFAULT NULL COMMENT 'vvvle登陆 微信',
  `addTimes` varchar(255) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COMMENT='vvvle的用户注册信息表';

insert into `vvvle_users`(`id`,`username`,`email`,`pwd`,`qq`,`wechat`,`addTimes`) values
('28','崔斯特','wuyan@qq.com','027d6be7f5a210dc1d6c93ca8ee60a14','1040964968','wechat',null),
('29','小提莫','xiaotimo@163.com','49a7a65738c1c48c398bb683b6267103','123456','wuyan',null),
('30','张无言','12@qq.com','49a7a65738c1c48c398bb683b6267103','10000','10000',null),
('31','哈哈哈','haha@163.com','49a7a65738c1c48c398bb683b6267103','111111','wechat','1502184543'),
('32','熊大大','peterWuyan@163.com','25f9e794323b453885f5181f1b624d0b','123456789','peterWuyan','1502288594'),
('34','乐乐乐','10724@qq.com','e10adc3949ba59abbe56e057f20f883e','123456','123456','1502332024'),
('37','yes','10724@qq.com','e10adc3949ba59abbe56e057f20f883e','123','123','1502509918'),
('38','崔斯特','qqq@163.com','e10adc3949ba59abbe56e057f20f883e','123456','123456','1502525105'),
('41','sadsad',null,'a8f5f167f44f4964e6c998dee827110c','0','sdsadsad','1502526509'),
('42','sadsadsadsad',null,'6686fb1a47e82e0266d5abfb2d5ed920','0','sdsadsad','1502526534'),
('43','ssa','sadas@qq.com','e10adc3949ba59abbe56e057f20f883e','132','1231','1502526558'),
('49','微乐美','weile@163.com','e10adc3949ba59abbe56e057f20f883e','123456','weixin','1502672220'),
('50','TTTT','tt@qq.com','e10adc3949ba59abbe56e057f20f883e','123','123','1502680696'),
('51',null,'123@qq.com','e10adc3949ba59abbe56e057f20f883e','123','123','1502693212');
SET FOREIGN_KEY_CHECKS = 1;

