@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('success') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger" role="alert">
        {{ session()->get('error') }}
    </div>
@endif


@if (session()->has('errors'))
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach (session()->get('errors')->all() as $eeee)
                <li> {{ $eeee }}</li>
            @endforeach
        </ul>
    </div>
@endif
