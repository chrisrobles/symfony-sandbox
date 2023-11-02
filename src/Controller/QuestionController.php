<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; //only thing needed to enable annotation routes

class QuestionController {
    //The Mismarauder's Tavern

    /**
     * @Route("/")
     */
    public function homepage(): Response //build the page
    {
        //return a Symfony Response object (Symfony\Component\HttpFoundation
        return new Response("What a bewitching controller we have conjured!");
    }

    /**
     * @Route("/questions/{question}")
     */
    public function show($question): Response
    {
        $question = ucwords(str_replace('-', ' ', $question));
        $question .= '?';
        return new Response($question);
    }
}