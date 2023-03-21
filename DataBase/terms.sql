-- 데이터베이스(Database, DB)
--다수의 사용자에 의해 공유되어 사용될 목적으로 통합하여 관리되는 "데이터의 집합"

-- DBMS
--	DBMS(DataBase Management System : 데이터베이스 관리 시스템)이란 데이터베이스를 관리하며
--	응용 프로그램들이 데이터베이스를 공유하며 사용할 수 있는 환경을 제공하는 소프트웨어입니다.

-- SQL
--	SQL(Structured Query Language)은 관계형 데이터베이스에서 사용되는 언어 


-- 쿼리 문법의 종류
-- 	- DDL (Data Definition Language, 데이터 정의 언어) : CREATE,ALTER,DROP,TRUCATE
-- 		관계형 데이터베이스의 구조를 정의
-- 	- DML (Data Manipulation Language, 데이터 조작 언어) : SELECT,INSERT,DELETE,UPDATE
-- 		데이터베이스를 조작(검색, 등록, 삭제, 갱신)을 하기 위해 사용
-- 	- DCL (Data Control Language, 데이터 제어 언어) : GRANT,REVOKE,COMMIT,ROLLBACK
-- 		데이터베이스에서 데이터에 대한 액세스를 제어하기 위해 사용
-- 	- TCL (Transaction Control Language, 트랜잭션 제어 언어) : 
-- 		논리적인 작업의 단위를 묶어서 DML에 의해 조작된 결과를 작업단위(트랜잭션) 별로 제어하기위해 사용

-- Data Modeling
--	데이터 베이스의 핵심과정으로, 
--	대상이 되는 업무 내용을 분석하고 약속된 표기법에 의해 표현

-- 정규화(Normalization) 란?
--	데이터 베이스의 변경 시 일어 날 수 있는 이상현상을 제거하기위해
--	관계형 데이터베이스의 설계에서 데이터를 구조화하는 프로세스입니다.

-- 데이터열 변환 함수
-- 	CAST( 값 AS 데이터형식 )
-- 	CONVERT( 값, 데이터형식 )

-- 문자열 함수
-- 	CONCAT(문자열1, 문자열2, ...) : 문자열을 이어줍니다.
-- 	CONCAT_WS(구분자, 문자열1, 문자열2, ...) : 문자열 사이에 구분자를 넣어 이어줍니다.
-- 	FORMAT(숫자, 소숫점 자릿수) : 숫자에 ','를 넣어주고, 소수점 자릿수 까지 표현합니다.
-- 	LEFT(문자열, 길이) : 문자열을 왼쪽부터 길이만큼 잘라 반환합니다.
-- 	RIGHT(문자열, 길이) : 문자열을 오른쪽부터 길이만큼 잘라 반환합니다.
-- 	UPPER(문자열) : 소문자를 대문자로 변경합니다.
-- 	LOWER(문자열) : 대문자를 소문자로 변경합니다.
-- 	LPAD(문자열, 길이, 채울 문자열) : 문자열을 포함해 길이만큼 채울 문자열을 왼쪽에 넣습니다.
-- 	RPAD(문자열, 길이, 채울 문자열) : 문자열을 포함해 길이만큼 채울 문자열을 오른쪽에 넣습니다.
-- 	SUBSTRING(문자열, 시작위치, 길이) : 문자열을 시작위치에서 길이만큼 잘라서 반환합니다.
-- 	SUBSTRING_INDEX(문자열, 구분자, 횟수) : 왼쪽부터 구분자가 횟수 번째가 나오면 그 이후부터 버립니다.

-- 수학 함수
-- 	FLOOR(숫자) : 내림합니다.
-- 	ROUND(숫자) : 반올림합니다.
-- 	TRUNCATE(숫자, 정수) : 소수점 기준으로 정수위치 까지 구하고 나머지는 버립니다.

-- 순위 함수
-- 	RANK() OVER(ORDER BY 속성명 DESC/ASC) : 순위를 매깁니다.

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

-- Transaction
-- commit,rollback 하기 전 모든 처리의 일련의 과정;

-- Index
-- 검색 속도를 향상 시켜준다
-- 관리에 미흡하면 속도 저하
-- 클러스터 인덱스: PK 생성시 자동으로 생성되는 인덱스
-- 보조 인덱스: 필요에 따라 지정하는 인덱스

-- Auto_increment
-- 	자동 증가 값을 가지는 컬럼으로  값을 직접 대입할 수 없다
--  PK에만 적용 가능