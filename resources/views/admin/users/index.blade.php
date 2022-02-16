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
            {{-- <a href="{{route('works.index')}}"> --}}
            <a href="#">

                <i class="fa fa-home retire" aria-hidden="true"></i> USER
            </a>
        </li>

        <li>
            {{-- <a href="{{route('portfolio.affichage')}}"> --}}
            {{-- <a href="{{route('skills.index')}}"> --}}
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


{{-- ici --}}
<div class="content-container">
    {{-- table --}}
    <h2 class="sub-header">Dashboard</h2>
              {{-- blog --}}
              <form action="{{ route("logout") }}" method="POST">
                @csrf
                <button class="btn btn-primary">Deconnexion</button>

                </form>

              <h3>All users : </h3>
              <p>Nombre d'utilisateurs: <span class="text-warning"> {{ count($toutUser) }} </span></p>
              <p> ADD Project :
                   <a href="#" class="btn btn vert pt-1 m-1">+ADD</a>
                   {{-- <a href="{{route('skills.create')}}" class="btn btn vert pt-1 m-1">+ADD</a> --}}
              </p>
              <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="table-info">
                            <th>#id</th>
                              <th>AVATAR</th>
                              <th>NOM</th>
                              <th>PRENOM</th>
                              <th>AGE</th>
                              <th>EMAIL</th>
                              <th>ROLE</th>
                              {{-- <th>IMAGE</th> --}}
                              {{-- <th>DESCRIPTION</th>
                              <th>NIVEAU</th> --}}
                              <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @forelse ($paginationWorks as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nom }}</td>
                            <td><img src="{{ $item->image }}" style="height:50px; width:50px;" alt=""></td>

                             <td class="df">
                            <a href="{{route('skills.show', $item->id)}}" class="btn btn vert">Show</a>
                            <a href="{{route('skills.edit', $item->id)}}" class="btn btn orange edit">Edit</a>
                            <form action="{{ route("skills.destroy", $item->id) }}" method="POST">
                                @csrf
                            @method('DELETE')
                                <button type="submit" class="btn rouge">Delete</button>

                            </td>
                            </form>

                        </tr> --}}

                        {{-- @empty --}}
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
                        {{-- @endforelse --}}
                    </tbody>
                </table>
                <div>
                    {{-- {{ $paginationSkills->links('pagination::bootstrap-4') }} --}}
                </div>
            </div>


  </div>

@endsection
