<template>
	 <Head title="About this app" />
	 <Layout>
		  <h1>Welcome To the chinese dome</h1>
		  TODO: add chinese sudoku ? https://chinese.gratis/tools/sudoku/ TODO: interactive map of china ? instead of
		  weather ?
	 </Layout>
</template>
<script setup lang="ts">
import Layout from './Layout.vue'
import {Head} from '@inertiajs/inertia-vue3'

const props = defineProps({'flower': String});
</script>
<style scoped></style>
