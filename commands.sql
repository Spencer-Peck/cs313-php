CREATE TABLE games (
	game_id     int,
	game_name   varchar(80),
	game_img    bytea
);


CREATE TABLE game_session (
	game_id               int,
	winner_name           varchar(80),
	session_description   varchar(80),
	date                  date,  
)
