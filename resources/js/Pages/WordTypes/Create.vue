<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import CreateWordTypeForm from '@/Pages/WordTypes/Partials/CreateWordTypeForm.vue';
</script>

<template>
    <AppLayout title="Create Word Type">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Word Type
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <CreateWordTypeForm />
            </div>
        </div>
    </AppLayout>
</template>