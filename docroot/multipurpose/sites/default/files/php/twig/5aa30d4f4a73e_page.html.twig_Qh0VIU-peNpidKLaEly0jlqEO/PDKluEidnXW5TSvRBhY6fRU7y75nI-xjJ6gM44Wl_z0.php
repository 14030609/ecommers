<?php

/* profiles/multipurpose_corporate_profile/themes/multipurpose_corporate_theme/templates/page.html.twig */
class __TwigTemplate_9b70ba4ab8d9d2a4f170f4800078efda403ad587f908e9e08286947bc255191a extends Twig_Template
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
        $tags = array("if" => 12);
        $filters = array("t" => 15);
        $functions = array("attach_library" => 8);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attach_library"] ?? null), "html", null, true));
        echo "
";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("multipurpose_corporate_theme/multipurpose_corporate_theme.layout.page"), "html", null, true));
        echo "

<div id=\"page-wrapper\">
    <div id=\"page\" class=\"container\">
        ";
        // line 12
        if ($this->getAttribute(($context["page"] ?? null), "leaderboard", array())) {
            // line 13
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "leaderboard", array()), "html", null, true));
            echo "
        ";
        }
        // line 15
        echo "        <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo " \">
            <div class=\"section layout-container clearfix\">
                ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
            </div>
        </header>
        ";
        // line 20
        if ($this->getAttribute(($context["page"] ?? null), "menu_bar", array())) {
            // line 21
            echo "            <div class=\"menu_bar\">
                <div class=\"layout-container section clearfix\" role=\"complementary\">
                    ";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "menu_bar", array()), "html", null, true));
            echo "
                </div>
            </div>
        ";
        }
        // line 27
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "secondary_content", array())) {
            // line 28
            echo "            <div class=\"region-secondary-content\">
                <div class=\"region-inner clearfix\">
                    <div class=\"section\" role=\"complementary\">
                        ";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_content", array()), "html", null, true));
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        // line 36
        echo "        <div id=\"columns\" class=\"columns clearfix\">
            <main id=\"content-column\" class=\"content-column\" role=\"main\">
                <div class=\"content-inner\">
                    ";
        // line 39
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 40
            echo "                        <div class=\"highlighted\">
                            <div class=\"layout-container section clearfix\" role=\"complementary\">
                                ";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 46
        echo "                    <section id=\"main-content\" class=\"contextual-links-region\">
                        <div id=\"content\" class=\"region\">
                            ";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
                        </div>
                    </section>
                </div>
            </main>
            ";
        // line 53
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 54
            echo "                <div class=\"region-sidebar-second sidebar\">
                    <div class=\"region-inner clearfix\">
                        <aside class=\"section\" role=\"complementary\">
                            ";
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
                        </aside>
                    </div>
                </div>
            ";
        }
        // line 62
        echo "        </div>
        ";
        // line 63
        if ($this->getAttribute(($context["page"] ?? null), "tertiary", array())) {
            // line 64
            echo "            <div class=\"region region-tertiary-content\">
                <div class=\"region-inner clearfix\">
                    ";
            // line 66
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tertiary", array()), "html", null, true));
            echo "
                </div>
            </div>
        ";
        }
        // line 70
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 71
            echo "        <footer class=\"site-footer\">
            <div class=\"copyright\">
                <div class=\"copyright-container\">
                    Copyright ©&nbsp;2015 Themes by <a href=\"http://adcisolutions.com/\" title=\"drupal development\">ADCI solutions</a>. All Rights Reserved.
                </div>
            </div>
            <div class=\"region region-footer\">
                <div class=\"region-inner clearfix\">
                    ";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
                </div>
            </div>
        </footer>
        ";
        }
        // line 84
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "profiles/multipurpose_corporate_profile/themes/multipurpose_corporate_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 84,  177 => 79,  167 => 71,  164 => 70,  157 => 66,  153 => 64,  151 => 63,  148 => 62,  140 => 57,  135 => 54,  133 => 53,  125 => 48,  121 => 46,  114 => 42,  110 => 40,  108 => 39,  103 => 36,  95 => 31,  90 => 28,  87 => 27,  80 => 23,  76 => 21,  74 => 20,  68 => 17,  62 => 15,  56 => 13,  54 => 12,  47 => 8,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/multipurpose_corporate_profile/themes/multipurpose_corporate_theme/templates/page.html.twig", "/var/www/html/multipurpose/profiles/multipurpose_corporate_profile/themes/multipurpose_corporate_theme/templates/page.html.twig");
    }
}
