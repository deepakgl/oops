<?php

/* themes/yg_corporate/templates/layout/page--front.html.twig */
class __TwigTemplate_c760ec738d8b756ae689dccb357e8a07242c9db5d2174340a6c8a1bde0c7a7d9 extends Twig_Template
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
        $tags = array("set" => 14, "if" => 15);
        $filters = array("render" => 15);
        $functions = array("url" => 14);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('render'),
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

        // line 1
        echo "
<div class=\"main-menu-area\" id=\"main-menu\">
  <div class=\"container\">
      <nav class=\"navbar navbar-expand-lg navbar-white site-navigation navbar-togglable\">
          ";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "logo", array()), "html", null, true));
        echo "
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"fa fa-bars\"></span>
          </button>
          ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
        echo "
      </nav>
  </div>
</div>
<!-- End NavBar -->
";
        // line 14
        $context["url"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>");
        // line 15
        if (twig_in_filter("user", $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["url"] ?? null))))) {
            echo "     
  <section class=\"section page-title bg-fixed bg-cover\" style=\"background-image: url(";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["banner_image"] ?? null), "html", null, true));
            echo ");\">
  <div class=\"container\">
    <div class=\"row align-items-center justify-content-center\">
      <div class=\"col-md-6\">
        <div class=\"service-banner\">
          <h1>";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "#title", array(), "array"), "html", null, true));
            echo "</h1>
        </div>
      </div>
    </div>
  </div>
</section>
";
        }
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "

<!-- Start Footer Section  -->
<footer class=\"footer\">
  <div class=\"footer-section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 m-15px-tb col-md-6\">
          <div class=\"footer-content\">
            ";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_col_1", array()), "html", null, true));
        echo "
            <ul class=\"social-icons\">
              <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook"] ?? null), "html", null, true));
        echo "\"><i class=\"fa fa-facebook-f\"></i></a></li>
              <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter"] ?? null), "html", null, true));
        echo "\"><i class=\"fa fa-twitter\"></i></a></li>
              <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["instagram"] ?? null), "html", null, true));
        echo "\"><i class=\"fa fa-instagram\"></i></a></li>
              <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["codepen"] ?? null), "html", null, true));
        echo "\"><i class=\"fa fa-codepen\"></i></a></li>
              <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["github"] ?? null), "html", null, true));
        echo "\"><i class=\"fa fa-github-alt\"></i></a></li>
              <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["skype"] ?? null), "html", null, true));
        echo "\"><i class=\"fa fa-skype\"></i></a></li>
            </ul>
          </div>
        </div>
        <div class=\"col-lg-2 m-15px-tb col-md-6\">
          <div class=\"footer-content\">
              ";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_col_2", array()), "html", null, true));
        echo "
          </div>
        </div>
        <div class=\"col-lg-2 m-15px-tb col-md-6\">
          <div class=\"footer-content\">
              ";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_col_3", array()), "html", null, true));
        echo "
            </div>
        </div>
        <div class=\"col-lg-4 m-15px-tb col-md-6\">
          <div class=\"footer-newsletter\">
            ";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_col_4", array()), "html", null, true));
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"fot-copyright\">
      <div class=\"col-md-6 mx-auto text-center wow fadeInDown\" data-wow-delay=\"0.3s\">
        <p>© 2018 <span><a href=\"#\">YG Corporate</a></span>. All Rights Reserved. </p>
        <p>Theme By<a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\"> Drupal Developers Studio</a>, A Division of <a href=\"https://www.youngglobes.com/\" target=\"_blank\">Young Globes</a></p>
      </div>  
  </div>
</footer>
<!-- End Footer Section  -->";
    }

    public function getTemplateName()
    {
        return "themes/yg_corporate/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 60,  142 => 55,  134 => 50,  125 => 44,  121 => 43,  117 => 42,  113 => 41,  109 => 40,  105 => 39,  100 => 37,  88 => 28,  78 => 21,  70 => 16,  66 => 15,  64 => 14,  56 => 9,  49 => 5,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_corporate/templates/layout/page--front.html.twig", "/Users/deepak.kumar/Documents/html/drupal-local/themes/yg_corporate/templates/layout/page--front.html.twig");
    }
}
