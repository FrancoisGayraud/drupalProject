<?php

/* modules/photos/templates/photos_image_view.html.twig */
class __TwigTemplate_3243a59f7d24aa0a8404a3d64af83242e3f803b32c261d99b6a39055704083d8 extends Twig_Template
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
        $tags = array("if" => 7, "trans" => 64);
        $filters = array("t" => 88);
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
        if ((($context["display_type"] ?? null) == "list")) {
            // line 8
            echo "  <div class=\"photos-image-list-view\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "ajax", array()), "del_id", array()), "html", null, true));
            echo ">
    <div class=\"photos-list-view-thumb\">
      <a href=\"";
            // line 10
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["image"] ?? null), "url", array()), "html", null, true));
            echo "#image-load\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["image"] ?? null), "view", array()), "html", null, true));
            echo "</a>
    </div>
    <h2 class=\"photos-list-view-title";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "class", array()), "title_class", array()), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "id", array()), "title_edit", array()), "html", null, true));
            echo ">
      ";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["image"] ?? null), "title", array()), "html", null, true));
            echo "
    </h2>
    <div class=\"photos-list-view-des";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "class", array()), "des_class", array()), "html", null, true));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "id", array()), "des_edit", array()), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["image"] ?? null), "des", array()), "html", null, true));
            echo "</div>
    <div class=\"photos-list-view-info\">

      ";
            // line 18
            if ($this->getAttribute($this->getAttribute(($context["image"] ?? null), "ajax", array()), "del_link", array())) {
                // line 19
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "ajax", array()), "del_link", array()), "html", null, true));
                echo "
      ";
            }
            // line 21
            echo "
      ";
            // line 22
            if ($this->getAttribute($this->getAttribute(($context["image"] ?? null), "ajax", array()), "edit_link", array())) {
                // line 23
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "ajax", array()), "edit_link", array()), "html", null, true));
                echo "
      ";
            }
            // line 25
            echo "
      ";
            // line 26
            if ($this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "info", array())) {
                // line 27
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "info", array()), "html", null, true));
                echo "
      ";
            }
            // line 29
            echo "
      ";
            // line 30
            if ($this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "count", array())) {
                // line 31
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "count", array()), "html", null, true));
                echo "
      ";
            }
            // line 33
            echo "
      ";
            // line 34
            if ($this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "cover", array())) {
                // line 35
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "cover", array()), "html", null, true));
                echo "
      ";
            }
            // line 37
            echo "
      ";
            // line 38
            if ($this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "comment", array())) {
                // line 39
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "comment", array()), "html", null, true));
                echo "
      ";
            }
            // line 41
            echo "
    </div>
  </div>

