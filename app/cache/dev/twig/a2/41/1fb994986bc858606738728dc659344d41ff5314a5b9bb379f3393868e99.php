<?php

/* default/index.html.twig */
class __TwigTemplate_a2411fb994986bc858606738728dc659344d41ff5314a5b9bb379f3393868e99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        // line 5
        echo "\t<form id=\"ajaxform\" action=\"/product_invoice\">
\t\t<select id=\"client_id\" name=\"client_id\">
\t\t\t<option value=\"0\">---Select Client---</option>
\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 9
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "clientId", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "clientName", array()), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t</select>
\t\t<select id=\"datefilter\" name=\"datefilter\">
\t\t\t<option value=\"0\">---Date Filter---</option>
\t\t\t<option value=\"1\">Last Month to Date</option>
\t\t\t<option value=\"2\">This Month</option>
\t\t\t<option value=\"3\">This Year</option>
\t\t\t<option value=\"4\">Last Year</option>
\t\t</select>
\t\t<br/><br/>
\t\t<select id=\"product_id\" name=\"product_id\">
\t\t\t<option value=\"0\">---Select Product---</option>
\t\t</select>
\t\t <br/><br/>
  \t\t<input type=\"button\" id=\"submit\" value=\"Submit\">
\t\t<br/><br/>
\t</form> 
<div id=\"result\">

</div>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  50 => 9,  46 => 8,  41 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
