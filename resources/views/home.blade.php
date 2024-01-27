<x-Template>
    @slot('content')      
    <div class="container">
        <div class="row justify-content-center">
            @foreach($dictators as $dictator)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">{{$title}}</div>
                    <div class="card-body">
                        <img src="{{$dictator['img']}}" class="card-img-top">
                        <div class="card-title">{{$dictator['title']}}</div>
                        <p class="card-text">{{$dictator['quote']}}</p>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-success">Pilih</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endslot
</x-Template>