<template>
  <h3>
	 Zodiac name local made, enter your birthday </h3>
  <el-form @submit.prevent>
	 <el-form-item label="Birthday">
		<el-date-picker v-model="date" type="date" placeholder="Pick a date" style="width: 100%"
							 @keydown.enter="onSubmit" />
	 </el-form-item>
	 <el-form-item>
		<el-button type="primary" @click="onSubmit">Check my zodiac sign</el-button>
	 </el-form-item>
  </el-form>
  <div v-if="zodiac">
	 Your zodiac sign is : {{ zodiac.name }} <br>
	 Your personality is : {{ zodiac.personality }} <br>
	 Your lucky colors are : {{ zodiac.lucky_colors }} <br>
	 Your lucky flowers are : {{ zodiac.lucky_flowers }} <br>
	 Your lucky numbers are : {{ zodiac.lucky_numbers }}
  </div>
</template>
<script setup lang="ts">
import {ref} from 'vue'
import axios from "axios";

const date = ref(null);
const zodiac = ref(null);

function onSubmit() {
    // TODO: catch error
    axios.post('/zodiac', {'date': date.value}).then((result) => {
        zodiac.value = result.data['zodiac'];
    });
}
</script>
<style scoped></style>
