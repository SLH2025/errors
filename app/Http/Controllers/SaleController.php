<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class SaleController extends Controller
{


    public function summary(Request $request)
    {


        $brands = Brand::get();
        return view('Sales.summary', compact('brands'));
    }

    public function form(Request $request)
    {

        if ($request->isMethod('get')) {
            $brands = Brand::get();
            return view('Sales.form', compact('brands'));
        }
    }
}
