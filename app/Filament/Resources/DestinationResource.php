<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Destination;
use PhpParser\Node\Stmt\Label;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use function Laravel\Prompts\textarea;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DestinationResource\Pages;
use App\Filament\Resources\DestinationResource\RelationManagers;

class DestinationResource extends Resource
{
    protected static ?string $model = destination::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('name')
                            ->label('name') 
                            ->required(), 
                        Textarea::make('description') 
                            ->label('description') 
                            ->required(),
                        FileUpload::make('image_url')
                            ->label('gambar') 
                            ->required(),
                        TextInput::make('rating')
                            ->label('rating') 
                            ->numeric()
                            ->required(),
                        TextInput::make('price')
                            ->label('harga') 
                            ->required(),
                        TextInput::make('price_unit')
                            ->label('paketan') 
                            ->required(),

                    ]) 
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                 TextColumn::make('name')
                    ->label('name'),
                 TextColumn::make('description')
                    ->label('deskripsi'),
                 ImageColumn::make('image_url')
                    ->label('gambar'),
                 TextColumn::make('rating')
                     ->label('rating'),
                 TextColumn::make('price')
                     ->label('harga'),
                 TextColumn::make('price_unit')
                     ->label('paketan'),                    
            ]) 
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListDestinations::route('/'),
            'create' => Pages\CreateDestination::route('/create'),
            'edit' => Pages\EditDestination::route('/{record}/edit'),
        ];
    }
}
