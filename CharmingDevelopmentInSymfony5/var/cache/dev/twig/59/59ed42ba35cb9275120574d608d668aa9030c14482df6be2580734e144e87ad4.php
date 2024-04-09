<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* question/show.html.twig */
class __TwigTemplate_032746589dbcdc2ca11689dce5a5a2a9ff6192f8f933547b7f482c140d624863 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Question: ";
        echo twig_escape_filter($this->env, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h2 class=\"my-4\">Question</h2>
                <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                    <div class=\"q-container-show p-4\">
                        <div class=\"row\">
                            <div class=\"col-2 text-center\">
                                <img alt=\"Tisha\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tisha.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\">
                            </div>
                            <div class=\"col\">
                                <h1 class=\"q-title-show\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</h1>
                                <div class=\"q-display p-3\">
                                    <i class=\"fa fa-quote-left mr-3\"></i>
                                    <p class=\"d-inline\">";
        // line 19
        echo (isset($context["questionText"]) || array_key_exists("questionText", $context) ? $context["questionText"] : (function () { throw new RuntimeError('Variable "questionText" does not exist.', 19, $this->source); })());
        echo "</p>
                                    <p class=\"pt-4\"><strong>--Tisha</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"d-flex justify-content-between my-4\">
            <h2 class=\"\">Answers <span style=\"font-size:1.2rem;\">(";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["answers"]) || array_key_exists("answers", $context) ? $context["answers"] : (function () { throw new RuntimeError('Variable "answers" does not exist.', 30, $this->source); })())), "html", null, true);
        echo ")</span></h2>
            <button class=\"btn btn-sm btn-secondary\">Submit an Answer</button>
        </div>



        <ul class=\"list-unstyled\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["answers"]) || array_key_exists("answers", $context) ? $context["answers"] : (function () { throw new RuntimeError('Variable "answers" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 38
            echo "                <li class=\"mb-4\">
                    <div class=\"d-flex justify-content-center\">
                        <div class=\"mr-2 pt-2\">
                            <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tisha.png"), "html", null, true);
            echo "\" width=\"50\" height=\"50\">
                        </div>
                        <div class=\"mr-3 pt-2\">
                            ";
            // line 44
            echo $this->extensions['Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension']->markdown(twig_striptags($context["answer"]));
            echo "
                            <p>-- Mallory</p>
                        </div>
                        <div class=\"vote-arrows flex-fill pt-2\" style=\"min-width: 90px;\">
                            <a class=\"vote-up\" data-direction=\"up\" href=\"#\"><i class=\"far fa-arrow-alt-circle-up\"></i></a>
                            <a class=\"vote-down\" data-direction=\"down\" href=\"#\"><i class=\"far fa-arrow-alt-circle-down\"></i></a>
                            <span class=\"vote-total\">+ 6</span>
                        </div>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </ul>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "question/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 55,  150 => 44,  144 => 41,  139 => 38,  135 => 37,  125 => 30,  111 => 19,  105 => 16,  99 => 13,  89 => 5,  79 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Question: {{ question }}{% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h2 class=\"my-4\">Question</h2>
                <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                    <div class=\"q-container-show p-4\">
                        <div class=\"row\">
                            <div class=\"col-2 text-center\">
                                <img alt=\"Tisha\" src=\"{{ asset('images/tisha.png') }}\" width=\"100\" height=\"100\">
                            </div>
                            <div class=\"col\">
                                <h1 class=\"q-title-show\">{{ question }}</h1>
                                <div class=\"q-display p-3\">
                                    <i class=\"fa fa-quote-left mr-3\"></i>
                                    <p class=\"d-inline\">{{ questionText|raw  }}</p>
                                    <p class=\"pt-4\"><strong>--Tisha</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"d-flex justify-content-between my-4\">
            <h2 class=\"\">Answers <span style=\"font-size:1.2rem;\">({{ answers|length }})</span></h2>
            <button class=\"btn btn-sm btn-secondary\">Submit an Answer</button>
        </div>



        <ul class=\"list-unstyled\">
            {% for answer in answers %}
                <li class=\"mb-4\">
                    <div class=\"d-flex justify-content-center\">
                        <div class=\"mr-2 pt-2\">
                            <img src=\"{{ asset('images/tisha.png')}}\" width=\"50\" height=\"50\">
                        </div>
                        <div class=\"mr-3 pt-2\">
                            {{ answer|striptags|markdown }}
                            <p>-- Mallory</p>
                        </div>
                        <div class=\"vote-arrows flex-fill pt-2\" style=\"min-width: 90px;\">
                            <a class=\"vote-up\" data-direction=\"up\" href=\"#\"><i class=\"far fa-arrow-alt-circle-up\"></i></a>
                            <a class=\"vote-down\" data-direction=\"down\" href=\"#\"><i class=\"far fa-arrow-alt-circle-down\"></i></a>
                            <span class=\"vote-total\">+ 6</span>
                        </div>
                    </div>
                </li>
            {% endfor %}
        </ul>
    </div>
{% endblock %}", "question/show.html.twig", "/home/christian/Downloads/current/symfony-sandbox/templates/question/show.html.twig");
    }
}
