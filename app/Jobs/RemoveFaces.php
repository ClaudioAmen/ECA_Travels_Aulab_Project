<?php

namespace App\Jobs;

use App\Models\Image;
use Spatie\Image\image as SpatieImage;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Enums\AlignPosition;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class RemoveFaces implements ShouldQueue
{
    use Dispatchable,InteractsWithQueue,Queueable,SerializesModels;

    private $travel_image_id;

    /**
     * Create a new job instance.
     */
    public function __construct($travel_image_id)
    {
        $this->travel_image_id=$travel_image_id;
        

       
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->travel_image_id);
        if(!$i){
            return;
        }

        $srcPath=storage_path('app/public/' . $i->path);
        $image = file_get_contents($srcPath);

        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));

        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->faceDetection($image);
        $faces = $response->getFaceAnnotations();

        foreach($faces as $face){
            $vertices = $face->getBoundingPoly()->getVertices();
            $bounds = [];

            foreach($vertices as $vertex){
                $bounds[]= [$vertex->getX(),$vertex->getY()];
            }

            $w = $bounds[2][0] - $bounds[0][0];
            $h = $bounds[2][1] - $bounds[0][1];

            $image = SpatieImage::load($srcPath);

            $image->watermark(
                // mettere il percorso alla nostra icona per nascondere i volti
                base_path('resources/img/tree_logo.png'),
                AlignPosition::TopLeft,
                paddingX: $bounds[0][0],
                paddingY: $bounds[0][1],
                width: $w,
                height: $h,
                fit: Fit::Stretch
            );

            $image->save($srcPath);

        }
        $imageAnnotator->close();
    }
}
