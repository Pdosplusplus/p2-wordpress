# Guide to Install Wordpress on Debian 8


## Install the dependencies:

```bash
$ sudo apt install apache2 libapache2-mod-php5 php5 php5-curl php5-intl php5-mcrypt php5-mysql php5-sqlite php5-xmlrpc mysql-server mysql-client
```

### Position on ```/var/www/html```:

```bash
$ cd /var/www/html
```

### Download wordpress:

```bash
$ sudo wget http://wordpress.org/latest.tar.gz
``` 

### Decompress the tar.gz

```bash
$ tar -xzvf latest.tar.gz
``` 

### Delete the tar.gz

```bash
$ rm -r latest.tar.gz
``` 

### Change owner


```bash
$ chown www-data: -R wordpress/
``` 

## Now in mysql


### Create a user to ```wordpress```

Enter the console of mysql

```bash
$ mysql -u root -p
```

Create user:

```sql
$ CREATE USER 'wordpressuser'@'localhost' IDENTIFIED BY 'userpassword';
```


### Create database


```sql
$ CREATE DATABASE wordpressdb;
``` 

On the basis of newly created data, we assign the user:

```sql
$ GRANT ALL PRIVILEGES ON wordpressdb.* TO 'wordpressuser'@'localhost';
``` 
 
Refresh the database:

```sql
$ FLUSH PRIVILEGES;
```

And exit

```sql
$ exit;
```

### Now go to the next path ```localhost/wordpress``` in your browser and finish the installation


Passwd: uEJQ3#pIi1p(QO^BM(