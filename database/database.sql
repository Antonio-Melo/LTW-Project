
CREATE TABLE restaurant (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	name VARCHAR Unique,
	type VARCHAR,
	description VARCHAR,
	owner INTEGER REFERENCES user(id),
	rating FLOAT,
	open Time,
	close Time);

CREATE TABLE answer(
	id INTEGER PRIMARY KEY AUTOINCREMENT,
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
  dateBirth DATE,
	avatar VARCHAR(255));

CREATE TRIGGER updateRatingRestaurant
AFTER INSERT ON comment
BEGIN
	UPDATE restaurant SET rating = (
		SELECT AVG(evaluation)
		FROM restaurant JOIN comment
		 ON (restaurant.id = NEW.restaurantId)
		GROUP BY (restaurantId)
		HAVING (restaurantId = NEW.restaurantId)
	)
	WHERE (restaurant.id = NEW.restaurantId);
END;


CREATE TRIGGER deleteComments
BEFORE
	DELETE ON comment
	FOR EACH ROW BEGIN DELETE FROM answer
	WHERE answer.commentId  = OLD.id;
END;


INSERT INTO restaurant VALUES (1,'Name1','typfe1', 'description0', 1, 4.1, '00:00:00', '00:00:00');
INSERT INTO restaurant VALUES (2,'Name2','tyfpe1', 'description1', 1, 3.7, '00:00:00', '00:00:00');
INSERT INTO restaurant VALUES (3,'Name3','typfe1', 'description1', 2, 2.7, '00:00:00', '00:00:00');
INSERT INTO restaurant VALUES (4,'Nameas1','ftype1', 'description0', 2, 4.8, '00:00:00', '00:00:00');
INSERT INTO restaurant VALUES (5,'Nameas2','type1', 'description1', 3, 3.7, '00:00:00', '00:00:00');
INSERT INTO restaurant VALUES (6,'Namase3','type1', 'description1', 3, 2.7, '00:00:00', '00:00:00');
INSERT INTO restaurant VALUES (7,'Namase2','type1', 'description1', 4, 3.7, '00:00:00', '00:00:00');
INSERT INTO restaurant VALUES (8,'Nameasa3','type1', 'description1', 4, 2.7, '00:00:00', '00:00:00');
INSERT INTO restaurant VALUES (9,'Namasase1','type1', 'description0', 5, 4.8, '00:00:00', '00:00:00');
INSERT INTO restaurant VALUES (10,'Nameasas2','type1', 'description1', 6, 3.7, '00:00:00', '00:00:00');
INSERT INTO restaurant VALUES (11,'Nameasas3','type1', 'description1', 7, 2.7, '00:00:00', '00:00:00');

INSERT INTO comment VALUES (1, 1, 1, 'Fiquei satisfeito com a amizade', 5);
INSERT INTO comment VALUES (2, 1, 2, 'Fiquei satisfeito com a amizade', 3);
INSERT INTO comment VALUES (3, 1, 1, 'Fiquei satisfeito com a amizade', 4);

INSERT INTO user VALUES (1,'username1', 'Nome1', 'mail1', 'password','1996-11-11','../database/avatars/default_avatar.png');
INSERT INTO user VALUES (2,'username2', 'Nome2', 'mail2', 'password','1946-11-11','../database/avatars/default_avatar.png');
INSERT INTO user VALUES (3,'username3', 'Nome2', 'mail3', 'password','1946-11-11','../database/avatars/default_avatar.png');
INSERT INTO user VALUES (4,'username4', 'Nome2', 'mail4', 'password','1946-11-11','../database/avatars/default_avatar.png');
INSERT INTO user VALUES (5,'username5', 'Nome2', 'mail5', 'password','1946-11-11','../database/avatars/default_avatar.png');
INSERT INTO user VALUES (6,'username6', 'Nome2', 'mail6', 'password','1946-11-11','../database/avatars/default_avatar.png');

INSERT INTO answer VALUES(1, 1, 1, 'foi pessimo');
INSERT INTO answer VALUES(2, 2, 1, 'foi pessimo');
INSERT INTO answer VALUES(3, 2, 1, 'foi pessimo');
INSERT INTO answer VALUES(4, 1, 1, 'foi pessimo');
