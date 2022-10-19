<template>
  <div id="root" :data-theme="theme">
    <TheHeader @themeSelected="changeTheme" />

    <Background v-if="home == true" />

    <NuxtPage @isHome="markHome" />

    <TheFooter />
  </div>
</template>

<script setup>
  const theme = ref('night')
  const home = ref(false)

  const changeTheme = (newTheme) => {
    theme.value = newTheme
    // console.log('chosen theme: ' + newTheme)
    } 

  const markHome = (bool) => home.value = bool

  // Test code stays until implemented in other pages!!!
  import { useAuthStore } from '@/store/auth'

  const config = useRuntimeConfig()
  const api = (url) => config.API_BASE_URL + url
  

  console.log(config.API_BASE_URL)

  const message = await useFetch(api('/test'))
  console.log(message.data)

  const myStore = useAuthStore()
  const list = myStore.myList
</script>
