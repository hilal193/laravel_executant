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

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr class="table-info">
                    <th>#id</th>
                      <th>NOM</th>
                      <th>AVATAR</th>
                      <th>PRENOM</th>
                      <th>AGE</th>
                      <th>EMAIL</th>
                      <th>ROLE</th>
                      <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cat as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    {{-- <td><img src="{{ asset('img/'. $item->avatar->url) }}" style="height:50px; width:50px; border-radius: 50%;" alt=""></td> --}}
                    <td>{{ $item->name }}</td>
                    {{-- <td>{{ $item->prenom }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->role->name }}</td> --}}

                </tr>

                @empty
                <tr>
                    <td>Vide</td>
                    <td>Vide</td>
                    <td>Vide</td>
                    <td>Vide</td>
                    <td>Vide</td>
                    <td>Vide</td>
                    <td>Vide</td>
                    <td>Vide</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div>
            {{-- {{ $paginationUser->links('pagination::bootstrap-4') }} --}}
    </div>

</div>



@endsection
