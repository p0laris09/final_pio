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

/* themes/custom/templates/block/block--footer.html.twig */
class __TwigTemplate_7ee67fb3043b556eb00fecb7735a4597 extends Template
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
        yield "

<section id=\"\" class=\"footer-section\">
  <div class= \"container reveal active\">
    <div class=\"row\">
      <div class=\"col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12\">
        <h2 class=\"mb-5 text-center\">
        Get in Touch
        </h2>
        <div class=\"row\">
          <div class=\"col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6\">
            <h5>SOCIAL MEDIA SITES</h5>
            <ul class=\"list-group list-group-flush\">
              <li class=\"list-group-item d-flex align-items-center\">
                <img src=\"";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 15, $this->source), "html", null, true);
        yield "/images/4494479.png\" width=\"50px\" alt=\"Facebook Logo\">
                <span class=\"field\" style=\"margin-left: 5px;\">";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_social_media_link_1", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        yield "</span>
              </li>
              <li class=\"list-group-item d-flex align-items-center\">
                <img src=\"";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 19, $this->source), "html", null, true);
        yield "/images/4494479.png\" width=\"50px\" alt=\"Facebook Logo\">
                <span class=\"field\" style=\"margin-left: 5px;\">";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_social_media_link_2", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        yield "</span>
              </li>
            </ul>
          </div>

          <div class=\"col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6\">
            <h5>MAIN OFFICE</h5>
            <ul class=\"list-group\">
              <li class=\"list-group-item\">
                <span class=\"label\">Address:</span>
                <span class=\"field field--name-field-address field--type-string field--label-hidden field__item\">";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_address", [], "any", false, false, true, 30), 30, $this->source), "label"));
        yield "</span>
              </li>
              <li class=\"list-group-item\">
                <span class=\"label\">Email:</span>
                <span class=\"field field--name-field-email field--type-string field--label-hidden field__item\">";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_email", [], "any", false, false, true, 34), 34, $this->source), "label"));
        yield "</span>
              </li>
              <li class=\"list-group-item\">
                <span class=\"label\">Tel. No.:</span>
                <span class=\"field field--name-field-telephone field--type-string field--label-hidden field__item\">";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_telephone", [], "any", false, false, true, 38), 38, $this->source), "label"));
        yield "</span>
              </li>
            </ul>
          </div>
          <div class=\"col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7723.588046768792!2d121.00853806840234!3d14.553768316769302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90d4b58d64f%3A0xaa203a2a94965d64!2sPio%20del%20Pilar%2C%20Makati%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1663489815352!5m2!1sen!2sph\" width=\"100%\" height=\"350\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
          </div>

        <hr>
        <div class=\"text-center\">
          <div class=\"footer-logos\">
            <img src=\"";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 49, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 49, $this->source)), "html", null, true);
        yield "/images/makati_logo.png\" width=\"75px\" alt=\"Makati Logo\">
            <img src=\"";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 50, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 50, $this->source)), "html", null, true);
        yield "/images/pdp_logo.png\" width=\"75px\" alt=\"PDP Logo\">
            <img src=\"";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 51, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 51, $this->source)), "html", null, true);
        yield "/images/sk_pdp_logo.png\" width=\"75px\" alt=\"SK PDP Logo\">
          </div>
          <p>Copyright © ";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " BARANGAY PIO DEL PILAR</p>
        </div>
      </div>
    </div>
  </div>
</section>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["directory", "content", "base_path"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/templates/block/block--footer.html.twig";
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
        return array (  128 => 53,  123 => 51,  119 => 50,  115 => 49,  101 => 38,  94 => 34,  87 => 30,  74 => 20,  70 => 19,  64 => 16,  60 => 15,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/templates/block/block--footer.html.twig", "C:\\xampp\\htdocs\\pio_brgy\\web\\themes\\custom\\templates\\block\\block--footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 15, "raw" => 30, "without" => 30, "date" => 53);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'raw', 'without', 'date'],
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
