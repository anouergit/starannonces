<?php

/* AnceStarBundle:Star:add.html.twig */
class __TwigTemplate_14355a5351814f3689877cd074a37965d9689ba9ea0f6fd6c41cacd2b1ce3f61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AnceStarBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AnceStarBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>Liste des articles</h2>



";
    }

    public function getTemplateName()
    {
        return "AnceStarBundle:Star:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
