<?php declare(strict_types=1);

/**
 * Fails if any Rector rule imported by src/rector.php has been marked deprecated
 * upstream. Rector sometimes replaces a deprecated rule's refactor() body with a
 * thrown exception rather than waiting for a major release, so a routine
 * `composer update` of rector/rector can silently turn the whole set into a hard
 * failure for consumers. Run this after every rector/rector bump.
 */

require __DIR__.'/../vendor/autoload.php';

use Rector\Configuration\Deprecation\Contract\DeprecatedInterface;

$source = file_get_contents(__DIR__.'/../src/rector.php');
preg_match_all('/^use (Rector\\\\[A-Za-z0-9\\\\_]+Rector);$/m', $source, $matches);
$rules = $matches[1];

if ($rules === []) {
    fwrite(STDERR, "No Rector rule imports found in src/rector.php — check the regex above.\n");
    exit(1);
}

$deprecated = array_filter(
    $rules,
    static fn (string $rule): bool => is_subclass_of($rule, DeprecatedInterface::class),
);

if ($deprecated !== []) {
    fwrite(STDERR, "The following rules in src/rector.php are deprecated upstream and must be removed:\n");
    foreach ($deprecated as $rule) {
        fwrite(STDERR, "  - {$rule}\n");
    }
    exit(1);
}

echo 'OK: '.count($rules)." rules checked, none deprecated.\n";
