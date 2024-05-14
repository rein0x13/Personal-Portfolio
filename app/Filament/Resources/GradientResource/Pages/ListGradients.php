<?php

namespace App\Filament\Resources\GradientResource\Pages;

use App\Filament\Resources\GradientResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGradients extends ListRecords
{
    protected static string $resource = GradientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
