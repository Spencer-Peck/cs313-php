CREATE TABLE games (
	game_id     SERIAL,
	user_id     int,
	game_name   varchar(200),
	game_img    bytea
);


CREATE TABLE game_session (
	session_id            SERIAL,
	user_id               int,
	game_id               SERIAL,
	winner_name           varchar(200),
	score                 varchar(200),
	session_description   varchar(200),
	date                  date  
);

CREATE TABLE users (
	user_id     SERIAL,
	user_name   varchar(200),
	password    varchar(200)
);

INSERT INTO games (game_id, game_name, user_id) VALUES ('1', 'Aquire', 1);
INSERT INTO games (game_id, game_name, user_id) VALUES ('2', 'Risk', 1);
INSERT INTO games (game_id, game_name, user_id) VALUES ('3', 'Settlers of Catan', 1);

INSERT INTO users (user_name, password) VALUES ('spencer', 'pass');

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

	DROP TABLE games;
	DROP TABLE game_session;
