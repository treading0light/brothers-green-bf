export default defineNuxtPlugin(NuxtApp => {
	return {
		provide: {
			apiRoute: (url) => config.API_BASE_URL + url
		}
		
	}
})
