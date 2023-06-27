import { defineStore } from "pinia";
import {ref} from "vue";

export const useArticleStore = defineStore('ArticleStore', () => {
    const article = ref({});

    const setArticle = (payload) => {
        article.value = payload;
    }

    // const getArticleData = (context, payload) => {
    //     axios.get('/api/article-json').then(response => {
    //         context.commit('setArticle', response.data.data);
    //     }).catch(() => {
    //         console.log('Error!');
    //     })
    // }

    return {article, setArticle, getArticleData};

})

