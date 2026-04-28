<template>
    <PublicLayout ref="layout">
        <HeroSection @open-lead="layout.leadOpen = true" />
        <CatalogSection @open-lead="layout.leadOpen = true" />
        <PartnersSection @open-lead="layout.leadOpen = true" />
        <LeadFormSection />
        <GuaranteesSection />
        <FaqSection />
        <AboutSection />
        <LogisticsSection />
        <WhyUsSection />
        <StepsSection />
        <PromotionsSection @open-lead="layout.leadOpen = true" />
        <ContactsSection @open-lead="layout.leadOpen = true" />
    </PublicLayout>
</template>

<script setup>
import { ref } from 'vue';
import PublicLayout from '@/Layouts/PublicLayout.vue';
import HeroSection from '@/Components/Public/HeroSection.vue';
import CatalogSection from '@/Components/Public/CatalogSection.vue';
import PartnersSection from '@/Components/Public/PartnersSection.vue';
import LeadFormSection from '@/Components/Public/LeadFormSection.vue';
import GuaranteesSection from '@/Components/Public/GuaranteesSection.vue';
import FaqSection from '@/Components/Public/FaqSection.vue';
import AboutSection from '@/Components/Public/AboutSection.vue';
import LogisticsSection from '@/Components/Public/LogisticsSection.vue';
import WhyUsSection from '@/Components/Public/WhyUsSection.vue';
import StepsSection from '@/Components/Public/StepsSection.vue';
import PromotionsSection from '@/Components/Public/PromotionsSection.vue';
import ContactsSection from '@/Components/Public/ContactsSection.vue';

const layout = ref(null);
</script>
