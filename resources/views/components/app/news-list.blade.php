<div class="container">
    @foreach ($news as $new)
        <div class="row justify-content-center mb-5 px-5">
            <a href="{{ route('newId', ['id' => $new->id]) }}" class="col-lg-8 col-sm-11 mb-5 mx-auto" >
                <img src="{{ $new->img }}" alt="image" class="col-11">
                <h1 class="h5 mt-2 text-center col-11">{{ $new->title }}</h1>
            </a>
        </div>
    @endforeach
</div>
