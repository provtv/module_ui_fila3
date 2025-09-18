<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
# Componenti UI

## Componenti Form Avanzati

### InlineDatePicker

Componente Filament Form per la selezione di date con calendario inline sempre visibile e controllo granulare delle date selezionabili.

#### Utilizzo Base
```php
use Modules\UI\Filament\Forms\Components\InlineDatePicker;

InlineDatePicker::make('appointment_date')
    ->enabledDates(['2025-06-05', '2025-06-21'])
    ->highlightColor('bg-indigo-600 text-white')
    ->compactMode()
    ->required();
```

#### Caratteristiche
- **Design Inline**: Calendario sempre visibile senza popup
- **Date Selettive**: Solo date specifiche sono cliccabili e evidenziate
- **Tema Coerente**: Basato sul design One theme con Tailwind CSS
- **Alpine.js**: Interattività fluida senza page reload
- **Accessibilità**: Supporto completo keyboard navigation e screen reader

#### Metodi Principali
```php
// Date abilitate (array o Closure dinamica)
->enabledDates(['2025-06-05', '2025-06-21'])
->enabledDates(fn () => $this->getAvailableDates())

// Personalizzazione colori
->highlightColor('bg-green-600 text-white')

// Layout compatto
->compactMode()

// Controlli navigazione
->showNavigation(false)
```

#### Integrazione con Wizard
```php
InlineDatePicker::make('date')
    ->enabledDates(fn () => $this->getDoctorAvailableDates())
    ->live()
    ->afterStateUpdated(fn ($state) => $this->loadTimeSlots($state))
```

[**📖 Documentazione Completa**](./components/inline-date-picker.md)

### StudioCardSelector

Componente Filament Form per la selezione di studi medici attraverso interfaccia card visuale.

#### Utilizzo Base
```php
use Modules\UI\Forms\Components\StudioCardSelector;

StudioCardSelector::make('selected_studio')
    ->studios(fn (Get $get) => $this->getStudiosForLocation($get))
    ->required();
```

#### Caratteristiche
- **Layout Responsive**: Card stack verticali su mobile, orizzontali su desktop
- **Accessibilità**: Supporto completo keyboard navigation e screen reader
- **Personalizzazione**: Varianti compact/default/detailed
- **Interattività**: Selezione radio con feedback visivo
- **Alpine.js**: Interazioni fluide senza page reload

#### Varianti Layout
```php
// Layout compatto
StudioCardSelector::make('studio')->compact();

// Layout dettagliato con info extra
StudioCardSelector::make('studio')
    ->detailed()
    ->showDistance()
    ->showSpecializations()
    ->showPhone();
```

#### Features Opzionali
- `showDistance()`: Badge distanza con icona mappa
- `showSpecializations()`: Tag specializzazioni mediche  
- `showPhone()`: Numero telefono con icona

[**📖 Documentazione Completa**](./studio-card-selector-implementation.md)

## Componenti Form Filament

### RadioCollection

Componente per la selezione mutuamente esclusiva con interfaccia card personalizzabile.

#### Utilizzo Base
```php
use Modules\UI\Filament\Forms\Components\RadioCollection;

RadioCollection::make('selection')
    ->options(collect([
        (object)['id' => 1, 'name' => 'Opzione 1', 'description' => 'Descrizione 1'],
        (object)['id' => 2, 'name' => 'Opzione 2', 'description' => 'Descrizione 2'],
    ]))
    ->valueKey('id')
    ->itemView('custom.item-template')
    ->required();
```

#### Caratteristiche Avanzate
- **Type Safety**: Comparazione type-safe tra valori per evitare problemi di type coercion
- **Accessibilità**: Supporto completo per screen reader e navigazione keyboard
- **Reattività**: Alpine.js + Livewire per feedback immediato
- **Personalizzazione**: Template item completamente personalizzabile

