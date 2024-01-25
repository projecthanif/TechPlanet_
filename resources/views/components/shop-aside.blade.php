@props(['categories'])
<aside>
    <div class="sidebar">
        <form action="#" method="#">
            <input type="search" name="product-search" id="" class="search-p" placeholder="Search items" />
            <button type="submit" class="btn-search">
                <i class="fa fa-search"></i>
            </button>
        </form>
        <div class="product-type">
            <div class="p-title">Product Categories</div>
            <ul class="categories">
                <li><a href="/shop" class="prod-list-link active">All</a></li>
                @unless (count($categories) == 0)
                    @foreach ($categories as $category)
                        <li><a href="/shopBy/{{ $category['name'] }}" class="prod-list-link">{{ $category['name'] }}</a>
                        </li>
                    @endforeach
                @endunless
            </ul>
        </div>
        <div class="price-range">
            <div class="p-title">Price Range</div>
            <form action="#" method="#">
                <input type="range" name="price-range" id="price-range" class="range-price" min="499"
                    max="9999" />
                <div class="range">
                    <h4 class="min" id="min-price-value">$499</h4>
                    <h4 class="max" id="max-price-value">$9,999</h4>
                </div>
                <button type="submit" class="btn-filter">filter</button>
            </form>
        </div>
    </div>
</aside>
