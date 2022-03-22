CREATE TABLE books
(b_id auto_increment PRIMARY KEY not null,
title varchar(200),
 description text ,
 topic varchar(200),
 on_date datetime default current_timestamp
 );

CREATE TABLE notes(
	n_id int auto_increment PRIMARY KEY not null,
	note_name varchar(300) ,
	notes text,
	b_id int not null,
	FOREIGN KEY (b_id) REFERENCES books(b_id)	
);
