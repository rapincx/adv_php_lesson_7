<?php
namespace ChaosCompany\ParseBundle\DataFixtures\ORM;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use ChaosCompany\ParseBundle\Entity\Tag;
class TagFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 5; $i++) {
            $tag = new Tag();
            $tag->setName('Tag '.$i);
            $manager->persist($tag);
        }
        $manager->flush();
        $this->addReference('tag', $tag);
    }
}