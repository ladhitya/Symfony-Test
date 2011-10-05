<?php

/* AcmeHelloBundle:Hello:index2.html.twig */
class __TwigTemplate_c1f63f29e1aa4b637f8964fd2bb86cc1 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "AcmeHelloBundle::helloBase.html.twig";
        if ($parent instanceof Twig_Template) {
            $name = $parent->getTemplateName();
            $this->parent[$name] = $parent;
            $parent = $name;
        } elseif (!isset($this->parent[$parent])) {
            $this->parent[$parent] = $this->env->loadTemplate($parent);
        }

        return $this->parent[$parent];
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    Warm Hello from Twig, <b>";
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "</b>!
    <br/>
    ";
        // line 7
        $this->env->loadTemplate("AcmeHelloBundle:Hello:include.html.twig")->display(array_merge($context, array("name" => $this->getContext($context, 'name'))));
        // line 8
        echo "    <br/>
    ";
        // line 9
        echo $this->env->getExtension('actions')->renderAction("AcmeHelloBundle:Hello:note", array("for" => "blah"), array());
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Hello:index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
