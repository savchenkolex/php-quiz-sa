

## Use `docker`

1. `cd` in project working directory.
1. git clone current repo into `app` directory and create empty directory with name `mysql`.
1. execute command:

```bash 
docker run -it -p "2011:80" -p "2012:3306" --name "project" --mount type=bind,source=${PWD}/app,target=/app --mount type=bind,source=${PWD}/mysql,target=/var/lib/mysql mattrayner/lamp:latest
```

1. save database credentials and add correct data in `config.php`
