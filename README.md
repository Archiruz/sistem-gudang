# Sistem Gudang API
Job application technical test for ID Grow by PT. Clavata Extra Sukses.

## Table of Contents
- [Sistem Gudang API](#sistem-gudang-api)
  - [Table of Contents](#table-of-contents)
  - [Overview](#overview)
  - [Pre-requisite](#pre-requisite)
  - [Environment Setup](#environment-setup)
  - [How to Run](#how-to-run)
  - [Postman Documentation](#postman-documentation)
  - [Troubleshooting](#troubleshooting)
  - [Contribution Guidelines](#contribution-guidelines)
  - [License](#license)

## Overview
This project is made with Laravel 12 + Livewire starter kit. The project should be deployed on a container through Docker (via Laravel Sail).

## Pre-requisite
1. PHP (>= 8.0)
2. Composer (>= 2.0)
3. Docker (Make sure Docker Engine is running)

## Environment Setup
1. Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```
2. Configure the database credentials in the `.env` file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=sistem_gudang
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

## How to Run
1. Clone this repository:
   ```bash
   git clone https://github.com/Archiruz/sistem-gudang.git
   ```
2. Install dependencies:
   ```bash
   php composer install
   ```
   If an error appears (Windows issue), try running:
   ```bash
   php composer install --ignore-platform-reqs
   ```
3. Start the project:
   ```bash
   ./vendor/bin/sail up
   ```
4. Migrate and populate the database:
   ```bash
   ./vendor/bin/sail artisan migrate --seed
   ```
5. Open [localhost](http://localhost/) in the browser or test the API with Postman.

## Postman Documentation
[Link to Postman Documentation](https://documenter.getpostman.com/view/37965377/2sB2j4fWiz)

## Troubleshooting
- **Docker not starting**: Ensure Docker Desktop is running and restart the Docker Engine if necessary.
- **Migration errors**: Check the database credentials in the `.env` file and ensure the database server is running.
- **Composer installation issues**: Use the `--ignore-platform-reqs` flag if you encounter platform-specific errors.

## Contribution Guidelines
1. Fork the repository.
2. Create a new branch for your feature or bug fix:
   ```bash
   git checkout -b feature/your-feature-name
   ```
3. Commit your changes:
   ```bash
   git commit -m "Add your message here"
   ```
4. Push to your branch:
   ```bash
   git push origin feature/your-feature-name
   ```
5. Open a pull request.

## License
This project is licensed under the MIT License. See the LICENSE file for details.


