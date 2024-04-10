<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GradientResource\Pages;
use App\Filament\Resources\GradientResource\RelationManagers;
use App\Models\Gradient;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GradientResource extends Resource
{
    protected static ?string $model = Gradient::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        $colors = [];
        foreach (array_keys(\App\Support\Color::all()) as $color) {
            $colors[$color] = $color;
        }

        return $form
            ->schema([
                Forms\Components\Select::make('from')
                    ->required()
                    ->searchable()
                    ->options($colors),
                Forms\Components\TextInput::make('from-intensity')
                    ->required()
                    ->numeric()
                    ->step('100')
                    ->maxValue(900)
                    ->minValue(100),
                Forms\Components\TextInput::make('from-percent')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('via')
                    ->required()
                    ->searchable()
                    ->options($colors),
                Forms\Components\TextInput::make('via-intensity')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('via-percent')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('to')
                    ->required()
                    ->searchable()
                    ->options($colors),
                Forms\Components\TextInput::make('to-intensity')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('to-percent')
                    ->required()
                    ->numeric(),
            ])
            ->columns(1)
            ->inlineLabel();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('from')
                    ->searchable(),
                Tables\Columns\TextColumn::make('from-intensity')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('from-percent')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('via')
                    ->searchable(),
                Tables\Columns\TextColumn::make('via-intensity')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('via-percent')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('to')
                    ->searchable(),
                Tables\Columns\TextColumn::make('to-intensity')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('to-percent')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGradients::route('/'),
            'create' => Pages\CreateGradient::route('/create'),
            'edit' => Pages\EditGradient::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
