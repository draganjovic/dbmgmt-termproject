CREATE TABLE VideoGames (
	
	title char(200),
	gameplatform char(200),
	rating char(200),
	releasedate date,
	genre char(20),
	company char(20),
	summary char(200),

	PRIMARY KEY(title, gameplatform),
);
	
