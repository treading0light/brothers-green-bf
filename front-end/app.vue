<template>
  <div>
    <h1>Hello?</h1>
    <p>{{ message.data }}</p>

    <p>{{ list }}</p>
  </div>
</template>

<script setup>
  import { useAuthStore } from '@/store/auth'

  const config = useRuntimeConfig()
  const api = (url) => config.API_BASE_URL + url
  

  console.log(config.API_BASE_URL)

  const message = await useFetch(api('/test'))
  console.log(message.data)

  const myStore = useAuthStore()
  const list = myStore.myList
</script>
