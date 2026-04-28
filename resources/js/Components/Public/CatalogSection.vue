<template>
    <section id="catalog" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Шапка -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                <div>
                    <span class="text-primary text-sm font-semibold uppercase tracking-widest">Ассортимент</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2 leading-tight">
                        Наша <span class="text-primary">продукция</span>
                    </h2>
                    <p class="text-gray-500 mt-3 max-w-md">
                        Более 50 видов салатов и закусок собственного производства
                    </p>
                </div>
                <button
                    @click="$emit('openLead')"
                    class="group inline-flex items-center gap-2 bg-primary hover:bg-primary-dark text-white font-semibold px-6 py-3 rounded-xl transition-all duration-200 hover:shadow-lg hover:-translate-y-0.5 flex-shrink-0"
                >
                    Запросить полный каталог
                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </button>
            </div>

            <!-- Фильтры-категории -->
            <div class="flex flex-wrap gap-2 mb-10">
                <button
                    v-for="cat in categories"
                    :key="cat.id"
                    @click="active = cat.id"
                    class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200"
                    :class="active === cat.id
                        ? 'bg-primary text-white shadow-sm'
                        : 'bg-white text-gray-600 border border-gray-200 hover:border-primary/40 hover:text-primary'"
                >
                    {{ cat.label }}
                </button>
            </div>

            <!-- Сетка карточек -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                <div
                    v-for="product in filtered"
                    :key="product.id"
                    class="group bg-white rounded-2xl border border-gray-100 hover:border-primary/20 hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col"
                >
                    <!-- Фото -->
                    <div class="relative overflow-hidden bg-gray-100 h-48 flex-shrink-0">
                        <img
                            :src="product.image"
                            :alt="product.name"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        />
                        <!-- Бейджи -->
                        <div class="absolute top-3 left-3 flex gap-1.5">
                            <span v-if="product.is_hit"  class="bg-violet-500 text-white text-[11px] font-bold px-2.5 py-1 rounded-lg">Хит</span>
                            <span v-if="product.is_new"  class="bg-amber-400 text-white text-[11px] font-bold px-2.5 py-1 rounded-lg">Новинка</span>
                            <span v-if="product.is_sale" class="bg-red-500   text-white text-[11px] font-bold px-2.5 py-1 rounded-lg">Скидка</span>
                        </div>
                    </div>

                    <!-- Контент -->
                    <div class="p-4 flex flex-col flex-1">
                        <p class="text-[11px] text-primary font-semibold uppercase tracking-wide mb-1">{{ product.category }}</p>
                        <h3 class="font-bold text-gray-900 text-sm leading-snug mb-1.5">{{ product.name }}</h3>
                        <p class="text-xs text-gray-400 leading-relaxed line-clamp-2 flex-1">{{ product.description }}</p>
                        <div class="flex items-center justify-between mt-4 pt-3 border-t border-gray-100">
                            <span class="text-gray-400 text-xs">цена по запросу</span>
                            <button
                                @click="$emit('openLead')"
                                class="text-xs font-semibold text-primary border border-primary/40 px-3 py-1.5 rounded-lg hover:bg-primary hover:text-white hover:border-primary transition-all duration-200"
                            >
                                Заказать
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</template>

<script setup>
import { ref, computed } from 'vue';

defineEmits(['openLead']);

const active = ref('all');

const categories = [
    { id: 'all',      label: 'Все' },
    { id: 'korean',   label: 'Корейские' },
    { id: 'european', label: 'Европейские' },
    { id: 'russian',  label: 'Русские' },
    { id: 'snacks',   label: 'Закуски' },
];

const products = [
    { id: 1, name: 'Морковь по-корейски',      category: 'Корейские',   description: 'Морковь свежая, масло растительное, уксус, специи, кориандр', is_hit: true,  is_new: false, is_sale: false, image: '/img/p1.png' },
    { id: 2, name: 'Кимчи из капусты',         category: 'Корейские',   description: 'Пекинская капуста, перец чили, чеснок, имбирь, зелёный лук',   is_hit: false, is_new: true,  is_sale: false, image: '/img/p2.png' },
    { id: 3, name: 'Салат Оливье',             category: 'Русские',     description: 'Картофель, морковь, горошек, яйца, колбаса варёная, майонез',   is_hit: true,  is_new: false, is_sale: false, image: '/img/p3.png' },
    { id: 4, name: 'Грузди маринованные',      category: 'Закуски',     description: 'Грузди, масло растительное, соль, укроп, чеснок, уксус',        is_hit: false, is_new: false, is_sale: false, image: '/img/p4.png' },
    { id: 5, name: 'Салат Цезарь',             category: 'Европейские', description: 'Романо, курица гриль, сухарики, пармезан, соус Цезарь',         is_hit: false, is_new: true,  is_sale: false, image: '/img/p5.png' },
    { id: 6, name: 'Закуска из баклажанов',    category: 'Закуски',     description: 'Баклажаны, перец болгарский, чеснок, зелень, масло оливковое',  is_hit: false, is_new: false, is_sale: true,  image: '/img/p6.png' },
    { id: 7, name: 'Винегрет классический',    category: 'Русские',     description: 'Свёкла, картофель, морковь, огурцы солёные, лук, масло',        is_hit: false, is_new: false, is_sale: false, image: '/img/p7.png' },
    { id: 8, name: 'Салат Греческий',          category: 'Европейские', description: 'Томаты, огурцы, перец, маслины, сыр фета, оливковое масло',     is_hit: true,  is_new: false, is_sale: false, image: '/img/p8.png' },
];

const catMap = { korean: 'Корейские', european: 'Европейские', russian: 'Русские', snacks: 'Закуски' };

const filtered = computed(() =>
    active.value === 'all' ? products : products.filter(p => p.category === catMap[active.value])
);
</script>
