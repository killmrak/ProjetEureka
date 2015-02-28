



CREATE TABLE IF NOT EXISTS `USERS` (
`id` int(11) NOT NULL,
`surname` varchar(32) NOT NULL
`name` varchar(32) NOT NULL
`country` varchar(32) NOT NULL
`email` varchar(32) NOT NULL
  `login` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `USERS`
 ADD PRIMARY KEY (`id`);

