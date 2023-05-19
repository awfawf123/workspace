CREATE DATABASE minitwo;

USE minitwo;

CREATE TABLE user_info(
	u_no INT PRIMARY KEY AUTO_INCREMENT
	,u_id VARCHAR(12) NOT NULL UNIQUE
	,u_pw VARCHAR(512) NOT NULL
	,u_birth DATE NOT NULL
	,u_gender CHAR(1) NOT NULL
	,u_email VARCHAR(512) NOT NULL UNIQUE
	,u_num CHAR(12) NOT NULL
);

CREATE TABLE list_info(
	li_no INT PRIMARY KEY AUTO_INCREMENT
	,li_name VARCHAR(100) NOT NULL
	,li_end_date DATE 
	,li_cont VARCHAR(512)
	,li_price INT
	,li_category VARCHAR(20) NOT NULL
	,li_imgfile VARCHAR(100) NOT null
);

DROP TABLE list_info;

DELETE FROM user_info WHERE u_id="user";

INSERT INTO user_info(
	u_id
	,u_pw
	,u_birth
	,u_gender
	,u_email
	,u_num
)VALUES(
	'php506'
	,'506'
	,DATE(00000000)
	,'M'
	,'awfawf123@naver.com'
	,01012345678
);

INSERT INTO list_info(
	li_name
	,li_end_date
	,li_cont
	,li_price
	,li_category
)VALUES(
	'커피'
	,DATE(20230518)
	,'향긋한 원두를 사용한 커피'
	,30000
	,'신제품'
);

ALTER TABLE user_info ADD COLUMN u_auth VARCHAR(10) NOT NULL;

SELECT * FROM user_info;

FLUSH PRIVILEGES;

select * from list_info order by li_no DESC LIMIT 3;

COMMIT;