CREATE TABLE Users (

	username char(200),
	accPassword char(200),
	favoriteTitle char(200),
	favoritePlatform char(200),

	PRIMARY KEY(username),
	FOREIGN KEY (favoriteTitle, favoritePlatform) REFERENCES VideoGames(title, gameplatform),
);



