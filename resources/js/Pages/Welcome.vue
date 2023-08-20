<script setup>
import WelcomePageLayout from '@/Layouts/WelcomePageLayout.vue';
import PromoBanner from '@/Components/PromoBanner.vue';
import { Head, Link } from '@inertiajs/vue3';


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
        
    </WelcomePageLayout>
</template>
<style>
</style>