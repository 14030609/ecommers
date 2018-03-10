<?php

/* profiles/multipurpose_corporate_profile/themes/multipurpose_corporate_theme/templates/html.html.twig */
class __TwigTemplate_eb62ce3c0bc27578ecd7efe0b2eb1b62793827ffd013e2ac25266ed66622829b extends Twig_Template
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
        $tags = array("set" => 42, "if" => 49);
        $filters = array("raw" => 66, "safe_join" => 67, "clean_class" => 74, "t" => 86);
        $functions = array("attach_library" => 39);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('raw', 'safe_join', 'clean_class', 't'),
                array('attach_library')
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

        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary(($this->getAttribute(($context["theme"] ?? null), "name", array()) . "/global-styling")), "html", null, true));
        echo "
<!DOCTYPE html>
";
        // line 42
        $context["html_classes"] = array(0 => "no-js", 1 => "adaptivetheme");
        // line 47
        echo "<html";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["html_attributes"] ?? null), "addClass", array(0 => ($context["html_classes"] ?? null)), "method"), "html", null, true));
        echo ">
  <head>
    ";
        // line 49
        if ((($context["touch_icons"] ?? null) == true)) {
            // line 50
            echo "      ";
            if (($context["touch_icon_ipad_retina"] ?? null)) {
                // line 51
                echo "        <link href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_icon_ipad_retina"] ?? null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_rel"] ?? null), "html", null, true));
                echo "\" sizes=\"152x152\" />
      ";
            }
            // line 53
            echo "      ";
            if (($context["touch_icon_iphone_retina"] ?? null)) {
                // line 54
                echo "        <link href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_icon_iphone_retina"] ?? null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_rel"] ?? null), "html", null, true));
                echo "\" sizes=\"120x120\" />
      ";
            }
            // line 56
            echo "      ";
            if (($context["touch_icon_ipad"] ?? null)) {
                // line 57
                echo "        <link href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_icon_ipad"] ?? null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_rel"] ?? null), "html", null, true));
                echo "\" sizes=\"76x76\" />
      ";
            }
            // line 59
            echo "      ";
            if (($context["touch_icon_default"] ?? null)) {
                // line 60
                echo "        <link href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_icon_default"] ?? null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_rel"] ?? null), "html", null, true));
                echo "\" sizes=\"60x60\" />
      ";
            }
            // line 62
            echo "      ";
            if (($context["touch_icon_nokia"] ?? null)) {
                // line 63
                echo "        <link href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_icon_nokia"] ?? null), "html", null, true));
                echo "\" rel=\"shortcut icon\" />
      ";
            }
            // line 65
            echo "    ";
        }
        // line 66
        echo "    <head-placeholder token=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <title>";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, ($context["head_title"] ?? null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 68
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <js-placeholder token=\"";
        // line 69
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
  </head>
  ";
        // line 72
        $context["body_classes"] = array(0 => ((        // line 73
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 74
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), 2 => (($this->getAttribute(        // line 75
($context["path_info"] ?? null), "args", array())) ? (("path-" . $this->getAttribute(($context["path_info"] ?? null), "args", array()))) : ("")), 3 => (($this->getAttribute(        // line 76
($context["path_info"] ?? null), "query", array())) ? (("path-query-" . $this->getAttribute(($context["path_info"] ?? null), "query", array()))) : ("")), 4 => ((        // line 77
($context["node_type"] ?? null)) ? (("node--type-" . ($context["node_type"] ?? null))) : ("")), 5 => (($this->getAttribute(        // line 78
($context["url"] ?? null), "path", array())) ? (("page--url-" . $this->getAttribute(($context["url"] ?? null), "path", array()))) : ("")), 6 => (($this->getAttribute(        // line 79
($context["head_title_array"] ?? null), "name", array())) ? (("site-name--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(($context["head_title_array"] ?? null), "name", array())))) : ("")), 7 => (($this->getAttribute(        // line 80
($context["theme"] ?? null), "name", array())) ? (("theme-name--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(($context["theme"] ?? null), "name", array())))) : ("")), 8 => ((        // line 81
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 9 => (($this->getAttribute(        // line 82
($context["page"] ?? null), "sidebar_second", array())) ? ("one-sidebar sidebar-second") : ("")));
        // line 85
        echo "  <body ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["body_classes"] ?? null)), "method"), "html", null, true));
        echo ">
    <a href=\"";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["skip_link_target"] ?? null), "html", null, true));
        echo "\" class=\"visually-hidden focusable skip-link\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content")));
        echo "</a>
    ";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true));
        echo "
    ";
        // line 88
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true));
        echo "
    ";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 90
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "profiles/multipurpose_corporate_profile/themes/multipurpose_corporate_theme/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 90,  163 => 89,  159 => 88,  155 => 87,  149 => 86,  144 => 85,  142 => 82,  141 => 81,  140 => 80,  139 => 79,  138 => 78,  137 => 77,  136 => 76,  135 => 75,  134 => 74,  133 => 73,  132 => 72,  127 => 69,  123 => 68,  119 => 67,  114 => 66,  111 => 65,  105 => 63,  102 => 62,  94 => 60,  91 => 59,  83 => 57,  80 => 56,  72 => 54,  69 => 53,  61 => 51,  58 => 50,  56 => 49,  50 => 47,  48 => 42,  43 => 39,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/multipurpose_corporate_profile/themes/multipurpose_corporate_theme/templates/html.html.twig", "/var/www/html/multipurpose/profiles/multipurpose_corporate_profile/themes/multipurpose_corporate_theme/templates/html.html.twig");
    }
}
