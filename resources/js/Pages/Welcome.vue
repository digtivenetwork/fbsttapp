<script setup>
import WelcomePageLayout from '@/Layouts/WelcomePageLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { initFlowbite } from 'flowbite';
import { onMounted } from 'vue';

onMounted(() => {
  initFlowbite();
});

// initialize components based on data attribute selectors

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
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
            <div class="flex flex-row sm:flex sm:flex-row">
                <!-- <div class="grid grid-rows-2 grid-flow-col gap-1 justify-stretch items-center bg-white px-4 py-10 shadow rounded-md w-1/4 sm:w-max"> -->
                <div class=" bg-white px-4 py-10 shadow rounded-md w-1/4 sm:w-max">
                    <div class="row-span-2 .. ">
                        <img class="h-16 w-16 rounded-full relative -right-10" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                    </div>
                    <div class="col-span-2 .. pl-1 font-bold ">John Doe</div>
                    <div class="col-span-2 .. pl-1 text-green-600 text-sm">john.doe@email.com</div>
                </div>
                <!-- <div class="grid grid-rows-3 grid-flow-col gap-4 bg-white p-4 shadow rounded-md w-96">
                    <div class="rowspan-3 ">
                        <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                    </div>
                    <div class="colspan-2 ml-4 w-full">John Doe</div>
                    <div class="ml-4">John Doe</div>
                </div> -->
                <div class="bg-white p-4 shadow rounded-md ml-4 w-3/4">
                    <div class="h-4 w-36">

                    </div>
                </div>
            </div>
        </template>
    </WelcomePageLayout>
</template>
<style>
</style>