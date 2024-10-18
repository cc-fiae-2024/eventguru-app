@props(['options', 'property', 'child-property', 'value' => ''])

<div x-data="{
        open: false,
        search: '',
        selectedId: null,
        options: @js($options),
        childProperty: @js($childProperty),
        get filteredOptions() {
            if (!this.search.trim()) return this.options;

            return filteredParents = this.options.filter((option) => {
                return option[this.childProperty].some((item) => {
                    return item.name.toLowerCase().includes(this.search.toLowerCase());
                });
            });
        },
        filteredChildren(headId) {
            let items = this.filteredOptions.find(option => option.id === headId)[this.childProperty];
            return items.filter(item => item.name.toLowerCase().includes(this.search.toLowerCase()))
        },
        get selectedOption() {
            if (!this.selectedId) return null;
            return this.options.find(option => option[this.childProperty].id === this.selectedId);
        },
        selectOption(option) {
            this.selectedId = option.id;
            this.search = option.name;
            this.open = false;
        },
        clear() {
            this.selectedId = null;
            this.search = '';
        }
    }"
>
    <div class="relative mt-2">
        <div class="relative cursor-pointer text-normal ">
            <x-input
                class="block mt-1 w-full truncate"
                @click="open = !open" type="text"
                @input.type.defer="open = true"
                x-model="search" wire:model="search"
                x-value="selectedOption ? selectedOption.name : 'Select an option"
                autocomplete="off"
            />
            <x-input type="hidden" :name="$property" x-model="selectedId" :value="$value" wire:model="value" />

            <span class="cursor-default absolute inset-y-0 right-0 flex items-center pr-2">
                <svg x-show="!selectedId"
                    class="h-5 w-5 text-gray-800 pointer-events-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                </svg>
                <template x-if="selectedId">
                    <i class="bi bi-x-circle-fill text-gray-400 pr-1.5 hover:cursor-pointer h-5 w-5"
                       title="Clear"
                       @click="clear"></i>
                </template>
            </span>
        </div>

        <div x-show="open" @click.away="open = false" x-cloak class="absolute z-50 mt-1 max-h-60 w-full py-1 text-base ">
            <ul class="max-h-60 overflow-auto pl-2 bg-white dark:bg-gray-600 dark:text-gray-100 rounded-md shadow-lg">
                <template x-for="option in filteredOptions" :key="option.id">
                    <li class="cursor-default select-none py-2 pl-0.5 text-gray-300">
                        <span x-text="option.name" class="font-normal block truncate"></span>
                        <ul class="pl-3">
                            <template x-for="nestedOption in filteredChildren(option.id)" :key="nestedOption.id">
                                <li class="cursor-pointer select-none py-2 pl-0.5 hover:bg-gray-100 hover:text-gray-800" :class="{'bg-sky-600 text-white': selectedOption && selectedOption.id === nestedOption.id}" @click="selectOption(nestedOption)">
                                    <span x-text="`${nestedOption.name} - ${nestedOption.zip_code}`" class="font-normal block truncate text-gray-700"></span>
                                </li>
                            </template>
                        </ul>
                    </li>
                </template>
            </ul>
        </div>
    </div>
</div>
