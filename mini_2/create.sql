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

SELECT * FROM user_info;

FLUSH PRIVILEGES;


COMMIT;