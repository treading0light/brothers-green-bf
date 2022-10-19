<template>
	<h1>Testing from child component {{ message }}</h1>
</template>

<script setup>
	const $apiRoute = useNuxtApp()
	const message = $apiRoute('/test')
</script>