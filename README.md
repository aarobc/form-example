# form-example

Demonstrating a couple different approaches to handling forms and validation.

`index.php` requires one to run `composer install` for the php backend in `submit.php`, as it uses https://github.com/Respect/Validation library.
This is to demonstrate how one might use an external library for validation. It uses https://github.com/vuejs/vue for the front end.
This is still not an ideal example as routing is not used for the sake of simplicity.

`raw.php` uses no javascript, and no special libraries, and the built in `ctype_alpha` and `ctype_digit` functions for validation.

While for this task it may appear that the `raw.php` approach is simpler, it's much better to keep the view logic in the browser,
as this vastly simplifies the back end code, and the approach is much more maintainable, and on slower servers the page will appear much more responsive,
and in many cases server side processing is going to be much faster.

a live demo can be found at http://demoform.aarobc.com and http://demoform.aarobc.com/raw.php respectively.
