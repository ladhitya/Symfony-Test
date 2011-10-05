<?php

/* AcmeHelloBundle:Hello:note.html.twig */
class __TwigTemplate_b82745063027a9485c66e6d7a0b7b120 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "this is controller generated note for : <b>";
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "</b>";
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Hello:note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
