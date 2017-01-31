<?php

/* themes/diplom/templates/layout/page.html.twig */
class __TwigTemplate_fbad9330b47327f1ac441bad101dc3d2f5f0300fb5bdbe39a60053a4a12182a0 extends Twig_Template
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
        $tags = array("if" => 199);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 46
        echo "<div class=\"layout-container\">
  <header role=\"banner\">
    <div class=\"section header\">
    <div class=\"main-menu\">
        ";
        // line 50
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
        echo "
    </div>
    <div class=\"logo\">
        ";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "site_logo", array()), "html", null, true));
        echo "
    </div>
    </div>
  </header>


    <div class=\"promo-slider\" id=\"promo-slider\">
     <a class=\"prev\" href=\"#\">
      Влево
     </a>
     <a class=\"next\" href=\"#\">
      Вправо
     </a>
     <div class=\"promo-slider-list\">
      <div class=\"slider-wrap-item\">
       <div class=\"slider-item image visible-mobile\">
        <div class=\"item-content\">
         <img alt=\"\" height=\"496\" src=\"/sites/default/files/inline-images/csm_IMG_1027_1_6ff5a7a7c9.jpg\" width=\"950\"/>
        </div>
       </div>
       <div class=\"slider-item\" style=\"background: #0a8ecd;\">
        <div class=\"item-content\">
         <h2>
          <a href=\"/entrant-info/software-engineering/\" style=\"color:white;\">
           Программная инженерия
          </a>
         </h2>
         <p>
          Количество бюджетных мест:
          <b>
           86
          </b>
         </p>
         <p>
          Вступительные испытания:
         </p>
         <p>
          — Информатика и ИКТ
         </p>
         <p>
          — Математика
         </p>
         <p>
          — Русский язык
         </p>
        </div>
       </div>
       <div class=\"slider-item image hidden-mobile\">
        <div class=\"item-content\" style=\"background: url(/sites/default/files/inline-images/csm_IMG_1027_1_2e7da22b67.jpg) no-repeat 0 0;\">
        </div>
       </div>
      </div>
      <div class=\"slider-wrap-item\">
       <div class=\"slider-item image visible-mobile\">
        <div class=\"item-content\">
         <img alt=\"\" height=\"496\" src=\"/sites/default/files/inline-images/csm_P7101597_1_e8ba9f8855.jpg\" width=\"950\"/>
        </div>
       </div>
       <div class=\"slider-item\" style=\"background: #0a8ecd;\">
        <div class=\"item-content\">
         <h2>
          <a href=\"/entrant-info/fire-safety/\" style=\"color:white;\">
           Пожарная безопасность
          </a>
         </h2>
         <p>
          Количество бюджетных мест:
          <b>
           10
          </b>
         </p>
         <p>
          Вступительные испытания:
         </p>
         <p>
          — Физика
         </p>
         <p>
          — Математика
         </p>
         <p>
          — Русский язык
         </p>
        </div>
       </div>
       <div class=\"slider-item image hidden-mobile\">
        <div class=\"item-content\" style=\"background: url(/sites/default/files/inline-images/csm_P7101597_1_79cbb202e6.jpg) no-repeat 0 0;\">
        </div>
       </div>
      </div>
      <div class=\"slider-wrap-item\">
       <div class=\"slider-item image visible-mobile\">
        <div class=\"item-content\">
         <img alt=\"\" height=\"496\" src=\"/sites/default/files/inline-images/csm_technosphere-safety_8c8472cacf.jpg\" width=\"950\"/>
        </div>
       </div>
       <div class=\"slider-item\" style=\"background: #0a8ecd;\">
        <div class=\"item-content\">
         <h2>
          <a href=\"/entrant-info/technosphere-safety/\" style=\"color:white;\">
           Техносферная безопасность
          </a>
         </h2>
         <p>
          Количество бюджетных мест:
          <b>
           30
          </b>
         </p>
         <p>
          Вступительные испытания:
         </p>
         <p>
          — Физика
         </p>
         <p>
          — Математика
         </p>
         <p>
          — Русский язык
         </p>
        </div>
       </div>
       <div class=\"slider-item image hidden-mobile\">
        <div class=\"item-content\" style=\"background: url(/sites/default/files/inline-images/csm_technosphere-safety_d74ad0ec72.jpg) no-repeat 0 0;\">
        </div>
       </div>
      </div>
     </div>
     <div class=\"hidden-mobile\" id=\"promo-slider-loading\">
      <span class=\"ajax-loading\">
      </span>
     </div>
    </div>
  ";
        // line 187
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "

  ";
        // line 189
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "
  ";
        // line 190
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 194
        echo "
    <div class=\"layout-content\">
      ";
        // line 196
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
    </div>";
        // line 198
        echo "
    ";
        // line 199
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 200
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 201
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 204
        echo "
    ";
        // line 205
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 206
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 207
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 210
        echo "
  </main>

  ";
        // line 213
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 214
            echo "    <footer role=\"contentinfo\">
      ";
            // line 215
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 218
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/diplom/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 218,  253 => 215,  250 => 214,  248 => 213,  243 => 210,  237 => 207,  234 => 206,  232 => 205,  229 => 204,  223 => 201,  220 => 200,  218 => 199,  215 => 198,  211 => 196,  207 => 194,  201 => 190,  197 => 189,  192 => 187,  55 => 53,  49 => 50,  43 => 46,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* <div class="layout-container">*/
/*   <header role="banner">*/
/*     <div class="section header">*/
/*     <div class="main-menu">*/
/*         {{ page.main_menu }}*/
/*     </div>*/
/*     <div class="logo">*/
/*         {{ page.site_logo }}*/
/*     </div>*/
/*     </div>*/
/*   </header>*/
/* */
/* */
/*     <div class="promo-slider" id="promo-slider">*/
/*      <a class="prev" href="#">*/
/*       Влево*/
/*      </a>*/
/*      <a class="next" href="#">*/
/*       Вправо*/
/*      </a>*/
/*      <div class="promo-slider-list">*/
/*       <div class="slider-wrap-item">*/
/*        <div class="slider-item image visible-mobile">*/
/*         <div class="item-content">*/
/*          <img alt="" height="496" src="/sites/default/files/inline-images/csm_IMG_1027_1_6ff5a7a7c9.jpg" width="950"/>*/
/*         </div>*/
/*        </div>*/
/*        <div class="slider-item" style="background: #0a8ecd;">*/
/*         <div class="item-content">*/
/*          <h2>*/
/*           <a href="/entrant-info/software-engineering/" style="color:white;">*/
/*            Программная инженерия*/
/*           </a>*/
/*          </h2>*/
/*          <p>*/
/*           Количество бюджетных мест:*/
/*           <b>*/
/*            86*/
/*           </b>*/
/*          </p>*/
/*          <p>*/
/*           Вступительные испытания:*/
/*          </p>*/
/*          <p>*/
/*           — Информатика и ИКТ*/
/*          </p>*/
/*          <p>*/
/*           — Математика*/
/*          </p>*/
/*          <p>*/
/*           — Русский язык*/
/*          </p>*/
/*         </div>*/
/*        </div>*/
/*        <div class="slider-item image hidden-mobile">*/
/*         <div class="item-content" style="background: url(/sites/default/files/inline-images/csm_IMG_1027_1_2e7da22b67.jpg) no-repeat 0 0;">*/
/*         </div>*/
/*        </div>*/
/*       </div>*/
/*       <div class="slider-wrap-item">*/
/*        <div class="slider-item image visible-mobile">*/
/*         <div class="item-content">*/
/*          <img alt="" height="496" src="/sites/default/files/inline-images/csm_P7101597_1_e8ba9f8855.jpg" width="950"/>*/
/*         </div>*/
/*        </div>*/
/*        <div class="slider-item" style="background: #0a8ecd;">*/
/*         <div class="item-content">*/
/*          <h2>*/
/*           <a href="/entrant-info/fire-safety/" style="color:white;">*/
/*            Пожарная безопасность*/
/*           </a>*/
/*          </h2>*/
/*          <p>*/
/*           Количество бюджетных мест:*/
/*           <b>*/
/*            10*/
/*           </b>*/
/*          </p>*/
/*          <p>*/
/*           Вступительные испытания:*/
/*          </p>*/
/*          <p>*/
/*           — Физика*/
/*          </p>*/
/*          <p>*/
/*           — Математика*/
/*          </p>*/
/*          <p>*/
/*           — Русский язык*/
/*          </p>*/
/*         </div>*/
/*        </div>*/
/*        <div class="slider-item image hidden-mobile">*/
/*         <div class="item-content" style="background: url(/sites/default/files/inline-images/csm_P7101597_1_79cbb202e6.jpg) no-repeat 0 0;">*/
/*         </div>*/
/*        </div>*/
/*       </div>*/
/*       <div class="slider-wrap-item">*/
/*        <div class="slider-item image visible-mobile">*/
/*         <div class="item-content">*/
/*          <img alt="" height="496" src="/sites/default/files/inline-images/csm_technosphere-safety_8c8472cacf.jpg" width="950"/>*/
/*         </div>*/
/*        </div>*/
/*        <div class="slider-item" style="background: #0a8ecd;">*/
/*         <div class="item-content">*/
/*          <h2>*/
/*           <a href="/entrant-info/technosphere-safety/" style="color:white;">*/
/*            Техносферная безопасность*/
/*           </a>*/
/*          </h2>*/
/*          <p>*/
/*           Количество бюджетных мест:*/
/*           <b>*/
/*            30*/
/*           </b>*/
/*          </p>*/
/*          <p>*/
/*           Вступительные испытания:*/
/*          </p>*/
/*          <p>*/
/*           — Физика*/
/*          </p>*/
/*          <p>*/
/*           — Математика*/
/*          </p>*/
/*          <p>*/
/*           — Русский язык*/
/*          </p>*/
/*         </div>*/
/*        </div>*/
/*        <div class="slider-item image hidden-mobile">*/
/*         <div class="item-content" style="background: url(/sites/default/files/inline-images/csm_technosphere-safety_d74ad0ec72.jpg) no-repeat 0 0;">*/
/*         </div>*/
/*        </div>*/
/*       </div>*/
/*      </div>*/
/*      <div class="hidden-mobile" id="promo-slider-loading">*/
/*       <span class="ajax-loading">*/
/*       </span>*/
/*      </div>*/
/*     </div>*/
/*   {{ page.breadcrumb }}*/
/* */
/*   {{ page.highlighted }}*/
/*   {{ page.help }}*/
/* */
/*   <main role="main">*/
/*     <a id="main-content" tabindex="-1"></a>{# link is in html.html.twig #}*/
/* */
/*     <div class="layout-content">*/
/*       {{ page.content }}*/
/*     </div>{# /.layout-content #}*/
/* */
/*     {% if page.sidebar_first %}*/
/*       <aside class="layout-sidebar-first" role="complementary">*/
/*         {{ page.sidebar_first }}*/
/*       </aside>*/
/*     {% endif %}*/
/* */
/*     {% if page.sidebar_second %}*/
/*       <aside class="layout-sidebar-second" role="complementary">*/
/*         {{ page.sidebar_second }}*/
/*       </aside>*/
/*     {% endif %}*/
/* */
/*   </main>*/
/* */
/*   {% if page.footer %}*/
/*     <footer role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endif %}*/
/* */
/* </div>{# /.layout-container #}*/
/* */
