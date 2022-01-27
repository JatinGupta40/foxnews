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

/* modules/menu_item_extras/templates/menu-link-content.html.twig */
class __TwigTemplate_d1a6726fdeb375c8bcf24302982ed5ff23645da8170293f4e361078d0e92343e extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/menu_item_extras/templates/menu-link-content.html.twig"));

        // line 15
        $macros["menu"] = $this->macros["menu"] = $this;
        // line 16
        echo "
";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menu"], "macro_build_menu_link_content", [($context["attributes"] ?? null), ($context["menu_link_content"] ?? null), ($context["show_item_link"] ?? null), ($context["content"] ?? null), ($context["elements"] ?? null)], 17, $context, $this->getSourceContext()));
        echo "

";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 19
    public function macro_build_menu_link_content($__attributes__ = null, $__menu_link_content__ = null, $__show_item_link__ = null, $__content__ = null, $__elements__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "menu_link_content" => $__menu_link_content__,
            "show_item_link" => $__show_item_link__,
            "content" => $__content__,
            "elements" => $__elements__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "build_menu_link_content"));

            // line 20
            echo "  ";
            $context["menu_dropdown_classes"] = [0 => "menu-dropdown", 1 => ((twig_get_attribute($this->env, $this->source,             // line 22
($context["elements"] ?? null), "#menu_level", [], "array", true, true, true, 22)) ? (("menu-dropdown-" . $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["elements"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#menu_level"] ?? null) : null), 22, $this->source))) : ("")), 2 => (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =             // line 23
($context["elements"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["#view_mode"] ?? null) : null)) ? (("menu-type-" . $this->sandbox->ensureToStringAllowed((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["elements"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["#view_mode"] ?? null) : null), 23, $this->source))) : (""))];
            // line 25
            echo "
  <div";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["menu_dropdown_classes"] ?? null)], "method", false, false, true, 26), 26, $this->source), "html", null, true);
            echo ">
    ";
            // line 27
            if (($context["show_item_link"] ?? null)) {
                // line 28
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu_link_content"] ?? null), "getTitle", [], "method", false, false, true, 28), 28, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menu_link_content"] ?? null), "getUrlObject", [], "method", false, false, true, 28), 28, $this->source)), "html", null, true);
                echo "
    ";
            }
            // line 30
            echo "    ";
            if (($context["content"] ?? null)) {
                // line 31
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 31, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 33
            echo "  </div>
";
            
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "modules/menu_item_extras/templates/menu-link-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 33,  100 => 31,  97 => 30,  91 => 28,  89 => 27,  85 => 26,  82 => 25,  80 => 23,  79 => 22,  77 => 20,  57 => 19,  47 => 17,  44 => 16,  42 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to present a menu link entity entity.
 *
 * Available variables:
 * - menu_link_content: Menu link entity.
 * - show_item_link: Indicator for menu item link.
 *
 * @see template_preprocess_menu_link_content()
 *
 * @ingroup themeable
 */
#}
{% import _self as menu %}

{{ menu.build_menu_link_content(attributes, menu_link_content, show_item_link, content, elements) }}

{% macro build_menu_link_content(attributes, menu_link_content, show_item_link, content, elements) %}
  {% set menu_dropdown_classes = [
    'menu-dropdown',
    elements['#menu_level'] is defined ? 'menu-dropdown-' ~ elements['#menu_level'],
    elements['#view_mode'] ? 'menu-type-' ~ elements['#view_mode'],
  ] %}

  <div{{ attributes.addClass(menu_dropdown_classes) }}>
    {% if show_item_link %}
      {{ link(menu_link_content.getTitle(), menu_link_content.getUrlObject()) }}
    {% endif %}
    {% if content %}
      {{ content }}
    {% endif %}
  </div>
{% endmacro %}
", "modules/menu_item_extras/templates/menu-link-content.html.twig", "/var/www/html/foxnews/web/modules/menu_item_extras/templates/menu-link-content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 15, "macro" => 19, "set" => 20, "if" => 27);
        static $filters = array("escape" => 26);
        static $functions = array("link" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'set', 'if'],
                ['escape'],
                ['link']
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
