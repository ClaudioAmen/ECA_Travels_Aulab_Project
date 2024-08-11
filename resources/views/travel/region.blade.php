<x-layout>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <h2 class="titolo text-center">
                {{$region->name}}
                </h2>
                
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
                @forelse($travels as $travel)
                <div class="col-12 col-md-3 cardR">
                    <x-card :travel="$travel"/>
                </div>
            @empty
                <div class="col-12 col-md-6 ">
                    <h3> {{__('ui.noTrips')}}</h3>
                </div>
            @endforelse
            </div>
       
    </div>
</x-layout>