<x-layout>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <h2 class="titolo text-center">
                  {{__('ui.pgDet')}} {{$travel->title}}
                </h2>
            </div>
        </div>
    </div>

<div class="container mt-5 d-flex justify-content-end mx-4">
  <div class="row justify-content-end">
  {{----------------------- carousel -------------------}}
      <div class="col-12 col-md-8 mx-5">
        @if ($travel->images->isNotEmpty())
          <div id="carouselExampleAutoplaying" class="carousel slide carouselCustom" data-bs-ride="carousel" data-bs-interval="4000">
              <div class="carousel-inner">
                @foreach ($travel->images as $key => $image)
                <div class="carousel-item @if ($loop->first) active @endif">
               <img src="{{ $image->getUrl(300, 300) }}" class="img-fluid rounded shadow" alt="immagine{{ $key + 1 }} dell'annuncio {{ $travel->title }}">
                </div>
                  @endforeach
              </div>
                @if ($travel->images->count() > 1)
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">{{__('ui.prev')}}</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">{{__('ui.next')}}</span>
              </button>
              @endif
          </div>
            @else
            <div class="col-12 col-md-10">
              <img src="https://picsum.photos/400" alt="">
            </div>
        @endif
              </div>
          </div>
  
      
{{------------------- fine carousel -------------------------}}
            
            <div class="col-12 col-md-8 mx-5 vh-100">
                {{-- <p>TITOLO: {{$travel->title}}</p> --}}
                <h5 class="my-4">{{__('ui.price')}} {{$travel->price}} €</h5>
                <h5 class="my-4">{{__('ui.days')}} {{$travel->time}}</h5>
                <h5 class="my-4">{{__('ui.categories')}}: {{__("ui.{$travel->category->name}")}}</h5>
                <h5 class="my-4">Region: {{$travel->region->name}}</h5>
                <h5 class="my-4">{{__('ui.descr')}}: {{$travel->description}}</h5>
            </div>


</div>
</div>

</x-layout>