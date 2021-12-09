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

/* core/themes/olivero/templates/form/fieldset.html.twig */
class __TwigTemplate_32a57fd2f03a8903104eb153300763c557d459373d1699020cebe9fbbdf97ad8 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/olivero/templates/form/fieldset.html.twig"));

        // line 28
        $context["classes"] = [0 => "fieldset", 1 => ((twig_get_attribute($this->env, $this->source,         // line 30
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method", false, false, true, 30)) ? ("fieldset--group") : ("")), 2 => "js-form-item", 3 => "form-item", 4 => "js-form-wrapper", 5 => "form-wrapper"];
        // line 38
        $context["wrapper_classes"] = [0 => "fieldset__wrapper", 1 => ((twig_get_attribute($this->env, $this->source,         // line 40
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method", false, false, true, 40)) ? ("fieldset__wrapper--group") : (""))];
        // line 44
        $context["legend_span_classes"] = [0 => "fieldset__label", 1 => ((twig_get_attribute($this->env, $this->source,         // line 46
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method", false, false, true, 46)) ? ("fieldset__label--group") : ("")), 2 => ((        // line 47
($context["required"] ?? null)) ? ("js-form-required") : ("")), 3 => ((        // line 48
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 52
        $context["legend_classes"] = [0 => "fieldset__legend", 1 => (((twig_get_attribute($this->env, $this->source,         // line 54
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method", false, false, true, 54) &&  !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", [0 => "form-composite"], "method", false, false, true, 54))) ? ("fieldset__legend--group") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,         // line 55
($context["attributes"] ?? null), "hasClass", [0 => "form-composite"], "method", false, false, true, 55)) ? ("fieldset__legend--composite") : ("")), 3 => (((        // line 56
($context["title_display"] ?? null) == "invisible")) ? ("fieldset__legend--invisible") : ("fieldset__legend--visible"))];
        // line 60
        $context["description_classes"] = [0 => "fieldset__description"];
        // line 64
        echo "
<fieldset";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 65), 65, $this->source), "html", null, true);
        echo ">
  ";
        // line 67
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 67)) {
            // line 68
            echo "  <legend";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 68), "addClass", [0 => ($context["legend_classes"] ?? null)], "method", false, false, true, 68), 68, $this->source), "html", null, true);
            echo ">
    <span";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 69), "addClass", [0 => ($context["legend_span_classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "</span>
  </legend>
  ";
        }
        // line 72
        echo "
  <div";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["wrapper_classes"] ?? null)], "method", false, false, true, 73), 73, $this->source), "html", null, true);
        echo ">
    ";
        // line 74
        if (($context["inline_items"] ?? null)) {
            // line 75
            echo "      <div class=\"container-inline\">
    ";
        }
        // line 77
        echo "
    ";
        // line 78
        if (($context["prefix"] ?? null)) {
            // line 79
            echo "      <span class=\"fieldset__prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 79, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 81
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 81, $this->source), "html", null, true);
        echo "
    ";
        // line 82
        if (($context["suffix"] ?? null)) {
            // line 83
            echo "      <span class=\"fieldset__suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 83, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 85
        echo "    ";
        if (($context["errors"] ?? null)) {
            // line 86
            echo "      <div class=\"fieldset__error-message\">
        ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 87, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 90
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 90)) {
            // line 91
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 91), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 91), 91, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 93
        echo "
    ";
        // line 94
        if (($context["inline_items"] ?? null)) {
            // line 95
            echo "      </div>
    ";
        }
        // line 97
        echo "  </div>
</fieldset>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/olivero/templates/form/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 97,  148 => 95,  146 => 94,  143 => 93,  135 => 91,  132 => 90,  126 => 87,  123 => 86,  120 => 85,  114 => 83,  112 => 82,  107 => 81,  101 => 79,  99 => 78,  96 => 77,  92 => 75,  90 => 74,  86 => 73,  83 => 72,  75 => 69,  70 => 68,  67 => 67,  63 => 65,  60 => 64,  58 => 60,  56 => 56,  55 => 55,  54 => 54,  53 => 52,  51 => 48,  50 => 47,  49 => 46,  48 => 44,  46 => 40,  45 => 38,  43 => 30,  42 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/form/fieldset.html.twig", "/opt/web/core/themes/olivero/templates/form/fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 28, "if" => 67);
        static $filters = array("escape" => 65);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
