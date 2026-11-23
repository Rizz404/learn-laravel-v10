<x-Template>
    @slot('content')
    <header class="page-intro">
        <p class="eyebrow">Route & view exercises</p>
        <h1>Learning Laravel,<br>one page at a time.</h1>
        <p class="intro-copy">An early Laravel repository exploring controllers, named routes, and reusable Blade layouts. Each page focuses on a small part of server-rendered web development.</p>
        <a class="button" href="{{route('product')}}">Explore the views →</a>
    </header>
    <section class="lesson-grid" aria-label="Learning topics">
        @foreach($lessons as $lesson)
        <article class="lesson-card">
            <span class="lesson-number">0{{$loop->iteration}}</span>
            <h2>{{$lesson['title']}}</h2>
            <p>{{$lesson['description']}}</p>
            <div class="card-bottom"><code>{{$lesson['concept']}}</code><a href="{{$lesson['url']}}" aria-label="Explore {{$lesson['title']}}">↗</a></div>
        </article>
        @endforeach
    </section>
    @endslot
</x-Template>
