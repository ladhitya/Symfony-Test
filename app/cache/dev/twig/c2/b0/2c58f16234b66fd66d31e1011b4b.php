<?php

/* AcmeHelloBundle:Hello:index.html.php */
class __TwigTemplate_c2b02c58f16234b66fd66d31e1011b4b extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!-- src/Acme/HelloBundle/Resources/views/Hello/index.html.php -->
<?php \$view->extend('::base.html.php') ?>

Warm Hello <?php echo \$view->escape(\$name) ?>!!";
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Hello:index.html.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
