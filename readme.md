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
Stable Version Download here 
* [CI3Blade v1.1.0.zip](https://github.com/teukuraja/ci3blade/archive/v1.1.0.zip)
* [CI3Blade v1.1.0.tar.gz](https://github.com/teukuraja/ci3blade/archive/v1.1.0.tar.gz)

Or unstable version (CI 3.2.0-dev) with git clone:
```
git clone https://github.com/teukuraja/ci3blade.git
```
## How to use
```
public function index(){

	//load view
	return view('filename'); //without extention .blade.php

	//load view with array data
	$data = array();
	return view('filename', $data);
}
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

* CI Version : 3.1.9 
* Blade Version 1.1.0
* PHP Version : ^5.6
