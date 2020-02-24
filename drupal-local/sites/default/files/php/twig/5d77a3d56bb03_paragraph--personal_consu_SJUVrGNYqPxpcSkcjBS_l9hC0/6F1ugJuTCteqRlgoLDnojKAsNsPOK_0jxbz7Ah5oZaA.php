<?php

/* themes/yg_corporate/templates/paragraph/paragraph--personal_consultation.html.twig */
class __TwigTemplate_7594e49c350afa2597cd654b037977b52e75e735a0a57484231a9f2bc84fc417 extends Twig_Template
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
        $functions = array("file_url" => 3);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array('file_url')
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
        echo "<!-- Start Contact Section -->
<section class=\"bg-no-repeat bg-cover bg-fixed\" 
          style=\"background-image: url(";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_background_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
        echo ");\">
    <div class=\"row no-gutters justify-content-end\">
    <div class=\"col-12 col-md-12 col-lg-6\">
    </div>
      <div class=\"col-12 col-md-12 col-lg-6 contact-bg-res\">
        <div class=\"call-to-action theme-bg\">
          <h2>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", array()), 0, array()), "html", null, true));
        echo "</h2>
          <p>";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_description", array()), 0, array()), "html", null, true));
        echo "</p>
          <div class=\"m-btn-bar\">
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", array()), 0, array()), "#url", array(), "array"), "html", null, true));
        echo "\" class=\"btn m-btn-white\">
              ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", array()), 0, array()), "#title", array(), "array"), "html", null, true));
        echo "
            </a>
            <a href=\"tel:";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_telephone_no", array()), 0, array()), "html", null, true));
        echo "\" class=\"contact-num\">
              ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_telephone_no", array()), 0, array()), "html", null, true));
        echo "
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- End Contact Section -->";
    }

    public function getTemplateName()
    {
        return "themes/yg_corporate/templates/paragraph/paragraph--personal_consultation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  74 => 15,  69 => 13,  65 => 12,  60 => 10,  56 => 9,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_corporate/templates/paragraph/paragraph--personal_consultation.html.twig", "/Users/deepak.kumar/Documents/html/drupal-local/themes/yg_corporate/templates/paragraph/paragraph--personal_consultation.html.twig");
    }
}
