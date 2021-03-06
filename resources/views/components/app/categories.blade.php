<div>
    <div class="container categories-wrapper py-5 rounded">
        <h3 class="row justify-content-center text-light">News categories</h3>
        <div class="row justify-content-center">
            @forelse ($categoriesList as $cat)
                <div class="col-lg-3 col-sm-11 bordered">
                    <a href="{{ route('categoriesId', ['id' => $cat->id]) }}" class="row my-3 justify-content-center">
                        <img src="{{ $cat->img }}" class="col-12" alt="img">
                        <span class="col-12 h6-lg h3-sm mt-lg-1 mt-sm-3  ml-1 text-dark stretched-link">
                            {{ $cat->title }}</span>
                    </a>
                </div>
            @empty
                <p>Last news are absent</p>
            @endforelse
        </div>
    </div>
</div>
