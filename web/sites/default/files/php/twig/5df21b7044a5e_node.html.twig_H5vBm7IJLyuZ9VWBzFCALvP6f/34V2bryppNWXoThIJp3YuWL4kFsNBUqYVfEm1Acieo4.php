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

/* themes/custom/mtheme/templates/node.html.twig */
class __TwigTemplate_a8a36f91b1369af33a11cf1a53c78e93c441ccc1b949152df7c82b212c26dc4f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'node_side' => [$this, 'block_node_side'],
            'above_header' => [$this, 'block_above_header'],
            'title_area' => [$this, 'block_title_area'],
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "block" => 14, "if" => 22, "trans" => 36];
        $filters = ["clean_class" => 4, "escape" => 12, "without" => 46];
        $functions = ["attach_library" => 12];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'trans'],
                ['clean_class', 'escape', 'without'],
                ['attach_library']
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
        // line 2
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 4
($context["node"] ?? null), "bundle", [])))), 2 => (($this->getAttribute(        // line 5
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 6
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 7
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 8
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 6 => "clearfix"];
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true);
        echo "
<article";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 14
        $this->displayBlock('node_side', $context, $blocks);
        // line 16
        echo "  <div class=\"node-content\">
    ";
        // line 17
        $this->displayBlock('above_header', $context, $blocks);
        // line 19
        echo "    <header>
      ";
        // line 20
        $this->displayBlock('title_area', $context, $blocks);
        // line 29
        echo "      ";
        $this->displayBlock('meta_area', $context, $blocks);
        // line 43
        echo "    </header>
    <div";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method")), "html", null, true);
        echo ">
      ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "links", [])), "html", null, true);
        echo "
    </div>
  </div>
</article>";
    }

    // line 14
    public function block_node_side($context, array $blocks = [])
    {
        // line 15
        echo "  ";
    }

    // line 17
    public function block_above_header($context, array $blocks = [])
    {
        // line 18
        echo "    ";
    }

    // line 20
    public function block_title_area($context, array $blocks = [])
    {
        // line 21
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
        ";
        // line 22
        if ( !($context["page"] ?? null)) {
            // line 23
            echo "          <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "node__title title"], "method")), "html", null, true);
            echo ">
            <a href=\"";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
          </h2>
        ";
        }
        // line 27
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
      ";
    }

    // line 29
    public function block_meta_area($context, array $blocks = [])
    {
        // line 30
        echo "        ";
        if (($context["display_submitted"] ?? null)) {
            // line 31
            echo "          <div class=\"node__meta\">
            <span";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["author_attributes"] ?? null), "addClass", [0 => "user-picture"], "method")), "html", null, true);
            echo ">
              ";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true);
            echo "
            </span>
            <span class=\"post-info\">
              <span>";
            // line 36
            echo t("@posted_ago ago", array("@posted_ago" => ($context["posted_ago"] ?? null), ));
            echo "</span>
              <span>";
            // line 37
            echo t("By @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
            echo "</span>
            </span>
            ";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 42
        echo "      ";
    }

    // line 45
    public function block_content($context, array $blocks = [])
    {
        // line 46
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "links"), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/mtheme/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 46,  190 => 45,  186 => 42,  180 => 39,  175 => 37,  171 => 36,  165 => 33,  161 => 32,  158 => 31,  155 => 30,  152 => 29,  145 => 27,  137 => 24,  132 => 23,  130 => 22,  125 => 21,  122 => 20,  118 => 18,  115 => 17,  111 => 15,  108 => 14,  99 => 48,  97 => 45,  93 => 44,  90 => 43,  87 => 29,  85 => 20,  82 => 19,  80 => 17,  77 => 16,  75 => 14,  71 => 13,  67 => 12,  65 => 8,  64 => 7,  63 => 6,  62 => 5,  61 => 4,  60 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/mtheme/templates/node.html.twig", "/var/www/html/web/themes/custom/mtheme/templates/node.html.twig");
    }
}
