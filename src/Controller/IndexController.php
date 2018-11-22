<?php

namespace App\Controller;

use App\Repository\BoardRepository;
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
    /**
     * @var BoardRepository
     */
    private $boardRepository;

    public function __construct(Environment $twig, BoardRepository $boardRepository)
    {
        $this->twig = $twig;
        $this->boardRepository = $boardRepository;
    }

    /**
     * @Route("/", name="index")
     */
    public function index() : Response
    {
        return new Response($this->twig->render('index.html.twig'));
    }
}
