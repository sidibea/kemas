<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'breaking' => array($this, 'block_breaking'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9687d2998762c47dfe2988b83dd7971242eb948adb0dbaa3b001a4767c740388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9687d2998762c47dfe2988b83dd7971242eb948adb0dbaa3b001a4767c740388->enter($__internal_9687d2998762c47dfe2988b83dd7971242eb948adb0dbaa3b001a4767c740388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_eda6ae2881a63cc27d7f333c277c9d6a963ebec07667070c4988650312601146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda6ae2881a63cc27d7f333c277c9d6a963ebec07667070c4988650312601146->enter($__internal_eda6ae2881a63cc27d7f333c277c9d6a963ebec07667070c4988650312601146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html dir=\"ltr\" lang=\"en-US\">
<head>

    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"author\" content=\"SemiColonWeb\" />

    <!-- Stylesheets
    ============================================= -->
    <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"css/bootstrap.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"css/dark.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"css/font-icons.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"css/animate.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"css/magnific-popup.css\" type=\"text/css\" />

    <link rel=\"stylesheet\" href=\"css/responsive.css\" type=\"text/css\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <!--[if lt IE 9]>
        <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>";
        // line 26
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>

</head>

<body class=\"stretched\">

<!-- Document Wrapper
============================================= -->
<div id=\"wrapper\" class=\"clearfix\">

    <!-- Top Bar
    ============================================= -->
    <div id=\"top-bar\">

        <div class=\"container clearfix\">

            <div class=\"col_half nobottommargin\">



            </div>

            <div class=\"col_half fright col_last nobottommargin\">

                <!-- Top Social
                ============================================= -->
                <div id=\"top-social\">
                    <ul>
                        <li><a href=\"#\" class=\"si-facebook\"><span class=\"ts-icon\"><i class=\"icon-facebook\"></i></span><span class=\"ts-text\">Facebook</span></a></li>

                        <li><a href=\"tel:+91.11.85412542\" class=\"si-call\"><span class=\"ts-icon\"><i class=\"icon-call\"></i></span><span class=\"ts-text\">+91.11.85412542</span></a></li>
                        <li><a href=\"mailto:info@canvas.com\" class=\"si-email3\"><span class=\"ts-icon\"><i class=\"icon-email3\"></i></span><span class=\"ts-text\">info@canvas.com</span></a></li>
                    </ul>
                </div><!-- #top-social end -->

            </div>

        </div>

    </div><!-- #top-bar end -->

    <!-- Header
    ============================================= -->
    <header id=\"header\" class=\"sticky-style-2\">

        <div class=\"container clearfix\">

            <!-- Logo
            ============================================= -->
            <div id=\"logo\">
                <a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kema_main_homepage");
        echo "\" class=\"standard-logo\" data-dark-logo=\"images/logo-dark.png\"><img src=\"images/ff.png\" alt=\"Canvas Logo\"></a>
            </div><!-- #logo end -->

            <div class=\"top-advert\">
                <img src=\"images/magazine/ad.jpg\" alt=\"Ad\">
            </div>

        </div>

        <div id=\"header-wrap\">

            <!-- Primary Navigation
            ============================================= -->
            <nav id=\"primary-menu\" class=\"style-2\">

                <div class=\"container clearfix\">

                    <div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

                    <ul>
                        <li class=\"current\"><a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kema_main_homepage");
        echo "\"><div>Accueil</div></a></li>
                        <li><a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kema_main_apropos");
        echo "\"><div>A propos</div></a></li>
                        <li><a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kema_main_actualites");
        echo "\"><div>Actualites</div></a></li>
                        <li><a href=\"#\"><div>Services</div></a></li>
                        <li><a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kema_main_realisations");
        echo "\"><div>Projets & Infrastructures</div></a></li>
                        <li><a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kema_main_contact");
        echo "\"><div>Contactez nous</div></a></li>


                    </ul>

                    <!-- Top Search
                    ============================================= -->
                    <div id=\"top-search\">
                        <a href=\"#\" id=\"top-search-trigger\"><i class=\"icon-search3\"></i><i class=\"icon-line-cross\"></i></a>
                        <form action=\"#\" method=\"get\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" value=\"\" placeholder=\"Tapez ici...\">
                        </form>
                    </div><!-- #top-search end -->

                </div>

            </nav><!-- #primary-menu end -->

        </div>

    </header><!-- #header end -->

    ";
        // line 123
        $this->displayBlock('pagetitle', $context, $blocks);
        // line 126
        echo "
    <!-- Content
    ============================================= -->
    <section id=\"content\">

        <div class=\"content-wrap\">

            ";
        // line 133
        $this->displayBlock('breaking', $context, $blocks);
        // line 134
        echo "
           ";
        // line 135
        $this->displayBlock('content', $context, $blocks);
        // line 136
        echo "
        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id=\"footer\" class=\"dark\">

        <div class=\"container\">

            <!-- Footer Widgets
            ============================================= -->
            <div class=\"footer-widgets-wrap clearfix\">

                <div class=\"col_two_third\">

                    <div class=\"col_one_third\">

                        <div class=\"widget clearfix\">

                            <img src=\"images/ff.png\" alt=\"\" class=\"footer-logo\">

                            <p>Une vision claire pour un <strong>ministère des transports</strong> <strong> à la hauteur</strong></p>

                            <div style=\"background: url('images/world-map.png') no-repeat center center; background-size: 100%;\">
                                <address>
                                    <strong>Adresse:</strong><br>
                                    Cité Ministérielle<br>
                                    Batiment 3 <br>
                                </address>
                                <abbr title=\"Phone Number\"><strong>Téléphone:</strong></abbr> (223) 8547 632521<br>
                                <abbr title=\"Fax\"><strong>Fax:</strong></abbr> (223) 11 4752 1433<br>
                                <abbr title=\"Email Address\"><strong>Email:</strong></abbr> info@mt.com
                            </div>

                        </div>

                    </div>

                    <div class=\"col_one_third\">

                        <div class=\"widget widget_links clearfix\">

                            <h4>Blogroll</h4>

                            <ul>
                                <li><a href=\"http://codex.wordpress.org/\">Documentation</a></li>
                                <li><a href=\"http://wordpress.org/support/forum/requests-and-feedback\">Feedback</a></li>
                                <li><a href=\"http://wordpress.org/extend/plugins/\">Plugins</a></li>
                                <li><a href=\"http://wordpress.org/support/\">Support Forums</a></li>
                                <li><a href=\"http://wordpress.org/extend/themes/\">Themes</a></li>
                                <li><a href=\"http://wordpress.org/news/\">WordPress Blog</a></li>
                                <li><a href=\"http://planet.wordpress.org/\">WordPress Planet</a></li>
                            </ul>

                        </div>

                    </div>

                    <div class=\"col_one_third col_last\">


                    </div>

                </div>

                <div class=\"col_one_third col_last\">

                    <div class=\"widget subscribe-widget clearfix\">
                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                        <div class=\"widget-subscribe-form-result\"></div>
                        <form id=\"widget-subscribe-form\" action=\"include/subscribe.php\" role=\"form\" method=\"post\" class=\"nobottommargin\">
                            <div class=\"input-group divcenter\">
                                <span class=\"input-group-addon\"><i class=\"icon-email2\"></i></span>
                                <input type=\"email\" id=\"widget-subscribe-form-email\" name=\"widget-subscribe-form-email\" class=\"form-control required email\" placeholder=\"Enter your Email\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" type=\"submit\">Subscribe</button>
\t\t\t\t\t\t\t\t\t</span>
                            </div>
                        </form>
                    </div>

                    <div class=\"widget clearfix\" style=\"margin-bottom: -20px;\">

                        <div class=\"row\">

                            <div class=\"col-md-6 clearfix bottommargin-sm\">
                                <a href=\"#\" class=\"social-icon si-dark si-colored si-facebook nobottommargin\" style=\"margin-right: 10px;\">
                                    <i class=\"icon-facebook\"></i>
                                    <i class=\"icon-facebook\"></i>
                                </a>
                                <a href=\"#\"><small style=\"display: block; margin-top: 3px;\"><strong>Like us</strong><br>on Facebook</small></a>
                            </div>
                            <div class=\"col-md-6 clearfix\">
                                <a href=\"#\" class=\"social-icon si-dark si-colored si-rss nobottommargin\" style=\"margin-right: 10px;\">
                                    <i class=\"icon-rss\"></i>
                                    <i class=\"icon-rss\"></i>
                                </a>
                                <a href=\"#\"><small style=\"display: block; margin-top: 3px;\"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id=\"copyrights\">

            <div class=\"container clearfix\">

                <div class=\"col_half\">
                    Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
                    <div class=\"copyright-links\"><a href=\"#\">Terms of Use</a> / <a href=\"#\">Privacy Policy</a></div>
                </div>

                <div class=\"col_half col_last tright\">
                    <div class=\"fright clearfix\">
                        <a href=\"#\" class=\"social-icon si-small si-borderless si-facebook\">
                            <i class=\"icon-facebook\"></i>
                            <i class=\"icon-facebook\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-twitter\">
                            <i class=\"icon-twitter\"></i>
                            <i class=\"icon-twitter\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-gplus\">
                            <i class=\"icon-gplus\"></i>
                            <i class=\"icon-gplus\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-pinterest\">
                            <i class=\"icon-pinterest\"></i>
                            <i class=\"icon-pinterest\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-vimeo\">
                            <i class=\"icon-vimeo\"></i>
                            <i class=\"icon-vimeo\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-github\">
                            <i class=\"icon-github\"></i>
                            <i class=\"icon-github\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-yahoo\">
                            <i class=\"icon-yahoo\"></i>
                            <i class=\"icon-yahoo\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-linkedin\">
                            <i class=\"icon-linkedin\"></i>
                            <i class=\"icon-linkedin\"></i>
                        </a>
                    </div>

                    <div class=\"clear\"></div>

                    <i class=\"icon-envelope2\"></i> info@keme.com <span class=\"middot\">&middot;</span> <i class=\"icon-headphones\"></i> +91-11-6541-6369 <span class=\"middot\">&middot;</span> <i class=\"icon-skype2\"></i> CanvasOnSkype
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id=\"gotoTop\" class=\"icon-angle-up\"></div>

<!-- External JavaScripts
============================================= -->
<script type=\"text/javascript\" src=\"js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"js/plugins.js\"></script>

<!-- Footer Scripts
============================================= -->
<script type=\"text/javascript\" src=\"js/functions.js\"></script>
<script type=\"text/javascript\" src=\"https://maps.google.com/maps/api/js\"></script>
<script type=\"text/javascript\" src=\"js/jquery.gmap.js\"></script>
";
        // line 329
        $this->displayBlock('scripts', $context, $blocks);
        // line 332
        echo "

</body>
</html>";
        
        $__internal_9687d2998762c47dfe2988b83dd7971242eb948adb0dbaa3b001a4767c740388->leave($__internal_9687d2998762c47dfe2988b83dd7971242eb948adb0dbaa3b001a4767c740388_prof);

        
        $__internal_eda6ae2881a63cc27d7f333c277c9d6a963ebec07667070c4988650312601146->leave($__internal_eda6ae2881a63cc27d7f333c277c9d6a963ebec07667070c4988650312601146_prof);

    }

    // line 26
    public function block_titre($context, array $blocks = array())
    {
        $__internal_337fad349fe0c185df0e4220404309f9a5385717b9096cc32f390fe07c7db43e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337fad349fe0c185df0e4220404309f9a5385717b9096cc32f390fe07c7db43e->enter($__internal_337fad349fe0c185df0e4220404309f9a5385717b9096cc32f390fe07c7db43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_879c58f865386ffcc254b3d406905be1f912b4a94e6f49c9a04326b025cd5260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_879c58f865386ffcc254b3d406905be1f912b4a94e6f49c9a04326b025cd5260->enter($__internal_879c58f865386ffcc254b3d406905be1f912b4a94e6f49c9a04326b025cd5260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " ";
        
        $__internal_879c58f865386ffcc254b3d406905be1f912b4a94e6f49c9a04326b025cd5260->leave($__internal_879c58f865386ffcc254b3d406905be1f912b4a94e6f49c9a04326b025cd5260_prof);

        
        $__internal_337fad349fe0c185df0e4220404309f9a5385717b9096cc32f390fe07c7db43e->leave($__internal_337fad349fe0c185df0e4220404309f9a5385717b9096cc32f390fe07c7db43e_prof);

    }

    // line 123
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_bfbdaaee3b595d54149852944fb7cdcac04dc6d824bbd88d7014100036ef9c7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfbdaaee3b595d54149852944fb7cdcac04dc6d824bbd88d7014100036ef9c7b->enter($__internal_bfbdaaee3b595d54149852944fb7cdcac04dc6d824bbd88d7014100036ef9c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        $__internal_dd45583cd02d267b0c6616a1ab0919b00ce3cb7b1f1a3ad5a910d40f5e3a4972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd45583cd02d267b0c6616a1ab0919b00ce3cb7b1f1a3ad5a910d40f5e3a4972->enter($__internal_dd45583cd02d267b0c6616a1ab0919b00ce3cb7b1f1a3ad5a910d40f5e3a4972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        // line 124
        echo "
    ";
        
        $__internal_dd45583cd02d267b0c6616a1ab0919b00ce3cb7b1f1a3ad5a910d40f5e3a4972->leave($__internal_dd45583cd02d267b0c6616a1ab0919b00ce3cb7b1f1a3ad5a910d40f5e3a4972_prof);

        
        $__internal_bfbdaaee3b595d54149852944fb7cdcac04dc6d824bbd88d7014100036ef9c7b->leave($__internal_bfbdaaee3b595d54149852944fb7cdcac04dc6d824bbd88d7014100036ef9c7b_prof);

    }

    // line 133
    public function block_breaking($context, array $blocks = array())
    {
        $__internal_5af2e05d7d589c372a65956623100f59e4c7e946e89eb5c55091fc5e44b847aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5af2e05d7d589c372a65956623100f59e4c7e946e89eb5c55091fc5e44b847aa->enter($__internal_5af2e05d7d589c372a65956623100f59e4c7e946e89eb5c55091fc5e44b847aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breaking"));

        $__internal_43a770decf4451c0f2e0b7e016a7a6911dcc925c722beeafa838d071d968526c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a770decf4451c0f2e0b7e016a7a6911dcc925c722beeafa838d071d968526c->enter($__internal_43a770decf4451c0f2e0b7e016a7a6911dcc925c722beeafa838d071d968526c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breaking"));

        echo " ";
        
        $__internal_43a770decf4451c0f2e0b7e016a7a6911dcc925c722beeafa838d071d968526c->leave($__internal_43a770decf4451c0f2e0b7e016a7a6911dcc925c722beeafa838d071d968526c_prof);

        
        $__internal_5af2e05d7d589c372a65956623100f59e4c7e946e89eb5c55091fc5e44b847aa->leave($__internal_5af2e05d7d589c372a65956623100f59e4c7e946e89eb5c55091fc5e44b847aa_prof);

    }

    // line 135
    public function block_content($context, array $blocks = array())
    {
        $__internal_d44d89a0a3a90602a38adb9ef0ab14b7272875c2450961c625862cb4c86e744f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44d89a0a3a90602a38adb9ef0ab14b7272875c2450961c625862cb4c86e744f->enter($__internal_d44d89a0a3a90602a38adb9ef0ab14b7272875c2450961c625862cb4c86e744f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7af917ffbf61122aeaa148b3ab8dd7da884525c5f97220ba7d872d917276ac37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af917ffbf61122aeaa148b3ab8dd7da884525c5f97220ba7d872d917276ac37->enter($__internal_7af917ffbf61122aeaa148b3ab8dd7da884525c5f97220ba7d872d917276ac37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_7af917ffbf61122aeaa148b3ab8dd7da884525c5f97220ba7d872d917276ac37->leave($__internal_7af917ffbf61122aeaa148b3ab8dd7da884525c5f97220ba7d872d917276ac37_prof);

        
        $__internal_d44d89a0a3a90602a38adb9ef0ab14b7272875c2450961c625862cb4c86e744f->leave($__internal_d44d89a0a3a90602a38adb9ef0ab14b7272875c2450961c625862cb4c86e744f_prof);

    }

    // line 329
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_633566cb863498274844fd934e48662b2ce5fbda37fc9bcd98ecad8b67a1e046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633566cb863498274844fd934e48662b2ce5fbda37fc9bcd98ecad8b67a1e046->enter($__internal_633566cb863498274844fd934e48662b2ce5fbda37fc9bcd98ecad8b67a1e046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_9eec044dd77f921b911473ce54d09e0da55866c1635fcf27bf3c5824ed8cf5f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eec044dd77f921b911473ce54d09e0da55866c1635fcf27bf3c5824ed8cf5f1->enter($__internal_9eec044dd77f921b911473ce54d09e0da55866c1635fcf27bf3c5824ed8cf5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 330
        echo "
";
        
        $__internal_9eec044dd77f921b911473ce54d09e0da55866c1635fcf27bf3c5824ed8cf5f1->leave($__internal_9eec044dd77f921b911473ce54d09e0da55866c1635fcf27bf3c5824ed8cf5f1_prof);

        
        $__internal_633566cb863498274844fd934e48662b2ce5fbda37fc9bcd98ecad8b67a1e046->leave($__internal_633566cb863498274844fd934e48662b2ce5fbda37fc9bcd98ecad8b67a1e046_prof);

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
        return array (  486 => 330,  477 => 329,  459 => 135,  441 => 133,  430 => 124,  421 => 123,  403 => 26,  390 => 332,  388 => 329,  193 => 136,  191 => 135,  188 => 134,  186 => 133,  177 => 126,  175 => 123,  150 => 101,  146 => 100,  141 => 98,  137 => 97,  133 => 96,  110 => 76,  57 => 26,  30 => 1,);
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
<html dir=\"ltr\" lang=\"en-US\">
<head>

    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"author\" content=\"SemiColonWeb\" />

    <!-- Stylesheets
    ============================================= -->
    <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"css/bootstrap.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"css/dark.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"css/font-icons.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"css/animate.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"css/magnific-popup.css\" type=\"text/css\" />

    <link rel=\"stylesheet\" href=\"css/responsive.css\" type=\"text/css\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <!--[if lt IE 9]>
        <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>{% block titre %} {% endblock %}</title>

</head>

<body class=\"stretched\">

<!-- Document Wrapper
============================================= -->
<div id=\"wrapper\" class=\"clearfix\">

    <!-- Top Bar
    ============================================= -->
    <div id=\"top-bar\">

        <div class=\"container clearfix\">

            <div class=\"col_half nobottommargin\">



            </div>

            <div class=\"col_half fright col_last nobottommargin\">

                <!-- Top Social
                ============================================= -->
                <div id=\"top-social\">
                    <ul>
                        <li><a href=\"#\" class=\"si-facebook\"><span class=\"ts-icon\"><i class=\"icon-facebook\"></i></span><span class=\"ts-text\">Facebook</span></a></li>

                        <li><a href=\"tel:+91.11.85412542\" class=\"si-call\"><span class=\"ts-icon\"><i class=\"icon-call\"></i></span><span class=\"ts-text\">+91.11.85412542</span></a></li>
                        <li><a href=\"mailto:info@canvas.com\" class=\"si-email3\"><span class=\"ts-icon\"><i class=\"icon-email3\"></i></span><span class=\"ts-text\">info@canvas.com</span></a></li>
                    </ul>
                </div><!-- #top-social end -->

            </div>

        </div>

    </div><!-- #top-bar end -->

    <!-- Header
    ============================================= -->
    <header id=\"header\" class=\"sticky-style-2\">

        <div class=\"container clearfix\">

            <!-- Logo
            ============================================= -->
            <div id=\"logo\">
                <a href=\"{{ path('kema_main_homepage') }}\" class=\"standard-logo\" data-dark-logo=\"images/logo-dark.png\"><img src=\"images/ff.png\" alt=\"Canvas Logo\"></a>
            </div><!-- #logo end -->

            <div class=\"top-advert\">
                <img src=\"images/magazine/ad.jpg\" alt=\"Ad\">
            </div>

        </div>

        <div id=\"header-wrap\">

            <!-- Primary Navigation
            ============================================= -->
            <nav id=\"primary-menu\" class=\"style-2\">

                <div class=\"container clearfix\">

                    <div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

                    <ul>
                        <li class=\"current\"><a href=\"{{ path('kema_main_homepage') }}\"><div>Accueil</div></a></li>
                        <li><a href=\"{{ path('kema_main_apropos') }}\"><div>A propos</div></a></li>
                        <li><a href=\"{{ path('kema_main_actualites') }}\"><div>Actualites</div></a></li>
                        <li><a href=\"#\"><div>Services</div></a></li>
                        <li><a href=\"{{ path('kema_main_realisations') }}\"><div>Projets & Infrastructures</div></a></li>
                        <li><a href=\"{{ path('kema_main_contact') }}\"><div>Contactez nous</div></a></li>


                    </ul>

                    <!-- Top Search
                    ============================================= -->
                    <div id=\"top-search\">
                        <a href=\"#\" id=\"top-search-trigger\"><i class=\"icon-search3\"></i><i class=\"icon-line-cross\"></i></a>
                        <form action=\"#\" method=\"get\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" value=\"\" placeholder=\"Tapez ici...\">
                        </form>
                    </div><!-- #top-search end -->

                </div>

            </nav><!-- #primary-menu end -->

        </div>

    </header><!-- #header end -->

    {% block pagetitle %}

    {% endblock %}

    <!-- Content
    ============================================= -->
    <section id=\"content\">

        <div class=\"content-wrap\">

            {% block breaking %} {% endblock %}

           {% block content %} {% endblock %}

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id=\"footer\" class=\"dark\">

        <div class=\"container\">

            <!-- Footer Widgets
            ============================================= -->
            <div class=\"footer-widgets-wrap clearfix\">

                <div class=\"col_two_third\">

                    <div class=\"col_one_third\">

                        <div class=\"widget clearfix\">

                            <img src=\"images/ff.png\" alt=\"\" class=\"footer-logo\">

                            <p>Une vision claire pour un <strong>ministère des transports</strong> <strong> à la hauteur</strong></p>

                            <div style=\"background: url('images/world-map.png') no-repeat center center; background-size: 100%;\">
                                <address>
                                    <strong>Adresse:</strong><br>
                                    Cité Ministérielle<br>
                                    Batiment 3 <br>
                                </address>
                                <abbr title=\"Phone Number\"><strong>Téléphone:</strong></abbr> (223) 8547 632521<br>
                                <abbr title=\"Fax\"><strong>Fax:</strong></abbr> (223) 11 4752 1433<br>
                                <abbr title=\"Email Address\"><strong>Email:</strong></abbr> info@mt.com
                            </div>

                        </div>

                    </div>

                    <div class=\"col_one_third\">

                        <div class=\"widget widget_links clearfix\">

                            <h4>Blogroll</h4>

                            <ul>
                                <li><a href=\"http://codex.wordpress.org/\">Documentation</a></li>
                                <li><a href=\"http://wordpress.org/support/forum/requests-and-feedback\">Feedback</a></li>
                                <li><a href=\"http://wordpress.org/extend/plugins/\">Plugins</a></li>
                                <li><a href=\"http://wordpress.org/support/\">Support Forums</a></li>
                                <li><a href=\"http://wordpress.org/extend/themes/\">Themes</a></li>
                                <li><a href=\"http://wordpress.org/news/\">WordPress Blog</a></li>
                                <li><a href=\"http://planet.wordpress.org/\">WordPress Planet</a></li>
                            </ul>

                        </div>

                    </div>

                    <div class=\"col_one_third col_last\">


                    </div>

                </div>

                <div class=\"col_one_third col_last\">

                    <div class=\"widget subscribe-widget clearfix\">
                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                        <div class=\"widget-subscribe-form-result\"></div>
                        <form id=\"widget-subscribe-form\" action=\"include/subscribe.php\" role=\"form\" method=\"post\" class=\"nobottommargin\">
                            <div class=\"input-group divcenter\">
                                <span class=\"input-group-addon\"><i class=\"icon-email2\"></i></span>
                                <input type=\"email\" id=\"widget-subscribe-form-email\" name=\"widget-subscribe-form-email\" class=\"form-control required email\" placeholder=\"Enter your Email\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" type=\"submit\">Subscribe</button>
\t\t\t\t\t\t\t\t\t</span>
                            </div>
                        </form>
                    </div>

                    <div class=\"widget clearfix\" style=\"margin-bottom: -20px;\">

                        <div class=\"row\">

                            <div class=\"col-md-6 clearfix bottommargin-sm\">
                                <a href=\"#\" class=\"social-icon si-dark si-colored si-facebook nobottommargin\" style=\"margin-right: 10px;\">
                                    <i class=\"icon-facebook\"></i>
                                    <i class=\"icon-facebook\"></i>
                                </a>
                                <a href=\"#\"><small style=\"display: block; margin-top: 3px;\"><strong>Like us</strong><br>on Facebook</small></a>
                            </div>
                            <div class=\"col-md-6 clearfix\">
                                <a href=\"#\" class=\"social-icon si-dark si-colored si-rss nobottommargin\" style=\"margin-right: 10px;\">
                                    <i class=\"icon-rss\"></i>
                                    <i class=\"icon-rss\"></i>
                                </a>
                                <a href=\"#\"><small style=\"display: block; margin-top: 3px;\"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id=\"copyrights\">

            <div class=\"container clearfix\">

                <div class=\"col_half\">
                    Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
                    <div class=\"copyright-links\"><a href=\"#\">Terms of Use</a> / <a href=\"#\">Privacy Policy</a></div>
                </div>

                <div class=\"col_half col_last tright\">
                    <div class=\"fright clearfix\">
                        <a href=\"#\" class=\"social-icon si-small si-borderless si-facebook\">
                            <i class=\"icon-facebook\"></i>
                            <i class=\"icon-facebook\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-twitter\">
                            <i class=\"icon-twitter\"></i>
                            <i class=\"icon-twitter\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-gplus\">
                            <i class=\"icon-gplus\"></i>
                            <i class=\"icon-gplus\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-pinterest\">
                            <i class=\"icon-pinterest\"></i>
                            <i class=\"icon-pinterest\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-vimeo\">
                            <i class=\"icon-vimeo\"></i>
                            <i class=\"icon-vimeo\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-github\">
                            <i class=\"icon-github\"></i>
                            <i class=\"icon-github\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-yahoo\">
                            <i class=\"icon-yahoo\"></i>
                            <i class=\"icon-yahoo\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-linkedin\">
                            <i class=\"icon-linkedin\"></i>
                            <i class=\"icon-linkedin\"></i>
                        </a>
                    </div>

                    <div class=\"clear\"></div>

                    <i class=\"icon-envelope2\"></i> info@keme.com <span class=\"middot\">&middot;</span> <i class=\"icon-headphones\"></i> +91-11-6541-6369 <span class=\"middot\">&middot;</span> <i class=\"icon-skype2\"></i> CanvasOnSkype
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id=\"gotoTop\" class=\"icon-angle-up\"></div>

<!-- External JavaScripts
============================================= -->
<script type=\"text/javascript\" src=\"js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"js/plugins.js\"></script>

<!-- Footer Scripts
============================================= -->
<script type=\"text/javascript\" src=\"js/functions.js\"></script>
<script type=\"text/javascript\" src=\"https://maps.google.com/maps/api/js\"></script>
<script type=\"text/javascript\" src=\"js/jquery.gmap.js\"></script>
{% block scripts  %}

{% endblock %}


</body>
</html>", "base.html.twig", "/var/www/html/ministere/app/Resources/views/base.html.twig");
    }
}
