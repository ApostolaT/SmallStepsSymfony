<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class QuestionController
{
    public function homepage() {
        return new Response('Just a dummy response so we can observe that it works.', 200);
    }
}