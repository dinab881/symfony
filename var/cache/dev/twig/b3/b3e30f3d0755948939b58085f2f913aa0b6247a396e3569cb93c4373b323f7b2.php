<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4b1f9085c9c46600452ed8c712fcab2537d7504993eb2d5e4d3d51c2be8c57f7 extends Twig_Template
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
        $__internal_7d2d484d8efdd9b082f0a3e99cb540de5352c9afa0e9c20af58075e09d3f6752 = $this->env->getExtension("native_profiler");
        $__internal_7d2d484d8efdd9b082f0a3e99cb540de5352c9afa0e9c20af58075e09d3f6752->enter($__internal_7d2d484d8efdd9b082f0a3e99cb540de5352c9afa0e9c20af58075e09d3f6752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d2d484d8efdd9b082f0a3e99cb540de5352c9afa0e9c20af58075e09d3f6752->leave($__internal_7d2d484d8efdd9b082f0a3e99cb540de5352c9afa0e9c20af58075e09d3f6752_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2f2e7897858ee97b1d8cf48a5a255e2ee92e7272e0a54f40061cf7db1d8ac5e = $this->env->getExtension("native_profiler");
        $__internal_c2f2e7897858ee97b1d8cf48a5a255e2ee92e7272e0a54f40061cf7db1d8ac5e->enter($__internal_c2f2e7897858ee97b1d8cf48a5a255e2ee92e7272e0a54f40061cf7db1d8ac5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c2f2e7897858ee97b1d8cf48a5a255e2ee92e7272e0a54f40061cf7db1d8ac5e->leave($__internal_c2f2e7897858ee97b1d8cf48a5a255e2ee92e7272e0a54f40061cf7db1d8ac5e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d07b7d4f37ee6be2ee4c9352a88492cdd2aae3e8780ae813d78171f85e4743a = $this->env->getExtension("native_profiler");
        $__internal_6d07b7d4f37ee6be2ee4c9352a88492cdd2aae3e8780ae813d78171f85e4743a->enter($__internal_6d07b7d4f37ee6be2ee4c9352a88492cdd2aae3e8780ae813d78171f85e4743a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6d07b7d4f37ee6be2ee4c9352a88492cdd2aae3e8780ae813d78171f85e4743a->leave($__internal_6d07b7d4f37ee6be2ee4c9352a88492cdd2aae3e8780ae813d78171f85e4743a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bb5c82d62febdd448c82458b3fa3909d39d9c17be98e968d4b3220a02968bc9 = $this->env->getExtension("native_profiler");
        $__internal_7bb5c82d62febdd448c82458b3fa3909d39d9c17be98e968d4b3220a02968bc9->enter($__internal_7bb5c82d62febdd448c82458b3fa3909d39d9c17be98e968d4b3220a02968bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7bb5c82d62febdd448c82458b3fa3909d39d9c17be98e968d4b3220a02968bc9->leave($__internal_7bb5c82d62febdd448c82458b3fa3909d39d9c17be98e968d4b3220a02968bc9_prof);

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
