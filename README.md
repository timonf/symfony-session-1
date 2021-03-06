Symfony Session 1
=================

This is the repository of an internal Symfony Session.

Basics for this repository
--------------------------

* Starting the web server: `php -S localhost:8020`
* Access in the browser via [http://localhost:8020/?name=World](http://localhost:8020/?name=World)

Lesson 1: Front controller basics
---------------------------------

Learning fundamentals of today’s PHP applications.

### Practice: building a web page

* Using a front controller (“index.php”)
* Starting web server using PHP:
  “php -S localhost:8020”
* Let’s say “Hello $name” in a dedicated GreetController class
* Autoload our GreetController into front controller

### Task 1: Using a library!

Documentation: http://bit.do/symfony-http-foundation (~ 10–20 minutes)

* Install composer package “symfony/http-foundation”
* Create a Request object (in front controller) and pass it to the “GreetController” action
* Reading GET query parameter “name” instead of `$_GET['name']`

### Task 2: Use our app as an API!

* Create a „JsonResponse“ object and return it in your greet controller (instead of `echo`)
* Let front controller render/convert the response object — tip: use `->send()`
* Check in Chrome’s or Firefox’ debug tools, if Content-Type is “application/json”
