DROP TABLE games;

create table games (
	
	id INT PRIMARY KEY auto_increment,
    name_of_game VARCHAR(50) NOT NULL,
    price DECIMAL(10,2)	NOT NULL,
    ganre_of_game VARCHAR(50) NOT NULL,
    description_game VARCHAR(50)
);