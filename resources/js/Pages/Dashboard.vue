<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Table from '@/Components/Table.vue';
import { Head } from '@inertiajs/vue3';
defineProps(['users'])
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-slate-800 dark:text-slate-200 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-slate-900 overflow-hidden border border-slate-300 dark:border-slate-700 sm:rounded-3xl">
                    <div class="p-6 text-slate-900 dark:text-slate-100">
                        <Table :data="users"></Table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
