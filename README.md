# Web Template
A modular template using PHP that lets you split sections (components) into independent, reusable pieces, and think about each piece in isolation.

## Prerequisites
The following tools are required to get started.

1. [Node.js](https://nodejs.org/)
2. [Git](https://git-scm.com/)
3. [Gulp](https://gulpjs.com/)

## Development setup
1. Clone the source repository and change directory.

	```sh
	git clone https://github.com/RPeraltaJr/web-template.git  
	cd web-template
	```
2. Install all packages.  

	```sh
	npm install 
	composer install
	```
3. Run Gulp to get started.  

	```sh
	gulp
	```

## Features
1. Compiles SCSS into CSS
2. CSS and JS minifier
3. Autoprefixer
4. HTMLPurifier [http://htmlpurifier.org/]
5. PHP Environment variables [https://github.com/vlucas/phpdotenv]
6. Page specific settings for better page load and SEO
