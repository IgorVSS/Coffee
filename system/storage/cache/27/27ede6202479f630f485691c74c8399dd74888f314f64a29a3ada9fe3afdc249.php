<?php

/* common/dashboard.twig */
class __TwigTemplate_62d45a69f941e776802d1ff0d9c7e0ca461e06c1ae80949e1e7f7934e056f8ef extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" id=\"button-developer\" title=\"";
        // line 6
        echo (isset($context["button_developer"]) ? $context["button_developer"] : null);
        echo "\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-cog\"></i></button>
      </div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_install"]) ? $context["error_install"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\">
      <button type=\"button\" class=\"close pull-right\" data-dismiss=\"alert\">&times;</button>
      <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 20
            echo (isset($context["error_install"]) ? $context["error_install"] : null);
            echo "
    </div>
    ";
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            echo "    <div class=\"row\">
      ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["dashboard_1"]) {
                // line 26
                echo "      ";
                $context["class"] = sprintf("col-lg-%s %s", $this->getAttribute($context["dashboard_1"], "width", array()), "col-md-3 col-sm-6");
                // line 27
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["dashboard_2"]) {
                    // line 28
                    echo "      ";
                    if (($this->getAttribute($context["dashboard_2"], "width", array()) > 3)) {
                        // line 29
                        echo "      ";
                        $context["class"] = sprintf("col-lg-%s %s", $this->getAttribute($context["dashboard_1"], "width", array()), "col-md-12 col-sm-12");
                        // line 30
                        echo "      ";
                    }
                    // line 31
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "      <div class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\">";
                echo $this->getAttribute($context["dashboard_1"], "output", array());
                echo "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard_1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "  </div>
  ";
        // line 37
        echo (isset($context["security"]) ? $context["security"] : null);
        echo "
  <script type=\"text/javascript\"><!--
    \$('#button-developer').on('click', function() {
      \$.ajax({
        url: 'index.php?route=common/developer&user_token=";
        // line 41
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
        dataType: 'html',
        beforeSend: function() {
          \$('#button-developer').button('loading');
        },
        complete: function() {
          \$('#button-developer').button('reset');
        },
        success: function(html) {
          \$('#modal-developer').remove();

          \$('body').prepend('<div id=\"modal-developer\" class=\"modal\">' + html + '</div>');

          \$('#modal-developer').modal('show');
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    });
  //--></script>
</div>
";
        // line 63
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "common/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 63,  136 => 41,  129 => 37,  126 => 36,  119 => 34,  108 => 32,  102 => 31,  99 => 30,  96 => 29,  93 => 28,  88 => 27,  85 => 26,  81 => 25,  78 => 24,  73 => 23,  67 => 20,  63 => 18,  61 => 17,  55 => 13,  44 => 11,  40 => 10,  35 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" id="button-developer" title="{{ button_developer }}" data-loading-text="{{ text_loading }}" class="btn btn-info"><i class="fa fa-cog"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_install %}*/
/*     <div class="alert alert-danger alert-dismissible">*/
/*       <button type="button" class="close pull-right" data-dismiss="alert">&times;</button>*/
/*       <i class="fa fa-exclamation-circle"></i> {{ error_install }}*/
/*     </div>*/
/*     {% endif %}*/
/*     {% for row in rows %}*/
/*     <div class="row">*/
/*       {% for dashboard_1 in row %}*/
/*       {% set class = 'col-lg-%s %s'|format(dashboard_1.width, 'col-md-3 col-sm-6') %}*/
/*       {% for dashboard_2 in row %}*/
/*       {% if dashboard_2.width > 3 %}*/
/*       {% set class = 'col-lg-%s %s'|format(dashboard_1.width, 'col-md-12 col-sm-12') %}*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*       <div class="{{ class }}">{{ dashboard_1.output }}</div>*/
/*       {% endfor %}*/
/*     </div>*/
/*     {% endfor %}*/
/*   </div>*/
/*   {{ security }}*/
/*   <script type="text/javascript"><!--*/
/*     $('#button-developer').on('click', function() {*/
/*       $.ajax({*/
/*         url: 'index.php?route=common/developer&user_token={{ user_token }}',*/
/*         dataType: 'html',*/
/*         beforeSend: function() {*/
/*           $('#button-developer').button('loading');*/
/*         },*/
/*         complete: function() {*/
/*           $('#button-developer').button('reset');*/
/*         },*/
/*         success: function(html) {*/
/*           $('#modal-developer').remove();*/
/* */
/*           $('body').prepend('<div id="modal-developer" class="modal">' + html + '</div>');*/
/* */
/*           $('#modal-developer').modal('show');*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*           alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*       });*/
/*     });*/
/*   //--></script>*/
/* </div>*/
/* {{ footer }}*/
