<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view("welcome", [
            'products' => Product::paginate(10)
        ]);
    }
}
