<div class="container-fluid containerLista d-flex justify-content-between shadow">
    <div class="boxminiList"></div>
    <div class="row px-3 rowLista">

        <div class="col-md-1 categoryList">
            <h5 class="verticalTxt">{{__("ui.{$travel->category->name}")}}</h5>
        </div>


        <div class="col-md-3">
            <img class="card-img-top imgLista" src="{{$travel->images->isNotEmpty() ? $travel->images->first()->getUrl(300,300) : 'https://picsum.photos/200'}}" alt="immagine">
        </div>



        <div class="col-md-3">
            <h5 class="card-title classe3">{{$travel->title}}</h5>
            <p class="card-text classe3">{{__('ui.days')}}: {{ $travel->time }}</p>
        </div>

        <div class="col-md-3">
            <p class="card-text mx-5">
                <i class="fa-solid fa-euro-sign"></i>
                {{ $travel->price }}
            </p>
            <a href="{{ route('travel.show', $travel) }}" class="btn buttonCard">{{__('ui.details')}}</a>
        </div>

           

    <div class="col-12 col-md-1 d-flex justify-content-end">
        <div title="Like" class="heart-container">
            <input id="Give-It-An-Id" class="checkbox" type="checkbox">
            <div class="svg-container">
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-outline" viewBox="0 0 24 24">
                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                    </path>
                  
                </svg>
             
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-filled" viewBox="0 0 24 24">
                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                    </path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="100" width="100" class="svg-celebrate">
                    <polygon points="10,10 20,20"></polygon>
                    <polygon points="10,50 20,50"></polygon>
                    <polygon points="20,80 30,70"></polygon>
                    <polygon points="90,10 80,20"></polygon>
                    <polygon points="90,50 80,50"></polygon>
                    <polygon points="80,80 70,70"></polygon>
                </svg>
            </div>
        </div>
    </div>
          
       
</div>
</div>
