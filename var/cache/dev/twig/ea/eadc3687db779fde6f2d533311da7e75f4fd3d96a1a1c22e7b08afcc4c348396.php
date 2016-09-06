<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1859c69d7a0b209873f6ee7a38fe3f6b1685a9f7ef34122da86f7c3f3c7403c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b64ecac62ab0e86ce4924a0ae8941e3418efbf537a2145bafe2881820e884861 = $this->env->getExtension("native_profiler");
        $__internal_b64ecac62ab0e86ce4924a0ae8941e3418efbf537a2145bafe2881820e884861->enter($__internal_b64ecac62ab0e86ce4924a0ae8941e3418efbf537a2145bafe2881820e884861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b64ecac62ab0e86ce4924a0ae8941e3418efbf537a2145bafe2881820e884861->leave($__internal_b64ecac62ab0e86ce4924a0ae8941e3418efbf537a2145bafe2881820e884861_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ab6eeeb0c7f5b93238e194c1b1f4fa7aaba68aa6f0159fec6a74fbbc3be234d = $this->env->getExtension("native_profiler");
        $__internal_1ab6eeeb0c7f5b93238e194c1b1f4fa7aaba68aa6f0159fec6a74fbbc3be234d->enter($__internal_1ab6eeeb0c7f5b93238e194c1b1f4fa7aaba68aa6f0159fec6a74fbbc3be234d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1ab6eeeb0c7f5b93238e194c1b1f4fa7aaba68aa6f0159fec6a74fbbc3be234d->leave($__internal_1ab6eeeb0c7f5b93238e194c1b1f4fa7aaba68aa6f0159fec6a74fbbc3be234d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a396ce30749beb3587ad13aad94a35409c8e47b5888ca311f5832ae3789a963a = $this->env->getExtension("native_profiler");
        $__internal_a396ce30749beb3587ad13aad94a35409c8e47b5888ca311f5832ae3789a963a->enter($__internal_a396ce30749beb3587ad13aad94a35409c8e47b5888ca311f5832ae3789a963a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a396ce30749beb3587ad13aad94a35409c8e47b5888ca311f5832ae3789a963a->leave($__internal_a396ce30749beb3587ad13aad94a35409c8e47b5888ca311f5832ae3789a963a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62391b02061f428d2e55d5e01ede1faba3eec05d61797d04906cd6f399345d8b = $this->env->getExtension("native_profiler");
        $__internal_62391b02061f428d2e55d5e01ede1faba3eec05d61797d04906cd6f399345d8b->enter($__internal_62391b02061f428d2e55d5e01ede1faba3eec05d61797d04906cd6f399345d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_62391b02061f428d2e55d5e01ede1faba3eec05d61797d04906cd6f399345d8b->leave($__internal_62391b02061f428d2e55d5e01ede1faba3eec05d61797d04906cd6f399345d8b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
