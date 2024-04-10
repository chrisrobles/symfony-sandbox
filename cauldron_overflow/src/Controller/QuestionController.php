<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("What a bewitching controller we have conjured!");
    }

    /**
     * @Route("/questions/{question}")
     */
    public function show($question)
    {
        return new Response(sprintf("Future page to show the question \"%s\"!", ucwords(str_replace("-", " ", $question))));
    }
}