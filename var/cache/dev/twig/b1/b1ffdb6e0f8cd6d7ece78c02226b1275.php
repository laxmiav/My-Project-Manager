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

/* tasks/show.html.twig */
class __TwigTemplate_b61ce1cd03d78426a55d567faf7aad9d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tasks/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tasks/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tasks/show.html.twig", 1);
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

        echo "Tasks
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
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 mt-5 offset-md-3\">
\t\t\t\t<h1>Tasks</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Task</th>
\t\t\t\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 21, $this->source); })()), "Description", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Assign to</th>
\t\t\t\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 25, $this->source); })()), "assignto", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Deadline_date</th>
\t\t\t\t\t\t\t<td>";
        // line 29
        ((twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 29, $this->source); })()), "DeadlineDate", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 29, $this->source); })()), "DeadlineDate", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Priority</th>
\t\t\t\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 33, $this->source); })()), "Priority", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t<td>";
        // line 37
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 37, $this->source); })()), "Status", [], "any", false, false, false, 37) == 1)) ? ("TODO") : (""));
        echo "</td>
\t\t\t\t\t\t\t<td>";
        // line 38
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 38, $this->source); })()), "Status", [], "any", false, false, false, 38) == 2)) ? ("In Progress") : (""));
        echo "</td>
\t\t\t\t\t\t\t<td>";
        // line 39
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 39, $this->source); })()), "Status", [], "any", false, false, false, 39) == 3)) ? ("Done") : (""));
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t<a class=\"btn btn-ls btn-primary\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_index", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 44, $this->source); })()), "Project", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\">Back to list</a>

\t\t\t\t<a class=\"btn btn-ls btn-primary\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tasks_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new RuntimeError('Variable "task" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\">Edit</a>

\t\t\t\t";
        // line 48
        echo twig_include($this->env, $context, "tasks/_delete_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tasks/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 48,  157 => 46,  152 => 44,  144 => 39,  140 => 38,  136 => 37,  129 => 33,  122 => 29,  115 => 25,  108 => 21,  101 => 17,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tasks
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 mt-5 offset-md-3\">
\t\t\t\t<h1>Tasks</h1>

\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Task</th>
\t\t\t\t\t\t\t<td>{{ task.name }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t<td>{{ task.Description }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Assign to</th>
\t\t\t\t\t\t\t<td>{{ task.assignto }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Deadline_date</th>
\t\t\t\t\t\t\t<td>{{ task.DeadlineDate ? task.DeadlineDate|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Priority</th>
\t\t\t\t\t\t\t<td>{{ task.Priority }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t<td>{{ task.Status == 1? \"TODO\":''  }}</td>
\t\t\t\t\t\t\t<td>{{ task.Status == 2? \"In Progress\":''  }}</td>
\t\t\t\t\t\t\t<td>{{ task.Status == 3? \"Done\":''  }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t<a class=\"btn btn-ls btn-primary\" href=\"{{ path('app_tasks_index',{'id': task.Project.id}) }}\">Back to list</a>

\t\t\t\t<a class=\"btn btn-ls btn-primary\" href=\"{{ path('app_tasks_edit', {'id': task.id}) }}\">Edit</a>

\t\t\t\t{{ include('tasks/_delete_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "tasks/show.html.twig", "C:\\Users\\ADMIN\\Desktop\\Symfony-projects\\My-Project-Manager\\templates\\tasks\\show.html.twig");
    }
}
