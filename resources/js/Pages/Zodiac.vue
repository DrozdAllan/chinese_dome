<template>
  <Layout>
	 <Head><title>zodiac</title></Head>
	 https://www.chinahighlights.com/travelguide/chinese-zodiac/
	 {{ zodiacs }}
  </Layout>
</template>
<script>
import Layout from './Layout.vue'
import {Head} from '@inertiajs/inertia-vue3'

export default {
    components: {
        Layout,
		  Head,
    }, props: {
        zodiacs: Array,
    }
}
</script>
