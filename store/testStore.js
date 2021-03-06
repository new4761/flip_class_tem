export const state = () => ({
    //lessonData: null

    lessonData:
    {
        lastUpdate: "14/7/2542 10:24",
        id: 1,
        imgSrc: "https://placekitten.com/380/200",
        typeVariant: "primary",
        typeName: "test",
        cardTitle: "test",
        cardTag: [
            {
                tagVariant: "primary",
                tagName: "tagName"
            },
            {
                tagVariant: "primary",
                tagName: "tagName"
            },
            {
                tagVariant: "primary",
                tagName: "tagName"
            }
        ],
        cardSmallDes: "Now you can finally test your work by changing VUE_APP_API_CLIENT in the targeted environment to either mock or server. But note that each time you change it you have to restart/rebuild your app.",
        cardViewCount: 3000,
        cardDoneCount: 3000,
        cardCreaterData: {
            src: "https://placekitten.com/380/200",
            name: "GodNewInwZa"
        },
        progress: 30
    }


})

export const mutations = {
    async  set(state, data) {
        state.lessonData = data
    },
}
export const getters = {
    testget(state) {
        return state.lessonData
    }
}

