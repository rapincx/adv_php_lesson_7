<?php
namespace ChaosCompany\ParseBundle\DataFixtures\ORM;
use ChaosCompany\ParseBundle\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = $this->getReference('user');
        $category = $this->getReference('category');
        $tag = $this->getReference('tag');
        for ($i = 0; $i < 5; $i++) {
            $post = new Post();
            $post->setTitle('title '.$i);
            $post->setContent('New article.....'.$i);
            $post->setUser($user);
            $post->setCategory($category);
            $post->setTags($tag);
            $post->setCreatedAt(new \DateTime());
            $manager->persist($post);
        }
        $manager->flush();
    }
    public function getDependencies()
    {
        return array(
            UserFixtures::class,
            CategoryFixtures::class,
            TagFixtures::class,
        );
    }
}