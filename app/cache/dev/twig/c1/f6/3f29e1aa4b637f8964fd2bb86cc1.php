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
            'sidebar' => array($this, 'block_sidebar'),
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
        // line 10
        echo "    <br/>
    
    ";
        // line 12
        if ((twig_length_filter($this->env, $this->getContext($context, 'products')) > 0)) {
            // line 13
            echo "        <table>
            <tr><td>Name</td><td>Keyword</td><td>Shortcode</td></tr>
        ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'products'));
            foreach ($context['_seq'] as $context['_key'] => $context['item']) {
                // line 16
                echo "            <tr>
                <td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "name", array(), "any", false), "html");
                echo "</td>
                <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "keyword", array(), "any", false), "html");
                echo "</td>
                <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'item'), "shortcode", array(), "any", false), "html");
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "        No Products for this person
    ";
        }
        // line 25
        echo "    </table>
";
    }

    // line 28
    public function block_sidebar($context, array $blocks = array())
    {
        // line 29
        echo "   ";
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
