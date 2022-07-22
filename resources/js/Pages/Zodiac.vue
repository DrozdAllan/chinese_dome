<template>
	 <Head title="Zodiac Sign"></Head>
	 <Layout>
		  <el-row justify="center" align="middle">
				<h3>
					 Zodiac Sign</h3>
		  </el-row>
		  <el-row justify="center">
				<el-image :src="imageSrc" fit="contain" style="width: 1327px; height: 258px" title="image created by tartila" />
		  </el-row>
		  <el-row justify="center" style="padding: 10px 0 10px 0">
				<el-form @submit.prevent>
					 <el-form-item label="Enter Your Birthday">
						  <el-date-picker v-model="birthday" type="date" placeholder="Pick a date" id="datePicker"
												:clearable=false :editable=false style="width: 100%" @keydown.enter="onSubmit" />
					 </el-form-item>
					 <el-row justify="center">
						  <el-button v-if="zodiac" type='warning' @click="onDelete">
								Try another date
						  </el-button>
						  <el-button v-else type='primary' @click="onSubmit" :loading="isLoading">
								Check my zodiac sign
						  </el-button>
					 </el-row>
				</el-form>
		  </el-row>
		  <el-row justify="center">
				<el-collapse-transition>
					 <div v-if="zodiac">
						  Your zodiac sign is : {{ zodiac.name }} <br> Your personality is : {{ zodiac.personality }} <br>
						  Your lucky colors are : {{ zodiac.lucky_colors }} <br> Your lucky flowers are :
						  {{ zodiac.lucky_flowers }} <br> Your lucky numbers are : {{ zodiac.lucky_numbers }}
					 </div>
				</el-collapse-transition>
		  </el-row>
	 </Layout>
</template>
<script setup lang="ts">
import {Head} from '@inertiajs/inertia-vue3';
import Layout from './Layout.vue';
import {ref} from 'vue'
import axios from "axios";

const birthday = ref(null);
const zodiac = ref(null);
const isLoading = ref(false);
const imageSrc = "/assets/2272.jpg";

function onSubmit() {
    // TODO: catch error
    isLoading.value = true;
    axios.post('/zodiac', {'birthday': birthday.value}).then((result) => {
        zodiac.value = result.data['zodiac'];
        isLoading.value = false;
    });
}

function onDelete() {
    zodiac.value = null;
    birthday.value = null;
    document.getElementById('datePicker')?.focus();
}
</script>
<style scoped>
</style>
