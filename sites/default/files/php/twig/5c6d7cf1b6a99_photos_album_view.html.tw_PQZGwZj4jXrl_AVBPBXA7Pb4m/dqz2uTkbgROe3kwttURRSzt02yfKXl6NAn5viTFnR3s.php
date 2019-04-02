<?php

/* modules/photos/templates/photos_album_view.html.twig */
class __TwigTemplate_0d2ebe6b287d2a9d2656a5ebc5a730d3f60453ab813d4894d619a27088101bb1 extends Twig_Template
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
        $tags = array("if" => 14, "trans" => 30, "for" => 49);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans', 'for'),
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

        // line 14
        if (( !twig_test_empty($this->getAttribute(($context["album"] ?? null), "album_url", array())) ||  !twig_test_empty($this->getAttribute(($context["album"] ?? null), "node_edit_url", array())))) {
            // line 15
            echo "<div class=\"photos-album-menu\">
  ";
            // line 16
            if ($this->getAttribute($this->getAttribute(($context["album"] ?? null), "access", array()), "edit", array())) {
                // line 17
                echo "    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["album"] ?? null), "node_edit_url", array()), "html", null, true));
                echo "
    ";
                // line 18
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["album"] ?? null), "image_management_url", array()), "html", null, true));
                echo "
  ";
            }
            // line 20
            echo "</div>
";
        }
        // line 22
        if ((($context["node_type"] ?? null) == "photos")) {
            // line 23
            echo "  <div class=\"photos-album-header\">
    ";
            // line 24
            if ($this->getAttribute(($context["album"] ?? null), "cover", array())) {
                // line 25
                echo "      <div class=\"photos-album-cover\">
        ";
                // line 26
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["album"] ?? null), "cover", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 29
            echo "    <div class=\"photos-album-right\">
      ";
            // line 30
            echo \Drupal::translation()->formatPlural(abs($this->getAttribute($this->getAttribute(            // line 32
($context["node"] ?? null), "album", array()), "count", array())), "@node.album.count image", "@node.album.count images", array("@node.album.count" => $this->getAttribute($this->getAttribute(            // line 31
($context["node"] ?? null), "album", array()), "count", array()), "@node.album.count" => $this->getAttribute($this->getAttribute(            // line 33
($context["node"] ?? null), "album", array()), "count", array()), ));
            // line 35
            echo "      <div class=\"submitted\">
        ";
            // line 36
            echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 37
            echo "      </div>
    </div>
  </div>
";
        }
        // line 41
        echo "
";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["album"] ?? null), "links", array()), "html", null, true));
        echo "

";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
        echo "

";
        // line 46
        if ((($context["display_type"] ?? null) == "grid")) {
            // line 47
            echo "  <div class=\"photos-album-grid\">
    <div class=\"photos-row photos-row-0\">
      ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["album"] ?? null), "view", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["view"]) {
                // line 50
                echo "        <div class=\"photos-col photos-col-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true));
                echo "\" style=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["grid_col_width"] ?? null), "html", null, true));
                echo "\">
          ";
                // line 51
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["view"], "html", null, true));
                echo "
        </div>
        ";
                // line 53
                if ((($this->getAttribute($context["loop"], "index", array()) % ($context["grid_col_count"] ?? null)) == 0)) {
                    // line 54
                    echo "          </div>
          <div class=\"photos-row ";
                    // line 55
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("photos-row-" . (int) floor(($this->getAttribute($context["loop"], "index", array()) / ($context["grid_col_count"] ?? null)))), "html", null, true));
                    echo "\">
        ";
                }
                // line 57
                echo "      ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    </div>
  </div>
";
        } else {
            // line 61
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["album"] ?? null), "view", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["view"]) {
                // line 62
                echo "    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["view"], "html", null, true));
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 65
        echo "
";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/photos/templates/photos_album_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 66,  191 => 65,  181 => 62,  176 => 61,  171 => 58,  157 => 57,  152 => 55,  149 => 54,  147 => 53,  142 => 51,  135 => 50,  118 => 49,  114 => 47,  112 => 46,  107 => 44,  102 => 42,  99 => 41,  93 => 37,  91 => 36,  88 => 35,  86 => 33,  85 => 31,  84 => 32,  83 => 30,  80 => 29,  74 => 26,  71 => 25,  69 => 24,  66 => 23,  64 => 22,  60 => 20,  55 => 18,  50 => 17,  48 => 16,  45 => 15,  43 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/photos/templates/photos_album_view.html.twig", "/Applications/MAMP/htdocs/drupal/modules/photos/templates/photos_album_view.html.twig");
    }
}
