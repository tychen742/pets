<?php
//include_once './classes/Route.php';
//include_once './Controllers/Index.php';
//include_once './Controllers/AboutUs.php';
//include_once './Controllers/ContactUs.php';
//include_once './Controllers/Controller.php';


Route::set('index.php', function(){
   Index::CreateView('Index');
});
Route::set('about-us', function () {
    AboutUs::CreateView('AboutUs');
    AboutUs::doSomething();
});

Route::set('contact-us', function () {
    ContactUs::CreateView('ContactUs');
});