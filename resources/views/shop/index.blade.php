@extends('layouts.main')


@section('content')
    <div class="container shop">
        <div class="filters">
            <div class="search">
                <input type="text" placeholder="Search by name">
                <div class="search_btn"><ion-icon class="search_icon" name="search-outline"></ion-icon></div>
            </div>

            <div class="filter_price">
                <p>Price:</p>
                <div class="price_form">
                    <div class="min">
                        <label for="minPrice">Min:</label>
                        <input type="text" name="minPrice" id="minPrice" placeholder="0">
                    </div>
                    <div class="max">
                        <label for="maxPrice">Max:</label>
                        <input type="text" name="maxPrice" id="maxPrice" placeholder="9999">
                    </div>
                </div>
                <div class="applyBtn">
                    <a href="#">Apply</a>
                </div>
            </div>
        </div>

        <div class="shop_products">
            @for ($i = 0; $i < 12; $i++)
                <div class="product">
                    <a href="{{ route('shop.show', '1234') }}"><img src="/assets/tracksuits.jpg" alt="tracksuits"></a>
                    <div class="product_details">
                        <a href="{{ route('shop.show', '1234') }}">Track suits for men</a>
                        <p class="price">29.99$</p>
                        <p class="available">In stock</p>

                        <div class="buttons">
                            <div class="seeDetails">
                                <a href="{{ route('shop.show', '1234') }}">See Details <div class="line"></div></a>
                            </div>
                            <div class="addCart">
                                <a href="#">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection