<?php

/* about/index.html.twig */
class __TwigTemplate_666126463d781d20b28d346f4988aa5f06902e61460c7ff7b7a0ad5785e9bedd extends Twig_Template
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
        $__internal_b2bc259904240bf4f63957a28566bd52d3cf2fe823582f142d18dff619f9b6bc = $this->env->getExtension("native_profiler");
        $__internal_b2bc259904240bf4f63957a28566bd52d3cf2fe823582f142d18dff619f9b6bc->enter($__internal_b2bc259904240bf4f63957a28566bd52d3cf2fe823582f142d18dff619f9b6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        // line 1
        if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
            // line 2
            echo "<h1>User Profile</h1>
<strong>Name: </strong>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
            echo " <br/>
<strong>email: </strong>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
            echo " <br/>
<strong>Bio: </strong>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "bio", array()), "html", null, true);
            echo " <br/>
";
        } else {
            // line 7
            echo "    mava is a web app for task management and team collaboration. <br/>
";
        }
        
        $__internal_b2bc259904240bf4f63957a28566bd52d3cf2fe823582f142d18dff619f9b6bc->leave($__internal_b2bc259904240bf4f63957a28566bd52d3cf2fe823582f142d18dff619f9b6bc_prof);

    }

    public function getTemplateName()
    {
        return "about/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  35 => 5,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if user %}*/
/* <h1>User Profile</h1>*/
/* <strong>Name: </strong>{{user.name}} <br/>*/
/* <strong>email: </strong>{{user.email}} <br/>*/
/* <strong>Bio: </strong>{{user.bio}} <br/>*/
/* {% else %}*/
/*     mava is a web app for task management and team collaboration. <br/>*/
/* {% endif %}*/
