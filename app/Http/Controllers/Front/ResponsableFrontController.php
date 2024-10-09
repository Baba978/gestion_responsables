<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Responsable;

class ResponsableFrontController extends Controller
{
    public function index()
    {
        $responsables = Responsable::paginate(10);
        return view('front.responsables.index', compact('responsables'));
    }
}
