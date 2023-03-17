CREATE TABLE employees_1(
	EMP_NO INT(11)
	,BIRTH_DATE DATE NOT NULL 
	,FIRST_NAME VARCHAR(14) NOT NULL
	,LAST_NAME VARCHAR(16) NOT NULL
	,GENDER ENUM('M','F') NOT NULL
	,HIRE_DATE DATE NOT NULL
	,CONSTRAINT PK_EMPLOYEES_EMP_NO PRIMARY KEY(EMP_NO)
);

-- 외래키에는 INDEX 자동 생성;
CREATE TABLE SALARIES_1(
	EMP_NO INT(11) NOT NULL
	,SALARY INT(11) NOT NULL
	,FROM_DATE DATE NOT NULL
	,TO_DATE DATE NOT NULL
	,CONSTRAINT PK_SALARIES_EMP_NO PRIMARY KEY(EMP_NO)
	,CONSTRAINT PK_SALARIES_FROM_DATE PRIMARY KEY(FROM_DATE)
	,CONSTRAINT FK_SALARIES_EMP_NO FOREIGN KEY (EMP_NO) REFERENCES employees_1(EMP_NO)
);


CREATE TABLE titles_1(
	EMP_NO INT(11) NOT NULL
	,title VARCHAR(50) NOT NULL
	,FROM_DATE DATE NOT NULL
	,TO_DATE DATE
	,PRIMARY KEY (EMP_NO,title,FROM_DATE)
);
-- 외래키 이름 설정 및 추가;
alter table titles_1 ADD CONSTRAINT fk_ti_no 
foreign key (EMP_NO) REFERENCES employees_1(EMP_NO);
-- 외래키 삭제;
ALTER TABLE titles_1 DROP FOREIGN KEY titles_1_ibfk_1; 
-- 인덱스 추가;
ALTER TABLE titles_1 ADD INDEX emp_no(emp_no);


SHOW FULL COLUMNS FROM SALARIES_1;

CREATE TABLE departments_1(
	dept_no CHAR(4) NOT NULL
	,dept_name VARCHAR(40) NOT NULL
	,CONSTRAINT PK_departments_dept_no PRIMARY KEY(dept_no) 
);  

CREATE TABLE dept_emp_1(
	EMP_NO INT(11) NOT NULL
	,dept_no CHAR(4) NOT NULL
	,FROM_DATE DATE NOT NULL
	,TO_DATE DATE NOT NULL
	,PRIMARY KEY (EMP_NO)
	,CONSTRAINT fk_dept_emp_no foreign key (dept_NO) REFERENCES departments_1(dept_NO)
);
COMMIT;
DROP TABLE dept_emp_1;
-- 외래키 이름 설정 및 추가;
alter table dept_emp_1 ADD CONSTRAINT fk_dept_emp_no 
foreign key (EMP_NO) REFERENCES employees_1(EMP_NO);

-- PK
-- -테이블의 고유의 값으로 각 행(레코드)을 식별하는 역할
-- -무결성 보장
-- -고유 인덱스 자동생성

-- FK
-- -하위테이블에서 상위테이블의 접점이 되는 컬럼을 참조
-- -상위테이블의 참조되는 컬럼에 존재하는 값만 입력 가능
-- -이러한 제약조건으로 인해 참조 무결성 보장

-- UK
-- -중복된값을 허용하지는 않지만 null값은 허용

-- VIEW
-- -가상 테이블로 실제로 데이터를 저장하고 있지않음
-- -테이블 전체가 아닌 필요한 필드만 보여줌
-- -복잡한 쿼리를 단순화
-- -삽입,삭제,갱신 작업에 제한