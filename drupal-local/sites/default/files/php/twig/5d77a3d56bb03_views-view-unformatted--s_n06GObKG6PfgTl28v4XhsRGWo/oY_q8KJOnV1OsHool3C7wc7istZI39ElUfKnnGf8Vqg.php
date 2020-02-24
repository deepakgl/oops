<?php

/* themes/yg_corporate/templates/views/views-view-unformatted--sliders.html.twig */
class __TwigTemplate_d84f98665631ad894da4288dae65f551204b02ac562325e91d01af1c0db95b57 extends Twig_Template
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
        $tags = array("for" => 5);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
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
        echo "<section class=\"banner-area\" id=\"main-banner-1\">
<div class=\"overlay\">
   <div class=\"carousel slide\" id=\"main-slider\">
       <div class=\"carousel-inner\">
          ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 6
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </div>
          <a class=\"carousel-control-prev\" href=\"#main-slider\" role=\"button\" data-slide=\"prev\">
            <span class=\"fa fa-angle-left\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
          </a>
          <a class=\"carousel-control-next\" href=\"#main-slider\" role=\"button\" data-slide=\"next\">
            <span class=\"fa fa-angle-right\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
          </a>
   </div>
  </div>
</section>
<!-- End Banner slider Section  -->";
    }

    public function getTemplateName()
    {
        return "themes/yg_corporate/templates/views/views-view-unformatted--sliders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  53 => 6,  49 => 5,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_corporate/templates/views/views-view-unformatted--sliders.html.twig", "/Users/deepak.kumar/Documents/html/drupal-local/themes/yg_corporate/templates/views/views-view-unformatted--sliders.html.twig");
    }
}
