<?php
namespace App\Controller;
use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //shortcut methods
use Symfony\Component\Routing\Annotation\Route; //only thing needed to enable annotation routes
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Cache\CacheInterface;

//ALL CONTROLLERS MUST RETURN RESPONSE


class QuestionController extends AbstractController {
    //Mismarauder's Tavern
    
    /**
     * @Route("/", name="app_cauldron_overflow_homepage")
     * Build the home page
     */
    public function homepage(): Response
    {
        /*
        // fun example of using the Twig service directly!
        $html = $twigEnvironment->render('question/homepage.html.twig');
        return new Response($html);
        */

        //return a Symfony Response object (Symfony\Component\HttpFoundation\Response)
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("/questions/{question}", name="app_cauldron_overflow_question")
     * Build the question page
     */

    public function show($question, MarkdownParserInterface $markdownParser, CacheInterface $cache): Response
    {
        dump($markdownParser);
        $question = ucwords(str_replace('-', ' ', $question)) . '?';

        $questionText = 'I\'ve been turned into a cat, any thoughts on how to turn back? While I\'m **adorable**, I don\'t really care for cat food.';

        $parsedQuestionText = $cache->get('markdown_'.md5($questionText), function() use ($questionText, $markdownParser) {
            return $markdownParser->transformMarkdown($questionText);
        });

        $answers = [
            'Make sure your cat is sitting `purrrfectly` still ?',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe... try saying the spell backwards?',
        ];
        dump($question, $this);
        return $this->render('question/show.html.twig', [
            'question' => $question,
            'questionText' => $parsedQuestionText,
            'answers' => $answers,
        ]);
    }
}