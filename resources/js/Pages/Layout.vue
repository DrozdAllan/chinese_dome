<template>
	 <div class="common-layout" style="display: flex">
		  <el-container>
				<el-header>
					 <el-row align="middle" class="heading">
						  <el-col :span="3">
								Logo ou title
						  </el-col>
						  <el-col :span="3">
								<el-link type="primary">
									 <Link href="/" as="span">About</Link>
								</el-link>
						  </el-col>
						  <el-col :span="3">
								<el-link type="primary">
									 <Link href="/zodiac" as="span">Zodiac</Link>
								</el-link>
						  </el-col>
						  <el-col :span="3">
								<el-link type="primary">
									 <Link href="/name" as="span">Name</Link>
								</el-link>
						  </el-col>
						  <el-col :span="3">
								<el-link type="primary">
									 <Link href="/translator" as="span">Translator</Link>
								</el-link>
						  </el-col>
						  <el-col :span="3">
								<el-link type="primary">
									 <Link href="/map" as="span">Map</Link>
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
import {Link} from '@inertiajs/inertia-vue3'
</script>
<style>
.common-layout {
    min-height: 100vh;
}

.el-header {
    border-bottom: 1px solid rgb(64, 158, 255);
}

.heading {
    height: 60px;
}
</style>
