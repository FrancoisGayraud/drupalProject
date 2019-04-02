<?php

/* core/modules/system/templates/admin-block.html.twig */
class __TwigTemplate_aec487a08f0cece4cf051f401612ca3f14d00666f7469486f57ea7a05d5ce810 extends Twig_Template
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
        $tags = array("set" => 19, "if" => 24);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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
        $context["classes"] = array(0 => "panel");
        // line 23
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 24
        if ($this->getAttribute(($context["block"] ?? null), "title", array())) {
            // line 25
            echo "    <h3 class=\"panel__title\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["block"] ?? null), "title", array()), "html", null, true));
            echo "</h3>
  ";
        }
        // line 27
        echo "  ";
        if ($this->getAttribute(($context["block"] ?? null), "content", array())) {
            // line 28
            echo "    <div class=\"panel__content\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["block"] ?? null), "content", array()), "html", null, true));
            echo "</div>
  ";
        } elseif ($this->getAttribute(        // line 29
($context["block"] ?? null), "description", array())) {
            // line 30
            echo "    <div class=\"panel__description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["block"] ?? null), "description", array()), "html", null, true));
            echo "</div>
  ";
        }
        // line 32
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/admin-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 32,  68 => 30,  66 => 29,  61 => 28,  58 => 27,  52 => 25,  50 => 24,  45 => 23,  43 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/modules/system/templates/admin-block.html.twig", "/Applications/MAMP/htdocs/drupal/core/modules/system/templates/admin-block.html.twig");
    }
}
