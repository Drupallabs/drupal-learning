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

/* @webprofiler/Collector/events.html.twig */
class __TwigTemplate_0415fd52967954a096ace889003b8ee5ce5459c008fc8229ae93a0c10f7d7dcd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/events.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start(function () { return ''; });
        // line 3
        echo "        <a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("webprofiler.dashboard", ["profile" => ($context["token"] ?? null)], ["fragment" => "events"]), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Events"));
        echo "\">
            <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Events"));
        echo "\"
                 src=\"data:image/png;base64,";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "icon", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\">
            <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getCalledListenersCount", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</span>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "
    ";
        // line 10
        ob_start(function () { return ''; });
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Called"));
        echo "</b>
            <span>";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getCalledListenersCount", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Not called"));
        echo "</b>
            <span>";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getNotCalledListenersCount", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 23, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 24, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 28
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 29
        echo "    <script id=\"events\" type=\"text/template\">

        <h2 class=\"panel__title\">";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Events"));
        echo "</h2>
        <div class=\"panel__container\">

            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Called listeners"));
        echo "</th>
                <th>";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Class"));
        echo "</th>
                <th>";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Priority"));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.called_listeners, function( events, event_name ){ %>
                    <% _.each( events, function( priority, priority_value ){ %>
                        <% _.each( priority, function( listener ){ %>
                            <tr>
                                <td><%= event_name %></td>
                                <% if( listener.clazz ) { %>
                                    <td>
                                        <% if( listener.class == \"Closure\" ) { %>
                                            <%= \"Closure\" %>
                                        <% } else { %>
                                            <%= Drupal.webprofiler.helpers.classLink(listener.clazz) %>
                                        <% } %>
                                    </td>
                                <% } else { %>
                                    <td><%= listener.service[0] %>::<%= listener.service[1] %></td>
                                <% } %>
                                <td><%= priority_value %></td>
                            </tr>
                        <% }); %>
                    <% }); %>
                <% }); %>
                </tbody>
            </table>

            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Not called listeners"));
        echo "</th>
                <th>";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Service"));
        echo "</th>
                <th>";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Priority"));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.not_called_listeners, function( events, event_name ){ %>
                <% _.each( events, function( priority, priority_value ){ %>
                <% _.each( priority, function( listener ){ %>
                <tr>
                    <td><%= event_name %></td>
                    <td><%= listener.service[0] %>::<%= listener.service[1] %></td>
                    <td><%= priority_value %></td>
                </tr>
                <% }); %>
                <% }); %>
                <% }); %>
                </tbody>
            </table>
        </div>

    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/events.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  201 => 69,  197 => 68,  193 => 67,  161 => 38,  157 => 37,  153 => 36,  145 => 31,  141 => 29,  134 => 28,  124 => 24,  120 => 23,  116 => 21,  110 => 18,  106 => 17,  99 => 13,  95 => 12,  92 => 11,  90 => 10,  87 => 9,  81 => 6,  77 => 5,  73 => 4,  66 => 3,  63 => 2,  56 => 1,  49 => 28,  46 => 27,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/events.html.twig", "/opt/web/modules/contrib/devel/webprofiler/templates/Collector/events.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 2);
        static $filters = array("escape" => 3, "t" => 3, "default" => 23);
        static $functions = array("url" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set'],
                ['escape', 't', 'default'],
                ['url']
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
