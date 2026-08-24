<?php declare(strict_types=1);

namespace Chiiya\CodeStyle;

use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\ForbiddenFunctionsSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\RequireMultiLineTernaryOperatorSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\RequireNullSafeObjectOperatorSniff;
use SlevomatCodingStandard\Sniffs\PHP\DisallowDirectMagicInvokeCallSniff;
use Symplify\CodingStandard\Fixer\ArrayNotation\StandaloneLineInMultilineArrayFixer;
use Symplify\CodingStandard\Fixer\Commenting\AddMissingParamNameFixer;
use Symplify\CodingStandard\Fixer\Commenting\AddMissingVarNameFixer;
use Symplify\CodingStandard\Fixer\Commenting\DoubleAsteriskInlineVarFixer;
use Symplify\CodingStandard\Fixer\Commenting\FixParamNameTypoFixer;
use Symplify\CodingStandard\Fixer\Commenting\FixTagTypoFixer;
use Symplify\CodingStandard\Fixer\Commenting\MergeDocBlockStartFixer;
use Symplify\CodingStandard\Fixer\Commenting\RemoveDeadVarThisFixer;
use Symplify\CodingStandard\Fixer\Commenting\RemoveParamNameReferenceFixer;
use Symplify\CodingStandard\Fixer\Commenting\RemoveSuperfluousReturnNameFixer;
use Symplify\CodingStandard\Fixer\Commenting\RemoveSuperfluousVarNameFixer;
use Symplify\CodingStandard\Fixer\Commenting\SwitchedTypeAndNameFixer;
use Symplify\CodingStandard\Fixer\Commenting\TypeToVarTagFixer;
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    // Ternary operator has to be reformatted to more lines when the line length exceeds the given limit.
    ->withConfiguredRule(RequireMultiLineTernaryOperatorSniff::class, [
        'minExpressionsLength' => 60,
    ])
    ->withConfiguredRule(ForbiddenFunctionsSniff::class, [
        'forbiddenFunctions' => [
            'compact' => null,
            'dd' => null,
            'dump' => null,
            'var_dump' => null,
            'env' => 'config',
        ],
    ])
    ->withSkip([
        ForbiddenFunctionsSniff::class => ['*/config/*', '*/Config/*'],
    ])
    ->withRules([
        // -----------------------
        // Symplify Coding Standard
        // -----------------------
        // Indexed arrays must have 1 item per line.
        StandaloneLineInMultilineArrayFixer::class,
        // Fixes @param, @return, @var and inline @var annotations broken formats
        // (successors of the deprecated ParamReturnAndVarTagMalformsFixer).
        AddMissingParamNameFixer::class,
        AddMissingVarNameFixer::class,
        DoubleAsteriskInlineVarFixer::class,
        FixParamNameTypoFixer::class,
        FixTagTypoFixer::class,
        MergeDocBlockStartFixer::class,
        RemoveDeadVarThisFixer::class,
        RemoveParamNameReferenceFixer::class,
        RemoveSuperfluousReturnNameFixer::class,
        RemoveSuperfluousVarNameFixer::class,
        SwitchedTypeAndNameFixer::class,
        TypeToVarTagFixer::class,
        // Array items, method parameters, method call arguments, new arguments should be on same/standalone line to fit line length.
        LineLengthFixer::class,

        // -----------------------
        // Slevomat Coding Standard
        // -----------------------
        // Disallow direct calls of __invoke().
        DisallowDirectMagicInvokeCallSniff::class,
        // Requires using ?-> operator.
        RequireNullSafeObjectOperatorSniff::class,
    ]);
