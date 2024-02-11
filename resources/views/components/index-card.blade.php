@props(['product'])
<div class="card-sm-2">
    <div class="card-body">
        <img src="/storage/{{ $product['image_url'] }}" alt="" class="card-body-img" />
    </div>
    <div class="card-foot">
        <h4 class="card-name">{{ $product['product_name'] }}</h4>
        <h5 class="card-price">${{ $product['price'] }}</h5>
        <a href="/shop/{{ $product->id }}" class="btn-links">
            <button class="btn-content pr">Browse</button>
        </a>
    </div>
</div>
