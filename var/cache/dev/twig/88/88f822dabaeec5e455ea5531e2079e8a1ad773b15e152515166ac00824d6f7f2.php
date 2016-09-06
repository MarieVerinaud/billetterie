<?php

/* :billetterie:reservation.html.twig */
class __TwigTemplate_e22515be01fa4db5348481978844731c646e286ff5e9cb9030528a7e6b282580 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":billetterie:formLayout.html.twig", ":billetterie:reservation.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":billetterie:formLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66d67db2128ad0e5ca4a01754b412424b1741ff2b2b3abdbf02ab4d59a49b444 = $this->env->getExtension("native_profiler");
        $__internal_66d67db2128ad0e5ca4a01754b412424b1741ff2b2b3abdbf02ab4d59a49b444->enter($__internal_66d67db2128ad0e5ca4a01754b412424b1741ff2b2b3abdbf02ab4d59a49b444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":billetterie:reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66d67db2128ad0e5ca4a01754b412424b1741ff2b2b3abdbf02ab4d59a49b444->leave($__internal_66d67db2128ad0e5ca4a01754b412424b1741ff2b2b3abdbf02ab4d59a49b444_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3133ac8b2ab8b7c178de0ef0a9c293e80ce9f17b5d05eaaf64fb9d453aa032fb = $this->env->getExtension("native_profiler");
        $__internal_3133ac8b2ab8b7c178de0ef0a9c293e80ce9f17b5d05eaaf64fb9d453aa032fb->enter($__internal_3133ac8b2ab8b7c178de0ef0a9c293e80ce9f17b5d05eaaf64fb9d453aa032fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container form\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h2>Réservez vos billets dès maintenant !</h2>
                <br>
                ";
        // line 9
        echo twig_include($this->env, $context, ":billetterie:_form1.html.twig");
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_3133ac8b2ab8b7c178de0ef0a9c293e80ce9f17b5d05eaaf64fb9d453aa032fb->leave($__internal_3133ac8b2ab8b7c178de0ef0a9c293e80ce9f17b5d05eaaf64fb9d453aa032fb_prof);

    }

    public function getTemplateName()
    {
        return ":billetterie:reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends ':billetterie:formLayout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container form">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <h2>Réservez vos billets dès maintenant !</h2>*/
/*                 <br>*/
/*                 {{ include(':billetterie:_form1.html.twig') }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
