# CodeIgniter 4 REST API Starter

Simple CodeIgniter 4 REST API example with a Product resource.

## Requirements

- PHP **8.2** or higher
- Composer
- CodeIgniter 4.7+

## Installation

```bash
composer install
cp env .env
php spark key:generate
```

Configure database in `.env`, then:

```bash
php spark migrate
php spark db:seed Product
```

## API Endpoints

Base group: `api/v1`

| Method | Route                | Description          |
|--------|----------------------|----------------------|
| GET    | /api/v1/product      | List all products    |
| GET    | /api/v1/product/{id} | Show single product  |
| POST   | /api/v1/product      | Create product       |
| PUT/PATCH | /api/v1/product/{id} | Update product    |
| DELETE | /api/v1/product/{id} | Delete product       |

## Important note about upgrading

This repository has been updated to require **PHP 8.2+** and **CodeIgniter ^4.7**.

A full upgrade from the official [appstarter](https://github.com/codeigniter4/appstarter) is still recommended for production use because many internal configs and the system structure have changed since the original 4.0 / 4.4 base.

## License

MIT

## Happy Coding!
