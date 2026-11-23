<x-Template>
    @slot('content')
    <header class="page-intro compact">
        <p class="eyebrow">02 / Cart route</p>
        <h1>Shared structure,<br>a separate page.</h1>
        <p class="intro-copy">The cart route uses KeranjangController and its own Blade view. It shares the layout with the home and product pages.</p>
    </header>
    <section class="empty-panel">
        <div class="empty-symbol" aria-hidden="true">↗</div>
        <div><h2>Cart view exercise</h2><p>No cart items are stored in this repository. This page demonstrates another controller and named route, without implying a completed shopping workflow.</p><a class="button" href="{{route('product')}}">Back to product view →</a></div>
    </section>
    <div class="code-row"><code>GET /keranjang</code><span>→</span><code>KeranjangController::index</code><span>→</span><code>view('keranjang')</code></div>
    @endslot
</x-Template>
