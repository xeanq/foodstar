<template>
    <footer class="bg-gray-950 text-gray-500">

        <!-- Верхняя часть -->
        <div class="max-w-7xl mx-auto px-6 pt-16 pb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-white/6">

                <!-- Логотип + описание -->
                <div class="lg:col-span-2">
                    <img :src="'/img/logo.svg'" alt="ФудСтар" class="h-12 mb-5 brightness-0 invert opacity-90" />
                    <p class="text-sm leading-relaxed max-w-xs mb-6">
                        Более 10 лет производим качественные салаты и закуски для ресторанов, магазинов и кафе Нижнего Новгорода.
                    </p>
                    <!-- Соцсети -->
                    <div class="flex gap-2">
                        <a href="#" target="_blank"
                            class="w-9 h-9 rounded-xl bg-white/6 hover:bg-primary flex items-center justify-center transition-all duration-200 text-gray-400 hover:text-white">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/>
                            </svg>
                        </a>
                        <a href="#" target="_blank"
                            class="w-9 h-9 rounded-xl bg-white/6 hover:bg-primary flex items-center justify-center transition-all duration-200 text-gray-400 hover:text-white">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Навигация -->
                <div>
                    <h4 class="text-white font-semibold text-sm mb-5 uppercase tracking-widest">Навигация</h4>
                    <ul class="space-y-3">
                        <li v-for="item in navItems" :key="item.href">
                            <a :href="item.href"
                                class="text-sm text-gray-500 hover:text-primary transition-colors duration-200">
                                {{ item.label }}
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Контакты -->
                <div>
                    <h4 class="text-white font-semibold text-sm mb-5 uppercase tracking-widest">Контакты</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-primary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm leading-relaxed">г. Нижний Новгород,<br/>ул. Геологов 1, пом.30</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                            <a href="tel:88312820522" class="text-sm hover:text-primary transition-colors duration-200">
                                8 (831) 282-05-22
                            </a>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            <a href="mailto:foodstar@list.ru" class="text-sm hover:text-primary transition-colors duration-200">
                                foodstar@list.ru
                            </a>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm">Пн–Пт: 9:00–17:00</span>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Нижняя строка -->
            <div class="pt-6 flex flex-col md:flex-row items-center justify-between gap-3 text-xs text-gray-600">
                <span>© {{ year }} ФудСтар. Все права защищены.</span>
                <div class="flex items-center gap-6">
                    <a href="/privacy" class="hover:text-primary transition-colors duration-200">
                        Политика конфиденциальности
                    </a>
                    <span class="text-gray-700">ИНН 5258094802</span>
                </div>
            </div>
        </div>

    </footer>
</template>

<script setup>
const year = new Date().getFullYear();

const navItems = [
    { href: '#catalog',    label: 'Продукция' },
    { href: '#partners',   label: 'Партнёрам' },
    { href: '#about',      label: 'О компании' },
    { href: '#promotions', label: 'Акции' },
    { href: '#contacts',   label: 'Контакты' },
];
</script>
