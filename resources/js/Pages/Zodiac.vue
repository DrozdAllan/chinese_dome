<template>
  <Layout>
	 https://www.chinahighlights.com/travelguide/chinese-zodiac/ {{ zodiacs }}
  </Layout>
</template>
<script setup>
import {defineProps} from "vue";
import Layout from './Layout.vue'

const props = defineProps(['zodiacs']);
</script>
