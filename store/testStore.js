export const state = () => ({
    lessonData: null
})

export const mutations = {
    async  set(state, data) {
        state.lessonData = data
    },
}
export const getters = {
    get (state) {
      return state.lessonData
    }
  }
