<?php declare(strict_types=1);

namespace Chiiya\CodeStyle;

use Rector\CodeQuality\Rector\Assign\CombinedAssignRector;
use Rector\CodeQuality\Rector\BooleanNot\SimplifyDeMorganBinaryRector;
use Rector\CodeQuality\Rector\Catch_\ThrowWithPreviousExceptionRector;
use Rector\CodeQuality\Rector\ClassMethod\InlineArrayReturnAssignRector;
use Rector\CodeQuality\Rector\Expression\InlineIfToExplicitIfRector;
use Rector\CodeQuality\Rector\Foreach_\ForeachToInArrayRector;
use Rector\CodeQuality\Rector\Foreach_\SimplifyForeachToArrayFilterRector;
use Rector\CodeQuality\Rector\Foreach_\UnusedForeachValueToArrayKeysRector;
use Rector\CodeQuality\Rector\FuncCall\ArrayKeysAndInArrayToArrayKeyExistsRector;
use Rector\CodeQuality\Rector\FuncCall\CompactToVariablesRector;
use Rector\CodeQuality\Rector\FuncCall\IsAWithStringWithThirdArgumentRector;
use Rector\CodeQuality\Rector\FuncCall\SimplifyRegexPatternRector;
use Rector\CodeQuality\Rector\FunctionLike\SimplifyUselessVariableRector;
use Rector\CodeQuality\Rector\Identical\BooleanNotIdenticalToNotIdenticalRector;
use Rector\CodeQuality\Rector\Identical\FlipTypeControlToUseExclusiveTypeRector;
use Rector\CodeQuality\Rector\Identical\GetClassToInstanceOfRector;
use Rector\CodeQuality\Rector\Identical\SimplifyArraySearchRector;
use Rector\CodeQuality\Rector\Identical\SimplifyBoolIdenticalTrueRector;
use Rector\CodeQuality\Rector\Identical\SimplifyConditionsRector;
use Rector\CodeQuality\Rector\If_\CombineIfRector;
use Rector\CodeQuality\Rector\If_\ConsecutiveNullCompareReturnsToNullCoalesceQueueRector;
use Rector\CodeQuality\Rector\If_\ExplicitBoolCompareRector;
use Rector\CodeQuality\Rector\If_\ShortenElseIfRector;
use Rector\CodeQuality\Rector\If_\SimplifyIfElseToTernaryRector;
use Rector\CodeQuality\Rector\Switch_\SingularSwitchToIfRector;
use Rector\CodeQuality\Rector\Ternary\ArrayKeyExistsTernaryThenValueToCoalescingRector;
use Rector\CodeQuality\Rector\Ternary\SwitchNegatedTernaryRector;
use Rector\CodeQuality\Rector\Ternary\UnnecessaryTernaryExpressionRector;
use Rector\CodingStyle\Rector\ClassConst\VarConstantCommentRector;
use Rector\CodingStyle\Rector\ClassMethod\MakeInheritedMethodVisibilitySameAsParentRector;
use Rector\CodingStyle\Rector\FuncCall\CallUserFuncArrayToVariadicRector;
use Rector\CodingStyle\Rector\Switch_\BinarySwitchToIfElseRector;
use Rector\Config\RectorConfig;
use Rector\DeadCode\Rector\Assign\RemoveUnusedVariableAssignRector;
use Rector\DeadCode\Rector\ClassMethod\RemoveDeadConstructorRector;
use Rector\DeadCode\Rector\ClassMethod\RemoveDelegatingParentCallRector;
use Rector\DeadCode\Rector\ClassMethod\RemoveUnusedPrivateMethodParameterRector;
use Rector\DeadCode\Rector\ClassMethod\RemoveUnusedPrivateMethodRector;
use Rector\DeadCode\Rector\ClassMethod\RemoveUnusedPromotedPropertyRector;
use Rector\DeadCode\Rector\For_\RemoveDeadContinueRector;
use Rector\DeadCode\Rector\For_\RemoveDeadIfForeachForRector;
use Rector\DeadCode\Rector\Foreach_\RemoveUnusedForeachKeyRector;
use Rector\DeadCode\Rector\If_\RemoveDeadInstanceOfRector;
use Rector\DeadCode\Rector\Property\RemoveUnusedPrivatePropertyRector;
use Rector\EarlyReturn\Rector\Foreach_\ChangeNestedForeachIfsToEarlyContinueRector;
use Rector\EarlyReturn\Rector\If_\ChangeNestedIfsToEarlyReturnRector;
use Rector\Php71\Rector\ClassConst\PublicConstantVisibilityRector;
use Rector\Php71\Rector\TryCatch\MultiExceptionCatchRector;
use Rector\Php74\Rector\Property\TypedPropertyRector;
use Rector\Php80\Rector\Catch_\RemoveUnusedVariableInCatchRector;
use Rector\Php80\Rector\Class_\ClassPropertyAssignToConstructorPromotionRector;
use Rector\Php80\Rector\FunctionLike\UnionTypesRector;
use Rector\Php80\Rector\Identical\StrEndsWithRector;
use Rector\Php80\Rector\Identical\StrStartsWithRector;
use Rector\Php80\Rector\NotIdentical\StrContainsRector;
use Rector\Php80\Rector\Switch_\ChangeSwitchToMatchRector;
use Rector\Php81\Rector\ClassConst\FinalizePublicClassConstantRector;
use Rector\Php81\Rector\ClassMethod\NewInInitializerRector;
use Rector\Php81\Rector\FunctionLike\IntersectionTypesRector;
use Rector\Restoration\Rector\Property\MakeTypedPropertyNullableIfCheckedRector;

