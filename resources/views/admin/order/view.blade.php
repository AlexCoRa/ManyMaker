@extends('layouts.app')

@section('title', 'Listado de ordenes')

@section('body-class', 'product-page')

@section('content')
    <div class="header header-filter" style="background-image: url('{{ asset('img/portada_auto.jpg') }}');">
    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <h2 class="title">Detalle de la orden #{{$cart->id}}</h2>
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>Comprador</h3>
                        <hr>
                    </div>
                    <div class="col-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-left">Nombre</th>
                                <th class="text-left">Email</th>
                                <th class="text-left">Teléfono</th>
                                <th class="text-left">Dirección de entrega</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-left">{{$cart->user->name}}</td>
                                <td class="text-left">{{$cart->user->email}}</td>
                                <td class="text-left">{{$cart->user->phone}}</td>
                                <td class="text-left">{{$cart->user->address}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>Productos</h3>
                        <hr>
                    </div>
                    <div class="col-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-left">#</th>
                                <th class="text-left">Producto</th>
                                <th class="text-left">Cantidad</th>
                                <th class="text-left">Precio</th>
                                <th class="text-left">Importe</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($total=0)
                            @forelse($cart->productsDetails as $product)
                                @php($total+=($product->price*$product->pivot->quantity))
                                <tr>
                                    <td class="text-left">{{$loop->iteration}}</td>
                                    <td class="text-left">{{$product->name}}</td>
                                    <td class="text-left">{{$product->pivot->quantity}}</td>
                                    <td class="text-left">{{$product->price}}</td>
                                    <td class="text-left">{{$product->price*$product->pivot->quantity}}</td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                            <tfoot>
                            <tr>
                                <td  class="text-right" colspan="3"></td>
                                <td  class="text-left" ><b>Total</b></td>
                                <td class="text-left">{{$total}}</td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection
