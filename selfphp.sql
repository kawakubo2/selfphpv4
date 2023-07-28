create table member(
    id int not null auto_increment,
    nam varchar(255) not null,
    sex char(1) default '男',
    old int not null,
    memo varchar(255) default null,
    primary key(id)
);

alter table member add column enter date not null after old;
desc member;

insert into member(id, nam, sex, old, enter, memo)
values(1, '山田太郎', '男', 20, '2021-04-01', null);

select * from member;

show tables;

select * from book;

