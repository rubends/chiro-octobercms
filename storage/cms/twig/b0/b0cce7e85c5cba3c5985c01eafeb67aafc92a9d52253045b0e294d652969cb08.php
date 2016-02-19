<?php

/* C:\xampp\htdocs\Sites\OctoberCMS/themes/corlate/partials/nav.htm */
class __TwigTemplate_b8482df89e0779e9cb29d45dc340d02d7e3845f46deaf89390ba34d3d96e61ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["links"] = array("home" => array(0 => "home", 1 => "Home"), "about" => array(0 => "samples/about", 1 => "About Us"), "services" => array(0 => "samples/services", 1 => "Services"), "portfolio" => array(0 => "samples/portfolio", 1 => "Portfolio"), "pages" => array("name" => "Pages", "sublinks" => array("pricing" => array(0 => "samples/pricing", 1 => "Pricing Table"), "error" => array(0 => "error", 1 => "Error Page"), "404" => array(0 => "404", 1 => "404 Page"), "shortcodes" => array(0 => "samples/shortcodes", 1 => "Shortcodes"))), "blog" => array("name" => "Blog", "sublinks" => array("blog" => array(0 => "blog/blog", 1 => "Blog"), "blog-item" => array(0 => "blog/blog-item", 1 => "Blog Item"))), "contact" => array(0 => "samples/contact", 1 => "Contact"));
        // line 27
        echo "
";
        // line 48
        echo "
";
        // line 49
        $context["nav"] = $this;
        // line 50
        echo "
<nav class=\"navbar navbar-inverse\" role=\"banner\">
\t<div class=\"container\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 60
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" alt=\"logo\"></a>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse navbar-right\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t";
        // line 64
        echo $context["nav"]->getrender_menu((isset($context["links"]) ? $context["links"] : null));
        echo "
\t\t\t</ul>
\t\t</div>
\t</div>
</nav><!--/nav-->";
    }

    // line 28
    public function getrender_menu($__links__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "links" => $__links__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 29
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 30
                echo "        <li class=\"";
                echo ((($context["code"] == (isset($context["currentPage"]) ? $context["currentPage"] : null))) ? ("active") : (""));
                echo " ";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 32
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("#") : ($this->env->getExtension('CMS')->pageFilter((($this->getAttribute($context["link"], "page", array())) ? ($this->getAttribute($context["link"], "page", array())) : ($this->getAttribute($context["link"], 0, array(), "array"))))));
                echo "\"
                ";
                // line 33
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 34
                echo "                class=\"";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 36
                echo twig_escape_filter($this->env, (($this->getAttribute($context["link"], "name", array())) ? ($this->getAttribute($context["link"], "name", array())) : ($this->getAttribute($context["link"], 1, array(), "array"))), "html", null, true);
                echo "
                ";
                // line 37
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 38
                echo "            </a>
            ";
                // line 39
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    // line 40
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 42
                    echo $this->getAttribute($this, "render_menu", array(0 => $this->getAttribute($context["link"], "sublinks", array())), "method");
                    echo "
                </ul>
            ";
                }
                // line 45
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Sites\\OctoberCMS/themes/corlate/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  115 => 42,  111 => 40,  109 => 39,  106 => 38,  102 => 37,  98 => 36,  92 => 34,  88 => 33,  84 => 32,  76 => 30,  71 => 29,  59 => 28,  50 => 64,  41 => 60,  29 => 50,  27 => 49,  24 => 48,  21 => 27,  19 => 2,);
    }
}
/* {# Note: Only one levels of sublinks are supported by Bootstrap 3 #}*/
/* {% set*/
/*     links = {*/
/* 	    'home':      ['home', 'Home'],*/
/* 		'about':     ['samples/about', 'About Us'],*/
/* 		'services':  ['samples/services', 'Services'],*/
/* 		'portfolio': ['samples/portfolio', 'Portfolio'],*/
/*         'pages': {*/
/*             name: 'Pages',*/
/*             sublinks: {*/
/*                 'pricing':	  ['samples/pricing', 'Pricing Table'],*/
/*                 'error':	  ['error', 'Error Page'],*/
/*                 '404':		  ['404', '404 Page'],*/
/*                 'shortcodes': ['samples/shortcodes', 'Shortcodes'],*/
/*             },*/
/*         },*/
/*         'blog': {*/
/* 			name: 'Blog',*/
/* 			sublinks: {*/
/* 				'blog':		 ['blog/blog', 'Blog'],*/
/* 				'blog-item': ['blog/blog-item', 'Blog Item'],*/
/*             },*/
/*         },*/
/*         'contact': ['samples/contact', 'Contact'],*/
/*     }*/
/* %}*/
/* */
/* {% macro render_menu(links) %}*/
/*     {% for code, link in links %}*/
/*         <li class="{{ code == currentPage ? 'active' }} {{ link.sublinks ? 'dropdown' }}">*/
/*             <a*/
/*                 href="{{ link.sublinks ? '#' : (link.page ?: link[0])|page }}"*/
/*                 {% if link.sublinks %}data-toggle="dropdown"{% endif %}*/
/*                 class="{{ link.sublinks ? 'dropdown-toggle' }}"*/
/*             >*/
/*                 {{ link.name ?: link[1] }}*/
/*                 {% if link.sublinks %}<span class="caret"></span>{% endif %}*/
/*             </a>*/
/*             {% if link.sublinks %}*/
/*                 <span class="dropdown-arrow"></span>*/
/*                 <ul class="dropdown-menu">*/
/*                     {{ _self.render_menu(link.sublinks) }}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* {% import _self as nav %}*/
/* */
/* <nav class="navbar navbar-inverse" role="banner">*/
/* 	<div class="container">*/
/* 		<div class="navbar-header">*/
/* 			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/* 			<span class="sr-only">Toggle navigation</span>*/
/* 			<span class="icon-bar"></span>*/
/* 			<span class="icon-bar"></span>*/
/* 			<span class="icon-bar"></span>*/
/* 			</button>*/
/* 			<a class="navbar-brand" href="{{ 'home'|page }}"><img src="{{ 'assets/images/logo.png'|theme }}" alt="logo"></a>*/
/* 		</div>*/
/* 		<div class="collapse navbar-collapse navbar-right">*/
/* 			<ul class="nav navbar-nav">*/
/* 				{{ nav.render_menu(links) }}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* </nav><!--/nav-->*/