#### Features Filosofiche
- **Fisica Quantistica**: Ogni opzione esiste in superposizione fino alla selezione
- **Fenomenologia**: Interfaccia progettata per minimizzare interruzioni cognitive
- **Gestalt**: Rispetta principi di prossimità, somiglianza e chiusura
- **Zen**: Design minimalista che riduce all'essenziale

[**📖 Documentazione Filosofica Completa**](./components/radio-collection-component.md)

### LocationSelector

Componente per la selezione gerarchica di dati geografici (Regione → Provincia → CAP).

#### Utilizzo
```php
use Modules\UI\Filament\Forms\Components\LocationSelector;

LocationSelector::make()
    ->regionField('region')
    ->provinceField('province')
    ->capField('cap')
    ->required()
    ->searchable()
```

#### Caratteristiche
- Selezione gerarchica con dipendenze automatiche
- Integrazione con modulo Geo
- Live updates tra i campi
- Validazione cascata
- Gestione errori con logging

## Componenti Blade UI

### StudioSelector

Componente semplificato per la selezione di uno studio odontoiatrico tramite pulsanti radio-style.

#### Utilizzo
```blade
<x-ui::ui.studio-selector 
    :studios="$studios"
    :selected-studio="$selectedStudioId"
    target-field="selected_studio"
/>
```

#### Caratteristiche
- Pulsanti radio-style per selezione singola
- Visual feedback per stato selezionato
- Informazioni compatte (nome, indirizzo, contatti)
- Empty states integrati
- Integrazione Livewire automatica
- Layout responsive

### StudioCard (Completa)

Componente avanzato per la visualizzazione dettagliata di uno studio (per liste, dashboard, dettagli).

#### Utilizzo
```blade
<x-ui::ui.studio-card 
    :studio="$studio"
    :show-distance="true"
    :show-rating="true"
    :show-services="true"
    :actions="['book', 'details', 'contact']"
/>
```

#### Caratteristiche
- Layout responsive completo
- Rating con stelle
- Informazioni di contatto estese
- Servizi offerti
- Azioni personalizzabili
- Orari di apertura

## Componenti SVG

### Bandiere (Flags)

I componenti SVG per le bandiere sono registrati automaticamente e possono essere utilizzati con il prefisso `ui-flags`. 

#### Utilizzo
```blade
{{-- Bandiera italiana --}}
<x-ui-flags.it class="w-6 h-4" />

{{-- Bandiera inglese --}}
<x-ui-flags.gb class="w-6 h-4" />
```

#### Caratteristiche
- Registrazione automatica dei componenti
- Supporto per tutte le bandiere del mondo
- Dimensioni ottimizzate
- Colori ufficiali
- ViewBox corretto per il mantenimento delle proporzioni

#### Best Practices
1. **Dimensioni**
   - Utilizzare classi Tailwind per le dimensioni
   - Mantenere le proporzioni originali (3:2)
   - Esempio: `class="w-6 h-4"`

2. **Accessibilità**
   - Aggiungere attributi `aria-label` quando necessario
   - Fornire testo alternativo per screen reader
   - Esempio:
     ```blade
     <x-ui-flags.it class="w-6 h-4" aria-label="Bandiera italiana" />
     ```

3. **Performance**
   - Gli SVG sono ottimizzati
   - Non richiedono richieste HTTP aggiuntive
   - Caching automatico

4. **Personalizzazione**
   - Possibilità di modificare i colori via CSS
   - Supporto per classi Tailwind
   - Esempio:
     ```blade
     <x-ui-flags.it class="w-6 h-4 text-primary-600" />
     ```

## Collegamenti Correlati
- [Documentazione SVG](./SVG.md)
- [Best Practices UI](./UI_BEST_PRACTICES.md)
- [Guida Componenti](./COMPONENTS_GUIDE.md) 

# Componenti UI - Documentazione Generale

Questo documento descrive i componenti UI disponibili nel modulo UI e le loro funzionalità principali.

