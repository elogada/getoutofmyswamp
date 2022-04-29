<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


### Installation

```
composer update --no-scripts
php artisan key:generate
```

### Running the webapp

Make sure you edit your Apache /etc/apache2/sites-available/VHOSTS.conf file properly **somewhat similar** to this:

```
<VirtualHost *:80>
        ServerAdmin bayani@listchan.com
        DocumentRoot "C:\Users\admin\Documents\getoutofmyswamp/public"
        ServerName localhost
        ServerAlias localhost
        ##ErrorLog "logs/dummy-host.example.com-error.log"
        ##CustomLog "logs/dummy-host.example.com-access.log" common
        <Directory "C:\Users\admin\Documents\getoutofmyswamp/public">
                Options Indexes FollowSymLinks MultiViews
                AllowOverride all
                Order Deny,Allow
                Allow from all
                Require all granted
        </Directory>
</VirtualHost>
```

Then make sure you do

```
        a2ensite VHOSTS.conf
```

### What if I was using XAMPP?

It's much easier, just make sure you place the right directory in _DocumentRoot_ and _Directory_ in the VHOSTS.conf file.


### Changelog

`0.0.4`
```
        (unstable) create workflow for CI/CD prototype
        (stable) prepare README.md for better use
```

`0.0.3` 
```
        (stable) update README
        (unstable) place items in root folder
        (unstable) simplify ENV file
```

`0.0.2`
```
        (stable) Just one blade but focus on Vue.js
        (stable) Tailwind Integration
```
`0.0.1`
```
        (stable) Start with laravel 
        (stable) Connect to mysql using lamp:toor  
        (stable) Prep git repo
```