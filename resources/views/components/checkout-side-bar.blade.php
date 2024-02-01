@props(['tick'])

<section class="sidebar">
    <div class="nav-logo step-logo">
        <img src="assets/image/64-bit.png" alt="" class="logo" />
        <h1 class="nav-logo-text">
            <span class="cr-red">Tech</span>Planet
        </h1>
    </div>
    <div class="step">
        <div class="between">
            <div class="checkbox {{ $tick == 'address' ? 'red' : '' }}"></div>
            <h5 class="which-step">STEP 01</h5>
        </div>
        <p class="step-title">Billing address</p>
    </div>
    <div class="step">
        <div class="between">
            <div class="checkbox {{ $tick == 'shippment' ? 'red' : '' }}"></div>
            <h5 class="which-step">STEP 02</h5>
        </div>
        <p class="step-title">Shipment</p>
    </div>
    <div class="step">
        <div class="between">
            <div class="checkbox {{ $tick == 'payment' ? 'red' : '' }}"></div>
            <h5 class="which-step">STEP 03</h5>
        </div>
        <p class="step-title">Payment</p>
    </div>
    <div class="step">
        <div class="between">
            <div class="checkbox"></div>
            <h5 class="which-step">STEP 04</h5>
        </div>
        <p class="step-title">Review</p>
    </div>
</section>
