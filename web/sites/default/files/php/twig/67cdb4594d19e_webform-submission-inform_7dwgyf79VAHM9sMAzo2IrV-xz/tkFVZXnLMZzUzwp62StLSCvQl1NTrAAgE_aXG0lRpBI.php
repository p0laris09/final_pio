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

/* modules/contrib/webform/templates/webform-submission-information.html.twig */
class __TwigTemplate_a512fd6e9012dd601a6637af4af1cc21 extends Template
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
        // line 33
        if (($context["submissions_view"] ?? null)) {
            // line 34
            yield "  <div><b>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submission Number"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["serial"] ?? null), 34, $this->source), "html", null, true);
            yield "</div>
  <div><b>";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submission ID"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sid"] ?? null), 35, $this->source), "html", null, true);
            yield "</div>
  <div><b>";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submission UUID"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uuid"] ?? null), 36, $this->source), "html", null, true);
            yield "</div>
  ";
            // line 37
            if (($context["uri"] ?? null)) {
                // line 38
                yield "    <div><b>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submission URI"));
                yield ":</b> ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uri"] ?? null), 38, $this->source), "html", null, true);
                yield "</div>
  ";
            }
            // line 40
            yield "  ";
            if (($context["token_view"] ?? null)) {
                // line 41
                yield "    <div><b>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submission View"));
                yield ":</b> ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["token_view"] ?? null), 41, $this->source), "html", null, true);
                yield "</div>
  ";
            }
            // line 43
            yield "  ";
            if (($context["token_update"] ?? null)) {
                // line 44
                yield "    <div><b>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submission Update"));
                yield ":</b> ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["token_update"] ?? null), 44, $this->source), "html", null, true);
                yield "</div>
  ";
            }
            // line 46
            yield "  ";
            if (($context["token_delete"] ?? null)) {
                // line 47
                yield "    <div><b>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submission Delete"));
                yield ":</b> ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["token_delete"] ?? null), 47, $this->source), "html", null, true);
                yield "</div>
  ";
            }
            // line 49
            yield "  <br />
  <div><b>";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Created"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 50, $this->source), "html", null, true);
            yield "</div>
  <div><b>";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Completed"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["completed"] ?? null), 51, $this->source), "html", null, true);
            yield "</div>
  <div><b>";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Changed"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["changed"] ?? null), 52, $this->source), "html", null, true);
            yield "</div>
  <br />
  <div><b>";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Remote IP address"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remote_addr"] ?? null), 54, $this->source), "html", null, true);
            yield "</div>
  <div><b>";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submitted by"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_by"] ?? null), 55, $this->source), "html", null, true);
            yield "</div>
  <div><b>";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Language"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 56, $this->source), "html", null, true);
            yield "</div>
  <br />
  <div><b>";
            // line 58
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Is draft"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["is_draft"] ?? null), 58, $this->source), "html", null, true);
            yield "</div>
  ";
            // line 59
            if (($context["current_page"] ?? null)) {
                // line 60
                yield "    <div><b>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Current page"));
                yield ":</b> ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_page"] ?? null), 60, $this->source), "html", null, true);
                yield "</div>
  ";
            }
            // line 62
            yield "  <div><b>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Webform"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webform"] ?? null), 62, $this->source), "html", null, true);
            yield "</div>
  ";
            // line 63
            if (($context["submitted_to"] ?? null)) {
                // line 64
                yield "    <div><b>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submitted to"));
                yield ":</b> ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_to"] ?? null), 64, $this->source), "html", null, true);
                yield "</div>
  ";
            }
            // line 66
            yield "  ";
            if (((($context["sticky"] ?? null) || ($context["locked"] ?? null)) || ($context["notes"] ?? null))) {
                // line 67
                yield "    <br />
    ";
                // line 68
                if (($context["sticky"] ?? null)) {
                    // line 69
                    yield "      <div><b>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Flagged"));
                    yield ":</b> ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky"] ?? null), 69, $this->source), "html", null, true);
                    yield "</div>
    ";
                }
                // line 71
                yield "    ";
                if (($context["locked"] ?? null)) {
                    // line 72
                    yield "      <div><b>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Locked"));
                    yield ":</b> ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["locked"] ?? null), 72, $this->source), "html", null, true);
                    yield "</div>
    ";
                }
                // line 74
                yield "    ";
                if (($context["notes"] ?? null)) {
                    // line 75
                    yield "      <div><b>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Notes"));
                    yield ":</b><br/>
      <pre>";
                    // line 76
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["notes"] ?? null), 76, $this->source), "html", null, true);
                    yield "</pre>
      </div>
    ";
                }
                // line 79
                yield "  ";
            }
        } else {
            // line 81
            yield "  <div><b>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submission Number"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["serial"] ?? null), 81, $this->source), "html", null, true);
            yield "</div>
  <div><b>";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Created"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 82, $this->source), "html", null, true);
            yield "</div>
";
        }
        // line 84
        yield "
";
        // line 85
        if (($context["delete"] ?? null)) {
            // line 86
            yield "  <br/>
  <div>";
            // line 87
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["delete"] ?? null), 87, $this->source), "html", null, true);
            yield "</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["submissions_view", "serial", "sid", "uuid", "uri", "token_view", "token_update", "token_delete", "created", "completed", "changed", "remote_addr", "submitted_by", "language", "is_draft", "current_page", "webform", "submitted_to", "sticky", "locked", "notes", "delete"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/webform/templates/webform-submission-information.html.twig";
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
        return array (  249 => 87,  246 => 86,  244 => 85,  241 => 84,  234 => 82,  227 => 81,  223 => 79,  217 => 76,  212 => 75,  209 => 74,  201 => 72,  198 => 71,  190 => 69,  188 => 68,  185 => 67,  182 => 66,  174 => 64,  172 => 63,  165 => 62,  157 => 60,  155 => 59,  149 => 58,  142 => 56,  136 => 55,  130 => 54,  123 => 52,  117 => 51,  111 => 50,  108 => 49,  100 => 47,  97 => 46,  89 => 44,  86 => 43,  78 => 41,  75 => 40,  67 => 38,  65 => 37,  59 => 36,  53 => 35,  46 => 34,  44 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/webform/templates/webform-submission-information.html.twig", "C:\\xampp\\htdocs\\pio_brgy\\web\\modules\\contrib\\webform\\templates\\webform-submission-information.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 33);
        static $filters = array("t" => 34, "escape" => 34);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
