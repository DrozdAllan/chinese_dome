<template>
	 <Head title="Interactive Map" />
	 <Layout>
		  <el-row justify="center" align="middle">
				<h3>
					 China Map</h3>
		  </el-row>
		  <el-select v-model="filter" class="m-2" placeholder="Select" size="large">
				<el-option v-for="item in options" :key="item.value" :label="item.label" :value="item.value" />
		  </el-select>
		  <el-row justify="center" style="padding: 10px 0 10px 0">
				<l-map style="height: 500px" :zoom="zoom" :center="center">
					 <l-tile-layer :url="url" :attribution="attribution" />
					 <l-geo-json :geojson="geojson" :options="geooptions" />
					 <l-marker :lat-lng="[37.00, 110.29]">
						  <l-tooltip :options="{'permanent': true}">
								Shenzen
						  </l-tooltip>
					 </l-marker>
					 <l-circle v-if="filter === 'bigCities'" :lat-lng="circle.center" :radius="circle.radius"
								  :color="circle.color" />
					 <l-rectangle v-else-if="filter === 'rivers'" :lat-lngs="rectangle" />
				</l-map>
		  </el-row>
	 </Layout>
</template>
<script setup>
import Layout from './Layout.vue';
import {Head} from '@inertiajs/inertia-vue3';
import {onBeforeMount, ref} from "vue";
import 'leaflet/dist/leaflet.css';
import {LMap, LTileLayer, LCircle, LRectangle, LGeoJson, LMarker, LTooltip} from "@vue-leaflet/vue-leaflet";
import {ChinaData} from 'china-map-geojson';

const url = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
const attribution = '&copy; <a target="_blank" href="http://osm.org/copyright">OpenStreetMap</a> contributors';

const zoom = 4;
const center = [37.00, 110.29];
const filter = ref('');
const geojson = ChinaData;
const geooptions = {
    style: {
        "color": "#A3262A",
        "fillColor": "rgba(255,18,52,0.23)",
        "weight": 1
    }
};


// TODO: https://en.wikipedia.org/wiki/List_of_lakes_of_China

// TODO: https://en.wikipedia.org/wiki/List_of_cities_in_China_by_population
const options = [{
    label: 'Lakes',
    value: 'lakes',
}, {
    label: 'BigCities',
    value: 'bigCities',
},];


const circle = {
    center: [31.59, 120.29],
    radius: 4500,
    color: 'red'
};

const rectangle = [[30.59, 119.29], [32.59, 119.29], [30.59, 121.29], [32.59, 121.29],];
</script>
