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

/* themes/custom/foxnews/template/block--system-branding-block.html.twig */
class __TwigTemplate_a3e6cd354afd0ef2f06827f86623f8a655a97427345837b099902aa1cedeb857 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/foxnews/template/block--system-branding-block.html.twig"));

        // line 14
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "  <div class=\"site-branding\">
    <div class=\"container\">
    ";
        // line 17
        if (($context["site_logo"] ?? null)) {
            // line 18
            echo "      <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" rel=\"home\" class=\"site-branding__logo\">
        <picture>
          <source media=\"(max-width:480px)\" srcset=\"../assets/images/logo/fox-news-logo-small.svg\">
          <img class=\"logo_image\" src=\"";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 21, $this->source), "html", null, true);
            echo "\" />
        </picture>
      </a>
      
    ";
        }
        // line 26
        echo "    </div>
  </div>

  ";
        // line 29
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 30
            echo "    <div class=\"site-branding__text\">
      ";
            // line 31
            if (($context["site_name"] ?? null)) {
                // line 32
                echo "        <div class=\"site-branding__name\">
          <a href=\"";
                // line 33
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 33, $this->source), "html", null, true);
                echo "</a>
        </div>
      ";
            }
            // line 36
            echo "      ";
            if (($context["site_slogan"] ?? null)) {
                // line 37
                echo "        <div class=\"site-branding__slogan\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 37, $this->source), "html", null, true);
                echo "</div>
      ";
            }
            // line 39
            echo "    </div>
  ";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/foxnews/template/block--system-branding-block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 39,  103 => 37,  100 => 36,  92 => 33,  89 => 32,  87 => 31,  84 => 30,  82 => 29,  77 => 26,  69 => 21,  62 => 18,  60 => 17,  56 => 15,  43 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends \"block.html.twig\" %} #}
{#

 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}
{# {% set attributes = attributes.addClass('site-branding') %} #}
{% block content %}
  <div class=\"site-branding\">
    <div class=\"container\">
    {% if site_logo %}
      <a href=\"{{ path('<front>') }}\" rel=\"home\" class=\"site-branding__logo\">
        <picture>
          <source media=\"(max-width:480px)\" srcset=\"../assets/images/logo/fox-news-logo-small.svg\">
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
", "themes/custom/foxnews/template/block--system-branding-block.html.twig", "/var/www/html/foxnews/web/themes/custom/foxnews/template/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 14, "if" => 17);
        static $filters = array("escape" => 21);
        static $functions = array("path" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
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
