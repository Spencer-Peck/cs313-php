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

INSERT INTO games (game_id, game_name) VALUES ('1', 'Aquire');
INSERT INTO games (game_id, game_name) VALUES ('2', 'Risk');
INSERT INTO games (game_id, game_name) VALUES ('3', 'Settlers of Catan');

INSERT INTO game_session (session_id, game_id, winner_name, score, session_description, date) 
	VALUES  (1, 1, 'Spencer Peck', '50', 'super fun', '2019-1-29');

	INSERT INTO game_session (session_id, game_id, winner_name, score, session_description, date) 
	VALUES  (2, 1, 'Wayne Peck', '400', 'Nuts', '2014-4-02');


INSERT INTO game_session (session_id, game_id, winner_name, score, session_description, date) 
	VALUES  (3, 2, 'Mylee Abeyta', '35', 'Pizza', '2016-7-22');

INSERT INTO game_session (session_id, game_id, winner_name, score, session_description, date) 
	VALUES  (4, 2, 'Abraham Lincoln', '83', 'You cannot escape the responsibility of tomorrow by evading it today.', '1840-3-06');

	INSERT INTO game_session (session_id, game_id, winner_name, score, session_description, date) 
	VALUES  (5, 3, 'Daniel Southwick', '87', 'poop', '1993-12-12');
