<?php

/* main/homepage.html.twig */
class __TwigTemplate_c084e3dd8610144c21be3deed0ed7a51616e3dbc117dc22dbded3048026e4599 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03c6610997f7461efa4e9a8e8ea042288a4b4915a4a90eeb232fcfb1a1fb4566 = $this->env->getExtension("native_profiler");
        $__internal_03c6610997f7461efa4e9a8e8ea042288a4b4915a4a90eeb232fcfb1a1fb4566->enter($__internal_03c6610997f7461efa4e9a8e8ea042288a4b4915a4a90eeb232fcfb1a1fb4566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03c6610997f7461efa4e9a8e8ea042288a4b4915a4a90eeb232fcfb1a1fb4566->leave($__internal_03c6610997f7461efa4e9a8e8ea042288a4b4915a4a90eeb232fcfb1a1fb4566_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5383d90bd2a8020c9eb5a7412ac61e99b5913b75388eee4418ad706e2ea23a41 = $this->env->getExtension("native_profiler");
        $__internal_5383d90bd2a8020c9eb5a7412ac61e99b5913b75388eee4418ad706e2ea23a41->enter($__internal_5383d90bd2a8020c9eb5a7412ac61e99b5913b75388eee4418ad706e2ea23a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"button btn btn-lg btn-default\">
            <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("billetterie_form_1");
        echo "\">Achetez vos billets dès maintenant !</a>
        </div>
    </div>
";
        
        $__internal_5383d90bd2a8020c9eb5a7412ac61e99b5913b75388eee4418ad706e2ea23a41->leave($__internal_5383d90bd2a8020c9eb5a7412ac61e99b5913b75388eee4418ad706e2ea23a41_prof);

    }

    public function getTemplateName()
    {
        return "main/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {%  extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="button btn btn-lg btn-default">*/
/*             <a href="{{ path('billetterie_form_1') }}">Achetez vos billets dès maintenant !</a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
