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

/* themes/custom/foxnews/template/header/region--navigation-menu-top.html.twig */
class __TwigTemplate_ed106fa4a362d075aff8606479532d798f0e2b8605d5472a42e38ca1fff969bb extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/foxnews/template/header/region--navigation-menu-top.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["content"] ?? null)) {
            // line 4
            echo "  <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menuregion"], "method", false, false, true, 4), 4, $this->source), "html", null, true);
            echo ">
    ";
            // line 5
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 5, $this->source), "html", null, true);
            echo " 
    ";
            // line 7
            echo "    <div class=\"hamburger\">
      <a class=\"menu-toggle hamburgernavbar hamburgericon\">
        <i class=\"fa fa-bars\"></i>
      </a>
    </div>
  </div>
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/foxnews/template/header/region--navigation-menu-top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  52 => 5,  47 => 4,  45 => 3,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Bottom Navigation Menu List #}

{% if content %}
  <div {{ attributes.addClass('menuregion') }}>
    {{ content }} 
    {# Hamburger Menu. #}
    <div class=\"hamburger\">
      <a class=\"menu-toggle hamburgernavbar hamburgericon\">
        <i class=\"fa fa-bars\"></i>
      </a>
    </div>
  </div>
{% endif %}
", "themes/custom/foxnews/template/header/region--navigation-menu-top.html.twig", "/var/www/html/foxnews/web/themes/custom/foxnews/template/header/region--navigation-menu-top.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("escape" => 4);
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
