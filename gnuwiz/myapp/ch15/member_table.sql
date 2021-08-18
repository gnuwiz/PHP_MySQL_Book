CREATE TABLE member (
	mb_no int(11) NOT NULL AUTO_INCREMENT,
	mb_id varchar(20) NOT NULL DEFAULT '',
	mb_password varchar(255) NOT NULL DEFAULT '',
	mb_name varchar(255) NOT NULL DEFAULT '',
	mb_email varchar(255) NOT NULL DEFAULT '',
	mb_job varchar(255) NOT NULL DEFAULT '',
        mb_gender varchar(255) NOT NULL DEFAULT '',
	mb_language varchar(255) NOT NULL DEFAULT '',
	mb_datetime datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY (mb_no),
	UNIQUE KEY mb_id (mb_id),
	KEY mb_datetime (mb_datetime)
);
