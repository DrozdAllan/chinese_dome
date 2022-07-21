<template>
	 <div class="common-layout" style="display: flex">
		  <el-container>
				<el-header>
					 <el-row align="middle" class="heading">
						  <el-col :span="3">
								Logo
						  </el-col>
						  <el-col :span="3">
								<el-link type="primary" @click="tabStore.changeTab(0)">
									 <Link href="/" as="span" :class="{active: tab === 0}" >About</Link>
								</el-link>
						  </el-col>
						  <el-col :span="3">
								<el-link type="primary" @click="tabStore.changeTab(1)">
									 <Link href="/zodiac" as="span" :class="{active: tab === 1}">Zodiac</Link>
								</el-link>
						  </el-col>
						  <el-col :span="3">
								<el-link type="primary" @click="tabStore.changeTab(2)">
									 <Link href="/name" as="span" :class="{active: tab === 2}">Name</Link>
								</el-link>
						  </el-col>
						  <el-col :span="3">
								<el-link type="primary" @click="tabStore.changeTab(4)">
									 <Link href="/map" as="span" :class="{active: tab === 4}">Map</Link>
								</el-link>
						  </el-col>
					 </el-row>
				</el-header>
				<el-main>
					 <article>
						  <slot />
					 </article>
				</el-main>
		  </el-container>
	 </div>
</template>
<script setup>
import {computed} from "vue";
import {Link} from '@inertiajs/inertia-vue3'
import {useTabStore} from "../store/tab";

const tabStore = useTabStore();
const tab = tabStore.tab;

</script>
<style>
.common-layout {
    min-height: 100vh;
}

.el-header {
    border-bottom: 1px solid #A3262A;
}

.heading {
    height: 60px;
}

.active {
   color: #A3262A;
	text-decoration: underline wavy #A3262A;
}
</style>
