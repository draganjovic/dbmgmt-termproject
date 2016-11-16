CREATE TABLE Users (

	username char(20),
	accPassword char(20),
	favoriteTitle char(50),
	favoritePlatform char(30),

	PRIMARY KEY(username),
	FOREIGN KEY (favoriteTitle, favoritePlatform) REFERENCES VideoGames(title, gameplatform)
);



