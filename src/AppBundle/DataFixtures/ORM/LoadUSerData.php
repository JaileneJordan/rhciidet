<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUSerData implements FixtureInterface, ContainerAwareInterface
{

  private $container;


  /**
  *Load data fixtures with the passed EntityManager
  *
  *@param ObjectManager $manager
  */
  public function load(ObjectManager $manager){
    $manager -> persist($user);
    $manager -> flush();
  }

  /**
  *Sets the container
  *
  *@param ContainerInterface|null $container A ContainerInterface instance or null
  */
  public function setContainer(ContainerInterface $container = null){
      $this->container = $container;

  }


}
