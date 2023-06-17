import { defineStore } from "pinia";
// import {ref} from "vue";

export const useArticleStore = defineStore('ArticleStore', {
    state: () => {
        return {
            name: 'John'
        }
    },
})

