<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage() {
        return new Response('Just a dummy response so we can observe that it works.', 200);
    }

    /**
     * @Route("/questions/{slug}")
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

        return $this->render('questions/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers
        ]);
    }
}