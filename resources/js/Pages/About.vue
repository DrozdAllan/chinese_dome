<template>
	 <Head title="About this app" />
	 <Layout>
		  <h1>Welcome To the chinese dome</h1>
		  <p>This app is developed by <a :href=link target="_blank">Allan Drozd</a></p>
		  <p>
				Theme https://www.schemecolor.com/chinese-new-year-colors.php </p>
		  <p>
				TODO: add chinese sudoku ? https://chinese.gratis/tools/sudoku/ TODO: interactive map of china ? instead of
				weather ? </p>
	 </Layout>
</template>
<script setup lang="ts">
import Layout from './Layout.vue'
import {Head} from '@inertiajs/inertia-vue3'

const props = defineProps({'flower': String});
const link = "https://allandrozd.com/";
</script>
