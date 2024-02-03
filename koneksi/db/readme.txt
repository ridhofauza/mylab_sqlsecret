- Create user GRANT ACCESS to DB: db_mylabsql and information_schema
CREATE USER 'isorek'@'localhost' IDENTIFIED BY 'pastiiso123';
GRANT SELECT on db_mylabsql.* TO 'isorek'@'localhost' WITH GRANT OPTION;

- Create user GRANT ACCESS to DB: db_mylabsql_2 and information_schema
CREATE USER 'logrek2'@'localhost' IDENTIFIED BY 'isopasti169';
GRANT SELECT, INSERT on db_mylabsql_2.* TO 'logrek2'@'localhost' WITH GRANT OPTION;

- Create user GRANT ACCESS to DB: db_mylabsql_3 and information_schema
CREATE USER 'ayorek'@'localhost' IDENTIFIED BY 'isopasti123';
GRANT SELECT on db_mylabsql_3.* TO 'ayorek'@'localhost' WITH GRANT OPTION;

- Create user GRANT ACCESS to DB: db_mylabsql_4 and information_schema
CREATE USER 'userrek'@'localhost' IDENTIFIED BY 'isopasti132';
GRANT SELECT on db_mylabsql_4.* TO 'userrek'@'localhost' WITH GRANT OPTION;

- Create user GRANT ACCESS to DB: db_mylabsql_4b and information_schema
CREATE USER 'userrek_b'@'localhost' IDENTIFIED BY 'isopasti132_b';
GRANT SELECT on db_mylabsql_4b.* TO 'userrek_b'@'localhost' WITH GRANT OPTION;

- Create user GRANT ACCESS to DB: db_mylabsql_5 and information_schema
CREATE USER 'postrek5'@'localhost' IDENTIFIED BY 'isopasti195';
GRANT SELECT on db_mylabsql_5.* TO 'postrek5'@'localhost' WITH GRANT OPTION;