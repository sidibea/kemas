<?php

/* KemaMainBundle::contact.html.twig */
class __TwigTemplate_cd4b3c5d79db1a5616a15ce695530f698a31f2427241e100075865fc7fd6ec84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "KemaMainBundle::contact.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41ef24f77d5fc437eec7be4cb8c6b1ee53c339c8760ca70a19a398354b83b307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ef24f77d5fc437eec7be4cb8c6b1ee53c339c8760ca70a19a398354b83b307->enter($__internal_41ef24f77d5fc437eec7be4cb8c6b1ee53c339c8760ca70a19a398354b83b307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KemaMainBundle::contact.html.twig"));

        $__internal_f561994af100495f4c0b6d0f9a5cd5d5f5007e7ecdb8e28352aadd481ce548f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f561994af100495f4c0b6d0f9a5cd5d5f5007e7ecdb8e28352aadd481ce548f4->enter($__internal_f561994af100495f4c0b6d0f9a5cd5d5f5007e7ecdb8e28352aadd481ce548f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KemaMainBundle::contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41ef24f77d5fc437eec7be4cb8c6b1ee53c339c8760ca70a19a398354b83b307->leave($__internal_41ef24f77d5fc437eec7be4cb8c6b1ee53c339c8760ca70a19a398354b83b307_prof);

        
        $__internal_f561994af100495f4c0b6d0f9a5cd5d5f5007e7ecdb8e28352aadd481ce548f4->leave($__internal_f561994af100495f4c0b6d0f9a5cd5d5f5007e7ecdb8e28352aadd481ce548f4_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_c56fdc9e79e3fda6b7b40c8e4c6a664973fcb2de0d6bd9298e4cd8e63eb1d49b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c56fdc9e79e3fda6b7b40c8e4c6a664973fcb2de0d6bd9298e4cd8e63eb1d49b->enter($__internal_c56fdc9e79e3fda6b7b40c8e4c6a664973fcb2de0d6bd9298e4cd8e63eb1d49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_d795117e7c1fb7089e289e9b4fbfbdd91ac75c7fb76b8d692f503cfbf5e42b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d795117e7c1fb7089e289e9b4fbfbdd91ac75c7fb76b8d692f503cfbf5e42b46->enter($__internal_d795117e7c1fb7089e289e9b4fbfbdd91ac75c7fb76b8d692f503cfbf5e42b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Contactez-nous";
        
        $__internal_d795117e7c1fb7089e289e9b4fbfbdd91ac75c7fb76b8d692f503cfbf5e42b46->leave($__internal_d795117e7c1fb7089e289e9b4fbfbdd91ac75c7fb76b8d692f503cfbf5e42b46_prof);

        
        $__internal_c56fdc9e79e3fda6b7b40c8e4c6a664973fcb2de0d6bd9298e4cd8e63eb1d49b->leave($__internal_c56fdc9e79e3fda6b7b40c8e4c6a664973fcb2de0d6bd9298e4cd8e63eb1d49b_prof);

    }

    // line 5
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_33797f7b1ada8db88c927d493683c4254bd0f9fb6d5480116474d0f8a4a6c88d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33797f7b1ada8db88c927d493683c4254bd0f9fb6d5480116474d0f8a4a6c88d->enter($__internal_33797f7b1ada8db88c927d493683c4254bd0f9fb6d5480116474d0f8a4a6c88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        $__internal_1cf75877d0f52445b0c628e52e7bb036638439d9dbb181901905ba4c47320592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf75877d0f52445b0c628e52e7bb036638439d9dbb181901905ba4c47320592->enter($__internal_1cf75877d0f52445b0c628e52e7bb036638439d9dbb181901905ba4c47320592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        // line 6
        echo "    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>Contactez nous</h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Accueil</a></li>
                <li class=\"active\">Contactez-nous</li>
            </ol>
        </div>

    </section>
    <section id=\"google-map\" class=\"gmap slider-parallax\"></section>

";
        
        $__internal_1cf75877d0f52445b0c628e52e7bb036638439d9dbb181901905ba4c47320592->leave($__internal_1cf75877d0f52445b0c628e52e7bb036638439d9dbb181901905ba4c47320592_prof);

        
        $__internal_33797f7b1ada8db88c927d493683c4254bd0f9fb6d5480116474d0f8a4a6c88d->leave($__internal_33797f7b1ada8db88c927d493683c4254bd0f9fb6d5480116474d0f8a4a6c88d_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_f69ca3632f1a1bbcba2bcf35138f17dde1c3bc3ff29c91bade95241ed7d657f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f69ca3632f1a1bbcba2bcf35138f17dde1c3bc3ff29c91bade95241ed7d657f1->enter($__internal_f69ca3632f1a1bbcba2bcf35138f17dde1c3bc3ff29c91bade95241ed7d657f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4f9e3cdb8e1533abbf7759f1f035253093bf9c03b9331322fcae4c151ae38c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9e3cdb8e1533abbf7759f1f035253093bf9c03b9331322fcae4c151ae38c14->enter($__internal_4f9e3cdb8e1533abbf7759f1f035253093bf9c03b9331322fcae4c151ae38c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "    <div class=\"container clearfix\">

        <!-- Postcontent
        ============================================= -->
        <div class=\"postcontent nobottommargin\">

            <h3>Ecrivez au Ministère</h3>

            <div class=\"contact-widget\">

                <div class=\"contact-form-result\"></div>

                <form class=\"nobottommargin\" id=\"template-contactform\" name=\"template-contactform\" action=\"include/sendemail.php\" method=\"post\">

                    <div class=\"form-process\"></div>

                    <div class=\"col_one_third\">
                        <label for=\"template-contactform-name\">Nom <small>*</small></label>
                        <input type=\"text\" id=\"template-contactform-name\" name=\"template-contactform-name\" value=\"\" class=\"sm-form-control required\" />
                    </div>

                    <div class=\"col_one_third\">
                        <label for=\"template-contactform-email\">Email <small>*</small></label>
                        <input type=\"email\" id=\"template-contactform-email\" name=\"template-contactform-email\" value=\"\" class=\"required email sm-form-control\" />
                    </div>

                    <div class=\"col_one_third col_last\">
                        <label for=\"template-contactform-phone\">Téléphone</label>
                        <input type=\"text\" id=\"template-contactform-phone\" name=\"phone\" value=\"\" class=\"sm-form-control\" />
                    </div>

                    <div class=\"clear\"></div>

                    <div class=\"col_two_third\">
                        <label for=\"template-contactform-subject\">Objet <small>*</small></label>
                        <input type=\"text\" id=\"template-contactform-subject\" name=\"subject\" value=\"\" class=\"required sm-form-control\" />
                    </div>

                    <div class=\"col_one_third col_last\">
                        <label for=\"template-contactform-service\">Services</label>
                        <select id=\"template-contactform-service\" name=\"template-contactform-service\" class=\"sm-form-control\">
                            <option value=\"\">-- A quel département --</option>
                            <option value=\"Wordpress\">Bureau du Ministre</option>
                            <option value=\"PHP / MySQL\">Réclammation</option>
                            <option value=\"HTML5 / CSS3\">Chef de cabinet</option>
                            <option value=\"Graphic Design\">Servicc</option>
                        </select>
                    </div>

                    <div class=\"clear\"></div>

                    <div class=\"col_full\">
                        <label for=\"template-contactform-message\">Message <small>*</small></label>
                        <textarea class=\"required sm-form-control\" id=\"template-contactform-message\" name=\"template-contactform-message\" rows=\"6\" cols=\"30\"></textarea>
                    </div>

                    <div class=\"col_full hidden\">
                        <input type=\"text\" id=\"template-contactform-botcheck\" name=\"template-contactform-botcheck\" value=\"\" class=\"sm-form-control\" />
                    </div>

                    <div class=\"col_full\">
                        <button class=\"button button-3d nomargin\" type=\"submit\" id=\"template-contactform-submit\" name=\"template-contactform-submit\" value=\"submit\">Envoyer</button>
                    </div>

                </form>
            </div>

        </div><!-- .postcontent end -->

        <!-- Sidebar
        ============================================= -->
        <div class=\"sidebar col_last nobottommargin\">

            <address>
                <strong>Adresse:</strong><br>
                Cité Ministérielle<br>
                Batiment 2<br>
            </address>
            <abbr title=\"Phone Number\"><strong>Téléphone:</strong></abbr> (223) 8547 632521<br>
            <abbr title=\"Fax\"><strong>Fax:</strong></abbr> (223) 11 4752 1433<br>
            <abbr title=\"Email Address\"><strong>Email:</strong></abbr> info@mt.com

            <div class=\"widget noborder notoppadding\">

                <div class=\"fslider customjs testimonial twitter-scroll twitter-feed\" data-username=\"envato\" data-count=\"3\" data-animation=\"slide\" data-arrows=\"false\">
                    <i class=\"i-plain i-small color icon-twitter nobottommargin\" style=\"margin-right: 15px;\"></i>
                    <div class=\"flexslider\" style=\"width: auto;\">
                        <div class=\"slider-wrap\">
                            <div class=\"slide\"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"widget noborder notoppadding\">

                <a href=\"#\" class=\"social-icon si-small si-dark si-facebook\">
                    <i class=\"icon-facebook\"></i>
                    <i class=\"icon-facebook\"></i>
                </a>

                <a href=\"#\" class=\"social-icon si-small si-dark si-twitter\">
                    <i class=\"icon-twitter\"></i>
                    <i class=\"icon-twitter\"></i>
                </a>



            </div>

        </div><!-- .sidebar end -->

    </div>

";
        
        $__internal_4f9e3cdb8e1533abbf7759f1f035253093bf9c03b9331322fcae4c151ae38c14->leave($__internal_4f9e3cdb8e1533abbf7759f1f035253093bf9c03b9331322fcae4c151ae38c14_prof);

        
        $__internal_f69ca3632f1a1bbcba2bcf35138f17dde1c3bc3ff29c91bade95241ed7d657f1->leave($__internal_f69ca3632f1a1bbcba2bcf35138f17dde1c3bc3ff29c91bade95241ed7d657f1_prof);

    }

    // line 138
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_b3a30328468b2d22c2dbecafe41ed316671740a05740b3e0918e92bd5c51193a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a30328468b2d22c2dbecafe41ed316671740a05740b3e0918e92bd5c51193a->enter($__internal_b3a30328468b2d22c2dbecafe41ed316671740a05740b3e0918e92bd5c51193a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_7d637f213c3a3e26d9bedad892f142bc0678a0aa3b92ea6c7233da67ddf0b5a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d637f213c3a3e26d9bedad892f142bc0678a0aa3b92ea6c7233da67ddf0b5a3->enter($__internal_7d637f213c3a3e26d9bedad892f142bc0678a0aa3b92ea6c7233da67ddf0b5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 139
        echo "    <script type=\"text/javascript\">

        \$('#google-map').gMap({

            address: 'Badalabougou, Mali',
            maptype: 'ROADMAP',
            zoom: 14,
            markers: [
                {
                    address: \"Badalabougou, Mali\",
                    html: '<div style=\"width: 300px;\"><h4 style=\"margin-bottom: 8px;\">Bonjour, nous sommes le <span>Ministère des transports du Mali</span></h4><p class=\"nobottommargin\">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
                    icon: {
                        image: \"images/icons/map-icon-red.png\",
                        iconsize: [32, 39],
                        iconanchor: [13,39]
                    }
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }
        });

    </script>
";
        
        $__internal_7d637f213c3a3e26d9bedad892f142bc0678a0aa3b92ea6c7233da67ddf0b5a3->leave($__internal_7d637f213c3a3e26d9bedad892f142bc0678a0aa3b92ea6c7233da67ddf0b5a3_prof);

        
        $__internal_b3a30328468b2d22c2dbecafe41ed316671740a05740b3e0918e92bd5c51193a->leave($__internal_b3a30328468b2d22c2dbecafe41ed316671740a05740b3e0918e92bd5c51193a_prof);

    }

    public function getTemplateName()
    {
        return "KemaMainBundle::contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 139,  227 => 138,  102 => 22,  93 => 21,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block titre %}Contactez-nous{% endblock %}

{% block pagetitle %}
    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>Contactez nous</h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Accueil</a></li>
                <li class=\"active\">Contactez-nous</li>
            </ol>
        </div>

    </section>
    <section id=\"google-map\" class=\"gmap slider-parallax\"></section>

{% endblock %}

{% block content %}
    <div class=\"container clearfix\">

        <!-- Postcontent
        ============================================= -->
        <div class=\"postcontent nobottommargin\">

            <h3>Ecrivez au Ministère</h3>

            <div class=\"contact-widget\">

                <div class=\"contact-form-result\"></div>

                <form class=\"nobottommargin\" id=\"template-contactform\" name=\"template-contactform\" action=\"include/sendemail.php\" method=\"post\">

                    <div class=\"form-process\"></div>

                    <div class=\"col_one_third\">
                        <label for=\"template-contactform-name\">Nom <small>*</small></label>
                        <input type=\"text\" id=\"template-contactform-name\" name=\"template-contactform-name\" value=\"\" class=\"sm-form-control required\" />
                    </div>

                    <div class=\"col_one_third\">
                        <label for=\"template-contactform-email\">Email <small>*</small></label>
                        <input type=\"email\" id=\"template-contactform-email\" name=\"template-contactform-email\" value=\"\" class=\"required email sm-form-control\" />
                    </div>

                    <div class=\"col_one_third col_last\">
                        <label for=\"template-contactform-phone\">Téléphone</label>
                        <input type=\"text\" id=\"template-contactform-phone\" name=\"phone\" value=\"\" class=\"sm-form-control\" />
                    </div>

                    <div class=\"clear\"></div>

                    <div class=\"col_two_third\">
                        <label for=\"template-contactform-subject\">Objet <small>*</small></label>
                        <input type=\"text\" id=\"template-contactform-subject\" name=\"subject\" value=\"\" class=\"required sm-form-control\" />
                    </div>

                    <div class=\"col_one_third col_last\">
                        <label for=\"template-contactform-service\">Services</label>
                        <select id=\"template-contactform-service\" name=\"template-contactform-service\" class=\"sm-form-control\">
                            <option value=\"\">-- A quel département --</option>
                            <option value=\"Wordpress\">Bureau du Ministre</option>
                            <option value=\"PHP / MySQL\">Réclammation</option>
                            <option value=\"HTML5 / CSS3\">Chef de cabinet</option>
                            <option value=\"Graphic Design\">Servicc</option>
                        </select>
                    </div>

                    <div class=\"clear\"></div>

                    <div class=\"col_full\">
                        <label for=\"template-contactform-message\">Message <small>*</small></label>
                        <textarea class=\"required sm-form-control\" id=\"template-contactform-message\" name=\"template-contactform-message\" rows=\"6\" cols=\"30\"></textarea>
                    </div>

                    <div class=\"col_full hidden\">
                        <input type=\"text\" id=\"template-contactform-botcheck\" name=\"template-contactform-botcheck\" value=\"\" class=\"sm-form-control\" />
                    </div>

                    <div class=\"col_full\">
                        <button class=\"button button-3d nomargin\" type=\"submit\" id=\"template-contactform-submit\" name=\"template-contactform-submit\" value=\"submit\">Envoyer</button>
                    </div>

                </form>
            </div>

        </div><!-- .postcontent end -->

        <!-- Sidebar
        ============================================= -->
        <div class=\"sidebar col_last nobottommargin\">

            <address>
                <strong>Adresse:</strong><br>
                Cité Ministérielle<br>
                Batiment 2<br>
            </address>
            <abbr title=\"Phone Number\"><strong>Téléphone:</strong></abbr> (223) 8547 632521<br>
            <abbr title=\"Fax\"><strong>Fax:</strong></abbr> (223) 11 4752 1433<br>
            <abbr title=\"Email Address\"><strong>Email:</strong></abbr> info@mt.com

            <div class=\"widget noborder notoppadding\">

                <div class=\"fslider customjs testimonial twitter-scroll twitter-feed\" data-username=\"envato\" data-count=\"3\" data-animation=\"slide\" data-arrows=\"false\">
                    <i class=\"i-plain i-small color icon-twitter nobottommargin\" style=\"margin-right: 15px;\"></i>
                    <div class=\"flexslider\" style=\"width: auto;\">
                        <div class=\"slider-wrap\">
                            <div class=\"slide\"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"widget noborder notoppadding\">

                <a href=\"#\" class=\"social-icon si-small si-dark si-facebook\">
                    <i class=\"icon-facebook\"></i>
                    <i class=\"icon-facebook\"></i>
                </a>

                <a href=\"#\" class=\"social-icon si-small si-dark si-twitter\">
                    <i class=\"icon-twitter\"></i>
                    <i class=\"icon-twitter\"></i>
                </a>



            </div>

        </div><!-- .sidebar end -->

    </div>

{% endblock %}
{% block scripts  %}
    <script type=\"text/javascript\">

        \$('#google-map').gMap({

            address: 'Badalabougou, Mali',
            maptype: 'ROADMAP',
            zoom: 14,
            markers: [
                {
                    address: \"Badalabougou, Mali\",
                    html: '<div style=\"width: 300px;\"><h4 style=\"margin-bottom: 8px;\">Bonjour, nous sommes le <span>Ministère des transports du Mali</span></h4><p class=\"nobottommargin\">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
                    icon: {
                        image: \"images/icons/map-icon-red.png\",
                        iconsize: [32, 39],
                        iconanchor: [13,39]
                    }
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }
        });

    </script>
{% endblock %}", "KemaMainBundle::contact.html.twig", "/var/www/html/ministere/src/Kema/MainBundle/Resources/views/contact.html.twig");
    }
}
