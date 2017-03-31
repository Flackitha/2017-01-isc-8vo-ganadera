alter table tbl_socios_persona_fisica
add apellidopaterno varchar (80) not null;
alter table tbl_socios_persona_fisica
add apellidomaterno varchar (80) not null;
alter table tbl_socios_persona_fisica
add opcion tinyint(2) not null;
alter TABLE tbl_socios_persona_fisica MODIFY rfc varchar(13) null;
alter TABLE tbl_socios_persona_fisica MODIFY curp varchar(18) null;
