<?php

namespace App\Http\Controllers\technician;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Technician;
class TechnicianController extends Controller
{
    public function index()
    {
        return view('technician.index');
    }
}
