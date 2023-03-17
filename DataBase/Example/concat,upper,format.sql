SELECT CONCAT('aaaaa','bbbbb');

SELECT CONCAT(last_name,' ',first_name) AS name
FROM employees
WHERE emp_no = 500000;

SELECT CONCAT_WS(' / ','a','b','c');

select FORMAT(123456,1);

SELECT LEFT('abcdefg',3);

SELECT right('abcdefg',3);

SELECT UPPER('abcd');

SELECT LOWER('ABCD');

SELECT LPAD('1',5,'0');

SELECT RPAD('1',5,'0');

SELECT TRIM('      abc ');

SELECT LTRIM('      abc ');

SELECT RTRIM('      abc ');

SELECT SUBSTRING('abcdef',2,4);

SELECT SUBSTRING_index('ab.cd.ef.gh','.',3);

SELECT CEILING(1.1);

SELECT FLOOR(1.1);

SELECT ROUND(1.5);

SELECT TRUNCATE(2.11,0);

SELECT NOW();

SELECT DATE(20230316);

SELECT ADDDATE(NOW(), INTERVAL 1 YEAR);

--    SELECT SUBDATE(NOW(), INTERVAL 1 DAY);

SELECT ADDTIME(NOW(), '-1:1:1');

SELECT emp_no, salary,RANK() over(ORDER BY salary ASC)
FROM salaries;

SELECT emp_no, salary,row_number() over(ORDER BY salary ASC)
FROM salaries;



