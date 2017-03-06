<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_89352c259e2fd2d1a36abd6dbff2f5b32e8a2d5a837f2a916672dba548b3858b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c73db78c9c21b2c47a3ad7c29ca639511772f24ce9720896e0dcc600dba20777 = $this->env->getExtension("native_profiler");
        $__internal_c73db78c9c21b2c47a3ad7c29ca639511772f24ce9720896e0dcc600dba20777->enter($__internal_c73db78c9c21b2c47a3ad7c29ca639511772f24ce9720896e0dcc600dba20777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c73db78c9c21b2c47a3ad7c29ca639511772f24ce9720896e0dcc600dba20777->leave($__internal_c73db78c9c21b2c47a3ad7c29ca639511772f24ce9720896e0dcc600dba20777_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ec5cb3e43e0f00f903ab9abca96844ad4946c9fd8fbf0ad03bac2a26a44c7e4 = $this->env->getExtension("native_profiler");
        $__internal_9ec5cb3e43e0f00f903ab9abca96844ad4946c9fd8fbf0ad03bac2a26a44c7e4->enter($__internal_9ec5cb3e43e0f00f903ab9abca96844ad4946c9fd8fbf0ad03bac2a26a44c7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9ec5cb3e43e0f00f903ab9abca96844ad4946c9fd8fbf0ad03bac2a26a44c7e4->leave($__internal_9ec5cb3e43e0f00f903ab9abca96844ad4946c9fd8fbf0ad03bac2a26a44c7e4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce913b384b87c8dec1839be6d500ae85ed410f5ab93f45c67d74957f0d37d8dd = $this->env->getExtension("native_profiler");
        $__internal_ce913b384b87c8dec1839be6d500ae85ed410f5ab93f45c67d74957f0d37d8dd->enter($__internal_ce913b384b87c8dec1839be6d500ae85ed410f5ab93f45c67d74957f0d37d8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ce913b384b87c8dec1839be6d500ae85ed410f5ab93f45c67d74957f0d37d8dd->leave($__internal_ce913b384b87c8dec1839be6d500ae85ed410f5ab93f45c67d74957f0d37d8dd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84c998269ce1d245f735741fc351a4c11b832899bb6de53a6fbf46c2e8ecc935 = $this->env->getExtension("native_profiler");
        $__internal_84c998269ce1d245f735741fc351a4c11b832899bb6de53a6fbf46c2e8ecc935->enter($__internal_84c998269ce1d245f735741fc351a4c11b832899bb6de53a6fbf46c2e8ecc935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_84c998269ce1d245f735741fc351a4c11b832899bb6de53a6fbf46c2e8ecc935->leave($__internal_84c998269ce1d245f735741fc351a4c11b832899bb6de53a6fbf46c2e8ecc935_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
