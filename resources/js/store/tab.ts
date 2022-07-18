import {defineStore} from "pinia";

export const useTabStore = defineStore('tab', {
    state: () => {
        return {
            tab: <number>0,
        }
    },
    actions: {
        changeTab(value: number) {
            if (value >= 5) {
                return;
            }
            this.tab = value;
        }
    }
})
