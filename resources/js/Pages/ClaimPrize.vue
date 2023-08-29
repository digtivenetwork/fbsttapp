<script setup>
import ClaimPrizeLayout from '@/Layouts/ClaimPrizeLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
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
    <ClaimPrizeLayout>
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
                <!-- <div class="grid grid-rows-3 grid-flow-col gap-4 bg-white p-4 shadow rounded-md w-96">
                    <div class="rowspan-3 ">
                        <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                    </div>
                    <div class="colspan-2 ml-4 w-full">John Doe</div>
                    <div class="ml-4">John Doe</div>
                </div> -->
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
                                    <div class="text-white text-5xl font-bold">${{ $numberFormat(user_trading.deposit) }}</div>
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

        <template #prize-w-form>
            <div class="w-full flex flex-col md:flex-row items-start justify-center gap-5">
                <div class="bg-white w-full md:w-[33%] rounded-[16px] flex flex-col items-center justify-center text-center p-5 shadow">
                    <img class="mb-3" src="https://tradingtriumph.fbs-campaigns-th.com/dashboard/images/Prize/prize-1.png" alt="">
                    <div class="mb-3">
                        <div>
                            Prize 1 : Giftset
                        </div>
                        <div class="text-green-600">
                            Required: 200$ Deposit 10 Lots
                        </div>
                    </div>
                </div>
                <div class="bg-white w-full rounded-[16px] flex flex-col items-center justify-center text-center p-5 shadow">
                    <div class="flex items-center justify-center">
                        <div class="text-xl p-4">
                            Fill The Address Form For Deliver Your Prize
                        </div>
                    </div>
                    <div class="h-[1px] w-full my-5 bg-neutral-400"></div>
                    <div class="w-full flex items-center justify-center mb-5">
                        <div class="w-[95%] flex flex-wrap items-center justify-between">
                            <div class="w-[50%] flex flex-col items-start justify-start py-3">
                                <label class="form-label">House/ Building number</label>
                                <input type="text" class="w-[95%]">
                            </div>
                            <div class="w-[50%] flex flex-col items-start justify-start py-3">
                                <label class="form-label">Street, Road, Alley</label>
                                <input type="text" class="w-[95%]">
                            </div>
                            <div class="w-[50%] flex flex-col items-start justify-start py-3">
                                <label class="form-label">Sub-District</label>
                                <input type="text" class="w-[95%]">
                            </div>
                            <div class="w-[50%] flex flex-col items-start justify-start py-3">
                                <label class="form-label">District</label>
                                <input type="text" class="w-[95%]">
                            </div>
                            <div class="w-[50%] flex flex-col items-start justify-start py-3">
                                <label class="form-label">Province</label>
                                <input type="text" class="w-[95%]">
                            </div>
                            <div class="w-[50%] flex flex-col items-start justify-start py-3">
                                <label class="form-label">Zip Code</label>
                                <input type="number" class="w-[95%]">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <PrimaryButton>Submit</PrimaryButton>
                    </div>                    
                </div>
            </div>
        </template>

        <template #other-prize>
            <div class="w-full flex flex-row md:flex-col items-start justify-center gap-5">
                <div class="text-2xl p-4">
                    Other Items
                </div>
                <div class="w-full flex flex-col md:flex-row items-start justify-center gap-5">
                    <div class="bg-white w-full md:w-1/4 rounded-[16px] flex flex-col items-center justify-center text-center p-5 shadow">
                        <img class="mb-3" src="https://tradingtriumph.fbs-campaigns-th.com/dashboard/images/Prize/prize-1.png" alt="">
                        <div class="mb-3">
                            <div>
                                Prize 1 : Giftset
                            </div>
                            <div class="text-green-600">
                                Required: 200$ Deposit 10 Lots
                            </div>
                        </div>
                        <PrimaryButton>Claim Prize</PrimaryButton>
                    </div>
                    <div class="bg-white w-full md:w-1/4 rounded-[16px] flex flex-col items-center justify-center text-center p-5 shadow">
                        <img class="mb-3" src="https://tradingtriumph.fbs-campaigns-th.com/dashboard/images/Prize/prize-1.png" alt="">
                        <div class="mb-3">
                            <div>
                                Prize 1 : Giftset
                            </div>
                            <div class="text-green-600">
                                Required: 200$ Deposit 10 Lots
                            </div>
                        </div>
                        <PrimaryButton>Claim Prize</PrimaryButton>
                    </div>
                    <div class="bg-white w-full md:w-1/4 rounded-[16px] flex flex-col items-center justify-center text-center p-5 shadow">
                        <img class="mb-3" src="https://tradingtriumph.fbs-campaigns-th.com/dashboard/images/Prize/prize-1.png" alt="">
                        <div class="mb-3">
                            <div>
                                Prize 1 : Giftset
                            </div>
                            <div class="text-green-600">
                                Required: 200$ Deposit 10 Lots
                            </div>
                        </div>
                        <PrimaryButton>Claim Prize</PrimaryButton>
                    </div>
                    <div class="bg-white w-full md:w-1/4 rounded-[16px] flex flex-col items-center justify-center text-center p-5 shadow">
                        <img class="mb-3" src="https://tradingtriumph.fbs-campaigns-th.com/dashboard/images/Prize/prize-1.png" alt="">
                        <div class="mb-3">
                            <div>
                                Prize 1 : Giftset
                            </div>
                            <div class="text-green-600">
                                Required: 200$ Deposit 10 Lots
                            </div>
                        </div>
                        <PrimaryButton>Claim Prize</PrimaryButton>
                    </div>
                </div>
            </div>
        </template>

    </ClaimPrizeLayout>
</template>
