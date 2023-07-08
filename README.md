<h1 align="center">Travel Agency REST API</h1>

<h4 align="center">A Travel Agency application built with <a href="https://laravel.com/" target="_blank">Laravel</a>.</h4>

<p align="center">
  <a href="https://www.php.net"><img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"></a>
  <a href="https://laravel.com">
      <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white">
  </a>
  <a href="https://www.mysql.com">
    <img src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white">
  </a>
</p>

<p align="center">
  <a href="#key-features">Key Features</a> •
  <a href="#how-to-use">How To Use</a> •
  <a href="#technologies">Technologies</a> •
  <a href="#license">License</a>
</p>

## Key Features

-   CRUD Operations
    -   CREATE, READ, UPDATE and DELETE resources
-   Authentication with Sanctum
-   Admin & Editor functionalities
-   Feature tests with PHPUnit
-   Factory & Seeders
-   Data validation
-   Error Handling
-   API Documentation with Scribe
-   Dockerized application

## How To Use

To run this application, you'll need [Docker](https://www.docker.com) in your computer. From your command line:

```bash
# Clone this repository
$ git clone https://github.com/victortavaresdev/travel-agency-laravel-api.git

# Go into the repository
$ cd travel-agency-laravel-api

# Create a .env file and update the database config
$ cp .env.example .env

# Run the docker containers
$ docker-compose up -d

# Access the container
$ docker-compose exec app bash

# Install project dependencies
$ composer install

# Generate the Laravel project key
$ php artisan key:generate
```

Access the API endpoints (BASE_URL):

-   http://localhost:8000/api/v1/

## Technologies

This software uses the following technologies:

-   [PHP](https://www.php.net/)
-   [Laravel](https://laravel.com/)
-   [MySQL](https://www.mysql.com/)
-   [Scribe](https://scribe.knuckles.wtf/laravel/)
-   [PHPUnit](https://phpunit.de/)
-   [Docker](https://www.docker.com/)
-   [Pint](https://laravel.com/docs/10.x/pint/)
-   [Larastan](https://github.com/nunomaduro/larastan/)

## License

MIT

---

<p align="left">
  <a href="https://www.linkedin.com/in/victor-tavares-dev/"><img src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white">
  </a>
  <a href="https://github.com/victortavaresdev">
    <img src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white">
  </a>
  <a href="mailto:victortavaresdev@gmail.com">
      <img src="https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white">
  </a>
</p>
