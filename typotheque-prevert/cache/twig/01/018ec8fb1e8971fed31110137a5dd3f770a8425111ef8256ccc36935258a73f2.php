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

/* partials/base.html.twig */
class __TwigTemplate_b6d052444fb3ddd693a7251a0a86ffa0d4e4f52cf28084f63959b13a866be83c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))));
        echo "\">
<head>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('assets', $context, $blocks);
        // line 45
        echo "</head>
<body id=\"top\" class=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []));
        echo "\">

";
        // line 48
        $this->displayBlock('header', $context, $blocks);
        // line 53
        echo "

";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('bottom', $context, $blocks);
        // line 70
        echo "
</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "    <meta charset=\"utf-8\" />
    <title>Typothèque Lycée Jacques Prévert</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo.png"));
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "canonical", [0 => true], "method"));
        echo "\" />

    <style>
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", [0 => "/typotheque"], "method"), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["workshop"]) {
            // line 17
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["workshop"], "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
                // line 18
                echo "        @font-face {
            font-family: '";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["font"], "title", []), "html", null, true);
                echo "';
            src: url('";
                // line 20
                echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["font"], "route", []), "html", null, true);
                echo "/fichiersfontes/";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["font"], "header", []), "custom", []), "fichiertypo", [])), "name", []), "html", null, true);
                echo "') format('woff');
        }
        .";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["font"], "title", []), "html", null, true);
                echo "{
            font-family:";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["font"], "title", []), "html", null, true);
                echo ";
        }
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workshop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
    </style>

";
    }

    // line 32
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 33
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 98], "method");
    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        // line 37
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 38
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/functions.js", 1 => 99], "method");
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 41
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 42
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 43
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 48
    public function block_header($context, array $blocks = [])
    {
        // line 49
        echo "    <div class=\"header\">
        Typothèque DNMADE Lycée Jacques Prévert
    </div>
";
    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        // line 56
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "        </div>
    </section>
";
    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
    }

    // line 63
    public function block_footer($context, array $blocks = [])
    {
        // line 64
        echo "
";
    }

    // line 67
    public function block_bottom($context, array $blocks = [])
    {
        // line 68
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 68,  251 => 67,  246 => 64,  243 => 63,  238 => 58,  232 => 59,  230 => 58,  226 => 56,  223 => 55,  216 => 49,  213 => 48,  206 => 43,  201 => 42,  198 => 41,  188 => 38,  185 => 37,  182 => 36,  177 => 33,  174 => 32,  167 => 27,  161 => 26,  152 => 23,  148 => 22,  140 => 20,  136 => 19,  133 => 18,  128 => 17,  124 => 16,  118 => 13,  114 => 12,  111 => 11,  109 => 10,  102 => 5,  99 => 4,  91 => 70,  89 => 67,  86 => 66,  84 => 63,  81 => 62,  79 => 55,  75 => 53,  73 => 48,  68 => 46,  65 => 45,  63 => 41,  60 => 40,  58 => 36,  55 => 35,  53 => 32,  50 => 31,  48 => 4,  43 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ (grav.language.getActive ?: grav.config.site.default_lang)|e }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>Typothèque Lycée Jacques Prévert</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png')|e }}\" />
    <link rel=\"canonical\" href=\"{{ page.canonical(true)|e }}\" />

    <style>
  {% for workshop in pages.find('/typotheque').children %}
    {% for font in workshop.children %}
        @font-face {
            font-family: '{{font.title}}';
            src: url('{{ base_url_absolute }}{{font.route}}/fichiersfontes/{{font.header.custom.fichiertypo|first.name}}') format('woff');
        }
        .{{ font.title }}{
            font-family:{{ font.title }};
        }
    {% endfor %}
   {% endfor %}

    </style>

{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/custom.css', 98) %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 100) %}
    {% do assets.addJs('theme://js/functions.js', 99) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes|e }}\">

{% block header %}
    <div class=\"header\">
        Typothèque DNMADE Lycée Jacques Prévert
    </div>
{% endblock %}


{% block body %}
    <section id=\"body\">
        <div class=\"wrapper padding\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}

{% block footer %}

{% endblock %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/Applications/MAMP/htdocs/typotheque-prevert/typotheque-prevert/user/themes/typotheque-prevert/templates/partials/base.html.twig");
    }
}
