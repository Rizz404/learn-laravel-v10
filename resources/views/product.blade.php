<x-Template>
    @slot('content')
    <header class="page-intro compact">
        <p class="eyebrow">01 / Product route</p>
        <h1>A controller.<br>A route. A view.</h1>
        <p class="intro-copy">The product page is a routing exercise. A GET request reaches ProductController and returns this Blade view through the shared layout.</p>
    </header>
    <section class="flow-grid">
        <article class="lesson-card"><span class="lesson-number">REQUEST</span><h2>GET /product</h2><p>A named route makes the page available from the application navigation.</p><code>route('product')</code></article>
        <article class="lesson-card"><span class="lesson-number">CONTROLLER</span><h2>ProductController</h2><p>The index method selects the server-rendered product template.</p><code>return view('product')</code></article>
        <article class="lesson-card"><span class="lesson-number">RESPONSE</span><h2>Blade layout</h2><p>The template provides consistent navigation, content, and footer styling.</p><code>&lt;x-Template&gt;</code></article>
    </section>
    <aside class="scope-note"><strong>Exercise scope</strong><p>This repository does not implement a product catalog, inventory, or checkout. The view demonstrates the request-to-template flow.</p></aside>
    @endslot
</x-Template>
