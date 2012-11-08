<?php

namespace LebowskiAndNico\Bundles\ImageAggregatorBundle\Aggregator;

class ImageCollection {
  
    private $finder;


    public function __construct($finder)
    {
        $this->finder = $finder;
    }


    public function getImagePaths($folderPath)
    {
        $files = $this->finder->in($folderPath);
        foreach ($files as $file) {
          print $file->getRealpath()."\n";
        }
    }
}

