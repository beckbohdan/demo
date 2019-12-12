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

/* modules/contrib/radix_layouts/plugins/layouts/radix_moscone/radix-moscone.html.twig */
class __TwigTemplate_292d99da615ccf346da7932ce8b7acf1a4d9bf8d14d554e52f0f7725a2fb7696 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 13, "if" => 19];
        $filters = ["merge" => 20, "escape" => 26];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'escape'],
                []
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
        // line 13
        $context["container_classes"] = [0 => "panel-display", 1 => "moscone", 2 => "clearfix"];
        // line 19
        if (($context["classes"] ?? null)) {
            // line 20
            echo "    ";
            $context["container_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["container_classes"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)));
        }
        // line 22
        if (($context["class"] ?? null)) {
            // line 23
            echo "    ";
            $context["container_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["container_classes"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["class"] ?? null)));
        }
        // line 25
        echo "
<div ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["container_classes"] ?? null)], "method")), "html", null, true);
        if (($context["css_id"] ?? null)) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["css_id"] ?? null)), "html", null, true);
        }
        echo ">

  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-12 radix-layouts-header panel-panel\">
        <div ";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "header", []), "addClass", [0 => "panel-panel-inner"], "method")), "html", null, true);
        echo ">
          ";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "header", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
    
    <div class=\"row\">
      <div class=\"col-md-4 radix-layouts-sidebar panel-panel\">
        <div ";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "sidebar", []), "addClass", [0 => "panel-panel-inner"], "method")), "html", null, true);
        echo ">
          ";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "sidebar", [])), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"col-md-8 radix-layouts-content panel-panel\">
        <div ";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "contentmain", []), "addClass", [0 => "panel-panel-inner"], "method")), "html", null, true);
        echo ">
          ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "contentmain", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
    
    <div class=\"row\">
      <div class=\"col-md-12 radix-layouts-footer panel-panel\">
        <div ";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "footer", []), "addClass", [0 => "panel-panel-inner"], "method")), "html", null, true);
        echo ">
          ";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "footer", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>
 
</div><!-- /.moscone -->
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/radix_layouts/plugins/layouts/radix_moscone/radix-moscone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 53,  122 => 52,  112 => 45,  108 => 44,  101 => 40,  97 => 39,  87 => 32,  83 => 31,  72 => 26,  69 => 25,  65 => 23,  63 => 22,  59 => 20,  57 => 19,  55 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/radix_layouts/plugins/layouts/radix_moscone/radix-moscone.html.twig", "/var/www/html/web/modules/contrib/radix_layouts/plugins/layouts/radix_moscone/radix-moscone.html.twig");
    }
}
