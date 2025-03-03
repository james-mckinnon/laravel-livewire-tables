<?php

namespace Rappasoft\LaravelLivewireTables\Views\Traits\Helpers;

trait LinkColumnHelpers
{
    // TODO: Test
    public function getTitleCallback()
    {
        return $this->titleCallback;
    }

    public function hasTitleCallback(): bool
    {
        return $this->titleCallback !== null;
    }

    public function getLocationCallback()
    {
        return $this->locationCallback;
    }

    public function hasLocationCallback(): bool
    {
        return $this->locationCallback !== null;
    }

    public function getAttributesCallback()
    {
        return $this->attributesCallback;
    }

    public function hasAttributesCallback(): bool
    {
        return $this->attributesCallback !== null;
    }

    public function getView(): string
    {
        return $this->view;
    }
}
