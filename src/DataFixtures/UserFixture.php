<?php

namespace App\DataFixtures;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\User;

class UserFixture extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('killian.vermersch@supinternet.fr');
        $user->setPassword('$argon2i$v=19$m=1024,t=2,p=2$Y0s3eGRuaHRqZWZtU1BBSA$WwwLGiv7vSAxu2njGNlTkb665U3Uf4l4I703ZZQ39QA');
        $manager->persist($user);
        $manager->flush();
    }
}
