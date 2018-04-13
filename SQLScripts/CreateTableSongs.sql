CREATE TABLE songs (
	albumId INT(11) NOT NULL,
	trackNumber INT (11) NOT NULL,
	songTitle VARCHAR(50) NOT NULL UNIQUE,
	lyricsByJames BIT(1) NOT NULL,
	lyricsLocation TEXT,
	mp3Location TEXT,
	flacLocation TEXT,
	PRIMARY KEY (albumId, trackNumber));