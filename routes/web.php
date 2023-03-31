<?php

use Src\Route;

Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout'])->middleware('auth');
Route::add('GET', '/books', [Controller\Book::class, 'books']);
Route::add('GET', '/addreader', [Controller\Reader::class, 'addReader']);
Route::add('GET', '/authors', [Controller\Author::class, 'authors']);
