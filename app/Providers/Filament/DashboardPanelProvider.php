<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use App\Support\Color;
use Filament\Tables\Table;
use Filament\PanelProvider;
use Filament\Enums\ThemeMode;
use Filament\Resources\Auth\Login;
use Illuminate\Support\HtmlString;
use Filament\View\PanelsRenderHook;
use Illuminate\Contracts\View\View;
use Filament\Http\Middleware\Authenticate;
use Filament\Support\Facades\FilamentView;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

class DashboardPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        // $logo = '<a href="/" style="background: linear-gradient(45.4deg, #f49242 7.41%, #fbf2b1 98.99%) !important; background-clip: text !important; -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important; width: fit-content !important;">rein_0x13</a>';
        $logo = '<a href="/" style="background: linear-gradient(45.4deg, #11e0f6 7.41%, #8bc7ea 98.99%) !important; background-clip: text !important; -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important; width: fit-content !important;">rein_0x13</a>';

        // FilamentView::registerRenderHook(
        //     PanelsRenderHook::CONTENT_START,
        //     fn (): View => view('components.background'),
        // );

        Table::configureUsing(function (Table $table): void {
            $table
                ->filtersLayout(\Filament\Tables\Enums\FiltersLayout::Dropdown)
                ->poll();
        });

        return $panel
            ->default()
            ->id('dashboard')
            ->path('dashboard')
            ->brandName(new HtmlString($logo))
            ->login(Login::class)
            // ->topbar('false')
            ->registration()
            // ->passwordReset()
            ->profile()
            ->simpleProfilePage(false)
            ->breadcrumbs(false)
            ->font('Poppins')
            ->viteTheme('resources/css/filament/dashboard/theme.css')
            ->colors([
                // 'primary' => Color::Amber,
                'primary' => Color::Sky,
                'danger' => Color::Rose,
                'gray' => Color::Zinc,
                'info' => Color::Blue,
                'success' => Color::Emerald,
                'warning' => Color::Orange,
            ])
            ->darkMode(isForced: true)
            ->defaultThemeMode(ThemeMode::Dark)
            ->spa()
            // ->sidebarCollapsibleOnDesktop()
            ->topNavigation()
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                // Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
