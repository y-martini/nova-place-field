<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <input
                ref="field"
                :id="field.name"
                type="text"
                class="w-full form-control form-input form-input-bordered"
                :class="errorClasses"
                :placeholder="field.name"
                v-model="value"
            />
        </template>
    </default-field>
</template>

<script>
import {FormField, HandlesValidationErrors} from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    data() {
        return {
            autocomplete: null,
        }
    },

    mounted() {
        this.autocomplete = this.makeAutocomplete()

        google.maps.event.addListener(this.autocomplete, 'place_changed', this.placeChangedListener);
    },

    destroyed() {
        google.maps.event.clearInstanceListeners(this.autocomplete);
    },

    methods: {
        makeAutocomplete() {
            let options = {
                types: ['address'],
                fields: ['address_components'],
            }

            if (this.field.countries) {
                options.componentRestrictions = {country: this.field.countries}
            }

            return new google.maps.places.Autocomplete(this.$refs.field, options)
        },

        placeChangedListener() {
            let addressComponents = this.autocomplete.getPlace().address_components

            if (this.field.addressComponent) {
                this.value = this.getValue(addressComponents, this.field.addressComponent[0], this.field.addressComponent[0])
            }

            this.emitAll(addressComponents)
        },

        emitAll(addressComponents) {
            let a = {
                'route': 'route',
                'streetNumber': 'street_number',
                'locality': 'locality',
                'postalCode': 'postal_code',
                'administrativeAreaLevel1': 'administrative_area_level_1',
                'administrativeAreaLevel2': 'administrative_area_level_2',
                'administrativeAreaLevel3': 'administrative_area_level_3',
                'administrativeAreaLevel4': 'administrative_area_level_4',
                'administrativeAreaLevel5': 'administrative_area_level_5',
                'administrativeAreaLevel6': 'administrative_area_level_6',
                'administrativeAreaLevel7': 'administrative_area_level_7',
                'country': 'country',
            }

            Object.entries(a).forEach(([k, v]) => {
                if (this.field[k][0]) {
                    this.emit(addressComponents, k, v)
                }
            })
        },

        getValue(addressComponents, field, component) {
            let addressComponent = this.getAddressComponent(addressComponents, component)

            return addressComponent ? (addressComponent[this.field[field][1] ? 'short_name' : 'long_name']) : null
        },

        emit(addressComponents, field, component) {
            Nova.$emit(this.field[field][0] + '-value', this.getValue(addressComponents, field, component))
        },

        /**
         * @param {Array<Object>} components
         * @param {String} type
         * @return {Object|Null}
         */
        getAddressComponent(components, type) {
            for (const component of components) {
                /** @type {Array<String>} */
                let types = component.types

                if (types.includes(type)) {
                    return component
                }
            }

            return null
        },
    },
}
</script>
