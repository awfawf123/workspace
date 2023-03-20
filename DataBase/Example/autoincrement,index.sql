-- auto increment 생성;
CREATE TABLE test_member(
	mem_no INT(11) PRIMARY KEY auto_increment
	,mem_name VARCHAR(50)
);

CREATE TABLE test_member(
	mem_no INT(11) PRIMARY KEY
	,mem_name VARCHAR(50)
);

ALTER TABLE test_member MODIFY mem_no INT(11) AUTO_INCREMENT; 

ALTER TABLE test_member AUTO_INCREMENT=10;
	
INSERT INTO test_member (mem_name)
VALUES('오재훈');

SELECT * FROM employees WHERE last_name = 'Swan';

SHOW INDEX FROM employees;

-- index 생성;
CREATE INDEX idx_employees_last_name ON employees(last_name);

DROP INDEX idx_employees_last_name ON employees;
-- mariaDB int타입 뒤에 zerofill check; 
CREATE TABLE test(
 price INT(10) ZEROFILL CHECK(price < 1000000000)
 );