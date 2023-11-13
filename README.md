## Use `docker` in terminal

1. Move in project working directory.
1. git clone current repo into `app` directory and create empty directory with name `mysql`.
1. Execute command: 
```bash 
docker run -it -p "2011:80" -p "2012:3306" --name "project" --mount type=bind,source=${PWD}/app,target=/app --mount type=bind,source=${PWD}/mysql,target=/var/lib/mysql mattrayner/lamp:latest
```

4. Create database. Table will be created automatically;
1. Save database credentials and add correct data in `config.php` (use `config.php.example` in directory for this point);
