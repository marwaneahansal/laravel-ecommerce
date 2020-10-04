@extends('layouts.main')


@section('content')
    <div class="container">
        <div class="table">
            <div class="cart_products">
                <table>
                    <thead>
                        <tr>
                            <th class="products">Products</th>
                            <th class="qte">Quantity</th>
                            <th class="price">Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 3; $i++)
                            <tr>
                                <th>
                                    <div class="cart_product">
                                        <a href="{{ route('shop.show', '1234') }}"><img src="/assets/tracksuits.jpg" alt="tracksuits"></a>
                                        <div class="details">
                                            <a href="{{ route('shop.show', '1234') }}">Track suits for men</a>
                                            <p class="price">29.99$</p>
                                        </div>
                                    </div>
                                </th>
                                <th>
                                    <div class="qte">
                                        <input type="number" id="qteInput" min="1" max="99" value="{{ $i + 1}}">
                                    </div>
                                </th>
                                <th>
                                    <div class="price">
                                        <p class="price_total">{{ 29.99 * ($i + 1)}}$</p>
                                    </div>
                                </th>
                                <th>
                                    <button class="rmvBtn">Remove</button>
                                </th>
                            </tr>
                        @endfor
                        
                    </tbody>
                </table>
            </div>
            <div class="prices">
                <div class="row">
                    <p>Total Price:</p>
                    <p>197.94$</p>
                </div>
                
                <div class="row">
                    <p>Discount:</p>
                    <p>- 0.00$</p>
                </div>

                <div class="row">
                    <p>Tax:</p>
                    <p>+ 5.00$</p>
                </div>

                <div class="line"></div>

                <div class="row">
                    <p>Total:</p>
                    <p>202.94$</p>
                </div>

                <button class="btn makePurshase">Make Purchase</button>
                <button class="btn shopping">Continue Shopping</button>
                
            </div>
        </div>
    </div>
@endsection 