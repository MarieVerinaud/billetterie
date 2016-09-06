<?php

/* :billetterie:_form1.html.twig */
class __TwigTemplate_5ab3b718769101032bc8cb7870fdf8e6e37790bc720ad8c4a22d33cf92e4415e extends Twig_Template
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
        $__internal_d6430e7b4541e3e17bd8ec01e046277d9c123159ca91c235b40f58749ac794e6 = $this->env->getExtension("native_profiler");
        $__internal_d6430e7b4541e3e17bd8ec01e046277d9c123159ca91c235b40f58749ac794e6->enter($__internal_d6430e7b4541e3e17bd8ec01e046277d9c123159ca91c235b40f58749ac794e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":billetterie:_form1.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateVisit", array()), 'row', array("label" => "Date souhaitée"));
        // line 4
        echo "
    <p><em>Pour information, le musée est fermé tous les mardis ainsi que les 1er mai, 1er novembre et 25 décembre</em></p>
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree", array()), 'row', array("label" => "Durée"));
        // line 8
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbDeBillets", array()), 'row', array("label" => "Quantité"));
        // line 11
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "

    <button type=\"submit\" class=\"btn btn-default\" formnovalidate>Passer à l'étape suivante</button>
    <br>
";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_d6430e7b4541e3e17bd8ec01e046277d9c123159ca91c235b40f58749ac794e6->leave($__internal_d6430e7b4541e3e17bd8ec01e046277d9c123159ca91c235b40f58749ac794e6_prof);

    }

    public function getTemplateName()
    {
        return ":billetterie:_form1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  42 => 12,  39 => 11,  37 => 9,  34 => 8,  32 => 6,  28 => 4,  26 => 2,  22 => 1,);
    }
}
/* {{ form_start(form) }}*/
/*     {{ form_row(form.dateVisit, {*/
/*         'label': 'Date souhaitée'*/
/*     }) }}*/
/*     <p><em>Pour information, le musée est fermé tous les mardis ainsi que les 1er mai, 1er novembre et 25 décembre</em></p>*/
/*     {{ form_row(form.duree, {*/
/*         'label': 'Durée'*/
/*     }) }}*/
/*     {{ form_row(form.nbDeBillets, {*/
/*         'label': 'Quantité'*/
/*     }) }}*/
/*     {{ form_row(form.email) }}*/
/* */
/*     <button type="submit" class="btn btn-default" formnovalidate>Passer à l'étape suivante</button>*/
/*     <br>*/
/* {{ form_end(form) }}*/
