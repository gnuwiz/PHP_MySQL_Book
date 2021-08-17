CREATE TABLE student (
    idx INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    department VARCHAR(20) NOT NULL,
    gender VARCHAR(2) NULL DEFAULT NULL,
    subjects VARCHAR(20) NULL DEFAULT NULL,
    grade INT(11) NULL DEFAULT NULL,
    PRIMARY KEY (idx)
);

INSERT INTO student (idx, name, department, gender, subjects, grade) VALUES
    (1, '홍길동', '컴퓨터공학과', 'M', 'MySQL', 90),
    (2, '임꺽정', '컴퓨터공학과', 'M', 'MySQL', 85),
    (3, '장길산', '컴퓨터공학과', 'M', 'MySQL', 75),
    (4, '홍길동', '컴퓨터공학과', 'M', 'PHP', 65),
    (5, '임꺽정', '컴퓨터공학과', 'M', 'PHP', 65),
    (6, '장길산', '컴퓨터공학과', 'M', 'PHP', 55);