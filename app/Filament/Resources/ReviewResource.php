<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Review;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ReviewResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ReviewResource\RelationManagers;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationGroup = 'Pages > Homepage';
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Reviewer Name'),
                TextInput::make('role')
                    ->required()
                    ->maxLength(255)
                    ->label('Role'),
                TextInput::make('company')
                    ->required()
                    ->maxLength(255)
                    ->label('Company'),
                Textarea::make('review')
                    ->required()
                    ->rows(3)
                    ->label('Review Text'),
                FileUpload::make('image_path')
                    ->label('Reviewer Photo, Image size should be 530x668 pixels')
                    ->directory('reviews')
                    ->visibility('public')
                    ->previewable(true)
                    ->image()
                    ->getUploadedFileNameForStorageUsing(fn ($file) => $file->getClientOriginalName())
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('role')
                    ->sortable()
                    ->label('Role'),
                TextColumn::make('company')
                    ->searchable()
                    ->sortable()
                    ->label('Company'),
                TextColumn::make('review')
                    ->searchable()
                    ->limit(50),
                ImageColumn::make('image_path')
                    ->disk('public')
                    ->circular()
                    ->getStateUsing(fn ($record) => asset('storage/' . $record->image_path))
                    ->label('Image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}
