<?php

/* C:\xampp\htdocs\Sites\OctoberCMS/themes/corlate/partials/footer.htm */
class __TwigTemplate_f1d4eef5a1e161ca80e1d8fcf201cb1e446a460e31afe0129ab33e58aaf82e8b extends Twig_Template
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
        // line 1
        echo "<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
\t\t\t\t&copy;  ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo ". All Rights Reserved. A <a href=\"http://shapebootstrap.net/\" title=\"Free Twitter Bootstrap WordPress Themes and HTML templates\" target=\"_blank\">ShapeBootstrap</a> Theme &#123;&#123; Powered by <a href=\"http://octobercms.com/\">OctoberCMS</a> &#125;&#125;
            </div>
            <div class=\"col-sm-4\">
                <ul class=\"pull-right\">
                    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('CMS')->pageFilter("samples/about");
        echo "\">About Us</a></li>
                    <li><a href=\"#\">Faq</a></li>
                    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->pageFilter("samples/contact");
        echo "\">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Sites\\OctoberCMS/themes/corlate/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  37 => 9,  33 => 8,  24 => 4,  19 => 1,);
    }
}
/* <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-8">*/
/* 				&copy;  {{ "now"|date("Y") }} {{ this.theme.site_name }}. All Rights Reserved. A <a href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates" target="_blank">ShapeBootstrap</a> Theme &#123;&#123; Powered by <a href="http://octobercms.com/">OctoberCMS</a> &#125;&#125;*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*                 <ul class="pull-right">*/
/*                     <li><a href="{{ 'home'|page }}">Home</a></li>*/
/*                     <li><a href="{{ 'samples/about'|page }}">About Us</a></li>*/
/*                     <li><a href="#">Faq</a></li>*/
/*                     <li><a href="{{ 'samples/contact'|page }}">Contact Us</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
