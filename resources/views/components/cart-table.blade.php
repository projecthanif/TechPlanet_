@props(['cart'])

<tr class="cart-card">
    <td class="items">
        <img src="/storage" alt="" class="cart-img" />
        <div class="cart-card-info">
            <h4 class="cart-name">{{ $cart->name }}</h4>
            <p class="item-color">Blue</p>
            <p class="item-number">Quantity({{ $cart->qty }})</p>
        </div>
    </td>
    <td class="quantity">
        {{ $cart->qty }}
    </td>
    <td class="price">
        <div>
            <h5>{{ $cart->price }}</h5>
        </div>
    </td>
    <td class="delete"></td>
</tr>
