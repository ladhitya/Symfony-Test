<?php

/* AcmeHelloBundle::helloBase.html.twig */
class __TwigTemplate_919f718296cfa5f9f677e6425601e4ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        <div id=\"sidebar\">
            ";
        // line 8
        $this->displayBlock('sidebar', $context, $blocks);
        // line 15
        echo "        </div>

        <div id=\"content\">
            ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        </div>
    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        // line 9
        echo "            This is Nav:
            <ul>
                <li><a href=\"/\">Home</a></li>
                <li><a href=\"/blog\">Blog</a></li>
            </ul>
            ";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle::helloBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
