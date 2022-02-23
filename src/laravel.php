<?php

namespace Chiiya\CodeStyle;

use PhpCsFixer\Fixer\Alias\{ArrayPushFixer,
    BacktickToShellExecFixer,
    EregToPregFixer,
    MbStrFunctionsFixer,
    NoAliasFunctionsFixer,
    NoAliasLanguageConstructCallFixer,
    NoMixedEchoPrintFixer,
    PowToExponentiationFixer,
    RandomApiMigrationFixer,
    SetTypeToCastFixer};
use PhpCsFixer\Fixer\ArrayNotation\{
    ArraySyntaxFixer,
    NoMultilineWhitespaceAroundDoubleArrowFixer,
    NoTrailingCommaInSinglelineArrayFixer,
    NoWhitespaceBeforeCommaInArrayFixer,
    NormalizeIndexBraceFixer,
    TrimArraySpacesFixer,
    WhitespaceAfterCommaInArrayFixer
};
use PhpCsFixer\Fixer\Basic\{BracesFixer, EncodingFixer, NonPrintableCharacterFixer, PsrAutoloadingFixer};
use PhpCsFixer\Fixer\Casing\{ConstantCaseFixer,
    LowercaseKeywordsFixer,
    LowercaseStaticReferenceFixer,
    MagicConstantCasingFixer,
    MagicMethodCasingFixer,
    NativeFunctionCasingFixer,
    NativeFunctionTypeDeclarationCasingFixer};
use PhpCsFixer\Fixer\CastNotation\{CastSpacesFixer,
    LowercaseCastFixer,
    ModernizeTypesCastingFixer,
    NoShortBoolCastFixer,
    NoUnsetCastFixer,
    ShortScalarCastFixer};
use PhpCsFixer\Fixer\ClassNotation\{ClassAttributesSeparationFixer,
    ClassDefinitionFixer,
    FinalPublicMethodForAbstractClassFixer,
    NoBlankLinesAfterClassOpeningFixer,
    NoNullPropertyInitializationFixer,
    NoPhp4ConstructorFixer,
    NoUnneededFinalMethodFixer,
    OrderedClassElementsFixer,
    OrderedInterfacesFixer,
    OrderedTraitsFixer,
    ProtectedToPrivateFixer,
    SelfAccessorFixer,
    SelfStaticAccessorFixer,
    SingleClassElementPerStatementFixer,
    VisibilityRequiredFixer};
use PhpCsFixer\Fixer\ClassUsage\DateTimeImmutableFixer;
use PhpCsFixer\Fixer\Comment\{CommentToPhpdocFixer,
    MultilineCommentOpeningClosingFixer,
    NoEmptyCommentFixer,
    NoTrailingWhitespaceInCommentFixer,
    SingleLineCommentStyleFixer};
use PhpCsFixer\Fixer\ControlStructure\{ElseifFixer,
    IncludeFixer,
    NoAlternativeSyntaxFixer,
    NoBreakCommentFixer,
    NoSuperfluousElseifFixer,
    NoTrailingCommaInListCallFixer,
    NoUnneededControlParenthesesFixer,
    NoUnneededCurlyBracesFixer,
    NoUselessElseFixer,
    SimplifiedIfReturnFixer,
    SwitchCaseSemicolonToColonFixer,
    SwitchCaseSpaceFixer,
    SwitchContinueToBreakFixer,
    TrailingCommaInMultilineFixer,
    YodaStyleFixer};
use PhpCsFixer\Fixer\FunctionNotation\{CombineNestedDirnameFixer,
    FopenFlagOrderFixer,
    FopenFlagsFixer,
    FunctionDeclarationFixer,
    FunctionTypehintSpaceFixer,
    ImplodeCallFixer,
    LambdaNotUsedImportFixer,
    MethodArgumentSpaceFixer,
    NoUnreachableDefaultArgumentValueFixer,
    NoUselessSprintfFixer,
    NullableTypeDeclarationForDefaultNullValueFixer,
    RegularCallableCallFixer,
    ReturnTypeDeclarationFixer,
    SingleLineThrowFixer,
    UseArrowFunctionsFixer,
    VoidReturnFixer};
use PhpCsFixer\Fixer\Import\{FullyQualifiedStrictTypesFixer,
    GlobalNamespaceImportFixer,
    NoLeadingImportSlashFixer,
    NoUnusedImportsFixer,
    OrderedImportsFixer,
    SingleLineAfterImportsFixer};
use PhpCsFixer\Fixer\LanguageConstruct\{CombineConsecutiveIssetsFixer,
    CombineConsecutiveUnsetsFixer,
    DeclareEqualNormalizeFixer,
    DirConstantFixer,
    ErrorSuppressionFixer,
    ExplicitIndirectVariableFixer,
    FunctionToConstantFixer,
    IsNullFixer,
    NoUnsetOnPropertyFixer,
    SingleSpaceAfterConstructFixer};
use PhpCsFixer\Fixer\ListNotation\ListSyntaxFixer;
use PhpCsFixer\Fixer\NamespaceNotation\{BlankLineAfterNamespaceFixer,
    CleanNamespaceFixer,
    NoLeadingNamespaceWhitespaceFixer,
    SingleBlankLineBeforeNamespaceFixer};
