<template>
    <Switch v-if="isReady" @click="toggleDark()" v-model="enabled"
        :class="[enabled ? 'bg-slate-600' : 'bg-gray-200 dark:bg-slate-800', 'relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none ']">
        <span class="sr-only">Dark mode switch</span>
        <span
            :class="[enabled ? 'translate-x-5 bg-slate-900' : 'translate-x-0 bg-slate-50', 'pointer-events-none relative inline-block h-5 w-5 transform rounded-full  shadow ring-0 transition duration-200 ease-in-out']">
            <span
                :class="[enabled ? 'opacity-0 ease-out duration-100' : 'opacity-100 ease-in duration-200', 'absolute inset-0 flex h-full w-full items-center justify-center transition-opacity']"
                aria-hidden="true">
                <SunIcon class="w-6 h-6 text-slate-700 p-0.5"></SunIcon>
            </span>
            <span
                :class="[enabled ? 'opacity-100 ease-in duration-200' : 'opacity-0 ease-out duration-100', 'absolute inset-0 flex h-full w-full items-center justify-center transition-opacity']"
                aria-hidden="true">
                <MoonIcon class="w-6 h-6 text-slate-500 p-1" />
            </span>
        </span>
    </Switch>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { Switch } from '@headlessui/vue'
import { SunIcon, MoonIcon } from '@heroicons/vue/24/solid'
import { useDark, useToggle } from '@vueuse/core'

const isDark = useDark()
const toggleDark = useToggle(isDark)

const enabled = ref(true)
const isReady = ref(false)

onMounted(() => {
    enabled.value = isDark.value;
    isReady.value = true;
})
</script>
