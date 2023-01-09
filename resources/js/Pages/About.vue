<template>
	 <Head title="About This App" />
	 <Layout>
		  <div style="text-align: center;line-height: 2">

		  <h1>你好 & welcome to the chinese dome</h1>
		  <p>This app is developed by <el-link type="primary" :underline="false" target="_blank" :href=link>Allan Drozd</el-link></p>


<div><b>Credits :</b></div>
		  <div>Zodiac animals banner by <el-link type="primary" :underline="false" target="_blank" href='https://www.freepik.com/author/tartila'>tartila on Freepik</el-link></div>
		  <div>Zodiac individual animals by <el-link type="primary" :underline="false" target="_blank" href='https://mixkit.co/@casandrabanuelos/'>Casandra Banuelos on mixkit</el-link></div>
		  <div>Great Wall of China photo by <el-link type="primary" :underline="false" target="_blank" href='https://www.pexels.com/fr-fr/@diana-2910042/'>Diana on Pexels</el-link></div>
		  <div>Name traduction to simplified chinese by <el-link type="primary" :underline="false" target="_blank" href='https://cloud.google.com/translate'>Google Cloud Translation API</el-link></div>
		  <div>Traduction to hanyu pinyin by <el-link type="primary" :underline="false" target="_blank" href='https://github.com/overtrue/pinyin'>overtrue</el-link></div>
		  <div>China flag by <el-link type="primary" :underline="false" target="_blank" href='https://www.flaticon.com/fr/auteurs/rasama-studio'>Rasama studio on Flaticon</el-link></div>
		  </div>
	 </Layout>
</template>
<script setup lang="ts">
import Layout from './Layout.vue'
import {Head} from '@inertiajs/inertia-vue3'

const link = "https://allandrozd.com/";
</script>
