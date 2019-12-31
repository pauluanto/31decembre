<?php


namespace App\DataFixtures;


use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserFixture extends Fixture
{

    private $passwordEncoder;


    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            $user = new User();


            $user->setEmail(sprintf('test%d@test.com', $i));
            $user->setFirstName('test', $i);
            $user->setUsername('test', $i);
            $user->setPassword('test', $i);

            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                'engage'
            ));

            return $user;

        }
        $manager->flush();
    }
}