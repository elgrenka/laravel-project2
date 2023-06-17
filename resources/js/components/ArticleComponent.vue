<template>
    <div class="container">
        <h1>{{ hello }}</h1>
        <p>{{ store.name }}</p>
    </div>
</template>

<script setup>
import {useArticleStore} from "@/store/index.js";

const store = useArticleStore();
const hello = "Hello";

// export default {
//     name: "ArticleComponent",
//     data() {
//         return {
//             hello: "Hello";
//         }
//     }
// }

</script>


<style scoped>

</style>
