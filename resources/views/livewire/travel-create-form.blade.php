<form class="shadow p-5" wire:submit="store">
    @if(session('success'))
        <div class="alert alert-success">{{ __('ui.creaSucc') }}</div>
    @endif
    <div class="mb-3">
    <label for="title" class="form-label">{{__('ui.tit')}}</label>
    <input type="string" class="form-control" id="title" aria-describedby="titolo" wire:model.live='title'>
    @error('title')
        <span class="text-danger">{{ __('ui.reqTit') }} </span> 
        {{-- servono anche {{ __('ui.titleMin') }} e {{ __('ui.titleMax') }} --}}
    @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">{{__('ui.price')}}</label>
        <input type="number" class="form-control" id="price" aria-describedby="prezzo" wire:model.live='price'>
        @error('price')
        <span class="text-danger">{{__('ui.reqPrice')}}</span>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="time" class="form-label">{{__('ui.days')}}</label>
        <input type="number" class="form-control" id="time" aria-describedby="Giorni_di_viaggio" wire:model.live='time'>
        @error('time')
        <span class="text-danger">{{__('ui.reqDay')}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="region" class="form-label" aria-placeholder="Seleziona una regione">{{__('ui.region')}}</label>
        <select class="form-control" aria-label="Regione" id="region" wire:model.live="region" >
        <option class="custom-select" selected value="">{{__('ui.regOpt')}}</option> 
            @foreach($regions as $region)
            <option value="{{$region->id}}">{{$region->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="category" class="form-label" aria-placeholder="Seleziona una categoria">{{__('ui.categories')}}</label>
        <select class="form-control" aria-label="Categorie" id="category" wire:model.live="category" >
        <option class="custom-select" selected value="">{{__('ui.cateOpt')}}</option> 
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{__("ui.$category->name")}}</option>
            @endforeach
        </select>

            @error('category')
            <span class="text-danger">{{__('ui.reqCat')}}</span>
            @enderror
    </div>

    <div class="mb-3">
        <label for="temporary_images" class="form-label"> {{__('ui.insertImmy')}}</label> 
        <input wire:model.live="temporary_images" multiple type="file" class="form-control filename @error('temporary_images.*')is-invalid @enderror" placeholder="Img/">
            @error('temporary_images.*')
                <span class="text-danger">{{__('ui.reqImg')}}</span>
            @enderror 
            @error('temporary_images')
                <span class="text-danger">{{__('ui.reqImg')}}</span>
            @enderror 
    </div>


            
            @if (!empty($images))
                <div class="row">
                <div class="col-12">
                <p>{{__('ui.previewImmy')}}</p>
                <div class="row borderPreview">
            @foreach ($images as $key => $image)
                <div class="col-12 col-md-6 mt-3 mx-1">
                <div class="img-preview" style="background-image: url({{$image->temporaryUrl()}});">
                </div>
                </div>
                <div class="row my-2">
                    <div class="col-12 d-flex justify-content-end">
                    <button type="button" class="btn d-flex justify-content-end" wire:click="removeImage({{$key}})">
                    <i class="fa-solid fa-trash fa-beat fa-2x" style="color: #187af1;"></i>
                    </button>
                </div>
                    </div>
    
            @endforeach
                </div>
                </div>
                </div>
        
            @endif
            
    <div class="mb-3">
        <label for="description" class="form-label">{{__('ui.descr')}}</label>
        <textarea name="description" class="form-control" wire:model.live='description'></textarea>
        @error('description')
        <span class="text-danger">{{__('ui.reqDescr')}}</span>
        @enderror
    </div>

    <div class="d-flex justify-content-end">
    <button type="submit" class="cta" >
        <span>{{__('ui.insert')}}</span>
        <svg width="15px" height="10px" viewBox="0 0 13 10">
        <path d="M1,5 L11,5"></path>
        <polyline points="8 1 12 5 8 9"></polyline>
        </svg>
    </button> 
    </div>


</form>
