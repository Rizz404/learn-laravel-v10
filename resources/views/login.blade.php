<x-Template>
    @slot('content')
    <header class="page-intro compact">
        <p class="eyebrow">03 / Login route</p>
        <h1>The view comes first.</h1>
        <p class="intro-copy">AuthController returns this login view. The repository currently provides the page route; sign-in processing and session authentication have not been implemented.</p>
    </header>
    <section class="scope-note login-scope"><span class="lesson-number">CURRENT SCOPE</span><h2>Route and presentation</h2><p>The GET /login route renders through the same Blade component used by the other exercises. There is no working credential form or authenticated account area in this version.</p><a class="button" href="{{route('home')}}">Return to the overview →</a></section>
    @endslot
</x-Template>
