<template>
	 <Head title="Zodiac Sign"></Head>
	 <Layout>
		  <el-row justify="center">
				<el-image :src="imageSrc" fit="contain" style="height: 200px" />
		  </el-row>
		  <el-row justify="center" style="padding: 10px 0 10px 0">
				<el-form @submit.prevent>
					 <el-form-item label="Enter Your Birthday">
						  <el-date-picker v-model="birthday" @focus="onFocus" type="date" placeholder="Years go from 1970 to 2030" id="datePicker"
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
						  <el-row align="middle" style="text-align: center;padding-top:10px">
								<el-col :xs="24" :sm="8">
									 <div class="repLine"> Your personality is : <b>{{ zodiac.personality }}</b></div>
									 <div class="repLine"> Your lucky colors are : <b>{{ zodiac.lucky_colors }}</b></div>
								</el-col>
								<el-col :xs="24" :sm="8">
									 <div class="repLine">Your zodiac sign is : <b>{{ zodiac.name }}</b></div>
									 <el-image :src="`assets/zodiacs/${zodiac.pic}.png`" style="height: 200px" />
								</el-col>
								<el-col :xs="24" :sm="8">
									 <div class="repLine">Your lucky flowers are : <b>{{ zodiac.lucky_flowers }}</b></div>
									 <div class="repLine">Your lucky numbers are : <b>{{ zodiac.lucky_numbers }}</b></div>
								</el-col>
						  </el-row>
					 </div>
				</el-collapse-transition>
		  </el-row>
	 </Layout>
</template>
<script setup>
import {Head} from '@inertiajs/inertia-vue3';
import Layout from './Layout.vue';
import {ref} from 'vue'
import axios from "axios";

const birthday = ref(null);
const zodiac = ref(null);
const isLoading = ref(false);
const imageSrc = "/assets/zodiacMain.jpg";

const maxYear = new Date().setFullYear(2030);
const minYear = new Date().setFullYear(1970);

function onSubmit() {
    if (birthday.value && birthday.value > minYear && birthday.value < maxYear) {
        isLoading.value = true;
        axios.post('/zodiac', {'birthday': birthday.value}).then((result) => {
            zodiac.value = result.data['zodiac'];
            isLoading.value = false;
        }).catch((e) => console.log('error : ' + e));
    }
}

function onDelete() {
    zodiac.value = null;
    birthday.value = null;
    document.getElementById('datePicker')?.focus();
}
function onFocus() {
    zodiac.value = null;
    // birthday.value = null;
}
</script>
<style scoped>
.repLine {
	 margin: 2px 0 2px 0;
}
</style>
