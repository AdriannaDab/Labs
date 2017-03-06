<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_3b871a574ce96d5b73234df2e2cbb3b31e639fa625d7b1f01451cabad709261f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b871a574ce96d5b73234df2e2cbb3b31e639fa625d7b1f01451cabad709261f->enter($__internal_3b871a574ce96d5b73234df2e2cbb3b31e639fa625d7b1f01451cabad709261f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_26a14bb7680ef8e49aa9e5c2f51bcd68af91e7e2ed01f52685905530bfe822fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a14bb7680ef8e49aa9e5c2f51bcd68af91e7e2ed01f52685905530bfe822fe->enter($__internal_26a14bb7680ef8e49aa9e5c2f51bcd68af91e7e2ed01f52685905530bfe822fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b871a574ce96d5b73234df2e2cbb3b31e639fa625d7b1f01451cabad709261f->leave($__internal_3b871a574ce96d5b73234df2e2cbb3b31e639fa625d7b1f01451cabad709261f_prof);

        
        $__internal_26a14bb7680ef8e49aa9e5c2f51bcd68af91e7e2ed01f52685905530bfe822fe->leave($__internal_26a14bb7680ef8e49aa9e5c2f51bcd68af91e7e2ed01f52685905530bfe822fe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b1398871eea9df8f70ea9c7c72a407594d3b0d3df8cbab8621fb4264d35a0189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1398871eea9df8f70ea9c7c72a407594d3b0d3df8cbab8621fb4264d35a0189->enter($__internal_b1398871eea9df8f70ea9c7c72a407594d3b0d3df8cbab8621fb4264d35a0189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1b8170bb0d4b2b30371836013d26f4a3a595c47d82e023f3a08c664eaea15c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8170bb0d4b2b30371836013d26f4a3a595c47d82e023f3a08c664eaea15c37->enter($__internal_1b8170bb0d4b2b30371836013d26f4a3a595c47d82e023f3a08c664eaea15c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1b8170bb0d4b2b30371836013d26f4a3a595c47d82e023f3a08c664eaea15c37->leave($__internal_1b8170bb0d4b2b30371836013d26f4a3a595c47d82e023f3a08c664eaea15c37_prof);

        
        $__internal_b1398871eea9df8f70ea9c7c72a407594d3b0d3df8cbab8621fb4264d35a0189->leave($__internal_b1398871eea9df8f70ea9c7c72a407594d3b0d3df8cbab8621fb4264d35a0189_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_125598d9c0436513d3968273bb6905a32655ffdf160efb9d1400be59e257b2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_125598d9c0436513d3968273bb6905a32655ffdf160efb9d1400be59e257b2b3->enter($__internal_125598d9c0436513d3968273bb6905a32655ffdf160efb9d1400be59e257b2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_69d7710bbc9947dc2e0b81eb261e097020292af94a2fb178dcc83473a7672b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d7710bbc9947dc2e0b81eb261e097020292af94a2fb178dcc83473a7672b03->enter($__internal_69d7710bbc9947dc2e0b81eb261e097020292af94a2fb178dcc83473a7672b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_69d7710bbc9947dc2e0b81eb261e097020292af94a2fb178dcc83473a7672b03->leave($__internal_69d7710bbc9947dc2e0b81eb261e097020292af94a2fb178dcc83473a7672b03_prof);

        
        $__internal_125598d9c0436513d3968273bb6905a32655ffdf160efb9d1400be59e257b2b3->leave($__internal_125598d9c0436513d3968273bb6905a32655ffdf160efb9d1400be59e257b2b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9fe922a5157a5b052db1dcd91ad35d91c075b25b4ad6e42a4160af7fcf825075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe922a5157a5b052db1dcd91ad35d91c075b25b4ad6e42a4160af7fcf825075->enter($__internal_9fe922a5157a5b052db1dcd91ad35d91c075b25b4ad6e42a4160af7fcf825075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b22593004fb7e54e2198a17111b246f2c149f11493100c251f67bf29734b6dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22593004fb7e54e2198a17111b246f2c149f11493100c251f67bf29734b6dd6->enter($__internal_b22593004fb7e54e2198a17111b246f2c149f11493100c251f67bf29734b6dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b22593004fb7e54e2198a17111b246f2c149f11493100c251f67bf29734b6dd6->leave($__internal_b22593004fb7e54e2198a17111b246f2c149f11493100c251f67bf29734b6dd6_prof);

        
        $__internal_9fe922a5157a5b052db1dcd91ad35d91c075b25b4ad6e42a4160af7fcf825075->leave($__internal_9fe922a5157a5b052db1dcd91ad35d91c075b25b4ad6e42a4160af7fcf825075_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/adrianna/adaproba/adaproba/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
