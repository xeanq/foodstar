<template>
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Шапка -->
            <div class="mb-14">
                <span class="text-primary text-sm font-semibold uppercase tracking-widest">Наши преимущества</span>
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mt-2">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                        За что клиенты выбирают <span class="text-primary">нашу продукцию</span>
                    </h2>
                    <p class="text-gray-500 max-w-sm text-sm leading-relaxed">
                        Более 10 лет мы работаем для того, чтобы каждый партнёр получал лучшее
                    </p>
                </div>
            </div>

            <!-- Bento-сетка -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

                <!-- Большая карточка — занимает 2 строки -->
                <div class="relative rounded-3xl overflow-hidden group lg:row-span-2 min-h-[320px] lg:min-h-0">
                    <img :src="'/img/p1.png'" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent" />
                    <div class="absolute bottom-0 left-0 right-0 p-7">
                        <span class="text-primary text-xs font-bold uppercase tracking-widest mb-2 block">01</span>
                        <h3 class="font-extrabold text-white text-xl mb-2 leading-tight">Высокое качество и свежесть</h3>
                        <p class="text-white/65 text-sm leading-relaxed">Строгий контроль на каждом этапе производства. Только свежие ингредиенты от проверенных поставщиков.</p>
                    </div>
                </div>

                <!-- Остальные 4 карточки -->
                <div
                    v-for="(item, i) in rest"
                    :key="item.title"
                    class="relative rounded-3xl overflow-hidden group min-h-52"
                >
                    <img :src="item.img" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent" />
                    <div class="absolute bottom-0 left-0 right-0 p-5">
                        <span class="text-primary text-xs font-bold uppercase tracking-widest mb-1.5 block">0{{ i + 2 }}</span>
                        <h3 class="font-bold text-white text-sm mb-1 leading-tight">{{ item.title }}</h3>
                        <p class="text-white/60 text-xs leading-relaxed">{{ item.text }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script setup>
const rest = [
    { title: 'Традиционные рецепты',     text: 'Оригинальные рецептуры, проверенные более 10 лет.',               img: '/img/p7.png' },
    { title: 'Широкий ассортимент',      text: 'Более 50 видов салатов — европейские, корейские, русские.',        img: '/img/p8.png' },
    { title: 'Надёжность и стабильность', text: 'Чёткие сроки поставки и гарантии по договору.',                   img: '/img/p9.png' },
    { title: 'Современные тренды',       text: 'Регулярно обновляем ассортимент с учётом вкусов покупателей.',     img: '/img/p4.png' },
];
</script>
