<template>
    <Link :href="'/'">
        <img :src="image" alt="">
    </Link>
</template>

<script>
    import image from '../../image/logo.png'
    import { Link } from '@inertiajs/inertia-vue3';

    export default {
        components: {
            Link,
        },
        data() {
            return {
                image:image,
            }
        },
    }
</script>
