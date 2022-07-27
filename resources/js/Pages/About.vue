<template>
	 <Head title="About this app" />
	 <Layout>
		  <div style="text-align: center;line-height: 2">
				
		  <h1>你好 & welcome to the chinese dome</h1>
		  <p>This app is developed by <a :href=link target="_blank">Allan Drozd</a></p>
				
				
<div><b>Credits :</b></div>
		  <div>Zodiac animals banner by <a href='https://www.freepik.com/author/tartila' target="_">tartila on Freepik</a></div>
		  <div>Zodiac individual animals by <a href='https://mixkit.co/@casandrabanuelos/' target="_">Casandra Banuelos on mixkit</a></div>
		  <div>Great Wall of China photo by <a href='https://www.pexels.com/fr-fr/@diana-2910042/' target="_">Diana on Pexels</a></div>
		  <div>Name traduction to simplified chinese by <a href="https://cloud.google.com/translate" target="_">Google Cloud Translation API</a></div>
		  <div>Traduction to hanyu pinyin by <a href="https://github.com/overtrue/pinyin" target="_">overtrue</a></div>
		  <div>China flag by <a href='https://www.flaticon.com/fr/auteurs/rasama-studio' target="_">Rasama studio on Flaticon</a></div>

		  </div>
	 </Layout>
</template>
<script setup lang="ts">
import Layout from './Layout.vue'
import {Head} from '@inertiajs/inertia-vue3'

const props = defineProps({'flower': String});
const link = "https://allandrozd.com/";
</script>
