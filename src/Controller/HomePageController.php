<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomePageController extends AbstractController
{
    #[Route('/home/page', name: 'app_home_page')]
    public function index(): Response
    {
        $number = random_int(0, 100);
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
            'luckyNumber' => $number,
        ]);
    }
}
