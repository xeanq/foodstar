<template>
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Шапка -->
            <div class="mb-14">
                <span class="text-primary text-sm font-semibold uppercase tracking-widest">Качество</span>
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mt-2">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                        Вы можете нам <span class="text-primary">доверять</span>
                    </h2>
                    <p class="text-gray-500 max-w-sm text-sm leading-relaxed">
                        Более 10 лет поставляем продукцию вовремя и гарантируем качество каждой партии
                    </p>
                </div>
            </div>

            <!-- Сетка карточек -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 mb-8">
                <div
                    v-for="item in guarantees"
                    :key="item.title"
                    class="group bg-white rounded-2xl border border-gray-100 hover:border-primary/25 hover:shadow-lg p-6 transition-all duration-300 flex flex-col gap-4"
                >
                    <!-- Иконка -->
                    <div class="w-12 h-12 bg-primary/10 group-hover:bg-primary/20 rounded-2xl flex items-center justify-center transition-colors duration-300 flex-shrink-0">
                        <svg class="w-6 h-6 text-primary" fill="currentColor" :viewBox="item.viewBox ?? '0 0 20 20'">
                            <path fill-rule="evenodd" :d="item.icon" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 mb-1.5">{{ item.title }}</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">{{ item.text }}</p>
                    </div>
                </div>
            </div>

            <!-- Нижняя плашка — договор -->
            <div class="bg-primary/6 border border-primary/20 rounded-2xl p-6 flex items-start gap-5">
                <div class="w-12 h-12 bg-primary/15 rounded-2xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div>
                    <p class="font-bold text-gray-900 mb-1">Гарантии по договору</p>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Вы защищены юридически — все условия поставки, сроки и качество закреплены документально. Работаем официально с полным пакетом документов.
                    </p>
                </div>
            </div>

        </div>
    </section>
</template>

<script setup>
const guarantees = [
    {
        title: 'Доставка за 48 часов',
        text:  'Отгружаем не позднее 48 часов с момента оформления заказа.',
        icon:  'M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z',
    },
    {
        title: 'Контроль каждой партии',
        text:  'Профессиональное оборудование и проверка качества на каждом этапе производства.',
        icon:  'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
        viewBox: '0 0 24 24',
    },
    {
        title: 'Все документы в порядке',
        text:  'Сертификаты соответствия, декларации и ветеринарные документы на всю продукцию.',
        icon:  'M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z',
    },
    {
        title: 'Гибкая ценовая политика',
        text:  'Система скидок и индивидуальные условия для постоянных партнёров и оптовых клиентов.',
        icon:  'M9 8h6m-5 0a3 3 0 110 6H9l3 3m-3-6h6m6 1a9 9 0 11-18 0 9 9 0 0118 0z',
        viewBox: '0 0 24 24',
    },
    {
        title: 'Свежие ингредиенты',
        text:  'Только натуральное сырьё от проверенных поставщиков. Никаких консервантов.',
        icon:  'M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z',
    },
    {
        title: 'Рост ассортимента',
        text:  'Новинки и сезонные позиции добавляются регулярно. Следим за трендами рынка.',
        icon:  'M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z',
        viewBox: '0 0 24 24',
    },
];
</script>