## Componenti Form

### RadioCollection - Selettori Radio Personalizzabili

Il componente `RadioCollection` offre un'alternativa avanzata ai radio button standard di Filament, permettendo visualizzazioni ricche e personalizzabili per ogni opzione.

#### Caratteristiche Principali
- **Template Personalizzabili**: Ogni opzione può avere un template visivo personalizzato
- **Accessibilità Completa**: Supporto completo per screen reader e navigazione da tastiera
- **Alpine.js Integration**: Feedback visivo immediato con Alpine.js
- **Performance Ottimizzate**: Rendering efficiente anche con molte opzioni
- **Type Safety**: Comparazione type-safe per evitare problemi di type coercion

#### Utilizzo Base
```php
use Modules\UI\Filament\Forms\Components\RadioCollection;

RadioCollection::make('selection')
    ->options(collect([
        (object)['id' => 1, 'name' => 'Opzione 1', 'description' => 'Descrizione 1'],
        (object)['id' => 2, 'name' => 'Opzione 2', 'description' => 'Descrizione 2'],
    ]))
    ->valueKey('id')
    ->itemView('custom.item-template')
    ->required();
```

#### Personalizzazione Template
```php
// Template item personalizzato: resources/views/custom/item-template.blade.php
<div class="space-y-1">
    <h4 class="font-medium text-gray-900 dark:text-gray-100">
        {{ $item->name }}
    </h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">
        {{ $item->description }}
    </p>
</div>
```

#### API Methods
- `options(Collection $options)` - Imposta la collezione di opzioni
- `valueKey(string $key)` - Imposta la chiave da usare come valore (default: 'id')
- `itemView(string $view)` - Imposta il template personalizzato per ogni item

#### Features Filosofiche
- **Fisica Quantistica**: Ogni opzione esiste in superposizione fino alla selezione
- **Fenomenologia**: Interfaccia progettata per minimizzare interruzioni cognitive
- **Gestalt**: Rispetta principi di prossimità, somiglianza e chiusura
- **Zen**: Design minimalista che riduce all'essenziale

[**📖 Documentazione Filosofica Completa**](./components/radio-collection-component.md)

## Componenti Form Filament

### RadioCollection

Componente per la selezione mutuamente esclusiva con interfaccia card personalizzabile.

#### Utilizzo Base
```php
use Modules\UI\Filament\Forms\Components\RadioCollection;

RadioCollection::make('selection')
    ->options(collect([
        (object)['id' => 1, 'name' => 'Opzione 1', 'description' => 'Descrizione 1'],
        (object)['id' => 2, 'name' => 'Opzione 2', 'description' => 'Descrizione 2'],
    ]))
    ->valueKey('id')
    ->itemView('custom.item-template')
    ->required();
```

#### Caratteristiche Avanzate
- **Type Safety**: Comparazione type-safe tra valori per evitare problemi di type coercion
- **Accessibilità**: Supporto completo per screen reader e navigazione keyboard
- **Reattività**: Alpine.js + Livewire per feedback immediato
- **Personalizzazione**: Template item completamente personalizzabile

#### Features Filosofiche
- **Fisica Quantistica**: Ogni opzione esiste in superposizione fino alla selezione
- **Fenomenologia**: Interfaccia progettata per minimizzare interruzioni cognitive
- **Gestalt**: Rispetta principi di prossimità, somiglianza e chiusura
- **Zen**: Design minimalista che riduce all'essenziale

[**📖 Documentazione Filosofica Completa**](./components/radio-collection-component.md)

### LocationSelector

Il componente `LocationSelector` facilita la selezione di posizioni geografiche con supporto per autocompletamento e validazione.

#### Caratteristiche
- Autocompletamento integrato
- Validazione coordinate
- Supporto mappe integrate
- Geocoding automatico

#### Esempi di Utilizzo
```php
LocationSelector::make('address')
    ->enableMap()
    ->required();
```

