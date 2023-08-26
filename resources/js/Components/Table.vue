<script setup>
import SuccessButton from '@/Components/SuccessButton.vue';
import WarningButton from '@/Components/WarningButton.vue';
import DangerButton from '@/Components/DangerButton.vue';

</script>

<template>
    <div class="flex justify-center">
        <table class="table-auto w-[95%] p-10">
            <thead class="">
                <tr class="">
                    <th class="px-3 py-2 font-semibold text-left border-b uppercase">#</th>
                    <th class="px-3 py-2 font-semibold text-left border-b uppercase">Prize</th>
                    <th class="px-3 py-2 font-semibold text-left border-b uppercase">Deposit</th>
                    <th class="px-3 py-2 font-semibold text-left border-b uppercase">Lot</th>
                    <th class="px-3 py-2 font-semibold text-left border-b uppercase">Date Order</th>
                    <th class="px-3 py-2 font-semibold text-left border-b uppercase">Status</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="">
                    <td class="px-3 py-2 whitespace-no-wrap">1</td>
                    <td class="px-3 py-2 whitespace-no-wrap">Gift Voucher</td>
                    <td class="px-3 py-2 whitespace-no-wrap">$500</td>
                    <td class="px-3 py-2 whitespace-no-wrap">30</td>
                    <td class="px-3 py-2 whitespace-no-wrap">15/08/2023</td>
                    <td class="px-3 py-2 whitespace-no-wrap"><SuccessButton>Order Recieved</SuccessButton></td>
                </tr>
                <tr class="">
                    <td class="px-3 py-2 whitespace-no-wrap">2</td>
                    <td class="px-3 py-2 whitespace-no-wrap">Giftset</td>
                    <td class="px-3 py-2 whitespace-no-wrap">$200</td>
                    <td class="px-3 py-2 whitespace-no-wrap">10</td>
                    <td class="px-3 py-2 whitespace-no-wrap">15/08/2023</td>
                    <td class="px-3 py-2 whitespace-no-wrap"><WarningButton>Preparing</WarningButton></td>
                </tr>
                <tr class="">
                    <td class="px-3 py-2 whitespace-no-wrap">3</td>
                    <td class="px-3 py-2 whitespace-no-wrap">Gift Voucher</td>
                    <td class="px-3 py-2 whitespace-no-wrap">$200</td>
                    <td class="px-3 py-2 whitespace-no-wrap">30</td>
                    <td class="px-3 py-2 whitespace-no-wrap">15/08/2023</td>
                    <td class="px-3 py-2 whitespace-no-wrap"><DangerButton>Out Deliver</DangerButton></td>
                </tr>
                </tbody>
            </table>
    </div>
</template>