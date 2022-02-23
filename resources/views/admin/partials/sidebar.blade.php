<div class="sidebar-container mt-10 pt-10">
    <div class="sidebar-logo">
        Back Office
        <img src="{{ asset('img/'. Auth::user()->avatar->url) }}" style="height:50px; width:50px; border-radius: 50%;" alt="">
        <h5>{{ Auth::user()->name}} {{ Auth::user()->prenom}} </h5>
        <form action="{{ route("logout") }}" method="POST">
            @csrf
            <button class="btn btn-primary">Deconnexion</button>

            </form>
    </div>

    <ul class="sidebar-navigation">
        <li class="header">Affichage</li>
        <li>
            <a href="{{route('admin.index')}}">
            {{-- <a href="#"> --}}

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
            <a href="{{route('avatars.index')}}">
            {{-- <a href="#"> --}}

                <i class="fa fa-tachometer retire" aria-hidden="true"></i> Avatars
            </a>
        </li>
        <li>
            {{-- <a href="{{route('portfolio.affichage')}}"> --}}
            <a href="{{route('images.index')}}">
            {{-- <a href="#"> --}}

                <i class="fa fa-tachometer retire" aria-hidden="true"></i> IMAGES
            </a>
        </li>
        <li>
            {{-- <a href="{{route('portfolio.affichage')}}"> --}}
            {{-- <a href="{{route('contact.index')}}"> --}}
            <a href="{{route('categories.index')}}">

            {{-- <a href="#"> --}}

                <i class="fa fa-tachometer retire" aria-hidden="true"></i> CATEGORIES
            </a>
        </li>

        <li>
            {{-- <a href="{{route('portfolio.affichage')}}"> --}}
            {{-- <a href="{{route('contact.index')}}"> --}}
            <a href="{{route('galleries.index')}}">

            {{-- <a href="#"> --}}

                <i class="fa fa-tachometer retire" aria-hidden="true"></i> GALLERIES
            </a>
        </li>

        <li>
            {{-- <a href="{{route('portfolio.affichage')}}"> --}}
            {{-- <a href="{{route('contact.index')}}"> --}}
            <a href="{{route('blog.index')}}">

            {{-- <a href="#"> --}}

                <i class="fa fa-tachometer retire" aria-hidden="true"></i> BLOG
            </a>
        </li>

        {{-- <li class="header">Another Menu</li> --}}
        {{-- <li>
            <a href="#">
                <i class="fa fa-users" aria-hidden="true"></i> Friends
            </a>
        </li> --}}
        {{-- <li>
            <a href="#">
                <i class="fa fa-cog" aria-hidden="true"></i> Settings
            </a>
        </li> --}}
        {{-- <li>
            <a href="#">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Information
            </a>
        </li> --}}
    </ul>
</div>
