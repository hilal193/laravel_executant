@extends('layouts.back')

@section('content')

{{-- boutton deco --}}

<form action="{{ route("logout") }}" method="POST">
@csrf
<button class="btn btn-primary">Deconnexion</button>

</form>

<h1>My dashboard</h1>


@endsection
