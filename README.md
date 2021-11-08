codename SHREK *"Get Out Of My Swamp!"*
Because a swamp is full of crud (wink wink)

Check `/.env` for database specs

Installation
1. Make sure you have a database named `new` with credentials `lamp`:`toor` (or edit `getoutofmyswamp/blog/.env` file)

2.

```
git clone https://github.com/elogada/getoutofmyswamp
cd getoutofmyswamp/blog
composer update --no-scripts
php artisan key:generate

```

Changelog:
0.0.2:
	(stable) Just one blade but focus on Vue.js

0.0.1
	(stable) Start with laravel
	(stable) Connect to mysql using `lamp`:`toor`
	(stable) Prep git repo
