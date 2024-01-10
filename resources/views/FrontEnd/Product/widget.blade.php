<div class="product-image">
    <!-- product Image -->
    <a href="{{ Route('product-details', ['slug' => $product->Category->slug, 'prodSlug' => $product->slug]) }}">
        @if($product->image != '')
        <img class="@if($product->image_two != '') primary blur-up @endif lazyload" data-src="{{ url('/uploads') }}/{{ $product->image }}" src="{{ url('/uploads') }}/{{ $product->image }}" alt="{{ $product->title }}" title="{{ $product->title }}" />
        @else
        <img class="primary blur-up lazyload" data-src="{{ asset('FrontEnd/images/product-images/product-image1.jpg') }}" src="{{ asset('FrontEnd/images/product-images/product-image1.jpg') }}" alt="{{ $product->title }}" title="{{ $product->title }}" />
        @endif
        <!-- Product Label -->
        <div class="product-labels rectangular">
            @if($product->sale_end_date > now())
            <span class="lbl on-sale">-{{ number_format(100 - ($product->sale_price / $product->price * 100)) }}%</span>
            @endif
            @if($product->created_at > now()->subWeek())
            <span class="lbl pr-label1">new</span>
            @endif
        </div>
        <!-- End Product Label -->
    </a>
    <!-- End Product Image -->
    <!-- Product Button -->
    <div class="button-set">
        <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="View More Details">
            <a href="{{ Route('product-details', ['slug' => $product->Category->slug, 'prodSlug' => $product->slug,'locale'=>app()->getLocale()]) }}" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-eye"></i></a>
        </div>
    </div>
    <!-- End Product Button -->
</div>
<!-- End Product Image -->
<!-- Product Details -->
<div class="product-details text-center">
    <!-- Product Name -->
    <div class="product-name">
        <a href="{{ Route('product-details', ['slug' => $product->Category->slug, 'prodSlug' => $product->slug,'locale'=>app()->getLocale()]) }}">{{ $product->title }}</a>
    </div>
    <!-- End Product Name -->
    <!-- Product Price -->
    <div class="product-price">
        @if ($product->sale_price != NULL && $product->sale_end_date > now())
        <span class="old-price">{{ number_format($product->price) }} EGP</span>
        <span class="price">{{ number_format($product->sale_price) }} EGP</span>
        @else
        <span class="price">{{ number_format($product->price) }} EGP</span>
        @endif
    </div>
    <!-- End Product Price -->
    <!-- Product Review -->
    <div class="product-review">
        @for( $i = 0; $i < $product->rate; $i++ )
        <i class="an an-star"></i>
        @endfor
    </div>
    <!-- End Product Review -->
</div>
