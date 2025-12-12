<?php

namespace App\Filament\Clusters\Settings;

use BackedEnum;
use Filament\Clusters\Cluster;
use Filament\Support\Icons\Heroicon;

class SettingsCluster extends Cluster
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSquares2x2;
    // protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    public static function getLabel(): string
    {
        return 'Settings';
    }
}
