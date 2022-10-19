<template>
  <div class="min-h-screen w-4/5 m-auto flex flex-col gap-32 items-center">

    <!-- <Background /> -->

    <div class="w-full mt-28 flex flex-col items-center gap-10 text-center text-base-content
    text-5xl" style="z-index: 2; font-family: 'UnifrakturCook', cursive;">
      <h1>The Brothers</h1>
      <h1>Green</h1>
      <p class="text-xl">We can see the future.</p>
    </div>

    <div class="flex flex-col items-center gap-10 lg:self-end p-10 bg-secondary bg-opacity-20 p-20" style="z-index: 2; text-shadow: 2px 2px black;">
      <h1 class="text-base-content text-5xl self-start" style="">Something from the blog</h1>

      <ArticlePreview v-if="article" :data="article" />
    </div>

    <div class="flex flex-col items-center lg:self-start bg-secondary bg-opacity-20 text-xl lg:text-5xl gap-5 p-32" style="z-index: 2; text-shadow: 2px 2px black;">
      <h1>Explore the artwork</h1>
      <button @click="gallery" class="btn">Explore</button>
    </div>
    


  </div>

  
  
</template>


<script setup>

  const article = ref(null)

  const emit = defineEmits(['isHome'])
  const isHome = (bool) => emit('isHome', bool)

  const gallery = () => alert('too bad!')

  onMounted(() => {
    
    isHome(true)

    // article.value = randomBlog()
    // console.log(article.value)
  })

  onUnmounted(() => {

    isHome(false)
  })
  

  

</script>

<style scoped>
  
</style>

