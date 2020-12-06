<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Orders;

class ProductController extends Controller
{

    public function index()
    {
        return view('content.home');
    }

    public function product()
    {
        $products = Products::all();

        return view('content.product', compact('products'));
    }

    public function add()
    {
        return view('content.orderEvent');
    }

    public function orderEvent(Request $request)
    {

        $products = new Products();
        $products->name = $request->name;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->stock = $request->stock;

        $products->img_path = request()->file('img_path')->store('image');
        $products->save();

        return redirect(route('product'));
    }

    public function update($id)
    {
        $products = Products::find($id);

        return view('content.updateEvent', compact('products'));
    }

    public function updateEvent($id,Request $request)
    {
        $products = Products::find($id);
        $products->name = $request->name;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->stock = $request->stock;
        $products->img_path = $request->img_path;
        $products->save();

        return redirect(route('product'));
    }

    public function delete(Request $request)
    {
        $products = Products::find($request->id);
        $products->delete();

        return redirect(route('product'));
    }

    public function order()
    {
        $products = Products::all();

        return view('content.order', compact('products'));
    }

    public function addDetail($id)
    {
        $products = Products::find($id);

        return view('content.orderDetail', compact('products'));
    }

    public function orderDetail(Request $request)
    {
        $orders = new Orders();
        $orders->product_id = $request->prodID;
        $orders->amount = $request->amount;
        $orders->buyer_name = $request->buyer_name;
        $orders->buyer_contact = $request->buyer_contact;
        $orders->save();

        return redirect(route('order'));
    }

    public function history()
    {
        $orders = Orders::all();
        $products = Products::all();

        return view('content.history', compact('orders'), compact('products'));
    }






}
