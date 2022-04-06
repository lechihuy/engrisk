<script setup>
import JetDropdown from '@/Jetstream/Dropdown';
import JetDropdownLink from '@/Jetstream/DropdownLink';
import { computed, ref } from 'vue';
import { Inertia } from '@inertiajs/inertia'
const props = defineProps({
    wordTypes: Array
});

const q = ref('');

const search = () => {
    _.debounce(function() {
        Inertia.visit(route('word-types.index', { q: q.value }), { 
            only: ['wordTypes'], 
            preserveState: true, 
            preserveScroll: true, 
        });
    }, 100)();
};
</script>

<template>
    <div class="flex items-center mb-5">
        <input 
            type="search" class="form-text border border-gray-300 shadow rounded-lg" 
            placeholder="Search..." v-model="q" @keyup="search" 
        />
    </div>

    <div class="flex flex-col rounded-lg shadow divide-y divide-gray-100">
        <template v-for="wordType in wordTypes" :key="wordType.id">
            <div class="bg-white p-7 flex items-center first:rounded-t-lg last:rounded-b-lg">
                <div class="grow">
                    <h3 class="text-xl" v-text="wordType.name"></h3>
                    <code class="text-pink-600" v-text="wordType.abbreviation"></code>
                </div>
                <div class="ml-auto">
                    <JetDropdown align="right" width="60">
                        <template #trigger>
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </button>
                            </span>
                        </template>

                        <template #content>
                            <div class="w-32">
                                <JetDropdownLink :href="route('word-types.edit', { word_type: wordType.id })">
                                    Edit
                                </JetDropdownLink>
                            </div>
                        </template>
                    </JetDropdown>
                </div>
            </div>
        </template>
    </div>
</template>
