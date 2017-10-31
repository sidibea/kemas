<?php

/* KemaMainBundle::index.html.twig */
class __TwigTemplate_a950cb8f646ed9f4ab7bc89e84a845c8bd67f4235470ea74bc3fa7fa1d090e4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "KemaMainBundle::index.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'breaking' => array($this, 'block_breaking'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_def7f1e70eac35abe8025e384b049ea70f01472ce73029f2a4b38ecba87e00e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def7f1e70eac35abe8025e384b049ea70f01472ce73029f2a4b38ecba87e00e0->enter($__internal_def7f1e70eac35abe8025e384b049ea70f01472ce73029f2a4b38ecba87e00e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KemaMainBundle::index.html.twig"));

        $__internal_2228ef7a12287891169bdf4ceaaa33fe991ee110e21a1e8fe8c07ef569c5c17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2228ef7a12287891169bdf4ceaaa33fe991ee110e21a1e8fe8c07ef569c5c17b->enter($__internal_2228ef7a12287891169bdf4ceaaa33fe991ee110e21a1e8fe8c07ef569c5c17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KemaMainBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_def7f1e70eac35abe8025e384b049ea70f01472ce73029f2a4b38ecba87e00e0->leave($__internal_def7f1e70eac35abe8025e384b049ea70f01472ce73029f2a4b38ecba87e00e0_prof);

        
        $__internal_2228ef7a12287891169bdf4ceaaa33fe991ee110e21a1e8fe8c07ef569c5c17b->leave($__internal_2228ef7a12287891169bdf4ceaaa33fe991ee110e21a1e8fe8c07ef569c5c17b_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_c6009b200e31c492d53ba22f5fc6562f8e18e1a285506dd5b69f04b27db4fe50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6009b200e31c492d53ba22f5fc6562f8e18e1a285506dd5b69f04b27db4fe50->enter($__internal_c6009b200e31c492d53ba22f5fc6562f8e18e1a285506dd5b69f04b27db4fe50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_aaae66a3612325b82e4c545b81d0523192b59c829240ac8eb5cf741b4ca0484c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaae66a3612325b82e4c545b81d0523192b59c829240ac8eb5cf741b4ca0484c->enter($__internal_aaae66a3612325b82e4c545b81d0523192b59c829240ac8eb5cf741b4ca0484c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " Bienvenue sur le site du Ministere des transport";
        
        $__internal_aaae66a3612325b82e4c545b81d0523192b59c829240ac8eb5cf741b4ca0484c->leave($__internal_aaae66a3612325b82e4c545b81d0523192b59c829240ac8eb5cf741b4ca0484c_prof);

        
        $__internal_c6009b200e31c492d53ba22f5fc6562f8e18e1a285506dd5b69f04b27db4fe50->leave($__internal_c6009b200e31c492d53ba22f5fc6562f8e18e1a285506dd5b69f04b27db4fe50_prof);

    }

    // line 5
    public function block_breaking($context, array $blocks = array())
    {
        $__internal_5b9c69e53fc92afbdaf8c0cfaae3437a37df6f863d5f3102433bb1fc43a51402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9c69e53fc92afbdaf8c0cfaae3437a37df6f863d5f3102433bb1fc43a51402->enter($__internal_5b9c69e53fc92afbdaf8c0cfaae3437a37df6f863d5f3102433bb1fc43a51402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breaking"));

        $__internal_d6ea83107fcceda638ac6bd10d026415f9f4a25d311c51cd52a39ccd83fbaf97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ea83107fcceda638ac6bd10d026415f9f4a25d311c51cd52a39ccd83fbaf97->enter($__internal_d6ea83107fcceda638ac6bd10d026415f9f4a25d311c51cd52a39ccd83fbaf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breaking"));

        // line 6
        echo "    <div class=\"section header-stick bottommargin-lg clearfix\" style=\"padding: 20px 0;\">
        <div>
            <div class=\"container clearfix\">
                <span class=\"label label-danger bnews-title\">Votre attention:</span>

                <div class=\"fslider bnews-slider nobottommargin\" data-speed=\"800\" data-pause=\"6000\" data-arrows=\"false\" data-pagi=\"false\">
                    <div class=\"flexslider\">
                        <div class=\"slider-wrap\">
                            <div class=\"slide\"><a href=\"#\"><strong>Russia hits back, says US acts like a 'bad surgeon'..</strong></a></div>
                            <div class=\"slide\"><a href=\"#\"><strong>'Sulking' Narayan Rane needs consolation: Uddhav reacts to Cong leader's attack..</strong></a></div>
                            <div class=\"slide\"><a href=\"#\"><strong>Rane needs consolation. I pray to God that he gets mental peace in a political party..</strong></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d6ea83107fcceda638ac6bd10d026415f9f4a25d311c51cd52a39ccd83fbaf97->leave($__internal_d6ea83107fcceda638ac6bd10d026415f9f4a25d311c51cd52a39ccd83fbaf97_prof);

        
        $__internal_5b9c69e53fc92afbdaf8c0cfaae3437a37df6f863d5f3102433bb1fc43a51402->leave($__internal_5b9c69e53fc92afbdaf8c0cfaae3437a37df6f863d5f3102433bb1fc43a51402_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_574480fffbd6fc984e41c7c2a233f6024daacb8b69aa55d9f3b9c080b240ef37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574480fffbd6fc984e41c7c2a233f6024daacb8b69aa55d9f3b9c080b240ef37->enter($__internal_574480fffbd6fc984e41c7c2a233f6024daacb8b69aa55d9f3b9c080b240ef37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f0dbdae97e5b293b1937fb72aa799a25ffa1e305441674714c8eb8a459643ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0dbdae97e5b293b1937fb72aa799a25ffa1e305441674714c8eb8a459643ef8->enter($__internal_f0dbdae97e5b293b1937fb72aa799a25ffa1e305441674714c8eb8a459643ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "    <div class=\"container clearfix\">

        <div class=\"row\">

            <div class=\"col-md-8 bottommargin\">

                <div class=\"col_full bottommargin-lg\">
                    <div class=\"fslider flex-thumb-grid grid-6\" data-animation=\"fade\" data-arrows=\"true\" data-thumbs=\"true\">
                        <div class=\"flexslider\">
                            <div class=\"slider-wrap\">
                                <div class=\"slide\" data-thumb=\"images/bann3.jpg\">
                                    <a href=\"#\">
                                        <img src=\"images/bann3.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"text-overlay\">
                                                <div class=\"text-overlay-title\">
                                                    <h3>Locked Steel Gate</h3>
                                                </div>
                                                <div class=\"text-overlay-meta\">
                                                    <span><i class=\"icon-star3\"></i> <i class=\"icon-star3\"></i> <i class=\"icon-star3\"></i> <i class=\"icon-star-half-full\"></i> <i class=\"icon-star-empty\"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"slide\" data-thumb=\"images/bann2.jpg\">
                                    <a href=\"#\">
                                        <img src=\"images/bann2.jpg\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"slide\" data-thumb=\"images/bann1.jpg\">
                                    <a href=\"#\">
                                        <img src=\"images/bann1.jpg\" alt=\"\">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"clear\"></div>
                <div class=\"col-md-6\">
                    <h3>Mot du Ministre</h3>
                    <p style=\"text-align: justify\">
                        Megatron is a Multipurpose HTML 5 Template with which responds to the most demanding customers.
                        It can be a great choice for your Corporate, Ecommerce, Portfolio, Creative Agency etc.
                        This theme can easily satisfy all of your needs. Use Megatron template to create any
                        interactive website you want. </p>

                </div>
                <div class=\"col-md-6\">
                    <div style=\"position: relative; \" >
                        <img data-animate=\"fadeInLeft\" src=\"images/me.jpg\" alt=\"Mac\" style=\"position: absolute; top: 0; left: 0;\" class=\"fadeInLeft animated\">
                    </div>
                </div>

                <div class=\"clear\"></div>

                <div class=\"col-md-3\">
                    <img class=\"image_fade\" src=\"images/magazine/thumb/1.jpg\" alt=\"Gallery Thumb 1\">
                </div>
                <div class=\"col-md-3\">
                    <img class=\"image_fade\" src=\"images/magazine/thumb/1.jpg\" alt=\"Gallery Thumb 1\">
                </div>
                <div class=\"col-md-3\"> <img class=\"image_fade\" src=\"images/magazine/thumb/1.jpg\" alt=\"Gallery Thumb 1\"></div>
                <div class=\"col-md-3\"> <img class=\"image_fade\" src=\"images/magazine/thumb/1.jpg\" alt=\"Gallery Thumb 1\"></div>

                <div class=\"clear\"></div>

                <div class=\"fancy-title title-border\">
                    <h3>Nos réalisations</h3>
                </div>

                <div class=\"col_full masonry-thumbs col-6 bottommargin-lg clearfix\" data-big=\"5\" data-lightbox=\"gallery\">
                    <a href=\"images/magazine/1.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/1.jpg\" alt=\"Gallery Thumb 1\"></a>
                    <a href=\"images/magazine/2.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/2.jpg\" alt=\"Gallery Thumb 2\"></a>
                    <a href=\"images/magazine/3.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/3.jpg\" alt=\"Gallery Thumb 3\"></a>
                    <a href=\"images/magazine/4.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/4.jpg\" alt=\"Gallery Thumb 4\"></a>
                    <a href=\"images/magazine/5.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/5.jpg\" alt=\"Gallery Thumb 5\"></a>
                    <a href=\"images/magazine/6.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/6.jpg\" alt=\"Gallery Thumb 6\"></a>
                    <a href=\"images/magazine/7.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/7.jpg\" alt=\"Gallery Thumb 7\"></a>
                    <a href=\"images/magazine/8.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/8.jpg\" alt=\"Gallery Thumb 8\"></a>
                    <a href=\"images/magazine/9.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/9.jpg\" alt=\"Gallery Thumb 9\"></a>
                    <a href=\"images/magazine/10.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/10.jpg\" alt=\"Gallery Thumb 10\"></a>
                    <a href=\"images/magazine/11.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/11.jpg\" alt=\"Gallery Thumb 11\"></a>
                    <a href=\"images/magazine/12.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/12.jpg\" alt=\"Gallery Thumb 12\"></a>
                    <a href=\"images/magazine/13.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/13.jpg\" alt=\"Gallery Thumb 13\"></a>
                    <a href=\"images/magazine/14.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/14.jpg\" alt=\"Gallery Thumb 14\"></a>
                    <a href=\"images/magazine/15.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/15.jpg\" alt=\"Gallery Thumb 15\"></a>
                </div>

                <div class=\"col_full nobottommargin clearfix\">

                    <div class=\"fancy-title title-border\">
                        <h3>Actualités</h3>
                    </div>

                    <div class=\"col_one_third\">
                        <div class=\"ipost clearfix\">
                            <div class=\"entry-image\">
                                <a href=\"#\"><img class=\"image_fade\" src=\"images/magazine/thumb/11.jpg\" alt=\"Image\"></a>
                            </div>
                            <div class=\"entry-title\">
                                <h3><a href=\"blog-single.html\">Yum, McDonald's apologize as new China food scandal brews</a></h3>
                            </div>
                            <ul class=\"entry-meta clearfix\">
                                <li><i class=\"icon-calendar3\"></i> 9th Sep 2014</li>
                                <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 23</a></li>
                            </ul>
                            <div class=\"entry-content\">
                                <p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col_one_third\">
                        <div class=\"ipost clearfix\">
                            <div class=\"entry-image\">
                                <a href=\"#\"><img class=\"image_fade\" src=\"images/magazine/thumb/16.jpg\" alt=\"Image\"></a>
                            </div>
                            <div class=\"entry-title\">
                                <h3><a href=\"blog-single.html\">Halliburton gets boost from rebound in North America drilling</a></h3>
                            </div>
                            <ul class=\"entry-meta clearfix\">
                                <li><i class=\"icon-calendar3\"></i> 23rd Aug 2014</li>
                                <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 33</a></li>
                            </ul>
                            <div class=\"entry-content\">
                                <p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col_one_third col_last\">
                        <div class=\"ipost clearfix\">
                            <div class=\"entry-image\">
                                <a href=\"#\"><img class=\"image_fade\" src=\"images/magazine/thumb/13.jpg\" alt=\"Image\"></a>
                            </div>
                            <div class=\"entry-title\">
                                <h3><a href=\"blog-single.html\">China sends spy ship off Hawaii during U.S.-led drills brews</a></h3>
                            </div>
                            <ul class=\"entry-meta clearfix\">
                                <li><i class=\"icon-calendar3\"></i> 11th Feb 2014</li>
                                <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 13</a></li>
                            </ul>
                            <div class=\"entry-content\">
                                <p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"clear\"></div>

                    <div class=\"col_one_third nobottommargin\">
                        <div class=\"ipost clearfix\">
                            <div class=\"entry-image\">
                                <a href=\"#\"><img class=\"image_fade\" src=\"images/magazine/thumb/10.jpg\" alt=\"Image\"></a>
                            </div>
                            <div class=\"entry-title\">
                                <h3><a href=\"blog-single.html\">Wobbly stocks underpin yen and Swiss franc; dollar subdued</a></h3>
                            </div>
                            <ul class=\"entry-meta clearfix\">
                                <li><i class=\"icon-calendar3\"></i> 17th Jan 2014</li>
                                <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 50</a></li>
                            </ul>
                            <div class=\"entry-content\">
                                <p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col_one_third nobottommargin\">
                        <div class=\"ipost clearfix\">
                            <div class=\"entry-image\">
                                <a href=\"#\"><img class=\"image_fade\" src=\"images/magazine/thumb/15.jpg\" alt=\"Image\"></a>
                            </div>
                            <div class=\"entry-title\">
                                <h3><a href=\"blog-single.html\">BlackBerry names ex-Sybase executive as chief operating officer</a></h3>
                            </div>
                            <ul class=\"entry-meta clearfix\">
                                <li><i class=\"icon-calendar3\"></i> 20th Nov 2014</li>
                                <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 13</a></li>
                            </ul>
                            <div class=\"entry-content\">
                                <p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col_one_third nobottommargin col_last\">
                        <div class=\"ipost clearfix\">
                            <div class=\"entry-image\">
                                <a href=\"#\"><img class=\"image_fade\" src=\"images/magazine/thumb/6.jpg\" alt=\"Image\"></a>
                            </div>
                            <div class=\"entry-title\">
                                <h3><a href=\"blog-single.html\">Georgian prime minister fires seven ministers in first reshuffle</a></h3>
                            </div>
                            <ul class=\"entry-meta clearfix\">
                                <li><i class=\"icon-calendar3\"></i> 10th Dec 2013</li>
                                <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 13</a></li>
                            </ul>
                            <div class=\"entry-content\">
                                <p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
                            </div>
                        </div>
                    </div>

                    <div id=\"oc-clients\" class=\"section nobgcolor notopmargin owl-carousel owl-carousel-full image-carousel footer-stick carousel-widget\" data-margin=\"80\" data-loop=\"true\" data-nav=\"false\" data-autoplay=\"5000\" data-pagi=\"false\" data-items-xxs=\"2\" data-items-xs=\"3\" data-items-sm=\"4\" data-items-md=\"5\" data-items-lg=\"6\">

                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/ASAMlog.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/logoAsecna.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/ASAMlog.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/logoAsecna.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/ASAMlog.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/logoAsecna.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/ASAMlog.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/logoAsecna.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/ASAMlog.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/logoAsecna.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/ASAMlog.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/logoAsecna.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/ASAMlog.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/logoAsecna.png\" alt=\"Clients\"></a></div>


                    </div>

                </div>

            </div>

            <div class=\"col-md-4\">

                <div class=\"line hidden-lg hidden-md\"></div>

                <div class=\"sidebar-widgets-wrap clearfix\">

                    <div class=\"widget clearfix\">
                        <div class=\"col_one_third nobottommargin\">
                            <a href=\"#\" class=\"social-icon si-dark si-colored si-facebook nobottommargin\" style=\"margin-right: 10px;\">
                                <i class=\"icon-facebook\"></i>
                                <i class=\"icon-facebook\"></i>
                            </a>
                            <small style=\"display: block; margin-top: 3px;\"><strong><div class=\"counter counter-inherit\"><span data-from=\"1000\" data-to=\"58742\" data-refresh-interval=\"100\" data-speed=\"3000\" data-comma=\"true\"></span></div></strong>Likes</small>
                        </div>

                        <div class=\"col_one_third nobottommargin\">
                            <a href=\"#\" class=\"social-icon si-dark si-colored si-twitter nobottommargin\" style=\"margin-right: 10px;\">
                                <i class=\"icon-twitter\"></i>
                                <i class=\"icon-twitter\"></i>
                            </a>
                            <small style=\"display: block; margin-top: 3px;\"><strong><div class=\"counter counter-inherit\"><span data-from=\"500\" data-to=\"9654\" data-refresh-interval=\"50\" data-speed=\"2500\" data-comma=\"true\"></span></div></strong>Followers</small>
                        </div>

                        <div class=\"col_one_third nobottommargin col_last\">
                            <a href=\"#\" class=\"social-icon si-dark si-colored si-rss nobottommargin\" style=\"margin-right: 10px;\">
                                <i class=\"icon-rss\"></i>
                                <i class=\"icon-rss\"></i>
                            </a>
                            <small style=\"display: block; margin-top: 3px;\"><strong><div class=\"counter counter-inherit\"><span data-from=\"200\" data-to=\"15475\" data-refresh-interval=\"150\" data-speed=\"3500\" data-comma=\"true\"></span></div></strong>Readers</small>
                        </div>
                    </div>

                    <div class=\"widget clearfix\">
                        <img class=\"aligncenter\" src=\"images/magazine/ad.png\" alt=\"\">
                    </div>

                    <div class=\"widget widget_links clearfix\">

                        <h4>Categories</h4>
                        <div class=\"col_half nobottommargin\">
                            <ul>
                                <li><a href=\"#\">World</a></li>
                                <li><a href=\"#\">Technology</a></li>
                                <li><a href=\"#\">Entertainment</a></li>
                                <li><a href=\"#\">Sports</a></li>
                                <li><a href=\"#\">Media</a></li>
                                <li><a href=\"#\">Politics</a></li>
                                <li><a href=\"#\">Business</a></li>
                            </ul>
                        </div>
                        <div class=\"col_half nobottommargin col_last\">
                            <ul>
                                <li><a href=\"#\">Lifestyle</a></li>
                                <li><a href=\"#\">Travel</a></li>
                                <li><a href=\"#\">Cricket</a></li>
                                <li><a href=\"#\">Football</a></li>
                                <li><a href=\"#\">Education</a></li>
                                <li><a href=\"#\">Photography</a></li>
                                <li><a href=\"#\">Nature</a></li>
                            </ul>
                        </div>

                    </div>


                    <div class=\"widget clearfix\">
                        <iframe src=\"http://player.vimeo.com/video/100299651\" width=\"500\" height=\"264\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>

                    <div class=\"widget clearfix\">
                        <img class=\"aligncenter\" src=\"images/magazine/ad.png\" alt=\"\">
                    </div>

                    <div class=\"widget clearfix\">
                        <iframe src=\"//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FEnvato&amp;width=350&amp;height=240&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=499481203443583\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden; width:350px; height:240px; max-width: 100% !important;\" allowTransparency=\"true\"></iframe>
                    </div>

                </div>

            </div>

        </div>

    </div>
";
        
        $__internal_f0dbdae97e5b293b1937fb72aa799a25ffa1e305441674714c8eb8a459643ef8->leave($__internal_f0dbdae97e5b293b1937fb72aa799a25ffa1e305441674714c8eb8a459643ef8_prof);

        
        $__internal_574480fffbd6fc984e41c7c2a233f6024daacb8b69aa55d9f3b9c080b240ef37->leave($__internal_574480fffbd6fc984e41c7c2a233f6024daacb8b69aa55d9f3b9c080b240ef37_prof);

    }

    public function getTemplateName()
    {
        return "KemaMainBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 26,  96 => 25,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block titre %} Bienvenue sur le site du Ministere des transport{% endblock %}

{% block breaking %}
    <div class=\"section header-stick bottommargin-lg clearfix\" style=\"padding: 20px 0;\">
        <div>
            <div class=\"container clearfix\">
                <span class=\"label label-danger bnews-title\">Votre attention:</span>

                <div class=\"fslider bnews-slider nobottommargin\" data-speed=\"800\" data-pause=\"6000\" data-arrows=\"false\" data-pagi=\"false\">
                    <div class=\"flexslider\">
                        <div class=\"slider-wrap\">
                            <div class=\"slide\"><a href=\"#\"><strong>Russia hits back, says US acts like a 'bad surgeon'..</strong></a></div>
                            <div class=\"slide\"><a href=\"#\"><strong>'Sulking' Narayan Rane needs consolation: Uddhav reacts to Cong leader's attack..</strong></a></div>
                            <div class=\"slide\"><a href=\"#\"><strong>Rane needs consolation. I pray to God that he gets mental peace in a political party..</strong></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block content %}
    <div class=\"container clearfix\">

        <div class=\"row\">

            <div class=\"col-md-8 bottommargin\">

                <div class=\"col_full bottommargin-lg\">
                    <div class=\"fslider flex-thumb-grid grid-6\" data-animation=\"fade\" data-arrows=\"true\" data-thumbs=\"true\">
                        <div class=\"flexslider\">
                            <div class=\"slider-wrap\">
                                <div class=\"slide\" data-thumb=\"images/bann3.jpg\">
                                    <a href=\"#\">
                                        <img src=\"images/bann3.jpg\" alt=\"\">
                                        <div class=\"overlay\">
                                            <div class=\"text-overlay\">
                                                <div class=\"text-overlay-title\">
                                                    <h3>Locked Steel Gate</h3>
                                                </div>
                                                <div class=\"text-overlay-meta\">
                                                    <span><i class=\"icon-star3\"></i> <i class=\"icon-star3\"></i> <i class=\"icon-star3\"></i> <i class=\"icon-star-half-full\"></i> <i class=\"icon-star-empty\"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"slide\" data-thumb=\"images/bann2.jpg\">
                                    <a href=\"#\">
                                        <img src=\"images/bann2.jpg\" alt=\"\">
                                    </a>
                                </div>
                                <div class=\"slide\" data-thumb=\"images/bann1.jpg\">
                                    <a href=\"#\">
                                        <img src=\"images/bann1.jpg\" alt=\"\">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"clear\"></div>
                <div class=\"col-md-6\">
                    <h3>Mot du Ministre</h3>
                    <p style=\"text-align: justify\">
                        Megatron is a Multipurpose HTML 5 Template with which responds to the most demanding customers.
                        It can be a great choice for your Corporate, Ecommerce, Portfolio, Creative Agency etc.
                        This theme can easily satisfy all of your needs. Use Megatron template to create any
                        interactive website you want. </p>

                </div>
                <div class=\"col-md-6\">
                    <div style=\"position: relative; \" >
                        <img data-animate=\"fadeInLeft\" src=\"images/me.jpg\" alt=\"Mac\" style=\"position: absolute; top: 0; left: 0;\" class=\"fadeInLeft animated\">
                    </div>
                </div>

                <div class=\"clear\"></div>

                <div class=\"col-md-3\">
                    <img class=\"image_fade\" src=\"images/magazine/thumb/1.jpg\" alt=\"Gallery Thumb 1\">
                </div>
                <div class=\"col-md-3\">
                    <img class=\"image_fade\" src=\"images/magazine/thumb/1.jpg\" alt=\"Gallery Thumb 1\">
                </div>
                <div class=\"col-md-3\"> <img class=\"image_fade\" src=\"images/magazine/thumb/1.jpg\" alt=\"Gallery Thumb 1\"></div>
                <div class=\"col-md-3\"> <img class=\"image_fade\" src=\"images/magazine/thumb/1.jpg\" alt=\"Gallery Thumb 1\"></div>

                <div class=\"clear\"></div>

                <div class=\"fancy-title title-border\">
                    <h3>Nos réalisations</h3>
                </div>

                <div class=\"col_full masonry-thumbs col-6 bottommargin-lg clearfix\" data-big=\"5\" data-lightbox=\"gallery\">
                    <a href=\"images/magazine/1.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/1.jpg\" alt=\"Gallery Thumb 1\"></a>
                    <a href=\"images/magazine/2.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/2.jpg\" alt=\"Gallery Thumb 2\"></a>
                    <a href=\"images/magazine/3.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/3.jpg\" alt=\"Gallery Thumb 3\"></a>
                    <a href=\"images/magazine/4.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/4.jpg\" alt=\"Gallery Thumb 4\"></a>
                    <a href=\"images/magazine/5.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/5.jpg\" alt=\"Gallery Thumb 5\"></a>
                    <a href=\"images/magazine/6.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/6.jpg\" alt=\"Gallery Thumb 6\"></a>
                    <a href=\"images/magazine/7.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/7.jpg\" alt=\"Gallery Thumb 7\"></a>
                    <a href=\"images/magazine/8.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/8.jpg\" alt=\"Gallery Thumb 8\"></a>
                    <a href=\"images/magazine/9.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/9.jpg\" alt=\"Gallery Thumb 9\"></a>
                    <a href=\"images/magazine/10.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/10.jpg\" alt=\"Gallery Thumb 10\"></a>
                    <a href=\"images/magazine/11.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/11.jpg\" alt=\"Gallery Thumb 11\"></a>
                    <a href=\"images/magazine/12.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/12.jpg\" alt=\"Gallery Thumb 12\"></a>
                    <a href=\"images/magazine/13.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/13.jpg\" alt=\"Gallery Thumb 13\"></a>
                    <a href=\"images/magazine/14.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/14.jpg\" alt=\"Gallery Thumb 14\"></a>
                    <a href=\"images/magazine/15.jpg\" data-lightbox=\"gallery-item\"><img class=\"image_fade\" src=\"images/magazine/thumb/15.jpg\" alt=\"Gallery Thumb 15\"></a>
                </div>

                <div class=\"col_full nobottommargin clearfix\">

                    <div class=\"fancy-title title-border\">
                        <h3>Actualités</h3>
                    </div>

                    <div class=\"col_one_third\">
                        <div class=\"ipost clearfix\">
                            <div class=\"entry-image\">
                                <a href=\"#\"><img class=\"image_fade\" src=\"images/magazine/thumb/11.jpg\" alt=\"Image\"></a>
                            </div>
                            <div class=\"entry-title\">
                                <h3><a href=\"blog-single.html\">Yum, McDonald's apologize as new China food scandal brews</a></h3>
                            </div>
                            <ul class=\"entry-meta clearfix\">
                                <li><i class=\"icon-calendar3\"></i> 9th Sep 2014</li>
                                <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 23</a></li>
                            </ul>
                            <div class=\"entry-content\">
                                <p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col_one_third\">
                        <div class=\"ipost clearfix\">
                            <div class=\"entry-image\">
                                <a href=\"#\"><img class=\"image_fade\" src=\"images/magazine/thumb/16.jpg\" alt=\"Image\"></a>
                            </div>
                            <div class=\"entry-title\">
                                <h3><a href=\"blog-single.html\">Halliburton gets boost from rebound in North America drilling</a></h3>
                            </div>
                            <ul class=\"entry-meta clearfix\">
                                <li><i class=\"icon-calendar3\"></i> 23rd Aug 2014</li>
                                <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 33</a></li>
                            </ul>
                            <div class=\"entry-content\">
                                <p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col_one_third col_last\">
                        <div class=\"ipost clearfix\">
                            <div class=\"entry-image\">
                                <a href=\"#\"><img class=\"image_fade\" src=\"images/magazine/thumb/13.jpg\" alt=\"Image\"></a>
                            </div>
                            <div class=\"entry-title\">
                                <h3><a href=\"blog-single.html\">China sends spy ship off Hawaii during U.S.-led drills brews</a></h3>
                            </div>
                            <ul class=\"entry-meta clearfix\">
                                <li><i class=\"icon-calendar3\"></i> 11th Feb 2014</li>
                                <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 13</a></li>
                            </ul>
                            <div class=\"entry-content\">
                                <p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"clear\"></div>

                    <div class=\"col_one_third nobottommargin\">
                        <div class=\"ipost clearfix\">
                            <div class=\"entry-image\">
                                <a href=\"#\"><img class=\"image_fade\" src=\"images/magazine/thumb/10.jpg\" alt=\"Image\"></a>
                            </div>
                            <div class=\"entry-title\">
                                <h3><a href=\"blog-single.html\">Wobbly stocks underpin yen and Swiss franc; dollar subdued</a></h3>
                            </div>
                            <ul class=\"entry-meta clearfix\">
                                <li><i class=\"icon-calendar3\"></i> 17th Jan 2014</li>
                                <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 50</a></li>
                            </ul>
                            <div class=\"entry-content\">
                                <p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col_one_third nobottommargin\">
                        <div class=\"ipost clearfix\">
                            <div class=\"entry-image\">
                                <a href=\"#\"><img class=\"image_fade\" src=\"images/magazine/thumb/15.jpg\" alt=\"Image\"></a>
                            </div>
                            <div class=\"entry-title\">
                                <h3><a href=\"blog-single.html\">BlackBerry names ex-Sybase executive as chief operating officer</a></h3>
                            </div>
                            <ul class=\"entry-meta clearfix\">
                                <li><i class=\"icon-calendar3\"></i> 20th Nov 2014</li>
                                <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 13</a></li>
                            </ul>
                            <div class=\"entry-content\">
                                <p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col_one_third nobottommargin col_last\">
                        <div class=\"ipost clearfix\">
                            <div class=\"entry-image\">
                                <a href=\"#\"><img class=\"image_fade\" src=\"images/magazine/thumb/6.jpg\" alt=\"Image\"></a>
                            </div>
                            <div class=\"entry-title\">
                                <h3><a href=\"blog-single.html\">Georgian prime minister fires seven ministers in first reshuffle</a></h3>
                            </div>
                            <ul class=\"entry-meta clearfix\">
                                <li><i class=\"icon-calendar3\"></i> 10th Dec 2013</li>
                                <li><a href=\"blog-single.html#comments\"><i class=\"icon-comments\"></i> 13</a></li>
                            </ul>
                            <div class=\"entry-content\">
                                <p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
                            </div>
                        </div>
                    </div>

                    <div id=\"oc-clients\" class=\"section nobgcolor notopmargin owl-carousel owl-carousel-full image-carousel footer-stick carousel-widget\" data-margin=\"80\" data-loop=\"true\" data-nav=\"false\" data-autoplay=\"5000\" data-pagi=\"false\" data-items-xxs=\"2\" data-items-xs=\"3\" data-items-sm=\"4\" data-items-md=\"5\" data-items-lg=\"6\">

                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/ASAMlog.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/logoAsecna.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/ASAMlog.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/logoAsecna.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/ASAMlog.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/logoAsecna.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/ASAMlog.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/logoAsecna.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/ASAMlog.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/logoAsecna.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/ASAMlog.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/logoAsecna.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/ASAMlog.png\" alt=\"Clients\"></a></div>
                        <div class=\"oc-item\"><a href=\"#\"><img src=\"images/logoAsecna.png\" alt=\"Clients\"></a></div>


                    </div>

                </div>

            </div>

            <div class=\"col-md-4\">

                <div class=\"line hidden-lg hidden-md\"></div>

                <div class=\"sidebar-widgets-wrap clearfix\">

                    <div class=\"widget clearfix\">
                        <div class=\"col_one_third nobottommargin\">
                            <a href=\"#\" class=\"social-icon si-dark si-colored si-facebook nobottommargin\" style=\"margin-right: 10px;\">
                                <i class=\"icon-facebook\"></i>
                                <i class=\"icon-facebook\"></i>
                            </a>
                            <small style=\"display: block; margin-top: 3px;\"><strong><div class=\"counter counter-inherit\"><span data-from=\"1000\" data-to=\"58742\" data-refresh-interval=\"100\" data-speed=\"3000\" data-comma=\"true\"></span></div></strong>Likes</small>
                        </div>

                        <div class=\"col_one_third nobottommargin\">
                            <a href=\"#\" class=\"social-icon si-dark si-colored si-twitter nobottommargin\" style=\"margin-right: 10px;\">
                                <i class=\"icon-twitter\"></i>
                                <i class=\"icon-twitter\"></i>
                            </a>
                            <small style=\"display: block; margin-top: 3px;\"><strong><div class=\"counter counter-inherit\"><span data-from=\"500\" data-to=\"9654\" data-refresh-interval=\"50\" data-speed=\"2500\" data-comma=\"true\"></span></div></strong>Followers</small>
                        </div>

                        <div class=\"col_one_third nobottommargin col_last\">
                            <a href=\"#\" class=\"social-icon si-dark si-colored si-rss nobottommargin\" style=\"margin-right: 10px;\">
                                <i class=\"icon-rss\"></i>
                                <i class=\"icon-rss\"></i>
                            </a>
                            <small style=\"display: block; margin-top: 3px;\"><strong><div class=\"counter counter-inherit\"><span data-from=\"200\" data-to=\"15475\" data-refresh-interval=\"150\" data-speed=\"3500\" data-comma=\"true\"></span></div></strong>Readers</small>
                        </div>
                    </div>

                    <div class=\"widget clearfix\">
                        <img class=\"aligncenter\" src=\"images/magazine/ad.png\" alt=\"\">
                    </div>

                    <div class=\"widget widget_links clearfix\">

                        <h4>Categories</h4>
                        <div class=\"col_half nobottommargin\">
                            <ul>
                                <li><a href=\"#\">World</a></li>
                                <li><a href=\"#\">Technology</a></li>
                                <li><a href=\"#\">Entertainment</a></li>
                                <li><a href=\"#\">Sports</a></li>
                                <li><a href=\"#\">Media</a></li>
                                <li><a href=\"#\">Politics</a></li>
                                <li><a href=\"#\">Business</a></li>
                            </ul>
                        </div>
                        <div class=\"col_half nobottommargin col_last\">
                            <ul>
                                <li><a href=\"#\">Lifestyle</a></li>
                                <li><a href=\"#\">Travel</a></li>
                                <li><a href=\"#\">Cricket</a></li>
                                <li><a href=\"#\">Football</a></li>
                                <li><a href=\"#\">Education</a></li>
                                <li><a href=\"#\">Photography</a></li>
                                <li><a href=\"#\">Nature</a></li>
                            </ul>
                        </div>

                    </div>


                    <div class=\"widget clearfix\">
                        <iframe src=\"http://player.vimeo.com/video/100299651\" width=\"500\" height=\"264\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>

                    <div class=\"widget clearfix\">
                        <img class=\"aligncenter\" src=\"images/magazine/ad.png\" alt=\"\">
                    </div>

                    <div class=\"widget clearfix\">
                        <iframe src=\"//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FEnvato&amp;width=350&amp;height=240&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=499481203443583\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden; width:350px; height:240px; max-width: 100% !important;\" allowTransparency=\"true\"></iframe>
                    </div>

                </div>

            </div>

        </div>

    </div>
{% endblock %}", "KemaMainBundle::index.html.twig", "/opt/lampp/htdocs/ministere/src/Kema/MainBundle/Resources/views/index.html.twig");
    }
}
