<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //shortcut methods
use Symfony\Component\Routing\Annotation\Route; //only thing needed to enable annotation routes
use Symfony\Component\HttpFoundation\Response; //ALL CONTROLLERS MUST RETURN RESPONSE


class QuestionController extends AbstractController {
    //The Mismarauder's Tavern
    
    /**
     * @Route("/")
     * Build the home page
     */
    public function homepage(): Response
    {
        //return a Symfony Response object (Symfony\Component\HttpFoundation
        return new Response("What a bewitching controller we have conjured!");
    }

    /**
     * @Route("/questions/{question}")
     * Build the question page
     */

    public function show($question): Response
    {
        $question = ucwords(str_replace('-', ' ', $question)) . '?';
        $answers = [
            'Make sure your cat is sitting purrrfectly still ?',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe... try saying the spell backwards?',
        ];
        return $this->render('question/show.html.twig', [
            'question' => $question,
            'answers' => $answers
        ]);
    }
}