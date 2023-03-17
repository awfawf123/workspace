CREATE VIEW test_view
AS
	SELECT b.title,COUNT(*)
FROM employees a
INNER JOIN titles b ON a.emp_no = b.emp_no
WHERE a.gender = 'F'
GROUP BY b.title;

SELECT * FROM test_view;

SELECT * FROM test_view WHERE title = 'Staff';

-- replace 기존의 뷰에 덮어쓰기;
CREATE or replace VIEW test_view
AS
	SELECT b.title,COUNT(*)
FROM employees a
INNER JOIN titles b ON a.emp_no = b.emp_no
WHERE a.gender = 'F'
GROUP BY b.title;

DROP view test_view;

	