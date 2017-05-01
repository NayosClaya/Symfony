<?php

/* ::layout.html.twig */
class __TwigTemplate_1443b17f5e80b443bcdb8cbdc509c237110e732741e217997700a9aa7d0b94b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
\t\t<header class=\"container-fluid\">
\t\t\t<div class=\"row navy h70\">
\t\t\t\t<div class=\"col-md-4\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/imie.png"), "html", null, true);
        echo "\" alt=\"LOGO\"  width=\"45%\"/></div>
\t\t\t\t<div class=\"col-md-8  right m20\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-envelope main\">Contact</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row white h550 \">
\t\t\t\t<nav class=\"col-md-4 h550 border\">
\t\t\t\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imie_homepage", array("name" => "Anthony"));
        echo "\" class=\"btn btn-primary w100 m5\">Hello</a>
\t\t\t\t\t<a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imie_tableau");
        echo "\" class=\"btn btn-primary w100 m5\">Tableau</a>
\t\t\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article");
        echo "\" class=\"btn btn-primary w100 m5\">Liste Article CRUD</a>
\t\t\t\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imie_list_article");
        echo "\" class=\"btn btn-primary w100 m5\">Liste Article</a>
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragmentStrategy("esi", $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("IMIEBundle:Default:arrivage"));
        echo "
\t\t\t\t</nav>
\t\t\t\t<article class=\"col-md-8 h550\">
\t\t\t\t\t\t";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        echo "\t\t
\t\t\t\t</article>
\t\t\t</div>
\t\t</div>\t
\t\t<footer class=\"container-fluid\">
\t\t\t<div class=\"row h70 navy\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<iframe class=\"m30\" src=\"https://www.google.com/maps/d/embed?mid=1hEdG6weB-gEfc2NYFRDCXuE_484&hl=en_US\" width=\"320\" height=\"240\"></iframe>\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 h240 \">
\t\t\t\t\t<h2 >Pourquoi l'utiliser?</h2>
\t\t\t\t\t<p>
\t\t\t\t\tOn sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).
\t\t\t\t\t</p>
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 h240\">
\t\t\t\t\t<h2>Pourquoi l'utiliser?</h2>
\t\t\t\t\t<p>
\t\t\t\t\tOn sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).
\t\t\t\t\t</p>\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
       
        ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t   <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t   <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/layout_01.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        // line 56
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("JQuery/jQuery.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t\t\t<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t\t\t
\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 57,  139 => 56,  136 => 55,  131 => 30,  125 => 8,  120 => 7,  117 => 6,  111 => 5,  105 => 61,  103 => 55,  75 => 30,  69 => 27,  65 => 26,  61 => 25,  57 => 24,  53 => 23,  41 => 14,  35 => 10,  33 => 6,  29 => 5,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::layout.html.twig", "C:\\wamp\\www\\DL19\\app_avt/Resources\\views/layout.html.twig");
    }
}
