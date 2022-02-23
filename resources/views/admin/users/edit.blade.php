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




{{-- @extends('layouts.back') --}}

@section('content')
<div class="content-container">

<div>
    @foreach ($roleTout as $role)


    <h2>Role Edit:{{ $role->name }}</h2>
</div>
<div class="py-5">
    <div class="">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ route('users.update', $role->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <div>


                        <div class="col-span-6 sm:col-span-6">
                            <label for="nom" class="block text-sm font-medium text-gray-700">
                                Role</label>
                            <input type="text" value="{{ $role->name }}" name="name" id="name"
                                autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('name')
                                    <p class="text-red-400 text-center">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="btn btn-success">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endforeach

{{-- @endsection --}}

