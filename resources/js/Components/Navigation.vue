<template>
    <nav class="flex p-3 bg-pink-800 text-white shadow-md">
        <Link
            href="/"
            class="px-4 py-2 rounded-md hover:bg-pink-600 transition"
        >
            Home
        </Link>
        <Link
            href="/bidders"
            class="px-4 py-2 rounded-md hover:bg-pink-600 transition"
        >
            Bidders
        </Link>
        <Link
            href="/cars"
            class="px-4 py-2 rounded-md hover:bg-pink-600 transition"
        >
            Cars
        </Link>
    </nav>
</template>

<script>
import { Link } from '@inertiajs/vue3';
export default {
    components: {
        Link,
    },
};
</script>
