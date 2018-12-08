<?php

namespace App\Controller;


use App\Repository\BoardRepository;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;

class ApiController extends FOSRestController
{
    /**
     * @var BoardRepository
     */
    private $boardRepository;

    public function __construct(BoardRepository $boardRepository)
    {
        $this->boardRepository = $boardRepository;
    }

    //TODO: API doc
    /**
     * Return all boards
     *
     *
     * @return View
     */
    public function getBoardAction()
    {
       $boards = $this->boardRepository->findAll();
        if (!$boards) {
            throw $this->createNotFoundException('No boards found.');
        }
        $view = View::create();
        $view->setData($boards)->setStatusCode(200);
        return $view;
    }

}