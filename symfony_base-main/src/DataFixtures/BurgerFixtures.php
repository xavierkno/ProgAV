<?php

namespace App\DataFixtures;

use App\Entity\Burger;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BurgerFixtures extends Fixture implements DependentFixtureInterface
{
    public const BURGER_REFERENCE = 'Burger';

    public function load(ObjectManager $manager): void
    {
        $nomsBurgers = [
            'classique',
            'chily',
            'smash'
        ];
 
        foreach ($nomsBurgers as $key => $nomBurger) {
            $pain = $this->getReference(PainFixtures::PAIN_REFERENCE.'_'. $key);
            $image = $this->getReference(ImageFixtures::IMAGE_REFERENCE.'_'. $key);

            $burger = new Burger();
            $burger->setName($nomBurger);
            $burger->setPrice(10);

            $burger->setPain($pain);
            $burger->setImage($image);

            $manager->persist($burger);
    
            $this->addReference(self::BURGER_REFERENCE . '_' . $key, $burger);
        }

        $manager->flush();
    }

    // Spécifie que cette fixture dépend de `PainFixtures`
    public function getDependencies()
    {
        return [
            PainFixtures::class,
        ];
    }
}

