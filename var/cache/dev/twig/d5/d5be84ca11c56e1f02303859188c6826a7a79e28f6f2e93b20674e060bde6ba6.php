<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
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
        $__internal_6fe29b8ddfb9e8bd463df3f62f3568b20f7d9caf7881d2678bdb01edc495b425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fe29b8ddfb9e8bd463df3f62f3568b20f7d9caf7881d2678bdb01edc495b425->enter($__internal_6fe29b8ddfb9e8bd463df3f62f3568b20f7d9caf7881d2678bdb01edc495b425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_da5aed46cfb344d60422bdbbc99a48d752649c09746246427cac1056ebec3b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5aed46cfb344d60422bdbbc99a48d752649c09746246427cac1056ebec3b50->enter($__internal_da5aed46cfb344d60422bdbbc99a48d752649c09746246427cac1056ebec3b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fe29b8ddfb9e8bd463df3f62f3568b20f7d9caf7881d2678bdb01edc495b425->leave($__internal_6fe29b8ddfb9e8bd463df3f62f3568b20f7d9caf7881d2678bdb01edc495b425_prof);

        
        $__internal_da5aed46cfb344d60422bdbbc99a48d752649c09746246427cac1056ebec3b50->leave($__internal_da5aed46cfb344d60422bdbbc99a48d752649c09746246427cac1056ebec3b50_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9105d8a8d8e261aec20023d8b63786808913a88cf743bf93b217f45c670e8b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9105d8a8d8e261aec20023d8b63786808913a88cf743bf93b217f45c670e8b7f->enter($__internal_9105d8a8d8e261aec20023d8b63786808913a88cf743bf93b217f45c670e8b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8d60bd738911f1dc691bb34bd2e5eb4ab25a705ffdac98c0fa247f06750dd28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d60bd738911f1dc691bb34bd2e5eb4ab25a705ffdac98c0fa247f06750dd28c->enter($__internal_8d60bd738911f1dc691bb34bd2e5eb4ab25a705ffdac98c0fa247f06750dd28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8d60bd738911f1dc691bb34bd2e5eb4ab25a705ffdac98c0fa247f06750dd28c->leave($__internal_8d60bd738911f1dc691bb34bd2e5eb4ab25a705ffdac98c0fa247f06750dd28c_prof);

        
        $__internal_9105d8a8d8e261aec20023d8b63786808913a88cf743bf93b217f45c670e8b7f->leave($__internal_9105d8a8d8e261aec20023d8b63786808913a88cf743bf93b217f45c670e8b7f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f6d4ec83f450cf5df917e3c9c9d73c0e62b9f27fe66088e8283e64c4c9697d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d4ec83f450cf5df917e3c9c9d73c0e62b9f27fe66088e8283e64c4c9697d98->enter($__internal_f6d4ec83f450cf5df917e3c9c9d73c0e62b9f27fe66088e8283e64c4c9697d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_43ae595dc61df5680aee56bf2f138eb19605d5f2df8299bb076a3a357dfa7ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ae595dc61df5680aee56bf2f138eb19605d5f2df8299bb076a3a357dfa7ec7->enter($__internal_43ae595dc61df5680aee56bf2f138eb19605d5f2df8299bb076a3a357dfa7ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_43ae595dc61df5680aee56bf2f138eb19605d5f2df8299bb076a3a357dfa7ec7->leave($__internal_43ae595dc61df5680aee56bf2f138eb19605d5f2df8299bb076a3a357dfa7ec7_prof);

        
        $__internal_f6d4ec83f450cf5df917e3c9c9d73c0e62b9f27fe66088e8283e64c4c9697d98->leave($__internal_f6d4ec83f450cf5df917e3c9c9d73c0e62b9f27fe66088e8283e64c4c9697d98_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14e22c02ce680faaea42a731a2daff6333b82976edeaf75734bbf49cda39a545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e22c02ce680faaea42a731a2daff6333b82976edeaf75734bbf49cda39a545->enter($__internal_14e22c02ce680faaea42a731a2daff6333b82976edeaf75734bbf49cda39a545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_869911dfd9f9acc37c2fee0ccdb8a97527fe30d3b5c85d9cebee92b18ce69c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869911dfd9f9acc37c2fee0ccdb8a97527fe30d3b5c85d9cebee92b18ce69c1b->enter($__internal_869911dfd9f9acc37c2fee0ccdb8a97527fe30d3b5c85d9cebee92b18ce69c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_869911dfd9f9acc37c2fee0ccdb8a97527fe30d3b5c85d9cebee92b18ce69c1b->leave($__internal_869911dfd9f9acc37c2fee0ccdb8a97527fe30d3b5c85d9cebee92b18ce69c1b_prof);

        
        $__internal_14e22c02ce680faaea42a731a2daff6333b82976edeaf75734bbf49cda39a545->leave($__internal_14e22c02ce680faaea42a731a2daff6333b82976edeaf75734bbf49cda39a545_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/ministere/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
