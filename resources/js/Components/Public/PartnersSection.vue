<template>
    <section id="partners" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Шапка -->
            <div class="mb-12">
                <span class="text-primary text-sm font-semibold uppercase tracking-widest">Партнёрам</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2 leading-tight">
                    Почему с нами <span class="text-primary">удобно работать</span>
                </h2>
                <p class="text-gray-500 mt-3 max-w-lg">
                    Работаем напрямую с ресторанами, магазинами и кафе — без посредников и лишних согласований
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-start">

                <!-- Левая — список преимуществ -->
                <div class="flex flex-col gap-4">
                    <div
                        v-for="(item, i) in items"
                        :key="item.title"
                        class="group flex items-start gap-5 p-6 rounded-2xl border border-gray-100 hover:border-primary/20 hover:shadow-md bg-white transition-all duration-300"
                    >
                        <!-- Номер -->
                        <div class="w-11 h-11 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0 group-hover:bg-primary/20 transition-colors duration-300">
                            <span class="text-primary font-extrabold text-sm">0{{ i + 1 }}</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1">{{ item.title }}</h3>
                            <p class="text-sm text-gray-500 leading-relaxed">{{ item.text }}</p>
                        </div>
                    </div>

                    <!-- CTA -->
                    <button
                        @click="$emit('openLead')"
                        class="group mt-2 w-full inline-flex items-center justify-center gap-2.5 bg-primary hover:bg-primary-dark text-white font-bold py-4 rounded-2xl transition-all duration-300 hover:shadow-[0_8px_30px_rgba(145,184,67,0.4)] hover:-translate-y-0.5"
                    >
                        Стать партнёром
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </button>
                </div>

                <!-- Правая — большое фото с плашками -->
                <div class="relative rounded-3xl overflow-hidden h-full min-h-[520px]">
                    <img :src="'/img/p5.png'" alt="Партнёрство с ФудСтар" class="absolute inset-0 w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent" />

                    <!-- Плашки поверх фото -->
                    <div class="absolute bottom-0 left-0 right-0 p-6 flex flex-col gap-3">
                        <div
                            v-for="badge in badges"
                            :key="badge.value"
                            class="flex items-center gap-4 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl px-5 py-3"
                        >
                            <span class="text-2xl font-extrabold text-primary leading-none">{{ badge.value }}</span>
                            <span class="text-white/80 text-sm">{{ badge.label }}</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script setup>
defineEmits(['openLead']);

const items = [
    { title: 'Экономия времени',       text: 'Заказы по телефону и email. Быстро, без лишних согласований.' },
    { title: 'Точное планирование',    text: 'Заказы до 17:00 — отгрузка на следующий день.' },
    { title: 'Доставка под вас',       text: 'Согласовываем удобное время. Собственный транспорт с холодильниками.' },
    { title: 'Индивидуальный подход',  text: 'Гибкие условия, система скидок для постоянных партнёров.' },
];

const badges = [
    { value: '200+', label: 'активных партнёров по всей России' },
    { value: '7+',   label: 'лет поставок без срывов' },
    { value: '24ч',  label: 'среднее время обработки заказа' },
];
</script>
