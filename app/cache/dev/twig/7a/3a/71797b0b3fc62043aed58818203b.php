<?php

/* AcmeHelloBundle:Hello:include.html.twig */
class __TwigTemplate_7a3a71797b0b3fc62043aed58818203b extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "The person who wants to be greeted is : <b>";
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "</b>";
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Hello:include.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
