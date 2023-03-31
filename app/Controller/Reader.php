<?php

namespace Controller;

use Model\Readers;
use Src\View;
use Src\Request;


class Reader{
    public function addReader (Request $request): string
    {
        if ($request->method === 'POST' && Readers::create($request->all())) {
            app()->route->redirect('/books');
        }
        return new View('forms.addReader');

    }

}