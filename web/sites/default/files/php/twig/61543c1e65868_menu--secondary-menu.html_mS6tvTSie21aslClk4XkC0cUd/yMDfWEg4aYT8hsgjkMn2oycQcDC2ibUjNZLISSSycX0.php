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

/* core/themes/olivero/templates/navigation/menu--secondary-menu.html.twig */
class __TwigTemplate_e87823e19a3f8de109c24f6186622ab5ef4e0ef882d58c421d67df8d7671eaad extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/olivero/templates/navigation/menu--secondary-menu.html.twig"));

        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu"], "method", false, false, true, 29);
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 30, $context, $this->getSourceContext()));
        echo "

";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 32
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_links"));

            // line 33
            echo "  ";
            $context["secondary_nav_level"] = ("secondary-nav__menu--level-" . (($context["menu_level"] ?? null) + 1));
            // line 34
            echo "  ";
            $macros["menus"] = $this;
            // line 35
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 36
                echo "    <ul";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "secondary-nav__menu", 1 => ($context["secondary_nav_level"] ?? null)], "method", false, false, true, 36), 36, $this->source), "html", null, true);
                echo ">
      ";
                // line 37
                $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["secondary_nav_level"] ?? null)], "method", false, false, true, 37);
                // line 38
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 39
                    echo "
        ";
                    // line 40
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 40), "isRouted", [], "any", false, false, true, 40) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 40), "routeName", [], "any", false, false, true, 40) == "<nolink>"))) {
                        // line 41
                        echo "          ";
                        $context["menu_item_type"] = "nolink";
                        // line 42
                        echo "        ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 42), "isRouted", [], "any", false, false, true, 42) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 42), "routeName", [], "any", false, false, true, 42) == "<button>"))) {
                        // line 43
                        echo "          ";
                        $context["menu_item_type"] = "button";
                        // line 44
                        echo "        ";
                    } else {
                        // line 45
                        echo "          ";
                        $context["menu_item_type"] = "link";
                        // line 46
                        echo "        ";
                    }
                    // line 47
                    echo "
        ";
                    // line 48
                    $context["item_classes"] = [0 => "secondary-nav__menu-item", 1 => ("secondary-nav__menu-item--" . $this->sandbox->ensureToStringAllowed(                    // line 50
($context["menu_item_type"] ?? null), 50, $this->source)), 2 => ("secondary-nav__menu-item--level-" . (                    // line 51
($context["menu_level"] ?? null) + 1)), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 52
$context["item"], "in_active_trail", [], "any", false, false, true, 52)) ? ("secondary-nav__menu-item--active-trail") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 53
$context["item"], "below", [], "any", false, false, true, 53)) ? ("secondary-nav__menu-item--has-children") : (""))];
                    // line 56
                    echo "
        ";
                    // line 57
                    $context["link_classes"] = [0 => "secondary-nav__menu-link", 1 => ("secondary-nav__menu-link--" . $this->sandbox->ensureToStringAllowed(                    // line 59
($context["menu_item_type"] ?? null), 59, $this->source)), 2 => ("secondary-nav__menu-link--level-" . (                    // line 60
($context["menu_level"] ?? null) + 1)), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 61
$context["item"], "in_active_trail", [], "any", false, false, true, 61)) ? ("secondary-nav__menu-link--active-trail") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 62
$context["item"], "below", [], "any", false, false, true, 62)) ? ("secondary-nav__menu-link--has-children") : (""))];
                    // line 65
                    echo "
        <li";
                    // line 66
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 66), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 66), 66, $this->source), "html", null, true);
                    echo ">
          ";
                    // line 67
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 67), 67, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 67), 67, $this->source), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                    echo "

          ";
                    // line 69
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 69)) {
                        // line 70
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 70), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 70, $context, $this->getSourceContext()));
                        echo "
          ";
                    }
                    // line 72
                    echo "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "    </ul>
  ";
            }
            
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "core/themes/olivero/templates/navigation/menu--secondary-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 74,  159 => 72,  153 => 70,  151 => 69,  146 => 67,  142 => 66,  139 => 65,  137 => 62,  136 => 61,  135 => 60,  134 => 59,  133 => 57,  130 => 56,  128 => 53,  127 => 52,  126 => 51,  125 => 50,  124 => 48,  121 => 47,  118 => 46,  115 => 45,  112 => 44,  109 => 43,  106 => 42,  103 => 41,  101 => 40,  98 => 39,  93 => 38,  91 => 37,  86 => 36,  83 => 35,  80 => 34,  77 => 33,  59 => 32,  49 => 30,  47 => 29,  44 => 24,  42 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/navigation/menu--secondary-menu.html.twig", "/opt/web/core/themes/olivero/templates/navigation/menu--secondary-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "set" => 29, "macro" => 32, "if" => 35, "for" => 38);
        static $filters = array("escape" => 36);
        static $functions = array("link" => 67);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'if', 'for'],
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
