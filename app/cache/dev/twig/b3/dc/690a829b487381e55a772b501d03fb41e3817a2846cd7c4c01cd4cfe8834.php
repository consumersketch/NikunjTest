<?php

/* base.html.twig */
class __TwigTemplate_b3dc690a829b487381e55a772b501d03fb41e3817a2846cd7c4c01cd4cfe8834 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "\t\t\t<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.11.2.min.js\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t//alert(\"345353453454\");
\t\t\t\t
\t\t\t\t\t\$(\"#submit\").click(function(){
\t\t\t\t\t\tvar postData = \"text\";
\t\t\t\t\t\tvar client_id = \$(\"#client_id\").val();
\t\t\t\t\t\tvar datefilter = \$(\"#datefilter\").val();
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t//alert(client_id);
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\ttype: \"POST\",
\t\t\t\t\t\t\turl: \"http://localhost:8000/product_invoiceajax?\",
\t\t\t\t\t\t\tdata: \"client_id=\" + client_id + \"&datefilter=\" + datefilter,
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tsuccess: function(responseData) {
\t\t\t\t\t\t\t\t//alert(responseData);
\t\t\t\t\t\t\t\t/* var res = '<table border=\"1\"><tr><td>Client Id</td><td>Invoice Num</td><td>Invoice Date</td><td>Qty</td><td>Price</td></tr>';
\t\t\t\t\t\t\t\tres += responseData;
\t\t\t\t\t\t\t\tres += '</table>';
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t*/
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$(\"#result\").html(responseData);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, status, error) {
\t\t\t\t\t\t\t\t//alert(xhr.responseText);
\t\t\t\t\t\t\t\t\$(\"#result\").html(xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t
\t\t\t</script>
\t\t\t
\t\t\t<script type=\"text/javascript\">
\t\t\t//alert(\"345353453454\");
\t\t\t\t
\t\t\t\t\t\$(\"#client_id\").change(function(){
\t\t\t\t\t\tvar postData = \"text\";
\t\t\t\t\t\tvar client_id = \$(\"#client_id\").val();
\t\t\t\t\t\tvar datefilter = \$(\"#datefilter\").val();
\t\t\t\t\t\t
\t\t\t\t\t\t//alert(client_id);
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\ttype: \"POST\",
\t\t\t\t\t\t\turl: \"http://localhost:8000/product_invoicefillproduct?\",
\t\t\t\t\t\t\tdata: \"client_id=\" + client_id + \"&datefilter=\" + datefilter,
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tsuccess: function(responseData) {
\t\t\t\t\t\t\t\t//alert(responseData);
\t\t\t\t\t\t\t\t/* var res = '<table border=\"1\"><tr><td>Client Id</td><td>Invoice Num</td><td>Invoice Date</td><td>Qty</td><td>Price</td></tr>';
\t\t\t\t\t\t\t\tres += responseData;
\t\t\t\t\t\t\t\tres += '</table>';
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t*/
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$(\"#product_id\").html(responseData);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, status, error) {
\t\t\t\t\t\t\t\t//alert(\"error\");
\t\t\t\t\t\t\t\t//alert(xhr.responseText);
\t\t\t\t\t\t\t\t//\$(\"#product_id\").html('');
\t\t\t\t\t\t\t\t\$(\"#result\").html(xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  69 => 11,  64 => 10,  59 => 6,  53 => 5,  47 => 82,  44 => 11,  42 => 10,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
