<?php

namespace Filament\Support\Commands\Concerns;

use Filament\Support\Facades\FilamentCli;

use function Laravel\Prompts\select;

trait CanAskForComponentLocation
{
    /**
     * @return array{
     *     0: string,
     *     1: string,
     *     2: ?string,
     * }
     */
    protected function askForComponentLocation(string $path, string $question = 'Where would you like to create the component?'): array
    {
        $pathNamespace = (string) str($path)->replace('/', '\\');

        $locations = FilamentCli::getComponentLocations();

        if (blank($locations)) {
            return [
                "App\\Filament\\{$pathNamespace}",
                app_path($path),
                '',
            ];
        }

        $options = [
            null => "App\\Filament\\{$pathNamespace}",
            ...array_map(
                fn (string $namespace): string => "{$namespace}\\{$pathNamespace}",
                array_combine(
                    array_keys($locations),
                    array_keys($locations),
                ),
            ),
        ];

        $namespace = select(
            label: $question,
            options: $options,
        );

        if (blank($namespace)) {
            return [
                "App\\Filament\\{$pathNamespace}",
                app_path($path),
                '',
            ];
        }

        return [
            "{$namespace}\\{$pathNamespace}",
            $locations[$namespace]['path'] . '/' . $path,
            $locations[$namespace]['viewNamespace'] ?? null,
        ];
    }
}