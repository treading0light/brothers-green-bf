// https://v3.nuxtjs.org/api/configuration/nuxt.config
export default defineNuxtConfig({
	publicRuntimeConfig: {
    API_BASE_URL: process.env.API_BASE_URL
	},

	modules: [
			[
				'@pinia/nuxt',
				{
			        autoImports: ['defineStore',]
			    },
		    ],
		],
})