## Best Practice

1. **Riutilizzabilità**: Progettare componenti modulari e riutilizzabili
2. **Accessibilità**: Seguire sempre le linee guida WCAG 2.1
3. **Performance**: Ottimizzare il rendering e la reattività
4. **Documentazione**: Mantenere documentazione aggiornata con esempi

## Struttura File

```
Modules/UI/resources/views/components/ui/
├── buttons/
├── cards/
├── forms/
└── layout/
```

Tutti i componenti UI condivisi devono essere posizionati in `Modules/UI/resources/views/components/ui/` seguendo la struttura modulare.

## Collegamenti

- [RadioCollection Debugging](./components/radio-collection-debugging.md)
- [RadioCollection Examples](./components/radio-collection-usage-examples.md)
- [UI Components Architecture](../README.md)

*Documentazione aggiornata: Dicembre 2024* 
=======
# Componenti

## Panoramica
Documentazione dei componenti utilizzati nel progetto, inclusi View Components, Blade Components e altri tipi di componenti riutilizzabili.

## View Components

### Modulo Cms
Il modulo Cms fornisce componenti per la gestione dell'interfaccia utente. [Documentazione Completa](../laravel/Modules/Cms/docs/components/view-components.md)

#### Componenti Principali
- **Section**: Gestione sezioni riutilizzabili
- **AppLayout**: Layout principale
- **GuestLayout**: Layout per ospiti

### Utilizzo Base
```blade
<x-cms::section slug="main-header" />
```

## Best Practices
1. **Modularità**
   - Componenti atomici
   - Configurazione flessibile
   - Riutilizzabilità

2. **Performance**
   - Caching appropriato
   - Lazy loading
   - Ottimizzazione rendering

## Collegamenti
- [Documentazione Modulo Cms](../laravel/Modules/Cms/docs/README.md)
- [Documentazione Sezioni](sections.md)

## Note
Questa documentazione fornisce una panoramica dei componenti disponibili. Per i dettagli completi, consultare la documentazione specifica nei moduli. 
>>>>>>> 0238e98d (.)
=======
=======
>>>>>>> d3afd1fe (.)
# Componenti UI

## Form Components

### CustomSelect
```php
CustomSelect::make('field_name')
    ->label('trans.key')
    ->relationship('relation', 'column')
    ->searchable()
    ->preload()
    ->required()
```

#### Caratteristiche
- Ricerca asincrona
- Precaricamento opzionale
- Supporto per relazioni multiple
- Validazione integrata
- Cache dei risultati

### MoneyInput
```php
use Modules\UI\Forms\Components\MoneyInput;

MoneyInput::make('premio_lordo')
    ->currency('EUR')
    ->step(0.01)
    ->minValue(0)
    ->required()
```

#### Caratteristiche
- Formattazione automatica
- Supporto multi valuta
- Validazione numerica
- Gestione decimali
- Maschere di input

### DateRangePicker
```php
use Modules\UI\Forms\Components\DateRangePicker;

DateRangePicker::make('periodo')
    ->displayFormat('d/m/Y')
    ->minDate(today())
    ->required()
```

#### Caratteristiche
- Selezione range date
- Formati personalizzabili
- Localizzazione
- Validazione range
- Calendario popup

### FileUpload
```php
use Modules\UI\Forms\Components\FileUpload;

FileUpload::make('documento')
    ->disk('s3')
    ->directory('documenti')
    ->acceptedFileTypes(['application/pdf'])
    ->maxSize(5120) // 5MB
```

## Table Components

### CustomDataTable
```php
use Modules\UI\Tables\Components\CustomDataTable;

CustomDataTable::make()
    ->paginated(true)
    ->searchable(['nome', 'email'])
    ->sortable(['created_at'])
    ->bulkActions([
        'delete' => 'Elimina',
        'export' => 'Esporta'
    ])
```

