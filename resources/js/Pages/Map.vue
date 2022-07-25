<template>
	 <Head title="Interactive Map" />
	 <Layout>
		  <el-row justify="center" align="middle">
				<h3>China Map</h3>
		  </el-row>
		  <el-row justify="center" align="middle">
				<el-select v-model="filter" class="m-2" placeholder="Select a layer" size="large">
					 <el-option v-for="item in options" :key="item.value" :label="item.label" :value="item.value" />
				</el-select>
		  </el-row>
		  <el-row justify="center" style="padding: 10px 0 10px 0">
				<l-map style="height: 500px" :zoom="4" :center="[37.00, 110.29]">
					 <l-tile-layer :url="url" :attribution="attribution" />
					 <l-geo-json :geojson="geojson" :options="geooptions" />
					 <l-marker v-if="filter === 'bigCities'" v-for="city in bigCities" :lat-lng="city['lat-lng']">
						  <l-tooltip :options="{'permanent': true, 'direction': city['direction'], 'offset': city['offset']}">
								{{ city.tooltip }}
						  </l-tooltip>
					 </l-marker>
					 <l-marker v-if="filter === 'provinces'" v-for="province in provinces" :lat-lng="province['lat-lng']">
						  <l-tooltip :options="{'permanent': true, 'direction': province['direction'], 'offset': province['offset']}">
								{{ province.tooltip }}
						  </l-tooltip>
					 </l-marker>
					 <l-marker v-if="filter === 'lakes'" v-for="lake in lakes" :lat-lng="lake['lat-lng']">
						  <l-tooltip :options="{'permanent': true, 'direction': lake['direction'], 'offset': lake['offset']}">
								{{ lake.tooltip }}
						  </l-tooltip>
					 </l-marker>
				</l-map>
		  </el-row>
	 </Layout>
</template>
<script setup>
import Layout from './Layout.vue';
import {Head} from '@inertiajs/inertia-vue3';
import {ref} from "vue";
import 'leaflet/dist/leaflet.css';
import {LMap, LTileLayer, LGeoJson, LMarker, LTooltip} from "@vue-leaflet/vue-leaflet";
import {ChinaData} from 'china-map-geojson';
import {bigCities, provinces, lakes} from '../utils/mapData';

const url = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
const attribution = '&copy; <a target="_blank" href="http://osm.org/copyright">OpenStreetMap</a> contributors';
const geojson = ChinaData;
const geooptions = {
    style: {
        "color": "#A3262A",
        "fillColor": "rgba(255,18,52,0.23)",
        "weight": 1
    },
};

const filter = ref('');

const options = [{
    label: 'Main Cities',
    value: 'bigCities',
}, {
    label: 'Provinces',
    value: 'provinces',
}, {
    label: 'Lakes',
    value: 'lakes',
},];

</script>
<style>
a > svg {
    visibility: hidden;
}
</style>
