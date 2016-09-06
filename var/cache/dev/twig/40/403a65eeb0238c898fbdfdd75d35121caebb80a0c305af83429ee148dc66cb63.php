<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_87420428752580dd93e23ece27d6a40e68e81c93fd3765cc9d2a7bf4f34bdebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fd04c085d4bbff94d941140e855c8e7a94e8bbdfb5639f4d1110bfc2d345527 = $this->env->getExtension("native_profiler");
        $__internal_0fd04c085d4bbff94d941140e855c8e7a94e8bbdfb5639f4d1110bfc2d345527->enter($__internal_0fd04c085d4bbff94d941140e855c8e7a94e8bbdfb5639f4d1110bfc2d345527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fd04c085d4bbff94d941140e855c8e7a94e8bbdfb5639f4d1110bfc2d345527->leave($__internal_0fd04c085d4bbff94d941140e855c8e7a94e8bbdfb5639f4d1110bfc2d345527_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e1f02bf3bd603599eacbcfd153a4a6f84684bd343ebd221fee537c5a23f08b7f = $this->env->getExtension("native_profiler");
        $__internal_e1f02bf3bd603599eacbcfd153a4a6f84684bd343ebd221fee537c5a23f08b7f->enter($__internal_e1f02bf3bd603599eacbcfd153a4a6f84684bd343ebd221fee537c5a23f08b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e1f02bf3bd603599eacbcfd153a4a6f84684bd343ebd221fee537c5a23f08b7f->leave($__internal_e1f02bf3bd603599eacbcfd153a4a6f84684bd343ebd221fee537c5a23f08b7f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_72f3218617f5413297efcce2208b47c6ef95fd75aa68ac1c748e58da33d8bdd0 = $this->env->getExtension("native_profiler");
        $__internal_72f3218617f5413297efcce2208b47c6ef95fd75aa68ac1c748e58da33d8bdd0->enter($__internal_72f3218617f5413297efcce2208b47c6ef95fd75aa68ac1c748e58da33d8bdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_72f3218617f5413297efcce2208b47c6ef95fd75aa68ac1c748e58da33d8bdd0->leave($__internal_72f3218617f5413297efcce2208b47c6ef95fd75aa68ac1c748e58da33d8bdd0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e946b5aef78ebb055aad3ac17e446fabdde60be43a2b57070c7609dad1ee8378 = $this->env->getExtension("native_profiler");
        $__internal_e946b5aef78ebb055aad3ac17e446fabdde60be43a2b57070c7609dad1ee8378->enter($__internal_e946b5aef78ebb055aad3ac17e446fabdde60be43a2b57070c7609dad1ee8378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e946b5aef78ebb055aad3ac17e446fabdde60be43a2b57070c7609dad1ee8378->leave($__internal_e946b5aef78ebb055aad3ac17e446fabdde60be43a2b57070c7609dad1ee8378_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
