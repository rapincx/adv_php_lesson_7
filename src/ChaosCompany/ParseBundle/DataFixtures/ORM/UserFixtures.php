<?php
namespace ChaosCompany\ParseBundle\DataFixtures\ORM;
use ChaosCompany\ParseBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 5; $i++) {
            $user = new User();
            $user->setName('User'.$i);
            $user->setPassword(123+$i);
            $user->setEmail('user_'.$i.'@mail.com');
            $manager->persist($user);
        }
        $manager->flush();
        $this->addReference('user', $user);
    }
}