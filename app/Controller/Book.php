<?php

namespace Controller;

use Model\Books;
use Model\Authors;
use Src\View;
use Src\Request;


class Book{
    public function books(Request $request): string
    {
        $books = Books::all();
        $authors = Authors::find(1);
        return new View('site.books', ['books' => $books, 'authors'=>$authors]);

    }

}