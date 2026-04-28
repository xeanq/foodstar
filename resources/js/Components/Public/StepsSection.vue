<template>
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Шапка -->
            <div class="mb-16">
                <span class="text-primary text-sm font-semibold uppercase tracking-widest">Как мы работаем</span>
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mt-2">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                        3 простых <span class="text-primary">шага</span>
                    </h2>
                    <p class="text-gray-500 max-w-sm text-sm leading-relaxed">
                        От первого звонка до доставки — быстро и без лишних согласований
                    </p>
                </div>
            </div>

            <!-- Шаги -->
            <div class="relative grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Линия-коннектор на десктопе -->
                <div class="hidden md:block absolute top-10 left-[calc(16.66%+28px)] right-[calc(16.66%+28px)] h-px bg-gray-100 z-0" />

                <div
                    v-for="(step, i) in steps"
                    :key="step.title"
                    class="relative z-10 group flex flex-col bg-white rounded-3xl border border-gray-100 hover:border-primary/25 hover:shadow-xl p-8 transition-all duration-300"
                >
                    <!-- Номер + иконка -->
                    <div class="flex items-center justify-between mb-8">
                        <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center shadow-lg shadow-primary/20 group-hover:shadow-primary/35 transition-shadow duration-300">
                            <svg class="w-6 h-6 text-white" fill="currentColor" :viewBox="step.viewBox">
                                <path fill-rule="evenodd" :d="step.icon" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-6xl font-extrabold text-gray-100 group-hover:text-primary/10 transition-colors duration-300 leading-none select-none">
                            {{ String(i + 1).padStart(2, '0') }}
                        </span>
                    </div>

                    <h3 class="font-extrabold text-gray-900 text-lg mb-3">{{ step.title }}</h3>
                    <p class="text-sm text-gray-500 leading-relaxed flex-1">{{ step.text }}</p>

                    <!-- Стрелка снизу на мобильном -->
                    <div v-if="i < steps.length - 1" class="md:hidden flex justify-center mt-6">
                        <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </section>
</template>

<script setup>
const steps = [
    {
        title:   'Оставьте заявку',
        text:    'Позвоните нам или заполните форму на сайте. Ответим в течение 5 минут в рабочее время.',
        viewBox: '0 0 20 20',
        icon:    'M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z',
    },
    {
        title:   'Согласуем заказ',
        text:    'Обсудим ассортимент, объёмы и условия доставки. Подготовим коммерческое предложение.',
        viewBox: '0 0 20 20',
        icon:    'M9 2a1 1 0 000 2h2a1 1 0 100-2H9z M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z',
    },
    {
        title:   'Доставим вовремя',
        text:    'Отгрузим заказ в согласованное время. Доставка собственным транспортом с холодильниками.',
        viewBox: '0 0 20 20',
        icon:    'M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H11a1 1 0 001-1v-1h2.05a2.5 2.5 0 014.9 0H19a1 1 0 001-1v-3a1 1 0 00-.293-.707L17 7.586A1 1 0 0016.293 7H14V5a1 1 0 00-1-1H3z',
    },
];
</script>
