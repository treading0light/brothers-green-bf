<template>

	<div class="card bg-primary glass text-primary-content hover:text-base-content shadow-xl p-2">
	    <NuxtLink :to="link"> 
			<figure><img class="w-full" :src="article.thumbnail" alt="Article" /></figure>
			
			<div class="card-body">
				<h2 class="card-title">{{ article.title }}</h2>
				<p class="">{{ article.description }}</p>
			</div>

			<div class="flex flex-col self-end text-sm">
					<p>Author:</p>
					<p>{{ article.author }}</p>
				</div>
		</NuxtLink>
	</div>

	
	
</template>

<script setup>
	const props = defineProps({
		data: Object
	})

	const article = computed(() => props.data)

	const link = '/blog/' + props.data.slug

</script>