<template>
    <section id="about" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <!-- Левая — текст -->
                <div>
                    <span class="text-primary text-sm font-semibold uppercase tracking-widest">О компании</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2 mb-1 leading-tight">
                        ФУД СТАР
                    </h2>
                    <p class="text-primary font-medium mb-8 italic">Мы то, что мы едим</p>

                    <div class="space-y-5 text-gray-600 leading-relaxed mb-10">
                        <p>Компания ФудСтар более 10 лет производит европейские, корейские и русские салаты и закуски в Нижнем Новгороде.</p>
                        <p>Мы используем только свежие ингредиенты, профессиональное оборудование и строгий контроль качества на каждом этапе производства.</p>
                        <p>За 7+ лет поставок по всей России мы заработали репутацию надёжного и стабильного поставщика.</p>
                    </div>

                    <!-- Статистика -->
                    <div class="grid grid-cols-3 gap-4">
                        <div
                            v-for="stat in stats"
                            :key="stat.label"
                            class="flex flex-col p-4 rounded-2xl bg-white border border-gray-100 hover:border-primary/25 hover:shadow-md transition-all duration-300"
                        >
                            <span class="text-2xl font-extrabold text-primary leading-none mb-1">{{ stat.value }}</span>
                            <span class="text-xs text-gray-400 leading-snug">{{ stat.label }}</span>
                        </div>
                    </div>
                </div>

                <!-- Правая — фото -->
                <div class="relative">
                    <!-- Основное фото -->
                    <div class="relative rounded-3xl overflow-hidden h-[480px]">
                        <img :src="'/img/p6.png'" alt="Команда ФудСтар" class="w-full h-full object-cover" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent" />
                    </div>

                    <!-- Плашка поверх — слоган -->
                    <div class="absolute bottom-6 left-6 right-6 bg-white/90 backdrop-blur-sm rounded-2xl px-6 py-4 flex items-center gap-4">
                        <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900 text-sm leading-tight">Собственное производство</p>
                            <p class="text-xs text-gray-400 mt-0.5">Нижний Новгород, с 2015 года</p>
                        </div>
                    </div>

                    <!-- Декоративный квадрат позади фото -->
                    <div class="absolute -bottom-4 -right-4 w-48 h-48 bg-primary/8 rounded-3xl -z-10" />
                </div>

            </div>
        </div>
    </section>
</template>

<script setup>
const stats = [
    { value: '10+',  label: 'лет на рынке' },
    { value: '15',   label: 'специалистов' },
    { value: '500т', label: 'продукции в год' },
];
</script>
