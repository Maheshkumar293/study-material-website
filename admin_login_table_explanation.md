## Admin Login Table Selection Explanation

In the `admin-login.php` file, there is proper table selection in place. The SQL query specifically selects from the `admin_users` table:

```php
$stmt = $pdo->prepare("SELECT * FROM admin_users WHERE username = ?");
```

This query:
1. Explicitly specifies the table name (`admin_users`)
2. Uses a prepared statement for security
3. Selects all columns from the specified table
4. Includes a WHERE clause to filter by username

The table selection is correct and properly implemented in the login process.