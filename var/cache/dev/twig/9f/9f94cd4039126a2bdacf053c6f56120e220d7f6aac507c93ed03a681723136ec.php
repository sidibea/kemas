<?php

/* KemaMainBundle::about.html.twig */
class __TwigTemplate_0dd9b9637fab175e431d31cf4806af4f9dcc88e1a71500ec9b2f6a53583b8007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "KemaMainBundle::about.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3006e0646d24d19688e0245b750fc150a0fd1826e8fb64b20c8ae19d9d922407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3006e0646d24d19688e0245b750fc150a0fd1826e8fb64b20c8ae19d9d922407->enter($__internal_3006e0646d24d19688e0245b750fc150a0fd1826e8fb64b20c8ae19d9d922407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KemaMainBundle::about.html.twig"));

        $__internal_445504c7f6cc15371b0c17686eaf564651affa2ef58cbb4ae250ebd2096dc7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445504c7f6cc15371b0c17686eaf564651affa2ef58cbb4ae250ebd2096dc7fe->enter($__internal_445504c7f6cc15371b0c17686eaf564651affa2ef58cbb4ae250ebd2096dc7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KemaMainBundle::about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3006e0646d24d19688e0245b750fc150a0fd1826e8fb64b20c8ae19d9d922407->leave($__internal_3006e0646d24d19688e0245b750fc150a0fd1826e8fb64b20c8ae19d9d922407_prof);

        
        $__internal_445504c7f6cc15371b0c17686eaf564651affa2ef58cbb4ae250ebd2096dc7fe->leave($__internal_445504c7f6cc15371b0c17686eaf564651affa2ef58cbb4ae250ebd2096dc7fe_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_75c42edec576fe6a04742a4e3757e39d47c8f4207caea6c6491c60bab256e683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c42edec576fe6a04742a4e3757e39d47c8f4207caea6c6491c60bab256e683->enter($__internal_75c42edec576fe6a04742a4e3757e39d47c8f4207caea6c6491c60bab256e683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_16d2440aa5659ccd0ab99ee91856282238de1f5c68c5a39bc2184809b95fbf3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d2440aa5659ccd0ab99ee91856282238de1f5c68c5a39bc2184809b95fbf3f->enter($__internal_16d2440aa5659ccd0ab99ee91856282238de1f5c68c5a39bc2184809b95fbf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "A propos du Ministere des transport";
        
        $__internal_16d2440aa5659ccd0ab99ee91856282238de1f5c68c5a39bc2184809b95fbf3f->leave($__internal_16d2440aa5659ccd0ab99ee91856282238de1f5c68c5a39bc2184809b95fbf3f_prof);

        
        $__internal_75c42edec576fe6a04742a4e3757e39d47c8f4207caea6c6491c60bab256e683->leave($__internal_75c42edec576fe6a04742a4e3757e39d47c8f4207caea6c6491c60bab256e683_prof);

    }

    // line 5
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_82cd7f6c35d21f1204e1eb93def1f51ca424cfd2f62c3a88ff84a2bae3484432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82cd7f6c35d21f1204e1eb93def1f51ca424cfd2f62c3a88ff84a2bae3484432->enter($__internal_82cd7f6c35d21f1204e1eb93def1f51ca424cfd2f62c3a88ff84a2bae3484432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        $__internal_829501f6ba1bb9f78f79697ce89a02bccec7330ae18ae3e59d46f920ed42e606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829501f6ba1bb9f78f79697ce89a02bccec7330ae18ae3e59d46f920ed42e606->enter($__internal_829501f6ba1bb9f78f79697ce89a02bccec7330ae18ae3e59d46f920ed42e606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        // line 6
        echo "    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>A Propos du Ministère</h1>
            <span>Get in Touch with Us</span>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Accueil</a></li>
                <li class=\"active\">A Propos</li>
            </ol>
        </div>

    </section>

";
        
        $__internal_829501f6ba1bb9f78f79697ce89a02bccec7330ae18ae3e59d46f920ed42e606->leave($__internal_829501f6ba1bb9f78f79697ce89a02bccec7330ae18ae3e59d46f920ed42e606_prof);

        
        $__internal_82cd7f6c35d21f1204e1eb93def1f51ca424cfd2f62c3a88ff84a2bae3484432->leave($__internal_82cd7f6c35d21f1204e1eb93def1f51ca424cfd2f62c3a88ff84a2bae3484432_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_40ec74b6f2eeebb8157c9b7b405d66ac5964ff649df311c175febdd2db382146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ec74b6f2eeebb8157c9b7b405d66ac5964ff649df311c175febdd2db382146->enter($__internal_40ec74b6f2eeebb8157c9b7b405d66ac5964ff649df311c175febdd2db382146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a1795890a02b55c1474d7da279d25dc0fb6371655d65cb6a15519350355a4edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1795890a02b55c1474d7da279d25dc0fb6371655d65cb6a15519350355a4edd->enter($__internal_a1795890a02b55c1474d7da279d25dc0fb6371655d65cb6a15519350355a4edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "    <div class=\"container clearfix\">

        <div class=\"col_one_third\">

            <div class=\"heading-block fancy-title nobottomborder title-bottom-border\">
                <h4>Le rôle du <span>Ministère</span>.</h4>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

        </div>

        <div class=\"col_one_third\">

            <div class=\"heading-block fancy-title nobottomborder title-bottom-border\">
                <h4>Notre <span>Vision</span>.</h4>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

        </div>

        <div class=\"col_one_third col_last\">

            <div class=\"heading-block fancy-title nobottomborder title-bottom-border\">
                <h4>Nos <span>Missions</span>.</h4>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

        </div>
        <div class=\"clear\"></div>

        <div class=\"fancy-title title-border\">
            <h3>L'ÉQUIPE MINISTÉRIEL</h3>
        </div>
        <div class=\"row\">

            <div class=\"col-md-6 bottommargin\">

                <div class=\"team team-list clearfix\">
                    <div class=\"team-image\">
                        <img src=\"images/team/3.jpg\" alt=\"John Doe\">
                    </div>
                    <div class=\"team-desc\">
                        <div class=\"team-title\"><h4>John Doe</h4><span>CEO</span></div>
                        <div class=\"team-content\">
                            <p>Carbon emissions reductions giving, legitimize amplify non-partisan Aga Khan. Policy dialogue assessment expert free-speech cornerstone disruptor freedom. Cesar Chavez empower.</p>
                        </div>
                        <a href=\"#\" class=\"social-icon si-rounded si-small si-facebook\">
                            <i class=\"icon-facebook\"></i>
                            <i class=\"icon-facebook\"></i>
                        </a>
                        <a href=\"#\" class=\"social-icon si-rounded si-small si-twitter\">
                            <i class=\"icon-twitter\"></i>
                            <i class=\"icon-twitter\"></i>
                        </a>
                        <a href=\"#\" class=\"social-icon si-rounded si-small si-gplus\">
                            <i class=\"icon-gplus\"></i>
                            <i class=\"icon-gplus\"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class=\"col-md-6 bottommargin\">

                <div class=\"team team-list clearfix\">
                    <div class=\"team-image\">
                        <img src=\"images/team/4.jpg\" alt=\"Nix Maxwell\">
                    </div>
                    <div class=\"team-desc\">
                        <div class=\"team-title\"><h4>Nix Maxwell</h4><span>Support</span></div>
                        <div class=\"team-content\">
                            <p>Eradicate invest honesty human rights accessibility theory of social change. Diversity experience in the field compassion, inspire breakthroughs planned giving.</p>
                        </div>
                        <a href=\"#\" class=\"social-icon si-rounded si-small si-forrst\">
                            <i class=\"icon-forrst\"></i>
                            <i class=\"icon-forrst\"></i>
                        </a>
                        <a href=\"#\" class=\"social-icon si-rounded si-small si-skype\">
                            <i class=\"icon-skype\"></i>
                            <i class=\"icon-skype\"></i>
                        </a>
                        <a href=\"#\" class=\"social-icon si-rounded si-small si-flickr\">
                            <i class=\"icon-flickr\"></i>
                            <i class=\"icon-flickr\"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class=\"section footer-stick\">

        <h4 class=\"uppercase center\">Que pense la <span>population</span> ?</h4>

        <div class=\"fslider testimonial testimonial-full\" data-animation=\"fade\" data-arrows=\"false\">
            <div class=\"flexslider\">
                <div class=\"slider-wrap\">
                    <div class=\"slide\">
                        <div class=\"testi-image\">
                            <a href=\"#\"><img src=\"images/testimonials/3.jpg\" alt=\"Customer Testimonails\"></a>
                        </div>
                        <div class=\"testi-content\">
                            <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                            <div class=\"testi-meta\">
                                Steve Jobs
                                <span>Apple Inc.</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"slide\">
                        <div class=\"testi-image\">
                            <a href=\"#\"><img src=\"images/testimonials/2.jpg\" alt=\"Customer Testimonails\"></a>
                        </div>
                        <div class=\"testi-content\">
                            <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                            <div class=\"testi-meta\">
                                Collis Ta'eed
                                <span>Envato Inc.</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"slide\">
                        <div class=\"testi-image\">
                            <a href=\"#\"><img src=\"images/testimonials/1.jpg\" alt=\"Customer Testimonails\"></a>
                        </div>
                        <div class=\"testi-content\">
                            <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                            <div class=\"testi-meta\">
                                John Doe
                                <span>XYZ Inc.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_a1795890a02b55c1474d7da279d25dc0fb6371655d65cb6a15519350355a4edd->leave($__internal_a1795890a02b55c1474d7da279d25dc0fb6371655d65cb6a15519350355a4edd_prof);

        
        $__internal_40ec74b6f2eeebb8157c9b7b405d66ac5964ff649df311c175febdd2db382146->leave($__internal_40ec74b6f2eeebb8157c9b7b405d66ac5964ff649df311c175febdd2db382146_prof);

    }

    public function getTemplateName()
    {
        return "KemaMainBundle::about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 22,  92 => 21,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block titre %}A propos du Ministere des transport{% endblock %}

{% block pagetitle %}
    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>A Propos du Ministère</h1>
            <span>Get in Touch with Us</span>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Accueil</a></li>
                <li class=\"active\">A Propos</li>
            </ol>
        </div>

    </section>

{% endblock %}

{% block content %}
    <div class=\"container clearfix\">

        <div class=\"col_one_third\">

            <div class=\"heading-block fancy-title nobottomborder title-bottom-border\">
                <h4>Le rôle du <span>Ministère</span>.</h4>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

        </div>

        <div class=\"col_one_third\">

            <div class=\"heading-block fancy-title nobottomborder title-bottom-border\">
                <h4>Notre <span>Vision</span>.</h4>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

        </div>

        <div class=\"col_one_third col_last\">

            <div class=\"heading-block fancy-title nobottomborder title-bottom-border\">
                <h4>Nos <span>Missions</span>.</h4>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

        </div>
        <div class=\"clear\"></div>

        <div class=\"fancy-title title-border\">
            <h3>L'ÉQUIPE MINISTÉRIEL</h3>
        </div>
        <div class=\"row\">

            <div class=\"col-md-6 bottommargin\">

                <div class=\"team team-list clearfix\">
                    <div class=\"team-image\">
                        <img src=\"images/team/3.jpg\" alt=\"John Doe\">
                    </div>
                    <div class=\"team-desc\">
                        <div class=\"team-title\"><h4>John Doe</h4><span>CEO</span></div>
                        <div class=\"team-content\">
                            <p>Carbon emissions reductions giving, legitimize amplify non-partisan Aga Khan. Policy dialogue assessment expert free-speech cornerstone disruptor freedom. Cesar Chavez empower.</p>
                        </div>
                        <a href=\"#\" class=\"social-icon si-rounded si-small si-facebook\">
                            <i class=\"icon-facebook\"></i>
                            <i class=\"icon-facebook\"></i>
                        </a>
                        <a href=\"#\" class=\"social-icon si-rounded si-small si-twitter\">
                            <i class=\"icon-twitter\"></i>
                            <i class=\"icon-twitter\"></i>
                        </a>
                        <a href=\"#\" class=\"social-icon si-rounded si-small si-gplus\">
                            <i class=\"icon-gplus\"></i>
                            <i class=\"icon-gplus\"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class=\"col-md-6 bottommargin\">

                <div class=\"team team-list clearfix\">
                    <div class=\"team-image\">
                        <img src=\"images/team/4.jpg\" alt=\"Nix Maxwell\">
                    </div>
                    <div class=\"team-desc\">
                        <div class=\"team-title\"><h4>Nix Maxwell</h4><span>Support</span></div>
                        <div class=\"team-content\">
                            <p>Eradicate invest honesty human rights accessibility theory of social change. Diversity experience in the field compassion, inspire breakthroughs planned giving.</p>
                        </div>
                        <a href=\"#\" class=\"social-icon si-rounded si-small si-forrst\">
                            <i class=\"icon-forrst\"></i>
                            <i class=\"icon-forrst\"></i>
                        </a>
                        <a href=\"#\" class=\"social-icon si-rounded si-small si-skype\">
                            <i class=\"icon-skype\"></i>
                            <i class=\"icon-skype\"></i>
                        </a>
                        <a href=\"#\" class=\"social-icon si-rounded si-small si-flickr\">
                            <i class=\"icon-flickr\"></i>
                            <i class=\"icon-flickr\"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class=\"section footer-stick\">

        <h4 class=\"uppercase center\">Que pense la <span>population</span> ?</h4>

        <div class=\"fslider testimonial testimonial-full\" data-animation=\"fade\" data-arrows=\"false\">
            <div class=\"flexslider\">
                <div class=\"slider-wrap\">
                    <div class=\"slide\">
                        <div class=\"testi-image\">
                            <a href=\"#\"><img src=\"images/testimonials/3.jpg\" alt=\"Customer Testimonails\"></a>
                        </div>
                        <div class=\"testi-content\">
                            <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                            <div class=\"testi-meta\">
                                Steve Jobs
                                <span>Apple Inc.</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"slide\">
                        <div class=\"testi-image\">
                            <a href=\"#\"><img src=\"images/testimonials/2.jpg\" alt=\"Customer Testimonails\"></a>
                        </div>
                        <div class=\"testi-content\">
                            <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                            <div class=\"testi-meta\">
                                Collis Ta'eed
                                <span>Envato Inc.</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"slide\">
                        <div class=\"testi-image\">
                            <a href=\"#\"><img src=\"images/testimonials/1.jpg\" alt=\"Customer Testimonails\"></a>
                        </div>
                        <div class=\"testi-content\">
                            <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                            <div class=\"testi-meta\">
                                John Doe
                                <span>XYZ Inc.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}", "KemaMainBundle::about.html.twig", "/var/www/html/ministere/src/Kema/MainBundle/Resources/views/about.html.twig");
    }
}
