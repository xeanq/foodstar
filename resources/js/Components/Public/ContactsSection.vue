<template>
    <section id="contacts" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Шапка -->
            <div class="mb-14">
                <span class="text-primary text-sm font-semibold uppercase tracking-widest">Связаться с нами</span>
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mt-2">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                        Наши <span class="text-primary">контакты</span>
                    </h2>
                    <p class="text-gray-500 max-w-sm text-sm leading-relaxed">
                        Ответим в течение 5 минут в рабочее время
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">

                <!-- Левая — контакты + CTA -->
                <div class="flex flex-col gap-4">

                    <!-- Контактные карточки -->
                    <div
                        v-for="item in contacts"
                        :key="item.label"
                        class="group flex items-start gap-4 p-5 bg-gray-50 rounded-2xl border border-gray-100 hover:border-primary/25 hover:shadow-md transition-all duration-300"
                    >
                        <div class="w-11 h-11 bg-primary/10 group-hover:bg-primary/20 rounded-xl flex items-center justify-center flex-shrink-0 transition-colors duration-300">
                            <svg class="w-5 h-5 text-primary" fill="currentColor" :viewBox="item.viewBox">
                                <path :d="item.icon" :fill-rule="item.fillRule" :clip-rule="item.clipRule"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 mb-0.5 uppercase tracking-wide font-medium">{{ item.label }}</p>
                            <component
                                :is="item.href ? 'a' : 'p'"
                                :href="item.href"
                                class="font-bold text-gray-900 hover:text-primary transition-colors duration-200"
                            >
                                {{ item.value }}
                            </component>
                            <p v-if="item.sub" class="text-xs text-gray-400 mt-0.5">{{ item.sub }}</p>
                        </div>
                    </div>

                    <!-- Соцсети -->
                    <div class="flex gap-3">
                        <a href="#" target="_blank"
                            class="group flex items-center gap-2 bg-gray-50 hover:bg-primary border border-gray-200 hover:border-primary text-gray-700 hover:text-white text-sm font-semibold px-5 py-3 rounded-xl transition-all duration-200 flex-1 justify-center">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/>
                            </svg>
                            Telegram
                        </a>
                        <a href="#" target="_blank"
                            class="group flex items-center gap-2 bg-gray-50 hover:bg-primary border border-gray-200 hover:border-primary text-gray-700 hover:text-white text-sm font-semibold px-5 py-3 rounded-xl transition-all duration-200 flex-1 justify-center">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            WhatsApp
                        </a>
                    </div>

                    <!-- CTA -->
                    <div class="bg-gray-900 rounded-2xl p-6 flex items-center justify-between gap-4 mt-auto">
                        <div>
                            <p class="font-bold text-white mb-1">Получите консультацию</p>
                            <p class="text-sm text-white/50">Перезвоним через 5 минут</p>
                        </div>
                        <button
                            @click="$emit('openLead')"
                            class="group flex-shrink-0 inline-flex items-center gap-2 bg-primary hover:bg-primary-dark text-white font-semibold px-5 py-3 rounded-xl transition-all duration-200 hover:shadow-lg text-sm"
                        >
                            Заявка
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Правая — карта -->
                <div class="rounded-3xl overflow-hidden border border-gray-100 h-[480px] lg:h-auto lg:min-h-full">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad0b24f6424fd7562a92cba77206310ef509eb4cc566cffe09e6f8c86aee3e801&amp;source=constructor"
                        width="100%"
                        height="100%"
                        frameborder="0"
                        class="w-full h-full block"
                        style="min-height: 480px;"
                    />
                </div>

            </div>
        </div>
    </section>
</template>

<script setup>
defineEmits(['openLead']);

const contacts = [
    {
        label: 'Адрес',
        value: 'г. Нижний Новгород, ул. Геологов 1, литер Вв1, пом.30',
        viewBox: '0 0 20 20', fillRule: 'evenodd', clipRule: 'evenodd',
        icon: 'M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z',
    },
    {
        label: 'Телефон',
        value: '8 (831) 282-05-22',
        href: 'tel:88312820522',
        sub: 'Пн–Пт: 9:00–17:00',
        viewBox: '0 0 20 20',
        icon: 'M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z',
    },
    {
        label: 'Email',
        value: 'foodstar@list.ru',
        href: 'mailto:foodstar@list.ru',
        viewBox: '0 0 20 20',
        icon: 'M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884zM18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z',
    },
];
</script>

