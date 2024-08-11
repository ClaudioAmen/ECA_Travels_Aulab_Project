<x-layout>
    <div class="container-fluid p-0 bgList bg-success">
        {{-- <div class="row justify-content-center ">
            <div class="col-12 col-md-6 mt-5">
              
            </div>
        </div> --}}
    </div>
    <div class="container p-0 ">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <h2 class="titolo2 text-center">
                    {{__('ui.tripIns')}}
                </h2>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            @forelse($travels as $travel)
                <div class="col-12 mb-4">
                    <x-card2 :travel="$travel"/>
                </div>
            @empty
                <div class="col-12 col-md-6">
                    <h3>{{__('ui.notripCate')}}</h3>
                </div>
            @endforelse
            
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        <div>
            {{$travels->links()}}
        </div>

    </div>

</x-layout>