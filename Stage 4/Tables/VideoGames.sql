CREATE TABLE VideoGames (
	
	title char(50),
	gameplatform char(30),
	rating char(30),
	releasedate date,
	genre char(20),
	company char(30),
	summary varchar(200),

	PRIMARY KEY(title, gameplatform)
);
	
