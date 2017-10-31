<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32d2d182b70fb8099403ffc1c3e1236cb75b3132c8209e7bcaa72fe70e1015f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d2d182b70fb8099403ffc1c3e1236cb75b3132c8209e7bcaa72fe70e1015f7->enter($__internal_32d2d182b70fb8099403ffc1c3e1236cb75b3132c8209e7bcaa72fe70e1015f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b1af185b9023b8a06029fadb52d3335625e53dc059719b5e17e47c3052e9f775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1af185b9023b8a06029fadb52d3335625e53dc059719b5e17e47c3052e9f775->enter($__internal_b1af185b9023b8a06029fadb52d3335625e53dc059719b5e17e47c3052e9f775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_32d2d182b70fb8099403ffc1c3e1236cb75b3132c8209e7bcaa72fe70e1015f7->leave($__internal_32d2d182b70fb8099403ffc1c3e1236cb75b3132c8209e7bcaa72fe70e1015f7_prof);

        
        $__internal_b1af185b9023b8a06029fadb52d3335625e53dc059719b5e17e47c3052e9f775->leave($__internal_b1af185b9023b8a06029fadb52d3335625e53dc059719b5e17e47c3052e9f775_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33beadaf32187965f5670ffba10914a961a021ce8a97ee74bd989d49f54f3451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33beadaf32187965f5670ffba10914a961a021ce8a97ee74bd989d49f54f3451->enter($__internal_33beadaf32187965f5670ffba10914a961a021ce8a97ee74bd989d49f54f3451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_27868b23dfc47f76c367ee118dfae3a20ba7977895d3c3cabc417e4b2b8a5c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27868b23dfc47f76c367ee118dfae3a20ba7977895d3c3cabc417e4b2b8a5c85->enter($__internal_27868b23dfc47f76c367ee118dfae3a20ba7977895d3c3cabc417e4b2b8a5c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_27868b23dfc47f76c367ee118dfae3a20ba7977895d3c3cabc417e4b2b8a5c85->leave($__internal_27868b23dfc47f76c367ee118dfae3a20ba7977895d3c3cabc417e4b2b8a5c85_prof);

        
        $__internal_33beadaf32187965f5670ffba10914a961a021ce8a97ee74bd989d49f54f3451->leave($__internal_33beadaf32187965f5670ffba10914a961a021ce8a97ee74bd989d49f54f3451_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff6a95901dd709e128f642337251635a3585fc6ff2b8e59e6b1ff7ff668e826c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff6a95901dd709e128f642337251635a3585fc6ff2b8e59e6b1ff7ff668e826c->enter($__internal_ff6a95901dd709e128f642337251635a3585fc6ff2b8e59e6b1ff7ff668e826c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_680a1be72033b870fb5de84461690b53ff648210ce142b80d47fdee3ff622143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680a1be72033b870fb5de84461690b53ff648210ce142b80d47fdee3ff622143->enter($__internal_680a1be72033b870fb5de84461690b53ff648210ce142b80d47fdee3ff622143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_680a1be72033b870fb5de84461690b53ff648210ce142b80d47fdee3ff622143->leave($__internal_680a1be72033b870fb5de84461690b53ff648210ce142b80d47fdee3ff622143_prof);

        
        $__internal_ff6a95901dd709e128f642337251635a3585fc6ff2b8e59e6b1ff7ff668e826c->leave($__internal_ff6a95901dd709e128f642337251635a3585fc6ff2b8e59e6b1ff7ff668e826c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d4392da37c7b74289b84fa6e982f991ad748153eed0282817d1a8d94850d7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d4392da37c7b74289b84fa6e982f991ad748153eed0282817d1a8d94850d7d7->enter($__internal_7d4392da37c7b74289b84fa6e982f991ad748153eed0282817d1a8d94850d7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58161bfceca8432743bb65ac277485af3af2715d56b8df41f85a0ef723d1aa05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58161bfceca8432743bb65ac277485af3af2715d56b8df41f85a0ef723d1aa05->enter($__internal_58161bfceca8432743bb65ac277485af3af2715d56b8df41f85a0ef723d1aa05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_58161bfceca8432743bb65ac277485af3af2715d56b8df41f85a0ef723d1aa05->leave($__internal_58161bfceca8432743bb65ac277485af3af2715d56b8df41f85a0ef723d1aa05_prof);

        
        $__internal_7d4392da37c7b74289b84fa6e982f991ad748153eed0282817d1a8d94850d7d7->leave($__internal_7d4392da37c7b74289b84fa6e982f991ad748153eed0282817d1a8d94850d7d7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/ministere/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
