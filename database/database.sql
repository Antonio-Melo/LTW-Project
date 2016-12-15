
CREATE TABLE restaurant (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	name VARCHAR Unique,
	type VARCHAR,
	description VARCHAR,
	address VARCHAR,
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


INSERT INTO restaurant VALUES (1,'Tapas','francesinha', 'Serve principalmente francesinhas e bagaço','Estrada Exterior da Circunvalação 7674', 1, 4.1, '19:00:00', '22:30:00');
INSERT INTO restaurant VALUES (2,'MacDonalds Aliados','Fast food', 'Hambugers','Praça da Liberdade 126', 1, 3.7, '08:00:00', '01:00:00');
INSERT INTO restaurant VALUES (3,'Bo 457','Steak house', 'Pratos com carne','Rua de Dr. Eduardo Torres 457', 1, 2.7, '19:30:00', '22:30:00');
INSERT INTO restaurant VALUES (4,'Terrasse','Gourmet', 'Todo o tipo de pratos','R. Dr. Sousa Rosa 23', 1, 4.8, '10:00:00', '23:00:00');
INSERT INTO restaurant VALUES (5,'BBgourmet','Gourmet', 'Todo o tipo de pratos','R. de António Cardoso 301', 1, 3.7, '08:00:00', '23:30:00');
INSERT INTO restaurant VALUES (6,'Pizzaria São Martinho','Pizzaria', 'Conhecido pelas pizzas e massas','Av. Gen. Norton de Matos 35', 1, 2.7, '12:00:00', '00:00:00');
INSERT INTO restaurant VALUES (7,'Cufra','restaurante', 'Francesinhas','· Av. da Boavista 2504', 1, 3.7, '20:00:00', '23:00:00');
INSERT INTO restaurant VALUES (8,'Sushi Douro','Comida japonesa', 'Sushi',' R. Fonte da Luz 217', 1, 2.7, '20:00:00', '23:00:00');
INSERT INTO restaurant VALUES (10,'La Cantinita','Mexicano', 'Comida mexicana','R. de Santa Teresa 28', 1, 3.7, '11:00:00', '02:00:00');

INSERT INTO comment VALUES (1, 1, 1, 'Fiquei satisfeito', 5);
INSERT INTO comment VALUES (2, 1, 2, 'Razoavel', 3);
INSERT INTO comment VALUES (3, 1, 1, 'Adorei', 4);

INSERT INTO user VALUES (1,'Antonio', 'António Melo', 'antonio@gmail.com', '12345','1996-11-11','../database/avatars/default_avatar.png');
INSERT INTO user VALUES (2,'Lazaro', 'Lazaro', 'lazaro@gmail.com', '12345','1946-11-11','../database/avatars/default_avatar.png');
INSERT INTO user VALUES (3,'Margarida', 'Margarida', 'margarida@gmail.com', '12345','1946-11-11','../database/avatars/default_avatar.png');

INSERT INTO answer VALUES(1, 1, 1, 'foi pessimo');
INSERT INTO answer VALUES(2, 2, 1, 'foi pessimo');
INSERT INTO answer VALUES(3, 2, 1, 'foi pessimo');
INSERT INTO answer VALUES(4, 1, 1, 'foi pessimo');
