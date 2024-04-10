<?php

namespace App\Filament\Resources\GradientResource\Pages;

use App\Filament\Resources\GradientResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGradient extends EditRecord
{
    protected static string $resource = GradientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
