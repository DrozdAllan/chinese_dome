<template>
  <p>
	 Hello world this is Vue 3
  </p>
  <button @click="increment">Count from this component is: {{ count }}</button>
  <button @click="counterStore.incrementBy(3)">Counter from pinia store is: {{ counterStore.counter }} (changé {{ counterStore.numberOfChanges }} fois)</button>
</template>

<script setup>
import {ref, onBeforeMount, onUpdated} from 'vue'
import {useCounterStore} from "./store/counter";

const count = ref(0)
const counterStore = useCounterStore()

function increment() {
    count.value++
}

onUpdated(() => {
    console.log('component updated !')
})

onBeforeMount(() => {
    console.log('the initial count is ' + count.value)
})
</script>
