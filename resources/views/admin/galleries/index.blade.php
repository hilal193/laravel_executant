@extends('layouts.back')

@section('content')
<div class="content-container">
    @include('layouts.flash')

    <div class="d-flex align-items-center">
        <h1>Galleries</h1>
    </div>

    {{-- <h2>Tout mes photos : {{ count($GallerieTout) }} / 8</h2> --}}

    <div class="row">
        @forelse ($gallerieTout as $item)
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset("img/". $item->url) }}" alt="Card image cap">
                <div class="card-body">
                   <p> {{ $item->url }}</p>
                   <a href="{{ route("images.download", $item->id) }}" class="btn btn-secondary">download</a>
                </div>
            </div>
        </div>
        @empty
        <p>rien ne se passe</p>
        @endforelse
    </div>

</div>

@endsection
