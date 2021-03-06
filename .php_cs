<?php
$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in('config')
    ->in('public')
    ->in('src')
    ->in('tests');
$config = Symfony\CS\Config\Config::create();
$config->level(null);
$config->fixers(
    array(
        'braces',
        'class_definition',
        'duplicate_semicolon',
        'elseif',
        'empty_return',
        'encoding',
        'eof_ending',
        'function_call_space',
        'function_declaration',
        'indentation',
        'join_function',
        'line_after_namespace',
        'linefeed',
        'logical_not_operators_with_successor_space',
        'lowercase_constants',
        'lowercase_keywords',
        'method_argument_space',
        'multiple_use',
        'no_trailing_whitespace_in_comment',
        'object_operator',
        'parenthesis',
        'php_closing_tag',
        'remove_lines_between_uses',
        'single_line_after_imports',
        'short_array_syntax',
        'short_tag',
        'standardize_not_equal',
        'switch_case_semicolon_to_colon',
        'switch_case_space',
        'trailing_spaces',
        'unused_use',
        'visibility',
        'whitespacy_lines',
    )
);
$config->finder($finder);
return $config;
