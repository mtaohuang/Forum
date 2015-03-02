create database if not exists 'Forum';
use 'Forum';
drop table if exists 'users';
create table 'Users'(
'id' int unsigned auto_increment key,
'username' varchar(32) not null unique,
'password' varchar(64) not null,
'gender' enum("男","女","保密") not null default "保密",
'email' varchar(32) not null,
'headphoto' varchar(32)
);


create table 'Managers'(
id int unsigned auto_increment key,
username varchar(32) not null,
password varchar(64) not null,
grade smallint unsigned not null,
headphoto varchar(32),
email varchar(64)
);