<?php

namespace Rappasoft\LaravelLivewireTables\Views\Filters;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Filter;

class NumberFilter extends Filter
{
    /**
     * @return false|numeric
     */
    public function validate($value)
    {
        return is_numeric($value) ? $value : false;
    }

    public function isEmpty($value): bool
    {
        return $value === '';
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render(DataTableComponent $component)
    {
        return view('livewire-tables::components.tools.filters.number', [
            'component' => $component,
            'filter' => $this,
        ]);
    }
}
