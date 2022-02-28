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

/* themes/custom/foxnews/template/header/Block/block--system-branding-block.html.twig */
class __TwigTemplate_9e5091bdfc832e6718ca9b1265d44424b8dd2df5d7c983d3887b32fb08e52d5a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/foxnews/template/header/Block/block--system-branding-block.html.twig"));

        $this->parent = $this->loadTemplate("block.html.twig", "themes/custom/foxnews/template/header/Block/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "  <div class=\"site-branding\">
    <div class=\"container\">
    ";
        // line 7
        if (($context["site_logo"] ?? null)) {
            // line 8
            echo "      <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" rel=\"home\" class=\"site-branding__logo\">
        <picture>
          <source media=\"(max-width:480px)\" srcset=\"themes/custom/foxnews/assets/images/logo/fox-news-logo-small.svg\">
          <img class=\"logo_image\" src=\"";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 11, $this->source), "html", null, true);
            echo "\" />
        </picture>
      </a>
      
    ";
        }
        // line 16
        echo "    </div>

  </div>

  ";
        // line 20
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 21
            echo "    <div class=\"site-branding__text\">
      ";
            // line 22
            if (($context["site_name"] ?? null)) {
                // line 23
                echo "        <div class=\"site-branding__name\">
          <a href=\"";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 24, $this->source), "html", null, true);
                echo "</a>
        </div>
      ";
            }
            // line 27
            echo "      ";
            if (($context["site_slogan"] ?? null)) {
                // line 28
                echo "        <div class=\"site-branding__slogan\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 28, $this->source), "html", null, true);
                echo "</div>
      ";
            }
            // line 30
            echo "    </div>
  ";
        }
        // line 32
        echo "
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/foxnews/template/header/Block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  115 => 30,  109 => 28,  106 => 27,  98 => 24,  95 => 23,  93 => 22,  90 => 21,  88 => 20,  82 => 16,  74 => 11,  67 => 8,  65 => 7,  61 => 5,  54 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"block.html.twig\" %}


{% block content %}
  <div class=\"site-branding\">
    <div class=\"container\">
    {% if site_logo %}
      <a href=\"{{ path('<front>') }}\" rel=\"home\" class=\"site-branding__logo\">
        <picture>
          <source media=\"(max-width:480px)\" srcset=\"themes/custom/foxnews/assets/images/logo/fox-news-logo-small.svg\">
          <img class=\"logo_image\" src=\"{{ site_logo }}\" />
        </picture>
      </a>
      
    {% endif %}
    </div>

  </div>

  {% if site_name or site_slogan %}
    <div class=\"site-branding__text\">
      {% if site_name %}
        <div class=\"site-branding__name\">
          <a href=\"{{ path('<front>') }}\" rel=\"home\">{{ site_name }}</a>
        </div>
      {% endif %}
      {% if site_slogan %}
        <div class=\"site-branding__slogan\">{{ site_slogan }}</div>
      {% endif %}
    </div>
  {% endif %}

{% endblock %}
", "themes/custom/foxnews/template/header/Block/block--system-branding-block.html.twig", "/var/www/html/foxnews/web/themes/custom/foxnews/template/header/Block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
        static $filters = array("escape" => 11);
        static $functions = array("path" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['path']
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
