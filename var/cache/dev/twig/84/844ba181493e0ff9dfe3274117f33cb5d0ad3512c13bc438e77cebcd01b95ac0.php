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
        $__internal_3797a69560e311bfdd7a8f605f945832b9f8247082ef96884ce5258eb121cf88 = $this->env->getExtension("native_profiler");
        $__internal_3797a69560e311bfdd7a8f605f945832b9f8247082ef96884ce5258eb121cf88->enter($__internal_3797a69560e311bfdd7a8f605f945832b9f8247082ef96884ce5258eb121cf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\"/>
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
        
        $__internal_3797a69560e311bfdd7a8f605f945832b9f8247082ef96884ce5258eb121cf88->leave($__internal_3797a69560e311bfdd7a8f605f945832b9f8247082ef96884ce5258eb121cf88_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b431dfeca9eeb7ac3665bc5fea350f61e61a9cb9d1da2249b244eca365d17da = $this->env->getExtension("native_profiler");
        $__internal_3b431dfeca9eeb7ac3665bc5fea350f61e61a9cb9d1da2249b244eca365d17da->enter($__internal_3b431dfeca9eeb7ac3665bc5fea350f61e61a9cb9d1da2249b244eca365d17da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Billetterie du Louvre!";
        
        $__internal_3b431dfeca9eeb7ac3665bc5fea350f61e61a9cb9d1da2249b244eca365d17da->leave($__internal_3b431dfeca9eeb7ac3665bc5fea350f61e61a9cb9d1da2249b244eca365d17da_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca454dd49040dcad934f6a1b9c2eb13cab0b0ecfc89102a66222d6a69423daba = $this->env->getExtension("native_profiler");
        $__internal_ca454dd49040dcad934f6a1b9c2eb13cab0b0ecfc89102a66222d6a69423daba->enter($__internal_ca454dd49040dcad934f6a1b9c2eb13cab0b0ecfc89102a66222d6a69423daba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ca454dd49040dcad934f6a1b9c2eb13cab0b0ecfc89102a66222d6a69423daba->leave($__internal_ca454dd49040dcad934f6a1b9c2eb13cab0b0ecfc89102a66222d6a69423daba_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_145bc02459b405a7a6c5f662416b4c8b69f9be04bd8d77add2a06fb3c12a1023 = $this->env->getExtension("native_profiler");
        $__internal_145bc02459b405a7a6c5f662416b4c8b69f9be04bd8d77add2a06fb3c12a1023->enter($__internal_145bc02459b405a7a6c5f662416b4c8b69f9be04bd8d77add2a06fb3c12a1023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "
                ";
        
        $__internal_145bc02459b405a7a6c5f662416b4c8b69f9be04bd8d77add2a06fb3c12a1023->leave($__internal_145bc02459b405a7a6c5f662416b4c8b69f9be04bd8d77add2a06fb3c12a1023_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8e980be721eeaa5ea736bea0333d4070e0a7e339a5a0947b8c451b37e1fac59 = $this->env->getExtension("native_profiler");
        $__internal_d8e980be721eeaa5ea736bea0333d4070e0a7e339a5a0947b8c451b37e1fac59->enter($__internal_d8e980be721eeaa5ea736bea0333d4070e0a7e339a5a0947b8c451b37e1fac59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "            <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
        ";
        
        $__internal_d8e980be721eeaa5ea736bea0333d4070e0a7e339a5a0947b8c451b37e1fac59->leave($__internal_d8e980be721eeaa5ea736bea0333d4070e0a7e339a5a0947b8c451b37e1fac59_prof);

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
/*         <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>*/
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
