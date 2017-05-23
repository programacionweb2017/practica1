<?php

/* CursoMainBundle:Default:articulos.html.twig */
class __TwigTemplate_e4e13d9e4d06fcb56709abf79f1cb065e8c771e0c51ae691ce6e49b2044ec3b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<h1>Listado de Articulos</h1>
<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Fecha de Creacion</th>
        <th>CampoX</th>
    </tr>
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) ? $context["articulos"] : $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 11
            echo "    <tr>
        <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"), "html", null, true);
            echo "</td>
        <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
            echo "</td>
        <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "created"), "html", null, true);
            echo "</td>
        <td>Articulo fati</td>
            <td>Articulo fati2</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "CursoMainBundle:Default:articulos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 19,  45 => 14,  41 => 13,  37 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
