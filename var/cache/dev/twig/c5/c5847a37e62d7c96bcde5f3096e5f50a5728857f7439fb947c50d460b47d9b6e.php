<?php

/* base.html.twig */
class __TwigTemplate_9b2e8ddc288d34a65dba9d99db2aa151447dadb6768c8f874501b89de1299d37 extends Twig_Template
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
        $__internal_f869ac562ed7eac207c61f244d97583f0acf0c6cfc634cce0d9247d8679a3ec7 = $this->env->getExtension("native_profiler");
        $__internal_f869ac562ed7eac207c61f244d97583f0acf0c6cfc634cce0d9247d8679a3ec7->enter($__internal_f869ac562ed7eac207c61f244d97583f0acf0c6cfc634cce0d9247d8679a3ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f869ac562ed7eac207c61f244d97583f0acf0c6cfc634cce0d9247d8679a3ec7->leave($__internal_f869ac562ed7eac207c61f244d97583f0acf0c6cfc634cce0d9247d8679a3ec7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ee5b9e64b34a9e5cfad9538b221c346429ecd2d9cfbd6470c9a6cbfe06b3509 = $this->env->getExtension("native_profiler");
        $__internal_1ee5b9e64b34a9e5cfad9538b221c346429ecd2d9cfbd6470c9a6cbfe06b3509->enter($__internal_1ee5b9e64b34a9e5cfad9538b221c346429ecd2d9cfbd6470c9a6cbfe06b3509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1ee5b9e64b34a9e5cfad9538b221c346429ecd2d9cfbd6470c9a6cbfe06b3509->leave($__internal_1ee5b9e64b34a9e5cfad9538b221c346429ecd2d9cfbd6470c9a6cbfe06b3509_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9c8d1deece35de60a329687b42c45eebce914ba0dac9e4e00ec94e02201f2467 = $this->env->getExtension("native_profiler");
        $__internal_9c8d1deece35de60a329687b42c45eebce914ba0dac9e4e00ec94e02201f2467->enter($__internal_9c8d1deece35de60a329687b42c45eebce914ba0dac9e4e00ec94e02201f2467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9c8d1deece35de60a329687b42c45eebce914ba0dac9e4e00ec94e02201f2467->leave($__internal_9c8d1deece35de60a329687b42c45eebce914ba0dac9e4e00ec94e02201f2467_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fec1fe79ac7edf52e1aafad082dc0aed22732b0bbf9f623913ce7c3c784102c3 = $this->env->getExtension("native_profiler");
        $__internal_fec1fe79ac7edf52e1aafad082dc0aed22732b0bbf9f623913ce7c3c784102c3->enter($__internal_fec1fe79ac7edf52e1aafad082dc0aed22732b0bbf9f623913ce7c3c784102c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fec1fe79ac7edf52e1aafad082dc0aed22732b0bbf9f623913ce7c3c784102c3->leave($__internal_fec1fe79ac7edf52e1aafad082dc0aed22732b0bbf9f623913ce7c3c784102c3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6b4c7f6863eb9465a17315bf0f023804e98dbabe03b60938e6af1e11cf7e3f64 = $this->env->getExtension("native_profiler");
        $__internal_6b4c7f6863eb9465a17315bf0f023804e98dbabe03b60938e6af1e11cf7e3f64->enter($__internal_6b4c7f6863eb9465a17315bf0f023804e98dbabe03b60938e6af1e11cf7e3f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6b4c7f6863eb9465a17315bf0f023804e98dbabe03b60938e6af1e11cf7e3f64->leave($__internal_6b4c7f6863eb9465a17315bf0f023804e98dbabe03b60938e6af1e11cf7e3f64_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