#### Caratteristiche
- Ordinamento colonne
- Filtri avanzati
- Azioni personalizzabili
- Paginazione
- Export dati

### StatusBadge
```php
use Modules\UI\Tables\Components\StatusBadge;

StatusBadge::make('stato')
    ->colors([
        'danger' => 'annullato',
        'warning' => 'sospeso',
        'success' => 'attivo'
    ])
```

#### Caratteristiche
- Colori dinamici
- Icone integrate
- Stati personalizzabili
- Tooltips
- Animazioni

### ActionButtons
```php
use Modules\UI\Tables\Components\ActionButtons;

ActionButtons::make()
    ->actions([
        'view' => [
            'icon' => 'heroicon-o-eye',
            'url' => fn ($record) => route('view', $record)
        ],
        'edit' => [
            'icon' => 'heroicon-o-pencil',
            'url' => fn ($record) => route('edit', $record)
        ]
    ])
```

## Chart Components

### LineChart
```php
use Modules\UI\Charts\Components\LineChart;

LineChart::make()
    ->datasets([
        [
            'label' => 'Vendite',
            'data' => [10, 20, 30],
            'borderColor' => '#4CAF50'
        ]
    ])
    ->labels(['Gen', 'Feb', 'Mar'])
    ->options([
        'responsive' => true,
        'maintainAspectRatio' => false
    ])
```

#### Caratteristiche
- Dati dinamici
- Zoom e pan
- Tooltips interattivi
- Responsive
- Temi personalizzabili

### PieChart
```php
use Modules\UI\Charts\Components\PieChart;

PieChart::make()
    ->datasets([
        [
            'data' => [30, 50, 20],
            'backgroundColor' => ['#4CAF50', '#2196F3', '#FFC107']
        ]
    ])
    ->labels(['A', 'B', 'C'])
```

#### Caratteristiche
- Legenda interattiva
- Animazioni
- Doughnut mode
- Labels personalizzabili
- Export immagine

### StatsOverview
```php
use Modules\UI\Charts\Components\StatsOverview;

StatsOverview::make()
    ->stats([
        [
            'label' => 'Totale Polizze',
            'value' => 1234,
            'icon' => 'heroicon-o-document-text',
            'color' => 'primary'
        ],
        [
            'label' => 'Premi Totali',
            'value' => '€ 123.456',
            'icon' => 'heroicon-o-currency-euro',
            'color' => 'success'
        ]
    ])
```

## Layout Components

### AdminLayout
```php
use Modules\UI\Layouts\Components\AdminLayout;

AdminLayout::make()
    ->title('Dashboard')
    ->breadcrumbs([
        'Home' => route('home'),
        'Dashboard' => null
    ])
    ->notifications(true)
```

#### Caratteristiche
- Sidebar collassabile
- Breadcrumbs
- Notifiche
- Tema dark/light
- Responsive

### PrintLayout
```php
use Modules\UI\Layouts\Components\PrintLayout;

PrintLayout::make()
    ->orientation('portrait')
    ->pageSize('a4')
    ->margins([
        'top' => 20,
        'right' => 15,
        'bottom' => 20,
        'left' => 15
    ])
```

#### Caratteristiche
- Ottimizzato per stampa
- Header/footer personalizzabili
- Paginazione
- Stili CSS print
- No elementi UI

<<<<<<< HEAD
### DarkModeSwitcher
```php
// Livewire Component
use Modules\Ui\Http\Livewire\DarkModeSwitcher;

// In una blade template:
<livewire:ui::dark-mode-switcher />
```

#### Caratteristiche
- Toggle tema chiaro/scuro
- Persistenza con cookie
- Icone dinamiche per modalità chiaro/scuro
- Compatibilità con Tailwind Dark Mode
- Integrazione con Livewire 3

