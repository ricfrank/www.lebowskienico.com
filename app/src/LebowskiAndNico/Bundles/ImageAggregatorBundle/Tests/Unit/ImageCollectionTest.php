<?php

use Symfony\Component\Finder;
use LebowskiAndNico\Bundles\ImageAggregatorBundle\Aggregator\ImageCollection;

class ImageCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testCanGetImagesFromAggregator()
    {
//        $mockFolderPath = '/path/to/folder';
//        
//        $finderAfterIn = $this->getMock('Symfony\Component\Finder\Finder');
//        
//        $finder = $this->getMock('Finder');
//    
//        $finder->expects($this->once())
//                 ->method('in')
//                 ->with($this->equalTo($mockFolderPath))
//                 ->will($this->returnValue($finderAfterIn));
//        
//        $finderAfterIn->expects($this->once())
//                ->method('getRealpath')
//                ->will($this->returnValue('pippo'));
//        
//        $imageCollection = new ImageCollection($finder);
//        $imageCollection->getImagePaths($mockFolderPath);
    }
    
    
}