use PhpCsFixer\Fixer\Naming\NoHomoglyphNamesFixer;
use PhpCsFixer\Fixer\Operator\{BinaryOperatorSpacesFixer,
    ConcatSpaceFixer,
    IncrementStyleFixer,
    LogicalOperatorsFixer,
    NewWithBracesFixer,
    NotOperatorWithSuccessorSpaceFixer,
    ObjectOperatorWithoutWhitespaceFixer,
    OperatorLinebreakFixer,
    StandardizeIncrementFixer,
    StandardizeNotEqualsFixer,
    TernaryOperatorSpacesFixer,
    TernaryToElvisOperatorFixer,
    TernaryToNullCoalescingFixer,
    UnaryOperatorSpacesFixer};
use PhpCsFixer\Fixer\Phpdoc\{GeneralPhpdocAnnotationRemoveFixer,
    GeneralPhpdocTagRenameFixer,
    NoBlankLinesAfterPhpdocFixer,
    NoEmptyPhpdocFixer,
    NoSuperfluousPhpdocTagsFixer,
    PhpdocAddMissingParamAnnotationFixer,
    PhpdocAlignFixer,
    PhpdocAnnotationWithoutDotFixer,
    PhpdocIndentFixer,
    PhpdocInlineTagNormalizerFixer,
    PhpdocLineSpanFixer,
    PhpdocNoAccessFixer,
    PhpdocNoAliasTagFixer,
    PhpdocNoEmptyReturnFixer,
    PhpdocNoPackageFixer,
    PhpdocNoUselessInheritdocFixer,
    PhpdocOrderByValueFixer,
    PhpdocOrderFixer,
    PhpdocReturnSelfReferenceFixer,
    PhpdocScalarFixer,
    PhpdocSeparationFixer,
    PhpdocSingleLineVarSpacingFixer,
    PhpdocSummaryFixer,
    PhpdocTagCasingFixer,
    PhpdocTagTypeFixer,
    PhpdocTrimConsecutiveBlankLineSeparationFixer,
    PhpdocTrimFixer,
    PhpdocTypesFixer,
    PhpdocTypesOrderFixer,
    PhpdocVarAnnotationCorrectOrderFixer,
    PhpdocVarWithoutNameFixer};
use PhpCsFixer\Fixer\PhpTag\{BlankLineAfterOpeningTagFixer,
    EchoTagSyntaxFixer,
    FullOpeningTagFixer,
    LinebreakAfterOpeningTagFixer,
    NoClosingTagFixer};
use PhpCsFixer\Fixer\PhpUnit\{PhpUnitConstructFixer,
    PhpUnitDedicateAssertFixer,
    PhpUnitDedicateAssertInternalTypeFixer,
    PhpUnitFqcnAnnotationFixer,
    PhpUnitInternalClassFixer,
    PhpUnitMethodCasingFixer,
    PhpUnitMockFixer,
    PhpUnitMockShortWillReturnFixer,
    PhpUnitNamespacedFixer,
    PhpUnitNoExpectationAnnotationFixer,
    PhpUnitSetUpTearDownVisibilityFixer,
    PhpUnitSizeClassFixer,
    PhpUnitStrictFixer,
    PhpUnitTestAnnotationFixer,
    PhpUnitTestCaseStaticMethodCallsFixer,
    PhpUnitTestClassRequiresCoversFixer};
use PhpCsFixer\Fixer\ReturnNotation\{NoUselessReturnFixer, ReturnAssignmentFixer, SimplifiedNullReturnFixer};
use PhpCsFixer\Fixer\Semicolon\{MultilineWhitespaceBeforeSemicolonsFixer,
    NoEmptyStatementFixer,
    NoSinglelineWhitespaceBeforeSemicolonsFixer,
    SemicolonAfterInstructionFixer,
    SpaceAfterSemicolonFixer};
use PhpCsFixer\Fixer\Strict\{StrictComparisonFixer, StrictParamFixer};
use PhpCsFixer\Fixer\StringNotation\{EscapeImplicitBackslashesFixer,
    ExplicitStringVariableFixer,
    HeredocToNowdocFixer,
    NoBinaryStringFixer,
    NoTrailingWhitespaceInStringFixer,
    SimpleToComplexStringVariableFixer,
    SingleQuoteFixer,
    StringLineEndingFixer};
use PhpCsFixer\Fixer\Whitespace\{ArrayIndentationFixer,
    BlankLineBeforeStatementFixer,
    CompactNullableTypehintFixer,
    HeredocIndentationFixer,
    IndentationTypeFixer,
    LineEndingFixer,
    MethodChainingIndentationFixer,
    NoExtraBlankLinesFixer,
    NoSpacesAroundOffsetFixer,
    NoSpacesInsideParenthesisFixer,
    NoTrailingWhitespaceFixer,
    NoWhitespaceInBlankLineFixer,
    SingleBlankLineAtEofFixer};
