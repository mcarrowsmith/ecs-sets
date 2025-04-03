<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Casing\MagicConstantCasingFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer;
use PhpCsFixer\Fixer\ClassNotation\SelfAccessorFixer;
use PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer;
use PhpCsFixer\Fixer\ControlStructure\ControlStructureBracesFixer;
use PhpCsFixer\Fixer\ControlStructure\ControlStructureContinuationPositionFixer;
use PhpCsFixer\Fixer\ControlStructure\ElseifFixer;
use PhpCsFixer\Fixer\ControlStructure\NoUselessElseFixer;
use PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer;
use PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer;
use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use PhpCsFixer\Fixer\LanguageConstruct\ExplicitIndirectVariableFixer;
use PhpCsFixer\Fixer\LanguageConstruct\FunctionToConstantFixer;
use PhpCsFixer\Fixer\LanguageConstruct\IsNullFixer;
use PhpCsFixer\Fixer\Operator\NewWithParenthesesFixer;
use PhpCsFixer\Fixer\Operator\StandardizeIncrementFixer;
use PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer;
use PhpCsFixer\Fixer\Operator\UnaryOperatorSpacesFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitMethodCasingFixer;
use PhpCsFixer\Fixer\StringNotation\ExplicitStringVariableFixer;
use PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withRules([
        ControlStructureBracesFixer::class,
        PhpUnitMethodCasingFixer::class,
        FunctionToConstantFixer::class,
        ExplicitStringVariableFixer::class,
        ExplicitIndirectVariableFixer::class,
        StandardizeIncrementFixer::class,
        SelfAccessorFixer::class,
        MagicConstantCasingFixer::class,
        NoUselessElseFixer::class,
        SingleQuoteFixer::class,
        IsNullFixer::class,
        ElseifFixer::class,
        SwitchCaseSemicolonToColonFixer::class,
        SwitchCaseSpaceFixer::class,
        TernaryOperatorSpacesFixer::class
    ])
    ->withConfiguredRule(ControlStructureContinuationPositionFixer::class, [
        'position' => 'same_line'
    ])
    ->withConfiguredRule(NewWithParenthesesFixer::class, [
        'anonymous_class' => false,
        'named_class'     => false,
    ])
    ->withConfiguredRule(SingleClassElementPerStatementFixer::class, [
        'elements' => ['const', 'property'],
    ])
    ->withConfiguredRule(ClassDefinitionFixer::class, [
        'single_line' => true,
    ])
    ->withConfiguredRule(OrderedClassElementsFixer::class, [
        'order' => [
            'use_trait',
            'constant_public',
            'constant_protected',
            'constant_private',
            'property_public_static',
            'property_protected_static',
            'property_private_static',
            'property_public',
            'property_protected',
            'property_private',
            'method_public_static',
            'construct',
            'destruct',
            'magic',
            'phpunit',
            'method_public',
            'method_protected',
            'method_private',
            'method_protected_static',
            'method_private_static',
        ],
    ])
    ->withConfiguredRule(YodaStyleFixer::class, [
        'equal'            => false,
        'identical'        => false,
        'less_and_greater' => false,
    ]);
