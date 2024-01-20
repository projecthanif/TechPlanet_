@props(['product'])
<div class="card-sm-2">
    <div class="card-body">
        <img src="/storage/{{ $product['image_path'] }}" alt="" class="card-body-img" />
    </div>
    <div class="card-foot">
        <h4 class="card-name">{{ $product['name'] }}</h4>
        <h5 class="card-price">{{ $product['price'] }}</h5>
        <a href="#" class="btn-links">
            <button class="btn-content pr">Add to cart</button>
        </a>
    </div>
</div>
