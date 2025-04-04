# Setup Instructions

1. The admin user credentials have been added to the schema:
   - Username: admin
   - Password: password

2. The password in the database is already hashed using password_hash() with the DEFAULT_COST option.

3. To apply these changes:
   1. Run the database_setup.php script to recreate the database with the updated schema
   2. Try logging in to the admin panel using the credentials above

Note: If you need to change the admin password, make sure to hash it using PHP's password_hash() function before inserting it into the database.