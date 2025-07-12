<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\CareerApplication;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CareerApplicationResource\Pages;
use App\Filament\Resources\CareerApplicationResource\RelationManagers;

class CareerApplicationResource extends Resource
{
    protected static ?string $model = CareerApplication::class;

    protected static ?string $navigationGroup = 'Core Features';
    protected static ?string $navigationLabel = 'Recieved Applications';
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
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('career.title')->label('Job Title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
                Tables\Columns\TextColumn::make('cv')->label('CV')->formatStateUsing(function ($state, $record) {
                    // Link to download CV
                    return "<a href='" . asset('storage/' . $record->cv) . "' target='_blank' class='text-blue-600 underline'>Download</a>";
                })->html(),
            ])
            ->filters([
                SelectFilter::make('career_id')
                    ->label('Job')
                    ->relationship('career', 'title'),
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
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
            'view' => Pages\ViewCareerApplication::route('/{record}'),
        ];
    }
}
