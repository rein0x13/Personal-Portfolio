<?php

namespace App\Filament\Resources\WorkResource\Pages;

use Filament\Actions;
use App\Filament\Resources\WorkResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Pages\SubNavigationPosition;

class EditWork extends EditRecord
{
    protected static string $resource = WorkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
