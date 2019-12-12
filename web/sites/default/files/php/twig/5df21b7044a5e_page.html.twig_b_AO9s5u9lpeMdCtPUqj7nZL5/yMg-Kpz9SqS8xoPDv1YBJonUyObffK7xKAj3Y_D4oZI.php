<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/mtheme/templates/page.html.twig */
class __TwigTemplate_f8ca4886fffa11cf792a85aa81691ba0f7bf69ee7e60d448606fc36ae15ae393 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3];
        $filters = ["escape" => 4, "t" => 48];
        $functions = ["path" => 48];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"toTop\"><i class=\"fa fa-chevron-circle-up\"></i></div>
<header class=\"headers-wrapper\">
  ";
        // line 3
        if (($this->getAttribute(($context["page"] ?? null), "header_top_left", []) || $this->getAttribute(($context["page"] ?? null), "header_top_right", []))) {
            // line 4
            echo "    <div id=\"header-top\" role=\"banner\" class=\"clearfix colored-area ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colored_area_class"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"container\">
        ";
            // line 7
            echo "        <div id=\"header-top-inside\" class=\"clearfix\">
          <div class=\"row\">
            ";
            // line 9
            if ($this->getAttribute(($context["page"] ?? null), "header_top_left", [])) {
                // line 10
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_inside_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 12
                echo "                <div id=\"header-top-left\" class=\"clearfix\">
                  <div class=\"header-top-area\">

                    ";
                // line 15
                if ($this->getAttribute(($context["page"] ?? null), "header_top_left", [])) {
                    // line 16
                    echo "                      ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_left", [])), "html", null, true);
                    echo "
                    ";
                }
                // line 18
                echo "
                  </div>
                </div>
                ";
                // line 22
                echo "              </div>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "header_top_right", [])) {
                // line 25
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_inside_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 27
                echo "                <div id=\"header-top-right\" class=\"clearfix\">
                  <div class=\"header-top-area\">
                    ";
                // line 29
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_right", [])), "html", null, true);
                echo "
                  </div>
                </div>
                ";
                // line 33
                echo "              </div>
            ";
            }
            // line 35
            echo "          </div>
        </div>
        ";
            // line 38
            echo "      </div>
    </div>
  ";
        }
        // line 41
        echo "  ";
        // line 42
        echo "
  ";
        // line 44
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "header", []))) {
            // line 45
            echo "    <div id=\"header\" class=\"colored-area ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colored_area_class"] ?? null)), "html", null, true);
            echo "\">
      ";
            // line 46
            if (($context["mt_site_name"] ?? null)) {
                // line 47
                echo "        <div class=\"site-name site-name__header\">
          <a href=\"";
                // line 48
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_site_name"] ?? null)), "html", null, true);
                echo "</a>
        </div>
      ";
            }
            // line 51
            echo "      <div class=\"container\">
        ";
            // line 53
            echo "        <div id=\"header-inside\" class=\"clearfix\">
          <div class=\"row\">
            <div class=\"header-area\">
              <div class=\"";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_inside_left_grid_class"] ?? null)), "html", null, true);
            echo "\">
                ";
            // line 58
            echo "                <div id=\"header-inside-left\" class=\"clearfix\">
                  ";
            // line 60
            echo "                  <div id=\"main-navigation\" class=\"clearfix\">
                    <nav role=\"navigation\">
                      ";
            // line 62
            if ($this->getAttribute(($context["page"] ?? null), "navigation", [])) {
                // line 63
                echo "                        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
                echo "
                      ";
            }
            // line 65
            echo "                    </nav>
                  </div>
                  ";
            // line 68
            echo "                </div>
                ";
            // line 70
            echo "              </div>
              ";
            // line 71
            if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
                // line 72
                echo "                <div class=\"col-md-4\">
                  ";
                // line 74
                echo "                  <div id=\"header-inside-right\" class=\"clearfix\">
                    ";
                // line 75
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                echo "
                  </div>
                  ";
                // line 78
                echo "                </div>
              ";
            }
            // line 80
            echo "            </div>
          </div>
        </div>
        ";
            // line 84
            echo "      </div>
    </div>
  ";
        }
        // line 87
        echo "  ";
        // line 88
        echo "</header>

