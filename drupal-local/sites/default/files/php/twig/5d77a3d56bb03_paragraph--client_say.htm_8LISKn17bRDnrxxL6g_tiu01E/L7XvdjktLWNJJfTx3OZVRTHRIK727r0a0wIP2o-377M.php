<?php

/* themes/yg_corporate/templates/paragraph/paragraph--client_say.html.twig */
class __TwigTemplate_7e462ff82cf2b9ff9f3c3c665786265aaaae750ea353156da70dacd472b27435 extends Twig_Template
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
        $functions = array("file_url" => 4);

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
        echo "<div class=\"col-lg-6\">
    <div class=\"test-inner \">
       <div class=\"test-author-thumb d-flex\">
           <img src=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_client_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
        echo "\"
             class=\"img-fluid\" 
             alt=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_client_image", array()), "#items", array(), "array"), "alt", array()), "html", null, true));
        echo "\" 
             title=\"";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_client_image", array()), "#items", array(), "array"), "title", array()), "html", null, true));
        echo "\">
           <div class=\"test-author-info\">
               <h4>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_client_name", array()), 0, array()), "html", null, true));
        echo "</h4>
               <h6>";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_business_name", array()), 0, array()), "html", null, true));
        echo "</h6>
           </div>
       </div>

        <p>";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_client_said", array()), 0, array()), "html", null, true));
        echo "</p>
        <i class=\"fa fa-quote-right\"></i>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/yg_corporate/templates/paragraph/paragraph--client_say.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  66 => 10,  62 => 9,  57 => 7,  53 => 6,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_corporate/templates/paragraph/paragraph--client_say.html.twig", "/Users/deepak.kumar/Documents/html/drupal-local/themes/yg_corporate/templates/paragraph/paragraph--client_say.html.twig");
    }
}
