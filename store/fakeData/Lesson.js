export const state = () => ({
    lessonList: [{
        id: 1,
        cardId: "1",
        name: "ทดสอบชื่อเเบบฝึกหัด",
        createDate: "14/8/2561",
        desc: "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
            choice: 30,
            upload: 60,
            text: 80
        },
        PageData: [{
                type: "textTitle",
                title: "Bigtitle"
            },
            {
                type: "textContent",
                content: "content1"
            },

            {
                type: "textContent",
                content: "content2"
            },

            {
                type: "youtube",
                link: "https://www.youtube.com/embed/dQw4w9WgXcQ?controls=0"
            },

            {
                type: "linkButton",
                title: "this is linked button",
                link: "https://www.youtube.com/watch?v=dQw4w9WgXcQ"
            },
            {
                type: "downLoadFile",
                title: "this is download button",
                link: "https://www.youtube.com/watch?v=dQw4w9WgXcQ"
            },

            {
                type: "upLoadFile",
                title: "this is for upload",
                desc: "sample desc"
            },

            {
                type: "textArea",
                title: "this is text area",
                desc: "sample desc"
            },

            {
                type: "textInput",
                title: "this is text input",
                desc: "sample desc"
            },

            {
                type: "radioInput",
                title: "Question",
                desc: "question desc",
                testdata: [
                    { text: "First radioInput", value: "first" },
                    { text: "Second radioInput", value: "second" },
                    { text: "Third radioInput", value: "third" }
                ]
            },

            {
                type: "radioInput",
                title: "Question2",
                desc: "question desc",
                testdata: [
                    { text: "hi", value: "first" },
                    { text: "yo", value: "second" },
                    { text: "ok", value: "third" }
                ]
            },

            {
                type: "selectionInput",
                title: "Question2",
                desc: "question desc",
                testdata: [
                    { text: "hi", value: "first" },
                    { text: "yo", value: "second" },
                    { text: "ok", value: "third" }
                ]
            },

            {
                type: "smallImg",
                link: "https://picsum.photos/300/150/?image=41"
            },

            {
                type: "bigImage",
                link: "https://picsum.photos/300/150/?image=41"
            },

            {
                type: "iflameSlider",
                link: "https://docs.google.com/presentation/d/e/2PACX-1vSK4ZirU1tcdF2FOzRUnLO375H5eZAlZ3FA2SJlltXWlXcOo_Zh1NXcnC8vjzAzsnshh7DStbO6VRo0/embed?start=false&loop=false&delayms=3000"
            },

        ]



    }]

})

export const mutations = {

}
export const actions = {

}