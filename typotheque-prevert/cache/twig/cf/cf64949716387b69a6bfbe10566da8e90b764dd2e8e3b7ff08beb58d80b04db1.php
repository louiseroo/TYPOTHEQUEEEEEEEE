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

/* flex-objects/types/default/buttons/add.html.twig */
class __TwigTemplate_1bd7ca5730424dad149f0a42ebdeae4750486fcbfa644e4ccb167a871d2be4b9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<a id=\"titlebar-button-add\" class=\"button\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["route"] ?? null), "withGravParam", [0 => "", 1 => "add"], "method"), "html", null, true);
        echo "\">
    <i class=\"fa fa-plus\"></i> ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/buttons/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a id=\"titlebar-button-add\" class=\"button\" href=\"{{ route.withGravParam('', 'add') }}\">
    <i class=\"fa fa-plus\"></i> {{ 'PLUGIN_ADMIN.ADD'|tu }}
</a>
", "flex-objects/types/default/buttons/add.html.twig", "/home/edi0th/www/typotheque-prevert/typotheque-prevert/user/plugins/flex-objects/admin/templates/flex-objects/types/default/buttons/add.html.twig");
    }
}
