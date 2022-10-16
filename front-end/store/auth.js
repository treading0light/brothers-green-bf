import { defineStore } from 'pinia'

export const useAuthStore = defineStore({
  id: 'auth-store',
  state: () => {
    return {
      myList: ['youtube', 'twitch'],
    }
  },
  actions: {},
  getters: {
    authList: state => state.authList,
  },
})