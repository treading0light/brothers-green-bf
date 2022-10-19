<template>
	<div class="flex flex-col items-center gap-10 min-h-screen">
		<h1>Tell the world about your experiences!</h1>
		<input ref="title" type="text" placeholder="Title" class="input input-bordered w-full max-w-xs" />
		<input ref="description" type="text" placeholder="Description" class="input input-bordered w-full max-w-xs" />
		<textarea ref="body" class="textarea textarea-bordered w-2/3" placeholder="Body"></textarea>
		<button @click="submit" class="btn btn-primary">Submit</button>
	</div>
	
</template>

<script setup>
	const title = ref('')
	const description = ref('')
	const body = ref('')

	const submit = () => alert("this button doesn't work yet!")
</script>