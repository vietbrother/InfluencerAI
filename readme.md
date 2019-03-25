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

get token facebook : https://developers.facebook.com/ 


## Reference
https://www.codermen.com/blog/66/laravel-5-7-facebook-login-tutorial-step-by-step
https://viblo.asia/p/laravel-social-login-63vKjpNdl2R
https://quantizd.com/integrating-instagram-api-in-laravel-5-6/

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).


### Run https
- php artisan serve
- cd <path-to-ngrok>
- ./ngrok http localhost:8000
