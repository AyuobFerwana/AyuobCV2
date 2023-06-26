<?php

namespace App\Services;

use App\Models\About;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardAbout
{

    public function CreateAbout(array $data)
    {
        try {
            $file = $data['file']->store('about', 'public');
            $image = $data['image']->store('about', 'public');

             // Update the data array with the file and image paths
             $data['file'] = $file;
             $data['image'] = $image;

            $about = new About($data);
            $isSaved = $about->save();

            return $isSaved;
        } catch (Exception $ex) {
            throw $ex;
        }
    }


    public function UpdateAbout(int $id, array $data)
    {
        try {
            $file = $data['file']->store('about', 'public');
            $image = $data['image']->store('about', 'public');

             // Update the data array with the file and image paths
             $data['file'] = $file;
             $data['image'] = $image;

            $about = About::findOrFail($id);

            $about->fill($data);
            $isSaved = $about->save();

            return $isSaved;
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
