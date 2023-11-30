<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $guarded =[];
    public $UploadDir ='/assets/img/';
     protected function image(): Attribute
        {
            return Attribute::make(
                get: fn($image) =>$this->UploadDir. $image
            ) ;

        }
}
