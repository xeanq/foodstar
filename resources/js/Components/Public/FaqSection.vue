<template>
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

                <!-- Левая — шапка + CTA -->
                <div class="lg:sticky lg:top-28">
                    <span class="text-primary text-sm font-semibold uppercase tracking-widest">FAQ</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2 mb-4 leading-tight">
                        Часто задаваемые <span class="text-primary">вопросы</span>
                    </h2>
                    <p class="text-gray-500 leading-relaxed mb-10">
                        Отвечаем на самые популярные вопросы от наших партнёров. Не нашли ответ — напишите нам.
                    </p>

                    <!-- Счётчик открытого вопроса -->
                    <div class="flex items-center gap-3 mb-10">
                        <span class="text-5xl font-extrabold text-primary leading-none">
                            {{ open !== null ? String(open + 1).padStart(2, '0') : '—' }}
                        </span>
                        <span class="text-gray-300 text-3xl font-light">/</span>
                        <span class="text-gray-300 text-3xl font-light">{{ String(faqs.length).padStart(2, '0') }}</span>
                    </div>

                    <div class="h-px bg-gray-100 mb-10" />

                    <p class="text-sm text-gray-500 mb-4">Остались вопросы?</p>
                    <a
                        href="tel:88312820522"
                        class="group inline-flex items-center gap-3 text-gray-900 hover:text-primary transition-colors duration-200"
                    >
                        <div class="w-10 h-10 bg-primary/10 group-hover:bg-primary/20 rounded-xl flex items-center justify-center transition-colors duration-200">
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-base leading-tight">8 (831) 282-05-22</p>
                            <p class="text-xs text-gray-400">Пн–Пт с 9:00 до 17:00</p>
                        </div>
                    </a>
                </div>

                <!-- Правая — аккордеон -->
                <div class="flex flex-col gap-2">
                    <div
                        v-for="(item, i) in faqs"
                        :key="i"
                        class="rounded-2xl border overflow-hidden transition-all duration-300"
                        :class="open === i ? 'border-primary/25 shadow-sm' : 'border-gray-100 hover:border-gray-200'"
                    >
                        <button
                            class="w-full flex items-center justify-between px-6 py-5 text-left gap-4 transition-colors duration-200"
                            :class="open === i ? 'bg-primary/5' : 'bg-white hover:bg-gray-50/80'"
                            @click="toggle(i)"
                        >
                            <div class="flex items-center gap-4">
                                <span class="text-xs font-bold text-primary/50 w-6 flex-shrink-0">{{ String(i + 1).padStart(2, '0') }}</span>
                                <span class="font-semibold text-gray-900 text-sm">{{ item.q }}</span>
                            </div>
                            <div
                                class="w-7 h-7 rounded-lg flex items-center justify-center flex-shrink-0 transition-all duration-300"
                                :class="open === i ? 'bg-primary text-white' : 'bg-gray-100 text-gray-400'"
                            >
                                <svg
                                    class="w-3.5 h-3.5 transition-transform duration-300"
                                    :class="open === i ? 'rotate-45' : ''"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/>
                                </svg>
                            </div>
                        </button>
                        <div
                            class="overflow-hidden transition-all duration-400 ease-in-out"
                            :style="open === i ? 'max-height: 300px; opacity: 1' : 'max-height: 0; opacity: 0'"
                        >
                            <div class="px-6 pb-6 pt-1 border-t border-gray-100">
                                <p class="text-sm text-gray-500 leading-relaxed pl-10">{{ item.a }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue';

const open = ref(0);
const toggle = (i) => { open.value = open.value === i ? null : i; };

const faqs = [
    { q: 'Какой минимальный объём заказа?',              a: 'Минимальный объём заказа — от 10 кг по каждой позиции. Для крупных партнёров действуют специальные условия.' },
    { q: 'Как быстро вы доставляете?',                   a: 'Заказы, оформленные до 17:00, отгружаются на следующий рабочий день. Срок доставки по Нижнему Новгороду — до 48 часов.' },
    { q: 'Есть ли документы на продукцию?',              a: 'Да, вся продукция сопровождается необходимыми сертификатами соответствия, декларациями и ветеринарными документами.' },
    { q: 'Какие условия оплаты?',                        a: 'Принимаем оплату наличными, безналичным расчётом и по карте. Для постоянных партнёров возможна отсрочка платежа.' },
    { q: 'Можно ли заказать продукцию под своей маркой?', a: 'Да, мы работаем по договору контрактного производства. Обсудите детали с нашим менеджером.' },
    { q: 'В каких городах работаете?',                   a: 'Основной регион поставок — Нижний Новгород и область. Для крупных партнёров возможна доставка в другие регионы.' },
];
</script>
