<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default.html.twig */
class __TwigTemplate_0f10004e02d81bc177439cf2244b6cae4af8c4f8d68c1f78bc321f6b0cf08482 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        // line 5
        echo "
  <div class=\"colophon\">
    ";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/typotheque"], "method"), "content", []));
        echo "
  </div> 

  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", [0 => "/typotheque"], "method"), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["workshop"]) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["workshop"], "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
                // line 12
                echo "    <div class=\"entree-font\" data-workshop-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["workshop"], "title", []), "html", null, true);
                echo "\" data-workshop-annee=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["workshop"], "header", []), "custom", []), "anneeworkshop", []), "html", null, true);
                echo "\" data-workshop-invite=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["workshop"], "header", []), "custom", []), "inviteworkshop", []), "html", null, true);
                echo "\" data-workshop-informations=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["workshop"], "content", []), "html", null, true);
                echo "\">
          <h1 class=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["font"], "title", []), "html", null, true);
                echo "\" data-font-date=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["font"], "header", []), "custom", []), "datesortie", []), "html", null, true);
                echo "\" data-font-lientelechargement=\"";
                echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["font"], "route", []), "html", null, true);
                echo "/fichiersfontes/";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["font"], "header", []), "custom", []), "archivezip", [])), "name", []), "html", null, true);
                echo "\" data-font-auteur=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["font"], "header", []), "custom", []), "auteur", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["font"], "title", []), "html", null, true);
                echo "</h1>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workshop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 17,  92 => 16,  72 => 13,  61 => 12,  56 => 11,  52 => 10,  46 => 7,  42 => 5,  39 => 4,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}


{% block content %}

  <div class=\"colophon\">
    {{ page.find('/typotheque').content|markdown }}
  </div> 

  {% for workshop in pages.find('/typotheque').children %}
    {% for font in workshop.children %}
    <div class=\"entree-font\" data-workshop-name=\"{{ workshop.title }}\" data-workshop-annee=\"{{ workshop.header.custom.anneeworkshop }}\" data-workshop-invite=\"{{ workshop.header.custom.inviteworkshop }}\" data-workshop-informations=\"{{ workshop.content }}\">
          <h1 class=\"{{ font.title }}\" data-font-date=\"{{ font.header.custom.datesortie }}\" data-font-lientelechargement=\"{{ base_url_absolute }}{{font.route}}/fichiersfontes/{{font.header.custom.archivezip|first.name}}\" data-font-auteur=\"{{ font.header.custom.auteur }}\">{{ font.title }}</h1>
    </div>
    {% endfor %}
  {% endfor %}
  
{% endblock %}

", "default.html.twig", "/home/edi0th/www/typotheque-prevert/typotheque-prevert/user/themes/typotheque-prevert/templates/default.html.twig");
    }
}
