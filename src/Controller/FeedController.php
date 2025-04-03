<?php

namespace App\Controller;

use App\Entity\Feed;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FeedController extends AbstractController
{
    #[Route('/add', name: 'feed_add', methods: ['GET', 'POST'])]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($request->isMethod('POST')) {
            $user = $request->request->get('user');
            $description = $request->request->get('description');
            $file = $request->files->get('content');
            if ($file) {
                $imageData = base64_encode(file_get_contents($file->getPathname()));
            } else {
                $imageData = null; 
            }

            $feed = new Feed();
            $feed->setUser($user);
            $feed->setContent($imageData);
            $feed->setDescription($description);
            $feed->setCreatedAt(new \DateTime());
            $entityManager->persist($feed);
            $entityManager->flush();

            return $this->render('add_data/index.html.twig');
        }
        return $this->render('add_data/index.html.twig');
    }
}