return static function (RectorConfig $config): void {
    $config->rules([
        ArrayKeyExistsTernaryThenValueToCoalescingRector::class,
        BooleanNotIdenticalToNotIdenticalRector::class,
        CombineIfRector::class,
        CombinedAssignRector::class,
        CompactToVariablesRector::class,
        ConsecutiveNullCompareReturnsToNullCoalesceQueueRector::class,
        ExplicitBoolCompareRector::class,
        FlipTypeControlToUseExclusiveTypeRector::class,
        ForeachToInArrayRector::class,
        GetClassToInstanceOfRector::class,
        ArrayKeysAndInArrayToArrayKeyExistsRector::class,
        InlineIfToExplicitIfRector::class,
        IsAWithStringWithThirdArgumentRector::class,
        ShortenElseIfRector::class,
        SimplifyArraySearchRector::class,
        SimplifyBoolIdenticalTrueRector::class,
        SimplifyConditionsRector::class,
        SimplifyDeMorganBinaryRector::class,
        SimplifyForeachToArrayFilterRector::class,
        SimplifyIfElseToTernaryRector::class,
        SimplifyRegexPatternRector::class,
        SimplifyUselessVariableRector::class,
        SingularSwitchToIfRector::class,
        SwitchNegatedTernaryRector::class,
        ThrowWithPreviousExceptionRector::class,
        UnnecessaryTernaryExpressionRector::class,
        UnusedForeachValueToArrayKeysRector::class,
        BinarySwitchToIfElseRector::class,
        CallUserFuncArrayToVariadicRector::class,
        MakeInheritedMethodVisibilitySameAsParentRector::class,
        VarConstantCommentRector::class,
        RemoveDeadConstructorRector::class,
        RemoveDeadContinueRector::class,
        RemoveDeadIfForeachForRector::class,
        RemoveDeadInstanceOfRector::class,
        RemoveDelegatingParentCallRector::class,
        RemoveUnusedForeachKeyRector::class,
        RemoveUnusedPrivateMethodParameterRector::class,
        RemoveUnusedPrivateMethodRector::class,
        RemoveUnusedPrivatePropertyRector::class,
        RemoveUnusedPromotedPropertyRector::class,
        RemoveUnusedVariableAssignRector::class,
        ChangeNestedForeachIfsToEarlyContinueRector::class,
        ChangeNestedIfsToEarlyReturnRector::class,
        MultiExceptionCatchRector::class,
        PublicConstantVisibilityRector::class,
        TypedPropertyRector::class,
        ChangeSwitchToMatchRector::class,
        ClassPropertyAssignToConstructorPromotionRector::class,
        RemoveUnusedVariableInCatchRector::class,
        StrContainsRector::class,
        StrEndsWithRector::class,
        StrStartsWithRector::class,
        UnionTypesRector::class,
        FinalizePublicClassConstantRector::class,
        IntersectionTypesRector::class,
        NewInInitializerRector::class,
        MakeTypedPropertyNullableIfCheckedRector::class,
        InlineArrayReturnAssignRector::class,
    ]);
};
