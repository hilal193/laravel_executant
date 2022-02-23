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
            <a href="#">
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

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr class="table-info">
                    <th>#id</th>
                      <th>NOM</th>
                      <th>ACTIONS</th>
                      <th>AVATAR</th>
                      <th>PRENOM</th>
                      <th>AGE</th>
                      <th>EMAIL</th>
                      <th>ROLE</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cat as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    {{-- <td><img src="{{ asset('img/'. $item->avatar->url) }}" style="height:50px; width:50px; border-radius: 50%;" alt=""></td> --}}
                    <td>nom de la categorie : {{ $item->name }}</td>
                        <td class="d-flex">
                        {{-- <a href="{{route('users.show', $item->id)}}" class="btn btn vert">Show</a> --}}
                        <a href="{{route('categories.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{ route("categories.destroy", $item->id) }}" method="POST">
                            @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </td>
                        </form>
                    {{-- <td>{{ $item->prenom }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->role->name }}</td> --}}
                    <td>
                        <div class="py-12 w-full" >
                        <div class="text-center">
                            <a href="{{route('categories.create')}}"><button class="btn btn-success">Ajouter +</button></a>
                        </div>
                    </td>

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
