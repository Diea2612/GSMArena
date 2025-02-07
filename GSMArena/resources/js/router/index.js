import { createRouter, createWebHistory } from "vue-router";

// GSMArena components
import Home from '../components/home.vue';
import News from '../components/news.vue';
import Brands from '../components/brands.vue';
import Contact from '../components/contact.vue';
import Coverage from '../components/coverage.vue';
import Deals from '../components/deals.vue';
import Featured from '../components/featured.vue';
import Reviews from '../components/reviews.vue';
import RumorMill from '../components/rumorMill.vue';
import Videos from '../components/videos.vue';
import PhoneFinder from '../components/phoneFinder.vue';
import SignUp from '../components/register.vue';
import Account from '../components/account.vue';
import Compare from '../components/compare.vue';
import Glossary from '../components/glossary.vue';
import FAQ from '../components/FAQ.vue';
import Privacy from '../components/privacy.vue';
import Terms from '../components/terms.vue';
import Tools from '../components/tools.vue';
import BatteryTest from '../components/batteryTest.vue';
import Piccmp from '../components/piccmp.vue';
import GSMArenaLab from '../components/gsmarenaLab.vue';
import NotFound from "../components/notFound.vue";
import TipUs from "../components/tipUs.vue";

// ArenaEV components
// import ArenaEv from '../components/ArenaEV/arenaEV.vue';
// import ArenaEVAboutUS from '../components/ArenaEV/arenaEVAboutUS.vue';
// import ArenaEVCompare from '../components/ArenaEV/arenaEVCompare.vue';
// import ArenaEVFinder from '../components/ArenaEV/arenaEVFinder.vue';
// import ArenaEVNews from '../components/ArenaEV/arenaEVNews.vue';
// import ArenaEVRegister from '../components/ArenaEV/arenaEVRegister.vue';
// import ArenaEVReviews from '../components/ArenaEV/arenaEVReviews.vue';
// import ArenaEVTerms from '../components/ArenaEV/arenaEVTerms.vue';
// import ArenaEVGlossary from '../components/ArenaEV/arenaEVGlossary.vue';
// import ArenaEVPrivacy from '../components/ArenaEV/arenaEVPrivacy.vue';

// Merch components
// import Merch from '../components/Merch/merch.vue';
// import MerchAllProducts from '../components/Merch/merchAllProducts.vue';
// import MerchCart from '../components/Merch/merchCart.vue';
// import MerchContact from '../components/Merch/merchContact.vue';
// import MerchFAQ from '../components/Merch/merchFAQ.vue';
// import MerchPrivacy from '../components/Merch/merchPrivacy.vue';
// import MerchTerms from '../components/Merch/merchTerms.vue';

// Define routes
const routes = [
    // GSMArena routes
    { path: '/home', component: Home, name: 'home' },
    { path: '/news', component: News, name: 'news' },
    { path: '/brands', component: Brands, name: 'brands' },
    { path: '/contact', component: Contact, name: 'contact' },
    { path: '/coverage', component: Coverage, name: 'coverage' },
    { path: '/deals', component: Deals, name: 'deals' },
    { path: '/featured', component: Featured, name: 'featured' },
    { path: '/reviews', component: Reviews, name: 'reviews' },
    { path: '/rumor-mill', component: RumorMill, name: 'rumorMill' },
    { path: '/videos', component: Videos, name: 'videos' },
    { path: '/phone-finder', component: PhoneFinder, name: 'phoneFinder' },
    { path: '/register', component: SignUp, name: 'register' },
    { path: '/account', component: Account, name: 'account' },
    { path: '/compare', component: Compare, name: 'compare' },
    { path: '/glossary', component: Glossary, name: 'glossary' },
    { path: '/faq', component: FAQ, name: 'faq' },
    { path: '/privacy', component: Privacy, name: 'privacy' },
    { path: '/terms', component: Terms, name: 'terms' },
    { path: '/tools', component: Tools, name: 'tools' },
    { path: '/battery-test', component: BatteryTest, name: 'batteryTest' },
    { path: '/piccmp', component: Piccmp, name: 'piccmp' },
    { path: '/gsmarena-lab', component: GSMArenaLab, name: 'gsmarenaLab' },
    { path: '/tip-us', component: TipUs, name: 'tipUs' },

    // ArenaEV routes
    // { path: '/arena-ev', component: ArenaEv, name: 'arenaEv' },
    // { path: '/arena-ev/about-us', component: ArenaEVAboutUS, name: 'arenaEVAboutUS' },
    // { path: '/arena-ev/compare', component: ArenaEVCompare, name: 'arenaEVCompare' },
    // { path: '/arena-ev/finder', component: ArenaEVFinder, name: 'arenaEVFinder' },
    // { path: '/arena-ev/news', component: ArenaEVNews, name: 'arenaEVNews' },
    // { path: '/arena-ev/register', component: ArenaEVRegister, name: 'arenaEVRegister' },
    // { path: '/arena-ev/reviews', component: ArenaEVReviews, name: 'arenaEVReviews' },
    // { path: '/arena-ev/terms', component: ArenaEVTerms, name: 'arenaEVTerms' },
    // { path: '/arena-ev/glossary', component: ArenaEVGlossary, name: 'arenaEVGlossary' },
    // { path: '/arena-ev/privacy', component: ArenaEVPrivacy, name: 'arenaEVPrivacy' },

    // Merch routes
    // { path: '/merch', component: Merch, name: 'merch' },
    // { path: '/merch/all-products', component: MerchAllProducts, name: 'merchAllProducts' },
    // { path: '/merch/cart', component: MerchCart, name: 'merchCart' },
    // { path: '/merch/contact', component: MerchContact, name: 'merchContact' },
    // { path: '/merch/faq', component: MerchFAQ, name: 'merchFAQ' },
    // { path: '/merch/privacy', component: MerchPrivacy, name: 'merchPrivacy' },
    // { path: '/merch/terms', component: MerchTerms, name: 'merchTerms' },

    // Catch-all route for 404
    { path: '/:pathMatch(.*)*', component: NotFound, name: 'notFound' }
];

// Create and export the router instance
const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
