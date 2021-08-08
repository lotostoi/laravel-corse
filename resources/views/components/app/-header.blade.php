<div>
    @if ($background ?? '')
        <header class="masthead" style="background-image: url('{{ $background }}')">
        @else
            <header class="masthead">
    @endif
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    @if (!empty($title))
                        <h1>{{ $title }}</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </header>
</div>
