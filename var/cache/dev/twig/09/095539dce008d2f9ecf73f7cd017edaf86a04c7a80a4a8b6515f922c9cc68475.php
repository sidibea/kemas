<?php

/* KemaMainBundle::actualites.html.twig */
class __TwigTemplate_eec271f52ad6ada589231a5bbc440a6a4791911cd43c80b328b9fc55e732da21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "KemaMainBundle::actualites.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3dc097af65612b2105449c58ffcd6dc6d0d2d6c63ab781ba1ef35d48e91d10f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dc097af65612b2105449c58ffcd6dc6d0d2d6c63ab781ba1ef35d48e91d10f5->enter($__internal_3dc097af65612b2105449c58ffcd6dc6d0d2d6c63ab781ba1ef35d48e91d10f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KemaMainBundle::actualites.html.twig"));

        $__internal_fe09a555598c7678d7f4adab2c3ff6142f274c0f7e359bbb6f85d9aef2035695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe09a555598c7678d7f4adab2c3ff6142f274c0f7e359bbb6f85d9aef2035695->enter($__internal_fe09a555598c7678d7f4adab2c3ff6142f274c0f7e359bbb6f85d9aef2035695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KemaMainBundle::actualites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc097af65612b2105449c58ffcd6dc6d0d2d6c63ab781ba1ef35d48e91d10f5->leave($__internal_3dc097af65612b2105449c58ffcd6dc6d0d2d6c63ab781ba1ef35d48e91d10f5_prof);

        
        $__internal_fe09a555598c7678d7f4adab2c3ff6142f274c0f7e359bbb6f85d9aef2035695->leave($__internal_fe09a555598c7678d7f4adab2c3ff6142f274c0f7e359bbb6f85d9aef2035695_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        $__internal_c9c919cf49b56a9e0cefa9d1146fcc8db975223d14c7cc258f776d5339fb276f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c919cf49b56a9e0cefa9d1146fcc8db975223d14c7cc258f776d5339fb276f->enter($__internal_c9c919cf49b56a9e0cefa9d1146fcc8db975223d14c7cc258f776d5339fb276f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_5302b525c06b968244bdc7f2537004ceac4721c6c7886f60b33924bed470ebc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5302b525c06b968244bdc7f2537004ceac4721c6c7886f60b33924bed470ebc4->enter($__internal_5302b525c06b968244bdc7f2537004ceac4721c6c7886f60b33924bed470ebc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Actualités";
        
        $__internal_5302b525c06b968244bdc7f2537004ceac4721c6c7886f60b33924bed470ebc4->leave($__internal_5302b525c06b968244bdc7f2537004ceac4721c6c7886f60b33924bed470ebc4_prof);

        
        $__internal_c9c919cf49b56a9e0cefa9d1146fcc8db975223d14c7cc258f776d5339fb276f->leave($__internal_c9c919cf49b56a9e0cefa9d1146fcc8db975223d14c7cc258f776d5339fb276f_prof);

    }

    // line 3
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_7e74ec65904b3587e921028734681684f260e0829c7a767a411948e429e38116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e74ec65904b3587e921028734681684f260e0829c7a767a411948e429e38116->enter($__internal_7e74ec65904b3587e921028734681684f260e0829c7a767a411948e429e38116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        $__internal_d1feead7f8667e30500582907b917ad3abf9f398c252c5a61c6dd3eb99407bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1feead7f8667e30500582907b917ad3abf9f398c252c5a61c6dd3eb99407bc3->enter($__internal_d1feead7f8667e30500582907b917ad3abf9f398c252c5a61c6dd3eb99407bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        // line 4
        echo "    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>A la Une</h1>
            <span>Restez informer sur votre ministère</span>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Accueil</a></li>
                <li class=\"active\">Actualité</li>
            </ol>
        </div>

    </section>

";
        
        $__internal_d1feead7f8667e30500582907b917ad3abf9f398c252c5a61c6dd3eb99407bc3->leave($__internal_d1feead7f8667e30500582907b917ad3abf9f398c252c5a61c6dd3eb99407bc3_prof);

        
        $__internal_7e74ec65904b3587e921028734681684f260e0829c7a767a411948e429e38116->leave($__internal_7e74ec65904b3587e921028734681684f260e0829c7a767a411948e429e38116_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_72e4abd8b4ce2ee0ae5bc754e7d4ba227f3eccd4c164b8f38cdd5471409c3a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e4abd8b4ce2ee0ae5bc754e7d4ba227f3eccd4c164b8f38cdd5471409c3a47->enter($__internal_72e4abd8b4ce2ee0ae5bc754e7d4ba227f3eccd4c164b8f38cdd5471409c3a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_26fed742d7a021c94d42529f0d7c0a5366624bbe82ba0f48a44d8d576c0cd93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26fed742d7a021c94d42529f0d7c0a5366624bbe82ba0f48a44d8d576c0cd93a->enter($__internal_26fed742d7a021c94d42529f0d7c0a5366624bbe82ba0f48a44d8d576c0cd93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "    <div class=\"container clearfix\">
        <div class=\"col_full nobottommargin clearfix\">

            <div class=\"fancy-title title-border\">
                <h3>Actualités</h3>
            </div>

            <div class=\"col_one_third\">
                <div class=\"ipost clearfix\">
                    <div class=\"entry-image\">
                        <a href=\"#\"><img class=\"image_fade\" src=\"images/ibk.jpg\" alt=\"Image\"></a>
                    </div>
                    <div class=\"entry-title\">
                        <h3><a href=\"http://mali-web.org/politique/gestion-a-la-tete-du-pays-ibk-le-soldat-du-developpement\">Gestion à la tête du pays: IBK, le soldat du développement</a></h3>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> 9th Sep 2014</li>
                        <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 23</a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>Annoncé pour être un événement majeur devant mettre les projecteurs sur les grandes réalisations du président de la République Ibrahim Boubacar KEITA, depuis son accession à la magistrature suprême, la soirée Gala, dénommée «IBK ni Tché» aura comblé toutes les attentes des organisateurs, des invités et de personnalités présents, le samedi dernier à l’hôtel Radisson Blu de Bamako, qui ont compris et attesté que IBK est certainement un soldat du développement.</p>
                    </div>
                </div>
            </div>

            <div class=\"col_one_third\">
                <div class=\"ipost clearfix\">
                    <div class=\"entry-image\">
                        <a href=\"#\"><img class=\"image_fade\" src=\"images/diner.jpg\" alt=\"Image\"></a>
                    </div>
                    <div class=\"entry-title\">
                        <h3><a href=\"http://www.essor.ml/diner-gala-lumiere-sur-les-realisations-du-president-de-la-republique/\">Diner gala : Lumière sur les réalisations du président de la république</a></h3>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> 23rd Aug 2014</li>
                        <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 33</a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>L’hôtel Radisson blu a abrité samedi dernier un dîner gala organisé dans le cadre du quatrième anniversaire de l’élection de Ibrahim Boubacar Kéïta à la tête du pays. La soirée a été l’occasion de montrer certaines de ses réalisations durant ces quatre dernières années. L’événement était placé sous la présidence de Me Baber Gano, ministre des Transports et secrétaire général du parti au pouvoir : le Rassemblement pour le Mali (RPM).</p>
                    </div>
                </div>
            </div>

            <div class=\"col_one_third col_last\">
                <div class=\"ipost clearfix\">
                    <div class=\"entry-image\">
                        <a href=\"#\"><img class=\"image_fade\" src=\"images/comav.jpg\" alt=\"Image\"></a>
                    </div>
                    <div class=\"entry-title\">
                        <h3><a href=\"http://maliactu.net/mali-comanav-modibo-keita-et-fihroun-desormais-en-service/\">Mali : COMANAV : «Modibo Keita» et «Fihroun» désormais en service</a></h3>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> 11th Feb 2014</li>
                        <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 13</a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>En vue de relancer  le trafic fluvial, deux  nouveaux bateaux ont été remis par le Président de la République Ibrahim Boubacar Keita  à la  Compagnie malienne de navigation (COMANAV). Ils constituent un début de renouvellement de la flotte et le désenclavement intérieur du pays par voie fluviale. Les joujoux  portent  désormais les noms «Modibo Keita» et «Fihroun Ag  Al Insar ». La cérémonie a eu lieu le Samedi 13 Juin 2015 dans les locaux...</p>
                    </div>
                </div>
            </div>

            <div class=\"clear\"></div>

            <div class=\"col_one_third nobottommargin\">
                <div class=\"ipost clearfix\">
                    <div class=\"entry-image\">
                        <a href=\"#\"><img class=\"image_fade\" src=\"images/min.jpg\" alt=\"Image\"></a>
                    </div>
                    <div class=\"entry-title\">
                        <h3><a href=\"http://malijet.com/actualite-politique-au-mali/197239-le-ministre-baber-gano-%E2%80%9Cde-1960-%C3%A0-nos-jours%2C-l%E2%80%99arm%C3%A9e-de-l%E2%80%99air-du.html\">Le ministre Baber Gano : “De 1960 à nos jours, l’armée de l’air du Mali n’a jamais été dotée en une seule année de tant d’aéronefs”</a></h3>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> 17th Jan 2014</li>
                        <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 50</a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>” IBK ni tché ” ou merci IBK. Tel était le nom de la soirée de reconnaissance organisée le samedi dernier à l’hôtel Radisson Blu de Bamako par la société Sud Sva afin de mettre en lumière les grands chantiers bâtis par le président de la République Ibrahim Boubacar Kéïta et son gouvernement durant les quatre années passées aux affaires. Projections des réalisations, témoignages des personnalités, prestations d’artistes ont été les temps forts de cet événement.
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"col_one_third nobottommargin\">
                <div class=\"ipost clearfix\">
                    <div class=\"entry-image\">
                        <a href=\"#\"><img class=\"image_fade\" src=\"images/trans.png\" alt=\"Image\"></a>
                    </div>
                    <div class=\"entry-title\">
                        <h3><a href=\"http://www.maliweb.net/economie/transport/contrat-de-concession-entre-transrail-letat-malien-marche-de-dupes-2281222.html\">Mali : Contrat de concession entre Transrail et l’Etat Malien : Un marché de dupes</a></h3>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> 20th Nov 2014</li>
                        <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 13</a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>Pour éviter l’arrêt de l’activité ferroviaire en attendant la mise en œuvre du nouveau schéma institutionnel, les Etats du Mali et du Sénégal avaient signé une convention de concession avec Transrail-SA en 2003.
                            Le Sénégal a alors transféré ses prérogatives de service public au PTB,  mais notre pays a tout simplement signé la convention pour ensuite laisser un vide juridique doublé d’un manque de suivi.
                            Conséquences, de 2003 à 2016, le partenariat avec  la société Transrail a non seulement été un  cuisant échec, mais aussi  il aura couté inutilement à l’Etat Malien plus de 58 milliards de nos francs.</p>
                    </div>
                </div>
            </div>

            <div class=\"col_one_third nobottommargin col_last\">
                <div class=\"ipost clearfix\">
                    <div class=\"entry-image\">
                        <a href=\"#\"><img class=\"image_fade\" src=\"images/baber.jpg\" alt=\"Image\"></a>
                    </div>
                    <div class=\"entry-title\">
                        <h3><a href=\"https://niarela.net/economie/ministere-des-transports-me-baber-gano-devoile-sa-strategie\">Ministère des transports: Me Baber Gano dévoile sa stratégie</a></h3>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> 10th Dec 2013</li>
                        <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 13</a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>« La nomination aux postes de directeurs et chefs de service ne doit plus signifier simplement l’occupation d’un fauteuil. Elle renvoie plutôt à l’exigence de performance et surtout de bien servir le Mali et à temps. C’est aussi, promouvoir la culture de la récompense du mérite et de la sanction aussi ».Outre le ministre Me Baber GANO, la cérémonie s’est déroulée en présence de Makan Fily DABO, secrétaire général des deux départements (Transports et Équipement et du désenclavement) en attendant l’attribution d’un bureau et l’installation du cabinet de Me GANO ; le directeur général de l’ANAC, Oumar Mamadou BA</p>
                    </div>
                </div>
            </div>


        </div>

    </div>

";
        
        $__internal_26fed742d7a021c94d42529f0d7c0a5366624bbe82ba0f48a44d8d576c0cd93a->leave($__internal_26fed742d7a021c94d42529f0d7c0a5366624bbe82ba0f48a44d8d576c0cd93a_prof);

        
        $__internal_72e4abd8b4ce2ee0ae5bc754e7d4ba227f3eccd4c164b8f38cdd5471409c3a47->leave($__internal_72e4abd8b4ce2ee0ae5bc754e7d4ba227f3eccd4c164b8f38cdd5471409c3a47_prof);

    }

    public function getTemplateName()
    {
        return "KemaMainBundle::actualites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 20,  92 => 19,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block titre %}Actualités{% endblock %}
{% block pagetitle %}
    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>A la Une</h1>
            <span>Restez informer sur votre ministère</span>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Accueil</a></li>
                <li class=\"active\">Actualité</li>
            </ol>
        </div>

    </section>

{% endblock %}

{% block content %}
    <div class=\"container clearfix\">
        <div class=\"col_full nobottommargin clearfix\">

            <div class=\"fancy-title title-border\">
                <h3>Actualités</h3>
            </div>

            <div class=\"col_one_third\">
                <div class=\"ipost clearfix\">
                    <div class=\"entry-image\">
                        <a href=\"#\"><img class=\"image_fade\" src=\"images/ibk.jpg\" alt=\"Image\"></a>
                    </div>
                    <div class=\"entry-title\">
                        <h3><a href=\"http://mali-web.org/politique/gestion-a-la-tete-du-pays-ibk-le-soldat-du-developpement\">Gestion à la tête du pays: IBK, le soldat du développement</a></h3>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> 9th Sep 2014</li>
                        <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 23</a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>Annoncé pour être un événement majeur devant mettre les projecteurs sur les grandes réalisations du président de la République Ibrahim Boubacar KEITA, depuis son accession à la magistrature suprême, la soirée Gala, dénommée «IBK ni Tché» aura comblé toutes les attentes des organisateurs, des invités et de personnalités présents, le samedi dernier à l’hôtel Radisson Blu de Bamako, qui ont compris et attesté que IBK est certainement un soldat du développement.</p>
                    </div>
                </div>
            </div>

            <div class=\"col_one_third\">
                <div class=\"ipost clearfix\">
                    <div class=\"entry-image\">
                        <a href=\"#\"><img class=\"image_fade\" src=\"images/diner.jpg\" alt=\"Image\"></a>
                    </div>
                    <div class=\"entry-title\">
                        <h3><a href=\"http://www.essor.ml/diner-gala-lumiere-sur-les-realisations-du-president-de-la-republique/\">Diner gala : Lumière sur les réalisations du président de la république</a></h3>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> 23rd Aug 2014</li>
                        <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 33</a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>L’hôtel Radisson blu a abrité samedi dernier un dîner gala organisé dans le cadre du quatrième anniversaire de l’élection de Ibrahim Boubacar Kéïta à la tête du pays. La soirée a été l’occasion de montrer certaines de ses réalisations durant ces quatre dernières années. L’événement était placé sous la présidence de Me Baber Gano, ministre des Transports et secrétaire général du parti au pouvoir : le Rassemblement pour le Mali (RPM).</p>
                    </div>
                </div>
            </div>

            <div class=\"col_one_third col_last\">
                <div class=\"ipost clearfix\">
                    <div class=\"entry-image\">
                        <a href=\"#\"><img class=\"image_fade\" src=\"images/comav.jpg\" alt=\"Image\"></a>
                    </div>
                    <div class=\"entry-title\">
                        <h3><a href=\"http://maliactu.net/mali-comanav-modibo-keita-et-fihroun-desormais-en-service/\">Mali : COMANAV : «Modibo Keita» et «Fihroun» désormais en service</a></h3>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> 11th Feb 2014</li>
                        <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 13</a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>En vue de relancer  le trafic fluvial, deux  nouveaux bateaux ont été remis par le Président de la République Ibrahim Boubacar Keita  à la  Compagnie malienne de navigation (COMANAV). Ils constituent un début de renouvellement de la flotte et le désenclavement intérieur du pays par voie fluviale. Les joujoux  portent  désormais les noms «Modibo Keita» et «Fihroun Ag  Al Insar ». La cérémonie a eu lieu le Samedi 13 Juin 2015 dans les locaux...</p>
                    </div>
                </div>
            </div>

            <div class=\"clear\"></div>

            <div class=\"col_one_third nobottommargin\">
                <div class=\"ipost clearfix\">
                    <div class=\"entry-image\">
                        <a href=\"#\"><img class=\"image_fade\" src=\"images/min.jpg\" alt=\"Image\"></a>
                    </div>
                    <div class=\"entry-title\">
                        <h3><a href=\"http://malijet.com/actualite-politique-au-mali/197239-le-ministre-baber-gano-%E2%80%9Cde-1960-%C3%A0-nos-jours%2C-l%E2%80%99arm%C3%A9e-de-l%E2%80%99air-du.html\">Le ministre Baber Gano : “De 1960 à nos jours, l’armée de l’air du Mali n’a jamais été dotée en une seule année de tant d’aéronefs”</a></h3>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> 17th Jan 2014</li>
                        <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 50</a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>” IBK ni tché ” ou merci IBK. Tel était le nom de la soirée de reconnaissance organisée le samedi dernier à l’hôtel Radisson Blu de Bamako par la société Sud Sva afin de mettre en lumière les grands chantiers bâtis par le président de la République Ibrahim Boubacar Kéïta et son gouvernement durant les quatre années passées aux affaires. Projections des réalisations, témoignages des personnalités, prestations d’artistes ont été les temps forts de cet événement.
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"col_one_third nobottommargin\">
                <div class=\"ipost clearfix\">
                    <div class=\"entry-image\">
                        <a href=\"#\"><img class=\"image_fade\" src=\"images/trans.png\" alt=\"Image\"></a>
                    </div>
                    <div class=\"entry-title\">
                        <h3><a href=\"http://www.maliweb.net/economie/transport/contrat-de-concession-entre-transrail-letat-malien-marche-de-dupes-2281222.html\">Mali : Contrat de concession entre Transrail et l’Etat Malien : Un marché de dupes</a></h3>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> 20th Nov 2014</li>
                        <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 13</a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>Pour éviter l’arrêt de l’activité ferroviaire en attendant la mise en œuvre du nouveau schéma institutionnel, les Etats du Mali et du Sénégal avaient signé une convention de concession avec Transrail-SA en 2003.
                            Le Sénégal a alors transféré ses prérogatives de service public au PTB,  mais notre pays a tout simplement signé la convention pour ensuite laisser un vide juridique doublé d’un manque de suivi.
                            Conséquences, de 2003 à 2016, le partenariat avec  la société Transrail a non seulement été un  cuisant échec, mais aussi  il aura couté inutilement à l’Etat Malien plus de 58 milliards de nos francs.</p>
                    </div>
                </div>
            </div>

            <div class=\"col_one_third nobottommargin col_last\">
                <div class=\"ipost clearfix\">
                    <div class=\"entry-image\">
                        <a href=\"#\"><img class=\"image_fade\" src=\"images/baber.jpg\" alt=\"Image\"></a>
                    </div>
                    <div class=\"entry-title\">
                        <h3><a href=\"https://niarela.net/economie/ministere-des-transports-me-baber-gano-devoile-sa-strategie\">Ministère des transports: Me Baber Gano dévoile sa stratégie</a></h3>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> 10th Dec 2013</li>
                        <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 13</a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>« La nomination aux postes de directeurs et chefs de service ne doit plus signifier simplement l’occupation d’un fauteuil. Elle renvoie plutôt à l’exigence de performance et surtout de bien servir le Mali et à temps. C’est aussi, promouvoir la culture de la récompense du mérite et de la sanction aussi ».Outre le ministre Me Baber GANO, la cérémonie s’est déroulée en présence de Makan Fily DABO, secrétaire général des deux départements (Transports et Équipement et du désenclavement) en attendant l’attribution d’un bureau et l’installation du cabinet de Me GANO ; le directeur général de l’ANAC, Oumar Mamadou BA</p>
                    </div>
                </div>
            </div>


        </div>

    </div>

{% endblock %}", "KemaMainBundle::actualites.html.twig", "/opt/lampp/htdocs/ministere/src/Kema/MainBundle/Resources/views/actualites.html.twig");
    }
}
