<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Import\NoLeadingImportSlashFixer;
use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use PhpCsFixer\Fixer\Import\OrderedImportsFixer;
use PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer;
use PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer;
use PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer;
use PhpCsFixer\Fixer\NamespaceNotation\BlankLinesBeforeNamespaceFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withRules([
        BlankLineAfterNamespaceFixer::class,
        NoUnusedImportsFixer::class,
        NoLeadingImportSlashFixer::class,
        SingleLineAfterImportsFixer::class
    ])
    ->withConfiguredRule(SingleImportPerStatementFixer::class, [
        'group_to_single_imports' => false
    ])
    ->withConfiguredRule(BlankLinesBeforeNamespaceFixer::class, [
        'min_line_breaks' => 2,
        'max_line_breaks' => 2
    ])
    ->withConfiguredRule(OrderedImportsFixer::class, [
        'imports_order' => [
            'const',
            'function',
            'class',
        ]
    ]);
