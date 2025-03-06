<template>
    <div>
        <Navigation />
        <div class="flex justify-center p-5">
            <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-lg w-96">
                <h1 class="mb-2 text-xl font-bold">Home</h1>
                <p><span class="font-semibold">Name:</span> Joana Jean Astacaan</p>
                <p><span class="font-semibold">Course:</span> BSIT</p>
                <p><span class="font-semibold">Year:</span> 3</p>
            </div>
        </div>
    </div>
</template>

<script>
import Navigation from '@/Components/Navigation.vue';
export default {
    components: { Navigation },
};
</script>
