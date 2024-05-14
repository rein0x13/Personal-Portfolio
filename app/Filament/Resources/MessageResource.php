<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Message;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MessageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MessageResource\RelationManagers;

class MessageResource extends Resource
{
    protected static ?string $model = Message::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?int $navigationSort = 2;

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getNavigationBadge(): ?string
    {

        if (!in_array(Route::currentRouteName(), [
            'filament.dashboard.resources.messages.index',
            static::getRouteBaseName(),
        ])) {
            $count = (new static::$model)::where('read_date', null)->count();
            if ($count != 0) {
                return $count;
            }
        }

        return null;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('sender')
                    ->required()
                    ->maxLength(255)
                    ->readOnly(),
                Forms\Components\TextInput::make('contact')
                    ->required()
                    ->maxLength(255)
                    ->readOnly(),
                Forms\Components\Textarea::make('message')
                    ->required()
                    ->readOnly()
                    ->columnSpanFull(),
                // Forms\Components\DateTimePicker::make('read_date'),
                // Forms\Components\DateTimePicker::make('created_at')
                //     ->readOnly(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Date')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            // ->recordClasses(fn (Message $record) => (empty($record->read_date)) ? 'border-s-2 border-slate-700 dark:border-slate-700' : '')
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label(fn ($record) => (empty($record->read_date) ? 'Read' : ''))
                    ->icon(fn ($record) => (empty($record->read_date)) ? 'heroicon-o-envelope' : '')
                    ->beforeFormFilled(function ($record) {
                        $record->read();
                    })
                    ->modalSubmitAction(false)
                    ->modalHeading(fn ($record) => $record->created_at)
                    ->modalCancelActionLabel('Close')
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
            'index' => Pages\ListMessages::route('/'),
            'create' => Pages\CreateMessage::route('/create'),
            // 'edit' => Pages\EditMessage::route('/{record}/edit'),
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
