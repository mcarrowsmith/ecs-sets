<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPhpSets(php82: true)
    ->withPreparedSets(
        codeQuality: true,
        deadCode: true,
        codingStyle: true,
        typeDeclarations: true,
        naming: true,
        privatization: true,
        earlyReturn: true
    )
    ->withPaths([__DIR__ . '/config'])
    ->withRootFiles()
    ->withImportNames();