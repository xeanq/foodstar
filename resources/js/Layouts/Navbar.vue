<template>
    <nav class="bg-white border-b border-gray-200 h-16 flex items-center px-6 justify-between">
        <div class="flex items-center gap-6">
            <span class="text-green-600 font-bold text-xl">ФудСтар</span>
            <div class="flex items-center gap-1">
                <Link
                    v-for="item in navItems"
                    :key="item.href"
                    :href="item.href"
                    class="px-3 py-2 rounded text-sm text-gray-600 hover:bg-gray-100 hover:text-gray-900 transition-colors"
                    :class="{ 'bg-green-50 text-green-700 font-medium': isActive(item.href) }"
                >
                    {{ item.label }}
                </Link>
            </div>
        </div>
        <div class="flex items-center gap-3">
            <span class="text-sm text-gray-500">{{ user.name }}</span>
            <span class="text-xs px-2 py-1 rounded-full font-medium" :class="roleBadge">
                {{ roleLabel }}
            </span>
            <Link href="/logout" method="post" as="button"
                class="text-sm text-gray-400 hover:text-red-500 transition-colors">
                Выйти
            </Link>
        </div>
    </nav>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const page = usePage();
const user = computed(() => page.props.auth.user);

const allNavItems = [
    { href: '/crm',        label: 'CRM',          roles: ['admin', 'manager'] },
    { href: '/catalog',    label: 'Каталог',       roles: ['admin'] },
    { href: '/accounting', label: 'Бухгалтерия',   roles: ['admin', 'accountant'] },
    { href: '/admin',      label: 'Управление',    roles: ['admin'] },
];

const navItems = computed(() =>
    allNavItems.filter(item => item.roles.includes(user.value.role))
);

const isActive = (href) => page.url.startsWith(href);

const roleLabel = computed(() => ({
    admin:      'Директор',
    accountant: 'Бухгалтер',
    manager:    'Менеджер',
}[user.value.role] ?? user.value.role));

const roleBadge = computed(() => ({
    admin:      'bg-purple-100 text-purple-700',
    accountant: 'bg-blue-100 text-blue-700',
    manager:    'bg-green-100 text-green-700',
}[user.value.role] ?? 'bg-gray-100 text-gray-700'));
</script>
