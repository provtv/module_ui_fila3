<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Filament\Forms;
use Illuminate\Database\Eloquent\Model;
use Webmozart\Assert\Assert;

// use Squire\Models\Country;

class AddressField extends Forms\Components\Field
{
    /** @var string|callable|null */
    public $relationship;

    protected string $view = 'filament-forms::components.group';

    protected function setUp(): void
    {
        parent::setUp();

        $this->afterStateHydrated(function (AddressField $component, ?Model $record) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/dev
=======
>>>>>>> 57ac32d (.)
            if ($record === null) {
                return;
            }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/dev
>>>>>>> origin/dev
=======
=======
>>>>>>> 14e0cd5 (.)
>>>>>>> 57ac32d (.)
            $data = [
                'country' => null,
                'street' => null,
                'city' => null,
                'state' => null,
                'zip' => null,
            ];
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/dev
=======
>>>>>>> 57ac32d (.)

            $relationship = $this->getRelationship();
            if (!$relationship) {
                return;
            }

            $address = $record->getRelationValue($relationship);
            if ($address !== null && is_object($address) && method_exists($address, 'toArray')) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
            $address = $record->getRelationValue($this->getRelationship());
            if (null !== $address && is_object($address) && method_exists($address, 'toArray')) {
>>>>>>> origin/dev
>>>>>>> origin/dev
=======
=======
            $address = $record?->getRelationValue($this->getRelationship());
            if (null !== $address && is_object($address) && method_exists($address, 'toArray')) {
>>>>>>> 14e0cd5 (.)
>>>>>>> 57ac32d (.)
                $data = $address->toArray();
            }

            $component->state($data);
        });

        $this->dehydrated(false);
    }

    public function relationship(string|callable $relationship): static
    {
        $this->relationship = $relationship;

        return $this;
    }

    public function saveRelationships(): void
    {
        $state = $this->getState();
        $record = $this->getRecord();
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/dev
        
=======

>>>>>>> 57ac32d (.)
        if ($record === null) {
            return;
        }

        $relationship = $this->getRelationship();
        if (!$relationship) {
            return;
        }

        $relation = $record->{$relationship}();
        if (!$relation) {
            return;
        }

        if ($address = $relation->first()) {
            $address->update($state);
        } else {
            $relation->updateOrCreate($state);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
        $relationship = $record->{$this->getRelationship()}();
=======
        }

        $record->touch();
=======
        $relationship = $record?->{$this->getRelationship()}();
>>>>>>> 57ac32d (.)

        if (null === $relationship) {
            return;
        }
        if ($address = $relationship->first()) {
            $address->update($state);
        } else {
            $relationship->updateOrCreate($state);
<<<<<<< HEAD
>>>>>>> origin/dev
>>>>>>> origin/dev
        }

        $record->touch();
=======
        }

        $record?->touch();
>>>>>>> 14e0cd5 (.)
>>>>>>> 57ac32d (.)
    }

    public function getChildComponents(): array
    {
        return [
            Forms\Components\Grid::make()
                ->schema([
                    Forms\Components\Select::make('country')
                        ->searchable(),
                    // ->getSearchResultsUsing(fn (string $query) => Country::where('name', 'like', "%{$query}%")->pluck('name', 'id'))
<<<<<<< HEAD
                    // ->getOptionLabelUsing(fn ($value): ?string => Country::firstWhere('id', $value)->getAttribute('name')),
                ]),
            Forms\Components\TextInput::make('street')

=======
<<<<<<< HEAD
                    // ->getOptionLabelUsing(fn ($value): ?string => Country::firstWhere('id', $value)->getAttribute('name')),
                ]),
            Forms\Components\TextInput::make('street')
=======
                    // ->getOptionLabelUsing(fn ($value): ?string => Country::firstWhere('id', $value)?->getAttribute('name')),
                ]),
            Forms\Components\TextInput::make('street')

>>>>>>> 14e0cd5 (.)
>>>>>>> 57ac32d (.)
                ->maxLength(255),
            Forms\Components\Grid::make(3)
                ->schema([
                    Forms\Components\TextInput::make('city')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('state')
<<<<<<< HEAD
=======
<<<<<<< HEAD
                        ->maxLength(255),
                    Forms\Components\TextInput::make('zip')
=======
>>>>>>> 57ac32d (.)

                        ->maxLength(255),
                    Forms\Components\TextInput::make('zip')

<<<<<<< HEAD
=======
>>>>>>> 14e0cd5 (.)
>>>>>>> 57ac32d (.)
                        ->maxLength(255),
                ]),
        ];
    }

    public function getRelationship(): string
    {
        Assert::string($res = $this->evaluate($this->relationship) ?? $this->getName());

        return $res;
    }
}
