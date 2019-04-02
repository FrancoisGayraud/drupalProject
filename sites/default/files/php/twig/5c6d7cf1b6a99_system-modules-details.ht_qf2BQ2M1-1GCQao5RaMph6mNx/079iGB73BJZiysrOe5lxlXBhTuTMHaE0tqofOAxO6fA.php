<?php

/* core/modules/system/templates/system-modules-details.html.twig */
class __TwigTemplate_5d97d4ff589702eca14b1c6dfaf39de9cff166e9f5103f4a3e66faa04a591ff2 extends Twig_Template
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
        $tags = array("for" => 36, "set" => 37, "if" => 52);
        $filters = array("t" => 30);
        $functions = array("cycle" => 37);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'set', 'if'),
                array('t'),
                array('cycle')
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

        // line 27
        echo "<table class=\"responsive-enabled\">
  <thead>
    <tr>
      <th class=\"checkbox visually-hidden\">";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Installed")));
        echo "</th>
      <th class=\"name visually-hidden\">";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name")));
        echo "</th>
      <th class=\"description visually-hidden priority-low\">";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Description")));
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 37
            echo "      ";
            $context["zebra"] = twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index0", array()));
            // line 38
            echo "      <tr";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "addClass", array(0 => ($context["zebra"] ?? null)), "method"), "html", null, true));
            echo ">
        <td class=\"checkbox\">
          ";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "checkbox", array()), "html", null, true));
            echo "
        </td>
        <td class=\"module\">
          <label id=\"";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true));
            echo "\" for=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "enable_id", array()), "html", null, true));
            echo "\" class=\"module-name table-filter-text-source\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true));
            echo "</label>
        </td>
        <td class=\"description expand priority-low\">
          <details class=\"js-form-wrapper form-wrapper\" id=\"";
            // line 46
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "enable_id", array()), "html", null, true));
            echo "-description\">
            <summary aria-controls=\"";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "enable_id", array()), "html", null, true));
            echo "-description\" role=\"button\" aria-expanded=\"false\"><span class=\"text module-description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "description", array()), "html", null, true));
            echo "</span></summary>
            <div class=\"details-wrapper\">
              <div class=\"details-description\">
                <div class=\"requirements\">
                  <div class=\"admin-requirements\">";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Machine name: <span dir=\"ltr\" class=\"table-filter-text-source\">@machine-name</span>", array("@machine-name" => $this->getAttribute($context["module"], "machine_name", array())))));
            echo "</div>
                  ";
            // line 52
            if ($this->getAttribute($context["module"], "version", array())) {
                // line 53
                echo "                    <div class=\"admin-requirements\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Version: @module-version", array("@module-version" => $this->getAttribute($context["module"], "version", array())))));
                echo "</div>
                  ";
            }
            // line 55
            echo "                  ";
            if ($this->getAttribute($context["module"], "requires", array())) {
                // line 56
                echo "                    <div class=\"admin-requirements\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Requires: @module-list", array("@module-list" => $this->getAttribute($context["module"], "requires", array())))));
                echo "</div>
                  ";
            }
            // line 58
            echo "                  ";
            if ($this->getAttribute($context["module"], "required_by", array())) {
                // line 59
                echo "                    <div class=\"admin-requirements\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Required by: @module-list", array("@module-list" => $this->getAttribute($context["module"], "required_by", array())))));
                echo "</div>
                  ";
            }
            // line 61
            echo "                </div>
                ";
            // line 62
            if ($this->getAttribute($context["module"], "links", array())) {
                // line 63
                echo "                  <div class=\"links\">
                    ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(array(0 => "help", 1 => "permissions", 2 => "configure"));
                foreach ($context['_seq'] as $context["_key"] => $context["link_type"]) {
                    // line 65
                    echo "                      ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["module"], "links", array()), $context["link_type"], array(), "array"), "html", null, true));
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link_type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                  </div>
                ";
            }
            // line 69
            echo "              </div>
            </div>
          </details>
        </td>
      </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/system-modules-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 75,  173 => 69,  169 => 67,  160 => 65,  156 => 64,  153 => 63,  151 => 62,  148 => 61,  142 => 59,  139 => 58,  133 => 56,  130 => 55,  124 => 53,  122 => 52,  118 => 51,  109 => 47,  105 => 46,  95 => 43,  89 => 40,  83 => 38,  80 => 37,  63 => 36,  56 => 32,  52 => 31,  48 => 30,  43 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/modules/system/templates/system-modules-details.html.twig", "/Applications/MAMP/htdocs/drupal/core/modules/system/templates/system-modules-details.html.twig");
    }
}
