<?php

/* core/modules/system/templates/status-report-general-info.html.twig */
class __TwigTemplate_7bd7de313d3883deb63ca5aaa8014faf085ad9625b60910866ccd4ae23143517 extends Twig_Template
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
        $tags = array("if" => 37);
        $filters = array("t" => 33);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 32
        echo "
<h2>";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("General System Information")));
        echo "</h2>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Drupal Version")));
        echo "</h3>
  ";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["drupal"] ?? null), "value", array()), "html", null, true));
        echo "
  ";
        // line 37
        if ($this->getAttribute(($context["drupal"] ?? null), "description", array())) {
            // line 38
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["drupal"] ?? null), "description", array()), "html", null, true));
            echo "
  ";
        }
        // line 40
        echo "</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last Cron Run")));
        echo "</h3>
  ";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["cron"] ?? null), "value", array()), "html", null, true));
        echo "
  ";
        // line 44
        if ($this->getAttribute(($context["cron"] ?? null), "run_cron", array())) {
            // line 45
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["cron"] ?? null), "run_cron", array()), "html", null, true));
            echo "
  ";
        }
        // line 47
        echo "  ";
        if ($this->getAttribute(($context["cron"] ?? null), "description", array())) {
            // line 48
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["cron"] ?? null), "description", array()), "html", null, true));
            echo "
  ";
        }
        // line 50
        echo "</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Web Server")));
        echo "</h3>
  ";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["webserver"] ?? null), "value", array()), "html", null, true));
        echo "
  ";
        // line 54
        if ($this->getAttribute(($context["webserver"] ?? null), "description", array())) {
            // line 55
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["webserver"] ?? null), "description", array()), "html", null, true));
            echo "
  ";
        }
        // line 57
        echo "</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">";
        // line 59
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("PHP")));
        echo "</h3>
  <h4>";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Version")));
        echo "</h4> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["php"] ?? null), "value", array()), "html", null, true));
        echo "
  ";
        // line 61
        if ($this->getAttribute(($context["php"] ?? null), "description", array())) {
            // line 62
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["php"] ?? null), "description", array()), "html", null, true));
            echo "
  ";
        }
        // line 64
        echo "
  <h4>";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Memory limit")));
        echo "</h4>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["php_memory_limit"] ?? null), "value", array()), "html", null, true));
        echo "
  ";
        // line 66
        if ($this->getAttribute(($context["php_memory_limit"] ?? null), "description", array())) {
            // line 67
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["php_memory_limit"] ?? null), "description", array()), "html", null, true));
            echo "
  ";
        }
        // line 69
        echo "</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Database")));
        echo "</h3>
  <h4>";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Version")));
        echo "</h4>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["database_system_version"] ?? null), "value", array()), "html", null, true));
        echo "
  ";
        // line 73
        if ($this->getAttribute(($context["database_system_version"] ?? null), "description", array())) {
            // line 74
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["database_system_version"] ?? null), "description", array()), "html", null, true));
            echo "
  ";
        }
        // line 76
        echo "
  <h4>";
        // line 77
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("System")));
        echo "</h4>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["database_system"] ?? null), "value", array()), "html", null, true));
        echo "
  ";
        // line 78
        if ($this->getAttribute(($context["database_system"] ?? null), "description", array())) {
            // line 79
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["database_system"] ?? null), "description", array()), "html", null, true));
            echo "
  ";
        }
        // line 81
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/status-report-general-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 81,  188 => 79,  186 => 78,  180 => 77,  177 => 76,  171 => 74,  169 => 73,  163 => 72,  159 => 71,  155 => 69,  149 => 67,  147 => 66,  141 => 65,  138 => 64,  132 => 62,  130 => 61,  124 => 60,  120 => 59,  116 => 57,  110 => 55,  108 => 54,  104 => 53,  100 => 52,  96 => 50,  90 => 48,  87 => 47,  81 => 45,  79 => 44,  75 => 43,  71 => 42,  67 => 40,  61 => 38,  59 => 37,  55 => 36,  51 => 35,  46 => 33,  43 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/modules/system/templates/status-report-general-info.html.twig", "/Applications/MAMP/htdocs/drupal/core/modules/system/templates/status-report-general-info.html.twig");
    }
}
