<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Feed;

final class HomePageController extends AbstractController
{
    #[Route('/home/page', name: 'app_home_page')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $feedRepository=$entityManager->getRepository(Feed::class);
        $feed1=$feedRepository->findAll();
        return $this->render('home_page/index.html.twig', [
            'feed' => $feed1,
        ]);
    }
}
