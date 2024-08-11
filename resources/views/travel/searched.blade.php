<x-layout>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 mt-5">
                <h1>
                    {{__('ui.searchResult')}} <span class="fst-italic">{{$query}}</span>
                </h1>
            </div>
        </div>
        <div class="row">
            @forelse ($travels as $travel)
                <div class="col-12 col-md-3">
                    <x-card :travel='$travel'/>
                </div>
            @empty
                <div class="col-12 mt-5">
                    <h3 class="text-center">{{__('ui.noArticles')}}</h3>
                    <div class="d-flex justify-content-center mt-5"> <i class="fa-solid fa-bahai fa-spin-pulse fa-4x" style="color: #187af1;"></i></div>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>{{$travels->links()}}</div>
    </div>
</x-layout>