{{-- @extends('layouts.back')

@section('content')

<h1>Page admin EDIT : Users </h1>

<form class="m-5" action="{{ route("users.update",$user->id) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <label class="form-label" for="name">Nom</label>
        <input type="text" id="name" value="{{ $user->name }}" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label" for="prenom">Prenom</label>
        <input type="text" id="prenom" value="{{ $user->prenom }}" name="prenom" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label" for="age">Age</label>
        <input type="text" id="age" value="{{ $user->age }}" name="age" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label" for="email">Email</label>
        <input type="email" id="email" value="{{ $user->email }}" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label" for="avatar">Avatar</label>
        <select class="" name="avatar">
            @foreach ($avatarTout as $avatar)
            <option value="{{$avatar->id}}">{{$avatar->nom}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-success">CONFIRM</button>
    <a href="{{route("users.index")}}" class="btn btn-primary">BACK</a>

</form>

@endsection --}}
