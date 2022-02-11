<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/DrupalORG/great_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_273a859369aecc2313ac6fd95fc1950270f7ca41c2fd821ec96187e9060209a9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "
<!-- Start: Top Bar -->

<div class=\"container page-wrapper\">

  <div class=\"top-nav\">
    <div class=\"container-\">
      <div class=\"row\">

        <div class=\"col-md-6\">

          ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "message", [], "any", false, false, true, 71)) {
            // line 72
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "message", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 74
        echo "
        </div>
        
        ";
        // line 77
        if (($context["show_social_icon"] ?? null)) {
            // line 78
            echo "          <div class=\"col-md-6\">
            <p class=\"social-media\">
              ";
            // line 80
            if (($context["facebook_url"] ?? null)) {
                // line 81
                echo "                <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 81, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
              ";
            }
            // line 83
            echo "              ";
            if (($context["google_plus_url"] ?? null)) {
                // line 84
                echo "                <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 84, $this->source), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
              ";
            }
            // line 86
            echo "              ";
            if (($context["twitter_url"] ?? null)) {
                // line 87
                echo "                <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 87, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
              ";
            }
            // line 89
            echo "              ";
            if (($context["linkedin_url"] ?? null)) {
                // line 90
                echo "                <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 90, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
              ";
            }
            // line 92
            echo "              ";
            if (($context["pinterest_url"] ?? null)) {
                // line 93
                echo "                <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 93, $this->source), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
              ";
            }
            // line 95
            echo "              ";
            if (($context["rss_url"] ?? null)) {
                // line 96
                echo "                <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 96, $this->source), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
              ";
            }
            // line 98
            echo "            </p>
          </div>
        ";
        }
        // line 101
        echo "       
      </div>
    </div>
  </div>

  <!-- End: Top Bar -->


  <!-- Start: Header -->

  <div class=\"header\">
    <div class=\"container-\">
      <div class=\"row\">

        <div class=\"navbar-header col-md-3\">
          
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <i class=\"fas fa-bars\"></i>
          </button>

          ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 121)) {
            // line 122
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 124
        echo "
        </div>

        ";
        // line 127
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 127) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 127))) {
            // line 128
            echo "          <div class=\"col-md-9\">

            ";
            // line 130
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "quicklink", [], "any", false, false, true, 130)) {
                // line 131
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "quicklink", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 133
            echo "
            ";
            // line 134
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 134)) {
                // line 135
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 137
            echo "            
          </div>
        ";
        }
        // line 140
        echo "
      </div>
    </div>
  </div>

  <!-- End: Header -->


  <!-- Start: Slides -->

  ";
        // line 150
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 151
            echo "    
    <div class=\"container-\">
      <div class=\"flexslider\">
        <ul class=\"slides\">
          ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 156
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 156, $this->source));
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "        </ul>
      </div>
    </div>

  ";
        }
        // line 163
        echo "
  <!-- End: Slides -->


  <!-- Start: Clients -->

  ";
        // line 169
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 169)) {
            echo " 

    <div class=\"clients\" id=\"clients\">

      ";
            // line 173
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 173)) {
                // line 174
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 175
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 178
            echo "
      <div class=\"container\">
        ";
            // line 180
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
            echo "
      </div>

    </div>

  ";
        }
        // line 186
        echo "
  <!--End: Clients -->


  <!--Start: Top message -->

  ";
        // line 192
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 192)) {
            // line 193
            echo "
    <div class=\"top-message\">
      <div class=\"container\">
        ";
            // line 196
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
            echo "
      </div>
    </div>

  ";
        }
        // line 201
        echo "
  <!--End: Top message -->


  <!-- Start: Top widget -->

  ";
        // line 207
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 207) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 207)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 207))) {
            // line 208
            echo "    
    <div class=\"topwidget\" id=\"topwidget\">
      <div class=\"container\">

        ";
            // line 212
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 212)) {
                // line 213
                echo "          <div class=\"custom-block-title\">
            ";
                // line 214
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 217
            echo "
        <div class=\"row topwidget-list clearfix\">
        
          ";
            // line 220
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 220)) {
                // line 221
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 221, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 223
            echo "         
          ";
            // line 224
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 224)) {
                // line 225
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 225, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 225), 225, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 227
            echo "                 
          ";
            // line 228
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 228)) {
                // line 229
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 229, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 229), 229, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 231
            echo "
        </div>

      </div>
    </div>

  ";
        }
        // line 238
        echo "
  <!--End: Top widget -->

      
  <!--Start: Highlighted -->

  ";
        // line 244
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 244)) {
            // line 245
            echo "
    <div class=\"highlighted\">
      <div class=\"container\">
        ";
            // line 248
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 248), 248, $this->source), "html", null, true);
            echo "
      </div>
    </div>

  ";
        }
        // line 253
        echo "
  <!--End: Highlighted -->


  <!--Start: Title -->

  ";
        // line 259
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 259) &&  !($context["is_front"] ?? null))) {
            // line 260
            echo "
    <div id=\"page-title\">
      <div id=\"page-title-inner\">
        <div class=\"container\">
          ";
            // line 264
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 264), 264, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>

  ";
        }
        // line 270
        echo "
  <!--End: Title -->


  <div class=\"main-content\">
    <div class=\"container\">
      <div class=\"\">

        <!--Start: Breadcrumb -->

        ";
        // line 280
        if ( !($context["is_front"] ?? null)) {
            // line 281
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">";
            // line 282
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 282), 282, $this->source), "html", null, true);
            echo "</div>
          </div>
        ";
        }
        // line 285
        echo "
        <!--End: Breadcrumb -->

        <div class=\"row layout\">

          <!--- Start: Left sidebar -->
          ";
        // line 291
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 291)) {
            // line 292
            echo "            <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 292, $this->source), "html", null, true);
            echo ">
              <div class=\"sidebar\">
                ";
            // line 294
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 294), 294, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          ";
        }
        // line 298
        echo "          <!-- End Left sidebar -->

          <!--- Start Content -->
          ";
        // line 301
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 301)) {
            // line 302
            echo "            <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 302, $this->source), "html", null, true);
            echo ">
              <div class=\"content_layout\">
                ";
            // line 304
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 304), 304, $this->source), "html", null, true);
            echo "
              </div>              
            </div>
          ";
        }
        // line 308
        echo "          <!-- End: Content -->

          <!-- Start: Right sidebar -->
          ";
        // line 311
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 311)) {
            // line 312
            echo "            <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 312, $this->source), "html", null, true);
            echo ">
              <div class=\"sidebar\">
                ";
            // line 314
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 314), 314, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          ";
        }
        // line 318
        echo "          <!-- End: Right sidebar -->
          
        </div>
      
      </div>
    </div>
  </div>

  <!-- End: Main content -->


  <!-- Start: Features -->

  ";
        // line 331
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 331) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 331)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 331))) {
            // line 332
            echo "
    <div class=\"features\">
      <div class=\"container\">

        ";
            // line 336
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 336)) {
                // line 337
                echo "          <div class=\"custom-block-title\" >
            ";
                // line 338
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 338), 338, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 341
            echo "
        <div class=\"row features-list\">

          ";
            // line 344
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 344)) {
                // line 345
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 345, $this->source), "html", null, true);
                echo ">
              ";
                // line 346
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 346), 346, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 349
            echo "
          ";
            // line 350
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 350)) {
                // line 351
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 351, $this->source), "html", null, true);
                echo ">
              ";
                // line 352
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 352), 352, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 355
            echo "
          ";
            // line 356
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 356)) {
                // line 357
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 357, $this->source), "html", null, true);
                echo ">
              ";
                // line 358
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 358), 358, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 361
            echo "
        </div>

      </div>
    </div>

  ";
        }
        // line 368
        echo "
  <!--End: Features -->


  <!--Start: FAQ -->

  ";
        // line 374
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "faq", [], "any", false, false, true, 374)) {
            // line 375
            echo "
    <div class=\"faq\" id=\"faq\">
      <div class=\"container\">
        ";
            // line 378
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "faq", [], "any", false, false, true, 378), 378, $this->source), "html", null, true);
            echo "
      </div>
    </div>

  ";
        }
        // line 383
        echo "
  <!--End: FAQ -->


  <!-- Start: Updates widgets -->

  ";
        // line 389
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 389) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 389)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 389))) {
            // line 390
            echo "
    <div class=\"updates\" id=\"updates\">    
      <div class=\"container\">

        ";
            // line 394
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 394)) {
                // line 395
                echo "          <div class=\"custom-block-title\" >
            ";
                // line 396
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 396), 396, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 399
            echo "
        <div class=\"row updates-list\">
          
          ";
            // line 402
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 402)) {
                // line 403
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 403, $this->source), "html", null, true);
                echo ">
              ";
                // line 404
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 404), 404, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 407
            echo "
          ";
            // line 408
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 408)) {
                // line 409
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 409, $this->source), "html", null, true);
                echo ">
              ";
                // line 410
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 410), 410, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 413
            echo "          
          ";
            // line 414
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 414)) {
                // line 415
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 415, $this->source), "html", null, true);
                echo ">
              ";
                // line 416
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 416), 416, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 419
            echo "           
          ";
            // line 420
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 420)) {
                // line 421
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 421, $this->source), "html", null, true);
                echo ">
              ";
                // line 422
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 422), 422, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 425
            echo "
        </div>
      </div>
    </div>

  ";
        }
        // line 431
        echo "
  <!--End: Updates widgets -->


  <!-- Start: Middle widgets -->

  ";
        // line 437
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 437) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 437)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 437)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 437))) {
            // line 438
            echo "
    <div class=\"midwidget\" id=\"midwidget\">    
      <div class=\"container\">

        ";
            // line 442
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 442)) {
                // line 443
                echo "          <div class=\"custom-block-title\" >
            ";
                // line 444
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_title", [], "any", false, false, true, 444), 444, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 447
            echo "
        <div class=\"row midwidget-list\">
           
          ";
            // line 450
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 450)) {
                // line 451
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 451, $this->source), "html", null, true);
                echo ">
              ";
                // line 452
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_first", [], "any", false, false, true, 452), 452, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 455
            echo "
          ";
            // line 456
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 456)) {
                // line 457
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 457, $this->source), "html", null, true);
                echo ">
              ";
                // line 458
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_second", [], "any", false, false, true, 458), 458, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 461
            echo "          
          ";
            // line 462
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 462)) {
                // line 463
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 463, $this->source), "html", null, true);
                echo ">
              ";
                // line 464
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_third", [], "any", false, false, true, 464), 464, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 467
            echo "
          ";
            // line 468
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 468)) {
                // line 469
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null), 469, $this->source), "html", null, true);
                echo ">
              ";
                // line 470
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "midwidget_forth", [], "any", false, false, true, 470), 470, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 473
            echo "
        </div>

      </div>
    </div>

  ";
        }
        // line 480
        echo "
  <!--End: Middle widgets -->


  <!-- Start: Bottom widgets -->

  ";
        // line 486
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 486) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 486)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 486)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 486))) {
            // line 487
            echo "
    <div class=\"btmwidget\" id=\"btmwidget\">    
      <div class=\"container\">

        ";
            // line 491
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 491)) {
                // line 492
                echo "          <div class=\"custom-block-title\" >
            ";
                // line 493
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 493), 493, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 496
            echo "
        <div class=\"row btmwidget-list\">
          
          ";
            // line 499
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 499)) {
                // line 500
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 500, $this->source), "html", null, true);
                echo ">
              ";
                // line 501
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 501), 501, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 504
            echo "
          ";
            // line 505
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 505)) {
                // line 506
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 506, $this->source), "html", null, true);
                echo ">
              ";
                // line 507
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 507), 507, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 510
            echo "          
          ";
            // line 511
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 511)) {
                // line 512
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 512, $this->source), "html", null, true);
                echo ">
              ";
                // line 513
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 513), 513, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 516
            echo "
          ";
            // line 517
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 517)) {
                // line 518
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 518, $this->source), "html", null, true);
                echo ">
              ";
                // line 519
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 519), 519, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 522
            echo "
        </div>
      </div>
    </div>

  ";
        }
        // line 528
        echo "
  <!--End: Bottom widgets -->


  <!-- Start: Footer widgets -->

  ";
        // line 534
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 534) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 534)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 534))) {
            // line 535
            echo "
    <div class=\"footer\" id=\"footer\">
      <div class=\"container\">

        ";
            // line 539
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 539)) {
                // line 540
                echo "          <div class=\"custom-block-title\" >
            ";
                // line 541
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 541), 541, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 544
            echo "
        <div class=\"row footer-list\">

          ";
            // line 547
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 547)) {
                // line 548
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 548, $this->source), "html", null, true);
                echo ">
              ";
                // line 549
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 549), 549, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 552
            echo "
          ";
            // line 553
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 553)) {
                // line 554
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 554, $this->source), "html", null, true);
                echo ">
              ";
                // line 555
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 555), 555, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 558
            echo "
          ";
            // line 559
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 559)) {
                // line 560
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 560, $this->source), "html", null, true);
                echo ">
              ";
                // line 561
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 561), 561, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 564
            echo "
        </div>
      </div>
    </div>

  ";
        }
        // line 570
        echo "
  <!--End: Footer widgets -->


  <!-- Start: Copyright -->

  <div class=\"copyright\">
    <div class=\"container\">

      <span>Copyright © ";
        // line 579
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
      ";
        // line 580
        if (($context["show_credit_link"] ?? null)) {
            // line 581
            echo "        <span class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 583
        echo "
    </div>
  </div>

</div>

<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/DrupalORG/great_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1033 => 583,  1029 => 581,  1027 => 580,  1023 => 579,  1012 => 570,  1004 => 564,  998 => 561,  993 => 560,  991 => 559,  988 => 558,  982 => 555,  977 => 554,  975 => 553,  972 => 552,  966 => 549,  961 => 548,  959 => 547,  954 => 544,  948 => 541,  945 => 540,  943 => 539,  937 => 535,  935 => 534,  927 => 528,  919 => 522,  913 => 519,  908 => 518,  906 => 517,  903 => 516,  897 => 513,  892 => 512,  890 => 511,  887 => 510,  881 => 507,  876 => 506,  874 => 505,  871 => 504,  865 => 501,  860 => 500,  858 => 499,  853 => 496,  847 => 493,  844 => 492,  842 => 491,  836 => 487,  834 => 486,  826 => 480,  817 => 473,  811 => 470,  806 => 469,  804 => 468,  801 => 467,  795 => 464,  790 => 463,  788 => 462,  785 => 461,  779 => 458,  774 => 457,  772 => 456,  769 => 455,  763 => 452,  758 => 451,  756 => 450,  751 => 447,  745 => 444,  742 => 443,  740 => 442,  734 => 438,  732 => 437,  724 => 431,  716 => 425,  710 => 422,  705 => 421,  703 => 420,  700 => 419,  694 => 416,  689 => 415,  687 => 414,  684 => 413,  678 => 410,  673 => 409,  671 => 408,  668 => 407,  662 => 404,  657 => 403,  655 => 402,  650 => 399,  644 => 396,  641 => 395,  639 => 394,  633 => 390,  631 => 389,  623 => 383,  615 => 378,  610 => 375,  608 => 374,  600 => 368,  591 => 361,  585 => 358,  580 => 357,  578 => 356,  575 => 355,  569 => 352,  564 => 351,  562 => 350,  559 => 349,  553 => 346,  548 => 345,  546 => 344,  541 => 341,  535 => 338,  532 => 337,  530 => 336,  524 => 332,  522 => 331,  507 => 318,  500 => 314,  494 => 312,  492 => 311,  487 => 308,  480 => 304,  474 => 302,  472 => 301,  467 => 298,  460 => 294,  454 => 292,  452 => 291,  444 => 285,  438 => 282,  435 => 281,  433 => 280,  421 => 270,  412 => 264,  406 => 260,  404 => 259,  396 => 253,  388 => 248,  383 => 245,  381 => 244,  373 => 238,  364 => 231,  356 => 229,  354 => 228,  351 => 227,  343 => 225,  341 => 224,  338 => 223,  330 => 221,  328 => 220,  323 => 217,  317 => 214,  314 => 213,  312 => 212,  306 => 208,  304 => 207,  296 => 201,  288 => 196,  283 => 193,  281 => 192,  273 => 186,  264 => 180,  260 => 178,  254 => 175,  251 => 174,  249 => 173,  242 => 169,  234 => 163,  227 => 158,  218 => 156,  214 => 155,  208 => 151,  206 => 150,  194 => 140,  189 => 137,  183 => 135,  181 => 134,  178 => 133,  172 => 131,  170 => 130,  166 => 128,  164 => 127,  159 => 124,  153 => 122,  151 => 121,  129 => 101,  124 => 98,  118 => 96,  115 => 95,  109 => 93,  106 => 92,  100 => 90,  97 => 89,  91 => 87,  88 => 86,  82 => 84,  79 => 83,  73 => 81,  71 => 80,  67 => 78,  65 => 77,  60 => 74,  54 => 72,  52 => 71,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/DrupalORG/great_zymphonies_theme/templates/layout/page.html.twig", "/var/www/cartagena-abierta/web/themes/DrupalORG/great_zymphonies_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71, "for" => 155);
        static $filters = array("escape" => 72, "raw" => 156, "date" => 579);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
