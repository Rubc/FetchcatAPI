<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class CalendarController
{
    /**
     * @var Environment
     */
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @Route("/calendar", name="calendar")
     */
    public function index()
    {
        return new Response(
            $this->twig->render('calendar/index.html.twig', [
                'controller_name' => 'Title'
            ])
        );
    }
}
