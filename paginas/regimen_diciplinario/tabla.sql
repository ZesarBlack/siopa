CREATE TABLE `regimen_dicipliario` (
  `id_regimen` int(11) NOT NULL AUTO_INCREMENT,
  `cuip` text DEFAULT NULL,
  `cargo` text DEFAULT NULL,
  `tipo_sansion` text DEFAULT NULL,
  `motivo` text DEFAULT NULL,
  `horas_arresto` text DEFAULT NULL,
  `autoridad_instancia` text DEFAULT NULL,
  `fecha_sancion` date DEFAULT NULL,
  PRIMARY KEY  (`id_regimen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
