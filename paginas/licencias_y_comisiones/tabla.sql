CREATE TABLE `licensias_comisiones` (
  `id_licom` int(11) NOT NULL AUTO_INCREMENT,
  `cuip` text DEFAULT NULL,
  `numero_expediente` int(11) DEFAULT NULL,
  `tipo_licencia` text DEFAULT NULL,
  `periodo_inicio` date DEFAULT NULL,
  `periodo_termino` date DEFAULT NULL,
  `lugar_comision` text DEFAULT NULL,
  `periodo_comision` text DEFAULT NULL,
  PRIMARY KEY  (`id_licom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
cuip
numero_expediente
tipo_licencia
periodo_inicio
periodo_termino
lugar_comision
periodo_comision
