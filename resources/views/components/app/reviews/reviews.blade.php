<hr>
<div class="container">
    <h2 class="my-2 text-center">All reviews</h2>
    @foreach ($reviews as $rev)
        <div class="alert alert-secondary">
            <p class="col-12 m-1 alert ">User: {{ $rev->user }}</p>
            <p class="col-12 m-1 alert alert-primary">
                <strong>Text review: </strong>{{ $rev->text }}
            </p>
            <small class="ml-3"><i>Added: {{ $rev->date }}</i></small>
        </div>
    @endforeach
</div>
