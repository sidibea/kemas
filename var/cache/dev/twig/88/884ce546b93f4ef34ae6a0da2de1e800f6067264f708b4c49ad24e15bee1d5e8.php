<?php

/* KemaMainBundle::realisations.html.twig */
class __TwigTemplate_7a92081ce64bbadc93ce3c474ca1426e50ff5777f306e4d2e34305ae728c4ac3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "KemaMainBundle::realisations.html.twig", 1);
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
        $__internal_db33636b92f30e29e27b89e9ab7e7c34471da5f1e401b509a4bd9aaefc0a7658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db33636b92f30e29e27b89e9ab7e7c34471da5f1e401b509a4bd9aaefc0a7658->enter($__internal_db33636b92f30e29e27b89e9ab7e7c34471da5f1e401b509a4bd9aaefc0a7658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KemaMainBundle::realisations.html.twig"));

        $__internal_1a77191d0c7a1a3a6763771d28b0360eadb4f2148683f0d4e6abcbdb855a80e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a77191d0c7a1a3a6763771d28b0360eadb4f2148683f0d4e6abcbdb855a80e5->enter($__internal_1a77191d0c7a1a3a6763771d28b0360eadb4f2148683f0d4e6abcbdb855a80e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KemaMainBundle::realisations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db33636b92f30e29e27b89e9ab7e7c34471da5f1e401b509a4bd9aaefc0a7658->leave($__internal_db33636b92f30e29e27b89e9ab7e7c34471da5f1e401b509a4bd9aaefc0a7658_prof);

        
        $__internal_1a77191d0c7a1a3a6763771d28b0360eadb4f2148683f0d4e6abcbdb855a80e5->leave($__internal_1a77191d0c7a1a3a6763771d28b0360eadb4f2148683f0d4e6abcbdb855a80e5_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_e9ea1a567eb8b4348bdab94c7a6122e1f1782d95832f715ba5c64cc7b64e2217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ea1a567eb8b4348bdab94c7a6122e1f1782d95832f715ba5c64cc7b64e2217->enter($__internal_e9ea1a567eb8b4348bdab94c7a6122e1f1782d95832f715ba5c64cc7b64e2217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_bd9ad21a317624be4196125fce41af401534365d8cc9b40ebb083fdf5b718811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9ad21a317624be4196125fce41af401534365d8cc9b40ebb083fdf5b718811->enter($__internal_bd9ad21a317624be4196125fce41af401534365d8cc9b40ebb083fdf5b718811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "A propos du Ministere des transport";
        
        $__internal_bd9ad21a317624be4196125fce41af401534365d8cc9b40ebb083fdf5b718811->leave($__internal_bd9ad21a317624be4196125fce41af401534365d8cc9b40ebb083fdf5b718811_prof);

        
        $__internal_e9ea1a567eb8b4348bdab94c7a6122e1f1782d95832f715ba5c64cc7b64e2217->leave($__internal_e9ea1a567eb8b4348bdab94c7a6122e1f1782d95832f715ba5c64cc7b64e2217_prof);

    }

    // line 5
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_6aea275fec55552c3138fc57987d7c2b75e21a30908db75986ff3d0195a3b2c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aea275fec55552c3138fc57987d7c2b75e21a30908db75986ff3d0195a3b2c0->enter($__internal_6aea275fec55552c3138fc57987d7c2b75e21a30908db75986ff3d0195a3b2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        $__internal_1d1d10977f460a66e62cdfdada9a7d6475fe12284f3a372d720710dacc6a2282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1d10977f460a66e62cdfdada9a7d6475fe12284f3a372d720710dacc6a2282->enter($__internal_1d1d10977f460a66e62cdfdada9a7d6475fe12284f3a372d720710dacc6a2282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        // line 6
        echo "    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>Les réalisations du ministère</h1>
            <span>Nous changeons la mobilité au Mali</span>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Accueil</a></li>
                <li class=\"active\">Réalisations</li>
            </ol>
        </div>

    </section>

";
        
        $__internal_1d1d10977f460a66e62cdfdada9a7d6475fe12284f3a372d720710dacc6a2282->leave($__internal_1d1d10977f460a66e62cdfdada9a7d6475fe12284f3a372d720710dacc6a2282_prof);

        
        $__internal_6aea275fec55552c3138fc57987d7c2b75e21a30908db75986ff3d0195a3b2c0->leave($__internal_6aea275fec55552c3138fc57987d7c2b75e21a30908db75986ff3d0195a3b2c0_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_05540bd5ba342e1b1d5c9bd595b733b32c7a3523b8713a7c37a7d2ef1a5b0b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05540bd5ba342e1b1d5c9bd595b733b32c7a3523b8713a7c37a7d2ef1a5b0b60->enter($__internal_05540bd5ba342e1b1d5c9bd595b733b32c7a3523b8713a7c37a7d2ef1a5b0b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_187adb9afc123454c52866a448064f4b887404271453389fae686876b9f7e6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187adb9afc123454c52866a448064f4b887404271453389fae686876b9f7e6ef->enter($__internal_187adb9afc123454c52866a448064f4b887404271453389fae686876b9f7e6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "    <div class=\"container clearfix\">

        <!-- Portfolio Filter
        ============================================= -->
        <ul class=\"portfolio-filter clearfix\" data-container=\"#portfolio\">

            <li class=\"activeFilter\"><a href=\"#\" data-filter=\"*\">Secteur routier</a></li>
            <li><a href=\"#\" data-filter=\".pf-icons\">Secteur aeroportuaire</a></li>
            <li><a href=\"#\" data-filter=\".pf-illustrations\">Secteur fluviale</a></li>
            <li><a href=\"#\" data-filter=\".pf-uielements\">Recherche & perspective </a></li>

        </ul><!-- #portfolio-filter end -->

        <div class=\"portfolio-shuffle\" data-container=\"#portfolio\">
            <i class=\"icon-random\"></i>
        </div>

        <div class=\"clear\"></div>

        <!-- Portfolio Items
        ============================================= -->
        <div id=\"portfolio\" class=\"portfolio grid-container clearfix\">

            <article class=\"portfolio-item pf-media pf-icons\">
                <div class=\"portfolio-image\">
                    <a href=\"portfolio-single.html\">
                        <img src=\"images/portfolio/4/1.jpg\" alt=\"Open Imagination\">
                    </a>
                    <div class=\"portfolio-overlay\">
                        <a href=\"images/portfolio/full/1.jpg\" class=\"left-icon\" data-lightbox=\"image\"><i class=\"icon-line-plus\"></i></a>
                        <a href=\"portfolio-single.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single.html\">Open Imagination</a></h3>
                    <span><a href=\"#\">Media</a>, <a href=\"#\">Icons</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-illustrations\">
                <div class=\"portfolio-image\">
                    <a href=\"portfolio-single.html\">
                        <img src=\"images/portfolio/4/2.jpg\" alt=\"Locked Steel Gate\">
                    </a>
                    <div class=\"portfolio-overlay\">
                        <a href=\"images/portfolio/full/2.jpg\" class=\"left-icon\" data-lightbox=\"image\"><i class=\"icon-line-plus\"></i></a>
                        <a href=\"portfolio-single.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single.html\">Locked Steel Gate</a></h3>
                    <span><a href=\"#\">Illustrations</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-graphics pf-uielements\">
                <div class=\"portfolio-image\">
                    <a href=\"#\">
                        <img src=\"images/portfolio/4/3.jpg\" alt=\"Mac Sunglasses\">
                    </a>
                    <div class=\"portfolio-overlay\">
                        <a href=\"http://vimeo.com/89396394\" class=\"left-icon\" data-lightbox=\"iframe\"><i class=\"icon-line-play\"></i></a>
                        <a href=\"portfolio-single-video.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single-video.html\">Mac Sunglasses</a></h3>
                    <span><a href=\"#\">Graphics</a>, <a href=\"#\">UI Elements</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-icons pf-illustrations\">
                <div class=\"portfolio-image\">
                    <div class=\"fslider\" data-arrows=\"false\" data-speed=\"400\" data-pause=\"4000\">
                        <div class=\"flexslider\">
                            <div class=\"slider-wrap\">
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/4.jpg\" alt=\"Morning Dew\"></a></div>
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/4-1.jpg\" alt=\"Morning Dew\"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"portfolio-overlay\" data-lightbox=\"gallery\">
                        <a href=\"images/portfolio/full/4.jpg\" class=\"left-icon\" data-lightbox=\"gallery-item\"><i class=\"icon-line-stack-2\"></i></a>
                        <a href=\"images/portfolio/full/4-1.jpg\" class=\"hidden\" data-lightbox=\"gallery-item\"></a>
                        <a href=\"portfolio-single-gallery.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single-gallery.html\">Morning Dew</a></h3>
                    <span><a href=\"#\"><a href=\"#\">Icons</a>, <a href=\"#\">Illustrations</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-uielements pf-media\">
                <div class=\"portfolio-image\">
                    <a href=\"portfolio-single.html\">
                        <img src=\"images/portfolio/4/5.jpg\" alt=\"Console Activity\">
                    </a>
                    <div class=\"portfolio-overlay\">
                        <a href=\"images/portfolio/full/5.jpg\" class=\"left-icon\" data-lightbox=\"image\"><i class=\"icon-line-plus\"></i></a>
                        <a href=\"portfolio-single.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single.html\">Console Activity</a></h3>
                    <span><a href=\"#\">UI Elements</a>, <a href=\"#\">Media</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-graphics pf-illustrations\">
                <div class=\"portfolio-image\">
                    <div class=\"fslider\" data-arrows=\"false\">
                        <div class=\"flexslider\">
                            <div class=\"slider-wrap\">
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/6.jpg\" alt=\"Shake It\"></a></div>
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/6-1.jpg\" alt=\"Shake It\"></a></div>
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/6-2.jpg\" alt=\"Shake It\"></a></div>
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/6-3.jpg\" alt=\"Shake It\"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"portfolio-overlay\" data-lightbox=\"gallery\">
                        <a href=\"images/portfolio/full/6.jpg\" class=\"left-icon\" data-lightbox=\"gallery-item\"><i class=\"icon-line-stack-2\"></i></a>
                        <a href=\"images/portfolio/full/6-1.jpg\" class=\"hidden\" data-lightbox=\"gallery-item\"></a>
                        <a href=\"images/portfolio/full/6-2.jpg\" class=\"hidden\" data-lightbox=\"gallery-item\"></a>
                        <a href=\"images/portfolio/full/6-3.jpg\" class=\"hidden\" data-lightbox=\"gallery-item\"></a>
                        <a href=\"portfolio-single-gallery.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single-gallery.html\">Shake It!</a></h3>
                    <span><a href=\"#\">Illustrations</a>, <a href=\"#\">Graphics</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-uielements pf-icons\">
                <div class=\"portfolio-image\">
                    <a href=\"portfolio-single-video.html\">
                        <img src=\"images/portfolio/4/7.jpg\" alt=\"Backpack Contents\">
                    </a>
                    <div class=\"portfolio-overlay\">
                        <a href=\"http://www.youtube.com/watch?v=kuceVNBTJio\" class=\"left-icon\" data-lightbox=\"iframe\"><i class=\"icon-line-play\"></i></a>
                        <a href=\"portfolio-single-video.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single-video.html\">Backpack Contents</a></h3>
                    <span><a href=\"#\">UI Elements</a>, <a href=\"#\">Icons</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-graphics\">
                <div class=\"portfolio-image\">
                    <a href=\"portfolio-single.html\">
                        <img src=\"images/portfolio/4/8.jpg\" alt=\"Sunset Bulb Glow\">
                    </a>
                    <div class=\"portfolio-overlay\">
                        <a href=\"images/portfolio/full/8.jpg\" class=\"left-icon\" data-lightbox=\"image\"><i class=\"icon-line-plus\"></i></a>
                        <a href=\"portfolio-single.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single.html\">Sunset Bulb Glow</a></h3>
                    <span><a href=\"#\">Graphics</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-illustrations pf-icons\">
                <div class=\"portfolio-image\">
                    <div class=\"fslider\" data-arrows=\"false\" data-speed=\"650\" data-pause=\"3500\" data-animation=\"fade\">
                        <div class=\"flexslider\">
                            <div class=\"slider-wrap\">
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/9.jpg\" alt=\"Bridge Side\"></a></div>
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/9-1.jpg\" alt=\"Bridge Side\"></a></div>
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/9-2.jpg\" alt=\"Bridge Side\"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"portfolio-overlay\" data-lightbox=\"gallery\">
                        <a href=\"images/portfolio/full/9.jpg\" class=\"left-icon\" data-lightbox=\"gallery-item\"><i class=\"icon-line-stack-2\"></i></a>
                        <a href=\"images/portfolio/full/9-1.jpg\" class=\"hidden\" data-lightbox=\"gallery-item\"></a>
                        <a href=\"images/portfolio/full/9-2.jpg\" class=\"hidden\" data-lightbox=\"gallery-item\"></a>
                        <a href=\"portfolio-single-gallery.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single.html\">Bridge Side</a></h3>
                    <span><a href=\"#\">Illustrations</a>, <a href=\"#\">Icons</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-graphics pf-media pf-uielements\">
                <div class=\"portfolio-image\">
                    <a href=\"portfolio-single-video.html\">
                        <img src=\"images/portfolio/4/10.jpg\" alt=\"Study Table\">
                    </a>
                    <div class=\"portfolio-overlay\">
                        <a href=\"http://vimeo.com/91973305\" class=\"left-icon\" data-lightbox=\"iframe\"><i class=\"icon-line-play\"></i></a>
                        <a href=\"portfolio-single-video.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single-video.html\">Study Table</a></h3>
                    <span><a href=\"#\">Graphics</a>, <a href=\"#\">Media</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-media pf-icons\">
                <div class=\"portfolio-image\">
                    <a href=\"portfolio-single.html\">
                        <img src=\"images/portfolio/4/11.jpg\" alt=\"Workspace Stuff\">
                    </a>
                    <div class=\"portfolio-overlay\">
                        <a href=\"images/portfolio/full/11.jpg\" class=\"left-icon\" data-lightbox=\"image\"><i class=\"icon-line-plus\"></i></a>
                        <a href=\"portfolio-single.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single.html\">Workspace Stuff</a></h3>
                    <span><a href=\"#\">Media</a>, <a href=\"#\">Icons</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-illustrations pf-graphics\">
                <div class=\"portfolio-image\">
                    <div class=\"fslider\" data-arrows=\"false\" data-speed=\"700\" data-pause=\"7000\">
                        <div class=\"flexslider\">
                            <div class=\"slider-wrap\">
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/12.jpg\" alt=\"Fixed Aperture\"></a></div>
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/12-1.jpg\" alt=\"Fixed Aperture\"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"portfolio-overlay\" data-lightbox=\"gallery\">
                        <a href=\"images/portfolio/full/12.jpg\" class=\"left-icon\" data-lightbox=\"gallery-item\"><i class=\"icon-line-stack-2\"></i></a>
                        <a href=\"images/portfolio/full/12-1.jpg\" class=\"hidden\" data-lightbox=\"gallery-item\"></a>
                        <a href=\"portfolio-single-gallery.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single-gallery.html\">Fixed Aperture</a></h3>
                    <span><a href=\"#\">Illustrations</a>, <a href=\"#\">Graphics</a></span>
                </div>
            </article>

        </div><!-- #portfolio end -->

    </div>

";
        
        $__internal_187adb9afc123454c52866a448064f4b887404271453389fae686876b9f7e6ef->leave($__internal_187adb9afc123454c52866a448064f4b887404271453389fae686876b9f7e6ef_prof);

        
        $__internal_05540bd5ba342e1b1d5c9bd595b733b32c7a3523b8713a7c37a7d2ef1a5b0b60->leave($__internal_05540bd5ba342e1b1d5c9bd595b733b32c7a3523b8713a7c37a7d2ef1a5b0b60_prof);

    }

    public function getTemplateName()
    {
        return "KemaMainBundle::realisations.html.twig";
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
            <h1>Les réalisations du ministère</h1>
            <span>Nous changeons la mobilité au Mali</span>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Accueil</a></li>
                <li class=\"active\">Réalisations</li>
            </ol>
        </div>

    </section>

{% endblock %}

{% block content %}
    <div class=\"container clearfix\">

        <!-- Portfolio Filter
        ============================================= -->
        <ul class=\"portfolio-filter clearfix\" data-container=\"#portfolio\">

            <li class=\"activeFilter\"><a href=\"#\" data-filter=\"*\">Secteur routier</a></li>
            <li><a href=\"#\" data-filter=\".pf-icons\">Secteur aeroportuaire</a></li>
            <li><a href=\"#\" data-filter=\".pf-illustrations\">Secteur fluviale</a></li>
            <li><a href=\"#\" data-filter=\".pf-uielements\">Recherche & perspective </a></li>

        </ul><!-- #portfolio-filter end -->

        <div class=\"portfolio-shuffle\" data-container=\"#portfolio\">
            <i class=\"icon-random\"></i>
        </div>

        <div class=\"clear\"></div>

        <!-- Portfolio Items
        ============================================= -->
        <div id=\"portfolio\" class=\"portfolio grid-container clearfix\">

            <article class=\"portfolio-item pf-media pf-icons\">
                <div class=\"portfolio-image\">
                    <a href=\"portfolio-single.html\">
                        <img src=\"images/portfolio/4/1.jpg\" alt=\"Open Imagination\">
                    </a>
                    <div class=\"portfolio-overlay\">
                        <a href=\"images/portfolio/full/1.jpg\" class=\"left-icon\" data-lightbox=\"image\"><i class=\"icon-line-plus\"></i></a>
                        <a href=\"portfolio-single.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single.html\">Open Imagination</a></h3>
                    <span><a href=\"#\">Media</a>, <a href=\"#\">Icons</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-illustrations\">
                <div class=\"portfolio-image\">
                    <a href=\"portfolio-single.html\">
                        <img src=\"images/portfolio/4/2.jpg\" alt=\"Locked Steel Gate\">
                    </a>
                    <div class=\"portfolio-overlay\">
                        <a href=\"images/portfolio/full/2.jpg\" class=\"left-icon\" data-lightbox=\"image\"><i class=\"icon-line-plus\"></i></a>
                        <a href=\"portfolio-single.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single.html\">Locked Steel Gate</a></h3>
                    <span><a href=\"#\">Illustrations</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-graphics pf-uielements\">
                <div class=\"portfolio-image\">
                    <a href=\"#\">
                        <img src=\"images/portfolio/4/3.jpg\" alt=\"Mac Sunglasses\">
                    </a>
                    <div class=\"portfolio-overlay\">
                        <a href=\"http://vimeo.com/89396394\" class=\"left-icon\" data-lightbox=\"iframe\"><i class=\"icon-line-play\"></i></a>
                        <a href=\"portfolio-single-video.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single-video.html\">Mac Sunglasses</a></h3>
                    <span><a href=\"#\">Graphics</a>, <a href=\"#\">UI Elements</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-icons pf-illustrations\">
                <div class=\"portfolio-image\">
                    <div class=\"fslider\" data-arrows=\"false\" data-speed=\"400\" data-pause=\"4000\">
                        <div class=\"flexslider\">
                            <div class=\"slider-wrap\">
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/4.jpg\" alt=\"Morning Dew\"></a></div>
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/4-1.jpg\" alt=\"Morning Dew\"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"portfolio-overlay\" data-lightbox=\"gallery\">
                        <a href=\"images/portfolio/full/4.jpg\" class=\"left-icon\" data-lightbox=\"gallery-item\"><i class=\"icon-line-stack-2\"></i></a>
                        <a href=\"images/portfolio/full/4-1.jpg\" class=\"hidden\" data-lightbox=\"gallery-item\"></a>
                        <a href=\"portfolio-single-gallery.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single-gallery.html\">Morning Dew</a></h3>
                    <span><a href=\"#\"><a href=\"#\">Icons</a>, <a href=\"#\">Illustrations</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-uielements pf-media\">
                <div class=\"portfolio-image\">
                    <a href=\"portfolio-single.html\">
                        <img src=\"images/portfolio/4/5.jpg\" alt=\"Console Activity\">
                    </a>
                    <div class=\"portfolio-overlay\">
                        <a href=\"images/portfolio/full/5.jpg\" class=\"left-icon\" data-lightbox=\"image\"><i class=\"icon-line-plus\"></i></a>
                        <a href=\"portfolio-single.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single.html\">Console Activity</a></h3>
                    <span><a href=\"#\">UI Elements</a>, <a href=\"#\">Media</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-graphics pf-illustrations\">
                <div class=\"portfolio-image\">
                    <div class=\"fslider\" data-arrows=\"false\">
                        <div class=\"flexslider\">
                            <div class=\"slider-wrap\">
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/6.jpg\" alt=\"Shake It\"></a></div>
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/6-1.jpg\" alt=\"Shake It\"></a></div>
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/6-2.jpg\" alt=\"Shake It\"></a></div>
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/6-3.jpg\" alt=\"Shake It\"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"portfolio-overlay\" data-lightbox=\"gallery\">
                        <a href=\"images/portfolio/full/6.jpg\" class=\"left-icon\" data-lightbox=\"gallery-item\"><i class=\"icon-line-stack-2\"></i></a>
                        <a href=\"images/portfolio/full/6-1.jpg\" class=\"hidden\" data-lightbox=\"gallery-item\"></a>
                        <a href=\"images/portfolio/full/6-2.jpg\" class=\"hidden\" data-lightbox=\"gallery-item\"></a>
                        <a href=\"images/portfolio/full/6-3.jpg\" class=\"hidden\" data-lightbox=\"gallery-item\"></a>
                        <a href=\"portfolio-single-gallery.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single-gallery.html\">Shake It!</a></h3>
                    <span><a href=\"#\">Illustrations</a>, <a href=\"#\">Graphics</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-uielements pf-icons\">
                <div class=\"portfolio-image\">
                    <a href=\"portfolio-single-video.html\">
                        <img src=\"images/portfolio/4/7.jpg\" alt=\"Backpack Contents\">
                    </a>
                    <div class=\"portfolio-overlay\">
                        <a href=\"http://www.youtube.com/watch?v=kuceVNBTJio\" class=\"left-icon\" data-lightbox=\"iframe\"><i class=\"icon-line-play\"></i></a>
                        <a href=\"portfolio-single-video.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single-video.html\">Backpack Contents</a></h3>
                    <span><a href=\"#\">UI Elements</a>, <a href=\"#\">Icons</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-graphics\">
                <div class=\"portfolio-image\">
                    <a href=\"portfolio-single.html\">
                        <img src=\"images/portfolio/4/8.jpg\" alt=\"Sunset Bulb Glow\">
                    </a>
                    <div class=\"portfolio-overlay\">
                        <a href=\"images/portfolio/full/8.jpg\" class=\"left-icon\" data-lightbox=\"image\"><i class=\"icon-line-plus\"></i></a>
                        <a href=\"portfolio-single.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single.html\">Sunset Bulb Glow</a></h3>
                    <span><a href=\"#\">Graphics</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-illustrations pf-icons\">
                <div class=\"portfolio-image\">
                    <div class=\"fslider\" data-arrows=\"false\" data-speed=\"650\" data-pause=\"3500\" data-animation=\"fade\">
                        <div class=\"flexslider\">
                            <div class=\"slider-wrap\">
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/9.jpg\" alt=\"Bridge Side\"></a></div>
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/9-1.jpg\" alt=\"Bridge Side\"></a></div>
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/9-2.jpg\" alt=\"Bridge Side\"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"portfolio-overlay\" data-lightbox=\"gallery\">
                        <a href=\"images/portfolio/full/9.jpg\" class=\"left-icon\" data-lightbox=\"gallery-item\"><i class=\"icon-line-stack-2\"></i></a>
                        <a href=\"images/portfolio/full/9-1.jpg\" class=\"hidden\" data-lightbox=\"gallery-item\"></a>
                        <a href=\"images/portfolio/full/9-2.jpg\" class=\"hidden\" data-lightbox=\"gallery-item\"></a>
                        <a href=\"portfolio-single-gallery.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single.html\">Bridge Side</a></h3>
                    <span><a href=\"#\">Illustrations</a>, <a href=\"#\">Icons</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-graphics pf-media pf-uielements\">
                <div class=\"portfolio-image\">
                    <a href=\"portfolio-single-video.html\">
                        <img src=\"images/portfolio/4/10.jpg\" alt=\"Study Table\">
                    </a>
                    <div class=\"portfolio-overlay\">
                        <a href=\"http://vimeo.com/91973305\" class=\"left-icon\" data-lightbox=\"iframe\"><i class=\"icon-line-play\"></i></a>
                        <a href=\"portfolio-single-video.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single-video.html\">Study Table</a></h3>
                    <span><a href=\"#\">Graphics</a>, <a href=\"#\">Media</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-media pf-icons\">
                <div class=\"portfolio-image\">
                    <a href=\"portfolio-single.html\">
                        <img src=\"images/portfolio/4/11.jpg\" alt=\"Workspace Stuff\">
                    </a>
                    <div class=\"portfolio-overlay\">
                        <a href=\"images/portfolio/full/11.jpg\" class=\"left-icon\" data-lightbox=\"image\"><i class=\"icon-line-plus\"></i></a>
                        <a href=\"portfolio-single.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single.html\">Workspace Stuff</a></h3>
                    <span><a href=\"#\">Media</a>, <a href=\"#\">Icons</a></span>
                </div>
            </article>

            <article class=\"portfolio-item pf-illustrations pf-graphics\">
                <div class=\"portfolio-image\">
                    <div class=\"fslider\" data-arrows=\"false\" data-speed=\"700\" data-pause=\"7000\">
                        <div class=\"flexslider\">
                            <div class=\"slider-wrap\">
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/12.jpg\" alt=\"Fixed Aperture\"></a></div>
                                <div class=\"slide\"><a href=\"portfolio-single-gallery.html\"><img src=\"images/portfolio/4/12-1.jpg\" alt=\"Fixed Aperture\"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"portfolio-overlay\" data-lightbox=\"gallery\">
                        <a href=\"images/portfolio/full/12.jpg\" class=\"left-icon\" data-lightbox=\"gallery-item\"><i class=\"icon-line-stack-2\"></i></a>
                        <a href=\"images/portfolio/full/12-1.jpg\" class=\"hidden\" data-lightbox=\"gallery-item\"></a>
                        <a href=\"portfolio-single-gallery.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                    </div>
                </div>
                <div class=\"portfolio-desc\">
                    <h3><a href=\"portfolio-single-gallery.html\">Fixed Aperture</a></h3>
                    <span><a href=\"#\">Illustrations</a>, <a href=\"#\">Graphics</a></span>
                </div>
            </article>

        </div><!-- #portfolio end -->

    </div>

{% endblock %}
", "KemaMainBundle::realisations.html.twig", "/var/www/html/ministere/src/Kema/MainBundle/Resources/views/realisations.html.twig");
    }
}
