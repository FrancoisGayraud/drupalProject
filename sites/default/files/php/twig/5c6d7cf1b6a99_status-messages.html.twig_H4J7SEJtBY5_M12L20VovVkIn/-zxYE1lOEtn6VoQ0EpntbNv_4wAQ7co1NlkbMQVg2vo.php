<?php

/* themes/bootstrap/templates/system/status-messages.html.twig */
class __TwigTemplate_49c89d3c3e934fb0733f4448ac1b27e0a4abba0724aa13d2438a44fbe1ec41f9 extends Twig_Template
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
        $tags = array("set" => 30, "for" => 57, "if" => 68);
        $filters = array("default" => 30, "t" => 33, "length" => 71, "first" => 78);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array('default', 't', 'length', 'first'),
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

        // line 30
        $context["classes"] = (($this->getAttribute(($context["attributes"] ?? null), "offsetGet", array(0 => "class"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "offsetGet", array(0 => "class"), "method"), array())) : (array()));
        // line 32
        $context["status_heading"] = array("status" => t("Status message"), "error" => t("Error message"), "warning" => t("Warning message"), "info" => t("Informative message"));
        // line 40
        $context["status_classes"] = array("status" => "success", "error" => "danger", "warning" => "warning", "info" => "info");
        // line 48
        $context["status_roles"] = array("status" => "status", "error" => "alert", "warning" => "alert", "info" => "status");
        // line 55
        echo "<div data-drupal-messages>
  <div class=\"messages__wrapper\">
  ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 58
            echo "    ";
            // line 59
            $context["message_classes"] = array(0 => "alert", 1 => ("alert-" . $this->getAttribute(            // line 61
($context["status_classes"] ?? null), $context["type"], array(), "array")), 2 => "alert-dismissible");
            // line 65
            echo "    ";
            // line 66
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "setAttribute", array(0 => "class", 1 => ($context["classes"] ?? null)), "method"), "addClass", array(0 => ($context["message_classes"] ?? null)), "method"), "setAttribute", array(0 => "role", 1 => $this->getAttribute(($context["status_roles"] ?? null), $context["type"], array(), "array")), "method"), "setAttribute", array(0 => "aria-label", 1 => $this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array")), "method"), "html", null, true));
            echo ">
      <button type=\"button\" role=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
            // line 67
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close")));
            echo "\"><span aria-hidden=\"true\">&times;</span></button>
      ";
            // line 68
            if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array")) {
                // line 69
                echo "        <h2 class=\"sr-only\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array"), "html", null, true));
                echo "</h2>
      ";
            }
            // line 71
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 72
                echo "        <ul class=\"item-list item-list--messages\">
          ";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 74
                    echo "            <li class=\"item item--message\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "        </ul>
      ";
            } else {
                // line 78
                echo "        <p>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo "</p>
      ";
            }
            // line 80
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 82,  112 => 80,  106 => 78,  102 => 76,  93 => 74,  89 => 73,  86 => 72,  83 => 71,  77 => 69,  75 => 68,  71 => 67,  66 => 66,  64 => 65,  62 => 61,  61 => 59,  59 => 58,  55 => 57,  51 => 55,  49 => 48,  47 => 40,  45 => 32,  43 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap/templates/system/status-messages.html.twig", "/Applications/MAMP/htdocs/drupal/themes/bootstrap/templates/system/status-messages.html.twig");
    }
}
