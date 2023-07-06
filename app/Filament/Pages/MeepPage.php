<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;

class MeepPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.meep-page';

    protected static function getNavigationLabel(): string
    {
        return 'MEEP';
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('meepers')->label('Just a test')
        ];
    }
}
