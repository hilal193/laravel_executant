@extends('layouts.back')

@section('content')
<div class="content-container">

    <div class="mx-auto my-5">
        <form action="{{ route('images.store' ) }}" method="post"
        class="grid bg-white rounded-lg shadow-xl  w-8/12 mx-auto" enctype="multipart/form-data">
            @csrf
            <div class="flex justify-center pt-8">
                <div class="flex">
                    <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Ajout d'une nouvelle image</h1>
                </div>
            </div>


            <div class="grid grid-cols-2 mt-5 mx-7">
                {{-- NOM IMG --}}
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nom de le l'image</label>
                    <input
                    class=" mt-1 block w-11/12 py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="text" name="nom" value="{{ old('nom') }}" placeholder="Nom de l'image" />

                    @error('nom')
                        @include('admin.partials.error')
                    @enderror
                </div>
                {{-- Categories  --}}
                <div>
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">categories</label>
                    <select name="categorie_id"
                        class="form-select mt-1 block w-11/12 py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}" >{{ $categorie->name }}</option>

                            @endforeach
                        </select>
                </div>
                @error('url')
                    @include('admin.partials.error')
                @enderror
            </div>


            <div class="grid grid-cols-2 mt-5 mx-7">
                {{-- INPUT FILE --}}
                <div >
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Image file</label>
                    <input
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="file" name="url"  placeholder="Ton url" />
                    @error('url')
                        @include('admin.partials.error')
                    @enderror
                </div>
                {{-- INPUT URL --}}
                <div>
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Image url
                        </label>
                    <input
                        class="py-2 w-11/12 rounded-lg h-12 border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" name="srcURL" placeholder="URL de l'image" />
                </div>
                @error('url')
                    @include('admin.partials.error')
                @enderror
            </div>

            <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                <button
                    class='btn btn-success'>Add</button>
            </div>

        </form>


    </div>
</div>

@endsection

