create database wordpress;
create user 'wordpress'@'%' identified by 'wordpress';
grant all on wordpress.* to 'wordpress'@'%';
