<?php

/* themes/yg_corporate/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_d2660cd041f876cc7e60be2a99a21c005651c4a5d94f67edab7aa841279f14c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/yg_corporate/templates/block/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 16, "if" => 19);
        $filters = array();
        $functions = array("url" => 18);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
                array('url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 16
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "site-branding"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "      \t<a class=\"navbar-brand\" href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "\">
 \t\t  ";
        // line 19
        if ((($context["site_logo"] ?? null) != "")) {
            // line 20
            echo "\t\t    \t<img src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true));
            echo "\" alt=\"Header Logo\" class=\"\" title=\"Header Logo\">
\t\t    ";
        } else {
            // line 22
            echo "\t\t    \t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
            echo "
\t\t    ";
        }
        // line 24
        echo "    \t</a>
";
    }

    public function getTemplateName()
    {
        return "themes/yg_corporate/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  71 => 22,  65 => 20,  63 => 19,  58 => 18,  55 => 17,  51 => 1,  49 => 16,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_corporate/templates/block/block--system-branding-block.html.twig", "/Users/deepak.kumar/Documents/html/drupal-local/themes/yg_corporate/templates/block/block--system-branding-block.html.twig");
    }
}
