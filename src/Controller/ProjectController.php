<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProjectController extends AbstractController
{
    #[Route('/projects', name: 'app_projects')]
    public function index(): Response
    {
        // Données de démonstration - à remplacer par une base de données
        $projects = [
            [
                'id' => 1,
                'title' => 'recherche-jobs.fr',
                'description' => 'Plateforme de centralisation d\'offres d\'emploi récupérant les annonces depuis plusieurs sites. Système de suivi type Trello pour gérer ses candidatures et suivre l\'avancement des démarches.',
                'technologies' => ['PHP', 'Symfony', 'HTML', 'CSS', 'JavaScript'],
                'image' => 'https://placehold.co/600x400/667eea/ffffff?text=Recherche-Jobs',
                'github' => null,
                'demo' => 'https://recherche-jobs.fr',
                'featured' => true,
            ],
            [
                'id' => 2,
                'title' => '4fam',
                'description' => 'Site vitrine pour artiste muraliste exposant ses fresques et réalisations. Back-office complet permettant à la cliente de gérer ses galeries, ajouter ses œuvres et modifier le contenu sans intervention technique.',
                'technologies' => ['PHP', 'Symfony', 'HTML', 'CSS', 'JavaScript'],
                'image' => 'https://placehold.co/600x400/764ba2/ffffff?text=4fam',
                'github' => null,
                'demo' => 'https://www.4fam.fr',
                'featured' => true,
            ],
        ];

        return $this->render('project/index.html.twig', [
            'projects' => $projects,
        ]);
    }

    #[Route('/projects/{id}', name: 'app_project_show', requirements: ['id' => '\d+'])]
    public function show(int $id): Response
    {
        // Simuler un projet - à remplacer par une vraie requête
        $project = [
            'id' => $id,
            'title' => 'Project ' . $id,
            'description' => 'Description détaillée du projet...',
            'technologies' => ['Symfony', 'React', 'PostgreSQL'],
            'image' => 'https://via.placeholder.com/800x500',
        ];

        return $this->render('project/show.html.twig', [
            'project' => $project,
        ]);
    }
}
