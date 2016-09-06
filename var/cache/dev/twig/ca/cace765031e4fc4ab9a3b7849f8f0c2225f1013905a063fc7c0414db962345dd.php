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
        $__internal_f379741036637013b86b816a619313c852fe1fa31d0019cf10a6845c95e7ee38 = $this->env->getExtension("native_profiler");
        $__internal_f379741036637013b86b816a619313c852fe1fa31d0019cf10a6845c95e7ee38->enter($__internal_f379741036637013b86b816a619313c852fe1fa31d0019cf10a6845c95e7ee38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f379741036637013b86b816a619313c852fe1fa31d0019cf10a6845c95e7ee38->leave($__internal_f379741036637013b86b816a619313c852fe1fa31d0019cf10a6845c95e7ee38_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b53bbd836839e2501544d2013c6ff7809eaaa9cb9c76a3cd64db5e9c6becc938 = $this->env->getExtension("native_profiler");
        $__internal_b53bbd836839e2501544d2013c6ff7809eaaa9cb9c76a3cd64db5e9c6becc938->enter($__internal_b53bbd836839e2501544d2013c6ff7809eaaa9cb9c76a3cd64db5e9c6becc938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
            <a class=\"button btn btn-lg btn-default\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("billetterie_form_1");
        echo "\">Achetez vos billets dès maintenant !</a>
    </div>
";
        
        $__internal_b53bbd836839e2501544d2013c6ff7809eaaa9cb9c76a3cd64db5e9c6becc938->leave($__internal_b53bbd836839e2501544d2013c6ff7809eaaa9cb9c76a3cd64db5e9c6becc938_prof);

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
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {%  extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*             <a class="button btn btn-lg btn-default" href="{{ path('billetterie_form_1') }}">Achetez vos billets dès maintenant !</a>*/
/*     </div>*/
/* {% endblock %}*/
