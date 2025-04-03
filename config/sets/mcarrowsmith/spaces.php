<?php

declare(strict_types=1);

use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LanguageConstructSpacingSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SuperfluousWhitespaceSniff;
use PhpCsFixer\Fixer\Basic\BracesPositionFixer;
use PhpCsFixer\Fixer\CastNotation\CastSpacesFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer;
use PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer;
use PhpCsFixer\Fixer\ClassNotation\SingleTraitInsertPerStatementFixer;
use PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer;
use PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer;
use PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer;
use PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer;
use PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer;
use PhpCsFixer\Fixer\LanguageConstruct\DeclareParenthesesFixer;
use PhpCsFixer\Fixer\LanguageConstruct\SingleSpaceAroundConstructFixer;
use PhpCsFixer\Fixer\NamespaceNotation\NoLeadingNamespaceWhitespaceFixer;
use PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer;
use PhpCsFixer\Fixer\Operator\ConcatSpaceFixer;
use PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer;
use PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer;
use PhpCsFixer\Fixer\Operator\UnaryOperatorSpacesFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocSingleLineVarSpacingFixer;
use PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer;
use PhpCsFixer\Fixer\Semicolon\NoSinglelineWhitespaceBeforeSemicolonsFixer;
use PhpCsFixer\Fixer\Semicolon\SpaceAfterSemicolonFixer;
use PhpCsFixer\Fixer\Whitespace\BlankLineBeforeStatementFixer;
use PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer;
use PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer;
use PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer;
use PhpCsFixer\Fixer\Whitespace\NoSpacesAroundOffsetFixer;
use PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer;
use PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer;
use PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer;
use PhpCsFixer\Fixer\Whitespace\SpacesInsideParenthesesFixer;
use PhpCsFixer\Fixer\Whitespace\StatementIndentationFixer;
use PhpCsFixer\Fixer\Whitespace\TypeDeclarationSpacesFixer;
use Symplify\CodingStandard\Fixer\Spacing\StandaloneLinePromotedPropertyFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withRules([
        DeclareParenthesesFixer::class,
        IndentationTypeFixer::class,
        TypeDeclarationSpacesFixer::class,
        StandaloneLinePromotedPropertyFixer::class,
        BlankLineAfterOpeningTagFixer::class,
        MethodChainingIndentationFixer::class,
        NotOperatorWithSuccessorSpaceFixer::class,
        CastSpacesFixer::class,
        SingleTraitInsertPerStatementFixer::class,
        NoBlankLinesAfterClassOpeningFixer::class,
        NoSinglelineWhitespaceBeforeSemicolonsFixer::class,
        PhpdocSingleLineVarSpacingFixer::class,
        NoLeadingNamespaceWhitespaceFixer::class,
        NoSpacesAroundOffsetFixer::class,
        NoWhitespaceInBlankLineFixer::class,
        ReturnTypeDeclarationFixer::class,
        SpaceAfterSemicolonFixer::class,
        TernaryOperatorSpacesFixer::class,
        LanguageConstructSpacingSniff::class,
        NoSpacesAfterFunctionNameFixer::class,
        NoTrailingWhitespaceFixer::class,
        SingleBlankLineAtEofFixer::class,
        UnaryOperatorSpacesFixer::class
    ])
    ->withConfiguredRule(SpacesInsideParenthesesFixer::class, [
        'space' => 'none'
    ])
    ->withConfiguredRule(StatementIndentationFixer::class, [
        'stick_comment_to_next_continuous_control_statement' => true
    ])
    ->withConfiguredRule(MethodArgumentSpaceFixer::class, [
        'on_multiline' => 'ensure_fully_multiline',
    ])
    ->withConfiguredRule(DeclareEqualNormalizeFixer::class, [
        'space' => 'none',
    ])
    ->withConfiguredRule(SingleSpaceAroundConstructFixer::class, [
        'constructs_contain_a_single_space'     => [
            'yield_from'
        ],
        'constructs_followed_by_a_single_space' => [
            'abstract',
            'as',
            'attribute',
            'break',
            'case',
            'catch',
            'class',
            'clone',
            'comment',
            'const',
            'const_import',
            'continue',
            'do',
            'echo',
            'else',
            'elseif',
            'enum',
            'extends',
            'final',
            'finally',
            'for',
            'foreach',
            'function',
            'function_import',
            'global',
            'goto',
            'if',
            'implements',
            'include',
            'include_once',
            'instanceof',
            'insteadof',
            'interface',
            'match',
            'named_argument',
            'namespace',
            'new',
            'open_tag_with_echo',
            'php_doc',
            'php_open',
            'print',
            'private',
            'protected',
            'public',
            'readonly',
            'require',
            'require_once',
            'return',
            'static',
            'switch',
            'throw',
            'trait',
            'try',
            'type_colon',
            'use',
            'use_lambda',
            'use_trait',
            'var',
            'while',
            'yield',
            'yield_from'
        ],
        'constructs_preceded_by_a_single_space' => [
            'as',
            'use_lambda'
        ]
    ])
    ->withConfiguredRule(BlankLineBeforeStatementFixer::class, [
        'statements' => [
            'break',
            'case',
            'continue',
            'declare',
            'default',
            'do',
            'exit',
            'for',
            'foreach',
            'goto',
            'if',
            'include',
            'include_once',
            'phpdoc',
            'require',
            'require_once',
            'return',
            'switch',
            'throw',
            'try',
            'while',
            'yield',
            'yield_from',
        ],
    ])
    ->withConfiguredRule(ClassAttributesSeparationFixer::class, [
        'elements' => [
            'const'    => 'none',
            'property' => 'only_if_meta',
            'method'   => 'one',
        ],
    ])
    ->withConfiguredRule(NoExtraBlankLinesFixer::class, [
        'tokens' => [
            'extra',
            'switch',
            'case',
            'default',
            'throw',
            'use',
            'curly_brace_block',
            'parenthesis_brace_block',
            'return'
        ],
    ])
    ->withConfiguredRule(ConcatSpaceFixer::class, [
        'spacing' => 'one',
    ])
    ->withConfiguredRule(SuperfluousWhitespaceSniff::class, [
        'ignoreBlankLines' => false,
    ])
    ->withConfiguredRule(BracesPositionFixer::class, [
        'allow_single_line_empty_anonymous_classes' => true,
    ])
    ->withConfiguredRule(FunctionDeclarationFixer::class, [
        'closure_fn_spacing'         => 'one',
        'closure_function_spacing'   => 'one',
        'trailing_comma_single_line' => false
    ])
    ->withConfiguredRule(BinaryOperatorSpacesFixer::class, [
        'operators' => [
            '*=' => 'align_single_space_minimal',
            '+=' => 'align_single_space_minimal',
            '-=' => 'align_single_space_minimal',
            '/=' => 'align_single_space_minimal',
            '='  => 'align_single_space_minimal',
            '=>' => 'align_single_space_minimal',
        ],
    ]);
