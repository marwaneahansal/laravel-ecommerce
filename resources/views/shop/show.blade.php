@extends('layouts.main')


@section('content')
    <div class="container">
        <div class="productDetails">
            <img src="/assets/tracksuits.jpg" alt="tracksuits">
            <div class="product_details">
                <p class="name">Track suits for men</p>
                <p class="price">Price: 29.99$</p>

                <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure magnam earum eaque. Dicta dolores eius modi voluptatum labore recusandae neque.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, ab?
                </p>
                <div class="colors">
                    <p>Color: </p>
                    <select name="color" id="color">
                        <option value="default">Choose color</option>
                        <option value="blue">Blue</option>
                        <option value="black">Black</option>
                        <option value="red">Red</option>
                        <option value="white">White</option>
                    </select>
                </div>

                <div class="sizes">
                    <p>Size:</p>

                    <div class="size">
                        <div class="sizeSM">SM</div>
                        <div class="sizeM">M</div>
                        <div class="sizeL">L</div>
                        <div class="sizeXL">XL</div>
                        <div class="size2XL">2XL</div>
                    </div>
                </div>
                <p class="available">In stock</p>

                <div class="addCart">
                    <a href="#">Add to Cart</a>
                </div>

            </div>
        </div>

        <div class="otherProducts">
            <h2>Recommendation Products:</h2>
            <div class="products_grid">
                @for ($i = 0; $i < 4; $i++)
                    <div class="product">
                        <a href="{{ route('shop.show', '1234') }}"><img src="/assets/tracksuits.jpg" alt="tracksuits"></a>
                        <div class="product_details">
                            <a href="{{ route('shop.show', '1234') }}">Track suits for men</a>
                            <p class="price">29.99$</p>
                            <p class="available">In stock</p>

                        </div>
                    </div>
                @endfor
            </div>
            
        </div>
    </div>
@endsection