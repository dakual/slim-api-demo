## Creating Self-signed SSL certificate
```sh
mkdir /conf/ssl
cd conf/ssl
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout server.key -out server.crt
```

## Database
```sql
CREATE TABLE customers
(
  id INT unsigned NOT NULL AUTO_INCREMENT,  
  name VARCHAR(150) NOT NULL,
  email VARCHAR(150) NOT NULL,
  phone VARCHAR(150) NOT NULL,
  PRIMARY KEY(id)
);
```

## Run with Docker
```sh
sudo docker compose up -d
```

## Run without Docker
```php
php -S localhost:8888 -t public
```

## Api URL's
> http://localhost:8888/customers-data/all<br>
> http://localhost:8888/customers-data/add
```json
{
   "name" : "amy",
   "email" : "amy@mail.com",
   "phone" : "123449988383"
}
```
> http://localhost:8888/customers-data/update/3
```json
{
    "name" : "amy wheelan",
    "email" : "amy@mail.com",
    "phone" : "123449988383"
}
```
> http://localhost:8888/customers-data/delete/3