<?php declare(strict_types=1);

namespace Chiiya\CodeStyle;

use SlevomatCodingStandard\Sniffs\Classes\MethodSpacingSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\RequireMultiLineTernaryOperatorSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\RequireNullSafeObjectOperatorSniff;
use SlevomatCodingStandard\Sniffs\PHP\DisallowDirectMagicInvokeCallSniff;
use SlevomatCodingStandard\Sniffs\Variables\UselessVariableSniff;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\CodingStandard\Fixer\ArrayNotation\StandaloneLineInMultilineArrayFixer;
use Symplify\CodingStandard\Fixer\Commenting\ParamReturnAndVarTagMalformsFixer;
use Symplify\CodingStandard\Fixer\Commenting\RemoveUselessDefaultCommentFixer;
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services
        // -----------------------
        // Simplify Coding Standard
        // -----------------------
        // Indexed arrays must have 1 item per line.
        ->set(StandaloneLineInMultilineArrayFixer::class)
        // Fixes @param, @return, @var and inline @var annotations broken formats.
        ->set(ParamReturnAndVarTagMalformsFixer::class)
        // Remove useless PHPStorm-generated to do comments, redundant "Class XY" or "gets service" comments etc.
        ->set(RemoveUselessDefaultCommentFixer::class)
        // Array items, method parameters, method call arguments, new arguments should be on same/standalone line to fit line length.
        ->set(LineLengthFixer::class)

        // -----------------------
        // Slevomat Coding Standard
        // -----------------------
        // Disallow direct calls of __invoke().
        ->set(DisallowDirectMagicInvokeCallSniff::class)
        // Requires using ?-> operator.
        ->set(RequireNullSafeObjectOperatorSniff::class)
        // Ternary operator has to be reformatted to more lines when the line length exceeds the given limit.
        ->set(RequireMultiLineTernaryOperatorSniff::class)->property('minExpressionsLength', 60)
        // Checks that there is a certain number of blank lines between methods.
        ->set(MethodSpacingSniff::class)->property('minLinesCount', 1)->property('maxLinesCount', 1)
        // Remove useless variables.
        ->set(UselessVariableSniff::class);
};
