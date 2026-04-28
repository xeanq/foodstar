<template>
    <section id="promotions" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Шапка -->
            <div class="mb-14">
                <span class="text-primary text-sm font-semibold uppercase tracking-widest">Специальные предложения</span>
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mt-2">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                        Акции и <span class="text-primary">скидки</span>
                    </h2>
                    <p class="text-gray-500 max-w-sm text-sm leading-relaxed">
                        Выгодные условия для новых и постоянных партнёров
                    </p>
                </div>
            </div>

            <!-- Сетка: первая карточка широкая -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                <!-- Большая карточка -->
                <div
                    class="relative rounded-3xl overflow-hidden group min-h-80 md:row-span-2 flex flex-col"
                >
                    <img :src="'/img/p8.png'" alt="" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent" />
                    <div class="relative flex flex-col justify-between h-full p-8 min-h-96">
                        <div class="inline-flex self-start bg-primary text-white text-xs font-bold px-3 py-1.5 rounded-xl tracking-wide">
                            {{ promos[0].badge }}
                        </div>
                        <div>
                            <h3 class="font-extrabold text-white text-2xl mb-3 leading-tight">{{ promos[0].title }}</h3>
                            <p class="text-white/65 text-sm leading-relaxed mb-6">{{ promos[0].text }}</p>
                            <button
                                @click="$emit('openLead')"
                                class="group/btn inline-flex items-center gap-2 bg-primary hover:bg-primary-dark text-white font-semibold px-6 py-3 rounded-xl transition-all duration-200 hover:shadow-lg text-sm"
                            >
                                Узнать подробнее
                                <svg class="w-4 h-4 transition-transform duration-200 group-hover/btn:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Две маленькие карточки -->
                <div
                    v-for="promo in promos.slice(1)"
                    :key="promo.title"
                    class="relative rounded-3xl overflow-hidden group min-h-52 flex flex-col"
                >
                    <img :src="promo.img" alt="" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 to-transparent" />
                    <div class="relative flex flex-col justify-between h-full p-6 min-h-52">
                        <div class="inline-flex self-start bg-white/15 backdrop-blur-sm border border-white/25 text-white text-xs font-bold px-3 py-1.5 rounded-xl">
                            {{ promo.badge }}
                        </div>
                        <div>
                            <h3 class="font-bold text-white text-lg mb-2 leading-tight">{{ promo.title }}</h3>
                            <p class="text-white/60 text-xs leading-relaxed mb-4">{{ promo.text }}</p>
                            <button
                                @click="$emit('openLead')"
                                class="text-xs font-semibold text-white/80 hover:text-white border border-white/30 hover:border-white/60 px-4 py-2 rounded-xl transition-all duration-200"
                            >
                                Подробнее
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script setup>
defineEmits(['openLead']);

const promos = [
    {
        badge: 'до 20% скидки',
        title: 'Предложения для сетевых клиентов',
        text:  'Специальные условия для сетевых магазинов и крупных оптовых покупателей. Обсудим индивидуальные условия.',
        img:   '/img/p8.png',
    },
    {
        badge: 'скидка 5%',
        title: 'Ваше мнение важно',
        text:  'Оставьте отзыв о продукции и получите скидку 5% на следующий заказ.',
        img:   '/img/p4.png',
    },
    {
        badge: 'каждый 10-й заказ',
        title: 'Бонус за лояльность',
        text:  'Каждый десятый заказ — с постоянной скидкой 25%. Чем больше вы с нами, тем выгоднее.',
        img:   '/img/p9.png',
    },
];
</script>
