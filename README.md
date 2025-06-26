### Prerequisites
- PHP, Composer, Laravel CLI, and MySQL installed.
- Both apps run on the same TLD to share cookies or use a shared database for sessions.
- Both projects share the same database for the purpose of this example (e.g., `sso_db`)

### Setup Instructions
1. **Create Database**:
   ```sql
   CREATE DATABASE sso_db;
   ```

2. **Install Laravel Projects**:
   ```bash
   composer create-project laravel/laravel ecommerce.app
   composer create-project laravel/laravel foodpanda.app
   ```
2. **Create two virtual hosts**:
   <VirtualHost *:80>
    DocumentRoot "C:/laragon/www/ecommerce.app/public"
    ServerName ecommerce.app.test
    <Directory "C:/laragon/www/ecommerce.app/public">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "C:/laragon/www/foodpanda.app/public"
    ServerName foodpanda.app.test
    <Directory "C:/laragon/www/foodpanda.app/public">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
3. **Configure `.env` for Both Apps**:
   - Update `.env` in both projects to use the same database and session configuration:
     ```env
     APP_URL=http://ecommerce.app.test
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=sso_db
     DB_USERNAME=root
     DB_PASSWORD=

     SESSION_DRIVER=database
     SESSION_COOKIE=same_sso_session
     SESSION_DOMAIN=.app.test
     ```
     For `foodpanda.app.test`:
     ```env
     APP_URL=http://foodpanda.app.test
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=sso_db
     DB_USERNAME=root
     DB_PASSWORD=

     SESSION_DRIVER=database
     SESSION_COOKIE=same_sso_session
     SESSION_DOMAIN=.app.test
     ```

4. **Run Migrations**:
   - In both projects, run:
     ```bash
     php artisan migrate
     ```

5. **Run Local Servers**:
   now access http://ecommerce.app.test and login
   click on "Visit Foodpanda Dashboard" for auto login
