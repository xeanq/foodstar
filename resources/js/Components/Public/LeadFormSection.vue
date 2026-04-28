<template>
    <section class="relative py-24 overflow-hidden">

        <!-- Фон -->
        <div class="lead-bg absolute inset-0" />
        <div class="absolute inset-0 bg-gradient-to-br from-black/80 via-black/60 to-primary/30" />

        <div class="relative max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <!-- Левая — текст -->
                <div>
                    <span class="text-primary text-sm font-semibold uppercase tracking-widest">Напишите нам</span>
                    <h2 class="text-3xl md:text-4xl xl:text-5xl font-extrabold text-white mt-3 mb-6 leading-tight">
                        Оставьте заявку —<br/>перезвоним<br/>через 5 минут
                    </h2>

                    <div class="flex flex-col gap-4 mb-10">
                        <div v-for="item in benefits" :key="item.title" class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-primary/20 border border-primary/30 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-semibold text-sm">{{ item.title }}</p>
                                <p class="text-white/50 text-xs mt-0.5">{{ item.sub }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Контакты -->
                    <div class="flex flex-col gap-2 border-t border-white/10 pt-8">
                        <a href="tel:88312820522" class="text-2xl font-extrabold text-white hover:text-primary transition-colors duration-200">
                            8 (831) 282-05-22
                        </a>
                        <span class="text-white/40 text-sm">Пн–Пт с 9:00 до 17:00</span>
                    </div>
                </div>

                <!-- Правая — форма -->
                <div class="bg-white rounded-3xl p-8 shadow-2xl">
                    <template v-if="!sent">
                        <h3 class="font-extrabold text-gray-900 text-xl mb-1">Расчёт стоимости</h3>
                        <p class="text-gray-400 text-sm mb-7">Заполните форму — пришлём прайс и условия</p>

                        <form @submit.prevent="submit" class="flex flex-col gap-4">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex flex-col gap-1.5">
                                    <label class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Ваше имя</label>
                                    <input
                                        v-model="form.name" type="text" placeholder="Иван" required
                                        class="px-4 py-3 rounded-xl border border-gray-200 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all duration-200 text-sm"
                                    />
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <label class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Телефон</label>
                                    <input
                                        v-model="form.phone" type="tel" placeholder="+7 (___) ___-__-__" required
                                        class="px-4 py-3 rounded-xl border border-gray-200 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all duration-200 text-sm"
                                    />
                                </div>
                            </div>

                            <div class="flex flex-col gap-1.5">
                                <label class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Компания</label>
                                <input
                                    v-model="form.company" type="text" placeholder="ООО «Название» (необязательно)"
                                    class="px-4 py-3 rounded-xl border border-gray-200 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all duration-200 text-sm"
                                />
                            </div>

                            <div class="flex flex-col gap-1.5">
                                <label class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Сообщение</label>
                                <textarea
                                    v-model="form.message" placeholder="Что вас интересует? Объём, ассортимент..." rows="3"
                                    class="px-4 py-3 rounded-xl border border-gray-200 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all duration-200 text-sm resize-none"
                                />
                            </div>

                            <button
                                type="submit" :disabled="loading"
                                class="group relative w-full overflow-hidden bg-primary hover:bg-primary-dark text-white font-bold py-4 rounded-xl transition-all duration-300 hover:shadow-[0_8px_30px_rgba(145,184,67,0.45)] disabled:opacity-60 mt-1"
                            >
                                <span class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-700 bg-gradient-to-r from-transparent via-white/20 to-transparent skew-x-12" />
                                <span class="relative">{{ loading ? 'Отправляем...' : 'Отправить заявку' }}</span>
                            </button>

                            <p class="text-xs text-gray-400 text-center">
                                Нажимая кнопку, вы соглашаетесь с
                                <a href="/privacy" class="underline hover:text-primary transition-colors">политикой конфиденциальности</a>
                            </p>
                        </form>
                    </template>

                    <!-- Успех -->
                    <template v-else>
                        <div class="text-center py-10">
                            <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-5">
                                <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-extrabold text-gray-900 mb-2">Заявка отправлена!</h3>
                            <p class="text-gray-500 text-sm">Перезвоним в течение 5 минут</p>
                        </div>
                    </template>
                </div>

            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';

const loading = ref(false);
const sent = ref(false);
const form = ref({ name: '', phone: '', company: '', message: '' });

const benefits = [
    { title: 'Консультация по ассортименту и ценам',  sub: 'Подберём позиции под ваш формат' },
    { title: 'Индивидуальные условия для партнёров',  sub: 'Скидки и отсрочка для постоянных клиентов' },
    { title: 'Ответим в течение 5 минут',             sub: 'Работаем Пн–Пт с 9:00 до 17:00' },
];

const submit = () => {
    loading.value = true;
    router.post('/lead', form.value, {
        preserveScroll: true,
        onSuccess: () => { sent.value = true; loading.value = false; },
        onError:   () => { loading.value = false; },
    });
};
</script>

<style scoped>
.lead-bg {
    background-image: url('/img/p2.png');
    background-size: cover;
    background-position: center;
}
</style>
