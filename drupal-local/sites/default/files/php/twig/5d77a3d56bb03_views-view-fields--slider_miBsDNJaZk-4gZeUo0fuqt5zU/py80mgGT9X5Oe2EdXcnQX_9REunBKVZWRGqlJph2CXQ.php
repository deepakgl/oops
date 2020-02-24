<?php

/* themes/yg_corporate/templates/views/views-view-fields--sliders.html.twig */
class __TwigTemplate_2a7ec8f67f24d67d5f1fc889743b9a371c08613bcb5ad813a3856ccc23b3ba88 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
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

        // line 1
        echo "<div class=\"carousel-item\" style=\"background-image: url(";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_background_image", array()), "content", array()), "html", null, true));
        echo ");\" >
   <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10 banner-caption\">
                <div class=\"main-banner style-2\">
                    <span class=\"text-uppercase subtitle\">
                        ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_subtitle", array()), "content", array()), "html", null, true));
        echo "
                    </span>
                    <h2 class=\"display-4\">
                        ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
        echo "
                    </h2>
                    <p class=\"lead\">
                        ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_description", array()), "content", array()), "html", null, true));
        echo "
                    </p>
                    ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_link", array()), "content", array()), "html", null, true));
        echo "
                </div>
            </div>
        </div> 
    </div> 
</div>";
    }

    public function getTemplateName()
    {
        return "themes/yg_corporate/templates/views/views-view-fields--sliders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  65 => 13,  59 => 10,  53 => 7,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_corporate/templates/views/views-view-fields--sliders.html.twig", "/Users/deepak.kumar/Documents/html/drupal-local/themes/yg_corporate/templates/views/views-view-fields--sliders.html.twig");
    }
}
