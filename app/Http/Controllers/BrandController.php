<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Price;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brand(Request $request)
    {

        if ($request->isMethod('post')) {

            $request->validate([
                'name' => 'required'
            ]);

            try {
                $brand = new Brand();
                $brand->name = $request->name;
                $brand->img = 'img';
                $brand->save();

                return redirect()->route('brands')->with('success', 'Brand Added Successfully');
            } catch (\Throwable $th) {
                return redirect()->route('brands')->with('error', 'Something went wrong');
            }
        }

        if ($request->isMethod('get')) {
            $brands = Brand::get();
            return view('Brands/index', compact('brands'));
        }
    }

    public function delete($id)
    {
        try {
            Brand::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Brand deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function price(Request $request)
    {

        if ($request->isMethod('post')) {


            $request->validate([
                'brand_id' => 'required',
                'measure' => 'required',
                'price' => 'required'
            ]);

            try {
                $price = new Price();
                $price->brand_id = $request->brand_id;
                $price->measurement = $request->measure;
                $price->price = $request->price;
                $price->save();

                return redirect()->route('price')->with('success', 'Price Added Successfully');
            } catch (\Throwable $th) {
                return redirect()->route('price')->with('error', 'Something went wrong' . $th);
            }
        }

        if ($request->isMethod('get')) {
            $brands = Brand::get();
            $price = Price::with('brand')->get();

            return view('Brands/price', compact('price', 'brands'));
        }
    }


    public function deleteprice($id)
    {
        try {
            Price::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Price deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function updateprice(Request $request, $id)
    {

        try {
            $price = Price::where('id', $id)->update([
                'price' => $request->price
            ]);
            return redirect()->back()->with('success', 'Price Updated Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Price Updation Failed');
        }
    }
}
