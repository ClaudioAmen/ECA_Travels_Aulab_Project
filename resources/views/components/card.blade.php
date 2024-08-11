<div class="card cardCustom shadow" style="width: 18rem;">
    <img class="card-img-top" src="{{$travel->images->isNotEmpty() ? $travel->images->first()->getUrl(300,300) : 'https://picsum.photos/200'}}" alt="immagine">
    <div class="card-body">
      <h5 class="card-title">{{__('ui.tit')}}: {{$travel->title}}</h5>
      <p class="card-text">{{__('ui.price')}}:
        <i class="fa-solid fa-euro-sign"></i>
        {{$travel->price}}
      </p>
      <p class="card-text">{{__('ui.days')}}: {{$travel->time}}</p>
    </div>

    <div class="d-flex justify-content-between">
      <a href="{{route('travel.show',$travel)}}" class="btn buttonCard mb-3 mx-3">{{__('ui.details')}}
      </a>
    </div>
    
  </div> 
