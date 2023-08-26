<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Claimed</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 ">
                       <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                            <th class="px-6 py-3">Full Name</th>
                            <th class="px-6 py-3">Email</th>
                            <th class="px-6 py-3">Address</th>
                            <th class="px-6 py-3">Phone Number</th>
                            <th class="px-6 py-3">Claimed Prize</th>
                            <th class="px-6 py-3">Claime Code</th>
                            <th class="px-6 py-3">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr v-for="data in import_data.data"> -->
                            <tr>
                                <td class="px-6 py-3">&nbsp;</td>
                                <td class="px-6 py-3">&nbsp;</td>
                                <td class="px-6 py-3">&nbsp;</td>
                                <td class="px-6 py-3">&nbsp;</td>
                                <td class="px-6 py-3">&nbsp;</td>
                                <td class="px-6 py-3">&nbsp;</td>
                                <td class="px-6 py-3">&nbsp;</td>

                            </tr>
                        </tbody>
                        </table> 
                        <!-- <Pagination :links="import_data.links"></Pagination> -->
                    </div>
                    
                    <!-- <div class="p-6 text-gray-900">{{data.filename }}</div> -->
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
