<?php

/* IMIEBundle:Default:arrivage.html.twig */
class __TwigTemplate_e6dff06b3256e148f68a2fe2f07331a10926884b0d37a3f6c3d3ca391e8bbf7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"border w100\">
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 4
            echo "\t\t<h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "designation", array()), "html", null, true);
            echo "</h2>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "IMIEBundle:Default:arrivage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IMIEBundle:Default:arrivage.html.twig", "C:\\wamp\\www\\DL19\\src\\IMIE\\IMIEBundle/Resources/views/Default/arrivage.html.twig");
    }
}
