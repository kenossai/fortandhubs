<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Project;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProjectResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectResource\RelationManagers;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationGroup = 'Pages > Homepage';
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationIcon = 'heroicon-o-rocket-launch';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->label('Project Title'),

                TextInput::make('slug')
                    ->label('Slug')
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->maxLength(255),

                TextInput::make('sub_title')
                    ->label('Project Subtitle')
                    ->maxLength(50),

                TextInput::make('client_name')
                    ->label('Client Name')
                    ->maxLength(255),

                TextInput::make('category')
                    ->label('Category')
                    ->maxLength(255),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                        'archived' => 'Archived',
                    ])
                    ->default('active')
                    ->required(),

                DatePicker::make('project_year')
                    ->label('Project Year'),

                TextInput::make('location')
                    ->label('Location')
                    ->maxLength(255),

                TextInput::make('duration')
                    ->label('Duration (e.g. 3 months, 1 year)')
                    ->maxLength(255),

                Repeater::make('project_approach')
                    ->label('Project Approaches')
                    ->schema([
                        Select::make('type')
                            ->label('Approach')
                            ->options([
                                'design-first' => 'Design-First',
                                'client-collaboration' => 'Client Collaboration',
                                'agile-development' => 'Agile Development',
                                'sustainability' => 'Sustainability Focused',
                                'turnkey' => 'Turnkey Delivery',
                            ])
                            ->required()
                            ->searchable(),

                        Textarea::make('explanation')
                            ->label('Approach Explanation')
                            ->rows(3)
                            ->required(),
                    ])
                    ->minItems(1)
                    ->columnSpanFull()
                    ->addActionLabel('Add Approach'),

                TextInput::make('price')
                    ->label('Project Price')
                    ->prefix('$')
                    ->required()
                    ->numeric()
                    ->maxLength(10),

                TextInput::make('link')
                    ->label('Project Link')
                    ->url()
                    ->maxLength(500),

                RichEditor::make('description')
                    ->label('Project Description')
                    ->maxLength(5000),

                FileUpload::make('image_path')
                    ->label('Project Image, Max upload 3 images')
                    ->image()
                    ->multiple()
                    ->directory('projects')
                    ->required()
                    ->getUploadedFileNameForStorageUsing(fn ($file) => $file->getClientOriginalName()),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('client_name')
                    ->label('Client')
                    ->sortable()
                    ->toggleable(),

                TextColumn::make('category')
                    ->label('Category')
                    ->toggleable(),

                BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'success' => 'active',
                        'warning' => 'inactive',
                        'danger' => 'archived',
                    ])
                    ->sortable(),

                TextColumn::make('project_year')
                    ->label('Year')
                    ->date('Y')
                    ->sortable(),

                TextColumn::make('location')
                    ->label('Location')
                    ->toggleable(),

                TextColumn::make('duration')
                    ->label('Duration')
                    ->toggleable(),

                TextColumn::make('project_approach')
                    ->label('Approach')
                    ->toggleable()
                    ->formatStateUsing(fn ($state) => is_string($state) ? implode(', ', json_decode($state, true) ?? []) : implode(', ', $state)),

                TextColumn::make('price')
                    ->label('Price')
                    ->prefix('$')
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('link')
                    ->label('Link')
                    ->url(fn ($record) => $record->link, true)
                    ->openUrlInNewTab()
                    ->toggleable(),

                ImageColumn::make('image_path')
                    ->label('Images')
                    ->disk('public')
                    ->circular()
                    ->limit(3) // shows thumbnails if it's an array
                    ->toggleable(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
