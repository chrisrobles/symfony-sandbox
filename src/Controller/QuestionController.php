<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class QuestionController {
    //The Mismarauder's Tavern
    public function homepage(): Response //build the page
    {
        //return a Symfony Response object (Symfony\Component\HttpFoundation
        return new Response("What a bewitching controller we have conjured!");
    }
}