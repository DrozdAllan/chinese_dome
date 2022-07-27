<template>
	 <Head title="Chinese Name" />
	 <Layout>
		  <el-row justify="center">
				<el-image :src="imageSrc" fit="contain" style="height: 200px;border-radius: 5px" />
		  </el-row>
		  <el-row justify="center" style="padding: 10px 0 10px 0">
				<el-form @submit.prevent>
					 <el-form-item label="Enter Your Name">
						  <el-input v-model="name" @focus="onFocus" @keydown.enter="onSubmit" id="namePicker"></el-input>
					 </el-form-item>
					 <el-row justify="center">
						  <el-button v-if="simplifiedChinese" type='warning' @click="onDelete">
								Try another name
						  </el-button>
						  <el-button v-else type='primary' @click="onSubmit" :loading="isLoading">
								Get my chinese name
						  </el-button>
					 </el-row>
				</el-form>
		  </el-row>
		  <el-row justify="center">
				<el-collapse-transition>
					 <div v-if="simplifiedChinese">
						  <div>
								Your chinese name may be : <span class="pingfang">{{ simplifiedChinese }}</span>
						  </div>
						  <div>
								Hanyu pinyin : <span class="pingfang">{{ pinyinName }}</span>
						  </div>
					 </div>
				</el-collapse-transition>
		  </el-row>
	 </Layout>
</template>
<script setup lang="ts">
import Layout from './Layout.vue'
import {Head} from '@inertiajs/inertia-vue3'
import {ref} from 'vue';
import axios from "axios";

const name = ref('');
const simplifiedChinese = ref('');
const pinyinName = ref('');
const isLoading = ref(false);
const imageSrc = "/assets/muraille.jpg";

function onSubmit() {
    if (name.value) {
        isLoading.value = true;
        axios.post('/name', {'name': name.value}).then((result) => {
            simplifiedChinese.value = result.data['simplifiedChinese'];
            pinyinName.value = result.data['pinyinName'];
            isLoading.value = false;
        }).catch((e) => console.log('error : ' + e));
    }
}

function onDelete() {
    name.value = '';
    simplifiedChinese.value = '';
    document.getElementById('namePicker')?.focus();
}
function onFocus() {
    name.value = '';
    simplifiedChinese.value = '';
    pinyinName.value = '';
}
</script>
<style scoped>
.pingfang {
    font-size: 24px;
}
</style>
