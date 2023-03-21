# TITIPAN (Tiba Tiba Pindahan)

Titipan is a trusted service provider for office, house, and warehouse relocations. In addition to relocation services, Titipan also offers storage services and delivery services throughout Indonesia. This project built with PHP framework named [Laravel](https://laravel.com/).

# About Us
Group of 228 from class SI-44-02, Bachelor of Information Systems at Telkom University. We have 6 members, including:

1. [Muh Ario Adriansyah](https://www.instagram.com/madrioo_/) (1202200020) ``Project Manager``
2. [Citra Alivia](https://www.instagram.com/Cttraaaaa/) (1202200227) ``Analyst``
3. [Afifah Hasna Wafiyah](https://www.instagram.com/afiffaaah/) (1202202294) ``Programmer`` 
4. [Oktaviana Zahra A](https://www.instagram.com/okktavi/) (1202204260) ``Programmer``
5. [Imam Mukhlash](https://www.instagram.com/nierimam/) (1202204032) ``Programmer``
6. [M. Hanan Rafif Farizta](https://www.instagram.com/hananfarizta/) (1202204042) ``Programmer`` 


# Repository Structure

The repository is structured as follows:

-   `main` is main branch of the repository and contains the latest stable version of the code.
-   `development` is the development branch of the repository and contains the latest development version of the code.
-   `feature/feature_name` branches are used to develop new features and are merged into dev when they are ready.
-   commits formatted as `feat/feature_name` are used to fix bugs in the code and are merged into dev when they are ready.

# Installation
## Prerequisites
- Composer
- PHP >= 8
- XAMPP or MAMP

## Running the application
*Copy this command on your terminal or git bash*

- Clone project from github

```bash
git clone https://github.com/SI-RPL-2023/SI4402_228_TITIPAN.git 
```

- Copy the .env.example file to .env

```bash
cp .env.example .env
```

- Change the database name in the .env file

```bash
DB_PORT=your_mysql_port
DB_DATABASE=your_database_name
```

- Install Composer

```bash
composer install
```

- Generate Key

```bash
php artisan key:generate
```

- Migrate Database

```bash
php artisan migrate
```

- Link Storage

```bash
php artisan storage:link
```

- Run the server

```bash
php artisan serve
```