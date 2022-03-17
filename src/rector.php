<?php

namespace Chiiya\CodeStyle;

use Rector\CodeQuality\Rector\Assign\CombinedAssignRector;
use Rector\CodeQuality\Rector\BooleanNot\SimplifyDeMorganBinaryRector;
use Rector\CodeQuality\Rector\Catch_\ThrowWithPreviousExceptionRector;
use Rector\CodeQuality\Rector\Expression\InlineIfToExplicitIfRector;
use Rector\CodeQuality\Rector\Foreach_\ForeachToInArrayRector;
use Rector\CodeQuality\Rector\Foreach_\SimplifyForeachToArrayFilterRector;
use Rector\CodeQuality\Rector\Foreach_\UnusedForeachValueToArrayKeysRector;
use Rector\CodeQuality\Rector\FuncCall\CompactToVariablesRector;
use Rector\CodeQuality\Rector\FuncCall\InArrayAndArrayKeysToArrayKeyExistsRector;
use Rector\CodeQuality\Rector\FuncCall\IsAWithStringWithThirdArgumentRector;
use Rector\CodeQuality\Rector\FuncCall\SimplifyRegexPatternRector;
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
use Rector\CodeQuality\Rector\Return_\SimplifyUselessVariableRector;
use Rector\CodeQuality\Rector\Switch_\SingularSwitchToIfRector;
use Rector\CodeQuality\Rector\Ternary\ArrayKeyExistsTernaryThenValueToCoalescingRector;
use Rector\CodeQuality\Rector\Ternary\SwitchNegatedTernaryRector;
use Rector\CodeQuality\Rector\Ternary\UnnecessaryTernaryExpressionRector;
use Rector\CodingStyle\Rector\ClassConst\VarConstantCommentRector;
use Rector\CodingStyle\Rector\ClassMethod\MakeInheritedMethodVisibilitySameAsParentRector;
use Rector\CodingStyle\Rector\FuncCall\CallUserFuncArrayToVariadicRector;
use Rector\CodingStyle\Rector\Switch_\BinarySwitchToIfElseRector;
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
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services
        ->set(ArrayKeyExistsTernaryThenValueToCoalescingRector::class)
        ->set(BooleanNotIdenticalToNotIdenticalRector::class)
        ->set(CombineIfRector::class)
        ->set(CombinedAssignRector::class)
        ->set(CompactToVariablesRector::class)
        ->set(ConsecutiveNullCompareReturnsToNullCoalesceQueueRector::class)
        ->set(ExplicitBoolCompareRector::class)
        ->set(FlipTypeControlToUseExclusiveTypeRector::class)
        ->set(ForeachToInArrayRector::class)
        ->set(GetClassToInstanceOfRector::class)
        ->set(InArrayAndArrayKeysToArrayKeyExistsRector::class)
        ->set(InlineIfToExplicitIfRector::class)
        ->set(IsAWithStringWithThirdArgumentRector::class)
        ->set(ShortenElseIfRector::class)
        ->set(SimplifyArraySearchRector::class)
        ->set(SimplifyBoolIdenticalTrueRector::class)
        ->set(SimplifyConditionsRector::class)
        ->set(SimplifyDeMorganBinaryRector::class)
        ->set(SimplifyForeachToArrayFilterRector::class)
        ->set(SimplifyIfElseToTernaryRector::class)
        ->set(SimplifyRegexPatternRector::class)
        ->set(SimplifyUselessVariableRector::class)
        ->set(SingularSwitchToIfRector::class)
        ->set(SwitchNegatedTernaryRector::class)
        ->set(ThrowWithPreviousExceptionRector::class)
        ->set(UnnecessaryTernaryExpressionRector::class)
        ->set(UnusedForeachValueToArrayKeysRector::class)
        ->set(BinarySwitchToIfElseRector::class)
        ->set(CallUserFuncArrayToVariadicRector::class)
        ->set(MakeInheritedMethodVisibilitySameAsParentRector::class)
        ->set(VarConstantCommentRector::class)
        ->set(RemoveDeadConstructorRector::class)
        ->set(RemoveDeadContinueRector::class)
        ->set(RemoveDeadIfForeachForRector::class)
        ->set(RemoveDeadInstanceOfRector::class)
        ->set(RemoveDelegatingParentCallRector::class)
        ->set(RemoveUnusedForeachKeyRector::class)
        ->set(RemoveUnusedPrivateMethodParameterRector::class)
        ->set(RemoveUnusedPrivateMethodRector::class)
        ->set(RemoveUnusedPrivatePropertyRector::class)
        ->set(RemoveUnusedPromotedPropertyRector::class)
        ->set(RemoveUnusedVariableAssignRector::class)
        ->set(ChangeNestedForeachIfsToEarlyContinueRector::class)
        ->set(ChangeNestedIfsToEarlyReturnRector::class)
        ->set(MultiExceptionCatchRector::class)
        ->set(PublicConstantVisibilityRector::class)
        ->set(TypedPropertyRector::class)
        ->set(ChangeSwitchToMatchRector::class)
        ->set(ClassPropertyAssignToConstructorPromotionRector::class)
        ->set(RemoveUnusedVariableInCatchRector::class)
        ->set(StrContainsRector::class)
        ->set(StrEndsWithRector::class)
        ->set(StrStartsWithRector::class)
        ->set(UnionTypesRector::class)
        ->set(FinalizePublicClassConstantRector::class)
        ->set(IntersectionTypesRector::class)
        ->set(NewInInitializerRector::class)
        ->set(MakeTypedPropertyNullableIfCheckedRector::class);
};
