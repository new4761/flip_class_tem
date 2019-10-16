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

//   export const actions = {
//     async GET_STARS ({ commit }) {
//         const { data } = await axios.get('http://my-api/stars')
//         commit('SET_STARS', data)
//       }
//   }
