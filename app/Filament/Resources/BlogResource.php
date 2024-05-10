<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Blog;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BlogResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\BlogCategory;
use Filament\Forms\Components\FileUpload;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Select::make('blog_category_id')
                    ->options(function (): array {
                        return BlogCategory::all()->pluck('category_name', 'id')->all();
                    }),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('qutation_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('last_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('last_description')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('banner')
                    ->imageCropAspectRatio('820:470')
                    ->imageResizeTargetWidth('820')
                    ->imageResizeTargetHeight('470')
                    ->disk('public')
                    ->directory('upload')
                    ->required(),
                FileUpload::make('images')
                    ->multiple()
                    ->imageCropAspectRatio('400:315')
                    ->imageResizeTargetWidth('400')
                    ->imageResizeTargetHeight('315')
                    ->disk('public')
                    ->directory('upload')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('banner')
                    ->searchable(),
                Tables\Columns\TextColumn::make('qutation_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('blog_category_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
