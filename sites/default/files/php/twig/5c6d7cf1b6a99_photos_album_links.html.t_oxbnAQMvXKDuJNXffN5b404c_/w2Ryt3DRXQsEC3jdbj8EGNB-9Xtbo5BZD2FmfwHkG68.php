<?php

/* modules/photos/templates/photos_album_links.html.twig */
class __TwigTemplate_ea33e5b2927ce417b86f66ca910697ca8be327eeea3909703620592fe49c0997 extends Twig_Template
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
        $tags = array("if" => 7, "trans" => 10);
        $filters = array("t" => 19);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
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

        // line 7
        if (($this->getAttribute(($context["links"] ?? null), "link", array()) || $this->getAttribute(($context["links"] ?? null), "count", array()))) {
            // line 8
            echo "  <div class=\"photos-album-links\">
    <div class=\"photos-link-info\">
      ";
            // line 10
            echo \Drupal::translation()->formatPlural(abs($this->getAttribute(            // line 12
($context["links"] ?? null), "count", array())), "@links.count image", "@links.count images", array("@links.count" => $this->getAttribute(            // line 11
($context["links"] ?? null), "count", array()), "@links.count" => $this->getAttribute(            // line 13
($context["links"] ?? null), "count", array()), ));
            // line 15
            echo "
      ";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["links_display"] ?? null), "html", null, true));
            echo "
    </div>
    <div class=\"photos-link-sort\">
      <span>";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Sort by")));
            echo ":</span>
      ";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["links_sort"] ?? null), "html", null, true));
            echo "
    </div>
    ";
            // line 22
            if ($this->getAttribute(($context["links"] ?? null), "limit", array())) {
                // line 23
                echo "      <div class=\"photos-link-limit\">
        <span>";
                // line 24
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Limit")));
                echo ":</span>
        ";
                // line 25
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["links_limit"] ?? null), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 28
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/photos/templates/photos_album_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  81 => 25,  77 => 24,  74 => 23,  72 => 22,  67 => 20,  63 => 19,  57 => 16,  54 => 15,  52 => 13,  51 => 11,  50 => 12,  49 => 10,  45 => 8,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/photos/templates/photos_album_links.html.twig", "/Applications/MAMP/htdocs/drupal/modules/photos/templates/photos_album_links.html.twig");
    }
}
