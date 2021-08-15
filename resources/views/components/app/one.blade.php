<div class="container">
    <div class="row p-3">
        <h1>{{ $new['title'] }}</h1>
        <p>{{ $new['text'] }}</p>
        <nav>
            <strong>Categoies:</strong>
            @foreach ($categories as $cat)
                <a href="{{ route('categoriesId', ['id' => $cat['id']]) }}"
                    class="h6 text-success">{{ $cat['title'] }} </a>
            @endforeach
        </nav>
    </div>
</div>
