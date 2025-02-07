import './bootstrap';
import { createApp, defineAsyncComponent } from 'vue';
import router from './router/index.js';

// Centralized component import
const components = {
    // GSMArena components
    'home-component': () => import('./components/home.vue'),
    'contact-component': () => import('./components/contact.vue'),
    'coverage-component': () => import('./components/coverage.vue'),
    'deals-component': () => import('./components/deals.vue'),
    'featured-component': () => import('./components/featured.vue'),
    'news-component': () => import('./components/news.vue'),
    'phone-finder-component': () => import('./components/phoneFinder.vue'),
    'reviews-component': () => import('./components/reviews.vue'),
    'videos-component': () => import('./components/videos.vue'),
    'brands-component': () => import('./components/brands.vue'),
    'rumor-mill-component': () => import('./components/rumorMill.vue'),
    'account-component': () => import('./components/account.vue'),
    'register-component': () => import('./components/register.vue'),
    'compare-component': () => import('./components/compare.vue'),
    'faq-component': () => import('./components/FAQ.vue'),
    'glossary-component': () => import('./components/glossary.vue'),
    'privacy-component': () => import('./components/privacy.vue'),
    'terms-component': () => import('./components/terms.vue'),
    'tools-component': () => import('./components/tools.vue'),
    'piccmp-component': () => import('./components/piccmp.vue'),
    'battery-test-component': () => import('./components/batteryTest.vue'),
    'gsmarena-lab-component': () => import('./components/gsmarenaLab.vue'),
    'tip-us-component': () => import('./components/tipUs.vue'),

    // ArenaEV components
    // 'arena-ev-component': () => import('./components/ArenaEV/arenaEV.vue'),
    // 'arena-ev-about-us-component': () => import('./components/ArenaEV/arenaEVAboutUS.vue'),
    // 'arena-ev-compare-component': () => import('./components/ArenaEV/arenaEVCompare.vue'),
    // 'arena-ev-finder-component': () => import('./components/ArenaEV/arenaEVFinder.vue'),
    // 'arena-ev-news-component': () => import('./components/ArenaEV/arenaEVNews.vue'),
    // 'arena-ev-register-component': () => import('./components/ArenaEV/arenaEVRegister.vue'),
    // 'arena-ev-reviews-component': () => import('./components/ArenaEV/arenaEVReviews.vue'),
    // 'arena-ev-terms-component': () => import('./components/ArenaEV/arenaEVTerms.vue'),
    // 'arena-ev-glossary-component': () => import('./components/ArenaEV/arenaEVGlossary.vue'),
    // 'arena-ev-privacy-component': () => import('./components/ArenaEV/arenaEVPrivacy.vue'),

    // Merch components
    // 'merch-component': () => import('./components/Merch/merch.vue'),
    // 'merch-all-products-component': () => import('./components/Merch/merchAllProducts.vue'),
    // 'merch-cart-component': () => import('./components/Merch/merchCart.vue'),
    // 'merch-contact-component': () => import('./components/Merch/merchContact.vue'),
    // 'merch-faq-component': () => import('./components/Merch/merchFAQ.vue'),
    // 'merch-privacy-component': () => import('./components/Merch/merchPrivacy.vue'),
    // 'merch-terms-component': () => import('./components/Merch/merchTerms.vue'),
};

// Vue app setup
const app = createApp({});

// Register components globally with error handling for dynamic imports
Object.entries(components).forEach(([name, component]) => {
    app.component(
        name,
        defineAsyncComponent({
            loader: component,
            errorComponent: () => import('./components/Shared/ErrorComponent.vue'), // Optional: Error component if loading fails
            delay: 200,
        })
    );
});

// Apply router and mount the app
app.use(router).mount('#app');
