<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src')
    ->in(__DIR__.'/tests')
;

$config = new PhpCsFixer\Config();

return $config
    ->setRules([
        '@Symfony' => true,
        '@PSR12' => true,
        'native_function_invocation' => ['include' => ['@all']],
        'ordered_class_elements' => ['sort_algorithm' => 'alpha']
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder)
;
