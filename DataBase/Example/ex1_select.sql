SELECT * 
FROM employees
WHERE emp_no IN(10001, 10005);

SELECT *
FROM employees
WHERE first_name LIKE ('ma__');

SELECT * FROM titles;

SELECT emp_no, title 
FROM titles
WHERE title LIKE('%engineer%');

SELECT distinct emp_no
FROM dept_emp;

SELECT *
FROM employees
LIMIT 10 OFFSET 4;

SELECT *
FROM employees
ORDER BY first_name ASC, last_name DESC;

SELECT COUNT(emp_no)
FROM employees
WHERE emp_no = 10001;

SELECT avg(salary)
FROM salaries;

SELECT max(salary)
FROM salaries;

SELECT min(salary)
FROM salaries;

SELECT title, COUNT(title)
FROM titles
GROUP BY title HAVING COUNT(title) >= 100000;

SELECT emp_no, AVG(salary)
FROM salaries
GROUP BY salary;

SELECT emp_no, AVG(salary) AS avg_s
FROM salaries
GROUP BY salary 
HAVING AVG(salary) >=30000 AND AVG(salary) <=50000
ORDER BY emp_no;

SELECT CONCAT(last_name,' ',first_name) AS fullname
FROM employees;
 
SELECT *
FROM dept_manager
WHERE dept_no = (
						SELECT dept_no FROM dept_manager
						WHERE emp_no =110344
						);
						
SELECT *
FROM dept_manager
WHERE emp_no in(
						SELECT emp_no FROM dept_manager
						WHERE dept_no ='d001'
						);
						
SELECT emp_no, first_name, last_name, gender
FROM employees
WHERE emp_no in (SELECT emp_no
					FROM salaries
					GROUP BY emp_no
					HAVING AVG(salary) >= 70000);
												

SELECT *, NOW()
FROM titles
WHERE emp_no = 10009
	AND to_date >= NOW();


SELECT emp_no, last_name
FROM employees
WHERE emp_no in (SELECT emp_no 
					FROM titles 
					WHERE title LIKE('Senior Engineer')
					AND to_date >= NOW());
					
