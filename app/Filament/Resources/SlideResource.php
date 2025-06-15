<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SlideResource\Pages;
use App\Filament\Resources\SlideResource\RelationManagers;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use App\Models\Slide;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class SlideResource extends Resource
{
    protected static ?string $model = Slide::class;

    protected static ?string $navigationLabel = 'Hero Slides';
    protected static ?string $navigationGroup = 'Pages > Homepage';
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->required()
                ->maxLength(255),

            Textarea::make('description')
                ->rows(3),

            FileUpload::make('image_path')
                ->label('Slide Image')
                ->image()
                ->directory('slides')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            ImageColumn::make('image_path')
                ->label('Image')
                ->disk('public')
                ->circular()
                ->getStateUsing(fn ($record) => asset('storage/' . $record->image_path)),

            TextColumn::make('title')
                ->searchable()
                ->sortable(),

            TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
        ])
        ->actions([
            EditAction::make(),
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
            'index' => Pages\ListSlides::route('/'),
            'create' => Pages\CreateSlide::route('/create'),
            'edit' => Pages\EditSlide::route('/{record}/edit'),
        ];
    }
}
