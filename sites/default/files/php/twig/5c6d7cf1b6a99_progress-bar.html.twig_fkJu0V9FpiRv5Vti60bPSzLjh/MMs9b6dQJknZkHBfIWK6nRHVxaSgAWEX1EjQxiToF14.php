<?php

/* themes/bootstrap/templates/system/progress-bar.html.twig */
class __TwigTemplate_a2583b94f2c5751b5149b0f990784f031516fbc0363c5b021ecde9695eee9aef extends Twig_Template
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
        $tags = array("if" => 20, "set" => 24);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
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

        // line 19
        echo "<div class=\"progress-wrapper\" aria-live=\"polite\" data-drupal-progress>
  ";
        // line 20
        if (($context["message"] ?? null)) {
            // line 21
            echo "    <div class=\"message\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["message"] ?? null), "html", null, true));
            echo "</div>
  ";
        }
        // line 23
        echo "  ";
        // line 24
        $context["classes"] = array(0 => "progress", 1 => "progress-striped", 2 => "active");
        // line 30
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["percent"] ?? null), "html", null, true));
        echo "%\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-valuenow=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["percent"] ?? null), "html", null, true));
        echo "\">
      <span class=\"percentage\">";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["percent"] ?? null), "html", null, true));
        echo "%</span>
    </div>
  </div>
  ";
        // line 35
        if (($context["label"] ?? null)) {
            // line 36
            echo "    <div class=\"progress-label\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</div>
  ";
        }
        // line 38
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/progress-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 38,  77 => 36,  75 => 35,  69 => 32,  63 => 31,  58 => 30,  56 => 24,  54 => 23,  48 => 21,  46 => 20,  43 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap/templates/system/progress-bar.html.twig", "/Applications/MAMP/htdocs/drupal/themes/bootstrap/templates/system/progress-bar.html.twig");
    }
}
