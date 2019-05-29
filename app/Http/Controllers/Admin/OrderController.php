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
use function foo\func;

class OrderController extends Controller
{

    public function index()
    {
        $carts = Cart::with(['details', 'user'])
            ->whereHas('details', function ($q) {
                $q->where('quantity', '<>', 0);
            })
            ->orderBy('id')
            ->simplePaginate(10);
        return view('admin.order.index', ["carts" => $carts]);
    }

    public function view($cartId)
    {
        $cart = Cart::find($cartId);
        return view('admin.order.view', ["cart" => $cart]);
    }
}