{{-- @extends('layouts.index')
@extends('layouts.back')

@section('content')

<form class="m-5" action="{{ route("users.store") }}" method="POST">
    @csrf
    <div class="mb-3">
        <label  class="form-label">Nom</label>
        <input type="text"  name="nom" value="{{ old("nom") }}" class="form-control" >
        <span style="color: red;">
            @error("nom")
            {{ $message }}
            @enderror
        </span>
    </div>

    <div class="mb-3">
        <label  class="form-label">Prenom</label>
        <input type="text"  name="prenom" value="{{ old("prenom") }}" class="form-control" >
        <span style="color: red;">
            @error("prenom")
            {{ $message }}
            @enderror
        </span>
    </div>

    <div class="mb-3">
        <label  class="form-label">Age</label>
        <input type="number"  name="age" value="{{ old("age") }}" class="form-control" >
        <span style="color: red;">
            @error("age")
            {{ $message }}
            @enderror
        </span>
    </div>
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="text" name="image" value="{{ old("image") }}" class="form-control">
        <span style="color: red;">
            @error("image")
            {{ $message }}
            @enderror
        </span>
    </div>
    <div class="mb-3">
        <label  class="form-label">Description</label>
        <input type="text" name="description" value="{{ old("description") }}" class="form-control" >
        <span style="color: red;">
            @error("description")
            {{ $message }}
            @enderror
        </span>
    </div>
    <button type="submit" class="btn btn-primary vert">Submit</button>
</form>
@endsection --}}
