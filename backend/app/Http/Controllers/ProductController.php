<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return response()->json(['message' => 'Lista de produtos']);
    }
}
