<script setup>
import { ref } from 'vue';
import { Link, router } from '@inertiajs/vue3'

const props = defineProps(['data'])

const pageSize = ref(15)
const searchTerm = ref('')
const search = () => {
    router.visit(props.data.first_page_url + '&filter[name]=' + searchTerm.value, { only: ['users'], preserveScroll: true, preserveState: true })
}

</script>

<template>
    <fieldset class="min-w-0 space-y-4 transition-opacity">
        <div class="it-topbar flex flex-col justify-between md:flex-row md:items-center md:space-x-4">
            <input type="text" @input="search" v-model="searchTerm"
                class="it-text-input rounded-md border-slate-300 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-slate-600 dark:bg-slate-950 dark:text-slate-300 dark:focus:border-blue-400 dark:focus:ring-blue-400 w-full md:max-w-md"
                autofocus="" placeholder="Search...">
            <div class="mt-4 flex gap-4 md:mt-0">
                <div data-headlessui-state="" class="it-dropdown it-actions-dropdown"><button
                        id="headlessui-menu-button-1" type="button" aria-haspopup="menu" aria-expanded="false"
                        data-headlessui-state="">
                        <div type="button" disabled="false"
                            class="it-button inline-flex items-center rounded-md border text-sm font-semibold shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 px-3 py-2 it-default-button border-slate-300 bg-white text-slate-700 hover:text-slate-500 focus:ring-slate-500 hover:bg-slate-50 focus:ring-blue-500 dark:border-slate-600 dark:bg-slate-950 dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:ring-offset-slate-800 it-dropdown-button w-full">

                            <div class="mr-2 size-4"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75a4.5 4.5 0 0 1-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 1 1-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 0 1 6.336-4.486l-3.276 3.276a3.004 3.004 0 0 0 2.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852Z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.867 19.125h.008v.008h-.008v-.008Z"></path>
                                </svg></div><span>Actions</span>
                        </div>
                    </button></div>
                <div data-headlessui-state="" class="it-dropdown it-add-filter-dropdown"><button
                        id="headlessui-menu-button-2" type="button" aria-haspopup="menu" aria-expanded="false"
                        data-headlessui-state="">
                        <div type="button" disabled="false"
                            class="it-button inline-flex items-center rounded-md border text-sm font-semibold shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 px-3 py-2 it-default-button border-slate-300 bg-white text-slate-700 hover:text-slate-500 focus:ring-slate-500 hover:bg-slate-50 focus:ring-blue-500 dark:border-slate-600 dark:bg-slate-950 dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:ring-offset-slate-800 it-dropdown-button w-full">

                            <div class="mr-2 size-4"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z">
                                    </path>
                                </svg></div><span>Filters</span>
                        </div>
                    </button></div>
                <div data-headlessui-state="" class="it-dropdown it-toggle-column-dropdown"><button
                        id="headlessui-menu-button-3" type="button" aria-haspopup="menu" aria-expanded="false"
                        data-headlessui-state="">
                        <div type="button" disabled="false"
                            class="it-button inline-flex items-center rounded-md border text-sm font-semibold shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 px-3 py-2 it-default-button border-slate-300 bg-white text-slate-700 hover:text-slate-500 focus:ring-slate-500 hover:bg-slate-50 focus:ring-blue-500 dark:border-slate-600 dark:bg-slate-950 dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:ring-offset-slate-800 it-dropdown-button w-full">

                            <div class="mr-2 size-4"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                </svg></div><span>Columns</span>
                        </div>
                    </button></div>
            </div>
        </div>
        <div class="rounded-md border dark:border-slate-700">
            <div class="relative w-full overflow-x-auto overflow-y-hidden rounded-md dark:bg-slate-950">
                <table class="it-table w-full caption-bottom text-left transition-opacity dark:text-slate-300">
                    <thead class="it-table-head">
                        <tr
                            class="border-b transition-colors hover:bg-slate-100/50 dark:border-slate-700 dark:hover:bg-slate-950/50">
                            <th class="pl-2 align-middle"><input type="checkbox"
                                    class="it-checkbox-input rounded border-slate-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-slate-700 dark:bg-slate-950 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-slate-800 it-toggle-all-checkbox"
                                    value="*"></th>
                            <th v-for="col in data.columns"
                                class="h-10 px-2 align-middle text-sm font-medium text-slate-500 dark:bg-slate-950 dark:text-slate-400">
                                <div class="flex items-center justify-start"><span class="font-semibold">{{
                                    col.name }}</span></div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="it-table-body [tr:last-child]:border-0">
                        <tr v-for="d in data.data"
                            class="border-b transition-colors hover:bg-slate-100/50 data-[state=selected]:bg-slate-100 dark:border-slate-700 dark:hover:bg-slate-950 dark:data-[state=selected]:bg-slate-800"
                            data-state="unselected">
                            <td class="pl-2 align-middle"><input type="checkbox"
                                    class="it-checkbox-input rounded border-slate-300 text-blue-600 shadow-sm focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 dark:border-slate-700 dark:bg-slate-950 dark:text-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-slate-800 it-toggle-item-checkbox"
                                    value="352"></td>
                            <td v-for="r, i in d" data-column="id"
                                class="whitespace-pre p-2 align-middle dark:text-slate-300">
                                <div class="flex items-center justify-start"><span>{{ r }}</span></div>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="flex flex-col justify-between px-2 text-sm md:flex-row md:items-center dark:text-slate-300">
            <div class="mb-1 font-medium md:mb-0 md:w-[120px]">Showing {{ data.from }} to {{ data.to }}</div>
            <div class="it-pagination flex w-full justify-between space-x-6 md:w-auto md:items-center lg:space-x-8">
                <div class="flex flex-col md:flex-row md:items-center">
                    <p class="mb-1 font-medium md:mb-0 md:mr-2">Rows per page</p>

                    <select
                        @change="router.visit(data.first_page_url + '&perPage=' + pageSize, { only: ['users'], preserveScroll: true, preserveState: true })"
                        v-model="pageSize"
                        class="it-select-input rounded-md border-slate-300 text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-slate-600 dark:bg-slate-950 dark:text-slate-300 dark:focus:border-blue-400 dark:focus:ring-blue-400 it-pagination-per-page-select">
                        <option v-for="size in [15, 30, 50, 100]" :value="size">{{ size }}</option>
                    </select>
                </div>
                <div class="flex flex-col md:flex-row md:items-center">

                    <div class="flex items-center space-x-2">
                        <Link preserve-state preserve-scroll :href="data.first_page_url" :only="['users']"
                            class="inline-flex items-center rounded-md border text-sm font-semibold shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 px-3 py-2 it-default-button border-slate-300 bg-white text-slate-700 hover:text-slate-500 focus:ring-slate-500 hover:bg-slate-50 focus:ring-blue-500 dark:border-slate-600 dark:bg-slate-950 dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:ring-offset-slate-800 it-pagination-next-page-button">
                        First</Link>
                        <Link preserve-state preserve-scroll :href="data.prev_page_url" :only="['users']"
                            class="inline-flex items-center rounded-md border text-sm font-semibold shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 px-3 py-2 it-default-button border-slate-300 bg-white text-slate-700 hover:text-slate-500 focus:ring-slate-500 hover:bg-slate-50 focus:ring-blue-500 dark:border-slate-600 dark:bg-slate-950 dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:ring-offset-slate-800 it-pagination-next-page-button">
                        Prev</Link>
                        <Link preserve-state preserve-scroll :href="data.next_page_url" :only="['users']"
                            class="inline-flex items-center rounded-md border text-sm font-semibold shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 px-3 py-2 it-default-button border-slate-300 bg-white text-slate-700 hover:text-slate-500 focus:ring-slate-500 hover:bg-slate-50 focus:ring-blue-500 dark:border-slate-600 dark:bg-slate-950 dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:ring-offset-slate-800 it-pagination-next-page-button">
                        Next</Link>
                        <Link preserve-state preserve-scroll :href="data.last_page_url" :only="['users']"
                            class="inline-flex items-center rounded-md border text-sm font-semibold shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 px-3 py-2 it-default-button border-slate-300 bg-white text-slate-700 hover:text-slate-500 focus:ring-slate-500 hover:bg-slate-50 focus:ring-blue-500 dark:border-slate-600 dark:bg-slate-950 dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:ring-offset-slate-800 it-pagination-next-page-button">
                        Last</Link>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</template>
