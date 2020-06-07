CREATE TABLE users (
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name varchar(256) NOT NULL,
  lastname varchar(256) NOT NULL,
  email varchar(256) NOT NULL,
  pwd varchar(256) NOT NULL
);

CREATE TABLE products (
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  categorie varchar(256) NOT NULL,
  name varchar(256) NOT NULL,
  image varchar(256) NOT NULL,
  p_name varchar(111) NOT NULL,
  p_description varchar(256) NOT NULL,
  p_price int(11) NOT NULL,
  p_location varchar(256) NOT NULL,
	phone_number int(11) NOT NULL,
	data VARCHAR(11) NOT NULL,
	reports INT(11) NOT NULL,
  owner varchar(256) NOT NULL
);


/* Data base name: givenget */
