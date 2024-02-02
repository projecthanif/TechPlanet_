@props(['total_sum', 'num'])

<section class="summary">
    <div class="order-sumary-card">
        <div class="order-header">
            <h3 class="sumary-title">Order Summary</h3>
        </div>
        <hr />
        <h4 class="fw-5">Have a Promo Code?</h4>
        <form action="#" class="promo-from">
            <input type="text" name="" id="" class="input" placeholder="Enter Promo Code" />
            <button type="submit" class="btn-red">Apply</button>
        </form>
        <div class="content-flex">
            <h5>Item({{ $num }})</h5>
            <h5>${{ $total_sum }}</h5>
        </div>
        <div class="content-flex">
            <h5>Discount(0%)</h5>
            <h5>$0</h5>
        </div>
        <div class="sum">
            <div class="content-flex">
                <h5>Subtotal</h5>
                <h5>$2000</h5>
            </div>
            <div class="content-flex">
                <h5>Estimated Delivery</h5>
                <h5>$100</h5>
            </div>
            <div class="content-flex">
                <h5>Estimated Tax</h5>
                <h5></h5>
            </div>
            <div class="order-foot">
                <hr />
                <div class="content-flex">
                    <h3 class="sumary-title">Order Summary</h3>
                    <h3 class="total">$2,100</h3>
                </div>
            </div>
        </div>
    </div>
</section>
