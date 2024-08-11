<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class TravelCreateForm extends Component

{

    use WithFileUploads;
    #[Validate('required|min:3|max:150')]
    public $title;
    #[Validate('required|integer')]
    public $price;
    #[Validate('required|min:3')]
    public $description;
    #[Validate('required|integer')]
    public $time;
    public $category;
    public $region;
    public $images = [];
    public $temporary_images;
    public $travel;


    protected $rules = [
        'title' => 'required|min:3|max:20',
        'price' => 'required|numeric',
        'description' => 'required|min:5|max:2000',
        'time' => 'required|numeric',
        'category' => 'required',
        // 'password' => 'required',
        // 'email' => 'required',
        // 'name' => 'required',

    ];

    // protected $messages = [
    //     'title.required' => 'Il titolo è richiesto',
    //     'description.required' => 'La descrizione è richiesta',
    //     'price.required' => 'Il prezzo è richiesto',
    //     'category.required' => 'La categoria è richiesta',
    //     'time.required' => 'Il numero di giorni consigliati è richiesto',
    //     'password.required' => 'La password è richiesta',
    //     'name.required' => 'Il nome è richiesto',
    //     'email.required' => 'L`email è richiesta',
    //     'title.min' => 'Il titolo deve avere almeno 3 caratteri',
    //     'title.max' => 'Il titolo deve avere al massimo 20 caratteri',
    //     'description.min' => 'La descrizione deve avere almeno 5 caratteri',
    //     'description.max' => 'La descrizione deve avere al massimo 2000 caratteri',
    //     'price.numeric' => 'Il dato deve essere un numero',
    //     'time.numeric' => 'Il dato deve essere un numero',
    

    // ];



    public function store()
    {
        $this->validate();
        $this->travel = Auth::user()->travels()->create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'time' => $this->time,
            'category_id' => $this->category,
            'region_id' => $this->region,

            // 'user_id' => Auth::id()  
            // //l'ho aggiunto io 
        ]);
        if (count($this->images) > 0) {
            foreach ($this->images as $image) {
                $newFileName="travels/{$this->travel->id}";
                $newImage=$this->travel->images()->create(['path'=>$image->store($newFileName, 'public')]);
                // dispatch(new ResizeImage($newImage->path, 300, 300));
                // dispatch(new GoogleVisionSafeSearch($newImage->id));
                // dispatch(new GoogleVisionLabelImage($newImage->id));
            RemoveFaces::withChain([
                    new ResizeImage($newImage->path,300,300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);

                

                // $travel->images()->create(['path' => $image->store('images', 'public')]);
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        $this->reset();
        session()->flash('success', 'Viaggio inserito con successo');
        $this->cleanForm();


    }

    protected function cleanForm()
    {
        $this->title = '';
        $this->description = '';
        $this->category = '';
        $this->price = '';
        $this->time = '';
        $this->images = [];
        $this->region = '';
    }


     public function updatedTemporaryImages()
     {
         if ($this->validate([
            'temporary_images.*' => 'image|max:5000',
            'temporary_images' => 'max:6'
         ])) {
             foreach ($this->temporary_images as $image) {
                 $this->images[] = $image;
             }
         }
     }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function render()
    {
        return view('livewire.travel-create-form');
    }
}
