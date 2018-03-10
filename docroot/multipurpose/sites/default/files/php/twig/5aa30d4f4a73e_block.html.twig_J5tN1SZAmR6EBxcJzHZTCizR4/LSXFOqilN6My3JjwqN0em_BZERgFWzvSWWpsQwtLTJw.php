<?php

/* profiles/multipurpose_corporate_profile/themes/adaptivetheme/at_core/templates/block/block.html.twig */
class __TwigTemplate_800e1201a7f2a7838767c285c049f57636f142ffd409f7b4ffba42e410f6ed8f extends Twig_Template
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
        $tags = array("set" => 28, "if" => 40, "block" => 45);
        $filters = array("clean_class" => 30, "clean_id" => 32);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 'clean_id'),
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

        // line 28
        $context["classes"] = array(0 => "block", 1 => ("block-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 30
($context["configuration"] ?? null), "provider", array()))), 2 => ("block-derivative-plugin--" . \Drupal\Component\Utility\Html::getClass(        // line 31
($context["derivative_plugin_id"] ?? null))), 3 => ("block-id--" . \Drupal\Component\Utility\Html::getId($this->getAttribute(        // line 32
($context["attributes"] ?? null), "id", array()))), 4 => ((        // line 33
($context["label"] ?? null)) ? ("has-title") : ("")));
        // line 36
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  <div class=\"block__inner\">

    ";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
    ";
        // line 40
        if (($context["label"] ?? null)) {
            // line 41
            echo "      <h2 id=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "block__title"), "method"), "html", null, true));
            echo "><span>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</span></h2>
    ";
        }
        // line 43
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

    ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "
  </div>
</div>
";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "      <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "block__content"), "method"), "html", null, true));
        echo ">
        ";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "profiles/multipurpose_corporate_profile/themes/adaptivetheme/at_core/templates/block/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 47,  91 => 46,  88 => 45,  81 => 50,  79 => 45,  73 => 43,  63 => 41,  61 => 40,  57 => 39,  50 => 36,  48 => 33,  47 => 32,  46 => 31,  45 => 30,  44 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/multipurpose_corporate_profile/themes/adaptivetheme/at_core/templates/block/block.html.twig", "/var/www/html/multipurpose/profiles/multipurpose_corporate_profile/themes/adaptivetheme/at_core/templates/block/block.html.twig");
    }
}
