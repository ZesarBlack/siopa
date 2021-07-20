
Número de convocatoria
Folio en la promoción
Fecha de ingreso a la institución
Categoría actual
Antigüedad en la categoría
Categoría a la que aspira
Documentación completa entregada (Sí o No)
Estatus ante la Unidad de Asuntos Internos
Estatus ante la Comisión del SPCP
Estatus ante el Consejo Honor y Justicia
Estatus ante la Contraloría Municipal
Fecha de aplicación de examen
Resultado del examen
No. de oficio de comisión para la evaluación de control de confianza
Fecha de programación de la evaluación
Resultado de la evaluación
Número de Oficio del Centro de Evaluación
Fecha de emisión de hoja de resultado.
Número de sesión de la Comisión del SPCP en que se aprueba la entrega de la Constancia de Grado
Fecha de emisión de la Constancia de Grado.


create table promocion_grado(
id_promocion int not null auto_increment primary key,
cuip text NULL,
numero_conv text NULL,
folio_prom text NULL,
fecha_ingreso date NULL,
categoria_actual text NULL,
antiguedad_cate text NULL,
categoria_asp text NULL,
documentacion text NULL,
estatus_unidad text NULL,
estatus_comision text NULL,
estatus_consejo text NULL,
estatus_contraloria text NULL,
fecha_a_examen date NULL,
resultado_examen text NULL,
n_ofisio_comision text NULL,
fecha_progra_eva date NULL,
resultado_eva text NULL,
numero_oficio_centro text NULL,
fecha_emision_hoja_res date NULL,
numero_sesion_comision text NULL,
fecha_emision_constancia date NULL
);
