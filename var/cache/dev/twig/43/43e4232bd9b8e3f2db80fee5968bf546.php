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

/* tasks/index.html.twig */
class __TwigTemplate_fc7ca886175a460e21ee936ff46e3eaa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tasks/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tasks/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tasks/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tasks index
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<div class=\"d-flex flex-column flex-xl-row justify-content-lg-center m-4 fs-6\">
\t\t\t<div class=\"mt-4 fs-6   \">
\t\t\t   
\t\t\t\t\t<h1>Tasks index</h1>

\t\t\t\t\t";
        // line 13
        $context["task"] = (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 13, $this->source); })());
        // line 14
        echo "\t\t\t\t\t<a class=\"btn btn-ls btn-primary \" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_new", ["id" => (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 14, $this->source); })())]), "html", null, true);
        echo "\">Create new</a>

\t\t\t\t\t <a class=\"btn btn-ls btn-primary\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_indexDone", ["id" => (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 16, $this->source); })())]), "html", null, true);
        echo "\">Completed tasks</a>
\t\t\t\t\t<a class=\"btn btn-ls btn-primary\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projets_index", ["id" => (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 17, $this->source); })())]), "html", null, true);
        echo "\">Back to project</a>

\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"d-flex flex-column flex-xl-row d-flex justify-content-around\">
\t\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t\t<h5>Tasks TODO</h5>
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t<th>Deadline_date</th>
\t\t\t\t\t\t\t\t<th>Priority</th>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 39
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Description", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 43
            ((twig_get_attribute($this->env, $this->source, $context["task"], "DeadlineDate", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "DeadlineDate", [], "any", false, false, false, 43), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Priority", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-ls btn-primary\"  href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_show", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">Show</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-ls btn-primary\"  href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">Edit</i></a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-ls btn-primary\"  href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_inprogress", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">inprogress</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"7\"><h5>Lets start creating your tasks</h5></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t\t<h5>Tasks In-Progress</h5>
\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t<th>Deadline_date</th>
\t\t\t\t\t\t\t\t\t<th>Priority</th>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasksinprogress"]) || array_key_exists("tasksinprogress", $context) ? $context["tasksinprogress"] : (function () { throw new RuntimeError('Variable "tasksinprogress" does not exist.', 77, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 78
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "Project", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Description", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 82
            ((twig_get_attribute($this->env, $this->source, $context["task"], "DeadlineDate", [], "any", false, false, false, 82)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "DeadlineDate", [], "any", false, false, false, 82), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Priority", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-ls btn-primary\"  href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_show", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\">Show</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-ls btn-primary\"  href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\">Edit</i></a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-ls btn-primary\"  href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_done", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\">Done</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"7\">No tasks in progress</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>\t

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tasks/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 98,  254 => 94,  244 => 89,  240 => 88,  236 => 87,  229 => 83,  225 => 82,  221 => 81,  217 => 80,  213 => 78,  208 => 77,  188 => 59,  179 => 55,  169 => 50,  165 => 49,  161 => 48,  154 => 44,  150 => 43,  146 => 42,  142 => 41,  138 => 39,  133 => 38,  109 => 17,  105 => 16,  99 => 14,  97 => 13,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tasks index
{% endblock %}

{% block body %}

\t<div class=\"d-flex flex-column flex-xl-row justify-content-lg-center m-4 fs-6\">
\t\t\t<div class=\"mt-4 fs-6   \">
\t\t\t   
\t\t\t\t\t<h1>Tasks index</h1>

\t\t\t\t\t{% set task = projectId %}
\t\t\t\t\t<a class=\"btn btn-ls btn-primary \" href=\"{{ path('app_tasks_new',{'id': task}) }}\">Create new</a>

\t\t\t\t\t <a class=\"btn btn-ls btn-primary\" href=\"{{ path('app_tasks_indexDone',{'id': task}) }}\">Completed tasks</a>
\t\t\t\t\t<a class=\"btn btn-ls btn-primary\" href=\"{{ path('app_projets_index',{'id': task}) }}\">Back to project</a>

\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"d-flex flex-column flex-xl-row d-flex justify-content-around\">
\t\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t\t<h5>Tasks TODO</h5>
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t<th>Deadline_date</th>
\t\t\t\t\t\t\t\t<th>Priority</th>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for task in tasks %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>{{ task.name }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ task.Description }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ task.DeadlineDate ? task.DeadlineDate|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ task.Priority }}</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-ls btn-primary\"  href=\"{{ path('app_tasks_show', {'id': task.id}) }}\">Show</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-ls btn-primary\"  href=\"{{ path('app_tasks_edit', {'id': task.id}) }}\">Edit</i></a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-ls btn-primary\"  href=\"{{ path('app_tasks_inprogress', {'id': task.id}) }}\">inprogress</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"7\"><h5>Lets start creating your tasks</h5></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t\t<h5>Tasks In-Progress</h5>
\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t<th>Deadline_date</th>
\t\t\t\t\t\t\t\t\t<th>Priority</th>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for task in tasksinprogress %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>{{ task.Project.id }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ task.Description }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ task.DeadlineDate ? task.DeadlineDate|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ task.Priority }}</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-ls btn-primary\"  href=\"{{ path('app_tasks_show', {'id': task.id}) }}\">Show</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-ls btn-primary\"  href=\"{{ path('app_tasks_edit', {'id': task.id}) }}\">Edit</i></a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-ls btn-primary\"  href=\"{{ path('app_tasks_done', {'id': task.id}) }}\">Done</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"7\">No tasks in progress</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>\t

{% endblock %}
", "tasks/index.html.twig", "C:\\Users\\ADMIN\\Desktop\\Symfony-projects\\project_manager\\templates\\tasks\\index.html.twig");
    }
}
