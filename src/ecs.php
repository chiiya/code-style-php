<?php declare(strict_types=1);

namespace Chiiya\CodeStyle;

use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\ForbiddenFunctionsSniff;
use SlevomatCodingStandard\Sniffs\Classes\MethodSpacingSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\RequireMultiLineTernaryOperatorSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\RequireNullSafeObjectOperatorSniff;
use SlevomatCodingStandard\Sniffs\PHP\DisallowDirectMagicInvokeCallSniff;
use SlevomatCodingStandard\Sniffs\Variables\UselessVariableSniff;
use Symplify\CodingStandard\Fixer\ArrayNotation\StandaloneLineInMultilineArrayFixer;
use Symplify\CodingStandard\Fixer\Commenting\ParamReturnAndVarTagMalformsFixer;
use Symplify\CodingStandard\Fixer\Commenting\RemoveUselessDefaultCommentFixer;
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $config): void {
    // Ternary operator has to be reformatted to more lines when the line length exceeds the given limit.
    $config->ruleWithConfiguration(RequireMultiLineTernaryOperatorSniff::class, [
        'minExpressionsLength' => 60,
    ]);
    // Checks that there is a certain number of blank lines between methods.
    $config->ruleWithConfiguration(MethodSpacingSniff::class, [
        'minLinesCount' => 1,
        'maxLinesCount' => 1,
    ]);
    $config->ruleWithConfiguration(ForbiddenFunctionsSniff::class, [
        'forbiddenFunctions' => [
            'compact' => null,
            'dd' => null,
            'dump' => null,
            'var_dump' => null,
            'env' => 'config',
        ],
    ]);
    $config->skip([
        ForbiddenFunctionsSniff::class => ['*/config/*'],
    ]);
    $config->rules([
        // -----------------------
        // Simplify Coding Standard
        // -----------------------
        // Indexed arrays must have 1 item per line.
        StandaloneLineInMultilineArrayFixer::class,
        // Fixes @param, @return, @var and inline @var annotations broken formats.
        ParamReturnAndVarTagMalformsFixer::class,
        // Remove useless PHPStorm-generated to do comments, redundant "Class XY" or "gets service" comments etc.
        RemoveUselessDefaultCommentFixer::class,
        // Array items, method parameters, method call arguments, new arguments should be on same/standalone line to fit line length.
        LineLengthFixer::class,

        // -----------------------
        // Slevomat Coding Standard
        // -----------------------
        // Disallow direct calls of __invoke().
        DisallowDirectMagicInvokeCallSniff::class,
        // Requires using ?-> operator.
        RequireNullSafeObjectOperatorSniff::class,
        // Remove useless variables.
        UselessVariableSniff::class,
    ]);
};
