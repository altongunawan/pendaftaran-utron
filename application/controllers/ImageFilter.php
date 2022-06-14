<?php

class ImageFilter {

    public function __construct($img, $type) {
        $this->img = $img;
        switch($type) {
            case 'BW':
                $this->filterBW($this->img);
                break;
            case 'Pixelate':
                $this->filterPixelate($this->img);
                break;
            case 'Negate':
                $this->filterNegate($this->img);
                break;
        }
    }

    public function filterBW($img) {
        $image = imagecreatefromjpeg($img);
        imagefilter($image, IMG_FILTER_GRAYSCALE, 100, 50, 50);
        imagejpeg($image, "uploads/temp/".$_SESSION['user'][0]['nrp'].".jpg");
    }

    public function filterPixelate($img) {
        $image = imagecreatefromjpeg($img);
        imagefilter($image, IMG_FILTER_PIXELATE, 20, 10);
        imagejpeg($image, "uploads/temp/".$_SESSION['user'][0]['nrp'].".jpg");
    }

    public function filterNegate($img) {
        $image = imagecreatefromjpeg($img);
        imagefilter($image, IMG_FILTER_NEGATE, 100, 50, 50);
        imagejpeg($image, "uploads/temp/".$_SESSION['user'][0]['nrp'].".jpg");
    }

}