<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\HomepageAbout;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HomepageAboutResource\Pages;
use App\Filament\Resources\HomepageAboutResource\RelationManagers;

class HomepageAboutResource extends Resource
{
    protected static ?string $model = HomepageAbout::class;

    protected static ?string $navigationGroup = 'Pages > Homepage';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationLabel = 'About Section';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function canCreate(): bool
    {
        return HomepageAbout::count() === 0;
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            RichEditor::make('content')
                ->label('About Brief')
                ->required()
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('content')
                    ->label('About')
                    ->limit(100),
            ])
            ->defaultSort('id', 'desc');
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
            'index' => Pages\ListHomepageAbouts::route('/'),
            'create' => Pages\CreateHomepageAbout::route('/create'),
            'edit' => Pages\EditHomepageAbout::route('/{record}/edit'),
        ];
    }
}
