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

/* tasks/done.html.twig */
class __TwigTemplate_cc898ef20e5166744a56e9871fe0e7b0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tasks/done.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tasks/done.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tasks/done.html.twig", 1);
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
        echo "\t<div class=\"container\">
\t\t<div class=\"row justify-content-md-center\">
\t\t\t<div class=\"mt-5\">
\t\t\t\t<h1>Tasks index</h1>

\t\t\t\t";
        // line 12
        $context["task"] = (isset($context["projectId"]) || array_key_exists("projectId", $context) ? $context["projectId"] : (function () { throw new RuntimeError('Variable "projectId" does not exist.', 12, $this->source); })());
        // line 13
        echo "\t\t\t\t\t<a class=\"btn btn-ls btn-primary \" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_new", ["id" => (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 13, $this->source); })())]), "html", null, true);
        echo "\">Create new</a>
                <a class=\"btn btn-ls btn-primary\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_index", ["id" => (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 14, $this->source); })())]), "html", null, true);
        echo "\">Back to Ongoing tasks</a>
\t\t\t\t<div class=\"d-flex flex-row d-flex justify-content-around\">
\t\t\t\t<div class=\"p-4\">
\t\t\t\t<h3>Tasks Completed</h3>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead class=\"thead-dark\"></thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t<th>Deadline_date</th>
\t\t\t\t\t\t<th>Priority</th>
\t\t\t\t\t\t
\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasksDone"]) || array_key_exists("tasksDone", $context) ? $context["tasksDone"] : (function () { throw new RuntimeError('Variable "tasksDone" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 32
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Description", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 36
            ((twig_get_attribute($this->env, $this->source, $context["task"], "DeadlineDate", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "DeadlineDate", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Priority", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"btn btn-ls btn-primary\"  href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_show", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">Show</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"btn btn-ls btn-primary\"  href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_inprogress", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">Change to in-progress</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"7\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t</div>
\t\t\t
</div>
\t\t\t
\t\t</div>
\t</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tasks/done.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 52,  166 => 48,  156 => 43,  151 => 41,  144 => 37,  140 => 36,  136 => 35,  132 => 34,  128 => 32,  123 => 31,  103 => 14,  98 => 13,  96 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tasks index
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row justify-content-md-center\">
\t\t\t<div class=\"mt-5\">
\t\t\t\t<h1>Tasks index</h1>

\t\t\t\t{% set task = projectId %}
\t\t\t\t\t<a class=\"btn btn-ls btn-primary \" href=\"{{ path('app_tasks_new',{'id': task}) }}\">Create new</a>
                <a class=\"btn btn-ls btn-primary\" href=\"{{ path('app_tasks_index',{'id': task}) }}\">Back to Ongoing tasks</a>
\t\t\t\t<div class=\"d-flex flex-row d-flex justify-content-around\">
\t\t\t\t<div class=\"p-4\">
\t\t\t\t<h3>Tasks Completed</h3>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead class=\"thead-dark\"></thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t<th>Deadline_date</th>
\t\t\t\t\t\t<th>Priority</th>
\t\t\t\t\t\t
\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for task in tasksDone %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>{{ task.name }}</td>
\t\t\t\t\t\t\t<td>{{ task.Description }}</td>
\t\t\t\t\t\t\t<td>{{ task.DeadlineDate ? task.DeadlineDate|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t<td>{{ task.Priority }}</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"btn btn-ls btn-primary\"  href=\"{{ path('app_tasks_show', {'id': task.id}) }}\">Show</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"btn btn-ls btn-primary\"  href=\"{{ path('app_tasks_inprogress', {'id': task.id}) }}\">Change to in-progress</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"7\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t</div>
\t\t\t
</div>
\t\t\t
\t\t</div>
\t</div>
</div>
{% endblock %}
", "tasks/done.html.twig", "C:\\Users\\ADMIN\\Desktop\\Symfony-projects\\project_manager\\templates\\tasks\\done.html.twig");
    }
}