";
        // line 91
        echo "<div id=\"page\" class=\"clearfix\">
  <div class=\"container\">
    ";
        // line 94
        echo "    <div id=\"page-inside\">

      ";
        // line 96
        if ($this->getAttribute(($context["page"] ?? null), "top_content", [])) {
            // line 97
            echo "        ";
            // line 98
            echo "        <div id=\"top-content\">
          ";
            // line 100
            echo "          <div id=\"top-content-inside\" class=\"clearfix\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
            // line 103
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_content", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
          ";
            // line 108
            echo "        </div>
        ";
            // line 110
            echo "      ";
        }
        // line 111
        echo "
      ";
        // line 113
        echo "      <div id=\"main-content\">
        <div class=\"row\">
          ";
        // line 115
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 116
            echo "            <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 118
            echo "              <section id=\"sidebar-first\" class=\"sidebar clearfix\">
                ";
            // line 119
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
              </section>
              ";
            // line 122
            echo "            </aside>
          ";
        }
        // line 124
        echo "
          <section class=\"";
        // line 125
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null)), "html", null, true);
        echo "\">

            ";
        // line 127
        if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
            // line 128
            echo "              ";
            // line 129
            echo "              <div id=\"banner\">
                ";
            // line 131
            echo "                <div id=\"banner-inside\" class=\"clearfix\">
                  ";
            // line 132
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
            echo "
                </div>
                ";
            // line 135
            echo "              </div>
              ";
            // line 137
            echo "            ";
        }
        // line 138
        echo "
            ";
        // line 139
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 140
            echo "              <div id=\"highlighted\">
                <div id=\"highlighted-inside\" class=\"clearfix\">
                  ";
            // line 142
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
                </div>
              </div>
            ";
        }
        // line 146
        echo "
            ";
        // line 147
        if ($this->getAttribute(($context["page"] ?? null), "promoted", [])) {
            // line 148
            echo "              ";
            // line 149
            echo "              <div id=\"promoted\" class=\"clearfix\">
                ";
            // line 151
            echo "                <div id=\"promoted-inside\" class=\"clearfix\">
                  ";
            // line 152
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "promoted", [])), "html", null, true);
            echo "
                </div>
                ";
            // line 155
            echo "              </div>
              ";
            // line 157
            echo "            ";
        }
        // line 158
        echo "
            ";
        // line 160
        echo "            <div id=\"main\" class=\"clearfix\">

              ";
        // line 162
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 163
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
              ";
        }
        // line 165
        echo "
            </div>
            ";
        // line 168
        echo "          </section>

          ";
        // line 170
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 171
            echo "          <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null)), "html", null, true);
            echo "\">
            ";
            // line 173
            echo "            <section id=\"sidebar-second\" class=\"sidebar clearfix\">
              ";
            // line 174
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </section>
            ";
            // line 177
            echo "          </aside>
          ";
        }
        // line 179
        echo "
        </div>

      </div>
      ";
        // line 184
        echo "
    </div>
    ";
        // line 187
        echo "
  </div>

</div>
";
        // line 192
        echo "

";
        // line 194
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 195
            echo "  ";
            // line 196
            echo "  <footer id=\"footer\" class=\"clearfix\">
    <div class=\"container\">

      <div class=\"row\">
        ";
            // line 200
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 201
                echo "          <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_grid_class"] ?? null)), "html", null, true);
                echo "\">
            <div class=\"footer-area\">
              ";
                // line 203
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 207
            echo "
        ";
            // line 208
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 209
                echo "          <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_grid_class"] ?? null)), "html", null, true);
                echo "\">
            <div class=\"footer-area\">
              ";
                // line 211
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 215
            echo "
        ";
            // line 216
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 217
                echo "          <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_grid_class"] ?? null)), "html", null, true);
                echo "\">
            <div class=\"footer-area\">
              ";
                // line 219
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 223
            echo "
        ";
            // line 224
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 225
                echo "          <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_grid_class"] ?? null)), "html", null, true);
                echo "\">
            <div class=\"footer-area\">
              ";
                // line 227
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 231
            echo "      </div>

    </div>
  </footer>
  ";
        }
        // line 237
        echo "
