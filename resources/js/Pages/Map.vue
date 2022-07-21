<template>
	 <Head title="Interactive Map" />
	 <Layout>
		  <el-row justify="center" align="middle">
				<h3>
					 China Map</h3>
		  </el-row>
		  <p>faire une liste déroulante ou tu peux choisir d'encercler des grandes villes, les rivières... voire plus</p>
		  <el-row justify="center" style="padding: 10px 0 10px 0">
				<l-map style="height: 500px" :zoom="zoom" :center="center" >
					 <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
					 <l-circle :lat-lng="circle.center" :radius="circle.radius" :color="circle.color" />
				</l-map>
		  </el-row>
	 </Layout>
</template>
<script setup>
import Layout from './Layout.vue';
import {Head} from '@inertiajs/inertia-vue3';
import {onBeforeMount, ref} from "vue";
import 'leaflet/dist/leaflet.css';
import {LMap, LTileLayer, LCircle} from "@vue-leaflet/vue-leaflet";

const mapIsReady = ref(false);
const url = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
const attribution = '&copy; <a target="_blank" href="http://osm.org/copyright">OpenStreetMap</a> contributors';
const zoom = 12;
const center = [31.59, 120.29];
const circle = {
    center: [31.59, 120.29],
    radius: 4500,
    color: 'red'
};
</script>
