CREATE TABLE blogs (
	id INT(11) NOT NULL AUTO_INCREMENT,
	timestamp TIMESTAMP NOT NULL,
	title VARCHAR(50) NOT NULL UNIQUE,
	content TEXT NOT NULL,
	isPublic BIT(1) NOT NULL,
	PRIMARY KEY (id));