<template>
  <Layout>
	 <Head><title>Welcome</title></Head>
	 <h1>Welcome</h1>
	 <p>coucou</p>
	 {{ flower }}
  </Layout>
</template>
<script>
import Layout from './Layout.vue'
import {Head} from '@inertiajs/inertia-vue3'

export default {
    components: {
        Head, Layout,
    }, props: {
        flower: String
    },
}
</script>
