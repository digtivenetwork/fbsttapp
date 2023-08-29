<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({
    file: null
});

function submit(){
    if (form.processing) { 
        return false
    }
    form.post(route('import.upload'))
}

</script>
<template>
    <Head title="Upload" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Upload File</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <section>
                        <header>
                        <h2 class="text-lg font-medium text-gray-900">Select Your File</h2>

                        <p class="mt-1 text-sm text-gray-600">
                            Upload your selected file here
                        </p>
                        </header>
                    </section>
                    <form @submit.prevent="submit" class="mt-6 space-y-6">
                    <div>
                        <InputLabel for="file" value="File Path" />
                        <input id="file" 
                        type="file" 
                        @input="form.file = $event.target.files[0]"
                        class="block w-6/12 mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-teal-300" 
                        /> 
                       

                        <!-- <InputError class="mt-2"  :message="form.errors.file"/> -->
                    </div>
                    <div class="flex items-center gap-4">
                        <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                        <Transition
                            enter-active-class="transition ease-in-out"
                            enter-from-class="opacity-0"
                            leave-active-class="transition ease-in-out"
                            leave-to-class="opacity-0"
                        >
                            <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                        </Transition>
                    </div>
                    </form>
                
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>