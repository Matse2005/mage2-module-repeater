<?php

use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(__DIR__ . '/app/code/E5Mode')
    ->notPath([
        'StorePickup/Api/StoreRepositoryInterface.php',
        'Avalon/Api/VoucherCouponApplyResultInterface.php'
    ])
    ->name('*.php');

$config = new PhpCsFixer\Config();
$config->setFinder($finder)
    ->setRiskyAllowed(true)
    ->setUsingCache(false)
    ->setRules([
        '@PSR2' => true,
        // Symfony standards are not very suitable for Magento
//        '@Symfony' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'ordered_class_elements' => true,
        'ordered_imports' => true,
        // Don't be strict about the order of phpdoc tags
//        'phpdoc_order' => true,
        'phpdoc_summary' => false,
        'blank_line_after_opening_tag' => false,
        'concat_space' => ['spacing' => 'one'],
        'array_syntax' => ['syntax' => 'short'],
        // Removes @param and @return tags that don't provide any useful information.
        'no_superfluous_phpdoc_tags' => false,
        // add declare strict type to every file
        'declare_strict_types' => true,
        // use native phpunit methods
        'php_unit_construct' => true,
        // Enforce camel case for PHPUnit test methods
        'php_unit_method_casing' => ['case' => 'camel_case'],
        // Let developers decide by themselves
//        'yoda_style' => ['equal' => false, 'identical' => false, 'less_and_greater' => false],
        'php_unit_test_case_static_method_calls' => true,
        // comparisons should always be strict
        'strict_comparison' => true,
        // functions should be used with $strict param set to true
        'strict_param' => true,
        'array_indentation' => true,
        'compact_nullable_typehint' => true,
        'fully_qualified_strict_types' => true,
        'types_spaces' => [
            'space' => 'single',
        ],
        'full_opening_tag' => false,
        'echo_tag_syntax' => [
            'format' => 'short',
            'shorten_simple_statements_only' => false,
        ],
    ]);

return $config;
