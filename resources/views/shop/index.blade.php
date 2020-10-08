@extends('layouts.main')


@section('content')
    <div class="container">
        <div class="shop">
            <div class="filters">
                <div class="search">
                    <form action="{{ route('shop.search') }}" method="GET">
                        <input type="text" name="searchQuery" id="searchQuery" placeholder="Search by name" value="{{ request()->input('searchQuery') }}">
                        <button class="search_btn"><ion-icon class="search_icon" name="search-outline"></ion-icon></button>
                    </form>
                    <p class="searchErrorText errorText">Please insert a name.</p>
                </div>
                <form action="{{ route('shop.priceFilter') }}" method="GET">
                    <div class="filter_price">
                        <p>Price:</p>
                        <div class="price_form">
                            <div class="min">
                                <label for="minPrice">Min:</label>
                                <input type="text" name="minPrice" id="minPrice" placeholder="0" value="{{ request()->input('minPrice') }}">
                            </div>
                            <div class="max">
                                <label for="maxPrice">Max:</label>
                                <input type="text" name="maxPrice" id="maxPrice" placeholder="9999" value="{{ request()->input('maxPrice') }}">
                            </div>
                        </div>
                        <p class="priceErrorText errorText">Please insert at least max price.</p>
                        <button class="applyBtn">
                            Apply
                        </button>
                    </div>
                </form>
            </div>
    
            <div class="shop_products">
                @if (\Route::current()->getName() == 'shop.priceFilter')
                    <p class="productsCount">Found {{ $products->total() }} products</p>
                @endif
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
    
                            <div class="buttons">
                                <div class="seeDetails">
                                    <a href="{{ route('shop.show', $product->formatUrl()) }}">See Details <div class="line"></div></a>
                                </div>
                                <div class="addCart">
                                    <a href="#">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $products->withQueryString()->links('livewire.custom-pagination') }}
            </div>
        </div>
        
        
    </div>
@endsection