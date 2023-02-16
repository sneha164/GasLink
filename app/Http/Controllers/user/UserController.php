<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\CompanySetting;
use App\Models\Benefits;
use App\Models\Choose;
use App\Models\Product;
use App\Models\ProductCategory;

class UserController extends Controller
{
    public function index()
    {
        $about = CompanySetting::first();
        $benefits = Benefits::all();
        $choose = Choose::all();
        $product = Product::all();
        $productcategory = ProductCategory::all();
        return view('welcome', compact('about','benefits','choose','product','productcategory'));
    }
    public function products()
    {
        return view('user.products');
    }
    public function technician()
    {
        return view('user.technician');
    }
    public function about()
    {
        return view('user.about');
    }

    public function benefits()
    {
        return view('user.benefits');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function login()
    {
        return view('user.login');
    }
    public function registration()
    {
        return view('user.registration');
    }
    public function services()
    {
        return view('user.services');
    }

  
}
