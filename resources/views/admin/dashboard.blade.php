@extends('layouts.back')

@section('content')



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
            <a href="{{route('avatars.index')}}">
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
            <a href="{{route('galleries.index')}}">
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
    {{-- boutton deco --}}
 <form action="{{ route("logout") }}" method="POST">
    @csrf
    <button class="btn btn-primary">Deconnexion</button>

    </form>

    <h1>My dashboard</h1>
    <h3>Bonjour : {{ Auth::user()->name}} {{ Auth::user()->prenom}} </h3>


    <hr>
    <h2 class="sub-header">Dashboard</h2>

              <h3>COMING SOON...</h3>

              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpngNVehAA_iKVc8ijVZ5WSYyZJD50PKRBGeV82SUS_9WPycZj_DJOlLawnQfp_U4xjQg&usqp=CAU" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Nom: {{ Auth::user()->name }}</p>
                  <p class="card-text">Prenom : {{ Auth::user()->prenom }}</p>
                  <p class="card-text">Email : {{ Auth::user()->email }}</p>
                </div>
              </div>



    {{-- form --}}
    @if (Auth::user()->role_id == 1)
    <form action="{{ route("users.update",Auth::user()->id) }}" method="POST">
@else
    <form action="{{ route('client.update', Auth::user()->id ) }}" method="POST">
@endif
        @csrf
        @method("PUT")
        @include('layouts.flash')
        <div class="d-flex justify-content-center pt-5">
            <div class="flex">
                <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Modification de ton profil</h1>
            </div>
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="textprenom" value="{{ auth::user()->name }}" name="name" class="form-control" id="nom">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" value="{{ auth::user()->prenom }}" name="prenom" class="form-control" id="prenom">
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" value="{{ auth::user()->age }}" name="age" class="form-control"
                id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="{{ auth::user()->email }}" name="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="avatar" class="form-label"></label>
            <select name="avatar_id" id="avatar">

                @foreach ($avatarTout as $avatar)

                <option {{ $avatar->id== Auth::user()->avatar_id ? "selected": "" }} value="{{ $avatar->id }}">
                    {{ $avatar->nom }}</option>
                @endforeach
            </select>


        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    {{-- fin form --}}
</div>


@endsection
