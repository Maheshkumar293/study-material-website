# Database Setup Instructions

This document explains how to set up the database for the materials management system.

## Prerequisites
- MySQL Server installed
- PHP with MySQL support
- Access to command line or phpMyAdmin

## Setup Steps

1. First, ensure your MySQL server is running

2. Update database credentials in `config.php`:
   - Set your database host
   - Set your database username
   - Set your database password

3. Run the database setup script:
   ```bash
   php database_setup.php
   ```

   Or manually import the SQL file using:
   ```bash
   mysql -u your_username -p < create_database.sql && mysql -u your_username -p study_materials < schema.sql
   ```

## Database Structure

The database consists of two main tables:

1. `users`
   - id (Primary Key)
   - username
   - password (hashed)
   - role (admin/user)
   - created_at

2. `materials`
   - id (Primary Key)
   - title
   - description
   - file_path
   - uploaded_by (Foreign Key to users.id)
   - upload_date

## Default Admin Account
A default admin account is created during setup:
- Username: admin
- Password: admin123

**Important:** Please change the admin password after first login!

## Troubleshooting

If you encounter any issues:
1. Check if MySQL server is running
2. Verify database credentials in config.php
3. Ensure PHP has required permissions
4. Check error logs for detailed information