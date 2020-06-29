<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const IMAGE_PATH = "product-images";
    const DEFAULT_IMAGE_NAME = "product-ph.png";
    const DEFAULT_IMAGE_THUMBNAIL_NAME = "product-ph.png";

    public function hasImage()
    {
        return !!$this->image_path;
    }

    public function getImageUrl($type = "details")
    {
        if (!$this->hasImage()) {
            return $this->getDefaultImage($type);
        }

        return $this->image_path;
    }

    public function getDefaultImage($type="details") {
        return $type == "details"
            ? self::DEFAULT_IMAGE_NAME
            : self::DEFAULT_IMAGE_THUMBNAIL_NAME;
    }

    public function getThumbnail()
    {
        return $this->getImageUrl("thumbnail");
    }

    public function setImagePath($imagePath) {
        $relPath = self::IMAGE_PATH . $this->slug;
        $this->image_path = "{$relPath}/{$imagePath}";
    }
}
