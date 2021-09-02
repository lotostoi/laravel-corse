<div class="row">
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
        @php
            session()->forget('success');
        @endphp
    @endif
</div>
