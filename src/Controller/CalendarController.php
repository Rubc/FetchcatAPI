<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class CalendarController
{
    public function __construct
    (
        Environment $twig
    )
    {
        $this->twig = $twig;
    }

    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->redirectToRoute('customers');
    }
}
