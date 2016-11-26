--sqlite3 -init restaurant.sql restaurant.db

CREATE TABLE restaurant (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	name VARCHAR Unique Not NULL,
	introduction VARCHAR Not NULL,
	description VARCHAR Not NULL
);

CREATE TABLE comment (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	restaurant_id INTEGER REFERENCES restaurant,
	author VARCHAR,
	text VARCHAR
);

CREATE TABLE user (
  username VARCHAR PRIMARY KEY,
  name VARCHAR Not NULL,
  email VARCHAR Unique Not NULL,
  password VARCHAR Not NULL 
);

INSERT INTO restaurant VALUES (NUll, 'Amizade', 'Boa amizade', 'Amizade assim de tudo');

INSERT INTO comment VALUES (NUll, 1,'cliente 1', 'Fiquei satisfeito com a amizade');

