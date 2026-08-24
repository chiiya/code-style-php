# Changelog

All notable changes to `code-style-php` will be documented in this file.

## 4.0.0 - 2026-08-24

Full ruleset audit against php-cs-fixer 3.95, kubawerlos/php-cs-fixer-custom-fixers 3.37 and Rector 2.6.

- **php-cs-fixer**: added `@autoPHPMigration` (`:risky`) so PHP-version migration rules activate from each project's composer.json; added 7 new rules to `@Chiiya` (`heredoc_closing_marker`, `no_redundant_readonly_property`, `numeric_literal_separator`, `ordered_attributes`, `php_unit_attributes`, `phpdoc_param_order`, `stringable_for_to_string`) and 6 to `@Chiiya:risky` (`class_keyword`, `no_useless_printf`, `php_unit_assert_new_names`, `phpdoc_array_type`, `phpdoc_list_type`, `phpdoc_readonly_class_comment_to_keyword`); extended `fully_qualified_strict_types` with a broad phpdoc tag list; enabled `modernize_stripos`; removed the deprecated `braces` override (covered by `braces_position` upstream). `php_unit_attributes` requires PHPUnit ≥ 10 in consuming projects.
- **Custom fixers**: added 16 non-risky and 4 risky fixers from kubawerlos/php-cs-fixer-custom-fixers, including `promoted_constructor_property`, `phpdoc_property_sorted`, `no_duplicated_array_key` and `commented_out_function` (now part of `@Chiiya:risky`).
- **Rector**: grew from 44 to 274 rules — CodeQuality, CodingStyle, DeadCode, EarlyReturn, Privatization, PHP 7.0–8.6 modernization (version-gated per project), and a first-time TypeDeclaration section (~50 inference-based rules for return types, property types and closure param types).
- **ECS**: removed `MethodSpacingSniff`, `RemoveUselessDefaultCommentFixer` and `UselessVariableSniff` (all covered by php-cs-fixer/Rector rules); replaced the deprecated `ParamReturnAndVarTagMalformsFixer` with its 12 single-task successor fixers; migrated both config files to the `ECSConfig::configure()` builder format (the set stays importable from closure-style configs too); dropped the deprecated `symplify/coding-standard` dependency (its fixers are bundled with ECS 13.2+).
- Requires `friendsofphp/php-cs-fixer ^3.95`, `kubawerlos/php-cs-fixer-custom-fixers ^3.37`, `rector/rector ^2.6`, `slevomat/coding-standard ^8.29`, `symplify/easy-coding-standard ^13.2`.

## 1.10.0 - 2022-07-06

- Upgrade all dependencies to the latest version.
- Added `InlineArrayReturnAssignRector` rector rule.

## 1.1.0 - 2022-02-23

- Removed the `OrderedClassElementsFixer` rule since it wrongly detects methods named `setup` as PHPUnit methods. 

## 1.0.0 - 2022-02-18

- Initial release

