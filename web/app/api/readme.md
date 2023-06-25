# Product widget powered by Svenska API

Fetch, save and display data using a cron job.

---

## Install dependencies

Navigate into the project folder and install PHP dependencies using Composer:

``` bash
cd liverattning-roots/web/app/api
composer install
```


## Create the mysql database

Login to mysql using:

``` bash
mysql -u <username> -p
```

Enter your password, then create the DB:

``` bash
CREATE DATABASE db_name;
```

## Create the mysql database

A function creating the table is attached to the ```after_switch_theme```, so:
1. Navigate to ```http://liveratsage.test/wp/wp-admin/themes.php```
2. Activate any other theme.
3. Activate liverattning theme back.

The table is created.

## Configuration

### Env variables

In the ```api``` folder:

``` bash
cd liverattning-roots/web/app/api
```

Copy the `.env.example` file to create a `.env` file, and update the values to match your local environment:

``` bash
cp .env.example .env
```

### Run PHP script to test

At this point everything is set, to test if the PHP script is working:

Run the script from the terminal:

``` bash
php api.php
```

Log folder will be created with the log files. Check ```status.log```, you should see the success messages. If not, check ```error.log```.

## Adding a cronjob

At this poing the PHP script is tested and there saved draws in the DB. They should be displayed in home page of the website ```http://liveratsage.test/```.
Open crontab for installing a new cronjob:

``` bash
crontab -e
```

You will be promted to select an editor, you can just tap enter for nano editor.
Then add the following code at the end of the file that opened in the nano editoro:

``` bash
* * * * * /usr/bin/php /var/www/liverattning-roots/web/app/api/api.php > /var/www/liverattning-roots/web/app/api/log/cron.log
```

This cronjob will run every minute for test purposes. After seeing new logs in ```status.log```, you can change or delete this cronjob.


## References
[Cron documentation](https://www.cyberciti.biz/faq/how-do-i-add-jobs-to-cron-under-linux-or-unix-oses/)

[Composer documentation](https://getcomposer.org/doc/)

