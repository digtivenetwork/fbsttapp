<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Pagination from '@/Components/Pagination.vue'
import { Head, Link } from '@inertiajs/vue3';
defineProps({
    import_data : {
        type: Object
    },
    
});
</script>

<template>
    <Head title="Import" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Imported Data</h2>
        </template>

        <div class="py-12" >
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 ">
                        <div class="flex flex-row-reverse my-4">
                            <Link :href="route('import.uploadform')" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded inline-flex items-center">
                                <svg class="w-4 h-4 text-gray-800 dark:text-white mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                                    <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                                    <path d="M14.067 0H7v5a2 2 0 0 1-2 2H0v4h7.414l-1.06-1.061a1 1 0 1 1 1.414-1.414l2.768 2.768a1 1 0 0 1 0 1.414l-2.768 2.768a1 1 0 0 1-1.414-1.414L7.414 13H0v5a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.933-2Z"/>
                                </svg>
                                Import
                            </Link>
                        </div>
                       
                       <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                            <th class="px-6 py-3">File Name</th>
                            <th class="px-6 py-3">Import Date</th>
                            <th class="px-6 py-3">Import By</th>
                            <th class="px-6 py-3">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="data in import_data.data">
                                <td class="px-6 py-3">{{ data.filename }}</td>
                                <td class="px-6 py-3">{{ data.created_at }}</td>
                                <td class="px-6 py-3">{{ data.users?.name ?? '-'}}</td>
                                <td class="px-6 py-3">{{ data.message }}</td>
                            </tr>
                        </tbody>
                        </table> 
                        <Pagination :links="import_data.links"></Pagination>
                    </div>
                    
                    <!-- <div class="p-6 text-gray-900">{{data.filename }}</div> -->
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
