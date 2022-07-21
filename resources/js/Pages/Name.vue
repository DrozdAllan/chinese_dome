<template>
	 <Head title="Chinese Name" />
	 <Layout>
		  <el-row justify="center" align="middle" class="bg-img">
				<h3>
					 Get Your Chinese Name</h3>
		  </el-row>
		  <el-row justify="center" style="padding: 10px 0 10px 0">
				<el-form @submit.prevent>
					 <el-form-item label="Enter Your Name">
						<el-input v-model="name" label="Allan" id="namePicker"></el-input>
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
						  Your chinese name sign is : {{ simplifiedChinese }} <br>
						  {{ pinyinName }}
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

function onSubmit() {
    // TODO: catch error
    isLoading.value = true;
    axios.post('/name', {'name': name.value}).then((result) => {
        simplifiedChinese.value = result.data['simplifiedChinese'];
        pinyinName.value = result.data['pinyinName'];
        isLoading.value = false;
    });
}

function onDelete() {
    name.value = '';
    simplifiedChinese.value = '';
    document.getElementById('namePicker')?.focus();
}


</script>
<style scoped></style>
