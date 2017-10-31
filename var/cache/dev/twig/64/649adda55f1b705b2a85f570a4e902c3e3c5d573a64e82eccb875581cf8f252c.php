<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_ce4774a90f28aa43a095d2c3907668d9d2931820a14be514cecc00ac1345b79b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4774a90f28aa43a095d2c3907668d9d2931820a14be514cecc00ac1345b79b->enter($__internal_ce4774a90f28aa43a095d2c3907668d9d2931820a14be514cecc00ac1345b79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_988cc628f8dc72fa8d7dc994b97e86f58d6174dd619f8361fd8b0db9a07f94d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988cc628f8dc72fa8d7dc994b97e86f58d6174dd619f8361fd8b0db9a07f94d8->enter($__internal_988cc628f8dc72fa8d7dc994b97e86f58d6174dd619f8361fd8b0db9a07f94d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce4774a90f28aa43a095d2c3907668d9d2931820a14be514cecc00ac1345b79b->leave($__internal_ce4774a90f28aa43a095d2c3907668d9d2931820a14be514cecc00ac1345b79b_prof);

        
        $__internal_988cc628f8dc72fa8d7dc994b97e86f58d6174dd619f8361fd8b0db9a07f94d8->leave($__internal_988cc628f8dc72fa8d7dc994b97e86f58d6174dd619f8361fd8b0db9a07f94d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d2bd1370f7ecff3f260c9b39d0676b682932380a60de8c650bdf3e07c46c8dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2bd1370f7ecff3f260c9b39d0676b682932380a60de8c650bdf3e07c46c8dc7->enter($__internal_d2bd1370f7ecff3f260c9b39d0676b682932380a60de8c650bdf3e07c46c8dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f400482d9bc24846b85410b1c6154eb9a3e225c89e31769d1c9bc0af61d6bbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f400482d9bc24846b85410b1c6154eb9a3e225c89e31769d1c9bc0af61d6bbd5->enter($__internal_f400482d9bc24846b85410b1c6154eb9a3e225c89e31769d1c9bc0af61d6bbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f400482d9bc24846b85410b1c6154eb9a3e225c89e31769d1c9bc0af61d6bbd5->leave($__internal_f400482d9bc24846b85410b1c6154eb9a3e225c89e31769d1c9bc0af61d6bbd5_prof);

        
        $__internal_d2bd1370f7ecff3f260c9b39d0676b682932380a60de8c650bdf3e07c46c8dc7->leave($__internal_d2bd1370f7ecff3f260c9b39d0676b682932380a60de8c650bdf3e07c46c8dc7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1dd6b61c52bb16cbbad255424b0bf755eaae6f485756cd673d08228b248e0675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd6b61c52bb16cbbad255424b0bf755eaae6f485756cd673d08228b248e0675->enter($__internal_1dd6b61c52bb16cbbad255424b0bf755eaae6f485756cd673d08228b248e0675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f193b82be5d18a4a4c9e30ddb26380d6dd4636ac627b2c82dc6eef451210a885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f193b82be5d18a4a4c9e30ddb26380d6dd4636ac627b2c82dc6eef451210a885->enter($__internal_f193b82be5d18a4a4c9e30ddb26380d6dd4636ac627b2c82dc6eef451210a885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f193b82be5d18a4a4c9e30ddb26380d6dd4636ac627b2c82dc6eef451210a885->leave($__internal_f193b82be5d18a4a4c9e30ddb26380d6dd4636ac627b2c82dc6eef451210a885_prof);

        
        $__internal_1dd6b61c52bb16cbbad255424b0bf755eaae6f485756cd673d08228b248e0675->leave($__internal_1dd6b61c52bb16cbbad255424b0bf755eaae6f485756cd673d08228b248e0675_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b42d4f3bbcc5713c4b5acd34c64a322dd658cc7d9a0a40d5f43f8815cca8ab89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b42d4f3bbcc5713c4b5acd34c64a322dd658cc7d9a0a40d5f43f8815cca8ab89->enter($__internal_b42d4f3bbcc5713c4b5acd34c64a322dd658cc7d9a0a40d5f43f8815cca8ab89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_27ad1a62506c8230fa85ed3bac9ad834ded46fcb80d265b7cd624659f06a3213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ad1a62506c8230fa85ed3bac9ad834ded46fcb80d265b7cd624659f06a3213->enter($__internal_27ad1a62506c8230fa85ed3bac9ad834ded46fcb80d265b7cd624659f06a3213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_27ad1a62506c8230fa85ed3bac9ad834ded46fcb80d265b7cd624659f06a3213->leave($__internal_27ad1a62506c8230fa85ed3bac9ad834ded46fcb80d265b7cd624659f06a3213_prof);

        
        $__internal_b42d4f3bbcc5713c4b5acd34c64a322dd658cc7d9a0a40d5f43f8815cca8ab89->leave($__internal_b42d4f3bbcc5713c4b5acd34c64a322dd658cc7d9a0a40d5f43f8815cca8ab89_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/ministere/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
