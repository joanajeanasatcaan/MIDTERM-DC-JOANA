<template>
    <div>
        <Navigation />
        <div class="p-5">
            <h1 class="text-xl font-bold">Cars</h1>
            <input v-model="search" placeholder="Search Cars" class="p-2 mb-4 border rounded" />
            <ul>
                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-lg w-96">
                <li v-for="car in filteredCars" :key="car.id">
                    {{ car.make }} {{ car.model }} - {{ car.year }} ({{ car.miles }} miles)
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
    props: ['cars'],
    data() {
        return {
            search: ''
        };
    },
    computed: {
        filteredCars() {
            return this.cars.filter(car =>
                car.make.toLowerCase().includes(this.search.toLowerCase()) ||
                car.model.toLowerCase().includes(this.search.toLowerCase()) ||
                car.year.toString().includes(this.search)
            );
        }
    }
};
</script>
