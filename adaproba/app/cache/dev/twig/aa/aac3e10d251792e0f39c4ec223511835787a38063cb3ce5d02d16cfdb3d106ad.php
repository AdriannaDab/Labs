<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_566ddb36d61c455e74fc67ff96f4b3312b9be33a2eede8a9a86ada4a140b6620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566ddb36d61c455e74fc67ff96f4b3312b9be33a2eede8a9a86ada4a140b6620->enter($__internal_566ddb36d61c455e74fc67ff96f4b3312b9be33a2eede8a9a86ada4a140b6620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_04837112242a33d5da0c21668150cde9886efa24a78e81937316d50a50ba07f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04837112242a33d5da0c21668150cde9886efa24a78e81937316d50a50ba07f2->enter($__internal_04837112242a33d5da0c21668150cde9886efa24a78e81937316d50a50ba07f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_566ddb36d61c455e74fc67ff96f4b3312b9be33a2eede8a9a86ada4a140b6620->leave($__internal_566ddb36d61c455e74fc67ff96f4b3312b9be33a2eede8a9a86ada4a140b6620_prof);

        
        $__internal_04837112242a33d5da0c21668150cde9886efa24a78e81937316d50a50ba07f2->leave($__internal_04837112242a33d5da0c21668150cde9886efa24a78e81937316d50a50ba07f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_23f14de10ad2b99465fdca218360092deb8ee046067adb8d0b0dec04aa1eef15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f14de10ad2b99465fdca218360092deb8ee046067adb8d0b0dec04aa1eef15->enter($__internal_23f14de10ad2b99465fdca218360092deb8ee046067adb8d0b0dec04aa1eef15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea3bd57a912e8cdcfea90a447b45a19a3d98761e4f7d58eb7160f36124ed3838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3bd57a912e8cdcfea90a447b45a19a3d98761e4f7d58eb7160f36124ed3838->enter($__internal_ea3bd57a912e8cdcfea90a447b45a19a3d98761e4f7d58eb7160f36124ed3838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ea3bd57a912e8cdcfea90a447b45a19a3d98761e4f7d58eb7160f36124ed3838->leave($__internal_ea3bd57a912e8cdcfea90a447b45a19a3d98761e4f7d58eb7160f36124ed3838_prof);

        
        $__internal_23f14de10ad2b99465fdca218360092deb8ee046067adb8d0b0dec04aa1eef15->leave($__internal_23f14de10ad2b99465fdca218360092deb8ee046067adb8d0b0dec04aa1eef15_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_52fc16106b8d80c79a4ae7e0063c84e77afff8338b8f202c18518a653cc217b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52fc16106b8d80c79a4ae7e0063c84e77afff8338b8f202c18518a653cc217b9->enter($__internal_52fc16106b8d80c79a4ae7e0063c84e77afff8338b8f202c18518a653cc217b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fb5c736e4c238cab002bfea9b894578cfd0daff8bcdba7e7977a75f815d94e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5c736e4c238cab002bfea9b894578cfd0daff8bcdba7e7977a75f815d94e34->enter($__internal_fb5c736e4c238cab002bfea9b894578cfd0daff8bcdba7e7977a75f815d94e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fb5c736e4c238cab002bfea9b894578cfd0daff8bcdba7e7977a75f815d94e34->leave($__internal_fb5c736e4c238cab002bfea9b894578cfd0daff8bcdba7e7977a75f815d94e34_prof);

        
        $__internal_52fc16106b8d80c79a4ae7e0063c84e77afff8338b8f202c18518a653cc217b9->leave($__internal_52fc16106b8d80c79a4ae7e0063c84e77afff8338b8f202c18518a653cc217b9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_95f6422961e7a8af4a32f6cdc13dd1df379939b86e042d4c80b4193e813eba55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f6422961e7a8af4a32f6cdc13dd1df379939b86e042d4c80b4193e813eba55->enter($__internal_95f6422961e7a8af4a32f6cdc13dd1df379939b86e042d4c80b4193e813eba55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_15a0ada01f7ed05458341d08a6201ef4df7d4c385d532d916c28be50d6ec5401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a0ada01f7ed05458341d08a6201ef4df7d4c385d532d916c28be50d6ec5401->enter($__internal_15a0ada01f7ed05458341d08a6201ef4df7d4c385d532d916c28be50d6ec5401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_15a0ada01f7ed05458341d08a6201ef4df7d4c385d532d916c28be50d6ec5401->leave($__internal_15a0ada01f7ed05458341d08a6201ef4df7d4c385d532d916c28be50d6ec5401_prof);

        
        $__internal_95f6422961e7a8af4a32f6cdc13dd1df379939b86e042d4c80b4193e813eba55->leave($__internal_95f6422961e7a8af4a32f6cdc13dd1df379939b86e042d4c80b4193e813eba55_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/adrianna/adaproba/adaproba/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
