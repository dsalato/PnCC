<?php

namespace Controller;

use Model\Authors;
use Src\View;
use Src\Request;


class Author{
    public function authors(Request $request): string
    {
        $author = Authors::where('author_id', $request->author_id)->get();
        return (new View())->render('site.authors', ['author' => $author]);
    }
}