<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Finder\Finder;


class TableFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        
        
        
        $finder = new Finder();
        $finder->files()->in(__DIR__)->name("table_data.json");

        foreach ($finder as $file){
            $contents= $file->getContents();
        }

        $jsonObjectArray = json_decode($contents,true);

        foreach($jsonObjectArray as $key => $jsonObject){
            $product = new Product();
            $product->setId($jsonObject["id"]);
            $product->setGtin((string)$jsonObject["gtin"]);
            $product->setProductName($jsonObject["product_name"]);
            $product->setProductDesc($jsonObject["product_desc"]);
            $product->setPrice((float)$jsonObject["price"]);
            $product->setCurrency($jsonObject["currency"]);
            $product->setCategory($jsonObject["category"]);
            $product->setGender($jsonObject["gender"]);
            $product->setQuantity((int)$jsonObject["quantity"]);
            $product->setSize($jsonObject["size"]);
            $product->setColor($jsonObject["color"]);
            $product->setUrl($jsonObject["url"]);
            $product->setImage($jsonObject["image"]);
            $product->setImageAdditional($jsonObject["image_additional"]);
            $product->setAdditional(utf8_encode($jsonObject["additional"]));
            $product->setSourceVideo($jsonObject["source_video"]);
            $manager->persist($product);
        }
        

        
        $manager->flush();
    }
}
