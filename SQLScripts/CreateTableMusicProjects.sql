CREATE TABLE musicProjects (
	id INT(11) NOT NULL AUTO_INCREMENT,
	projectName VARCHAR(50) NOT NULL UNIQUE,
	background TEXT NOT NULL,
	isSolo BIT(1) NOT NULL,
	logoLocation TEXT,
	PRIMARY KEY (id));