# RunCloud Server Management Assessment

### This execute by Muhammad Firdaus Bin Rosli

## Project Overview
A simplified server management system demonstrating subscription plan features.

## Requirements
- PHP 8.1+
- Composer

## Installation
1. Clone the repository:
   ```sh
   git clone gh repo clone daus7768/runcloud
   ```
2. Navigate to the project directory:
   ```sh
   cd runcloud-assesment
   ```
3. Install dependencies:
   ```sh
   composer install
   ```
4. Run tests to verify installation:
   ```sh
   composer test
   ```

## Features
- Subscription plan management
- Server connection limitations
- Extensible plan system

## Usage
Run the following command to see the demonstration:
```sh
php public/index.php
```

## Directory Structure
```
runcloud-assesment/
├── public/
│   └── index.php
├── src/
│   ├── Management/
│   │   ├── AbstractClasses/
│   │   ├── Interfaces/
│   │   ├── Plans/
│   │   ├── Exceptions/
│   │   ├── Server.php
│   │   └── User.php
├── tests/
│   ├── Management/
│   └── UserTest.php
├── composer.json
├── README.md
```

## Troubleshooting
If you encounter issues, try:
- Running `composer dump-autoload`
- Ensuring PHP is properly installed and configured
- Checking the `vendor` directory exists after running `composer install`

