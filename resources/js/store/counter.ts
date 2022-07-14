import {defineStore} from "pinia";

export const useCounterStore = defineStore('counter', {
    state: () => {
        return {
            counter: 0,
            numberOfChanges: 0
        }
    },
    actions: {
        incrementBy(value: number) {
            this.counter += value;
            this.numberOfChanges += 1;
        }
    }
})
