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
    ";
        // line 11
        echo "    <div class=\"hamburgersection\">
      ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hamburger", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
      ";
        // line 14
        echo "      <div class=\"hamburgerfooter\">
        <footer role=\"contentinfo\">
          ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "
          ";
        // line 18
        echo "          <div class=\"footerlower\">
            ";
        // line 20
        echo "            <div class=\"socialiconmobile\">
              ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_social_icon", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"footer_legal_section\">
              ";
        // line 25
        echo "              <div class=\"branding\">
                <a href=\"";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\" rel=\"home\">
                  <img class=\"footer_logo\" src=\"themes/custom/foxnews/assets/images/logo/fox-news-footer-logo-square.svg\" />
                </a>
              </div>
              ";
        // line 31
        echo "              <div class=\"legal\">
                ";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_legal", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "
                ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_legal_text", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "
              </div>
              ";
        // line 36
        echo "              <div class=\"socialiconlaptop\">
                ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_social_icon", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </footer>
      </div>      
    </div>
  </header>

  ";
        // line 47
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_banner", [], "any", false, false, true, 47)) {
            // line 48
            echo "    <div class=\"layout-top-banner\" role=\"complementary\">
      ";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_banner", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 52
        echo "  
  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a> ";
        // line 55
        echo "
    ";
        // line 59
        echo "    ";
        // line 65
        echo "    

    ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 67)) {
            // line 68
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 72
        echo "
    ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 73)) {
            // line 74
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 78
        echo "
  </main>

  ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 81)) {
            // line 82
            echo "    <footer role=\"contentinfo\">
      ";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
      ";
            // line 85
            echo "      <div class=\"footerlower\">
        ";
            // line 87
            echo "        <div class=\"socialiconmobile\">
          ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_social_icon", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "
        </div>
        
        <div class=\"footer_legal_section\">
          ";
            // line 93
            echo "          <div class=\"branding\">
            <a href=\"";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" rel=\"home\">
              <img class=\"footer_logo\" src=\"themes/custom/foxnews/assets/images/logo/fox-news-footer-logo-square.svg\" />
            </a>
          </div>
            ";
            // line 99
            echo "          <div class=\"legal\">
            ";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_legal", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "
            ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_legal_text", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "
          </div>
          ";
            // line 104
            echo "          <div class=\"socialiconlaptop\">
            ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_social_icon", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </footer>
  ";
        }
        // line 111
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
        return array (  237 => 111,  228 => 105,  225 => 104,  220 => 101,  216 => 100,  213 => 99,  206 => 94,  203 => 93,  196 => 88,  193 => 87,  190 => 85,  186 => 83,  183 => 82,  181 => 81,  176 => 78,  170 => 75,  167 => 74,  165 => 73,  162 => 72,  156 => 69,  153 => 68,  151 => 67,  147 => 65,  145 => 59,  142 => 55,  138 => 52,  132 => 49,  129 => 48,  126 => 47,  114 => 37,  111 => 36,  106 => 33,  102 => 32,  99 => 31,  92 => 26,  89 => 25,  83 => 21,  80 => 20,  77 => 18,  73 => 16,  69 => 14,  65 => 12,  62 => 11,  57 => 9,  52 => 7,  47 => 5,  42 => 1,);
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
    {# Search Menu for Hamburger Menu #}
    <div class=\"hamburgersection\">
      {{ page.hamburger }}
      {# Footer for Hamburger #}
      <div class=\"hamburgerfooter\">
        <footer role=\"contentinfo\">
          {{ page.footer }}
          {# Footer Bottom #}
          <div class=\"footerlower\">
            {# Footer Social Site Icons to be shown on top for Mobile.#}
            <div class=\"socialiconmobile\">
              {{ page.footer_social_icon }}
            </div>
            <div class=\"footer_legal_section\">
              {# Footer Logo #}
              <div class=\"branding\">
                <a href=\"{{ path('<front>') }}\" rel=\"home\">
                  <img class=\"footer_logo\" src=\"themes/custom/foxnews/assets/images/logo/fox-news-footer-logo-square.svg\" />
                </a>
              </div>
              {# Footer Legal Information #}
              <div class=\"legal\">
                {{ page.footer_legal }}
                {{ page.footer_legal_text}}
              </div>
              {# Footer Social Icon to be shown at righty corner for Laptop #}
              <div class=\"socialiconlaptop\">
                {{ page.footer_social_icon }}
              </div>
            </div>
          </div>
        </footer>
      </div>      
    </div>
  </header>

  {# Top Banner #}
  {% if page.top_banner %}
    <div class=\"layout-top-banner\" role=\"complementary\">
      {{ page.top_banner }}
    </div>
  {% endif %}
  
  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a> {# link is in html.html.twig #}

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
      {# Footer Bottom #}
      <div class=\"footerlower\">
        {# Footer Social Site Icons to be shown on top for Mobile.#}
        <div class=\"socialiconmobile\">
          {{ page.footer_social_icon }}
        </div>
        
        <div class=\"footer_legal_section\">
          {# Footer Logo #}
          <div class=\"branding\">
            <a href=\"{{ path('<front>') }}\" rel=\"home\">
              <img class=\"footer_logo\" src=\"themes/custom/foxnews/assets/images/logo/fox-news-footer-logo-square.svg\" />
            </a>
          </div>
            {# Footer Legal Information #}
          <div class=\"legal\">
            {{ page.footer_legal }}
            {{ page.footer_legal_text}}
          </div>
          {# Footer Social Icon to be shown at righty corner for Laptop #}
          <div class=\"socialiconlaptop\">
            {{ page.footer_social_icon }}
          </div>
        </div>
      </div>
    </footer>
  {% endif %}

</div> {# layout-container #}
", "themes/custom/foxnews/template/page.html.twig", "/var/www/html/foxnews/web/themes/custom/foxnews/template/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 47);
        static $filters = array("escape" => 5);
        static $functions = array("path" => 26);

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
