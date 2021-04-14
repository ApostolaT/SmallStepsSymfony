<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
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
        return new Response(sprintf('Future page to show the %s question!', ucwords(str_replace('-', ' ', $slug))), 200);
    }
}