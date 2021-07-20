CREATE TABLE `procedimiento_administrativo` (
  `id_procedimiento` int(11) NOT NULL AUTO_INCREMENT,
  `cuip` text DEFAULT NULL,
  `numero_expediente` text DEFAULT NULL,
  `motivo_procedimiento` text DEFAULT NULL,
  `resolucion` text DEFAULT NULL,
  `fecha_sepracion_remocion` text DEFAULT NULL,
  `periodo` text DEFAULT NULL,
  `intancia_sancionadora` text DEFAULT NULL,
  PRIMARY KEY  (`id_procedimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
