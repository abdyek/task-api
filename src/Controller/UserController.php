<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/sign-up", methods={"POST"})
     */
    public function createNewUser(Request $request, UserPasswordEncoderInterface $encoder, EntityManagerInterface $entityManager)
    {
        $data = json_decode($request->getContent(), true);
        $user = new User();
        $user->setUsername($data['username']);
        $user->setPassword($encoder->encodePassword($user, $data['password']));
        $entityManager->persist($user);
        $entityManager->flush();
        return $this->json([
            'status' => 200,
            'message' => 'success'
        ]);
    }
    /**
     * @Route("/api/user/info", methods={"GET"})
     */
    public function showUserInfo(): Response
    {
        $user = $this->getUser();
        return $this->json([
            'user' => [
                'id' => $user->getId(),
                'username' => $user->getUsername()
            ]
        ]);
    }
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/UserController.php',
        ]);
    }
}
