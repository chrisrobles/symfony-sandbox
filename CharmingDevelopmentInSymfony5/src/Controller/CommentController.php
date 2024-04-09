<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id<\d+>}/vote/{direction<up|down>}", name="app_commentvote", methods="POST")
     */
    public function commentVote(int $id, string $direction, LoggerInterface $logger): Response
    {
        // todo - use id to query the database

        // todo - save the direction to the database

        // temporary fake logic
        if($direction == 'up') {
            $logger->info("Voting Up!");
            $currentVoteCount = rand(7, 100);
        }
        else {
            $logger->info("Voting Down!");
            $currentVoteCount = rand(0, 5);
        }
        // WACK return new Response(json_encode($currentVoteCount));
        // WACK return new JsonResponse(["votes" => $currentVoteCount]);
        return $this->json(["votes" => $currentVoteCount]);
    }
}