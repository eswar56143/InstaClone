#    InstaClone
                sample laravel project

<h3>Required software's to run this app in your local machine </h3>
<ol>
    <li><h3>php server</h3>  <a href="https://www.apachefriends.org/index.html">click here to download xampp </a></li> 
    <li><h3>Composer</h3>  <a href="https://getcomposer.org/download/">click here to download Composer </a></li> 
    <li><h3>Nord.js</h3>  <a href="https://nodejs.org/en/download/">click here to download Nord.js </a></li>
</ol>

<h3>Steps to perform </h3>
<ul>
    <li>Install laravel framework by running "composer global require laravel/installer" command in your terminal</li>
    <li>Pull InstaClone project from git or download the zip and extract in you local machine</li>
    <li>Create a database file named "database.sqlite" in the directory "InstaClone/database/"</li>
    <li>Rename ".env.example" file to ".env" inside your project root (windows won't let you do it, so you have to open your console and change directory(cd) to your project root directory and run "mv .env.example .env" command)</li>
    <li>Modify the database information in ".env" file as "DB_CONNECTION=sqlite"</li>    
    <li>Open the console and change directory to your project root directory</li>
    <li>Run "composer install" or "php composer.phar install" in the console</li>
    <li>Run "php artisan key:generate"</li>
    <li>Run "php artisan migrate"</li>
    <li>Run "php artisan storage:link"</li>
    <li>Run "php artisan serve"</li>
    <li>Now you can access the project from the address provided by "php artisan serve" </li> 
</ul>
