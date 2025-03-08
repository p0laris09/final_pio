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

/* themes/custom/templates/node/node--contact-us-content.html.twig */
class __TwigTemplate_f548e02622ded7e2cc8c7cdf500457c7 extends Template
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
        yield "<section id=\"\" class=\"contact-us common_bg\">
    <div class=\"container reveal active\">
        <div class=\"row\">
            <div class=\"row contact-block\">
                <div class=\"col-md-6 contact-left pe-lg-5\">
                    <h3 class=\"mb-sm-4 mb-3\">Contact Info</h3>
                    <p class=\"cont-para mb-sm-5 mb-4\">
                        ";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_message", [], "any", false, false, true, 8), 8, $this->source));
        yield "
                    </p>

                    <div class=\"cont-details\">
                        <div class=\"contact-item\"><i class=\"fas fa-map-marker-alt\"></i>
                        <span class=\"field\">";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_address", [], "any", false, false, true, 13), 13, $this->source), "label"));
        yield "</span></div>
                        <br>
                        <div class=\"contact-item\"><i class=\"fas fa-phone-alt\"></i>
                        <span class=\"field\">";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_telephone", [], "any", false, false, true, 16), 16, $this->source), "label"));
        yield "</span></div>
                        <br>
                        <div class=\"contact-item\"><i class=\"fas fa-envelope-open-text\"></i>
                        <span class=\"field\"><a href=\"mailto:";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_email", [], "any", false, false, true, 19), 0, [], "any", false, false, true, 19), "value", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        yield "\" class=\"mail\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_email", [], "any", false, false, true, 19), 19, $this->source));
        yield "</a></span></div>
                    </div>
                </div>

                <div class=\"col-md-6 contact-right mt-md-0 mt-5 ps-lg-0 ContactPageForm\">
                    <div class=\"custom-webform\">
                        ";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_contact_form", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        yield "
                    </div>
                </div>
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
        return "themes/custom/templates/node/node--contact-us-content.html.twig";
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
        return array (  84 => 25,  73 => 19,  67 => 16,  61 => 13,  53 => 8,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/templates/node/node--contact-us-content.html.twig", "C:\\xampp\\htdocs\\pio_brgy\\web\\themes\\custom\\templates\\node\\node--contact-us-content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("raw" => 8, "without" => 13, "escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['raw', 'without', 'escape'],
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
