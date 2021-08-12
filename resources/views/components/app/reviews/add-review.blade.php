<form action="{{ route('add-reviews') }}" method="POST" class="container">
    @csrf
    <h3 class="col-12 text-center">Add review</h3>
    <div class="form-groupe col-8 mx-auto">
        <label for="userName" class="col-12 @error('user-name') text-danger  @enderror">Enter your name:</label>
        <input type="text" class="col-12  @error('user-name') border border-danger  @enderror" name="user-name"
            id="userName" class="form-controll" value="{{ old('user-name') }}">
        @error('user-name')
            <small id="emailHelp" class="form-text text-danger ml-3">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-groupe col-8 mx-auto mt-3">
        <label for="review-text" class="col-12 @error('text-review') text-danger  @enderror">Enter your review:</label>
        <textarea type="text" name="text-review" id="text-review"
            class="col-12 p-1 form-controll @error('text-review') border border-danger  @enderror">{{ old('text-review') }}</textarea>
        @error('text-review')
            <small id="emailHelp" class="form-text text-danger ml-3">{{ $message }}</small>
        @enderror
    </div>
    <button type="submit" class="btn btn-dark d-flex mx-auto"> Add review </button>
</form>
@if (session('success'))
    <div class="w-100 fixed-top " id="successs">
        <div class="col-12 alert-success py-3 text-center" role="alert">
            {{ session('success') }}
        </div>
    </div>
    <script>
        setTimeout(() => {
            document.getElementById('successs').style.display = 'none'
        }, 6000)
    </script>
@endif
