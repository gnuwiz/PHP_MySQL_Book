CREATE TABLE member (
    mb_no INT(11) NOT NULL AUTO_INCREMENT,
    mb_id VARCHAR(20) NOT NULL DEFAULT '',
    mb_password VARCHAR(255) NOT NULL DEFAULT '',
    mb_name VARCHAR(255) NOT NULL DEFAULT '',
    mb_email VARCHAR(255) NOT NULL DEFAULT '',
    PRIMARY KEY (mb_no),
    UNIQUE INDEX mb_id (mb_id)
);

INSERT INTO member (mb_id, mb_password, mb_name, mb_email)VALUES('member01', '1234', '홍길동', 'hong@email.com');
INSERT INTO member (mb_id, mb_password, mb_name, mb_email)VALUES('member02', '1234', '임꺽정', 'im@email.com');
INSERT INTO member (mb_id, mb_password, mb_name, mb_email)VALUES('member03', '1234', '장길산', 'jang@email.com');
