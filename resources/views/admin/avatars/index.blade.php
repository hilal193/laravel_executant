@extends('layouts.back')

@section('content')

{{-- sidebar --}}
{{-- <div class="sidebar-container mt-10 pt-10">
    <div class="sidebar-logo">
        Back Office
    </div>

    <ul class="sidebar-navigation">
        <li class="header">Affichage</li>
        <li>
            <a href="#">
                <i class="fa fa-home retire" aria-hidden="true"></i> DASHBOARD
            </a>
        </li>

        <li>
            <a href="{{route('users.index')}}">
                <i class="fa fa-home retire" aria-hidden="true"></i> USER
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fa fa-tachometer retire" aria-hidden="true"></i> Avatars
            </a>
        </li>
        <li>
            <a href="{{route('images.index')}}">
                <i class="fa fa-tachometer retire" aria-hidden="true"></i> IMAGES
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-tachometer retire" aria-hidden="true"></i> CATEGORIES
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fa fa-tachometer retire" aria-hidden="true"></i> GALLERIES
            </a>
        </li>
        <li class="header">Another Menu</li>
        <li>
            <a href="#">
                <i class="fa fa-users" aria-hidden="true"></i> Friends
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-cog" aria-hidden="true"></i> Settings
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Information
            </a>
        </li>
    </ul>
</div> --}}


<div class="content-container">
    @include('layouts.flash')

    <div class="d-flex align-items-center">
        <h1>AVATARS</h1>
    </div>

    <h2>Tout mes avatars : {{ count($avatarTout) }} / 8</h2>

    @if (count($avatarTout) < 5)
    <div class="flex justify-center">
        <p>je rajoute un button create</p>
        {{-- <a href="{{ route("avatars.create") }}" class=""></a> --}}
    </div>

    @else
    <p>Maximum avatar atteint</p>
    @endif

    <div class="row">
        @forelse ($avatarTout as $item)

        @if ($loop->iteration != 1)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    {{-- <img class="card-img-top" src="{{ $item->url }}" alt="Card image cap"> --}}
                    <img class="card-img-top" style="height:150px; width:150px; border-radius: 50%;" src="{{ asset("img/". $item->url) }}" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">{{$loop->iteration}} </p>
                    <p class="card-text">{{ $item->nom }} </p>
                    <form action="{{ route("avatars.destroy", $item->id) }}" method="POST">
                        @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </div>

                </div>
            </div>

        @endif
        @empty
        <p>rien ne se passe</p>
        @endforelse
        {{-- <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">nom avatar</p>
                </div>
              </div>
        </div> --}}

    </div>

    <div class="row">
        <div class="col-4">
            <form action="{{ route("avatars.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="img" class="form-control" id="img">
            <label for="nom" class="form-control">Entrez le nom de l'image</label>
            <input type="text" name="nom" class="form-control" id="nom">

            <button class="btn btn-outline-secondary" type="submit" id="img">Button</button>

            </form>
        </div>
    </div>

</div>


@endsection
