<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import JetButton from '@/Jetstream/Button.vue';
import { Link } from '@inertiajs/inertia-vue3';
import WordTypeTable from '@/Pages/WordTypes/Partials/WordTypeTable';

const props = defineProps({
    wordTypes: Array
});
</script>

<template>
    <AppLayout title="Word Types">
        <template #header>
            <div class="flex items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Word Types
                </h2>

                <Link :href="route('word-types.create')" class="ml-auto">
                    <JetButton>Create</JetButton>
                </Link>
            </div>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <WordTypeTable :wordTypes="wordTypes" />
            </div>
        </div>
    </AppLayout>
</template>