<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
import JetButton from '@/Jetstream/Button.vue';
import JetFormSection from '@/Jetstream/FormSection.vue';
import JetInput from '@/Jetstream/Input.vue';
import JetInputError from '@/Jetstream/InputError.vue';
import JetLabel from '@/Jetstream/Label.vue';

const form = useForm({
    name: '',
    abbreviation: '',
});

const createWordType = () => {
    form.post(route('word-types.store'), {
        errorBag: 'createWordType',
        preserveScroll: true,
    });
};
</script>

<template>
    <JetFormSection @submitted="createWordType">
        <template #title>
            Word Type Details
        </template>

        <template #description>
            Create a new word type that used to classify words in the dictionary.
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-4">
                <JetLabel for="name" value="Word Type Name" />
                <JetInput
                    id="name"
                    v-model="form.name"
                    type="text"
                    class="block w-full mt-1"
                    autofocus
                />
                <JetInputError :message="form.errors.name" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <JetLabel for="name" value="Abbreviation" />
                <JetInput
                    id="name"
                    v-model="form.abbreviation"
                    type="text"
                    class="block w-full mt-1"
                    autofocus
                />
                <JetInputError :message="form.errors.abbreviation" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Create
            </JetButton>
        </template>
    </JetFormSection>
</template>
