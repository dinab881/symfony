<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9a980d7a10673a4abd0202f41e601b8521901f3d61eda1dbdad95521a6541b62 extends Twig_Template
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
        $__internal_36d96db03d8461d6b9ec61b837473b2fdffec4d68f25f5020cdb49fa48b80e26 = $this->env->getExtension("native_profiler");
        $__internal_36d96db03d8461d6b9ec61b837473b2fdffec4d68f25f5020cdb49fa48b80e26->enter($__internal_36d96db03d8461d6b9ec61b837473b2fdffec4d68f25f5020cdb49fa48b80e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36d96db03d8461d6b9ec61b837473b2fdffec4d68f25f5020cdb49fa48b80e26->leave($__internal_36d96db03d8461d6b9ec61b837473b2fdffec4d68f25f5020cdb49fa48b80e26_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f9bab358e1437aae27ecfa6b3a727bea3ef3c7a732016a8b1cd98e3284ec602 = $this->env->getExtension("native_profiler");
        $__internal_5f9bab358e1437aae27ecfa6b3a727bea3ef3c7a732016a8b1cd98e3284ec602->enter($__internal_5f9bab358e1437aae27ecfa6b3a727bea3ef3c7a732016a8b1cd98e3284ec602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f9bab358e1437aae27ecfa6b3a727bea3ef3c7a732016a8b1cd98e3284ec602->leave($__internal_5f9bab358e1437aae27ecfa6b3a727bea3ef3c7a732016a8b1cd98e3284ec602_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4b4dcbc21479563486eff550948d1ba3e2a576a9c825a5fd8f76dc8ef3a9004 = $this->env->getExtension("native_profiler");
        $__internal_e4b4dcbc21479563486eff550948d1ba3e2a576a9c825a5fd8f76dc8ef3a9004->enter($__internal_e4b4dcbc21479563486eff550948d1ba3e2a576a9c825a5fd8f76dc8ef3a9004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e4b4dcbc21479563486eff550948d1ba3e2a576a9c825a5fd8f76dc8ef3a9004->leave($__internal_e4b4dcbc21479563486eff550948d1ba3e2a576a9c825a5fd8f76dc8ef3a9004_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3ddedecf3cc1016fe2e8d5eaad44281639798ad25ad6bec7714ec6e645dcb94 = $this->env->getExtension("native_profiler");
        $__internal_c3ddedecf3cc1016fe2e8d5eaad44281639798ad25ad6bec7714ec6e645dcb94->enter($__internal_c3ddedecf3cc1016fe2e8d5eaad44281639798ad25ad6bec7714ec6e645dcb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c3ddedecf3cc1016fe2e8d5eaad44281639798ad25ad6bec7714ec6e645dcb94->leave($__internal_c3ddedecf3cc1016fe2e8d5eaad44281639798ad25ad6bec7714ec6e645dcb94_prof);

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
