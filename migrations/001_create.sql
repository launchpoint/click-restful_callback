CREATE TABLE IF NOT EXISTS `restful_callbacks` (
  `id` int(11) NOT NULL auto_increment,
  `token` varchar(500) NOT NULL,
  `args` longtext NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
