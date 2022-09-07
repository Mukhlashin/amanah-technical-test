<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $qrcode = \QrCode::generate('Make me into a QrCode!');

        return view('numero-uno', compact('product', 'qrcode'));
    }
}
