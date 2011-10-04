<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_0522f2250a092d6e50b024737cdbaad3 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, 'status_code'), "html");
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'status_text'), "html");
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
