@extends('layouts.main')



@section('content')
    <div class="container">
        <div class="popular_products">
            <h2>Our Clothes: <div class="line"></div></h2>

            <div class="products_grid">
                @for ($i = 0; $i < 8; $i++)
                    <div class="product">
                        <a href="#"><img src="/assets/tracksuits.jpg" alt="tracksuits"></a>
                        <div class="product_details">
                            <a href="#">Track suits for men</a>
                            <p class="price">29.99$</p>
                            <p>In stock</p>
                        </div>
                    </div>
                @endfor
                
            </div>
        </div>

    </div>
    


@endsection