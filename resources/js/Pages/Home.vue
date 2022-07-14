<template>
	 <Head title="Chinese Dome" />
	 <Layout>
		  <h1>Welcome To the chinese dome</h1>
		  TODO: add chinese sudoku ? https://chinese.gratis/tools/sudoku/
		  TODO: interactive map of china ? instead of weather ?
		  <el-row>
				<el-col :span="12">
					 <el-card class="box-card" shadow="hover">
						  <template #header>
								<div class="card-header">
									 <span>Zodiac Sign</span>
								</div>
						  </template>
						  <Zodiac />
					 </el-card>
				</el-col>
				<el-col :span="12">
					 <el-card class="box-card" shadow="hover">
						  <template #header>
								<div class="card-header">
									 <span>Chinese Name</span>
								</div>
						  </template>
						  <Name />
					 </el-card>
				</el-col>
				<el-col :span="12">
					 <el-card class="box-card" shadow="hover">
						  <template #header>
								<div class="card-header">
									 <span>Translator API</span>
								</div>
						  </template>
						  <Translator />
					 </el-card>
				</el-col>
				<el-col :span="12">
					 <el-card class="box-card" shadow="hover">
						  <template #header>
								<div class="card-header">
									 <span>Weather China</span>
								</div>
						  </template>
						  <Weather />
					 </el-card>
				</el-col>
		  </el-row>
	 </Layout>
</template>
<script setup lang="ts">
import Layout from './Layout.vue'
import {Head} from '@inertiajs/inertia-vue3'
import Zodiac from '../Components/Zodiac.vue'
import Name from '../Components/Name.vue'
import Translator from '../Components/Translator.vue'
import Weather from '../Components/Weather.vue'

const props = defineProps({'flower': String});
</script>
<style scoped>
.el-col {
    display: flex;
    justify-content: center;
}

.box-card {
    width: 480px;
    margin: 5px 0 5px 0;
}

.card-header {
    display: flex;
    justify-content: center;
}
</style>
