<?php

namespace Controller;

use Model\Books;
use Model\Readers;
use Model\UserBooks;
use Src\View;
use Src\Request;


class UserBook{

    public function addUserBook (Request $request): string
    {
        if ($request->method === 'POST' && UserBooks::create($request->all())) {
            app()->route->redirect('/books');
        }
        $books = Books::all();
        $readers = Readers::all();
        return new View('forms.addUserBook', ['books' => $books, 'readers' => $readers]);
    }
}