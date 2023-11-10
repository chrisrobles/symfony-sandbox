<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction}")
     */
    public function commentVote(int $id, string $direction): Response
    {
        // todo - use id to query the database

        // todo - save the direction to the database

        // temporary fake logic
        if($direction == 'up') {
            $currentVoteCount = rand(7, 100);
        }
        else {
            $currentVoteCount = rand(0, 5);
        }
        // WACK return new Response(json_encode($currentVoteCount));
        // WACK return new JsonResponse(["votes" => $currentVoteCount]);
        return $this->json(["votes" => $currentVoteCount]);
    }
}