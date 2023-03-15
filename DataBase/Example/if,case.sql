SELECT CAST(1234 AS CHAR(4));
SELECT CONVERT(1234, CHAR(4));

SELECT if(emp_no = 10001 , '참','거짓')
FROM employees;

SELECT IFNULL(NULL,'aa');
SELECT IFNULL(' ','aa');

SELECT NULLIF(1 , 1);

SELECT 
	emp_no
	,case gender
		when 'M' then '남자'
		when 'F' then '여자'
		ELSE '그외'
	end
FROM employees LIMIT 10;

SELECT * FROM titles;

SELECT title,emp_no,
		case title
		when 'Senior Engineer' then '관리자'
		ELSE '팀원'
	END AS 'k-title'
FROM titles LIMIT 10;