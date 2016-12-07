--sqlite3 -init database.sql database.db

CREATE TABLE restaurant (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	name VARCHAR Unique,
	type VARCHAR,
	description VARCHAR,
	owner INTEGER REFERENCES user(id));

CREATE TABLE answer(
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	restaurantId INTEGER REFERENCES restaurant(id),
	userId INTEGER REFERENCES user(id),
	commentId INTEGER REFERENCES comment(id),
	content VARCHAR(255));

CREATE TABLE comment (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	restaurantId INTEGER REFERENCES restaurant(id),
	userId INTEGER REFERENCES user(id),
	content VARCHAR(255),
	evaluation INTEGER);

CREATE TABLE user (
	id INTEGER PRIMARY KEY AUTOINCREMENT, 
 	username VARCHAR unique,
  	name VARCHAR,
  	email VARCHAR Unique,
  	password VARCHAR,
  	dateBirth DATE);

INSERT INTO restaurant VALUES (1,'Name','type1', 'description',1);
INSERT INTO restaurant VALUES (2,'Name2','type1', 'description1',1);
INSERT INTO restaurant VALUES (3,'Name3','type1', 'description1',1);

INSERT INTO comment VALUES (1, 1, 1, 'Fiquei satisfeito com a amizade', 5);
INSERT INTO comment VALUES (2, 1, 2, 'Fiquei satisfeito com a amizade', 3);
INSERT INTO comment VALUES (3, 1, 1, 'Fiquei satisfeito com a amizade', 4);


INSERT INTO user VALUES (1,'username', 'Nome', 'mail', 'password','1996-11-11');
INSERT INTO user VALUES (2,'lazaro', 'lazaro', 'lazaro', '827ccb0eea8a706c4c34a16891f84e7b','1996-11-11');

INSERT INTO answer VALUES(1, 1, 1, 1, 'foi pessimo');
INSERT INTO answer VALUES(2, 1, 2, 1, 'foi pessimo');
INSERT INTO answer VALUES(3, 1, 2, 1, 'foi pessimo');
INSERT INTO answer VALUES(4, 1, 1, 1, 'foi pessimo');
--delete from user;