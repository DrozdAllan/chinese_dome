<template>
  <Layout>
	 <h1>Welcome To the chinese dome</h1>
	 {{ flower }}
  </Layout>
</template>

<script setup>
import {ref, defineProps} from 'vue'
import Layout from './Layout.vue'

const props = defineProps(['flower']);
</script>
