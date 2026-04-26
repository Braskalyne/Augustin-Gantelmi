<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $skills = [
            ['name' => 'PHP/Symfony', 'level' => 95, 'icon' => '🐘'],
            ['name' => 'JavaScript/jQuery', 'level' => 85, 'icon' => '⚡'],
            ['name' => 'HTML/CSS', 'level' => 90, 'icon' => '🎨'],
            ['name' => 'CMS Sulu/WordPress', 'level' => 88, 'icon' => '📝'],
            ['name' => 'Java', 'level' => 75, 'icon' => '☕'],
            ['name' => 'C/C++', 'level' => 70, 'icon' => '⚙️'],
        ];

        $experiences = [
            [
                'title' => 'Développeur Back-End PHP/Symfony',
                'company' => 'Canari Studio',
                'period' => 'Août 2022 - Août 2025',
                'type' => 'CDI',
            ],
            [
                'title' => 'Stagiaire Développeur',
                'company' => 'Keyrus',
                'period' => 'Avril 2021 - Septembre 2021',
                'type' => 'Stage',
            ],
            [
                'title' => 'Stagiaire Développeur',
                'company' => '4FAM',
                'period' => 'Janvier - Juin 2020',
                'type' => 'Stage',
            ],
        ];

        return $this->render('home/index.html.twig', [
            'skills' => $skills,
            'experiences' => $experiences,
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig');
    }
}
