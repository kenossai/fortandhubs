<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\CaseStudy;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CaseStudyResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CaseStudyResource\RelationManagers;

class CaseStudyResource extends Resource
{
    protected static ?string $model = CaseStudy::class;

    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Grid::make(2)->schema([
                    TextInput::make('title')->required(),
                    TextInput::make('subtitle'),
                    TextInput::make('client'),
                    DatePicker::make('date'),
                    TextInput::make('role'),
                    TextInput::make('visit_url')->label('Visit URL'),
                    FileUpload::make('banner_image')->image()->directory('case-studies'),
                    FileUpload::make('gallery')
                        ->multiple()
                        ->image()
                        ->directory('case-studies/gallery')
                        ->label('Gallery Images'),
                ]),
                Textarea::make('overview')->columnSpanFull(),
                Textarea::make('about_project')->columnSpanFull(),
                Textarea::make('approach')->columnSpanFull(),
                Grid::make(3)->schema([
                    TextInput::make('conversion_increase')->numeric()->suffix('%'),
                    TextInput::make('traffic_increase')->numeric()->suffix('%'),
                    TextInput::make('daily_signups')->numeric()->suffix('%'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('banner_image')->label('Banner'),
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('client'),
                TextColumn::make('date')->date(),
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
            'index' => Pages\ListCaseStudies::route('/'),
            'create' => Pages\CreateCaseStudy::route('/create'),
            'edit' => Pages\EditCaseStudy::route('/{record}/edit'),
        ];
    }
}
