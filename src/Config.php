<?php declare(strict_types=1);

namespace Chiiya\CodeStyle;

use PhpCsFixer\Config as BaseConfig;
use PhpCsFixer\ConfigInterface;
use PhpCsFixerCustomFixers\Fixer\ConstructorEmptyBracesFixer;
use PhpCsFixerCustomFixers\Fixer\DeclareAfterOpeningTagFixer;
use PhpCsFixerCustomFixers\Fixer\MultilineCommentOpeningClosingAloneFixer;
use PhpCsFixerCustomFixers\Fixer\MultilinePromotedPropertiesFixer;
use PhpCsFixerCustomFixers\Fixer\NoPhpStormGeneratedCommentFixer;
use PhpCsFixerCustomFixers\Fixer\NoSuperfluousConcatenationFixer;
use PhpCsFixerCustomFixers\Fixer\NoUselessCommentFixer;
use PhpCsFixerCustomFixers\Fixer\NoUselessParenthesisFixer;
use PhpCsFixerCustomFixers\Fixer\PhpdocTypesCommaSpacesFixer;
use PhpCsFixerCustomFixers\Fixer\PhpUnitAssertArgumentsOrderFixer;
use PhpCsFixerCustomFixers\Fixer\PhpUnitDedicatedAssertFixer;
use PhpCsFixerCustomFixers\Fixers;

class Config extends BaseConfig
{
    public function __construct($name = 'Chiiya')
    {
        parent::__construct($name);

        $this->registerCustomFixers(new Fixers);
    }

    public function setRules(array $rules): ConfigInterface
    {
        $default = $this->rules();

        foreach (array_keys($default) as $key) {
            if ($rules[$key] ?? false) {
                unset($rules[$key]);
                $rules = array_merge($default[$key], $rules);
            }
        }

        return parent::setRules($rules);
    }

    protected function rules(): array
    {
        return [
            '@Chiiya' => [
                '@PhpCsFixer' => true,
                'no_whitespace_before_comma_in_array' => [
                    'after_heredoc' => true,
                ],
                'braces' => [
                    'allow_single_line_closure' => true,
                ],
                'octal_notation' => true,
                'class_attributes_separation' => [
                    'elements' => [
                        'const' => 'only_if_meta',
                        'method' => 'one',
                        'property' => 'only_if_meta',
                        'trait_import' => 'none',
                        'case' => 'none',
                    ],
                ],
                'ordered_class_elements' => [
                    'order' => [
                        'use_trait',
                        'case',
                        'property_public_static',
                        'property_protected_static',
                        'property_private_static',
                        'constant_public',
                        'constant_protected',
                        'constant_private',
                        'property_public',
                        'property_protected',
                        'property_private',
                        'construct',
                        'method_public_static',
                        'method_protected_static',
                        'method_private_static',
                        'method_public',
                        'method_protected',
                        'method_private',
                        'magic',
                    ],
                ],
                'self_static_accessor' => true,
                'control_structure_continuation_position' => true,
                'no_unneeded_control_parentheses' => true,
                'simplified_if_return' => true,
                'trailing_comma_in_multiline' => [
                    'after_heredoc' => true,
                    'elements' => ['arrays', 'arguments', 'parameters'],
                ],
                'yoda_style' => [
                    'equal' => false,
                    'identical' => false,
                    'less_and_greater' => false,
                ],
                'method_argument_space' => [
                    'after_heredoc' => true,
                    'on_multiline' => 'ensure_fully_multiline',
                ],
                'nullable_type_declaration_for_default_null_value' => true,
                'global_namespace_import' => [
                    'import_constants' => false,
                    'import_functions' => false,
                    'import_classes' => true,
                ],
                'declare_parentheses' => true,
                'list_syntax' => true,
                'assign_null_coalescing_to_coalesce_equal' => true,
                'new_with_braces' => [
                    'named_class' => false,
                ],
                'not_operator_with_successor_space' => true,
                'operator_linebreak' => true,
                'ternary_to_null_coalescing' => true,
                'php_unit_method_casing' => [
                    'case' => 'snake_case',
                ],
                'general_phpdoc_annotation_remove' => [
                    'annotations' => ['author', 'package'],
                ],
                'no_superfluous_phpdoc_tags' => [
                    'allow_mixed' => true,
                    'allow_unused_params' => false,
                ],
                'phpdoc_align' => [
                    'align' => 'left',
                    'tags' => ['method', 'param', 'property', 'return', 'throws', 'type', 'var'],
                ],
                'phpdoc_line_span' => [
                    'const' => 'single',
                    'property' => 'single',
                ],
                'phpdoc_tag_casing' => true,
                'simplified_null_return' => true,
                'multiline_whitespace_before_semicolons' => true,
                'blank_line_before_statement' => [
                    'statements' => ['foreach', 'if', 'return', 'switch', 'while', 'try', 'do', 'for'],
                ],
                'heredoc_indentation' => true,
                'php_unit_internal_class' => false,
                'php_unit_test_class_requires_covers' => false,
                'phpdoc_types_order' => false,
                'date_time_create_from_format_call' => true,
                'types_spaces' => [
                    'space' => 'none',
                    'space_multiple_catch' => 'single',
                ],
                'phpdoc_to_comment' => [
                    'ignored_tags' => ['uses'],
                ],
                ConstructorEmptyBracesFixer::name() => true,
                MultilineCommentOpeningClosingAloneFixer::name() => true,
                MultilinePromotedPropertiesFixer::name() => true,
                NoPhpStormGeneratedCommentFixer::name() => true,
                NoSuperfluousConcatenationFixer::name() => true,
                NoUselessCommentFixer::name() => true,
                NoUselessParenthesisFixer::name() => true,
                PhpdocTypesCommaSpacesFixer::name() => true,
                DeclareAfterOpeningTagFixer::name() => true,
            ],
            '@Chiiya:risky' => [
                '@PhpCsFixer:risky' => true,
                'random_api_migration' => [
                    'replacements' => [
                        'mt_rand' => 'random_int',
                        'rand' => 'random_int',
                    ],
                ],
                'mb_str_functions' => true,
                'modernize_strpos' => true,
                'ordered_interfaces' => true,
                'date_time_immutable' => true,
                'regular_callable_call' => true,
                'use_arrow_functions' => true,
                'void_return' => true,
                'get_class_to_class_keyword' => true,
                'php_unit_dedicate_assert' => true,
                'php_unit_dedicate_assert_internal_type' => true,
                'php_unit_expectation' => true,
                'php_unit_mock' => true,
                'php_unit_namespaced' => true,
                'php_unit_no_expectation_annotation' => true,
                'php_unit_test_case_static_method_calls' => [
                    'call_type' => 'this',
                ],
                'native_constant_invocation' => false,
                'native_function_invocation' => false,
                'final_internal_class' => false,
                'declare_strict_types' => true,
                PhpUnitAssertArgumentsOrderFixer::name() => true,
                PhpUnitDedicatedAssertFixer::name() => true,
            ],
        ];
    }
}