";
        } else {
            // line 46
            echo "
  <div id=\"image-load\" class=\"image-load\">
    <h2 class=\"photos-view-title";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "class", array()), "title_class", array()), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "id", array()), "title_edit", array()), "html", null, true));
            echo ">
      ";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["image"] ?? null), "title", array()), "html", null, true));
            echo "
    </h2>
    <div class=\"photos-view-des";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "class", array()), "des_class", array()), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "id", array()), "des_edit", array()), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["image"] ?? null), "des", array()), "html", null, true));
            echo "</div>
    <div class=\"photos-view-links\">
      <div class=\"photo-links-info\">

        ";
            // line 55
            if ($this->getAttribute($this->getAttribute(($context["image"] ?? null), "ajax", array()), "del_link", array())) {
                // line 56
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "ajax", array()), "del_link", array()), "html", null, true));
                echo "
        ";
            }
            // line 58
            echo "
        ";
            // line 59
            if ($this->getAttribute($this->getAttribute(($context["image"] ?? null), "ajax", array()), "edit_link", array())) {
                // line 60
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "ajax", array()), "edit_link", array()), "html", null, true));
                echo "
        ";
            }
            // line 62
            echo "
        ";
            // line 63
            if ( !$this->getAttribute(($context["image"] ?? null), "disable_photos_image_count", array())) {
                // line 64
                echo "          ";
                echo \Drupal::translation()->formatPlural(abs($this->getAttribute(                // line 66
($context["image"] ?? null), "count", array())), "@image.count visit", "@image.count visits", array("@image.count" => $this->getAttribute(                // line 65
($context["image"] ?? null), "count", array()), "@image.count" => $this->getAttribute(                // line 67
($context["image"] ?? null), "count", array()), ));
                // line 69
                echo "        ";
            }
            // line 70
            echo "
        ";
            // line 71
            if ($this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "comment", array())) {
                // line 72
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "comment", array()), "html", null, true));
                echo "
        ";
            }
            // line 74
            echo "
        ";
            // line 75
            if ($this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "cover", array())) {
                // line 76
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "cover", array()), "html", null, true));
                echo "
        ";
            }
            // line 78
            echo "
        ";
            // line 79
            if ($this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "more", array())) {
                // line 80
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "more", array()), "html", null, true));
                echo "
        ";
            }
            // line 82
            echo "
      </div>
    </div>
    <div class=\"photo-link-pager\">
      ";
            // line 86
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "pager", array()), "prev_url", array())) {
                // line 87
                echo "        <div class=\"photo-pager-left\">
          <a href=\"";
                // line 88
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "pager", array()), "prev_url", array()), "html", null, true));
                echo "#image-load\">&laquo; ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("previous")));
                echo "</a>
        </div>
      ";
            }
            // line 91
            echo "
      ";
            // line 92
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "pager", array()), "next_url", array())) {
                // line 93
                echo "        <div class=\"photo-pager-right\">
          <a href=\"";
                // line 94
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["image"] ?? null), "links", array()), "pager", array()), "next_url", array()), "html", null, true));
                echo "#image-load\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("next")));
                echo " &raquo;</a>
        </div>
      ";
            }
            // line 97
            echo "    </div>
    <div class=\"photos-image\">";
            // line 98
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["image"] ?? null), "view", array()), "html", null, true));
            echo "</div>
  </div>
  ";
            // line 100
            if ($this->getAttribute($this->getAttribute(($context["image"] ?? null), "comment", array()), "view", array())) {
                // line 101
                echo "    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "comment", array()), "view", array()), "html", null, true));
                echo "
  ";
            }
            // line 103
            echo "  ";
            if ($this->getAttribute($this->getAttribute(($context["image"] ?? null), "comment", array()), "box", array())) {
                // line 104
                echo "    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "comment", array()), "box", array()), "html", null, true));
                echo "
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "modules/photos/templates/photos_image_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 104,  292 => 103,  286 => 101,  284 => 100,  279 => 98,  276 => 97,  268 => 94,  265 => 93,  263 => 92,  260 => 91,  252 => 88,  249 => 87,  247 => 86,  241 => 82,  235 => 80,  233 => 79,  230 => 78,  224 => 76,  222 => 75,  219 => 74,  213 => 72,  211 => 71,  208 => 70,  205 => 69,  203 => 67,  202 => 65,  201 => 66,  199 => 64,  197 => 63,  194 => 62,  188 => 60,  186 => 59,  183 => 58,  177 => 56,  175 => 55,  164 => 51,  159 => 49,  153 => 48,  149 => 46,  142 => 41,  136 => 39,  134 => 38,  131 => 37,  125 => 35,  123 => 34,  120 => 33,  114 => 31,  112 => 30,  109 => 29,  103 => 27,  101 => 26,  98 => 25,  92 => 23,  90 => 22,  87 => 21,  81 => 19,  79 => 18,  69 => 15,  64 => 13,  58 => 12,  51 => 10,  45 => 8,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/photos/templates/photos_image_view.html.twig", "/Applications/MAMP/htdocs/drupal/modules/photos/templates/photos_image_view.html.twig");
    }
}