#### View
Il componente utilizza la vista `ui::livewire.dark-mode.switcher` che contiene:
- Button per il toggle tra tema chiaro/scuro
- Script per la gestione del cookie e l'applicazione della classe CSS `.dark`
- SVG icons per modalità chiara e scura

=======
>>>>>>> d3afd1fe (.)
## Componenti Base

### Forms
```blade
<x-ui::form>
  <x-ui::input name="email" type="email" />
  <x-ui::button type="submit">Invia</x-ui::button>
</x-ui::form>
```

### Tables
```blade
<x-ui::table>
  <x-ui::th>Nome</x-ui::th>
  <x-ui::td>{{ $user->name }}</x-ui::td>
</x-ui::table>
```

### Cards
```blade
<x-ui::card>
  <x-ui::card-header>Titolo</x-ui::card-header>
  <x-ui::card-body>Contenuto</x-ui::card-body>
</x-ui::card>
```

## Componenti Complessi

### Modal
```blade
<x-ui::modal id="my-modal">
  <x-slot name="title">Titolo Modal</x-slot>
  <x-slot name="content">Contenuto Modal</x-slot>
</x-ui::modal>
```

### Dropdown
```blade
<x-ui::dropdown>
  <x-ui::dropdown-item>Opzione 1</x-ui::dropdown-item>
  <x-ui::dropdown-item>Opzione 2</x-ui::dropdown-item>
</x-ui::dropdown>
```

## Layout

### Grid
```blade
<x-ui::grid cols="3">
  <div>Colonna 1</div>
  <div>Colonna 2</div>
  <div>Colonna 3</div>
</x-ui::grid>
```

### Container
```blade
<x-ui::container>
  <x-ui::row>
    <x-ui::col>Contenuto</x-ui::col>
  </x-ui::row>
</x-ui::container>
```

## Utility

### Alert
```blade
<x-ui::alert type="success">
  Operazione completata con successo!
</x-ui::alert>
```

### Badge
```blade
<x-ui::badge type="warning">
  Nuovo
</x-ui::badge>
```

### FilterDropdown
```php
use Modules\UI\Components\FilterDropdown;

FilterDropdown::make('stato')
    ->options([
        'attivo' => 'Attivo',
        'sospeso' => 'Sospeso',
        'annullato' => 'Annullato'
    ])
    ->multiple()
    ->searchable()
```

### Modal
```php
use Modules\UI\Components\Modal;

Modal::make('conferma')
    ->title('Conferma Operazione')
    ->content('Sei sicuro di voler procedere?')
    ->actions([
        'confirm' => [
            'label' => 'Conferma',
            'color' => 'primary'
        ],
        'cancel' => [
            'label' => 'Annulla',
            'color' => 'secondary'
        ]
    ])
```

## Best Practices
1. Utilizzare i componenti esistenti invece di crearne di nuovi
2. Mantenere la consistenza nelle props e negli slot
3. Documentare eventuali modifiche o estensioni
4. Testare la responsività su diversi dispositivi

## Temi
- I componenti supportano i temi tramite Tailwind
- Utilizzare le classi di utility per personalizzazioni
- Rispettare le variabili CSS definite nel tema 

## Configurazione Globale

### Tema
```php
// config/ui.php
return [
    'theme' => [
        'colors' => [
            'primary' => '#4CAF50',
            'secondary' => '#2196F3',
            'success' => '#4CAF50',
            'danger' => '#F44336',
            'warning' => '#FFC107'
        ],
        'fonts' => [
            'base' => 'Inter',
            'mono' => 'JetBrains Mono'
        ]
    ]
];
```

### Personalizzazione
```php
// Pubblicare assets
php artisan vendor:publish --tag=ui-assets

// Pubblicare configurazione
php artisan vendor:publish --tag=ui-config

// Pubblicare views
php artisan vendor:publish --tag=ui-views
<<<<<<< HEAD
``` 
>>>>>>> da8a6bc2 (.)
=======
``` 
>>>>>>> d3afd1fe (.)
