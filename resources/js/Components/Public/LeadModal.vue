<template>
    <teleport to="body">
        <transition
            enter-active-class="transition-all duration-300"
            enter-from-class="opacity-0"
            enter-to-class="opacity-100"
            leave-active-class="transition-all duration-200"
            leave-from-class="opacity-100"
            leave-to-class="opacity-0"
        >
            <div v-if="open" class="fixed inset-0 z-50 flex items-center justify-center p-4">
                <!-- Оверлей -->
                <div class="absolute inset-0 bg-black/50 backdrop-blur-sm" @click="$emit('close')" />

                <!-- Модалка -->
                <transition
                    enter-active-class="transition-all duration-300"
                    enter-from-class="opacity-0 scale-95"
                    enter-to-class="opacity-100 scale-100"
                >
                    <div v-if="open" class="relative bg-white rounded-2xl shadow-2xl w-full max-w-md p-8">
                        <button
                            @click="$emit('close')"
                            class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>

                        <template v-if="!sent">
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Оставить заявку</h3>
                            <p class="text-sm text-gray-500 mb-6">Перезвоним и проконсультируем через 5 минут</p>

                            <form @submit.prevent="submit" class="space-y-4">
                                <div>
                                    <input
                                        v-model="form.name"
                                        type="text"
                                        placeholder="Ваше имя"
                                        required
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all duration-200 text-sm"
                                    />
                                </div>
                                <div>
                                    <input
                                        v-model="form.phone"
                                        type="tel"
                                        placeholder="Номер телефона"
                                        required
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all duration-200 text-sm"
                                    />
                                </div>
                                <div>
                                    <textarea
                                        v-model="form.message"
                                        placeholder="Комментарий (необязательно)"
                                        rows="3"
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all duration-200 text-sm resize-none"
                                    />
                                </div>
                                <button
                                    type="submit"
                                    :disabled="loading"
                                    class="w-full bg-primary hover:bg-primary-dark text-white font-semibold py-3 rounded-xl transition-all duration-200 hover:shadow-lg disabled:opacity-60 disabled:cursor-not-allowed"
                                >
                                    {{ loading ? 'Отправка...' : 'Отправить заявку' }}
                                </button>
                                <p class="text-xs text-gray-400 text-center">
                                    Нажимая кнопку, вы соглашаетесь с
                                    <a href="/privacy" class="underline hover:text-primary transition-colors">политикой конфиденциальности</a>
                                </p>
                            </form>
                        </template>

                        <template v-else>
                            <div class="text-center py-6">
                                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Заявка отправлена!</h3>
                                <p class="text-sm text-gray-500">Мы перезвоним вам в течение 5 минут</p>
                                <button
                                    @click="$emit('close')"
                                    class="mt-6 bg-primary hover:bg-primary-dark text-white font-semibold px-8 py-2.5 rounded-xl transition-all duration-200"
                                >
                                    Закрыть
                                </button>
                            </div>
                        </template>
                    </div>
                </transition>
            </div>
        </transition>
    </teleport>
</template>

<script setup>
import { ref, watch } from 'vue';
import { router } from '@inertiajs/vue3';

const props = defineProps({ open: Boolean });
const emit = defineEmits(['close']);

const loading = ref(false);
const sent = ref(false);
const form = ref({ name: '', phone: '', message: '' });

const submit = () => {
    loading.value = true;
    router.post('/lead', form.value, {
        preserveScroll: true,
        onSuccess: () => { sent.value = true; loading.value = false; },
        onError: () => { loading.value = false; },
    });
};

watch(() => props.open, (val) => {
    if (!val) {
        setTimeout(() => {
            sent.value = false;
            form.value = { name: '', phone: '', message: '' };
        }, 300);
    }
});
</script>
