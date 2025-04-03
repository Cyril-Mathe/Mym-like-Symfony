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
    #[Route('/home/page/add', name: 'feed_add', methods: ['GET', 'POST'])]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($request->isMethod('POST')) {
            $user = $request->request->get('user');
            $content = $request->request->get('content');
            $description = $request->request->get('description');

            $feed = new Feed();
            $feed->setUser($user);
            $feed->setContent($content);
            $feed->setDescription($description);
            $feed->setCreatedAt(new \DateTime());

            $entityManager->persist($feed);
            $entityManager->flush();

            return new Response('Donnée ajoutée avec succès !');
        }

        return $this->render('add_data/index.html.twig');
    }
}