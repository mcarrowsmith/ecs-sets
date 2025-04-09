<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\PhpUnit\PhpUnitSetUpTearDownVisibilityFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitMethodCasingFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withRules([
        PhpUnitTestAnnotationFixer::class,
        PhpUnitSetUpTearDownVisibilityFixer::class
    ])
    ->withConfiguredRule(
        PhpUnitMethodCasingFixer::class, [
            'case' => 'snake_case'
        ]
    );
