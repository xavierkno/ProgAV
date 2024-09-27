<?php

namespace App\DataFixtures;

use App\Entity\Image;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ImageFixtures extends Fixture
{
    public const IMAGE_REFERENCE = 'Image';

    public function load(ObjectManager $manager): void
    {
        $images = [
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmKdHqltQzh6PJ6tIoQKphZffHmgRfSb2aZg&s',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmKdHqltQzh6PJ6tIoQKphZffHmgRfSb2aZg&s',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmKdHqltQzh6PJ6tIoQKphZffHmgRfSb2aZg&s'
        ];
 
        foreach ($images as $key => $srcImage) {
            $image = new Image();
            $image->setSrc($srcImage);
            $manager->persist($image);
            $this->addReference(self::IMAGE_REFERENCE . '_' . $key, $image);
        }

        $manager->flush();
    }
}
