## Install

1. Step:1 Create a new project
	- composer create-project laravel/laravel socialLogin --prefer-dist
	- php artisan migrate

2. Step 2: Create Laravel Authentication
	- php artisan make:auth

3. Step: 3 Download Laravel/Socialite package
	- composer require laravel/socialite
	- composer require socialiteproviders/instagram 
	- composer require guzzlehttp/guzzle
	
	- composer require stevebauman/location

get token facebook : https://developers.facebook.com/ 


## Reference
- https://www.codermen.com/blog/66/laravel-5-7-facebook-login-tutorial-step-by-step
- https://viblo.asia/p/laravel-social-login-63vKjpNdl2R
- https://quantizd.com/integrating-instagram-api-in-laravel-5-6/
- http://www.expertphp.in/article/how-to-get-location-from-its-ip-address-using-laravel-5-4-with-example

- https://www.howtoforge.com/tutorial/how-to-install-laravel-5x-with-nginx-and-php-fpm-7-on-centos-7/

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).


### Run https
- php artisan serve
- cd <path-to-ngrok>
- ./ngrok http localhost:8000

### Debug
- php artisan serve
- run degbug with xdebuger

### Migrate database
- php artisan migrate:refresh (empty database and re-create)


