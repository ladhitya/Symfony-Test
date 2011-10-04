<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c74a15bc8b2e0b025c3903fe284f954b extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, 'exception'))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
