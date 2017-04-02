use gctfdb
create table operations (id int(5) Not Null auto_increment, flag varchar(50) Not Null, primary key (id));

insert into operations values (1, "GCTF{d4t4ba53_5ecur1ty_m4nag3ment}"), (2, "GCTF{C0n9r4tz_sq1_u53r}"), (3, "GCTF{C0n9r4tz_sq1_adm1n}"), (4, "GCTF{d4t4ba53_m4nag3ment_5yst3ms}");

CREATE USER 'Technician'@'%' IDENTIFIED BY 'password';

GRANT SELECT ON gctfdb.operations TO 'Technician'@'%';






