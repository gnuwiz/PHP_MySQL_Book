CREATE TABLE todo (
    id INT(11) NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL DEFAULT '',
    checked TINYINT(1) NOT NULL DEFAULT '0',
    datetime datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
    PRIMARY KEY (id),
    UNIQUE KEY id (id),
    KEY datetime (datetime)
);