use SlevomatCodingStandard\Sniffs\Classes\ClassStructureSniff;
use SlevomatCodingStandard\Sniffs\Classes\ModernClassNameReferenceSniff;
use SlevomatCodingStandard\Sniffs\Classes\RequireConstructorPropertyPromotionSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\DisallowEmptySniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\RequireShortTernaryOperatorSniff;
use SlevomatCodingStandard\Sniffs\Functions\StrictCallSniff;
use SlevomatCodingStandard\Sniffs\Functions\UnusedInheritedVariablePassedToClosureSniff;
use SlevomatCodingStandard\Sniffs\Operators\RequireCombinedAssignmentOperatorSniff;
use SlevomatCodingStandard\Sniffs\PHP\{DisallowDirectMagicInvokeCallSniff, UselessSemicolonSniff};
use SlevomatCodingStandard\Sniffs\Variables\UselessVariableSniff;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\CodingStandard\Fixer\Annotation\RemovePHPStormAnnotationFixer;
use Symplify\CodingStandard\Fixer\ArrayNotation\{ArrayOpenerAndCloserNewlineFixer, StandaloneLineInMultilineArrayFixer};
use Symplify\CodingStandard\Fixer\Commenting\{ParamReturnAndVarTagMalformsFixer, RemoveUselessDefaultCommentFixer};
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;
use Symplify\CodingStandard\Fixer\Naming\StandardizeHereNowDocKeywordFixer;
use Symplify\CodingStandard\Fixer\Spacing\{SpaceAfterCommaHereNowDocFixer, StandaloneLinePromotedPropertyFixer};
use Symplify\CodingStandard\Fixer\Strict\BlankLineAfterStrictTypesFixer;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services
        // Converts simple usages of `array_push($x, $y);` to `$x[] = $y;`
        ->set(ArrayPushFixer::class)
        // Converts backtick execution operators to `shell_exec` calls.
        ->set(BacktickToShellExecFixer::class)
        // Replace deprecated `ereg` regular expression functions with `preg`.
        ->set(EregToPregFixer::class)
        // Replace non multibyte-safe functions with corresponding mb function.
        ->set(MbStrFunctionsFixer::class)
        // Use master functions instead of aliases.
        ->set(NoAliasFunctionsFixer::class)
        // Use master language constructs instead of aliases.
        ->set(NoAliasLanguageConstructCallFixer::class)
        // Either language construct `print` or `echo` should be used, not mixed.
        ->set(NoMixedEchoPrintFixer::class)
        // Converts `pow` to the `**` operator.
        ->set(PowToExponentiationFixer::class)
        // Replaces `rand`, `srand`, `getrandmax` functions calls with their `mt_*` analogs.
        ->set(RandomApiMigrationFixer::class)
        // Use cast instead of `settype`.
        ->set(SetTypeToCastFixer::class)
        // PHP arrays should be declared using `[]` instead of `array()`.
        ->set(ArraySyntaxFixer::class)->call('configure', [[
            'syntax' => 'short',
        ]])
        // Operator `=>` should not be surrounded by multi-line whitespaces.
        ->set(NoMultilineWhitespaceAroundDoubleArrowFixer::class)
        // Array index should always be written by using square braces.
        ->set(NormalizeIndexBraceFixer::class)
        // PHP single-line arrays should not have trailing comma.
        ->set(NoTrailingCommaInSinglelineArrayFixer::class)
        // In array declaration, there MUST NOT be a whitespace before each comma.
        ->set(NoWhitespaceBeforeCommaInArrayFixer::class)
        // Arrays should be formatted like function/method arguments, without leading or trailing single line space.
        ->set(TrimArraySpacesFixer::class)
        // In array declaration, there must be a whitespace after each comma.
        ->set(WhitespaceAfterCommaInArrayFixer::class)
        // The body of each structure MUST be enclosed by braces. Braces should be properly placed. Body of braces should be properly indented.
        ->set(BracesFixer::class)->call('configure', [[
            'allow_single_line_closure' => true,
        ]])
        // PHP code MUST use only UTF-8 without BOM (remove BOM).
        ->set(EncodingFixer::class)
        // Remove Zero-width space (ZWSP), Non-breaking space (NBSP) and other invisible unicode symbols.
        ->set(NonPrintableCharacterFixer::class)
        // Classes must be in a path that matches their namespace, be at least one namespace deep and the class name should match the file name.
        ->set(PsrAutoloadingFixer::class)
        // The PHP constants `true`, `false`, and `null` must be written using the correct casing (lower).
        ->set(ConstantCaseFixer::class)
        // PHP keywords MUST be in lower case.
        ->set(LowercaseKeywordsFixer::class)
        // Class static references `self`, `static` and `parent` MUST be in lower case.
        ->set(LowercaseStaticReferenceFixer::class)
        // Magic constants should be referred to using the correct casing.
        ->set(MagicConstantCasingFixer::class)
        // Magic method definitions and calls must be using the correct casing.
        ->set(MagicMethodCasingFixer::class)
        // Function defined by PHP should be called using the correct casing.
        ->set(NativeFunctionCasingFixer::class)
        // Native type hints for functions should use the correct case.
        ->set(NativeFunctionTypeDeclarationCasingFixer::class)
        // A single space or none should be between cast and variable.
        ->set(CastSpacesFixer::class)
        // Casts should be written in lower case.
        ->set(LowercaseCastFixer::class)
        // Replace `intval`, `floatval`, `doubleval`, `strval` and `boolval` function calls with according type casting operator.
        ->set(ModernizeTypesCastingFixer::class)
        // Short cast `bool` using double exclamation mark should not be used.
        ->set(NoShortBoolCastFixer::class)
        // Variables must be set `null` instead of using `(unset)` casting.
        ->set(NoUnsetCastFixer::class)
        // Cast `(boolean)` and `(integer)` should be written as `(bool)` and `(int)`, `(double)` and `(real)` as `(float)`, `(binary)` as `(string)`.
        ->set(ShortScalarCastFixer::class)
        // Class, trait and interface elements must be separated with one or none blank line.
        ->set(ClassAttributesSeparationFixer::class)
        // Whitespace around the keywords of a class, trait or interfaces definition should be one space.
        ->set(ClassDefinitionFixer::class)->call('configure', [[
            'single_line' => true,
        ]])
        // All `public` methods of `abstract` classes should be `final`.
        ->set(FinalPublicMethodForAbstractClassFixer::class)
        // There should be no empty lines after class opening brace.
        ->set(NoBlankLinesAfterClassOpeningFixer::class)
        // Properties must not be explicitly initialized with `null` except when they have a type declaration (PHP 7.4).
        ->set(NoNullPropertyInitializationFixer::class)
        // Convert PHP4-style constructors to `__construct`.
        ->set(NoPhp4ConstructorFixer::class)
        // A `final` class must not have `final` methods and `private` methods must not be `final`.
        ->set(NoUnneededFinalMethodFixer::class)
        // Orders the interfaces in an `implements` or `interface extends` clause.
        ->set(OrderedInterfacesFixer::class)
        // Trait `use` statements must be sorted alphabetically.
        ->set(OrderedTraitsFixer::class)
        // Converts `protected` variables and methods to `private` where possible.
        ->set(ProtectedToPrivateFixer::class)
        // Inside class or interface element `self` should be preferred to the class name itself.
        ->set(SelfAccessorFixer::class)
        // Inside a `final` class or anonymous class `self` should be preferred to `static`.
        ->set(SelfStaticAccessorFixer::class)
        // There must not be more than one property or constant declared per statement.
        ->set(SingleClassElementPerStatementFixer::class)
        // Visibility must be declared on all properties and methods; `abstract` and `final` must be declared before the visibility; `static` must be declared after the visibility.
        ->set(VisibilityRequiredFixer::class)
        // Class `DateTimeImmutable` should always be used instead of `DateTime`.
        ->set(DateTimeImmutableFixer::class)
        // Comments with annotation should be docblock when used on structural elements.
        ->set(CommentToPhpdocFixer::class)
        // DocBlocks must start with two asterisks, multiline comments must start with a single asterisk, after the opening slash. Both must end with a single asterisk before the closing slash.
        ->set(MultilineCommentOpeningClosingFixer::class)
        // There should not be any empty comments.
        ->set(NoEmptyCommentFixer::class)
        // There must be no trailing spaces inside comment or PHPDoc.
        ->set(NoTrailingWhitespaceInCommentFixer::class)
        // Single-line comments and multi-line comments with only one line of actual content should use the `//` syntax.
        ->set(SingleLineCommentStyleFixer::class)
        // The keyword `elseif` should be used instead of `else if` so that all control keywords look like single words.
        ->set(ElseifFixer::class)
        // Include/Require and file path should be divided with a single space. File path should not be placed under brackets.
        ->set(IncludeFixer::class)
        // Replace control structure alternative syntax to use braces
        ->set(NoAlternativeSyntaxFixer::class)
        // There must be a comment when fall-through is intentional in a non-empty case body.
        ->set(NoBreakCommentFixer::class)
        // Replaces superfluous `elseif` with `if`.
        ->set(NoSuperfluousElseifFixer::class)
        // Remove trailing commas in list function calls.
        ->set(NoTrailingCommaInListCallFixer::class)
        // Removes unneeded parentheses around control statements.
        ->set(NoUnneededControlParenthesesFixer::class)
        // Removes unneeded curly braces that are superfluous and aren\'t part of a control structure\'s body.
        ->set(NoUnneededCurlyBracesFixer::class)->call('configure', [[
            'namespaces' => true,
        ]])
        // There should not be useless `else` cases.
        ->set(NoUselessElseFixer::class)
        // Simplify `if` control structures that return the boolean result of their condition.
        ->set(SimplifiedIfReturnFixer::class)
        // A case should be followed by a colon and not a semicolon.
        ->set(SwitchCaseSemicolonToColonFixer::class)
        // Removes extra spaces between colon and case value.
        ->set(SwitchCaseSpaceFixer::class)
        // Switch case must not be ended with `continue` but with `break`.
        ->set(SwitchContinueToBreakFixer::class)
        // Multi-line arrays, arguments list and parameters list must have a trailing comma.
        ->set(TrailingCommaInMultilineFixer::class)
        ->call('configure', [[
            'elements' => [TrailingCommaInMultilineFixer::ELEMENTS_ARRAYS],
        ]])
        // Write conditions in non-Yoda style.
        ->set(YodaStyleFixer::class)->call('configure', [[
            'equal' => false,
            'identical' => false,
            'less_and_greater' => false,
        ]])
        // Replace multiple nested calls of `dirname` by only one call with second `$level` parameter. Requires PHP >= 7.0.
        ->set(CombineNestedDirnameFixer::class)
        // Order the flags in `fopen` calls, `b` and `t` must be last.
        ->set(FopenFlagOrderFixer::class)
        // The flags in `fopen` calls must omit `t`, and `b` must be omitted or included consistently.
        ->set(FopenFlagsFixer::class)
        // Spaces should be properly placed in a function declaration.
        ->set(FunctionDeclarationFixer::class)
        // Ensure single space between function\'s argument and its typehint.
        ->set(FunctionTypehintSpaceFixer::class)
        // Function `implode` must be called with 2 arguments in the documented order.
        ->set(ImplodeCallFixer::class)
        // Logical NOT operators (!) should have one trailing whitespace.
        ->set(NotOperatorWithSuccessorSpaceFixer::class)
        // Lambda must not import variables it doesn't use.
        ->set(LambdaNotUsedImportFixer::class)
        // In method arguments and method call, there must not be a space before each comma and there must be one space after each comma. Argument lists may be split across multiple lines, where each subsequent line is indented once. When doing so, the first item in the list must be on the next line, and there must be only one argument per line.
        ->set(MethodArgumentSpaceFixer::class)
        // In function arguments there must not be arguments with default values before non-default ones.
        ->set(NoUnreachableDefaultArgumentValueFixer::class)
        // There must be no `sprintf` calls with only the first argument.
        ->set(NoUselessSprintfFixer::class)
        // Removes `?` before type declarations for parameters with a default `null` value.
        ->set(NullableTypeDeclarationForDefaultNullValueFixer::class)
        // Callables must be called without using `call_user_func*` when possible.
        ->set(RegularCallableCallFixer::class)
        // There should be one or no space before colon, and one space after it in return type declarations, according to configuration.
        ->set(ReturnTypeDeclarationFixer::class)
        // Throwing exception must be done in single line.
        ->set(SingleLineThrowFixer::class)
        // Anonymous functions with one-liner return statement must use arrow functions.
        ->set(UseArrowFunctionsFixer::class)
        // Add `void` return type to functions with missing or empty return statements, but priority is given to `@return` annotations. Requires PHP >= 7.1.
        ->set(VoidReturnFixer::class)
        // Transforms imported FQCN parameters and return types in function arguments to short version.
        ->set(FullyQualifiedStrictTypesFixer::class)
        // Imports or fully qualifies global classes/functions/constants.
        ->set(GlobalNamespaceImportFixer::class)
        // Remove leading slashes in `use` clauses.
        ->set(NoLeadingImportSlashFixer::class)
        // Unused `use` statements must be removed.
        ->set(NoUnusedImportsFixer::class)
        // Order `use` statements.
        ->set(OrderedImportsFixer::class)
        // Each namespace use must go on its own line and there must be one blank line after the use statements block.
        ->set(SingleLineAfterImportsFixer::class)
        // Using `isset($var) &&` multiple times should be done in one call.
        ->set(CombineConsecutiveIssetsFixer::class)
        // Calling `unset` on multiple items should be done in one call.
        ->set(CombineConsecutiveUnsetsFixer::class)
        // Equal sign in declare statement should be surrounded by spaces or not following configuration.
        ->set(DeclareEqualNormalizeFixer::class)
        // Replaces `dirname(__FILE__)` expression with equivalent `__DIR__` constant.
        ->set(DirConstantFixer::class)
        // Error control operator should be added to deprecation notices and/or removed from other cases.
        ->set(ErrorSuppressionFixer::class)
        // Add curly braces to indirect variables to make them clear to understand. Requires PHP >= 7.0.
        ->set(ExplicitIndirectVariableFixer::class)
        // Replace core functions calls returning constants with the constants.
        ->set(FunctionToConstantFixer::class)
        // Replaces `is_null($var)` expression with `null === $var`.
        ->set(IsNullFixer::class)
        // Properties should be set to `null` instead of using `unset`.
        ->set(NoUnsetOnPropertyFixer::class)
        // Ensures a single space after language constructs.
        ->set(SingleSpaceAfterConstructFixer::class)
        // List (`array` destructuring) assignment should be declared using the configured syntax. Requires PHP >= 7.1.
        ->set(ListSyntaxFixer::class)
        // There must be one blank line after the namespace declaration.
        ->set(BlankLineAfterNamespaceFixer::class)
        // Namespace must not contain spacing, comments or PHPDoc.
        ->set(CleanNamespaceFixer::class)
        // The namespace declaration line shouldn't contain leading whitespace.
        ->set(NoLeadingNamespaceWhitespaceFixer::class)
        // There should be exactly one blank line before a namespace declaration.
        ->set(SingleBlankLineBeforeNamespaceFixer::class)
        // Replace accidental usage of homoglyphs (non ascii characters) in names.
        ->set(NoHomoglyphNamesFixer::class)
        // Binary operators should be surrounded by space as configured.
        ->set(BinaryOperatorSpacesFixer::class)->call('configure', [[
            'operators' => [
                '|' => 'no_space',
            ],
        ]])
        // Concatenation should be spaced according configuration.
        ->set(ConcatSpaceFixer::class)->call('configure', [[
            'spacing' => 'none',
        ]])
        // Pre- or post-increment and decrement operators should be used if possible.
        ->set(IncrementStyleFixer::class)
        // Use `&&` and `||` logical operators instead of `and` and `or`.
        ->set(LogicalOperatorsFixer::class)
        // All instances created with new keyword must be followed by braces.
        ->set(NewWithBracesFixer::class)
        // There should not be space before or after object operators `->` and `?->`.
        ->set(ObjectOperatorWithoutWhitespaceFixer::class)
        // Operators - when multiline - must always be at the beginning or at the end of the line.
        ->set(OperatorLinebreakFixer::class)
        // Increment and decrement operators should be used if possible.
        ->set(StandardizeIncrementFixer::class)
        // Replace all `<>` with `!=`.
        ->set(StandardizeNotEqualsFixer::class)
        // Standardize spaces around ternary operator.
        ->set(TernaryOperatorSpacesFixer::class)
        // Use the Elvis operator `?:` where possible.
        ->set(TernaryToElvisOperatorFixer::class)
        // Use `null` coalescing operator `??` where possible.
        ->set(TernaryToNullCoalescingFixer::class)
        // Unary operators should be placed adjacent to their operands.
        ->set(UnaryOperatorSpacesFixer::class)
        // Configured annotations should be omitted from PHPDoc.
        ->set(GeneralPhpdocAnnotationRemoveFixer::class)
        // Renames PHPDoc tags.
        ->set(GeneralPhpdocTagRenameFixer::class)
        // There should not be blank lines between docblock and the documented element.
        ->set(NoBlankLinesAfterPhpdocFixer::class)
        // There should not be empty PHPDoc blocks.
        ->set(NoEmptyPhpdocFixer::class)
        // Removes `@param`, `@return` and `@var` tags that don\'t provide any useful information.
        ->set(NoSuperfluousPhpdocTagsFixer::class)->call('configure', [[
            'allow_mixed' => true,
        ]])
        // PHPDoc should contain `@param` for all params.
        ->set(PhpdocAddMissingParamAnnotationFixer::class)
        // All items of the given phpdoc tags must be aligned properly.
        ->set(PhpdocAlignFixer::class)->call('configure', [[
            'align' => 'left',
            'tags' => ['method', 'param', 'property', 'return', 'throws', 'type', 'var'],
        ]])
        // PHPDoc annotation descriptions should not be a sentence.
        ->set(PhpdocAnnotationWithoutDotFixer::class)
        // Docblocks should have the same indentation as the documented subject.
        ->set(PhpdocIndentFixer::class)
        // Fixes PHPDoc inline tags.
        ->set(PhpdocInlineTagNormalizerFixer::class)
        // Changes doc blocks from single to multi line, or reversed. Works for class constants, properties and methods only.
        ->set(PhpdocLineSpanFixer::class)
        // `@access` annotations should be omitted from PHPDoc.
        ->set(PhpdocNoAccessFixer::class)
        // No alias PHPDoc tags should be used.
        ->set(PhpdocNoAliasTagFixer::class)
        // `@return void` and `@return null` annotations should be omitted from PHPDoc.
        ->set(PhpdocNoEmptyReturnFixer::class)
        // `@package` and `@subpackage` annotations should be omitted from PHPDoc.
        ->set(PhpdocNoPackageFixer::class)
        // Class that does not inherit must not have `@inheritdoc` tags.
        ->set(PhpdocNoUselessInheritdocFixer::class)
        // Order phpdoc tags by value.
        ->set(PhpdocOrderByValueFixer::class)
        // Annotations in PHPDoc should be ordered so that `@param` annotations come first, then `@throws` annotations, then `@return` annotations.
        ->set(PhpdocOrderFixer::class)
        // The type of `@return` annotations of methods returning a reference to itself must the configured one.
        ->set(PhpdocReturnSelfReferenceFixer::class)
        // Scalar types should always be written in the same form. `int` not `integer`, `bool` not `boolean`, `float` not `real` or `double`.
        ->set(PhpdocScalarFixer::class)
        // Annotations in PHPDoc should be grouped together so that annotations of the same type immediately follow each other, and annotations of a different type are separated by a single blank line.
        ->set(PhpdocSeparationFixer::class)
        // Single line `@var` PHPDoc should have proper spacing.
        ->set(PhpdocSingleLineVarSpacingFixer::class)
        // PHPDoc summary should end in either a full stop, exclamation mark, or question mark.
        ->set(PhpdocSummaryFixer::class)
        // Fixes casing of PHPDoc tags.
        ->set(PhpdocTagCasingFixer::class)
        // Forces PHPDoc tags to be either regular annotations or inline.
        ->set(PhpdocTagTypeFixer::class)
        // Removes extra blank lines after summary and after description in PHPDoc.
        ->set(PhpdocTrimConsecutiveBlankLineSeparationFixer::class)
        // PHPDoc should start and end with content, excluding the very first and last line of the docblocks.
        ->set(PhpdocTrimFixer::class)
        // The correct case must be used for standard PHP types in PHPDoc.
        ->set(PhpdocTypesFixer::class)
        // Sorts PHPDoc types.
        ->set(PhpdocTypesOrderFixer::class)
        // `@var` and `@type` annotations must have type and name in the correct order.
        ->set(PhpdocVarAnnotationCorrectOrderFixer::class)
        // `@var` and `@type` annotations of classy properties should not contain the name.
        ->set(PhpdocVarWithoutNameFixer::class)
        // Ensure there is no code on the same line as the PHP open tag and it is followed by a blank line.
        ->set(BlankLineAfterOpeningTagFixer::class)
        // Replaces short-echo `<?=` with long format `<?php echo`/`<?php print` syntax, or vice-versa.
        ->set(EchoTagSyntaxFixer::class)
        // PHP code must use the long `<?php` tags or short-echo `<?=` tags and not other tag variations.
        ->set(FullOpeningTagFixer::class)
        // Ensure there is no code on the same line as the PHP open tag.
        ->set(LinebreakAfterOpeningTagFixer::class)
        // The closing tag must be omitted from files containing only PHP.
        ->set(NoClosingTagFixer::class)
        // PHPUnit assertion method calls like `->assertSame(true, $foo)` should be written with dedicated method like `->assertTrue($foo)`.
        ->set(PhpUnitConstructFixer::class)
        // PHPUnit assertions like `assertInternalType`, `assertFileExists`, should be used over `assertTrue`.
        ->set(PhpUnitDedicateAssertFixer::class)
        // PHPUnit assertions like `assertIsArray` should be used over `assertInternalType`.
        ->set(PhpUnitDedicateAssertInternalTypeFixer::class)
        // PHPUnit annotations should be a FQCNs including a root namespace.
        ->set(PhpUnitFqcnAnnotationFixer::class)
        // All PHPUnit test classes should be marked as internal.
        ->set(PhpUnitInternalClassFixer::class)
        // Enforce camel (or snake) case for PHPUnit test methods, following configuration.
        ->set(PhpUnitMethodCasingFixer::class)
        // Usages of `->getMock` and `->getMockWithoutInvokingTheOriginalConstructor` methods MUST be replaced by `->createMock` or `->createPartialMock` methods.
        ->set(PhpUnitMockFixer::class)
        // Usage of PHPUnit\'s mock e.g. `->will($this->returnValue(..))` must be replaced by its shorter equivalent such as `->willReturn(...)`.
        ->set(PhpUnitMockShortWillReturnFixer::class)
        // PHPUnit classes MUST be used in namespaced version, e.g. `\PHPUnit\Framework\TestCase` instead of `\PHPUnit_Framework_TestCase`.
        ->set(PhpUnitNamespacedFixer::class)
        // Usages of `@expectedException*` annotations MUST be replaced by `->setExpectedException*` methods.
        ->set(PhpUnitNoExpectationAnnotationFixer::class)
        // Changes the visibility of the `setUp()` and `tearDown()` functions of PHPUnit to `protected`, to match the PHPUnit TestCase.
        ->set(PhpUnitSetUpTearDownVisibilityFixer::class)
        // All PHPUnit test cases should have `@small`, `@medium` or `@large` annotation to enable run time limits.
        ->set(PhpUnitSizeClassFixer::class)
        // PHPUnit methods like `assertSame` should be used instead of `assertEquals`.
        ->set(PhpUnitStrictFixer::class)
        // Adds or removes @test annotations from tests, following configuration.
        ->set(PhpUnitTestAnnotationFixer::class)
        // Calls to `PHPUnit\Framework\TestCase` static methods must all be of the same type, either `$this->`, `self::` or `static::`.
        ->set(PhpUnitTestCaseStaticMethodCallsFixer::class)
        // Adds a default `@coversNothing` annotation to PHPUnit test classes that have no `@covers*` annotation.
        ->set(PhpUnitTestClassRequiresCoversFixer::class)
        // There should not be an empty `return` statement at the end of a function.
        ->set(NoUselessReturnFixer::class)
        // Local, dynamic and directly referenced variables should not be assigned and directly returned by a function or method.
        ->set(ReturnAssignmentFixer::class)
        // A return statement wishing to return `void` should not return `null`.
        ->set(SimplifiedNullReturnFixer::class)
        // Forbid multi-line whitespace before the closing semicolon or move the semicolon to the new line for chained calls.
        ->set(MultilineWhitespaceBeforeSemicolonsFixer::class)
        // Remove useless (semicolon) statements.
        ->set(NoEmptyStatementFixer::class)
        // Single-line whitespace before closing semicolon are prohibited.
        ->set(NoSinglelineWhitespaceBeforeSemicolonsFixer::class)
        // Instructions must be terminated with a semicolon.
        ->set(SemicolonAfterInstructionFixer::class)
        // Fix whitespace after a semicolon.
        ->set(SpaceAfterSemicolonFixer::class)
        // Comparisons should be strict.
        ->set(StrictComparisonFixer::class)
        // Functions should be used with `$strict` param set to `true`.
        ->set(StrictParamFixer::class)
        // Escape implicit backslashes in strings and heredocs to ease the understanding of which are special chars interpreted by PHP and which not.
        ->set(EscapeImplicitBackslashesFixer::class)
        // Converts implicit variables into explicit ones in double-quoted strings or heredoc syntax.
        ->set(ExplicitStringVariableFixer::class)
        // Convert `heredoc` to `nowdoc` where possible.
        ->set(HeredocToNowdocFixer::class)
        // There should not be a binary flag before strings.
        ->set(NoBinaryStringFixer::class)
        // There must be no trailing whitespace in strings.
        ->set(NoTrailingWhitespaceInStringFixer::class)
        // Converts explicit variables in double-quoted strings and heredoc syntax from simple to complex format (`${` to `{$`).
        ->set(SimpleToComplexStringVariableFixer::class)
        // Convert double quotes to single quotes for simple strings.
        ->set(SingleQuoteFixer::class)
        // All multi-line strings must use correct line ending.
        ->set(StringLineEndingFixer::class)
        // Each element of an array must be indented exactly once.
        ->set(ArrayIndentationFixer::class)
        // An empty line feed must precede any configured statement.
        ->set(BlankLineBeforeStatementFixer::class)
        // Remove extra spaces in a nullable typehint.
        ->set(CompactNullableTypehintFixer::class)
        // Heredoc/nowdoc content must be properly indented.
        ->set(HeredocIndentationFixer::class)
        // Code must use configured indentation type.
        ->set(IndentationTypeFixer::class)
        // All PHP files must use same line ending.
        ->set(LineEndingFixer::class)
        // Method chaining MUST be properly indented. Method chaining with different levels of indentation is not supported.
        ->set(MethodChainingIndentationFixer::class)
        // Removes extra blank lines and/or blank lines following configuration.
        ->set(NoExtraBlankLinesFixer::class)->call('configure', [[
            'tokens' => ['curly_brace_block', 'extra', 'parenthesis_brace_block', 'square_brace_block', 'throw', 'use'],
        ]])
        // There MUST NOT be spaces around offset braces.
        ->set(NoSpacesAroundOffsetFixer::class)
        // There MUST NOT be a space after the opening parenthesis. There MUST NOT be a space before the closing parenthesis.
        ->set(NoSpacesInsideParenthesisFixer::class)
        // Remove trailing whitespace at the end of non-blank lines.
        ->set(NoTrailingWhitespaceFixer::class)
        // Remove trailing whitespace at the end of blank lines.
        ->set(NoWhitespaceInBlankLineFixer::class)
        // A PHP file without end tag must always end with a single empty line feed.
        ->set(SingleBlankLineAtEofFixer::class)

        // Remove "Created by PhpStorm" annotations.
        ->set(RemovePHPStormAnnotationFixer::class)
        // Indexed PHP array opener [ and closer ] must be on own line.
        ->set(ArrayOpenerAndCloserNewlineFixer::class)
        // Indexed arrays must have 1 item per line.
        ->set(StandaloneLineInMultilineArrayFixer::class)
        // Fixes @param, @return, @var and inline @var annotations broken formats.
        ->set(ParamReturnAndVarTagMalformsFixer::class)
        // Remove useless PHPStorm-generated to do comments, redundant "Class XY" or "gets service" comments etc.
        ->set(RemoveUselessDefaultCommentFixer::class)
        // Array items, method parameters, method call arguments, new arguments should be on same/standalone line to fit line length.
        ->set(LineLengthFixer::class)
        // Use configured nowdoc and heredoc keyword.
        ->set(StandardizeHereNowDocKeywordFixer::class)
        // Add space after nowdoc and heredoc keyword, to prevent bugs on PHP 7.2 and lower.
        ->set(SpaceAfterCommaHereNowDocFixer::class)
        // Promoted property should be on standalone line.
        ->set(StandaloneLinePromotedPropertyFixer::class)
        // Require strict type declarations to be followed by empty line.
        ->set(BlankLineAfterStrictTypesFixer::class)

        // Require usage of short ternary operator.
        ->set(RequireShortTernaryOperatorSniff::class)
        // Disable unused variables to closures.
        ->set(UnusedInheritedVariablePassedToClosureSniff::class)
        // Require use of "%s" operator instead of "=" and "%s".
        ->set(RequireCombinedAssignmentOperatorSniff::class)
        // Disallow direct calls of __invoke().
        ->set(DisallowDirectMagicInvokeCallSniff::class)
        // Checks that class/trait/interface members are in the correct order.
        ->set(ClassStructureSniff::class)
        // Requires use of constructor property promotion.
        ->set(RequireConstructorPropertyPromotionSniff::class)
        // Some functions have $strict parameter. This sniff reports calls to these functions without the parameter or with $strict = false.
        ->set(StrictCallSniff::class)
        // Disallows use of empty().
        ->set(DisallowEmptySniff::class)
        // Reports use of __CLASS__, get_parent_class(), get_called_class(), get_class() and get_class($this). Class names should be referenced via ::class constant when possible.
        ->set(ModernClassNameReferenceSniff::class)
        // Remove useless semicolons.
        ->set(UselessSemicolonSniff::class)
        // Remove useless variables.
        ->set(UselessVariableSniff::class);
};
