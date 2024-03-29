# Analytical Hierarchy Process (AHP)

## Before starting to edit this website, there are a few steps to follow:

1. After cloning the github respository, open the terminal and run the command **composer install,**
2. Then copy and paste the .env.example file and then change the name to .env,
3. Once finished, run **php artisan key:generate**,
4. Next, before running Tailwind, run the command **npm install -D tailwindcss postcss autoprefixer** first (make sure you have nodejs installed on your device),
5. Just run the command **npm run dev** to start Tailwind CSS. This will simplify the website development process using Tailwind CSS.
6. Next, run the command **php artisan serve** to activate the server. This will make your website accessible via a local server.
7. Once these two commands have been executed, you are ready to start editing your website.

## To connect and enter data in the database:

1. First, make sure that in the .env file, the contents of DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD are as desired,
2. If it is appropriate, then run **php artisan migrate**,
3. After that, run php artisan migrate:fresh --seed,
4. The contents of the database will be automatically filled with seeders.
