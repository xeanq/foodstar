<template>
    <section class="relative min-h-screen flex items-center">

        <!-- Фоновое фото — через псевдоэлемент чтобы анимация не блокировала backdrop-filter -->
        <div class="hero-bg absolute inset-0"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/40 to-black/10 pointer-events-none" />
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-black/50 to-transparent pointer-events-none" />

        <!-- Декоративная линия слева (brand accent) -->
        <div class="absolute left-0 top-1/4 bottom-1/4 w-1 bg-gradient-to-b from-transparent via-primary to-transparent opacity-80 hidden lg:block" />

        <!-- Контент -->
        <div class="relative w-full max-w-7xl mx-auto px-6 pt-24 pb-32 lg:pt-32 lg:pb-40">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <!-- Левая колонка — текст -->
                <div>
                    <!-- Бейдж -->
                    <div class="hero-fade-1 inline-flex items-center gap-2.5 mb-8">
                        <div class="flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-white text-xs font-semibold uppercase tracking-widest px-4 py-2 rounded-full">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse" />
                            Производитель
                            <span class="w-px h-3 bg-white/30" />
                            Нижний Новгород
                        </div>
                    </div>

                    <!-- Заголовок -->
                    <h1 class="hero-fade-2 font-extrabold text-white leading-[1.1] mb-6 text-4xl md:text-5xl lg:text-6xl xl:text-7xl">
                        Свежие салаты<br/>
                        и закуски —<br/>
                        <span class="text-primary">оптом</span>
                    </h1>

                    <!-- Подзаголовок -->
                    <p class="hero-fade-3 text-white/70 text-lg leading-relaxed mb-10">
                        Поставки для ресторанов, магазинов и кафе.
                        Европейские, корейские и русские рецепты.
                        Собственное производство с&nbsp;2015&nbsp;года.
                    </p>

                    <!-- Кнопки -->
                    <div class="hero-fade-4 flex flex-wrap items-center gap-4">
                        <button
                            @click="$emit('openLead')"
                            class="group relative inline-flex items-center gap-2.5 bg-primary hover:bg-primary-dark text-white font-bold px-8 py-4 rounded-2xl transition-all duration-300 hover:shadow-[0_8px_30px_rgba(145,184,67,0.5)] hover:-translate-y-0.5 text-base overflow-hidden"
                        >
                            <span class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-700 bg-gradient-to-r from-transparent via-white/20 to-transparent skew-x-12" />
                            <span class="relative">Получить прайс-лист</span>
                            <svg class="relative w-4 h-4 transition-transform duration-300 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </button>

                        <a href="#catalog"
                            class="group inline-flex items-center gap-2 text-white/80 hover:text-white font-semibold text-sm transition-colors duration-200">
                            <span>Смотреть каталог</span>
                            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Правая колонка — статы + преимущества -->
                <div class="hidden lg:flex flex-col gap-4">

                    <!-- Три большие цифры -->
                    <div class="grid grid-cols-3 gap-3">
                        <div
                            v-for="stat in stats"
                            :key="stat.label"
                            class="glass-panel hero-fade-5 flex flex-col p-5 rounded-2xl border border-white/25 hover:border-primary/50 transition-colors duration-300 cursor-default"
                        >
                            <span class="text-3xl font-extrabold text-white leading-none mb-1.5">{{ stat.value }}</span>
                            <span class="text-white/60 text-xs leading-snug">{{ stat.label }}</span>
                        </div>
                    </div>

                    <!-- Преимущества -->
                    <div class="glass-panel hero-fade-5 rounded-2xl border border-white/25 p-6 flex flex-col gap-4">
                        <div v-for="item in bullets" :key="item.text" class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-xl bg-primary/20 border border-primary/30 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-semibold text-sm leading-tight">{{ item.title }}</p>
                                <p class="text-white/50 text-xs mt-0.5">{{ item.text }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Скролл-индикатор -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-1.5 text-white/40 hover:text-white/70 transition-colors duration-200 cursor-pointer" @click="scrollDown">
            <span class="text-[10px] uppercase tracking-widest font-medium">Листайте</span>
            <div class="w-5 h-8 border border-white/30 rounded-full flex items-start justify-center pt-1.5">
                <div class="w-1 h-2 bg-white/60 rounded-full animate-scroll-dot" />
            </div>
        </div>

    </section>
</template>

<script setup>
defineEmits(['openLead']);

const stats = [
    { value: '10+', label: 'лет на рынке' },
    { value: '200+', label: 'позиций в каталоге' },
    { value: '48ч', label: 'срок доставки' },
];

const bullets = [
    { title: 'Собственное производство', text: 'Полный контроль качества на каждом этапе' },
    { title: 'Гибкие условия оплаты', text: 'Отсрочка платежа для постоянных партнёров' },
    { title: 'Доставка с холодильниками', text: 'Собственный транспорт по Нижнему Новгороду и области' },
];

const scrollDown = () => {
    window.scrollBy({ top: window.innerHeight, behavior: 'smooth' });
};
</script>

<style scoped>
/* Фон через ::before — анимация изолирована, не блокирует backdrop-filter потомков */
.hero-bg {
    overflow: hidden;
}
.hero-bg::before {
    content: '';
    position: absolute;
    inset: -8%;
    background-image: url('/img/p1.png');
    background-size: cover;
    background-position: center;
    animation: heroZoom 20s ease-in-out infinite alternate;
}
@keyframes heroZoom {
    from { transform: scale(1.0); }
    to   { transform: scale(1.08); }
}

/* Последовательное появление */
.hero-fade-1 { animation: fadeUp 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.1s both; }
.hero-fade-2 { animation: fadeUp 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.25s both; }
.hero-fade-3 { animation: fadeUp 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.4s both; }
.hero-fade-4 { animation: fadeUp 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.55s both; }
.hero-fade-5 { animation: fadeUp 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.7s both; }

@keyframes fadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* Точка скролл-индикатора */
@keyframes scrollDot {
    0%   { transform: translateY(0); opacity: 1; }
    80%  { transform: translateY(10px); opacity: 0; }
    100% { transform: translateY(0); opacity: 0; }
}
.animate-scroll-dot {
    animation: scrollDot 1.8s ease-in-out infinite;
}

/* Стекло — явный backdrop-filter вместо Tailwind-класса */
.glass-panel {
    background: linear-gradient(135deg, rgba(255,255,255,0.22) 0%, rgba(255,255,255,0.08) 50%, rgba(0,0,0,0.18) 100%);
    -webkit-backdrop-filter: blur(40px) saturate(1.8);
    backdrop-filter: blur(40px) saturate(1.8);
}

/* prefers-reduced-motion */
@media (prefers-reduced-motion: reduce) {
    .hero-bg::before,
    .hero-fade-1, .hero-fade-2, .hero-fade-3, .hero-fade-4, .hero-fade-5,
    .animate-scroll-dot {
        animation: none;
        opacity: 1;
        transform: none;
    }
}
</style>
