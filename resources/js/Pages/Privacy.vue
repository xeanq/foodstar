<template>
    <PublicLayout>
        <!-- Hero -->
        <section class="relative bg-gray-950 overflow-hidden">
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_left,rgba(145,184,67,0.10),transparent_55%)]" />
            <div class="relative max-w-4xl mx-auto px-6" style="padding-top: 100px; padding-bottom: 60px;">
                <span class="text-primary text-sm font-semibold uppercase tracking-widest">Документ</span>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white mt-3 mb-4 leading-tight">
                    Политика конфиденциальности
                </h1>
                <p class="text-gray-500 text-sm mb-8">Последнее обновление: январь 2025 года</p>
                <a href="/" class="inline-flex items-center gap-2 text-gray-500 hover:text-primary text-sm transition-colors duration-200 border border-white/10 hover:border-primary/40 px-4 py-2 rounded-xl">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Вернуться на главную
                </a>
            </div>
        </section>

        <!-- Контент -->
        <section class="py-10 bg-white">
            <div class="max-w-4xl mx-auto px-6">
                <div class="prose-custom">

                    <p class="lead">
                        Настоящая Политика конфиденциальности регулирует порядок обработки и использования персональных данных, которые ООО «ФудСтар» (далее — Оператор) получает от пользователей сайта.
                    </p>

                    <h2>1. Общие положения</h2>
                    <p>Оператор ставит соблюдение прав и свобод граждан одним из важнейших условий осуществления своей деятельности. Политика конфиденциальности применяется ко всей информации, которую Оператор может получить о пользователях в ходе использования ими сайта.</p>

                    <h2>2. Какие данные мы собираем</h2>
                    <p>При заполнении форм на сайте мы можем запрашивать следующие персональные данные:</p>
                    <ul>
                        <li>Имя и фамилия</li>
                        <li>Номер телефона</li>
                        <li>Адрес электронной почты</li>
                        <li>Название компании</li>
                        <li>Текст обращения или сообщения</li>
                    </ul>

                    <h2>3. Цели обработки данных</h2>
                    <p>Персональные данные обрабатываются в следующих целях:</p>
                    <ul>
                        <li>Обработка заявок и обращений пользователей</li>
                        <li>Обратная связь с пользователями по вопросам сотрудничества</li>
                        <li>Улучшение качества обслуживания</li>
                        <li>Выполнение требований действующего законодательства</li>
                    </ul>

                    <h2>4. Хранение и защита данных</h2>
                    <p>Оператор принимает необходимые организационные и технические меры для защиты персональных данных от несанкционированного доступа, изменения, раскрытия или уничтожения.</p>
                    <p>Персональные данные хранятся в течение срока, необходимого для достижения целей их обработки, либо в течение срока, установленного действующим законодательством.</p>

                    <h2>5. Передача данных третьим лицам</h2>
                    <p>Оператор не передаёт персональные данные пользователей третьим лицам, за исключением случаев, предусмотренных действующим законодательством Российской Федерации.</p>

                    <h2>6. Права пользователей</h2>
                    <p>Пользователь имеет право:</p>
                    <ul>
                        <li>Получить информацию об обработке своих персональных данных</li>
                        <li>Потребовать уточнения, блокировки или уничтожения персональных данных</li>
                        <li>Отозвать согласие на обработку персональных данных</li>
                        <li>Обжаловать действия Оператора в уполномоченном органе</li>
                    </ul>

                    <h2>7. Использование cookies</h2>
                    <p>Сайт использует файлы cookies для улучшения работы и персонализации контента. Пользователь может отключить cookies в настройках браузера, однако это может повлиять на корректную работу отдельных функций сайта.</p>

                    <h2>8. Изменение политики</h2>
                    <p>Оператор оставляет за собой право вносить изменения в настоящую Политику конфиденциальности. Актуальная версия всегда доступна на данной странице.</p>

                    <h2>9. Контактная информация</h2>
                    <p>По всем вопросам, связанным с обработкой персональных данных, вы можете обратиться к нам:</p>
                    <ul>
                        <li>Телефон: <a href="tel:88312820522">8 (831) 282-05-22</a></li>
                        <li>Email: <a href="mailto:foodstar@list.ru">foodstar@list.ru</a></li>
                        <li>Адрес: г. Нижний Новгород, ул. Геологов 1, литер Вв1, пом.30</li>
                    </ul>

                </div>
            </div>
        </section>
    </PublicLayout>
</template>

<script setup>
import PublicLayout from '@/Layouts/PublicLayout.vue';
</script>

<style scoped>
.prose-custom {
    color: #4b5563;
    font-size: 0.95rem;
    line-height: 1.8;
}
.prose-custom .lead {
    font-size: 1.05rem;
    color: #374151;
    margin-bottom: 2rem;
    padding: 1.25rem 1.5rem;
    border-left: 3px solid #91b843;
    background: #f9fafb;
    border-radius: 0 0.75rem 0.75rem 0;
}
.prose-custom h2 {
    font-size: 1.2rem;
    font-weight: 700;
    color: #111827;
    margin-top: 2.5rem;
    margin-bottom: 0.75rem;
}
.prose-custom p {
    margin-bottom: 1rem;
}
.prose-custom ul {
    list-style: none;
    padding: 0;
    margin-bottom: 1rem;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}
.prose-custom ul li {
    display: flex;
    align-items: flex-start;
    gap: 0.625rem;
}
.prose-custom ul li::before {
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #91b843;
    flex-shrink: 0;
    margin-top: 0.55rem;
}
.prose-custom a {
    color: #91b843;
    text-decoration: underline;
    text-underline-offset: 3px;
}
.prose-custom a:hover {
    color: #708c2f;
}
</style>
