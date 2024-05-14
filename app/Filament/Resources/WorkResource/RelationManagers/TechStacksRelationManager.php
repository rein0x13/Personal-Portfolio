<?php

namespace App\Filament\Resources\WorkResource\RelationManagers;

use App\Models\TechStack;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TechStacksRelationManager extends RelationManager
{
    protected static string $relationship = 'techStacks';

    public function form(Form $form): Form
    {
        $record = $this->getOwnerRecord();
        return $form
            ->schema([
                Forms\Components\Select::make('id')
                    ->relationship(name: "skill", titleAttribute: "name")
                    ->disableOptionWhen(function ($value) use ($record) {
                        return TechStack::where('work_id', $record->id)->where('skill_id', $value)->exists();
                    })
                    ->required(),
            ])->columns(1);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('skill.name')
                    ->placeholder("SOFT DELETED"),
            ])
            // ->defaultSort('sort')
            ->reorderable('sort')
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()->createAnother(false)
                    ->label('Associate Tech Stack')
                    ->modalHeading('Associate Tech Stack'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
        // ->orderBy('sort');
    }
}
