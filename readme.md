Codeigniter with Blade
=====

## Getting Started


Default Setting
```
APPPATH = /application

SYSTEMPATH = /vendor/codeigniter

VIEWPATH = /resource/views

CACHEPATH = /application/cache

Index path = /public/index.php
```

## How to install
```
git clone https://github.com/teukuraja/ci3blade.git
```
## How to fix?
* Cache Folder Permission Denied
```
sudo chown $USER:www-data application/cache
sudo chmod 775 application/cache
```

* Rewrite Module Disabled
```
sudo a2enmod rewrite
sudo service apache2 restart
```

## Built With

* [bcit-ci/CodeIgniter](https://github.com/bcit-ci/CodeIgniter/) - Codeigniter Framework
* [jenssegers/blade](https://github.com/jenssegers/blade) - Blade Templating Engine

## Version

* CI Version : 3.2.0
* Blade Version 1.1.0
* PHP Version : ^5.6
