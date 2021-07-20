CREATE TABLE `conclusion_servicio` (
  `id_conclusion` int(11) NOT NULL AUTO_INCREMENT,
  `cuip` text DEFAULT NULL,
  `tipo_conclucion` text DEFAULT NULL,
  `tipo_baja` text DEFAULT NULL,
  `motivo` text DEFAULT NULL,
  `intancia` text DEFAULT NULL,
  `fecha_conclusion` date DEFAULT NULL,
  PRIMARY KEY  (`id_conclusion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
