# Admin Login Instructions

If you're seeing error=1 when trying to login to the admin interface, please note:

1. The default admin credentials are:
   - Username: admin
   - Password: password

2. This password corresponds to the bcrypt hash stored in the admin_users table.

Note: Do not confuse this with the entry in the 'users' table. The admin interface uses a separate 'admin_users' table with properly hashed passwords for security.

## If you need to reset the password
Please contact your system administrator to update the password in the admin_users table. Make sure to use PHP's password_hash() function to generate a new bcrypt hash before storing it in the database.