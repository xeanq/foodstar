<template>
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Шапка -->
            <div class="mb-14">
                <span class="text-primary text-sm font-semibold uppercase tracking-widest">Доставка</span>
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mt-2">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                        Транспортная <span class="text-primary">логистика</span>
                    </h2>
                    <p class="text-gray-500 max-w-sm text-sm leading-relaxed">
                        Собственный транспорт с холодильниками — продукция поступает свежей и в срок
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">

                <!-- Левая — фото -->
                <div class="relative flex flex-col">
                    <div class="relative rounded-3xl overflow-hidden flex-1 min-h-[400px]">
                        <img :src="'/img/p3.png'" alt="Транспортная логистика" class="w-full h-full object-cover" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent" />
                    </div>

                    <!-- Плашки вне overflow-hidden -->
                    <div class="absolute bottom-6 left-6 right-6 flex flex-col gap-3">
                        <div class="logistics-glass flex items-center gap-4 rounded-2xl px-5 py-3">
                            <span class="text-2xl font-extrabold text-primary leading-none">48ч</span>
                            <span class="text-white/80 text-sm">срок доставки по Нижнему Новгороду и области</span>
                        </div>
                        <div class="logistics-glass flex items-center gap-4 rounded-2xl px-5 py-3">
                            <span class="text-2xl font-extrabold text-primary leading-none">+2°C</span>
                            <span class="text-white/80 text-sm">температурный режим на всём пути следования</span>
                        </div>
                    </div>

                    <!-- Декор -->
                    <div class="absolute -bottom-4 -left-4 w-48 h-48 bg-primary/8 rounded-3xl -z-10" />
                </div>

                <!-- Правая — текст + карточки -->
                <div class="flex flex-col gap-6">
                    <div class="space-y-4 text-gray-600 leading-relaxed">
                        <p>Доставка осуществляется собственными грузовыми автомобилями с холодильными установками. Продукция поступает к вам свежей и в полной сохранности.</p>
                        <p>Водители-экспедиторы сопровождают каждую поставку и несут ответственность за товар до момента передачи.</p>
                    </div>

                    <!-- 4 карточки -->
                    <div class="grid grid-cols-2 gap-4">
                        <div
                            v-for="item in features"
                            :key="item.title"
                            class="group p-5 bg-gray-50 hover:bg-white rounded-2xl border border-gray-100 hover:border-primary/25 hover:shadow-md transition-all duration-300"
                        >
                            <div class="w-10 h-10 bg-primary/10 group-hover:bg-primary/20 rounded-xl flex items-center justify-center mb-4 transition-colors duration-300">
                                <svg class="w-5 h-5 text-primary" fill="currentColor" :viewBox="item.viewBox">
                                    <path :d="item.icon" :fill-rule="item.fillRule || undefined" :clip-rule="item.clipRule || undefined"/>
                                </svg>
                            </div>
                            <h3 class="font-bold text-gray-900 text-sm mb-1">{{ item.title }}</h3>
                            <p class="text-xs text-gray-500 leading-relaxed">{{ item.text }}</p>
                        </div>
                    </div>

                    <!-- Нижняя плашка -->
                    <div class="flex items-start gap-4 p-5 bg-gray-900 border border-gray-800 rounded-2xl">
                        <div class="w-10 h-10 bg-primary/20 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-white text-sm mb-1">Ответственность за груз</p>
                            <p class="text-xs text-white/50 leading-relaxed">Водитель-экспедитор несёт полную ответственность за сохранность товара до момента передачи вам.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script setup>
const features = [
    {
        title: 'Холодильные установки',
        text:  'Поддержание температурного режима на всём пути следования',
        viewBox: '0 0 20 20', fillRule: 'evenodd', clipRule: 'evenodd',
        icon: 'M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z',
    },
    {
        title: 'Водители-экспедиторы',
        text:  'Сопровождение и ответственность за груз от склада до вас',
        viewBox: '0 0 20 20', fillRule: 'evenodd', clipRule: 'evenodd',
        icon: 'M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z',
    },
    {
        title: 'Собственный транспорт',
        text:  'Не зависим от сторонних перевозчиков и их расписания',
        viewBox: '0 0 20 20', fillRule: null, clipRule: null,
        icon: 'M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H11a1 1 0 001-1v-1h2.05a2.5 2.5 0 014.9 0H19a1 1 0 001-1v-3a1 1 0 00-.293-.707L17 7.586A1 1 0 0016.293 7H14V5a1 1 0 00-1-1H3z',
    },
    {
        title: 'Точность в сроках',
        text:  'Доставка строго в согласованное с вами время',
        viewBox: '0 0 20 20', fillRule: 'evenodd', clipRule: 'evenodd',
        icon: 'M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z',
    },
];
</script>

<style scoped>
.logistics-glass {
    background: rgba(0, 0, 0, 0.35);
    border: 1px solid rgba(255, 255, 255, 0.15);
    -webkit-backdrop-filter: blur(12px);
    backdrop-filter: blur(12px);
}
</style>
