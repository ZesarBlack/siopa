CREATE TABLE `expediente_individual` (
  `id_expediente` int(11) NOT NULL AUTO_INCREMENT,
  `cuip` text DEFAULT NULL,
  `expediente` text DEFAULT NULL,
  PRIMARY KEY  (`id_expediente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
