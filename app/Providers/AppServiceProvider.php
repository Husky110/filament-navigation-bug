<?php

namespace App\Providers;

use App\Filament\Pages\MeepPage;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Filament::navigation(function (\Filament\Navigation\NavigationBuilder $navigationBuilder){
            return $navigationBuilder->items([
                NavigationItem::make('Dashboard')
                    ->icon('heroicon-o-home')
                    ->activeIcon('heroicon-o-home')
                    ->isActiveWhen(fn (): bool => request()->routeIs('filament.pages.dashboard'))
                    ->url(route('filament.pages.dashboard')),
                NavigationGroup::make('Test')->items([
                    ...MeepPage::getNavigationItems()
                ])->collapsible(false),
            ]);
        });
    }
}
