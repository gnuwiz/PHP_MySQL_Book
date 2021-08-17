CREATE TABLE movie_director (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    birthday DATE NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO movie_director (id, name, birthday) VALUES (1, '박찬욱', '1963-08-23');
INSERT INTO movie_director (id, name, birthday) VALUES (2, '류승완', '1973-12-15');
INSERT INTO movie_director (id, name, birthday) VALUES (3, '윤제균', '1969-05-14');
INSERT INTO movie_director (id, name, birthday) VALUES (4, '최동훈', '1971-02-24');
INSERT INTO movie_director (id, name, birthday) VALUES (5, '봉준호', '1969-09-14');
INSERT INTO movie_director (id, name, birthday) VALUES (6, '김한민', '1969-09-26');
INSERT INTO movie_director (id, name, birthday) VALUES (7, '스티븐 스필버그', '1946-12-18');
INSERT INTO movie_director (id, name, birthday) VALUES (8, '크리스토퍼 놀란', '1970-07-30');

CREATE TABLE movie_list (
    id INT(11) NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    opening_day DATE NOT NULL,
    director_id VARCHAR(255) NULL DEFAULT NULL,
    PRIMARY KEY (id)
);

INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (1, '공동경비구역 JSA', '2000-09-09', 1);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (2, '아가씨', '2016-06-01', 1);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (3, '친절한 금자씨', '2005-07-29', 1);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (4, '베테랑', '2015-08-05', 2);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (5, '부당거래', '2010-10-28', 2);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (6, '국제시장', '2014-12-17', 3);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (7, '해운대', '2009-07-22', 3);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (8, '암살', '2015-07-22', 4);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (9, '타짜', '2006-09-28', 4);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (10, '괴물', '2006-07-27', 5);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (11, '살인의추억', '2003-04-25', 5);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (12, '명량', '2014-07-30', 6);
INSERT INTO movie_list (id, title, opening_day) VALUES (13, '7번방의 선물', '2013-01-23');
INSERT INTO movie_list (id, title, opening_day) VALUES (14, '광해', '2012-09-13');