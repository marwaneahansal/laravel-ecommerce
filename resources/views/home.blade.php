@extends('layouts.main')



@section('content')
    <div class="container">
        <div class="popular_products">
            <h2>Our Clothes: <div class="line"></div></h2>

            <div class="products_grid">
                @foreach ($products as $product)
                    <div class="product">
                        <a href="{{ route('shop.show', $product->formatUrl()) }}"><img src="/assets/tracksuits.jpg" alt="tracksuits"></a>
                        <div class="product_details">
                            <a href="{{ route('shop.show', $product->formatUrl()) }}">{{ $product->name }}</a>
                            <p class="price">{{ $product->formatPrice() }}$</p>
                            @if ($product->quantity > 0)
                                <p class="inStock">In stock</p>
                            @else 
                                <p class="outOfStock">Out of stock</p>
                            @endif
                        </div>
                        <div class="addCart"><a href="#">Add to Cart</a></div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    


@endsection