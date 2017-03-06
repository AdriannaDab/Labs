<?php

/* base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92facb31670b404efd743d6311758657dfddab9f11d0e6a38ca73f072ccf3fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92facb31670b404efd743d6311758657dfddab9f11d0e6a38ca73f072ccf3fd3->enter($__internal_92facb31670b404efd743d6311758657dfddab9f11d0e6a38ca73f072ccf3fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0e7c22d31b39f2d81d325975c212c3a04f94a2e7f26d0a0f596f4b1fa98474ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7c22d31b39f2d81d325975c212c3a04f94a2e7f26d0a0f596f4b1fa98474ee->enter($__internal_0e7c22d31b39f2d81d325975c212c3a04f94a2e7f26d0a0f596f4b1fa98474ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_92facb31670b404efd743d6311758657dfddab9f11d0e6a38ca73f072ccf3fd3->leave($__internal_92facb31670b404efd743d6311758657dfddab9f11d0e6a38ca73f072ccf3fd3_prof);

        
        $__internal_0e7c22d31b39f2d81d325975c212c3a04f94a2e7f26d0a0f596f4b1fa98474ee->leave($__internal_0e7c22d31b39f2d81d325975c212c3a04f94a2e7f26d0a0f596f4b1fa98474ee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8579ee7ce4a7daa6b7fd6ac506ac56ac5bec42e5620627ea9e47692a0be5cc57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8579ee7ce4a7daa6b7fd6ac506ac56ac5bec42e5620627ea9e47692a0be5cc57->enter($__internal_8579ee7ce4a7daa6b7fd6ac506ac56ac5bec42e5620627ea9e47692a0be5cc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f25039666c71b3b777bc373196f4d4dc027885b7e3b460ed6487bca13c7bfd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f25039666c71b3b777bc373196f4d4dc027885b7e3b460ed6487bca13c7bfd9->enter($__internal_8f25039666c71b3b777bc373196f4d4dc027885b7e3b460ed6487bca13c7bfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Welcome!"), "html", null, true);
        
        $__internal_8f25039666c71b3b777bc373196f4d4dc027885b7e3b460ed6487bca13c7bfd9->leave($__internal_8f25039666c71b3b777bc373196f4d4dc027885b7e3b460ed6487bca13c7bfd9_prof);

        
        $__internal_8579ee7ce4a7daa6b7fd6ac506ac56ac5bec42e5620627ea9e47692a0be5cc57->leave($__internal_8579ee7ce4a7daa6b7fd6ac506ac56ac5bec42e5620627ea9e47692a0be5cc57_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b7d0bbe59cc9c5cd831d6280613a6d30baa56a2e4979c4d2944fbc24d4475aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d0bbe59cc9c5cd831d6280613a6d30baa56a2e4979c4d2944fbc24d4475aec->enter($__internal_b7d0bbe59cc9c5cd831d6280613a6d30baa56a2e4979c4d2944fbc24d4475aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7507f30edff3dbb356edfc2f18009a75a6924861c18b7f5df9ac9b0fa4fd8c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7507f30edff3dbb356edfc2f18009a75a6924861c18b7f5df9ac9b0fa4fd8c21->enter($__internal_7507f30edff3dbb356edfc2f18009a75a6924861c18b7f5df9ac9b0fa4fd8c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7507f30edff3dbb356edfc2f18009a75a6924861c18b7f5df9ac9b0fa4fd8c21->leave($__internal_7507f30edff3dbb356edfc2f18009a75a6924861c18b7f5df9ac9b0fa4fd8c21_prof);

        
        $__internal_b7d0bbe59cc9c5cd831d6280613a6d30baa56a2e4979c4d2944fbc24d4475aec->leave($__internal_b7d0bbe59cc9c5cd831d6280613a6d30baa56a2e4979c4d2944fbc24d4475aec_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_50b3b0966e22b539f9809ba7ea79b9ab85af34876b0596762b6717d7adfacdd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b3b0966e22b539f9809ba7ea79b9ab85af34876b0596762b6717d7adfacdd9->enter($__internal_50b3b0966e22b539f9809ba7ea79b9ab85af34876b0596762b6717d7adfacdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f2e29f09ed47a8ec16ec2e2fa9d7adf1e707ff512386898665572e930fde6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2e29f09ed47a8ec16ec2e2fa9d7adf1e707ff512386898665572e930fde6bb->enter($__internal_7f2e29f09ed47a8ec16ec2e2fa9d7adf1e707ff512386898665572e930fde6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7f2e29f09ed47a8ec16ec2e2fa9d7adf1e707ff512386898665572e930fde6bb->leave($__internal_7f2e29f09ed47a8ec16ec2e2fa9d7adf1e707ff512386898665572e930fde6bb_prof);

        
        $__internal_50b3b0966e22b539f9809ba7ea79b9ab85af34876b0596762b6717d7adfacdd9->leave($__internal_50b3b0966e22b539f9809ba7ea79b9ab85af34876b0596762b6717d7adfacdd9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a3f9518711c9e77e38de5149480c77889e9697a65485cf0121a201f02e489d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f9518711c9e77e38de5149480c77889e9697a65485cf0121a201f02e489d2b->enter($__internal_a3f9518711c9e77e38de5149480c77889e9697a65485cf0121a201f02e489d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b7c3515cf24e3997a1bdd0531d0357eb2a38f5f922e6553417527edf14f62a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c3515cf24e3997a1bdd0531d0357eb2a38f5f922e6553417527edf14f62a2b->enter($__internal_b7c3515cf24e3997a1bdd0531d0357eb2a38f5f922e6553417527edf14f62a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b7c3515cf24e3997a1bdd0531d0357eb2a38f5f922e6553417527edf14f62a2b->leave($__internal_b7c3515cf24e3997a1bdd0531d0357eb2a38f5f922e6553417527edf14f62a2b_prof);

        
        $__internal_a3f9518711c9e77e38de5149480c77889e9697a65485cf0121a201f02e489d2b->leave($__internal_a3f9518711c9e77e38de5149480c77889e9697a65485cf0121a201f02e489d2b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{{ 'Welcome!'|trans}}{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/adrianna/adaproba/adaproba/app/Resources/views/base.html.twig");
    }
}
