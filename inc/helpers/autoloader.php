<?php
/**
 * Autoloder file fot theme, to use spl_autoloder
 *
 * This autoloader function uses a special autoload function. It uses namespaces
 * and file names to locate and load custom class files.
 *
 * @link https://www.php.net/manual/en/function.spl-autoload-register.php
 *
 * @package Astro
 */

namespace Astro\Inc\Helpers;

function autoloader(string $resource = '')
{
    $resource_path  = false;
    $namespace_root = 'Astro\\';
    $resource       = trim($resource, '\\');

    // Checks for namespace, and exits if we are in the wrong namespace or it is empty or invalid
    if (empty($resource) || strpos($resource, '\\') === false || strpos($resource, $namespace_root) !== 0) {
        return;
    }

    // Extract namespace to an array, by namespace \\ delimiter
    $resource = str_replace($namespace_root, '', $resource);
    $path     = explode('\\', str_replace('_', '-', strtolower($resource)));

    if (empty($path[0]) || empty($path[1])) {
        return;
    }

    if ('inc' === $path[0]) {
        $directory = '';
        $file_name = '';

        switch ($path[1]) {
            case 'traits':
                $directory = 'traits';
                $file_name = sprintf('trait-%s', strtolower(trim($path[2])));
                break;

            case 'widgets':
            case 'blocks':
                if ( ! empty($path[2])) {
                    $directory = sprintf('classes/%s', $path[1]);
                    $file_name = sprintf('class-%s', strtolower(trim($path[2])));
                    break;
                }

            default:
                $directory = 'classes';
                $file_name = sprintf('class-%s', strtolower(trim($path[1])));
                break;
        }

        $resource_path = sprintf('%s/inc/%s/%s.php', untrailingslashit(DIR_PATH), $directory, $file_name);
    }

    /** @link https://developer.wordpress.org/reference/functions/validate_file/ */
    $is_valid_file = validate_file($resource_path);

    if (($is_valid_file === 0 || $is_valid_file === 2) && ! empty($resource_path) && file_exists($resource_path)) {
        require_once($resource_path);
    }
}

spl_autoload_register('\Astro\Inc\Helpers\autoloader');
