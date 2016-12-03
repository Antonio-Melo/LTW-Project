--sqlite3 -init database.sql database.db

CREATE TABLE restaurant (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	name VARCHAR(25) Unique,
	introduction VARCHAR,
	description VARCHAR
);

CREATE TABLE comment (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	restaurant_id INTEGER REFERENCES restaurant,
	author VARCHAR(25),
	critic VARCHAR(255)
);

CREATE TABLE user (
  username VARCHAR(25) PRIMARY KEY,
  name VARCHAR(25),
  email VARCHAR(25) Unique,
  password VARCHAR(25),
  dateBirth DATE
);

INSERT INTO restaurant VALUES (NUll, 'Amizade', 'Boa amizade', 'Amizade assim de tudo');

INSERT INTO comment VALUES (NUll, 1,'cliente 1', 'Fiquei satisfeito com a amizade');

INSERT INTO user VALUES ('username', 'Nome', 'mail', 'password','1996-11-11');

--delete from user;