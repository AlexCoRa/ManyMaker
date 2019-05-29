@extends('layouts.app')

@section('title', 'Listado de ordenes')

@section('body-class', 'product-page')

@section('content')
    <div class="header header-filter" style="background-image: url('{{ asset('img/portada_auto.jpg') }}');">
    </div>

    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <h2 class="title">Listado de órdenes</h2>

                <div class="team">
                    <div class="row">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-left">#</th>
                                <th class="text-left">Comprador</th>
                                <th class="text-left">Email</th>
                                <th class="text-left">Teléfono</th>
                                <th class="text-left">Total</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($carts as $cart)
                                <tr>
                                    <td class="text-left">{{$cart->id}}</td>
                                    <td class="text-left">{{$cart->user->name}}</td>
                                    <td class="text-left">{{$cart->user->email}}</td>
                                    <td class="text-left">{{$cart->user->phone}}</td>
                                    <td class="text-left">{{$cart->total}}</td>
                                    <td>
                                        <a href="{{route('admin_order_view',['cartId'=>$cart->id])}}"
                                           rel="tooltip"
                                           title="Ver detalles"
                                           class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-info"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $carts->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('includes.footer')
@endsection
