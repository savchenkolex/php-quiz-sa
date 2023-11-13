

## Use `docker`

1. `cd` in project working directory.
1. git clone current repo into `app` directory and create empty directory with name `mysql`.
1. execute command: 
```bash 
docker run -it -p "2011:80" -p "2012:3306" --name "project" --mount type=bind,source=${PWD}/app,target=/app --mount type=bind,source=${PWD}/mysql,target=/var/lib/mysql mattrayner/lamp:latest
```

4. create database and table for project;
1. You may use follow code for create table: 
	```sql
	CREATE TABLE `quiz`.`results` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(256) NOT NULL , `total` INT(3) NOT NULL , `correct` INT(3) NOT NULL , `incorrect` INT(3) NOT NULL , PRIMARY KEY (`id`) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;
	```
6. save database credentials and add correct data in `config.php`
