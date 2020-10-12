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

/* @FOSElastica/Collector/elastica.html.twig */
class __TwigTemplate_51a339f0970b3b09e6e870e9d72ebd10bf88511b7d4480bcf11ab8f210d3c9ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSElastica/Collector/elastica.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@FOSElastica/Collector/elastica.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style>
        .sql-runnable code pre:not(:last-child) {
            margin-bottom: 1em;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 13
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 13, $this->source); })()), 1)) : (1));
        // line 14
        echo "
    ";
        // line 15
        ob_start();
        // line 16
        echo "        ";
        if ((0 === twig_compare((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 16, $this->source); })()), 1))) {
            // line 17
            echo "            <img alt=\"elastica\" src=\"data:image/png;base64,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\" />
            <span class=\"sf-toolbar-status\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "querycount", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>
            ";
            // line 19
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 19, $this->source); })()), "querycount", [], "any", false, false, false, 19), 0))) {
                // line 20
                echo "                <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
                echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "time", [], "any", false, false, false, 20)), "html", null, true);
                echo " ms</span>
            ";
            }
            // line 22
            echo "        ";
        } else {
            // line 23
            echo "            ";
            echo twig_include($this->env, $context, "@FOSElastica/Collector/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "querycount", [], "any", false, false, false, 24), "html", null, true);
            echo "</span>
            ";
            // line 25
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "querycount", [], "any", false, false, false, 25), 0))) {
                // line 26
                echo "                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">";
                // line 28
                echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 28, $this->source); })()), "time", [], "any", false, false, false, 28)), "html", null, true);
                echo "</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            ";
            }
            // line 32
            echo "        ";
        }
        // line 33
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Queries</b>
            <span class=\"sf-toolbar-status\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 37, $this->source); })()), "querycount", [], "any", false, false, false, 37), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query Time</b>
            <span>";
        // line 41
        echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 41, $this->source); })()), "time", [], "any", false, false, false, 41)), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Execution Time</b>
            <span>";
        // line 45
        echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 45, $this->source); })()), "executionTime", [], "any", false, false, false, 45)), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@FOSElastica/Collector/elastica.html.twig", 48)->display(twig_array_merge($context, ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 48, $this->source); })())]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 52
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 52, $this->source); })()), 1)) : (1));
        // line 53
        echo "
    <span class=\"label ";
        // line 54
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "querycount", [], "any", false, false, false, 54)) ? ("") : ("disabled"));
        echo "\">
        ";
        // line 55
        if ((0 === twig_compare((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 55, $this->source); })()), 1))) {
            // line 56
            echo "            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAcCAQAAADPJofWAAAAAXNSR0IArs4c6QAAAAJiS0dEAP+Hj8y/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH2woEDg0xnxGaxwAAA51JREFUOMt100ts1FUUx/Hvufc/8x9mOrTTDpbysEVsqTzUqAsRgpqQGIJiIhtZSEJcqNGFJrSiZSPYkKALBUyAiLEuWKjBhdFAaEwwPNQqEAgEaA0FEWh4lE477/+9x0WLsST+Fmf1ycnJvecI/0knW4ENgZkhr5gVMtcEMmB64z1msCOCboR70tlkOuQdQREMBovF7tQt71/mXtzZQo8s89jLycFETiSqKd/v5wSY32VN18Ak3JGiR1d7an+Y3Z/Np7yVeCY/9czU4efF2iPxZ+wLXPgXP7WCTZ7MvvlnZlbqSJnGGbMeam5pk6HTIw9qs7tiH6D9vrbXW9e1Tus/sbhHZ8VOtfU1uZSExCUe1ExLtqayjcPnx4qNssjOs3TQrY9rYdVB2aFRw7HWq2kbJxCjFAsDoY+3hbkbw9ebNBsQ6EJVNlb3yQIDY8lcaAIsBisxiSXGToTNWqi/JUWXMIoabrK/95ymDNYHzmDUYAiwWOImOle+EI2AxyiKVydQGVAIoyneiBUNsAQEWIn+LA2NJqOYw3hUFQV2DFbu+FSuKTk9kRGMBoyPE7m8vza7UhMrmQNlV+NwAlDZXmXkkcHaeNamQBCEiLyeb7w631C71yxfr8/6YT8GUP6ifKlcf3xJX26kWNQyJfL+TvVs3S8rCw31hfRm2/KzL+iGQz8BnLjz8EVd5TPXF9wI/E0ZK/gr6SOLj7+Yz9RRu2bmMXm6y2/0A/rS0f6JL985+prVQAJiKEU8kLid6ezaA8Gh7iVP6BKtHad7njQr+xmSeFELLi2YovwlJ5Nbu07DNoLFoVNVrwBvh6feSMwSDcVuLvWF0y3Brd9mDlRlTsuVweGPCRzI+NOBW2rW3iYv5ZPfbrm7ji2fx1/Vkn7U/OGlivE4HA5Yh+yqUKFAYa3QfXcVf/R7Segy3wDGo4x3Tr3H3LLmqX6mZ5+jC4A5DO7jLR3SmAoYj8eTqx5uMR+UKErp78q2/e7ARNuLgE940bR1E9jpcKx+16MxJUd5+68XJp+a5DnqFxU/yYZG8XiSfJ+awkIW9WW+zLF8sh6NeqJb0cs+biIcKjW8u3T3xj+uZXZ/PbSe3km2nHWbogb3ZlSgPWz/bt71tsf432Qa64bSh5PTIFAU0pqdG3oRIiCgBBgsVTwRpYwmnWgMAlUd1aR+6m+DA4QqBlDKRDgifCqq8WO+CoFW9Ctd7dvBA+NV8DgiognuSv4bbsA/e9y1PQRZggAAAAAASUVORK5CYII=\" alt=\"\" /></span>
        ";
        } else {
            // line 58
            echo "            <span class=\"icon\">";
            echo twig_include($this->env, $context, "@FOSElastica/Collector/icon.svg");
            echo "</span>
        ";
        }
        // line 60
        echo "        <strong>Elastica</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 65
        echo "    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 69, $this->source); })()), "querycount", [], "any", false, false, false, 69), "html", null, true);
        echo "</span>
            <span class=\"label\">Database Queries</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 73
        echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 73, $this->source); })()), "executionTime", [], "any", false, false, false, 73)), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Execution Time</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 77
        echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 77, $this->source); })()), "time", [], "any", false, false, false, 77)), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Query Time</span>
        </div>
    </div>

    <h2>Queries</h2>

    ";
        // line 84
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 84, $this->source); })()), "querycount", [], "any", false, false, false, 84)) {
            // line 85
            echo "        <div class=\"empty\">
            <p>No queries were performed.</p>
        </div>
    ";
        } else {
            // line 89
            echo "
        <table class=\"alt queries-table\">
            <thead>
            <tr>
                <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries')\" style=\"cursor: pointer;\">Execution Time<span></span></th>
                <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 2, 'queries')\" style=\"cursor: pointer;\">Query Time<span></span></th>
                <th style=\"width: 100%\">Info</th>
            </tr>
            </thead>
            <tbody id=\"queries\">
            ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 100, $this->source); })()), "queries", [], "any", false, false, false, 100));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["query"]) {
                // line 101
                echo "                <tr id=\"queryNo-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                    <td class=\"nowrap\">";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 102), "html", null, true);
                echo "</td>
                    <td class=\"nowrap\">";
                // line 103
                echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 103)), "html", null, true);
                echo "&nbsp;ms</td>
                    <td class=\"nowrap\">";
                // line 104
                echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, $context["query"], "engineMS", [], "any", false, false, false, 104)), "html", null, true);
                echo "&nbsp;ms</td>
                    <td>
                        <div>
                            ";
                // line 107
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["query"], "data", [], "any", false, false, false, 107));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 108
                    echo "                                <pre>";
                    echo twig_escape_filter($this->env, json_encode($context["data"]), "html", null, true);
                    echo "</pre>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 110
                echo "                        </div>
                        <div class=\"font-normal text-small\">
                            <strong>Path</strong>: ";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "path", [], "any", false, false, false, 112), "html", null, true);
                echo "<br />
                            <strong>Query</strong>: ";
                // line 113
                echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["query"], "queryString", [], "any", false, false, false, 113)), "html", null, true);
                echo "<br />
                            <strong>Method</strong>: ";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "method", [], "any", false, false, false, 114), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["query"], "connection", [], "any", false, false, false, 114), "transport", [], "any", false, false, false, 114), "html", null, true);
                echo " on ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["query"], "connection", [], "any", false, false, false, 114), "host", [], "any", false, false, false, 114), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["query"], "connection", [], "any", false, false, false, 114), "port", [], "any", false, false, false, 114), "html", null, true);
                echo ")<br />
                            <strong>Item count</strong>: ";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "itemCount", [], "any", false, false, false, 115), "html", null, true);
                echo "<br />

                            <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                // line 117
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                            ";
                // line 119
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["query"], "connection", [], "any", false, false, false, 119), "transport", [], "any", false, false, false, 119), [0 => "Http", 1 => "Https"])) {
                    // line 120
                    echo "                                &nbsp;
                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#elastica-curl-query-";
                    // line 121
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide cURL query\">View cURL query</a>
                            ";
                }
                // line 123
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 123)) {
                    // line 124
                    echo "                                &nbsp;
                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#elastica-query-backtrace-";
                    // line 125
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                            ";
                }
                // line 127
                echo "                        </div>

                        <div id=\"formatted-query-";
                // line 129
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"sql-runnable hidden\">
                            <code>
                            ";
                // line 131
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["query"], "data", [], "any", false, false, false, 131));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 132
                    echo "                                <pre>";
                    echo twig_escape_filter($this->env, json_encode($context["data"], twig_constant("JSON_PRETTY_PRINT")), "html", null, true);
                    echo "</pre>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "                            </code>
                        </div>

                        ";
                // line 137
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["query"], "connection", [], "any", false, false, false, 137), "transport", [], "any", false, false, false, 137), [0 => "Http", 1 => "Https"])) {
                    // line 138
                    echo "                            <div id=\"elastica-curl-query-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                ";
                    // line 139
                    if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "data", [], "any", false, false, false, 139)), 1))) {
                        // line 140
                        echo "                                    ";
                        $context["dataFlag"] = "-d";
                        // line 141
                        echo "                                    ";
                        $context["curlData"] = json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["query"], "data", [], "any", false, false, false, 141), 0, [], "array", false, false, false, 141));
                        // line 142
                        echo "                                ";
                    } else {
                        // line 143
                        echo "                                    ";
                        $context["dataFlag"] = "--data-binary";
                        // line 144
                        echo "                                    ";
                        $context["curlData"] = "";
                        // line 145
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["query"], "data", [], "any", false, false, false, 145));
                        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                            // line 146
                            echo "                                        ";
                            $context["curlData"] = (((isset($context["curlData"]) || array_key_exists("curlData", $context) ? $context["curlData"] : (function () { throw new RuntimeError('Variable "curlData" does not exist.', 146, $this->source); })()) . json_encode($context["data"])) . "
");
                            // line 147
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 148
                        echo "                                ";
                    }
                    // line 149
                    echo "                                <code>curl -X";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "method", [], "any", false, false, false, 149), "html", null, true);
                    echo " '";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["query"], "connection", [], "any", false, false, false, 149), "transport", [], "any", false, false, false, 149)), "html", null, true);
                    echo "://";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["query"], "connection", [], "any", false, false, false, 149), "host", [], "any", false, false, false, 149), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["query"], "connection", [], "any", false, false, false, 149), "port", [], "any", false, false, false, 149), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "path", [], "any", false, false, false, 149), "html", null, true);
                    if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "queryString", [], "any", false, false, false, 149))) {
                        echo "?";
                        echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["query"], "queryString", [], "any", false, false, false, 149)), "html", null, true);
                    }
                    echo "' -H 'Content-Type: application/json' ";
                    echo twig_escape_filter($this->env, (isset($context["dataFlag"]) || array_key_exists("dataFlag", $context) ? $context["dataFlag"] : (function () { throw new RuntimeError('Variable "dataFlag" does not exist.', 149, $this->source); })()), "html", null, true);
                    echo " '";
                    echo nl2br(twig_escape_filter($this->env, (isset($context["curlData"]) || array_key_exists("curlData", $context) ? $context["curlData"] : (function () { throw new RuntimeError('Variable "curlData" does not exist.', 149, $this->source); })()), "html", null, true));
                    echo "'</code>
                            </div>
                        ";
                }
                // line 152
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 152)) {
                    // line 153
                    echo "                            <div id=\"elastica-query-backtrace-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                <code><pre>";
                    // line 154
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 154), "html", null, true);
                    echo "</pre></code>
                            </div>
                        ";
                }
                // line 157
                echo "                    </td>
                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "            </tbody>
        </table>

        <script>//<![CDATA[
            function sortTable(header, column) {
                \"use strict\";

                var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                    items = [],
                    target = document.getElementById('queries'),
                    rows = target.children,
                    headers = header.parentElement.children,
                    i;

                for (i = 0; i < rows.length; ++i) {
                    items.push(rows[i]);
                }

                for (i = 0; i < headers.length; ++i) {
                    headers[i].removeAttribute('data-sort-direction');
                    if (headers[i].children.length > 0) {
                        headers[i].children[0].innerHTML = '';
                    }
                }

                header.setAttribute('data-sort-direction', (-1*direction).toString());
                header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

                items.sort(function(a, b) {
                    return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
                });

                for (i = 0; i < items.length; ++i) {
                    Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                    Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                    target.appendChild(items[i]);
                }
            }
        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSElastica/Collector/elastica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 160,  480 => 157,  474 => 154,  469 => 153,  466 => 152,  443 => 149,  440 => 148,  434 => 147,  430 => 146,  425 => 145,  422 => 144,  419 => 143,  416 => 142,  413 => 141,  410 => 140,  408 => 139,  403 => 138,  401 => 137,  396 => 134,  387 => 132,  383 => 131,  378 => 129,  374 => 127,  369 => 125,  366 => 124,  363 => 123,  358 => 121,  355 => 120,  353 => 119,  348 => 117,  343 => 115,  333 => 114,  329 => 113,  325 => 112,  321 => 110,  312 => 108,  308 => 107,  302 => 104,  298 => 103,  294 => 102,  289 => 101,  272 => 100,  259 => 89,  253 => 85,  251 => 84,  241 => 77,  234 => 73,  227 => 69,  221 => 65,  214 => 64,  205 => 60,  199 => 58,  195 => 56,  193 => 55,  189 => 54,  186 => 53,  183 => 52,  176 => 51,  168 => 48,  162 => 45,  155 => 41,  148 => 37,  144 => 35,  141 => 34,  138 => 33,  135 => 32,  128 => 28,  124 => 26,  122 => 25,  118 => 24,  113 => 23,  110 => 22,  104 => 20,  102 => 19,  98 => 18,  95 => 17,  92 => 16,  90 => 15,  87 => 14,  84 => 13,  77 => 12,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {{ parent() }}
    <style>
        .sql-runnable code pre:not(:last-child) {
            margin-bottom: 1em;
        }
    </style>
{% endblock %}

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% set icon %}
        {% if profiler_markup_version == 1 %}
            <img alt=\"elastica\" src=\"data:image/png;base64,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\" />
            <span class=\"sf-toolbar-status\">{{ collector.querycount }}</span>
            {% if collector.querycount > 0 %}
                <span class=\"sf-toolbar-info-piece-additional-detail\">in {{ '%0.2f'|format(collector.time) }} ms</span>
            {% endif %}
        {% else %}
            {{ include('@FOSElastica/Collector/icon.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.querycount }}</span>
            {% if collector.querycount > 0 %}
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.time) }}</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            {% endif %}
        {% endif %}
    {% endset %}
    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Queries</b>
            <span class=\"sf-toolbar-status\">{{ collector.querycount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query Time</b>
            <span>{{ '%0.2f'|format(collector.time) }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Execution Time</b>
            <span>{{ '%0.2f'|format(collector.executionTime) }} ms</span>
        </div>
    {% endset %}
    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endblock %}

