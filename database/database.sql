--sqlite3 -init database.sql database.db

CREATE TABLE restaurant (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	name VARCHAR(25) Unique Not NULL,
	introduction VARCHAR Not NULL,
	description VARCHAR Not NULL
);

CREATE TABLE comment (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	restaurant_id INTEGER REFERENCES restaurant,
	author VARCHAR(25)Not NULL,
	critic VARCHAR(255) Not Null
);

CREATE TABLE user (
  username VARCHAR(25) PRIMARY KEY,
  name VARCHAR(25) Not NULL,
  email VARCHAR(25) Unique Not NULL,
  password VARCHAR(25) Not NULL,
  dataBirth DATE Not Null
);

INSERT INTO restaurant VALUES (NUll, 'Amizade', 'Boa amizade', 'Amizade assim de tudo');

INSERT INTO comment VALUES (NUll, 1,'cliente 1', 'Fiquei satisfeito com a amizade');

INSERT INTO user VALUES ('username', 'Nome', 'mail', 'password','1996-11-11');
