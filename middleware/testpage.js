


// export default function (context) {
//   // axios.get('/api').then(res => store.commit('testStore/set', res))

//   const test = context.$axios.$get('/api').then(res => console.log(res.json()));


//   // context.store.commit('testStore/set', test);
// }
// context.store.commit('testStore/set', test)

export default async function ({ store, $axios }) {

  return $axios.$get('/api')
    .then((response) => {
      // console.log(response);
      store.commit('testStore/set', response);
    });
}

// export default function (context) {
//   context.store.commit('testStore/set',"test")
// }

