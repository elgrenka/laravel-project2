<template>
    <div class="row mt-5">
        <div class="col-12 p-3">
            <img :src="article.img" class="border rounded mx-auto d-block" alt="...">
            <h5 class="mt-5">{{ article.title }}</h5>
            <p>
        <span class="tag" v-for="(tag,index) in article.tags">
            <span v-if="tagsLen == (index + 1)">{{ tag.label }}</span>
            <span v-else>{{ tag.label }} | </span>
        </span>
            </p>
            <p class="card-text">{{ article.store }}</p>
            <p>Опубликовано: <i>{{ article.created_at }}</i></p>
            <div class="mt-3">
                <!--                <views-component></views-component>-->
                <!--                <likes-component></likes-component>-->
            </div>
        </div>
    </div>
</template>

<script setup>
import {useArticleStore} from "@/store/index.js";
import { onMounted } from "vue";

const store = useArticleStore();

const article = () => {
    return this.store.article;
}

const tagsLen = () => {
    return this.store.article.tags.length;
}

onMounted(() => {
    console.log('Component article mounted');
})

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
