<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CareerApplicationResource\Pages;
use App\Filament\Resources\CareerApplicationResource\RelationManagers;
use App\Models\CareerApplication;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CareerApplicationResource extends Resource
{
    protected static ?string $model = CareerApplication::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->disabled(),
                Forms\Components\TextInput::make('email')->required()->email()->disabled(),
                Forms\Components\Textarea::make('why_apply')->disabled(),
                Forms\Components\Textarea::make('project_pride')->disabled(),
                Forms\Components\Textarea::make('portfolio')->disabled(),
                Forms\Components\Textarea::make('salary_expectation')->disabled(),
                Forms\Components\FileUpload::make('cv')->disabled(),
                Forms\Components\TextInput::make('career.title')->label('Job Title')->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListCareerApplications::route('/'),
            'create' => Pages\CreateCareerApplication::route('/create'),
            'edit' => Pages\EditCareerApplication::route('/{record}/edit'),
        ];
    }
}
