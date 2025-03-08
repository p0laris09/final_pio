<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/templates/node/node--services-content.html.twig */
class __TwigTemplate_93a4aeeb7657e50bfb84e6b63a6a666c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<section id=\"\" class=\"service-offer-banner common_bg\">
  <div class=\"container\">
    <div class=\"row service-offer\">
      <div class=\"col-12 col-md-4 service-offer-img text-center\">
        <img src=\"https://brgypiodelpilarmakati.com.ph/assets/images/services/id.svg\" alt=\"\">
      </div>
      <div class=\"col-12 col-md-8 service-offer-info\">
        <h5>Barangay ID</h5>
        <p>
          <b>New Applicant</b>
          ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_brgyid_req", [], "any", true, true, true, 11)) {
            // line 12
            yield "            <ol>
              ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_brgyid_req", [], "any", false, false, true, 13)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess && in_array($__internal_compile_0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_0["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_brgyid_req", [], "any", false, false, true, 13), "#items", [], "array", false, false, true, 13)));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 14
                yield "                <li>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = $context["item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess && in_array($__internal_compile_1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_1["value"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "value", [], "array", false, false, true, 14)), 14, $this->source), "html", null, true);
                yield "</li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "            </ol>
          ";
        }
        // line 18
        yield "          <button type=\"button\" class=\"btn btn-primary\">
            <i class=\"fas fa-file-download\"></i> Download Application Form
          </button>
        </p>
      </div>
    </div>

    <div class=\"row service-offer\">
      <div class=\"col-12 col-md-4 service-offer-img text-center order-lg-last\">
        <img src=\"https://brgypiodelpilarmakati.com.ph/assets/images/services/docs.svg\" alt=\"\">
      </div>
      <div class=\"col-12 col-md-8 service-offer-info\">
        <h5>Barangay Clearance</h5>
        <p>
          ";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_clearance_req", [], "any", true, true, true, 32)) {
            // line 33
            yield "            <ol>
              ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_clearance_req", [], "any", false, false, true, 34)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess && in_array($__internal_compile_2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_2["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_clearance_req", [], "any", false, false, true, 34), "#items", [], "array", false, false, true, 34)));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                yield "                <li>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = $context["item"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess && in_array($__internal_compile_3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_3["value"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "value", [], "array", false, false, true, 35)), 35, $this->source), "html", null, true);
                yield "</li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "            </ol>
          ";
        }
        // line 39
        yield "          <button type=\"button\" class=\"btn btn-primary\">
            <i class=\"fas fa-file-download\"></i> Download Application Form
          </button>
        </p>
      </div>
    </div>
  </div>
</section>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/templates/node/node--services-content.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  116 => 39,  112 => 37,  103 => 35,  99 => 34,  96 => 33,  94 => 32,  78 => 18,  74 => 16,  65 => 14,  61 => 13,  58 => 12,  56 => 11,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/templates/node/node--services-content.html.twig", "C:\\xampp\\htdocs\\pio_brgy\\web\\themes\\custom\\templates\\node\\node--services-content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11, "for" => 13);
        static $filters = array("escape" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
