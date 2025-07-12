<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Career;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CareerResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CareerResource\RelationManagers;

class CareerResource extends Resource
{
    protected static ?string $model = Career::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\RichEditor::make('description')->required()
                ->extraAttributes([
                    'style' => 'height: 200px; overflow-y: auto;',
                ]),
                Forms\Components\TextInput::make('location')->required(),
                Forms\Components\Select::make('type')
                    ->options([
                        'Full-time' => 'Full-time',
                        'Part-time' => 'Part-time',
                        'Contract' => 'Contract',
                        'Internship' => 'Internship',
                    ])
                    ->required(),
                TextInput::make('positions')
                    ->numeric()
                    ->minValue(1)
                    ->required(),
                TextInput::make('experience')
                ->label('Experience')
                ->placeholder('e.g. 3+ years'),

            TextInput::make('job_avg_salary')
                ->label('Job Avg Salary')
                ->placeholder('e.g. $50,000 - $70,000'),

            TextInput::make('working_hours')
                ->label('Working Hours')
                ->placeholder('e.g. 9 AM - 5 PM'),

            TextInput::make('working_days')
                ->label('Working Days')
                ->placeholder('e.g. Monday - Friday'),
                Forms\Components\Select::make('status')
                    ->options([
                        'Open' => 'Open',
                        'Closed' => 'Closed',
                    ])
                    ->required(),
                Forms\Components\DatePicker::make('deadline'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('location'),
                Tables\Columns\BadgeColumn::make('type')->color('primary'),
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'success' => 'Open',
                        'danger' => 'Closed',
                    ]),
                Tables\Columns\TextColumn::make('deadline')->date(),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'Open' => 'Open',
                        'Closed' => 'Closed',
                    ]),
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
            'index' => Pages\ListCareers::route('/'),
            'create' => Pages\CreateCareer::route('/create'),
            'edit' => Pages\EditCareer::route('/{record}/edit'),
        ];
    }
}
