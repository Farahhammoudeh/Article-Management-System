# Article Management System

## Overview
This Laravel 11 project is designed for managing articles with associated authors, tags, and images. The system includes user authentication, allowing authors to create, update, and delete articles. Users can also view articles with details about the authors and associated tags.

## Features
- **User Authentication**: Secure login and registration
- **Article Management**: Authors can create, update, and delete articles
- **Article Details**: Display articles with associated authors, tags, and images
- **Author Management**: Display author profiles with photos
- **Tag Filtering**: Filter articles by tags


## Requirements
- **PHP**: 8.1 or higher
- **Composer**
- **Laravel**: 11.x
- **Database**: MySQL, PostgreSQL, SQLite, or any other supported by Laravel

## Installation

### Clone the Repository:
```git clone https://github.com/yourusername/your-repository.git```

### Navigate to the Project Directory:
```cd your-repository```

### Install PHP Dependencies:
```composer install```

### Install JavaScript Dependencies:
```npm install```

## Set Up the Environment File:

### Copy the example environment file:
```cp .env.example .env```

### Generate the application key:
```php artisan key:generate```

### Configure the Database:
Open the .env file and update the database connection settings.

### Run Migrations:
```php artisan migrate```

### Seed the Database (if applicable):
```php artisan db:seed```

## Start the Development Servers:

### Laravel Development Server:
```php artisan serve```

### Vite Development Server (in a new terminal window):
```npm run dev```

### Access your application at http://localhost:8000.

## Usage
Login/Registration: Users can create an account or log in.
Article Management: Authors can create, update, and delete articles.
View Articles: Users can view articles with details about authors, tags, and images.
Filter Articles: Use tags to filter articles.
Author Profiles: View author profiles with photos.

## Contributing
Contributions are welcome! Please:
Fork the repository and create a new branch for your changes.
Follow coding standards and submit a pull request with a clear description of your changes.

## License
This project is licensed under the MIT License - see the LICENSE file for details.
