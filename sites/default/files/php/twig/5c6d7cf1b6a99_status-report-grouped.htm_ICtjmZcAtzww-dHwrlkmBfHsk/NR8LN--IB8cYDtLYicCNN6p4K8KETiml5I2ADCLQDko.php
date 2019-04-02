<?php

/* core/modules/system/templates/status-report-grouped.html.twig */
class __TwigTemplate_2e731b2280902dada29fb0b74c3f2f99bba145c059d27c3487bc62a5641d0d85 extends Twig_Template
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
        $tags = array("for" => 22, "set" => 28, "if" => 34);
        $filters = array();
        $functions = array("attach_library" => 19, "create_attribute" => 33);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'set', 'if'),
                array(),
                array('attach_library', 'create_attribute')
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("core/drupal.collapse"), "html", null, true));
        echo "

<div>
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grouped_requirements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 23
            echo "    <div>
      <h3 id=\"";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["group"], "type", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true));
            echo "</h3>
      ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
                // line 26
                echo "        <details class=\"system-status-report__entry\" open>
          ";
                // line 28
                $context["summary_classes"] = array(0 => "system-status-report__status-title", 1 => ((twig_in_filter($this->getAttribute(                // line 30
$context["group"], "type", array()), array(0 => "warning", 1 => "error"))) ? (("system-status-report__status-icon system-status-report__status-icon--" . $this->getAttribute($context["group"], "type", array()))) : ("")));
                // line 33
                echo "          <summary";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(array("class" => ($context["summary_classes"] ?? null))), "html", null, true));
                echo " role=\"button\">
            ";
                // line 34
                if ($this->getAttribute($context["requirement"], "severity_title", array())) {
                    // line 35
                    echo "              <span class=\"visually-hidden\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["requirement"], "severity_title", array()), "html", null, true));
                    echo "</span>
            ";
                }
                // line 37
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["requirement"], "title", array()), "html", null, true));
                echo "
          </summary>
          <div class=\"system-status-report__entry__value\">
            ";
                // line 40
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["requirement"], "value", array()), "html", null, true));
                echo "
            ";
                // line 41
                if ($this->getAttribute($context["requirement"], "description", array())) {
                    // line 42
                    echo "              <div class=\"description\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["requirement"], "description", array()), "html", null, true));
                    echo "</div>
            ";
                }
                // line 44
                echo "          </div>
        </details>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/status-report-grouped.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 49,  112 => 47,  104 => 44,  98 => 42,  96 => 41,  92 => 40,  85 => 37,  79 => 35,  77 => 34,  72 => 33,  70 => 30,  69 => 28,  66 => 26,  62 => 25,  56 => 24,  53 => 23,  49 => 22,  43 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/modules/system/templates/status-report-grouped.html.twig", "/Applications/MAMP/htdocs/drupal/core/modules/system/templates/status-report-grouped.html.twig");
    }
}
