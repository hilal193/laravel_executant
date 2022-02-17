@extends('layouts.back')

@section('content')

{{-- sidebar --}}
<div class="sidebar-container mt-10 pt-10">
    <div class="sidebar-logo">
        Back Office
    </div>

    <ul class="sidebar-navigation">
        <li class="header">Affichage</li>
        <li>
            {{-- <a href="{{route('works.index')}}"> --}}
            <a href="#">

                <i class="fa fa-home retire" aria-hidden="true"></i> DASHBOARD
            </a>
        </li>

        <li>
            <a href="{{route('users.index')}}">
            {{-- <a href="#"> --}}

                <i class="fa fa-home retire" aria-hidden="true"></i> USER
            </a>
        </li>

        <li>
            {{-- <a href="{{route('portfolio.affichage')}}"> --}}
            {{-- <a href="{{route('avatars.index')}}"> --}}
            <a href="#">

                <i class="fa fa-tachometer retire" aria-hidden="true"></i> Avatars
            </a>
        </li>
        <li>
            {{-- <a href="{{route('portfolio.affichage')}}"> --}}
            {{-- <a href="{{route('about.index')}}"> --}}
            <a href="#">

                <i class="fa fa-tachometer retire" aria-hidden="true"></i> IMAGES
            </a>
        </li>
        <li>
            {{-- <a href="{{route('portfolio.affichage')}}"> --}}
            {{-- <a href="{{route('contact.index')}}"> --}}
            <a href="#">

                <i class="fa fa-tachometer retire" aria-hidden="true"></i> CATEGORIES
            </a>
        </li>

        <li>
            {{-- <a href="{{route('portfolio.affichage')}}"> --}}
            {{-- <a href="{{route('contact.index')}}"> --}}
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
</div>


<div class="content-container">

    <div class="d-flex align-items-center">
        <h1>AVATARS</h1>
    </div>

    <div class="row">
        @forelse ($avatarTout as $item)
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $item->url }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">nom avatar{{ $item->nom }} </p>
                </div>
              </div>
        </div>
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

</div>


@endsection
