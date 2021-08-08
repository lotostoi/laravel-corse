<div>
    <div class="container last-news-wrapper py-5 rounded">
        <h3 class="row justify-content-center text-light">Last news</h3>
        <div class="row justify-content-center">
            @forelse ($news as $new)
                @if ($loop->index > 2) @break
            @endif
            <div class="col-lg-3 col-sm-11 bordered">
                <a href="{{ route('newId', ['id' => $new['id']]) }}" class="row my-3 justify-content-center">
                    <img src="{{ $new['img'] }}" class="col-12" alt="img">
                    <span class="col-12 h6-lg h3-sm mt-lg-1 mt-sm-3 text-light stretched-link">
                        {{ $new['title'] }}</span>
                </a>
            </div>
            @empty
                <p>Last news are absent</p>
                @endforelse
            </div>
        </div>
    </div>
