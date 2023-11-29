<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\HomeRepository;

#[Route('/', name: 'app_')]
class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(HomeRepository $homeRepository): Response
    {
        $homes = $homeRepository->findAll();

        dump($homes);
        return $this->render('home/index.html.twig', [
            'homes' => $homes,
        ]);
    }
}
