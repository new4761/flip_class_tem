export const state = () => ({
    lessonData: null
})

export const mutations = {
    async  set(state, data) {
        state.lessonData = data
    },
}
export const getters = {
    testget (state) {
      return state.lessonData
    }
  }

