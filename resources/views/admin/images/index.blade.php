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


@endsection
