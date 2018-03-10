<?php

/* profiles/multipurpose_corporate_profile/themes/adaptivetheme/at_core/templates/layout/region.html.twig */
class __TwigTemplate_5786a9b7009e25e65d98bbe1bb1912f21c856bacdcde7a6dc8581166ff733cf8 extends Twig_Template
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
        $tags = array("set" => 25, "if" => 31);
        $filters = array("clean_class" => 28);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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

        // line 25
        $context["classes"] = array(0 => "l-r", 1 => "region", 2 => ((        // line 28
($context["region_row"] ?? null)) ? (((("pr-" . \Drupal\Component\Utility\Html::getClass(($context["region_row"] ?? null))) . "__") . \Drupal\Component\Utility\Html::getClass(($context["region"] ?? null)))) : (\Drupal\Component\Utility\Html::getClass(($context["region"] ?? null)))));
        // line 31
        if (($context["content"] ?? null)) {
            // line 32
            echo "  <div ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "profiles/multipurpose_corporate_profile/themes/adaptivetheme/at_core/templates/layout/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 32,  46 => 31,  44 => 28,  43 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/multipurpose_corporate_profile/themes/adaptivetheme/at_core/templates/layout/region.html.twig", "/var/www/html/multipurpose/profiles/multipurpose_corporate_profile/themes/adaptivetheme/at_core/templates/layout/region.html.twig");
    }
}
