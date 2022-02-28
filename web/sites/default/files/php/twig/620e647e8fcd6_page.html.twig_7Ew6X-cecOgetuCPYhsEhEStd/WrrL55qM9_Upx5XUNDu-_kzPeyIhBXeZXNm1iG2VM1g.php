<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/foxnews/template/page.html.twig */
class __TwigTemplate_08ca768abbb150d942aa699f38100bc525f4fcc36ab7a5cd6a68b74ab45f6fb7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/foxnews/template/page.html.twig"));

        // line 1
        echo "<div class=\"layout-container\">

  <header class=\"banner\">
    ";
        // line 5
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "
    ";
        // line 7
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_menu_top", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "
    ";
        // line 9
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_menu_bottom", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
  </header>

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 14
        echo "
    ";
        // line 18
        echo "    ";
        // line 24
        echo "
    ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 25)) {
            // line 26
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 31)) {
            // line 32
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 36
        echo "
  </main>

  ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 39)) {
            // line 40
            echo "    <footer role=\"contentinfo\">
      ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 44
        echo "
</div> ";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/foxnews/template/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 44,  108 => 41,  105 => 40,  103 => 39,  98 => 36,  92 => 33,  89 => 32,  87 => 31,  84 => 30,  78 => 27,  75 => 26,  73 => 25,  70 => 24,  68 => 18,  65 => 14,  57 => 9,  52 => 7,  47 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"layout-container\">

  <header class=\"banner\">
    {# Logo #}
    {{ page.logo }}
    {# Menu List Top #}
    {{ page.navigation_menu_top }}
    {# Menu List Bottom #}
    {{ page.navigation_menu_bottom }}
  </header>

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

    {# <div class=\"layout-content\">
      {{ page.content }}
    </div>/.layout-content #}
    {# {{ page.left_sidebar}}
    {{ page.content }}
    {{ page.right_sidebar}}

    {{ page.content_list }}
    {{ page.content_first }} #}

    {% if page.sidebar_first %}
      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        {{ page.sidebar_first }}
      </aside>
    {% endif %}

    {% if page.sidebar_second %}
      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        {{ page.sidebar_second }}
      </aside>
    {% endif %}

  </main>

  {% if page.footer %}
    <footer role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endif %}

</div> {# layout-container #}
", "themes/custom/foxnews/template/page.html.twig", "/var/www/html/foxnews/web/themes/custom/foxnews/template/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 25);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
