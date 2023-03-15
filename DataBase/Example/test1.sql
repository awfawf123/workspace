SELECT * FROM employees
ORDER BY emp_no desc;
SELECT * FROM dept_emp
WHERE emp_no = 500000;
SELECT * FROM salaries
WHERE emp_no = 500000;
SELECT * FROM titles
WHERE emp_no = 500000;
SELECT * FROM dept_manager;
SELECT * FROM departments;


INSERT INTO employees(
		emp_no
		,birth_date
		,first_name
		,last_name
		,gender
		,hire_date
		)
VALUES(
		9999
		,NOW()
		,'Aran'
		,'Choe'
		,'F'
		,NOW()
		);
		
INSERT INTO dept_emp(
		emp_no
		,dept_no
		,from_date
		,to_date
		)
VALUES(
		10000
		,'d006'
		,NOW()
		,NOW()
		);

INSERT INTO salaries(
		emp_no
		,salary
		,from_date
		,to_date
		)
VALUES(
		500000
		,70000
		,NOW()
		,NOW()
		);
		
INSERT INTO titles(
		emp_no
		,title
		,from_date
		,to_date
		)
VALUES(
		500000
		,'Staff'
		,DATE_FORMAT('1996-06-26','%Y-%m-%d')
		,NOW()
		);

UPDATE dept_emp
SET dept_no = 'd009'
WHERE emp_no = 9999 OR emp_no = 10000;
	
DELETE FROM titles
WHERE emp_no = 10000;
			

UPDATE dept_manager
SET to_date = DATE_FORMAT('1996-06-26','%Y-%m-%d')
WHERE emp_no = 111939;

INSERT INTO dept_manager(
		dept_no
		,emp_no
		,from_date
		,to_date
		)
VALUES(
		'd009'
		,500000
		,DATE_FORMAT('1996-06-26','%Y-%m-%d')
		,DATE_FORMAT('9999-01-01','%Y-%m-%d')
		);

UPDATE titles
SET from_date = DATE_FORMAT('1996-06-26','%Y-%m-%d'),to_date =NOW()
WHERE emp_no = 500000 AND title = 'Staff';

INSERT INTO titles(
		emp_no
		,title
		,from_date
		,to_date
		)
VALUES(
		500000
		,'Staff'
		,NOW()
		,DATE_FORMAT('9999-01-01','%Y-%m-%d')
		);	
		

SELECT a.emp_no,a.first_name, b.salary AS sal
FROM employees a 
join salaries b ON(a.emp_no = b.emp_no)
WHERE b.salary = (SELECT max(b.salary)
						FROM salaries b
						) or 
		b.salary = (SELECT min(b.salary)
						FROM salaries b
						);

SELECT emp_no, first_name
FROM employees
WHERE emp_no = (SELECT emp_no FROM salaries ORDER BY salary LIMIT 1)
	or
	emp_no = (SELECT emp_no FROM salaries ORDER BY salary DESC LIMIT 1);

SELECT AVG(salary)
FROM salaries;

SELECT emp_no, AVG(salary)
FROM salaries
WHERE emp_no = 499975 AND to_date < NOW();

