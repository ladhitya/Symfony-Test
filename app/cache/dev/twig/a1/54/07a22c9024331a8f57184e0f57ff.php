<?php

/* AcmeHiBundle:Default:index.html.twig */
class __TwigTemplate_a15407a22c9024331a8f57184e0f57ff extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "!
";
    }

    public function getTemplateName()
    {
        return "AcmeHiBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
