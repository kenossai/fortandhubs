<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Subscriber;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Mail;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SubscriberResource\Pages;
use App\Filament\Resources\SubscriberResource\RelationManagers;

class SubscriberResource extends Resource
{
    protected static ?string $model = Subscriber::class;

    protected static ?string $navigationGroup = 'Core Features';
    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('email'),
        ])
        ->bulkActions([
            BulkAction::make('sendNewsletter')
                ->label('Send Newsletter Email')
                ->form([
                    TextInput::make('subject')->required(),
                    RichEditor::make('body')->required(),
                ])
                ->action(function (Collection $records, array $data) {
                    foreach ($records as $subscriber) {
                        Mail::raw($data['body'], function ($message) use ($subscriber, $data) {
                            $message->to($subscriber->email)
                                    ->subject($data['subject']);
                        });
                    }

                    Notification::make()
                        ->title('Newsletter sent!')
                        ->success()
                        ->send();
                })
        ])->actions([
            DeleteAction::make(),
        ])
        ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListSubscribers::route('/'),
            'create' => Pages\CreateSubscriber::route('/create'),
            'edit' => Pages\EditSubscriber::route('/{record}/edit'),
        ];
    }
}
