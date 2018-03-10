<?php

/* profiles/multipurpose_corporate_profile/themes/adaptivetheme/at_core/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_ae97166457abf862c3a0bd1b99c508a53e69aa0ff837c8517e07791192eb6a0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 20, "if" => 32, "block" => 37);
        $filters = array("clean_class" => 23, "t" => 47, "e" => 55);
        $functions = array("url" => 47);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't', 'e'),
                array('url')
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

        // line 20
        $context["classes"] = array(0 => "block", 1 => "block-branding", 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 23
($context["configuration"] ?? null), "provider", array()))), 3 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 24
($context["plugin_id"] ?? null))), 4 => ((        // line 25
($context["label"] ?? null)) ? ("has-title") : ("")));
        // line 28
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  <div class=\"block__inner block-branding__inner\">

    ";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
    ";
        // line 32
        if (($context["label"] ?? null)) {
            // line 33
            echo "      <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "block__title"), "method"), "html", null, true));
            echo "><span>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</span></h2>
    ";
        }
        // line 35
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

    ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "
  </div>
</div>
";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "      ";
        // line 39
        $context["content_classes"] = array(0 => "block__content", 1 => "block-branding__content", 2 => "site-branding");
        // line 45
        echo "      <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">
        ";
        // line 46
        if (($context["site_logo"] ?? null)) {
            // line 47
            echo "          <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" itemprop=\"url\" rel=\"home\" class=\"site-branding__logo-link\">
            <img src=\"";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" itemprop=\"logo\" class=\"site-branding__logo-img\" />
          </a>
        ";
        }
        // line 51
        echo "        ";
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 52
            echo "          <span class=\"site-branding__text\">
            ";
            // line 53
            if (($context["site_name"] ?? null)) {
                // line 54
                echo "              <strong class=\"site-branding__name\">
                <a href=\"";
                // line 55
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
                echo "\" itemprop=\"url\" rel=\"home\" class=\"site-branding__name-link\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null)));
                echo "</a>
              </strong>
            ";
            }
            // line 58
            echo "            ";
            if (($context["site_slogan"] ?? null)) {
                // line 59
                echo "              <em class=\"site-branding__slogan\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
                echo "</em>
            ";
            }
            // line 61
            echo "          </span>
        ";
        }
        // line 63
        echo "      </div>
    ";
    }

    public function getTemplateName()
    {
        return "profiles/multipurpose_corporate_profile/themes/adaptivetheme/at_core/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 63,  144 => 61,  138 => 59,  135 => 58,  125 => 55,  122 => 54,  120 => 53,  117 => 52,  114 => 51,  106 => 48,  99 => 47,  97 => 46,  92 => 45,  90 => 39,  88 => 38,  85 => 37,  78 => 65,  76 => 37,  70 => 35,  62 => 33,  60 => 32,  56 => 31,  49 => 28,  47 => 25,  46 => 24,  45 => 23,  44 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/multipurpose_corporate_profile/themes/adaptivetheme/at_core/templates/block/block--system-branding-block.html.twig", "/var/www/html/multipurpose/profiles/multipurpose_corporate_profile/themes/adaptivetheme/at_core/templates/block/block--system-branding-block.html.twig");
    }
}
