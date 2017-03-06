<?php

/* bookmark/index.html.twig */
class __TwigTemplate_723abc5fae27c1ad2b7cf2b7b5f79450530329e25e2f42fd2f542c86a98d4266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bookmark/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8947fc56b87050783595bf7569a1c23560c80a24630d3aa321a3893185723f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8947fc56b87050783595bf7569a1c23560c80a24630d3aa321a3893185723f3b->enter($__internal_8947fc56b87050783595bf7569a1c23560c80a24630d3aa321a3893185723f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/index.html.twig"));

        $__internal_4219ad21d2815820f01f9af88e4dd28c685ccd65fe4c350ba35307b72d5c679c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4219ad21d2815820f01f9af88e4dd28c685ccd65fe4c350ba35307b72d5c679c->enter($__internal_4219ad21d2815820f01f9af88e4dd28c685ccd65fe4c350ba35307b72d5c679c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8947fc56b87050783595bf7569a1c23560c80a24630d3aa321a3893185723f3b->leave($__internal_8947fc56b87050783595bf7569a1c23560c80a24630d3aa321a3893185723f3b_prof);

        
        $__internal_4219ad21d2815820f01f9af88e4dd28c685ccd65fe4c350ba35307b72d5c679c->leave($__internal_4219ad21d2815820f01f9af88e4dd28c685ccd65fe4c350ba35307b72d5c679c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_190843a9a750d7ae5c722e3fdac153ddeab0b30b4322459765cf9f584a397ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190843a9a750d7ae5c722e3fdac153ddeab0b30b4322459765cf9f584a397ca5->enter($__internal_190843a9a750d7ae5c722e3fdac153ddeab0b30b4322459765cf9f584a397ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_562347f4f96c31739d577987d9f71d4a46657823dd9844d4e37a1aba64859167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562347f4f96c31739d577987d9f71d4a46657823dd9844d4e37a1aba64859167->enter($__internal_562347f4f96c31739d577987d9f71d4a46657823dd9844d4e37a1aba64859167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.bookmarks"), "html", null, true);
        echo "</h1>

    ";
        // line 7
        if ((array_key_exists("bookmarks", $context) && twig_length_filter($this->env, (isset($context["bookmarks"]) ? $context["bookmarks"] : $this->getContext($context, "bookmarks"))))) {
            // line 8
            echo "
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bookmarks"]) ? $context["bookmarks"] : $this->getContext($context, "bookmarks")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["bookmark"]) {
                // line 10
                echo "            <dl>
                <dt>";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.id"), "html", null, true);
                echo "</dt>
                <dd>";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "</dd>
                <dt>";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.url"), "html", null, true);
                echo "</dt>
                <dd>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["bookmark"], "url", array()), "html", null, true);
                echo "</dd>
            </dl>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bookmark'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "
    ";
        } else {
            // line 19
            echo "        <p>
            ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message.empty_list"), "html", null, true);
            echo "
        </p>
    ";
        }
        // line 23
        echo "
";
        
        $__internal_562347f4f96c31739d577987d9f71d4a46657823dd9844d4e37a1aba64859167->leave($__internal_562347f4f96c31739d577987d9f71d4a46657823dd9844d4e37a1aba64859167_prof);

        
        $__internal_190843a9a750d7ae5c722e3fdac153ddeab0b30b4322459765cf9f584a397ca5->leave($__internal_190843a9a750d7ae5c722e3fdac153ddeab0b30b4322459765cf9f584a397ca5_prof);

    }

    public function getTemplateName()
    {
        return "bookmark/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 23,  118 => 20,  115 => 19,  111 => 17,  94 => 14,  90 => 13,  86 => 12,  82 => 11,  79 => 10,  62 => 9,  59 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <h1>{{ 'title.bookmarks'|trans }}</h1>

    {% if bookmarks is defined and bookmarks|length %}

        {% for bookmark in bookmarks %}
            <dl>
                <dt>{{ 'label.id'|trans }}</dt>
                <dd>{{ loop.index0 }}</dd>
                <dt>{{ 'label.url'|trans }}</dt>
                <dd>{{ bookmark.url }}</dd>
            </dl>
        {% endfor %}

    {% else %}
        <p>
            {{ 'message.empty_list'|trans }}
        </p>
    {% endif %}

{% endblock %}", "bookmark/index.html.twig", "/home/adrianna/adaproba/adaproba/app/Resources/views/bookmark/index.html.twig");
    }
}
