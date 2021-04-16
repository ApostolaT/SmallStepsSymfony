<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     * @return Response
     */
    public function homepage() {
        return $this->render('questions/homepage.html.twig');
    }

    /**
     * @Route("/questions/{slug}", name="app_question_show")
     * @param string $slug
     * @return Response
     */
    public function show(string $slug) {
        //return new Response(sprintf('Future page to show the %s question!', ucwords(str_replace('-', ' ', $slug))), 200);
        $answers = [
            'Make sure that the moon is full.',
            'Make sure your room mate is not a leo.',
            'Maybe... try reading it from bottom to top.'
        ];

        dump($this);

        return $this->render('questions/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers
        ]);
    }
}