{% block menu %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <span class=\"label {{ collector.querycount ? '' : 'disabled' }}\">
        {% if profiler_markup_version == 1 %}
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAcCAQAAADPJofWAAAAAXNSR0IArs4c6QAAAAJiS0dEAP+Hj8y/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH2woEDg0xnxGaxwAAA51JREFUOMt100ts1FUUx/Hvufc/8x9mOrTTDpbysEVsqTzUqAsRgpqQGIJiIhtZSEJcqNGFJrSiZSPYkKALBUyAiLEuWKjBhdFAaEwwPNQqEAgEaA0FEWh4lE477/+9x0WLsST+Fmf1ycnJvecI/0knW4ENgZkhr5gVMtcEMmB64z1msCOCboR70tlkOuQdQREMBovF7tQt71/mXtzZQo8s89jLycFETiSqKd/v5wSY32VN18Ak3JGiR1d7an+Y3Z/Np7yVeCY/9czU4efF2iPxZ+wLXPgXP7WCTZ7MvvlnZlbqSJnGGbMeam5pk6HTIw9qs7tiH6D9vrbXW9e1Tus/sbhHZ8VOtfU1uZSExCUe1ExLtqayjcPnx4qNssjOs3TQrY9rYdVB2aFRw7HWq2kbJxCjFAsDoY+3hbkbw9ebNBsQ6EJVNlb3yQIDY8lcaAIsBisxiSXGToTNWqi/JUWXMIoabrK/95ymDNYHzmDUYAiwWOImOle+EI2AxyiKVydQGVAIoyneiBUNsAQEWIn+LA2NJqOYw3hUFQV2DFbu+FSuKTk9kRGMBoyPE7m8vza7UhMrmQNlV+NwAlDZXmXkkcHaeNamQBCEiLyeb7w631C71yxfr8/6YT8GUP6ifKlcf3xJX26kWNQyJfL+TvVs3S8rCw31hfRm2/KzL+iGQz8BnLjz8EVd5TPXF9wI/E0ZK/gr6SOLj7+Yz9RRu2bmMXm6y2/0A/rS0f6JL985+prVQAJiKEU8kLid6ezaA8Gh7iVP6BKtHad7njQr+xmSeFELLi2YovwlJ5Nbu07DNoLFoVNVrwBvh6feSMwSDcVuLvWF0y3Brd9mDlRlTsuVweGPCRzI+NOBW2rW3iYv5ZPfbrm7ji2fx1/Vkn7U/OGlivE4HA5Yh+yqUKFAYa3QfXcVf/R7Segy3wDGo4x3Tr3H3LLmqX6mZ5+jC4A5DO7jLR3SmAoYj8eTqx5uMR+UKErp78q2/e7ARNuLgE940bR1E9jpcKx+16MxJUd5+68XJp+a5DnqFxU/yYZG8XiSfJ+awkIW9WW+zLF8sh6NeqJb0cs+biIcKjW8u3T3xj+uZXZ/PbSe3km2nHWbogb3ZlSgPWz/bt71tsf432Qa64bSh5PTIFAU0pqdG3oRIiCgBBgsVTwRpYwmnWgMAlUd1aR+6m+DA4QqBlDKRDgifCqq8WO+CoFW9Ctd7dvBA+NV8DgiognuSv4bbsA/e9y1PQRZggAAAAAASUVORK5CYII=\" alt=\"\" /></span>
        {% else %}
            <span class=\"icon\">{{ include('@FOSElastica/Collector/icon.svg') }}</span>
        {% endif %}
        <strong>Elastica</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.querycount }}</span>
            <span class=\"label\">Database Queries</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ '%0.2f'|format(collector.executionTime) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Execution Time</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ '%0.2f'|format(collector.time) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Query Time</span>
        </div>
    </div>

    <h2>Queries</h2>

    {% if not collector.querycount %}
        <div class=\"empty\">
            <p>No queries were performed.</p>
        </div>
    {% else %}

        <table class=\"alt queries-table\">
            <thead>
            <tr>
                <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries')\" style=\"cursor: pointer;\">Execution Time<span></span></th>
                <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 2, 'queries')\" style=\"cursor: pointer;\">Query Time<span></span></th>
                <th style=\"width: 100%\">Info</th>
            </tr>
            </thead>
            <tbody id=\"queries\">
            {% for key, query in collector.queries %}
                <tr id=\"queryNo-{{ key }}\">
                    <td class=\"nowrap\">{{ loop.index }}</td>
                    <td class=\"nowrap\">{{ '%0.2f'|format(query.executionMS) }}&nbsp;ms</td>
                    <td class=\"nowrap\">{{ '%0.2f'|format(query.engineMS) }}&nbsp;ms</td>
                    <td>
                        <div>
                            {% for data in query.data %}
                                <pre>{{ data|json_encode }}</pre>
                            {% endfor %}
                        </div>
                        <div class=\"font-normal text-small\">
                            <strong>Path</strong>: {{ query.path }}<br />
                            <strong>Query</strong>: {{ query.queryString|url_encode }}<br />
                            <strong>Method</strong>: {{ query.method }} ({{ query.connection.transport }} on {{ query.connection.host }}:{{ query.connection.port }})<br />
                            <strong>Item count</strong>: {{ query.itemCount }}<br />

                            <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-{{ key }}\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                            {% if query.connection.transport in ['Http', 'Https'] %}{# cURL support only HTTP #}
                                &nbsp;
                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#elastica-curl-query-{{ key }}\" data-toggle-alt-content=\"Hide cURL query\">View cURL query</a>
                            {% endif %}
                            {% if query.backtrace is defined %}
                                &nbsp;
                                <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#elastica-query-backtrace-{{ key }}\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                            {% endif %}
                        </div>

                        <div id=\"formatted-query-{{ key }}\" class=\"sql-runnable hidden\">
                            <code>
                            {% for data in query.data %}
                                <pre>{{ data|json_encode(constant('JSON_PRETTY_PRINT')) }}</pre>
                            {% endfor %}
                            </code>
                        </div>

                        {% if query.connection.transport in ['Http', 'Https'] %}{# cURL support only HTTP #}
                            <div id=\"elastica-curl-query-{{ key }}\" class=\"sql-runnable hidden\">
                                {% if query.data|length == 1 %}
                                    {% set dataFlag = '-d' %}
                                    {% set curlData = query.data[0]|json_encode %}
                                {% else %}
                                    {% set dataFlag = '--data-binary' %}
                                    {% set curlData = '' %}
                                    {% for data in query.data %}
                                        {% set curlData = curlData ~ data|json_encode ~ \"\\n\" %}
                                    {% endfor %}
                                {% endif %}
                                <code>curl -X{{ query.method }} '{{ query.connection.transport|lower }}://{{ query.connection.host }}:{{ query.connection.port }}/{{ query.path }}{% if query.queryString|length %}?{{ query.queryString|url_encode }}{% endif %}' -H 'Content-Type: application/json' {{ dataFlag }} '{{ curlData|nl2br }}'</code>
                            </div>
                        {% endif %}
                        {% if query.backtrace is defined %}
                            <div id=\"elastica-query-backtrace-{{ key }}\" class=\"sql-runnable hidden\">
                                <code><pre>{{ query.backtrace }}</pre></code>
                            </div>
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <script>//<![CDATA[
            function sortTable(header, column) {
                \"use strict\";

                var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                    items = [],
                    target = document.getElementById('queries'),
                    rows = target.children,
                    headers = header.parentElement.children,
                    i;

                for (i = 0; i < rows.length; ++i) {
                    items.push(rows[i]);
                }

                for (i = 0; i < headers.length; ++i) {
                    headers[i].removeAttribute('data-sort-direction');
                    if (headers[i].children.length > 0) {
                        headers[i].children[0].innerHTML = '';
                    }
                }

                header.setAttribute('data-sort-direction', (-1*direction).toString());
                header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

                items.sort(function(a, b) {
                    return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
                });

                for (i = 0; i < items.length; ++i) {
                    Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                    Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                    target.appendChild(items[i]);
                }
            }
        </script>
    {% endif %}
{% endblock %}
", "@FOSElastica/Collector/elastica.html.twig", "/home/anily/table-operations/vendor/friendsofsymfony/elastica-bundle/src/Resources/views/Collector/elastica.html.twig");
    }
}
