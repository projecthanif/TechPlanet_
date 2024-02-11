@props(['product'])
<div class="card-sm-2">
    <a href="/shop/{{ $product['id'] }}">
        <div class="card-body">
            <img src="{{ asset('/storage/' . $product['image_url']) }}" alt="" class="card-body-img" />
        </div>
    </a>
    <div class="card-foot">
        <h4 class="card-name">{{ $product['product_name'] }}</h4>
        <h5 class="card-price">${{ $product['price'] }}</h5>
        <form action="/shop/{{ $product->id }}" method="post" id="subForm">
            @csrf
            @method('post')
            <a href="#" class="btn-links">
                <button type="submit" class="btn-content pr">Add to cart</button>
            </a>
        </form>
    </div>
</div>
