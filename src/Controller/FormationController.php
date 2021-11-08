<?php

namespace App\Controller;

use App\Repository\FormationRepository;
use App\Repository\ProjectsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormationController extends AbstractController
{
    /**
     * @Route("/formation", name="formation")
     */
    public function index(FormationRepository $formation, ProjectsRepository $projects): Response
    {
        return $this->render('formation/index.html.twig', [
            'formation' => $formation->findAll(),
            'projects' => $projects->findAll(),
        ]);
    }
}