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
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('assets', $context, $blocks);
        // line 51
        echo "</head>
<body id=\"top\" class=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []));
        echo "\">

";
        // line 54
        $this->displayBlock('header', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('footer', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('bottom', $context, $blocks);
        // line 75
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
    <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []));
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []));
        echo "</title>

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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "        @font-face {
            font-family: '";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []), "html", null, true);
            echo "';
            src: url('";
            // line 19
            echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "route", []), "html", null, true);
            echo "/fichiersfontes/";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "header", []), "custom", []), "fichiertypo", [])), "name", []), "html", null, true);
            echo "') format('woff');
        }
        .";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []), "html", null, true);
            echo "{
            font-family:";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []), "html", null, true);
            echo ";
        }
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </style>
    <style class=\"color\">
        :root{ 
            --color: #895d5d; 
            }
    </style>
    <style class=\"background\">
\t\t:root {
\t\t\t--background: white;
\t\t}
\t</style>
";
    }

    // line 38
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 39
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 98], "method");
    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        // line 43
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 44
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/functions.js", 1 => 99], "method");
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 47
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 48
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 49
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 54
    public function block_header($context, array $blocks = [])
    {
        // line 55
        echo "    <div class=\"header\">
        Typothèque DNMAD Lycée Jacques Prévert
    </div>
";
    }

    // line 60
    public function block_body($context, array $blocks = [])
    {
        // line 61
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 63
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "        </div>
    </section>
";
    }

    // line 63
    public function block_content($context, array $blocks = [])
    {
    }

    // line 68
    public function block_footer($context, array $blocks = [])
    {
        // line 69
        echo "
";
    }

    // line 72
    public function block_bottom($context, array $blocks = [])
    {
        // line 73
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
        return array (  257 => 73,  254 => 72,  249 => 69,  246 => 68,  241 => 63,  235 => 64,  233 => 63,  229 => 61,  226 => 60,  219 => 55,  216 => 54,  209 => 49,  204 => 48,  201 => 47,  191 => 44,  188 => 43,  185 => 42,  180 => 39,  177 => 38,  162 => 25,  153 => 22,  149 => 21,  141 => 19,  137 => 18,  134 => 17,  130 => 16,  124 => 13,  120 => 12,  117 => 11,  115 => 10,  104 => 6,  101 => 5,  98 => 4,  90 => 75,  88 => 72,  85 => 71,  83 => 68,  80 => 67,  78 => 60,  75 => 59,  73 => 54,  68 => 52,  65 => 51,  63 => 47,  60 => 46,  58 => 42,  55 => 41,  53 => 38,  50 => 37,  48 => 4,  43 => 2,  40 => 1,);
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
    <title>{% if header.title %}{{ header.title|e }} | {% endif %}{{ site.title|e }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png')|e }}\" />
    <link rel=\"canonical\" href=\"{{ page.canonical(true)|e }}\" />

    <style>
        {% for post in pages.find('/typotheque').children %}
        @font-face {
            font-family: '{{post.title}}';
            src: url('{{ base_url_absolute }}{{post.route}}/fichiersfontes/{{post.header.custom.fichiertypo|first.name}}') format('woff');
        }
        .{{ post.title }}{
            font-family:{{ post.title }};
        }
        {% endfor %}
    </style>
    <style class=\"color\">
        :root{ 
            --color: #895d5d; 
            }
    </style>
    <style class=\"background\">
\t\t:root {
\t\t\t--background: white;
\t\t}
\t</style>
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
        Typothèque DNMAD Lycée Jacques Prévert
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
", "partials/base.html.twig", "/home/edi0th/www/typotheque-prevert/user/themes/typotheque-prevert/templates/partials/base.html.twig");
    }
}
