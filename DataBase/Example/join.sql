-- 사원의 emp_no,풀네임,title 출력;
SELECT a.emp_no,CONCAT(a.last_name,' ',a.first_name) AS FULLNAME, b.title
FROM employees a
	INNER JOIN titles b ON a.emp_no = b.emp_no
WHERE b.to_date >= NOW();

-- 사원의 emp_no, gender, 현재 salary 출력;
SELECT a.emp_no, a.gender, b.salary
FROM employees a
	INNER JOIN salaries b ON a.emp_no = b.emp_no
WHERE b.to_date >= NOW();

-- 10010 사원의 풀네임 과거부터 현재까지 salary 이력 출력;
SELECT CONCAT(a.last_name,' ',a.first_name) AS FULLNAME , b.salary
FROM employees a
	INNER JOIN salaries b ON a.emp_no = b.emp_no
WHERE  a.emp_no = 10010;

-- 사원의 emp_no, 풀네임, 소속부서명을 출력;
SELECT a.emp_no, CONCAT(a.last_name,' ',a.first_name) AS FULLNAME, c.dept_name
FROM employees a
	INNER JOIN dept_manager b ON a.emp_no = b.emp_no
	INNER JOIN departments c ON b.dept_no = c.dept_no
	ORDER BY a.emp_no;
 
-- 현재 월급의 상위 10위까지 emp_no, 풀네임, salary을 출력;
SELECT a.emp_no, CONCAT(a.last_name,' ',a.first_name) AS FULLNAME, ra.salary, ra.kk 
FROM employees a
	INNER JOIN 
	(
		SELECT emp_no, to_date, salary, RANK() over(ORDER BY salary desc) AS kk
		FROM salaries
		WHERE to_date = DATE(99990101)
	) ra ON a.emp_no = ra.emp_no  
WHERE ra.kk <= 10 
ORDER BY ra.kk asc;

-- 각 부서의 부서장의 dept_name, 풀네임, 입사일을 출력;
SELECT c.dept_name, CONCAT(a.last_name,' ',a.first_name) AS FULLNAME, a.hire_date  
FROM employees a
	INNER JOIN dept_manager b ON a.emp_no = b.emp_no
	INNER JOIN departments c ON b.dept_no = c.dept_no
WHERE b.to_date >= NOW();


-- 현재 직책이 Staff인 사원의 현재 평균 월급 출력;
SELECT AVG(a.salary) AS sal
FROM salaries a
INNER JOIN titles b ON a.emp_no = b.emp_no
WHERE b.title = 'Staff' AND b.to_date >= NOW() AND a.to_date >= NOW();

-- 부서장직을 역임했던 모든 사원의 풀네임과 입사일,emp_no,dept_no 출력;
SELECT CONCAT(a.last_name,' ',a.first_name) AS FULLNAME, b.from_date, a.emp_no, b.dept_no
FROM employees a
INNER JOIN dept_manager b ON a.emp_no = b.emp_no
WHERE b.to_date < DATE(99990101);

-- 현재 각 직급별 평균월급이 60,000이상인 직급의 title,평균월급(정수) 내림차순  출력;
SELECT b.title,floor(AVG(a.salary)) AS SAL
FROM salaries a
INNER JOIN titles b ON a.emp_no = b.emp_no
WHERE a.to_date >= NOW() AND b.to_date >= NOW()
GROUP BY b.title
HAVING sal >= 60000
ORDER BY sal desc;

-- 성별이 여자인 사원들의 직급별 사원수를 출력;
SELECT b.title,COUNT(*)
FROM employees a
INNER JOIN titles b ON a.emp_no = b.emp_no
WHERE a.gender = 'F'
GROUP BY b.title;

-- 직급별 퇴사한 여자사원수;
SELECT A.gender, COUNT(A.gender)
FROM employees A
INNER JOIN (
	SELECT emp_no
	FROM titles
	GROUP BY emp_no
	HAVING MAX(to_date) != DATE(99990101)
	) B
ON A.emp_no = B.emp_no
GROUP BY A.gender;
 
