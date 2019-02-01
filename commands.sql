CREATE TABLE games (
	game_id     int NOT NULL,
	game_name   varchar(80),
	game_img    bytea
);


CREATE TABLE game_session (
	session_id            int NOT NULL,
	game_id               int NOT NULL,
	winner_name           varchar(80),
	score                 varchar(80),
	session_description   varchar(80),
	date                  date  
);
