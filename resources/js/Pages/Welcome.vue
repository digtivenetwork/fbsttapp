<script setup>
import WelcomePageLayout from '@/Layouts/WelcomePageLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { initFlowbite } from 'flowbite';
import { onMounted } from 'vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Table from '@/Components/Table.vue';
import Tablev2 from '@/Components/Tablev2.vue';
import Pagination from '@/Components/Pagination.vue';

onMounted(() => {
  initFlowbite();
});



defineProps({
    prizes:{
        type: Object
    },
    user_trading:{
        type: Object
    }
});

</script>

<template>
    <Head title="Welcome" />
    <WelcomePageLayout>
        <template #promo-carousel>
            <div class="relative h-8">Latest Promotion</div>
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-80 overflow-hidden rounded-lg md:h-80">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="../../images/banner-1.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" >
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="../../images/banner-2.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-200/30 dark:bg-gray-800/30 group-hover:bg-gray-200/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-gray-200 dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-gray-200 dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-200/30 dark:bg-gray-800/30 group-hover:bg-gray-200/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-gray-200 dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-gray-200 dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </template>

        <template #customer-card>
            <div class="flex flex-col lg:flex-row gap-5">
                <!-- <div class="grid grid-rows-2 grid-flow-col gap-1 justify-stretch items-center bg-white px-4 py-10 shadow rounded-md w-1/4 sm:w-max"> -->
                <div class="flex flex-col md:flex-row flex-shrink-0 items-center justify-center bg-white shadow rounded-md w-full lg:w-1/4 md:py-5 lg:py-0">
                    <div class="row-span-2 .. p-2">
                        <img class="h-24 w-24 rounded-full object-cover relative" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                    </div>
                    <div class="row-span-2 .. p-2 text-center lg:text-start">
                        <div class="col-span-2 .. mb-2 text-green-600 font-bold ">{{ user_trading.users.users_profiles?.first_name +" "+user_trading.users.users_profiles?.last_name }}</div>
                        <div class="col-span-2 .. mb-2 text-sm">{{ user_trading.users.email  }}</div>
                        <div class="col-span-2 .. mb-2 text-xs text-stone-500">Update every friday before midnight</div>
                        
                    </div>
                </div>
                <div class="bg-white shadow rounded-md w-full">
                    <div class="text-2xl p-4">
                        Lots Traded And Deposit Will Be Update Every Friday Before Midninght
                    </div>
                    <div class="h-[1px] w-full my-5 bg-neutral-400"></div>
                    <div class="flex flex-col md:flex-row gap-5 p-4">
                        <div class="w-full md:w-6/12 bg-[#26914A] rounded-[16px]">
                            <div class="flex justify-between items-center p-5">
                                <div>
                                    <div class="text-white text-4xl mb-5">Deposit</div>
                                    <div class="text-white text-5xl font-bold">{{ $numberFormat(user_trading.deposit) }}</div>
                                </div>
                                <span class="border rounded-full p-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#fff" class="bi bi-cash-coin" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"></path><path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"></path><path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"></path><path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"></path></svg>
                                </span>
                            </div>
                        </div>
                        <div class="w-full md:w-6/12 bg-[#26914A] rounded-[16px]">
                            <div class="flex justify-between items-center p-5">
                                <div>
                                    <div class="text-white text-4xl mb-5">Lots Traded</div>
                                    <div class="text-white text-5xl font-bold">{{ $numberFormat(user_trading.lots) }}</div>
                                </div>
                                <span class="border rounded-full p-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#fff" class="bi bi-coin" viewBox="0 0 16 16"><path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"></path><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </template>
        <template #prize-card>
            <div 
            class="w-full flex flex-col md:flex-row items-center justify-center gap-5">
                <div v-for="prize in prizes"
                class="bg-white w-full md:w-1/4 rounded-[16px] p-2 flex flex-col items-center justify-center text-center">
                    <img class="mb-3" :src="prize.prize_image" alt="">
                    <div class="mb-3">
                        <div>
                            {{ prize.prize_name }}
                        </div>
                        <div class="text-green-600">
                            Required: {{ prize.deposit_required }} Deposit,  {{ prize.lots_required }} Lots
                        </div>
                    </div>
                    <Link :href="route('claimprize')"
                    class="inline-flex items-center px-4 py-2 bg-green-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                    >
                    Claim Prize</Link>
                </div>
            </div>
        </template>
        <template #order-list-table>
            <div class="bg-white rounded-lg">
                <div class="text-2xl p-4">
                    Order List
                </div>
                <div class="h-[1px] w-full my-5 bg-neutral-100"></div>
                <Table></Table>
                <div class="h-[1px] w-full my-5 bg-neutral-100"></div>
                <div class="flex items-center justify-center p-5 pb-10">
                    <!-- <Pagination></Pagination> -->
                </div>
            </div>
        </template>
    </WelcomePageLayout>
</template>
<style>
</style>