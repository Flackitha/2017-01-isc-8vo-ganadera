






alter table tbl_socios_persona_fisica 
	add anio integer as (year(fecha_registro));
	
alter table tbl_socios_persona_fisica 
	add mes integer as (month(fecha_registro));