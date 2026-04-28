<template>
    <div class="font-sans text-gray-800">
        <PublicHeader @open-lead="leadOpen = true" />
        <main class="">
            <slot />
        </main>
        <PublicFooter />
        <LeadModal :open="leadOpen" @close="leadOpen = false" />

        <!-- Кнопка наверх -->
        <transition
            enter-active-class="transition-all duration-300"
            enter-from-class="opacity-0 translate-y-4"
            enter-to-class="opacity-100 translate-y-0"
            leave-active-class="transition-all duration-200"
            leave-from-class="opacity-100 translate-y-0"
            leave-to-class="opacity-0 translate-y-4"
        >
            <button
                v-if="showToTop"
                @click="scrollToTop"
                class="fixed bottom-8 right-8 z-40 w-11 h-11 bg-primary hover:bg-primary-dark text-white rounded-xl shadow-lg flex items-center justify-center transition-all duration-200 hover:-translate-y-0.5"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/>
                </svg>
            </button>
        </transition>
    </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import PublicHeader from '@/Components/Public/PublicHeader.vue';
import PublicFooter from '@/Components/Public/PublicFooter.vue';
import LeadModal from '@/Components/Public/LeadModal.vue';

const leadOpen = ref(false);
const showToTop = ref(false);

const onScroll = () => { showToTop.value = window.scrollY > 400; };
const scrollToTop = () => window.scrollTo({ top: 0, behavior: 'smooth' });

onMounted(() => window.addEventListener('scroll', onScroll));
onUnmounted(() => window.removeEventListener('scroll', onScroll));

defineExpose({ leadOpen });
</script>
