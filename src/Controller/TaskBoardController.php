<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Annotation\Response;

class TaskBoardController extends AbstractController
{
    /**
     * @Route("/", name="task_board")
     */
    public function index()
    {
        return $this->render('task_board/index.html.twig', [
            'controller_name' => 'TaskBoardController',
        ]);
    }
}