";
        // line 238
        if (($this->getAttribute(($context["page"] ?? null), "sub_footer_left", []) || $this->getAttribute(($context["page"] ?? null), "footer", []))) {
            // line 239
            echo "  ";
            // line 240
            echo "  <div id=\"subfooter\" class=\"clearfix\">
    <div class=\"container\">
      ";
            // line 243
            echo "      <div id=\"subfooter-inside\" class=\"clearfix\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            ";
            // line 247
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_left", [])) {
                // line 248
                echo "              <div class=\"subfooter-area left\">
                ";
                // line 249
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_footer_left", [])), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 252
            echo "            ";
            // line 253
            echo "          </div>
          <div class=\"col-md-8\">
            ";
            // line 256
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
                // line 257
                echo "              <div class=\"subfooter-area right\">
                ";
                // line 258
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 261
            echo "            ";
            // line 262
            echo "          </div>
        </div>
      </div>
      ";
            // line 266
            echo "    </div>
  </div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/mtheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 266,  553 => 262,  551 => 261,  545 => 258,  542 => 257,  539 => 256,  535 => 253,  533 => 252,  527 => 249,  524 => 248,  521 => 247,  516 => 243,  512 => 240,  510 => 239,  508 => 238,  505 => 237,  498 => 231,  491 => 227,  485 => 225,  483 => 224,  480 => 223,  473 => 219,  467 => 217,  465 => 216,  462 => 215,  455 => 211,  449 => 209,  447 => 208,  444 => 207,  437 => 203,  431 => 201,  429 => 200,  423 => 196,  421 => 195,  419 => 194,  415 => 192,  409 => 187,  405 => 184,  399 => 179,  395 => 177,  390 => 174,  387 => 173,  382 => 171,  380 => 170,  376 => 168,  372 => 165,  366 => 163,  364 => 162,  360 => 160,  357 => 158,  354 => 157,  351 => 155,  346 => 152,  343 => 151,  340 => 149,  338 => 148,  336 => 147,  333 => 146,  326 => 142,  322 => 140,  320 => 139,  317 => 138,  314 => 137,  311 => 135,  306 => 132,  303 => 131,  300 => 129,  298 => 128,  296 => 127,  291 => 125,  288 => 124,  284 => 122,  279 => 119,  276 => 118,  271 => 116,  269 => 115,  265 => 113,  262 => 111,  259 => 110,  256 => 108,  249 => 103,  244 => 100,  241 => 98,  239 => 97,  237 => 96,  233 => 94,  229 => 91,  225 => 88,  223 => 87,  218 => 84,  213 => 80,  209 => 78,  204 => 75,  201 => 74,  198 => 72,  196 => 71,  193 => 70,  190 => 68,  186 => 65,  180 => 63,  178 => 62,  174 => 60,  171 => 58,  167 => 56,  162 => 53,  159 => 51,  149 => 48,  146 => 47,  144 => 46,  139 => 45,  136 => 44,  133 => 42,  131 => 41,  126 => 38,  122 => 35,  118 => 33,  112 => 29,  108 => 27,  103 => 25,  100 => 24,  96 => 22,  91 => 18,  85 => 16,  83 => 15,  78 => 12,  73 => 10,  71 => 9,  67 => 7,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/mtheme/templates/page.html.twig", "/var/www/html/web/themes/custom/mtheme/templates/page.html.twig");
    }
}
