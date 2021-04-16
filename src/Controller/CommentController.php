<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    private $currentVoteCount = 0;
    /**
     * @Route("/comments/{id}/vote/{direction}")
     * @param $id
     * @param $direction
     * @return JsonResponse
     */
    public function commentVote($id, $direction) {
        if ($direction === 'up') {
            $this->currentVoteCount = rand(7, 100);
        }
        if ($direction === 'down') {
            $this->currentVoteCount = rand(0, 5);
        }

        return $this->json(['votes' => $this->currentVoteCount]);
    }
}