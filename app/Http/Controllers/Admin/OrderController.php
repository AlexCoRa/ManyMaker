<?php
/**
 * Created by PhpStorm.
 * User: presa
 * Date: 28/05/2019
 * Time: 09:43 PM
 */

namespace App\Http\Controllers\Admin;


use App\Cart;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{

    public function index()
    {
        $carts = Cart::with(['details', 'user'])->orderBy('id')->simplePaginate(10);
        return view('admin.order.index', ["carts" => $carts]);
    }

    public function view($cartId)
    {
        $cart = Cart::find($cartId);
        return view('admin.order.view', ["cart" => $cart]);
    }
}