<template>
    <div>
        <Navigation />
        <div class="p-5">
            <h1 class="text-xl font-bold">Bidders</h1>
            <input v-model="search" placeholder="Search Bidders" class="p-2 mb-4 border rounded" />
            <ul>
                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-lg w-96">
                <li v-for="bidder in filteredBidders" :key="bidder.id">
                    {{ bidder.first_name }} {{ bidder.last_name }} - {{ bidder.email }}
                </li>
                </div>
            </ul>
        </div>
    </div>
</template>
<script>
import Navigation from '@/Components/Navigation.vue';
export default {
    components: { Navigation },
    props: ['bidders'],
    data() {
        return {
            search: ''
        };
    },
    computed: {
        filteredBidders() {
            return this.bidders.filter(bidder =>
                bidder.first_name.toLowerCase().includes(this.search.toLowerCase()) ||
                bidder.last_name.toLowerCase().includes(this.search.toLowerCase()) ||
                bidder.email.toLowerCase().includes(this.search.toLowerCase())
            );
        }
    }
};
</script>
