<?php

namespace app\controllers;

use app\libary\Email;

class ProductController
{
    public function index()
    {
        dd('Ola');
    }

    public function show(
        string $product,
        Email $email
    ) {
        dd($product, $email);
    }
}
