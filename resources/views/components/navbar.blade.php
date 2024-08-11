<nav class="navbar navbar-expand-lg navCustom fixed-top justify-content-between" data-bs-target>
    <div class="container-fluid">
        <a class="navbar-brand nav-link navColor1 "href="{{ route('homepage') }}">
            <i class="fa-solid fa-route fa-2x"></i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav fs-5">
                <li class="nav-item">
                    <a id="navLink" class="nav-link active navColor1 " aria-current="page" href="{{ route('homepage') }}">{{__('ui.home')}}</a>
                </li>
                <li class="nav-item">
                    <a id="navLink" class="nav-link active navColor1" aria-current="page"
                        href="{{ route('travel.create') }}">{{__('ui.insertArt')}}</a>
                </li>
                <li class="nav-item">
                    <a id="navLink" class="nav-link active navColor1" aria-current="page" href="{{ route('travel.index') }}">{{__('ui.list')}}</a>
                </li>
 
                <li class="dropdown">
                    <a id="navLink" class="nav-link dropodown-toggle navColor1" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">{{__('ui.categories')}}</a>
                    <ul class="dropdown-menu dropCustom">
                        @foreach ($categories as $category)
                <li>
                    <a class="dropdown-item dropCustom"
                        href="{{ route('travel.category', ['category' => $category]) }}">{{__("ui.$category->name")}}</a>
                </li>
                @endforeach

                </ul>
                </button>
                </li>
                <li>
                  @livewire('search-bar') 
                </li>
            </ul>
</div>



<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav fs-5">
        <li class="nav-item">
                <x-_locale lang="it"/>
        </li>
        <li class="nav-item">
                <x-_locale lang="en"/>
        </li>
        <li class="nav-item">
                <x-_locale lang="de"/>
        </li>
        <li>

                    @guest
                <a class="nav-link active navColor1" aria-current="page" href="{{ route('register') }}">{{__('ui.registerBtn')}}</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link active navColor1" aria-current="page" href="{{ route('login') }}">Login</a>
                </li>
            @endguest

            @auth
                {{-- <li class="nav-item">
                    <a id="navLink" class="nav-link active navColor1" aria-current="page"
                        href="{{ route('become.revisor') }}">Diventa un revisore</a>
                </li> --}}

                <div class="dropstart">
                    <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <li class="nav-item">
                            <a class="nav-link active navColor1" aria-current="page" href="#"><i
                                    class="fa-solid fa-user nameR">
                                    {{ Auth::user()->name }}</i>
                            </a>
                        </li>
                    </button>
                    <ul class="dropdown-menu me-3 dropCustom1 dropstartCustom">
                        <li class="nav-item">
                            <a class="nav-link active dropCustomLink" aria-current="page" href="{{route('dashboard')}}">{{__('ui.profile')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active dropCustomLink" aria-current="page" href="{{route('become.revisor')}}">{{__('ui.becRev')}}</a>
                        </li>
                        @if (Auth::user()->is_revisor)
                            <li class="nav-item">
                                <a class="nav-link active dropCustomLink" aria-current="page"
                                    href="{{ route('revisor.index') }}
                                ">{{__('ui.revise')}}
                                    <span
                                        class="position-absolute top-4 start-200 translate-end badge rounded-pill bg-info mx-2">{{ \App\Models\Travel::toBeRevisedCount() }}</span>
                                </a>
                            </li>
                        @endif

                        <li class="nav-item">
                            <a class="nav-link active dropCustomLink" aria-current="page" href="#"
                                onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                            <form action="{{ route('logout') }}" method="POST" id="form-logout">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth
        </ul>
    </div>





    </div>
</nav>




