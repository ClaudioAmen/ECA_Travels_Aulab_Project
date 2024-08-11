<x-layout>
    <div class="container-fluid p-0 bgCreate bg-success p-0">
        {{-- <div class="row justify-content-center ">
            <div class="col-12 col-md-6 mt-5">
              
            </div>
        </div> --}}
    </div>
    <div class="container p-0">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">
                <h2 class="titolo text-center">
                    {{__('ui.insertArt')}}
                </h2>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <livewire:travel-create-form />
            </div>
        </div>
    </div>

</x-layout>

