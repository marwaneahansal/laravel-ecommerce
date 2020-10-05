@extends('layouts.main')


@section('content')
    <div class="container">
        <div class="productDetails">
            <div>
                <img src="/assets/tracksuits.jpg" alt="tracksuits">
            </div>
            <div class="product_details">
                <p class="name">{{ $product->name }}</p>
                <p class="price">Price: {{ $product->formatPrice() }}$</p>

                <p class="description">{{ $product->description}}
                </p>
                <div class="colors">
                    <p>Color: </p>
                    <select name="color" id="color">
                        <option value="default">Choose a color</option>
                        @foreach ($product->colors as $color)
                            <option value="{{ $color }}">{{ $color }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="sizes">
                    <p>Size:</p>

                    <div class="size">
                        @foreach ($product->sizes as $size)
                            <div>{{ $size }}</div>
                        @endforeach
                    </div>
                </div>

                <div class="qte">
                    <label for="qteInput">Quantity:</label>
                    <input type="number" id="qteInput" min="1" max="{{ $product->quantity }}" value="1">
                </div>

                <p class="total">Total: {{ $product->price }}$</p>
                <p class="available">In stock</p>

                <div class="addCart">
                    <a href="#">Add to Cart</a>
                </div>

            </div>
        </div>

        <div class="otherProducts">
            <h2>Products you might like:</h2>
            <div class="products_grid">
                @foreach ($recProducts as $product)
                    <div class="product">
                        <a href="{{ route('shop.show', $product->formatUrl()) }}"><img src="/assets/tracksuits.jpg" alt="tracksuits"></a>
                        <div class="product_details">
                            <a href="{{ route('shop.show', $product->formatUrl()) }}">{{ $product->name }}</a>
                            <p class="price">{{ $product->price }}$</p>
                            @if ($product->quatity < 0)
                                <p class="inStock">In stock</p>
                            @else
                                <p class="outOfStock">Out of stock</p>
                            @endif

                        </div>
                    </div> 
                @endforeach
            </div>
            
        </div>
    </div>
@endsection