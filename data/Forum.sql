create database if not exists Forum;
use 'Forum';
drop table if exists users;
create table users(
id int unsigned auto_increment key,
username varchar(32) not null ,
password varchar(64) not null,
email varchar(24) not null,
gender enum("m","f","s") not null default "s",
birthday varchar(8),
regdate varchar(8),
onlinedays tinyint,
major varchar(32),
grade tinyint,
class varchar(20),
homeaddress varchar(32),
dorm varchar(32),
single boolean,
note varchar(32)
);

drop table if exists managers;
create table Managers(
id int unsigned auto_increment key,
username varchar(32) not null,
password varchar(64) not null,
email varchar(24),
club varchar(24),
regdate varchar(8),
gender enum('m','f','s') default 's',
estate tinyint,
head varchar(12)
);

drop table if exists article;
create table article(
id int auto_increment key,
author int not null,
tags tinyint,
headline varchar(32),
date varchar(8),
link varchar(32)
);

drop table if exists comments;
create table comments(
id int auto_increment not null key,
article int 
);

drop table if exists reply;
create table reply(
id int auto_increment not null key,
parent int not null,
content varchar(1024)
);