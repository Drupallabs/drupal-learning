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

/* @webprofiler/Collector/services.html.twig */
class __TwigTemplate_a82b1c3a821a33586542bda82bea0c8ca51fd93c70c2197ccdcffeb8080d7443 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/services.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 26
        echo "
";
        // line 27
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
        echo "    <a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("webprofiler.dashboard", ["profile" => ($context["token"] ?? null)], ["fragment" => "services"]), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Services"));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Services"));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "icon", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getInitializedServicesCount", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start(function () { return ''; });
        // line 10
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Initialized"));
        echo "</b>
        <span>";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getInitializedServicesCount", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo " (";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getInitializedServicesWithoutWebprofilerCount", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
            )</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Available"));
        echo "</b>
        <span>";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getServicesCount", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 22, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 23, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 27
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 28
        echo "    <script id=\"services\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Services"));
        echo "</h2>
        <div class=\"tabs\">
            <input class=\"tabs__radio\" type=\"radio\" id=\"services\" name=\"tabs\" checked/>
            <input class=\"tabs__radio\" type=\"radio\" id=\"http_middleware\" name=\"tabs\"/>
            <ul class=\"tabs__tabs list--inline\">
                <li><label class=\"tabs__label\" for=\"services\">services</label></li>
                <li><label class=\"tabs__label\" for=\"http_middleware\">middleware</label></li>
            </ul>

            <div class=\"tabs__panels\">
                <div class=\"tabs__panel\">
                    <form class=\"panel__toolbar\">
                        <div class=\"panel__filter--text\">
                            <input id=\"edit-sid\" class=\"js--live-filter\" placeholder=\"";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("ID"));
        echo "\" type=\"text\"/>
                            <label for=\"edit-sid\" class=\"panel__filter-label\">";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("ID"));
        echo "</label>
                        </div>
                        <div class=\"panel__filter--text\">
                            <input id=\"edit-class\" class=\"js--live-filter\" placeholder=\"";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Class"));
        echo "\" type=\"text\"/>
                            <label for=\"edit-class\" class=\"panel__filter-label\">";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Class"));
        echo "</label>
                        </div>
                        <div class=\"panel__filter--text\">
                            <input id=\"edit-tags\" class=\"js--live-filter\" placeholder=\"";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Tags"));
        echo "\" type=\"text\"/>
                            <label for=\"edit-tags\" class=\"panel__filter-label\">";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Tags"));
        echo "</label>
                        </div>
                        <div class=\"panel__filter--select\">
                            <select id=\"edit-initialized\" class=\"js--live-filter\">
                                <option value=\"\">";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Any"));
        echo "</option>
                                <option value=\"1\">";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Yes"));
        echo "</option>
                                <option value=\"0\">";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No"));
        echo "</option>
                            </select>
                            <label for=\"edit-initialized\" class=\"panel__filter-label\">";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Initialized"));
        echo "</label>
                        </div>
                    </form>

                    <% _.each( data.services, function( item, key ){ %>

                    <% clazz = Drupal.webprofiler.helpers.classLink({\"file\" : item.value.file, \"class\" :
                    item.value.class}) %>
                    <% depends = _.map(item.outEdges, function(el) { return el.id; }).join(', ') %>
                    <% tags = _.map(item.value.tags, function(el, key) { return key; }).join(', ') %>

                    <div class=\"panel__container\"
                         data-wp-sid=\"<%- key %>\"
                         data-wp-class=\"<%- item.value.class %>\"
                         data-wp-tags=\"<%- tags %>\"
                         data-wp-initialized=\"<%- (item.initialized) ? '1' : '0' %>\">

                        <div class=\"panel__expand-header\">
                            <ul class=\"list--inline\">
                                <li>
                                    <b>";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("ID"));
        echo "</b> <%- key %>
                                </li>
                                <% if (clazz) { %>
                                <li>
                                    <b>";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Class"));
        echo "</b> <%= clazz %>
                                </li>
                                <% } %>
                                <li>
                                    <b>";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Initialized"));
        echo "</b> <%- (item.initialized) ? '";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Yes"));
        echo "' : '";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No"));
        echo "' %>
                                </li>
                                <% if ( item.time ) { %>
                                    <li>
                                        <b>";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Count"));
        echo "</b> <%- item.time.count %>
                                    </li>
                                    <li>
                                        <b>";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Time"));
        echo "</b> <%- Drupal.webprofiler.helpers.printTime(item.time.time) %>
                                    </li>
                                <% } %>
                            </ul>
                            <% if ( tags.length > 0 || depends.length > 0 ) { %>
                            <div class=\"button--flat l-right js--panel-toggle\">";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Info"));
        echo "</div>
                            <% } %>
                        </div>

                        <% if ( tags.length > 0 || depends.length > 0 ) { %>
                        <div class=\"panel__expand-content\">
                            <div class=\"wp-query-arguments\">
                                <table class=\"table--duo\">
                                    <tr>
                                        <th>";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Tags"));
        echo "</th>
                                        <td><%- (tags) ? tags : '-' %></td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Depends"));
        echo "</th>
                                        <td><%- (depends) ? depends : '-' %></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <% } %>
                    </div>
                    <% }); %>
                </div>

                <div class=\"tabs__panel\">
                    <div class=\"panel__container\">
                        <table>
                            <thead>
                            <tr>
                                <th>";
        // line 128
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("id"));
        echo "</th>
                                <th>";
        // line 129
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("class"));
        echo "</th>
                                <th>";
        // line 130
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("priority"));
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            <% _.each( data.http_middleware, function( item, key ){ %>
                            <% clazz = Drupal.webprofiler.helpers.classLink(item.value.handle_method) %>
                            <tr>
                                <td><%- key %></td>
                                <td><%= clazz %></td>
                                <td><%- item.value.tags.http_middleware[0].priority %></td>
                            </tr>
                            <% }); %>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/services.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  312 => 130,  308 => 129,  304 => 128,  285 => 112,  278 => 108,  266 => 99,  258 => 94,  252 => 91,  241 => 87,  234 => 83,  227 => 79,  204 => 59,  199 => 57,  195 => 56,  191 => 55,  184 => 51,  180 => 50,  174 => 47,  170 => 46,  164 => 43,  160 => 42,  144 => 29,  141 => 28,  134 => 27,  124 => 23,  120 => 22,  116 => 20,  110 => 17,  106 => 16,  97 => 12,  93 => 11,  90 => 10,  87 => 9,  81 => 6,  77 => 5,  73 => 4,  66 => 3,  63 => 2,  56 => 1,  49 => 27,  46 => 26,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/services.html.twig", "/opt/web/modules/contrib/devel/webprofiler/templates/Collector/services.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 2);
        static $filters = array("escape" => 3, "t" => 3, "default" => 22);
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
