<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, useForm, usePage } from '@inertiajs/vue3';

const props = defineProps({
    claimedPrize : {
        type: Object
    },
    optionValues: {
        type: Array,
        default:()=>[
            {value :1, label:'Order Recieved'},
            {value :2, label:'Order Rejected'},
            {value :3, label:'Order Approved'},
            {value :4, label:'Preparing'},
            {value :5, label:'Out For Delivery'},
        ],
    }
});

const form = useForm({
    status:usePage().props.claimedPrize?.status
});

function submit(){
    if (form.processing) {
        return false
    }
    // form.submit(
    //     'put',
    //     route('dashboard.update', props.claimedPrize.idclaim),
    //     {
    //         preserveState:false
    //     }
    // );
    form.put(route('dashboard.update', props.claimedPrize.idclaim))
}

</script>
<template>    
<Head title="Edit Claimed Prize" />
<AuthenticatedLayout>
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Claimed Prize</h2>
    </template>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <section>
                    <header>
                    <h2 class="text-lg font-medium text-gray-900">Update Claimed Prize Status</h2>

                    <p class="mt-1 text-sm text-gray-600">
                        Change the customer claimed prize progression here.
                    </p>
                    </header>
                </section>
                <form @submit.prevent="submit" class="mt-6 space-y-6">
                    <div>
                        <InputLabel for="status" value="Status" />
                        <select v-model="form.status" id="status" class="w-2/12 bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option v-for="optionValues in optionValues" 
                                    :value="optionValues.value"
                                    v-bind:value="claimedPrize.status"
                                    :selected="optionValues.value == claimedPrize.status"
                                    >
                                {{ optionValues.label }}
                            </option>
                            
                        </select>
                        <!-- <InputError class="mt-2"  :message="form.errors.file"/> -->
                    </div>
                    <div>
                        <InputLabel for="notes" value="Notes" />
                        <textarea id="notes" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                        </textarea>
                    </div>
                    <div class="flex items-center gap-4">
                        <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                        <Transition
                            enter-active-class="transition ease-in-out"
                            enter-from-class="opacity-0"
                            leave-active-class="transition ease-in-out"
                            leave-to-class="opacity-0"
                        >
                            <p v-if="form.recentlySuccessful" class="text-lg text-green-600 font-bold">Saved Successfully!</p>
                        </Transition>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 space-y-6 mt-3">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <section>
                    <header>
                    <h2 class="text-lg font-medium text-gray-900">Claimed Prize Details</h2>

                    <!-- <p class="mt-1 text-sm text-gray-600">
                        Change the customer claimed prize progression here.
                    </p> -->
                    </header>
                </section>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                    <th class="px-6 py-3">Full Name</th>
                    <th class="px-6 py-3">Email</th>
                    <th class="px-6 py-3">Address</th>
                    <th class="px-6 py-3">Country</th>
                    <th class="px-6 py-3">Phone Number</th>
                    <th class="px-6 py-3">Claimed Prize</th>
                    <th class="px-6 py-3">Claim Code</th>
                    <th class="px-6 py-3">Claim Date</th>
                    <th class="px-6 py-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr v-for="data in claim_data"> -->
                    <tr>
                        <td class="px-6 py-3">{{ claimedPrize.users_profile?.full_name }}</td>
                        <td class="px-6 py-3">{{ claimedPrize.users?.email }}</td>
                        <td class="px-6 py-3">{{ claimedPrize.users_profile?.address }}</td>
                        <td class="px-6 py-3">{{ claimedPrize.users_profile?.country }}</td>
                        <td class="px-6 py-3">{{ claimedPrize.users_profile?.phone }}</td>
                        <td class="px-6 py-3">{{ claimedPrize.prizes?.prize_name }}</td>
                        <td class="px-6 py-3">{{ claimedPrize.claim_code }}</td>
                        <td class="px-6 py-3">{{ claimedPrize.created_at }}</td>
                        <td class="px-6 py-3">
                            <span v-show="claimedPrize.status === 1" class="bg-blue-500 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                                Order Received
                            </span>
                            <span v-show="claimedPrize.status === 2" class="bg-red-600 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                                Order Rejected
                            </span>
                            <span v-show="claimedPrize.status === 3" class="bg-green-500 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                                Order Approved
                            </span>
                            <span v-show="claimedPrize.status === 4" class="bg-yellow-400 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                                Preparing
                            </span>
                            <span v-show="claimedPrize.status === 5" class="bg-cyan-400 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                                Out For Delivery
                            </span>
                        </td>
                        
                    </tr>
                </tbody>
                </table> 
            </div>
        </div>
    </div>
    
</AuthenticatedLayout>
</template>