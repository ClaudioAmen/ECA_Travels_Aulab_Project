<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <h2 class="titolo text-center">
                    {{__('ui.pgCate')}} {{$category->name}}
                </h2>
            </div>
        </div>
    </div>

    <div class="container-fluid my-5">
        <div class="row justify-content-evenly">
            @forelse($travels as $travel)
                <div class="col-12 col-md-3 cardR my-5">
                    <x-card :travel="$travel"/>
                </div>
            @empty
                <div class="col-12 col-md-6 ">
                    <h3>{{__('ui.notripCate')}}</h3>
                </div>
            @endforelse
            
        
    </div>
    </div>
    
</x-layout>