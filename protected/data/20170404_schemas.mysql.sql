ALTER TABLE `tbl_socios_persona_fisica` CHANGE `documentacion_rfc` `d_rfc` CHAR(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `tbl_socios_persona_fisica` CHANGE `documentacion_curp` `d_curp` CHAR(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `tbl_socios_persona_fisica` CHANGE `documentacion_identificacion` `d_identificacion` CHAR(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `tbl_socios_persona_fisica` CHANGE `documentacion_constancia_fondo` `d_constancia_fondo` CHAR(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `tbl_socios_persona_fisica` CHANGE `documentacion_acta_asamblea` `d_acta_asamblea` CHAR(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `tbl_socios_persona_fisica` CHANGE `documentacion_estudio_viabilidad` `d_estudio_viabilidad` CHAR(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;


ALTER TABLE `tbl_socios_persona_fisica` CHANGE `d_rfc` `d_rfc` CHAR(1) NOT NULL;
ALTER TABLE `tbl_socios_persona_fisica` CHANGE `d_curp` `d_curp` CHAR(1) NOT NULL;
ALTER TABLE `tbl_socios_persona_fisica` CHANGE `d_identificacion` `d_identificacion` CHAR(1) NOT NULL;
ALTER TABLE `tbl_socios_persona_fisica` CHANGE `d_constancia_fondo` `d_constancia_fondo` CHAR(1) NOT NULL;
ALTER TABLE `tbl_socios_persona_fisica` CHANGE `d_acta_asamblea` `d_acta_asamblea` CHAR(1) NOT NULL;
ALTER TABLE `tbl_socios_persona_fisica` CHANGE `d_estudio_viabilidad` `d_estudio_viabilidad` CHAR(1) NOT NULL;

