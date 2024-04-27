drop database if exists `database`;
create database `database`;
use `database`;

drop table if exists `users_c0nGr4t5_y0u_Und3rSt4nd_sQl1`;
create table `users_c0nGr4t5_y0u_Und3rSt4nd_sQl1` (
    `id` int(11) not null auto_increment,
    `username` varchar(255) not null,
    `password` varchar(255) not null,
    primary key (`id`)
);

insert into `users_c0nGr4t5_y0u_Und3rSt4nd_sQl1` (`username`, `password`) values ('admin', 'dkjrh8q237rb228cb2rb28');
insert into `users_c0nGr4t5_y0u_Und3rSt4nd_sQl1` (`username`, `password`) values ('user', 'password');
insert into `users_c0nGr4t5_y0u_Und3rSt4nd_sQl1` (`username`, `password`) values ('anonymous', '');

drop table if exists `categories`;
create table `categories` (
    `id` int(11) not null auto_increment,
    `name` varchar(255) not null,
    primary key (`id`)
);

insert into `categories` (`name`) values ('Action');
insert into `categories` (`name`) values ('Adventure');
insert into `categories` (`name`) values ('Comedy');

drop table if exists `movies`;
create table `movies` (
    `id` int(11) not null auto_increment,
    `title` varchar(255) not null,
    `category_id` int(11) not null,
    primary key (`id`)
);

insert into `movies` (`title`, `category_id`) values ('The Matrix', 1);
insert into `movies` (`title`, `category_id`) values ('The Lord of the Rings', 2);
insert into `movies` (`title`, `category_id`) values ('The Hangover', 3);