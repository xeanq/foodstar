<template>
    <header
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 bg-gradient-to-b from-black/60 to-transparent backdrop-blur-[2px] py-3"
        :class="scrolled ? 'bg-black/70 backdrop-blur-md shadow-[0_1px_0_0_rgba(255,255,255,0.06)]' : ''"
    >
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between gap-6">

                <!-- Логотип -->
                <a href="/" class="flex-shrink-0">
                    <!-- Белый логотип на прозрачном фоне, тёмный после скролла -->
                    <img
                        :src="'/img/logo.svg'"
                        alt="ФудСтар"
                        class="h-16 w-auto brightness-0 invert"
                    />
                </a>

                <!-- Навигация — десктоп -->
                <nav class="hidden lg:flex items-center gap-0.5">
                    <a
                        v-for="item in navItems"
                        :key="item.href"
                        :href="item.href"
                        class="relative px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 group text-white/80 hover:text-white hover:bg-white/10"
                    >
                        {{ item.label }}
                        <!-- Подчёркивание при hover -->
                        <span
                            class="absolute bottom-1 left-4 right-4 h-px bg-primary scale-x-0 group-hover:scale-x-100 transition-transform duration-200 origin-left"
                            :class="scrolled ? 'opacity-100' : 'opacity-70'"
                        />
                    </a>
                </nav>

                <!-- Контакты + кнопка -->
                <div class="hidden lg:flex items-center gap-5">
                    <div class="text-right">
                        <a
                            href="tel:88312820522"
                            class="block text-sm font-bold transition-colors duration-200 leading-tight text-white hover:text-primary"
                        >
                            8 (831) 282-05-22
                        </a>
                        <span class="text-xs text-white/60">
                            Пн–Пт: 9:00–17:00
                        </span>
                    </div>

                    <button
                        @click="$emit('openLead')"
                        class="group relative inline-flex items-center gap-2 font-semibold text-sm px-5 py-2.5 rounded-xl transition-all duration-300 overflow-hidden"
                        :class="scrolled
                            ? 'bg-primary hover:bg-primary-dark text-white hover:shadow-[0_4px_20px_rgba(145,184,67,0.45)] hover:-translate-y-0.5'
                            : 'bg-white/15 hover:bg-white/25 text-white border border-white/30 hover:border-white/50 backdrop-blur-sm'"
                    >
                        <span class="relative z-10">Оставить заявку</span>
                        <svg class="relative z-10 w-3.5 h-3.5 transition-transform duration-300 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </button>
                </div>

                <!-- Бургер — мобильный -->
                <button
                    class="lg:hidden p-2 rounded-lg transition-colors duration-200 text-white hover:bg-white/10"
                    @click="mobileOpen = !mobileOpen"
                    aria-label="Меню"
                >
                    <svg class="w-6 h-6 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            :d="mobileOpen ? 'M6 18L18 6M6 6l12 12' : 'M4 6h16M4 12h16M4 18h16'"
                        />
                    </svg>
                </button>
            </div>

            <!-- Мобильное меню -->
            <transition
                enter-active-class="transition-all duration-300 ease-out"
                enter-from-class="opacity-0 -translate-y-3"
                enter-to-class="opacity-100 translate-y-0"
                leave-active-class="transition-all duration-200 ease-in"
                leave-from-class="opacity-100 translate-y-0"
                leave-to-class="opacity-0 -translate-y-3"
            >
                <div
                    v-if="mobileOpen"
                    class="lg:hidden mt-3 pb-4 rounded-2xl overflow-hidden"
                    :class="scrolled ? 'bg-white border border-gray-100 shadow-lg' : 'bg-black/40 backdrop-blur-md border border-white/10'"
                >
                    <div class="flex flex-col px-2 pt-2">
                        <a
                            v-for="item in navItems"
                            :key="item.href"
                            :href="item.href"
                            class="px-4 py-3 rounded-xl text-sm font-medium transition-all duration-200"
                            :class="scrolled
                                ? 'text-gray-700 hover:text-primary hover:bg-primary/8'
                                : 'text-white/85 hover:text-white hover:bg-white/10'"
                            @click="mobileOpen = false"
                        >
                            {{ item.label }}
                        </a>
                    </div>

                    <div
                        class="mx-4 mt-3 pt-3 flex items-center justify-between"
                        :class="scrolled ? 'border-t border-gray-100' : 'border-t border-white/10'"
                    >
                        <a
                            href="tel:88312820522"
                            class="text-sm font-bold transition-colors duration-200"
                            :class="scrolled ? 'text-gray-800' : 'text-white'"
                        >
                            8 (831) 282-05-22
                        </a>
                        <button
                            @click="$emit('openLead'); mobileOpen = false"
                            class="bg-primary hover:bg-primary-dark text-white text-sm font-semibold px-4 py-2 rounded-xl transition-all duration-200"
                        >
                            Заявка
                        </button>
                    </div>
                </div>
            </transition>
        </div>
    </header>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

defineEmits(['openLead']);

const scrolled = ref(false);
const mobileOpen = ref(false);

const navItems = [
    { href: '#catalog',    label: 'Продукция' },
    { href: '#partners',   label: 'Партнёрам' },
    { href: '#about',      label: 'О компании' },
    { href: '#promotions', label: 'Акции' },
    { href: '#contacts',   label: 'Контакты' },
];

const onScroll = () => {
    scrolled.value = window.scrollY > 60;
    if (scrolled.value) mobileOpen.value = false;
};

onMounted(() => window.addEventListener('scroll', onScroll, { passive: true }));
onUnmounted(() => window.removeEventListener('scroll', onScroll));
</script>
