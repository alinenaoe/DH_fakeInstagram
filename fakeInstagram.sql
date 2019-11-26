CREATE TABLE posts (
	id int(11) primary key auto_increment not null,
    img varchar(500) not null,
    postText varchar (1000) not null,
    userid int
); 

alter table posts add foreign key (userid) references users(id);


CREATE TABLE users (
	id int (11) primary key auto_increment not null,
	username varchar(100) not null unique,
	useremail varchar (100) not null,
	userpassword varchar(100) not null,
    profileimg varchar(500) not null
);

select * from users;
select * from posts;