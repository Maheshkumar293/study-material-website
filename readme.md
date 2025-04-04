# Study Materials Portal

This is a simple web application for managing and distributing study materials. It includes both a public interface for downloading materials and an admin panel for managing the content.

## Features

- Public interface for viewing and downloading study materials
- Admin panel for managing materials (upload, delete)
- Secure login system
- Responsive design

## Setup Instructions

1. Install XAMPP on your system
2. Start Apache and MySQL services from XAMPP Control Panel
3. Create a new database using phpMyAdmin:
   - Open http://localhost/phpmyadmin
   - Create a new database named "study_materials"
   - Import the database.sql file

4. Copy all files to XAMPP's htdocs folder:
   ```
   C:\xampp\htdocs\study-materials\
   ```

5. Create an "uploads" folder in the project directory for storing materials:
   ```
   C:\xampp\htdocs\study-materials\uploads\
   ```

6. Access the website:
   - Public interface: http://localhost/study-materials/
   - Admin login: http://localhost/study-materials/admin-login.html

## Default Admin Credentials
- Username: admin
- Password: admin123

## Project Structure
- index.html - Public interface
- admin-login.html - Admin login page
- admin-dashboard.html - Admin dashboard
- style.css - Stylesheet
- scripts.js - JavaScript functions
- *.php - Backend files
- database.sql - Database structure and initial data
- uploads/ - Directory for uploaded files