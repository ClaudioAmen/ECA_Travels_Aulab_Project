<x-layout>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-md-5 mt-5">
                <h2 class="display-6">{{__('ui.dash')}} {{Auth::user()->name}}</h2>
            </div>
            <div class="col-12 col-md-8 mt-3">
                {{-- <h3>{{__('ui.fav')}}</h3> --}}
            <p class="fs-3">{{__('ui.dashPpl')}}</p>
            <p class="fs-3">{{__('ui.dashPpl2')}}</p>
            </div>

            <div class="col-12">
                <div class="d-flex justify-content-end">
                        <a class="btn cta" href="{{route('become.revisor')}}"> {{__('ui.becRev')}}
                            <svg width="15px" height="10px" viewBox="0 0 13 10">
                                <path class="prova" d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                        </a>
                    </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-end">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="col-12">
                    <img class="bgDash" src="https://images.pexels.com/photos/1262304/pexels-photo-1262304.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""> 
                </div>
            </div>
        </div>
    </div>
    
    
     
    </x-layout>