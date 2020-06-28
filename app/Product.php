<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const IMAGE_PATH = "product-images";

    public function hasImage()
    {
        return !!$this->image_path;
    }

    public function getImageUrl($size = "details")
    {
        return self::IMAGE_PATH . $this->slug;
    }

    public function getThumbnail()
    {
        return $this->getImageUrl("thumbnail");
    }

    public function setImagePath($imagePath) {
        $this->image_path = $imagePath;
    }
}
