<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Message;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Mail\ReplyToMessage;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Mail;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TernaryFilter;
use App\Filament\Resources\MessageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MessageResource\RelationManagers;

class MessageResource extends Resource
{
    protected static ?string $model = Message::class;

    protected static ?string $navigationGroup = 'Core Features';
    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->disabled(),
                TextInput::make('email')->disabled(),
                TextInput::make('subject')->disabled(),
                Textarea::make('message')
                    ->disabled()
                    ->label('Message Content'),
                Textarea::make('reply')
                    ->label('Reply Message')
                    ->disabled()
                    ->visible(fn ($record) => $record !== null && $record->reply),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('subject')->limit(30),
                IconColumn::make('favorite')
                    ->label('Favorite')
                    ->boolean()
                    ->toggleable(),
                TextColumn::make('created_at')->dateTime('M d, Y h:i A')->sortable(),
                TextColumn::make('replied_at')
                    ->label('Replied At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TernaryFilter::make('favorite')->label('Favorited'),
                TernaryFilter::make('replied_at')->label('Replied'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Action::make('reply')
                    ->label('Reply')
                    ->icon('heroicon-o-paper-airplane')
                    ->form([
                        Textarea::make('reply')
                            ->label('Reply Message')
                            ->required()
                            ->rows(5),
                    ])
                    ->action(function (Model $record, array $data) {
                        $record->update([
                            'reply' => $data['reply'],
                            'replied_at' => now(),
                        ]);

                        // Send email to user
                        Mail::to($record->email)->send(new ReplyToMessage($record, $data['reply']));
                    })
                    ->modalHeading('Reply to Message')
                    ->visible(fn ($record) => $record->reply === null),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'edit' => Pages\EditMessage::route('/{record}/edit'),
        ];
    }
}
