<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class IndexController extends AbstractController
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
     * @Route("/", name="index")
     */
    public function index() : Response
    {
        return new Response($this->twig->render('index.html.twig'));
    }

    public function login(): Response
    {
        return new Response($this->twig->render('login.html.twig'));
    }
}
