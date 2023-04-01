<?php

namespace Controller;

use Model\Books;
use Model\Readers;
use Src\View;
use Src\Request;


class Book{
    public function books(Request $request): string
    {
        $books = Books::all();
        $readers = Readers::all();
        return new View('site.books', ['books' => $books, 'readers' => $readers ]);

    }
    public function addBook (Request $request): string
    {
        if ($request->method === 'POST' && Books::create($request->all())) {
            app()->route->redirect('/books');
        }
        return new View('forms.addBook');
    }

}