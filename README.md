# PHP Form System

PHP Form System is a lightweight form handling system built with vanilla PHP.
It focuses on validation, sanitization, and a clean architecture inspired by MVC patterns.

## Table of contents

- [Purpose](#purpose)
- [Status](#status)
- [Features](#features)
- [Quick start](#quick-start)
- [CRUD Flowcharts](docs/crud-flow.md)

## Purpose

The goal of this project is to build a simple but scalable backend system to handle forms without relying on frameworks.

It focuses on:

- understanding form processing in PHP separating concerns (Handler / Validator / Database)
- building a reusable validation system implementing a clean CRUD workflow

## Status

[![php][php]][php-url]
[![bootstrap][bootstrap]][bootstrap-url]
[![javascript][javascript]][javascript-url]
[![license][license]][license-url]

## Features

- Form validation and sanitization
- Error handling per field
- Dynamic form (create & edit)
- CRUD operations (Create, Read, Update, Delete)
- Database interaction with PDO
- Basic routing using REQUEST_URI
- Responsive dashboard with Bootstrap

## Quick start

### Clone the repo

```bash
git clone https://github.com/fsa-ara/php-form-system.git
```

### Setup database

#### Start MySQL

```bash
mysql.server start
```

#### Import schema

```bash
mysql -u root -p < sql/schema.sql
```

#### Seed database (optional)

```bash
mysql -u root -p form < sql/seed.sql
```

### Run project

```bash
php -S localhost:8000 -t public
```

[php]: https://img.shields.io/badge/php-8.5.0-777BB4.svg
[php-url]: https://www.php.net/
[bootstrap]: https://img.shields.io/badge/bootstrap-5.x-7952B3.svg
[bootstrap-url]: https://getbootstrap.com/
[javascript]: https://img.shields.io/badge/javascript-ES6-F7DF1E.svg
[javascript-url]: https://developer.mozilla.org/en-US/docs/Web/JavaScript
[license]: https://img.shields.io/badge/license-MIT-blue.svg
[license-url]: LICENSE
