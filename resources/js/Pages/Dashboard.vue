<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
defineProps({
    claim_data : {
        type: Object
    },
    
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Claimed</h2>
        </template>

        <div class="py-12">
            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 ">
                       <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                            <th class="px-6 py-3">Claim ID</th>
                            <th class="px-6 py-3">Claim Date</th>
                            <th class="px-6 py-3">Claimed Prize</th>
                            <th class="px-6 py-3">Full Name</th>
                            <th class="px-6 py-3">Email</th>
                            <th class="px-6 py-3">Phone Number</th>
                            <th class="px-6 py-3">Country</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="data in claim_data.data">
                            <!-- <tr> -->
                                <td class="px-6 py-3">{{ data.claim_code }}</td>
                                <td class="px-6 py-3">{{ data.created_at }}</td>
                                <td class="px-6 py-3">{{ data.prizes?.prize_name }}</td>
                                <td class="px-6 py-3">{{ data.users_profile?.first_name +' '+data.users_profile?.last_name ?? ''}}</td>
                                <td class="px-6 py-3">{{ data.users?.email }}</td>
                                <td class="px-6 py-3">{{ data.users_profile?.phone }}</td>
                                <td class="px-6 py-3">{{ data.users_profile?.country }}</td>
                                <td class="px-6 py-3">
                                    <span v-show="data.status === 1" class="bg-blue-500 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                                        Order Received
                                    </span>
                                    <span v-show="data.status === 2" class="bg-red-600 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                                        Order Rejected
                                    </span>
                                    <span v-show="data.status === 3" class="bg-green-500 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                                        Order Approved
                                    </span>
                                    <span v-show="data.status === 4" class="bg-yellow-400 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                                        Preparing
                                    </span>
                                    <span v-show="data.status === 5" class="bg-cyan-400 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                                        Out For Delivery
                                    </span>
                                </td>
                                <td class="px-6 py-3">
                                    <Link class="bg-blue-500 hover:bg-blue-700 text-white px-2 py-1 text-s rounded-md" :href="route('dashboard.edit', data.idclaim )">
                                        <i class="fa-solid fa-pencil "></i>
                                    </Link>
                                </td>
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
