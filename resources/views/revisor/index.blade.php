<x-layout>
    <div class="container-fluid mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mb-5 mt-3">
                <div class="rounded shadow p-3">
                    <h1 class="text-center pb-2">
                        <i class="fa-solid fa-user-pen" style="color: #187af1;"></i>
                        {{__('ui.revDash')}}
                    </h1>
                </div>
            </div>
        </div>
        
        {{-- @if(session('messageA'))
        <div class="row justify-content-center mt-5">
            <div class="col-5 alert alert-success text-center shadow rounded">
                {{__('ui.accRev')}}
            </div>
        </div>
        @endif    trova metodo!--}}
        
        
        @if (session()->has('message'))
        <div class="row justify-content-center mt-5">
            <div class="col-5 alert alert-success text-center shadow rounded">
                {{ session('message') }}
            </div>
        </div>
        @endif
        
        @if ($travel_to_check)
        <div class="row pt-5 justify-content-center shadow mx-5">
            @if ($travel_to_check->images->count())
            
            @foreach ($travel_to_check->images as $key=>$image)
            <div class="col-6">
                <div class="card mb-3 bgVal">
                    <div class="row">
                        <div class="col-12 col-md-8 my-3 d-flex justify-content-center">
                            <img src="{{ $image->getUrl(300,300) }}" class="img-fluid rounded shadow" alt="immagine{{ $key + 1 }} dell'annuncio {{ $travel_to_check->title }} "> 
                        </div>
                        <div class="col-4">
                            <div class="card-body">
                                <h5>Valutazioni</h5>
                                @if($image->labels)
                                @foreach($image->labels as $label)
                                #{{$label}},
                                @endforeach
                                @else
                                <p class="fst-italic">Nessuna valutazione</p>
                                @endif
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{$image->adult}}"></div>
                                    </div>
                                    <div class="col-10">
                                        - adult
                                    </div>
                            </div>
                                
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{$image->violence}}"></div>
                                    </div>
                                    <div class="col-10">
                                        - violence
                                    </div>
                                </div>
                                
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{$image->spoof}}"></div>
                                    </div>
                                    <div class="col-10">
                                        - spoof
                                    </div>
                                </div>
                                
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{$image->racy}}"></div>
                                    </div>
                                    <div class="col-10">
                                        - racy
                                    </div>
                                </div>
                                
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{$image->medical}}"></div>
                                    </div>
                                    <div class="col-10">
                                        - medical
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            @endforeach
            
            @else
            @for ($i = 0; $i < 6; $i++)
            <div class="col-12 col-md-4 my-3">
                <img src="{{$travel_to_check->images->isNotEmpty() ? Storage::url($travel->images->first()->path) : 'https://picsum.photos/200'}}" alt="immagine segnaposto">
            </div>
            @endfor
            @endif
            
            
            {{-- <div class="row justify-content-end"> --}}
                <div class="col-12 col-md-4 d-flex mt-5">
                    <div>
                        <h2>{{ $travel_to_check->title }}</h2>
                        <h4>{{__('ui.author')}} {{ $travel_to_check->user->name }} </h4>
                        <h4> {{__('ui.price')}} {{ $travel_to_check->price }}</h4>
                        <h4>Regione: {{ $travel_to_check->region->name }}</h4>
                        <h4 class="fst-italic">{{__('ui.categories')}}: {{ $travel_to_check->category->name}}</h4>
                        <p class="h6">{{__('ui.descr')}}: {{ $travel_to_check->description }}</p>
                        <div class="d-flex justify-content-between my-3">
                            <form action="{{ route('reject', ['travel' => $travel_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-outline-danger py-2 px-4 fw-bold">
                                    <i class="fa-solid fa-xmark me-2" style="color: #ea7676;"></i>
                                    {{__('ui.deny')}}</button>
                                </form>
                                <form action="{{ route('accept', ['travel' => $travel_to_check]) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-outline-success py-2 px-4 fw-bold">
                                        <i class="fa-solid fa-check me-2" style="color: #65c37b;"></i>
                                        {{__('ui.accept')}}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- </div> --}}
       
                    @else
                    <div class="row justify-content-center align-items-center text-center my-5">
                        <div class="col-12 col-md-6 my-5">
                            <h1 class="fst-italic display-4 my-5">
                                {{__('ui.noArticleR')}}
                            </h1>
                            <a href="{{ route('homepage') }}" class="mt-5 btn buttonCard"> {{__('ui.backHome')}}</a>
                        </div>
                    </div>
                    @endif
</div>


                
            </x-layout>
            