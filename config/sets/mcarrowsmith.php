<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Basic\EncodingFixer;
use PhpCsFixer\Fixer\Basic\NoMultipleStatementsPerLineFixer;
use PhpCsFixer\Fixer\Casing\ConstantCaseFixer;
use PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer;
use PhpCsFixer\Fixer\CastNotation\LowercaseCastFixer;
use PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer;
use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\ControlStructure\NoBreakCommentFixer;
use PhpCsFixer\Fixer\PhpTag\EchoTagSyntaxFixer;
use PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer;
use PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer;
use PhpCsFixer\Fixer\Whitespace\LineEndingFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withSets([
        __DIR__ . '/../../config/sets/mcarrowsmith/array.php',
        __DIR__ . '/../../config/sets/mcarrowsmith/comments.php',
        __DIR__ . '/../../config/sets/mcarrowsmith/control-structures.php',
        __DIR__ . '/../../config/sets/mcarrowsmith/docblock.php',
        __DIR__ . '/../../config/sets/mcarrowsmith/namespaces.php',
        __DIR__ . '/../../config/sets/mcarrowsmith/phpunit.php',
        __DIR__ . '/../../config/sets/mcarrowsmith/spaces.php',
        __DIR__ . '/../../config/sets/clean-code.php',
    ])
    ->withRules([
        NoMultipleStatementsPerLineFixer::class,
        LineEndingFixer::class,
        EncodingFixer::class,
        FullOpeningTagFixer::class,
        NoClosingTagFixer::class,
        LowercaseCastFixer::class,
        LowercaseKeywordsFixer::class,
        NoBreakCommentFixer::class,
        ShortScalarCastFixer::class
    ])
    ->withConfiguredRule(EchoTagSyntaxFixer::class, [
        'format'                         => 'long',
        'long_function'                  => 'echo',
        'shorten_simple_statements_only' => false
    ])
    ->withConfiguredRule(ConstantCaseFixer::class, [
        'case' => 'lower'
    ])
    ->withConfiguredRule(VisibilityRequiredFixer::class, [
        'elements' => ['const', 'method', 'property'],
    ]);
