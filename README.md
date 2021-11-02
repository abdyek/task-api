## Install Dependency

``` 
composer install
```

## Generate the SSL keys:

 ```
 php bin/console lexik:jwt:generate-keypair
 ```

## Create database

```
php bin/console doctrine:database:create
```

## Migrate

```
 php bin/console doctrine:migrations:migrate
```

## Run Symfony local web server

``` 
symfony server:start
```

## Create a new user

```
curl --location --request POST 'http://127.0.0.1:8000/sign-up' \
--header 'Content-Type: application/json' \
--data-raw '{
    "username": "example-user",
    "password": "1234a"
}'
```

If everything gone well It should return:

```json
{"status":200,"message":"success"}
```

Now! You can clone and run [client](https://github.com/abdyek/task-client) of this project to check it