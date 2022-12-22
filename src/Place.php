<?php

namespace YuriyMartini\NovaPlaceField;

use Laravel\Nova\Fields\Text;

class Place extends Text
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'yuriy-martini-place-field';

    /**
     * Create a new field.
     *
     * @param string $name
     * @param string|null $attribute
     * @param callable|null $resolveCallback
     * @return void
     */
    public function __construct($name, $attribute = null, callable $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this
            ->addressComponent('route')
            ->route('route')
            ->streetNumber('street_number')
            ->locality('locality')
            ->postalCode('postal_code')
            ->administrativeAreaLevel1('administrative_area_level_1')
            ->administrativeAreaLevel2('administrative_area_level_2')
            ->administrativeAreaLevel3('administrative_area_level_3')
            ->administrativeAreaLevel4('administrative_area_level_4')
            ->administrativeAreaLevel5('administrative_area_level_5')
            ->administrativeAreaLevel6('administrative_area_level_6')
            ->administrativeAreaLevel7('administrative_area_level_7')
            ->country('country');
    }

    /**
     * Specify the field that contains the country.
     *
     * @param string|null $field
     * @param bool $shortName
     * @return $this
     */
    public function country(?string $field, bool $shortName = false): self
    {
        return $this->withMeta([__FUNCTION__ => [$field, $shortName]]);
    }

    /**
     * Specify the field that contains the seventh-order civil entity below the country level.
     *
     * @param string|null $field
     * @param bool $shortName
     * @return $this
     */
    public function administrativeAreaLevel7(?string $field, bool $shortName = false): self
    {
        return $this->withMeta([__FUNCTION__ => [$field, $shortName]]);
    }

    /**
     * Specify the field that contains the sixth-order civil entity below the country level.
     *
     * @param string|null $field
     * @param bool $shortName
     * @return $this
     */
    public function administrativeAreaLevel6(?string $field, bool $shortName = false): self
    {
        return $this->withMeta([__FUNCTION__ => [$field, $shortName]]);
    }

    /**
     * Specify the field that contains the fifth-order civil entity below the country level.
     *
     * @param string|null $field
     * @param bool $shortName
     * @return $this
     */
    public function administrativeAreaLevel5(?string $field, bool $shortName = false): self
    {
        return $this->withMeta([__FUNCTION__ => [$field, $shortName]]);
    }

    /**
     * Specify the field that contains the fourth-order civil entity below the country level.
     *
     * @param string|null $field
     * @param bool $shortName
     * @return $this
     */
    public function administrativeAreaLevel4(?string $field, bool $shortName = false): self
    {
        return $this->withMeta([__FUNCTION__ => [$field, $shortName]]);
    }

    /**
     * Specify the field that contains the third-order civil entity below the country level.
     *
     * @param string|null $field
     * @param bool $shortName
     * @return $this
     */
    public function administrativeAreaLevel3(?string $field, bool $shortName = false): self
    {
        return $this->withMeta([__FUNCTION__ => [$field, $shortName]]);
    }

    /**
     * Specify the field that contains the second-order civil entity below the country level.
     *
     * @param string|null $field
     * @param bool $shortName
     * @return $this
     */
    public function administrativeAreaLevel2(?string $field, bool $shortName = false): self
    {
        return $this->withMeta([__FUNCTION__ => [$field, $shortName]]);
    }

    /**
     * Specify the field that contains the first-order civil entity below the country level.
     *
     * @param string|null $field
     * @param bool $shortName
     * @return $this
     */
    public function administrativeAreaLevel1(?string $field, bool $shortName = false): self
    {
        return $this->withMeta([__FUNCTION__ => [$field, $shortName]]);
    }

    /**
     * Specify the field that contains the postal code.
     *
     * @param string|null $field
     * @param bool $shortName
     * @return $this
     */
    public function postalCode(?string $field, bool $shortName = false): self
    {
        return $this->withMeta([__FUNCTION__ => [$field, $shortName]]);
    }

    /**
     * Specify the field that contains the incorporated city or town political entity.
     *
     * @param string|null $field
     * @param bool $shortName
     * @return $this
     */
    public function locality(?string $field, bool $shortName = false): self
    {
        return $this->withMeta([__FUNCTION__ => [$field, $shortName]]);
    }

    /**
     * Specify the field that contains the street number.
     *
     * @param string|null $field
     * @param bool $shortName
     * @return $this
     */
    public function streetNumber(?string $field, bool $shortName = false): self
    {
        return $this->withMeta([__FUNCTION__ => [$field, $shortName]]);
    }

    /**
     * Specify the field that contains the named route.
     *
     * @param string|null $field
     * @param bool $shortName
     * @return $this
     */
    public function route(?string $field, bool $shortName = false): self
    {
        return $this->withMeta([__FUNCTION__ => [$field, $shortName]]);
    }

    /**
     * Set the address component to fill the field with.
     *
     * @param string|null $field
     * @param bool $shortName
     * @return $this
     */
    public function addressComponent(?string $field, bool $shortName = false): self
    {
        return $this->withMeta([__FUNCTION__ => [$field, $shortName]]);
    }

    /**
     * Set the countries to search within.
     *
     * @param array<string> $countries
     * @return $this
     */
    public function countries(array $countries): self
    {
        return $this->withMeta(['countries' => $countries]);
    }
}
