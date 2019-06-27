<?php
/**
 * Created by PhpStorm.
 * User: Krionari
 * Date: 27/06/2019
 * Time: 22:03
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/question/{id}", name="question_index")
     * @return Response A response instance
     */
        public function index(): Response
        {
            return $this->render('question/index.html.twig');
        }

    /**
     * @Route("/solution/{id}", name="question_index")
     * @return Response A response instance
     */
    public function solution(): Response
    {
        return $this->render('question/solution.html.twig');
    }
}