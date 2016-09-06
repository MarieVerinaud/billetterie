<?php

/* base.html.twig */
class __TwigTemplate_23509e7619592a92589ec7e4bac370354f65dd4b3f4603939e1d6c93779a6c61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_509ba5f15a00a75f8136fe611c596c814799b62173a1d9b9a8e9a449a6726f6a = $this->env->getExtension("native_profiler");
        $__internal_509ba5f15a00a75f8136fe611c596c814799b62173a1d9b9a8e9a449a6726f6a->enter($__internal_509ba5f15a00a75f8136fe611c596c814799b62173a1d9b9a8e9a449a6726f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
    <div class=\"container\">
        <div class=\"row\">
                <h1>Bienvenue sur le site officiel de la billetterie du Louvre</h1>
            <div class=\"row\">
                ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "            </div>

        </div>
    </div>

        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    </body>
</html>
";
        
        $__internal_509ba5f15a00a75f8136fe611c596c814799b62173a1d9b9a8e9a449a6726f6a->leave($__internal_509ba5f15a00a75f8136fe611c596c814799b62173a1d9b9a8e9a449a6726f6a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5152b1de83d60909062c12910d2b3a4d4e1905155473eddd94e9c53f362997d = $this->env->getExtension("native_profiler");
        $__internal_a5152b1de83d60909062c12910d2b3a4d4e1905155473eddd94e9c53f362997d->enter($__internal_a5152b1de83d60909062c12910d2b3a4d4e1905155473eddd94e9c53f362997d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Billetterie du Louvre!";
        
        $__internal_a5152b1de83d60909062c12910d2b3a4d4e1905155473eddd94e9c53f362997d->leave($__internal_a5152b1de83d60909062c12910d2b3a4d4e1905155473eddd94e9c53f362997d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40732ca764d2596a192fc52929631e6720ced31cfd7727f7b28043bedaac2631 = $this->env->getExtension("native_profiler");
        $__internal_40732ca764d2596a192fc52929631e6720ced31cfd7727f7b28043bedaac2631->enter($__internal_40732ca764d2596a192fc52929631e6720ced31cfd7727f7b28043bedaac2631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
            <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
            <!--[if IE]><link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" /><![endif]-->
        ";
        
        $__internal_40732ca764d2596a192fc52929631e6720ced31cfd7727f7b28043bedaac2631->leave($__internal_40732ca764d2596a192fc52929631e6720ced31cfd7727f7b28043bedaac2631_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_477c5b39b24f42b3e1f2db641bb6aadd5e06745850bd5fceba831dd24cdc0940 = $this->env->getExtension("native_profiler");
        $__internal_477c5b39b24f42b3e1f2db641bb6aadd5e06745850bd5fceba831dd24cdc0940->enter($__internal_477c5b39b24f42b3e1f2db641bb6aadd5e06745850bd5fceba831dd24cdc0940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "
                ";
        
        $__internal_477c5b39b24f42b3e1f2db641bb6aadd5e06745850bd5fceba831dd24cdc0940->leave($__internal_477c5b39b24f42b3e1f2db641bb6aadd5e06745850bd5fceba831dd24cdc0940_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a6fe2c94849c4995ba747367961cb822607c3ae2a7a466cc27ea248ca960c01 = $this->env->getExtension("native_profiler");
        $__internal_0a6fe2c94849c4995ba747367961cb822607c3ae2a7a466cc27ea248ca960c01->enter($__internal_0a6fe2c94849c4995ba747367961cb822607c3ae2a7a466cc27ea248ca960c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "            <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
        ";
        
        $__internal_0a6fe2c94849c4995ba747367961cb822607c3ae2a7a466cc27ea248ca960c01->leave($__internal_0a6fe2c94849c4995ba747367961cb822607c3ae2a7a466cc27ea248ca960c01_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 27,  120 => 26,  112 => 19,  106 => 18,  97 => 10,  93 => 9,  89 => 8,  84 => 7,  78 => 6,  66 => 5,  57 => 29,  55 => 26,  48 => 21,  46 => 18,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Billetterie du Louvre!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/styles.css') }}">*/
/*             <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}" />*/
/*             <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href=""{{ asset('images/favicon.ico') }}" /><![endif]-->*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*                 <h1>Bienvenue sur le site officiel de la billetterie du Louvre</h1>*/
/*             <div class="row">*/
/*                 {% block body %}*/
/* */
/*                 {% endblock %}*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*         {% block javascripts %}*/
/*             <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.min.js"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
