<?php

/* AcmeStoreBundle:Default:create.html.twig */
class __TwigTemplate_c077b92b962d5b0fd8f0956f663fa30a83b453c462d09d3ddc529a8f1da79e8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    Producto creado con el ID: ";
        echo twig_escape_filter($this->env, (isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Default:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
