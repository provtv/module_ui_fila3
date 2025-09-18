<?php

declare(strict_types=1);

namespace Modules\UI\Enums;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;

/**
 * Enum for managing table layout types in Filament UI components.
 *
 * This enum provides standardized layout options for tables and data grids,
 * allowing users to toggle between list and grid views with appropriate
 * styling and column configurations.
 *
 * @see \Modules\UI\docs\table-layout-enum-usage.md
 */
enum TableLayoutEnum: string implements HasColor, HasIcon, HasLabel
{
    use TransTrait;
    
    case LIST = 'list';
    case GRID = 'grid';
=======
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Arr;
use Webmozart\Assert\Assert;

enum TableLayoutEnum: string implements HasColor, HasIcon, HasLabel
{
    case GRID = 'grid';
    case LIST = 'list';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 0238e98d (.)
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)

    public static function init(): self
    {
        return self::LIST;
    }

    public function getLabel(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.label');
=======
        return $this->name;
        // return trans('ui::corner-position.'.$this->value.'.label');
>>>>>>> 0238e98d (.)
=======
        return $this->name;
        // return trans('ui::corner-position.'.$this->value.'.label');
>>>>>>> da8a6bc2 (.)
=======
        return $this->name;
        // return trans('ui::corner-position.'.$this->value.'.label');
>>>>>>> d3afd1fe (.)
    }

    public function getColor(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.color');
=======
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
        return match ($this) {
            self::GRID => 'gray',
            self::LIST => 'gray',
        };
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 0238e98d (.)
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
    }

    public function getIcon(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->transClass(self::class, $this->value.'.icon');
    }

    public function getDescription(): string
    {
        return $this->transClass(self::class, $this->value.'.description');
    }

    public function getTooltip(): string
    {
        return $this->transClass(self::class, $this->value.'.tooltip');
    }

    public function getHelperText(): string
    {
        return $this->transClass(self::class, $this->value.'.helper_text');
=======
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
        return match ($this) {
            self::LIST => 'heroicon-o-list-bullet',
            self::GRID => 'heroicon-o-squares-2x2',
        };
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 0238e98d (.)
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
    }

    public function toggle(): self
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return match ($this) {
            self::LIST => self::GRID,
            self::GRID => self::LIST,
        };
=======
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
        // $res = self::LIST === $this ? self::GRID : self::LIST;
        $res = self::GRID === $this ? self::LIST : self::GRID;

        return $res;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 0238e98d (.)
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
    }

    public function isGridLayout(): bool
    {
        return self::GRID === $this;
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function isListLayout(): bool
    {
        return self::LIST === $this;
    }

    /**
     * Get the responsive grid configuration for table content.
     *
     * Returns the number of columns for different screen sizes when using
     * grid layout, or null for list layout.
     *
     * @return array<string, int>|null Grid configuration or null for list layout
     */
    public function getTableContentGrid(): ?array
    {
        return $this->isGridLayout()
            ? [
                'sm' => 1,
                'md' => 2,
                'lg' => 3,
                'xl' => 4,
                '2xl' => 5,
            ]
            : null;
    }

    /**
     * Get the appropriate table columns for this layout type.
     *
     * This method replaces the old debug_backtrace approach with explicit
     * parameter passing for better type safety and testability.
     *
     * @param array<\Filament\Tables\Columns\Column|\Filament\Tables\Columns\ColumnGroup|\Filament\Tables\Columns\Layout\Component> $listColumns Columns for list layout
     * @param array<\Filament\Tables\Columns\Column|\Filament\Tables\Columns\ColumnGroup|\Filament\Tables\Columns\Layout\Component> $gridColumns Columns for grid layout
     *
     * @return array<\Filament\Tables\Columns\Column|\Filament\Tables\Columns\ColumnGroup|\Filament\Tables\Columns\Layout\Component>
     */
    public function getTableColumns(array $listColumns, array $gridColumns): array
    {
        return $this->isGridLayout() ? $gridColumns : $listColumns;
    }

    public static function getOptions(): array
    {
        return [
            self::LIST->value => self::LIST->getLabel(),
            self::GRID->value => self::GRID->getLabel(),
        ];
    }

    public function getContainerClasses(): string
    {
        return match ($this) {
            self::LIST => 'table-layout-list',
            self::GRID => 'table-layout-grid',
        };
=======
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
    /**
     * Undocumented function.
     *
     * @return array<string, int|null>|null
     */
    public function getTableContentGrid(): ?array
    {
        $res = $this->isGridLayout()
            ? [
                'md' => 2,
                'lg' => 3,
                'xl' => 4,
            ]
            : null;

        return $res;
    }

    /**
     * Undocumented function.
     *
     * @return array<\Filament\Tables\Columns\Column|\Filament\Tables\Columns\ColumnGroup|\Filament\Tables\Columns\Layout\Component>
     */
    public function getTableColumns(): array
    {
        $trace = debug_backtrace();
        /** @var ListRecords $caller */
        $caller = Arr::get($trace, '1.object');

        if (! method_exists($caller, 'getGridTableColumns')) {
            throw new \Exception('method getGridTableColumns not found in ['.get_class($caller).']');
        }
        if (! method_exists($caller, 'getListTableColumns')) {
            throw new \Exception('method getListTableColumns not found in ['.get_class($caller).']');
        }

        $columns = $this->isGridLayout()
            ? $caller->getGridTableColumns()
            : $caller->getListTableColumns();

        Assert::isArray($columns);

        return $columns;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 0238e98d (.)
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
    }
}
