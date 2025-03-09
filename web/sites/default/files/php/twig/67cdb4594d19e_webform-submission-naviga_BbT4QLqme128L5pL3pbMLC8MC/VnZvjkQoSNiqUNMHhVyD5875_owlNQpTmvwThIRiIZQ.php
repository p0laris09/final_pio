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

/* modules/contrib/webform/templates/webform-submission-navigation.html.twig */
class __TwigTemplate_78f0dcd9c3e5a4e455f3763ffbe7409a extends Template
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
        // line 17
        if ((($context["prev_url"] ?? null) || ($context["next_url"] ?? null))) {
            // line 18
            yield "  <nav id=\"webform-submission-navigation-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webform_id"] ?? null), 18, $this->source), "html", null, true);
            yield "\" class=\"webform-submission-navigation\" role=\"navigation\" aria-labelledby=\"webform-submission-label-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webform_id"] ?? null), 18, $this->source), "html", null, true);
            yield "\">
    <h2 class=\"visually-hidden\" id=\"webform-submission-label-";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webform_id"] ?? null), 19, $this->source), "html", null, true);
            yield "\">Submission navigation links for ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webform_title"] ?? null), 19, $this->source), "html", null, true);
            yield "</h2>
    <ul class=\"webform-submission-pager\">
      ";
            // line 21
            if (($context["prev_url"] ?? null)) {
                // line 22
                yield "        <li class=\"webform-submission-pager__item webform-submission-pager__item--previous\">
          <a href=\"";
                // line 23
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prev_url"] ?? null), 23, $this->source), "html", null, true);
                yield "\" rel=\"prev\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                yield "\"><b>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("‹"));
                yield "</b> ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous submission"));
                yield "</a>
        </li>
      ";
            }
            // line 26
            yield "      ";
            if (($context["next_url"] ?? null)) {
                // line 27
                yield "        <li class=\"webform-submission-pager__item webform-submission-pager__item--next\">
          <a href=\"";
                // line 28
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_url"] ?? null), 28, $this->source), "html", null, true);
                yield "\" rel=\"next\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next submission"));
                yield " <b>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("›"));
                yield "</b></a>
        </li>
      ";
            }
            // line 31
            yield "    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["prev_url", "next_url", "webform_id", "webform_title"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/webform/templates/webform-submission-navigation.html.twig";
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
        return array (  95 => 31,  83 => 28,  80 => 27,  77 => 26,  65 => 23,  62 => 22,  60 => 21,  53 => 19,  46 => 18,  44 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/webform/templates/webform-submission-navigation.html.twig", "C:\\xampp\\htdocs\\pio_brgy\\web\\modules\\contrib\\webform\\templates\\webform-submission-navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17);
        static $filters = array("escape" => 18, "t" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
