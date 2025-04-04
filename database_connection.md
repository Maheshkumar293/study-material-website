# Database Connection Code

The database connection configuration is stored in `config.php` with the following parameters:

```php
<?php
$host = 'localhost';
$dbname = 'study_materials';
$username = 'root';
$password = '';
$port = 3308;
```

These parameters are used to establish a connection to the MySQL database. The connection is configured:
- Host: localhost
- Database Name: study_materials
- Username: root
- Password: (empty)
- Port: 3308

Note: For security reasons, it's recommended to:
1. Use a strong password instead of an empty password
2. Consider using environment variables for sensitive credentials
3. Restrict database user permissions to only what's necessary