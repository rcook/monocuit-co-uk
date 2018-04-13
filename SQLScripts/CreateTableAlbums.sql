CREATE TABLE albums (
	id INT(11) NOT NULL AUTO_INCREMENT,
	albumName VARCHAR(50) NOT NULL UNIQUE,
	musicProjectId INT(11) NOT NULL,
	year YEAR(4) NOT NULL,
	background TEXT NOT NULL,
	coverLocation TEXT,
	PRIMARY KEY (id));