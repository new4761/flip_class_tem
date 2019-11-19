<template>
  <b-container style="background-color: white; " >
    <div v-for="n in 1" :key="n" class="p-md-5 justify-content-center">
      <b-row v-for="n in 1" :key="n" class="justify-content-center">
        <textTitle title="ข้อความขนาดใหญ่" />
      </b-row>
      <b-row v-for="n in 3" :key="n" class="justify-content-center">
        <textContent :conntent="faketext" />
      </b-row>
      <b-row v-for="n in 1" :key="n" class="justify-content-center">
        <youtube youtubeLink="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" />
      </b-row>
      <b-row class="justify-content-center text-center">
        <linkButton link="https://nuxtjs.org/api/components-nuxt-link/" buttonText="test" />
        <linkButton link="https://nuxtjs.org/api/components-nuxt-link/" buttonText="test" />
        <linkButton link="https://nuxtjs.org/api/components-nuxt-link/" buttonText="test" />
      </b-row>
      <b-row class="justify-content-center">
        <downLoadFile link="https://nuxtjs.org/api/components-nuxt-link/" buttonText="test" />
        <downLoadFile link="https://nuxtjs.org/api/components-nuxt-link/" buttonText="test" />
      </b-row>
      <b-row v-for="n in 1" :key="n" class="justify-content-center">
        <upLoadFile fileName="ชื่อไฟล์" desc="คำอธิบายขนาดเล็ก" />
        <upLoadFile fileName="ชื่อไฟล์" desc="คำอธิบายขนาดเล็ก" />
        <upLoadFile fileName="ชื่อไฟล์" desc="คำอธิบายขนาดเล็ก" />
      </b-row>
      <b-row v-for="n in 1" :key="n" class="justify-content-center">
        <upLoadFile fileName="ชื่อไฟล์" desc="คำอธิบายขนาดเล็ก" />
      </b-row>
      <b-row v-for="n in 1" :key="n" class="justify-content-center">
        <textArea title="ชื่อคำถาม" desc="คำอธิบายขนาดเล็ก" />
        <textArea title="ชื่อไฟล์" desc="คำอธิบายขนาดเล็ก" />
      </b-row>
      <b-row v-for="n in 1" :key="n" class="justify-content-center">
        <textArea title="ชื่อไฟล์" desc="คำอธิบายขนาดเล็ก" />
      </b-row>
      <b-row v-for="n in 1" :key="n" class="justify-content-center">
        <textInput title="ชื่อคำถาม" desc="คำอธิบายขนาดเล็ก" />
        <textInput title="ชื่อคำถาม" desc="คำอธิบายขนาดใหญ่ขึ้นมานิดหนึ่ง" />
        <textInput title="ชื่อคำถาม" desc="คำอธิบายขนาดใหญ่ขึ้นมานิดหนึ่ง" />
      </b-row>
      <b-row v-for="n in 1" :key="n" class="justify-content-center">
        <textInput
          title="ชื่อคำถามเเเบบยาวมากๆๆๆระดับหนึ่ง"
          desc="คำอธิบายขนาดใหญ่ขึ้นมานิดดดดดดดดดดดหนึ่ง"
        />
      </b-row>
      <b-row v-for="n in 3" :key="n" class="justify-content-center">
        <radioInput
          title="ชื่อคำถามเเเบบยาวมากๆๆๆระดับหนึ่งasdwqeqweqwejkhkqkbdkbiuabi"
          desc="คำอธิบายขนาดใหญ่ขึ้นมานิดดดดดดดดดดดหนึ่qweqweqweqweqweqweqweqweqweqweqweqeqwง"
          :myOptions="testdata "
        />
      </b-row>

      <b-row v-for="n in 3" :key="n" class="justify-content-center">
        <selectionInput
          title="ชื่อคำถามเเเบบยาวมากๆๆๆระดับหนึ่งasdwqeqweqwejkhkqkbdkbiuabi"
          desc="คำอธิบายขนาดใหญ่ขึ้นมานิดดดดดดดดดดดหนึ่qweqweqweqweqweqweqweqweqweqweqweqeqwง"
          :myOptions="testdata "
        />
      </b-row>
      <b-row v-for="n in 1" :key="n" class="justify-content-center">
        <smallImg srcLink="https://picsum.photos/300/150/?image=41" />
        <smallImg srcLink="https://picsum.photos/300/150/?image=41" />
        <smallImg srcLink="https://picsum.photos/300/150/?image=41" />
      </b-row>
      <b-row v-for="n in 1" :key="n" class="justify-content-center">
        <smallImg srcLink="https://picsum.photos/300/150/?image=41" />
      </b-row>
      <b-row v-for="n in 1" :key="n" class="justify-content-center">
        <bigImage srcLink="https://picsum.photos/300/150/?image=41" />
      </b-row>
      <b-row v-for="n in 1" :key="n" class="justify-content-center">
        <bigImage srcLink="https://picsum.photos/300/150/?image=41" />
      </b-row>
      <b-row v-for="n in 1" :key="n" class="justify-content-center">
        <iflameSlider
          iframeLink="https://docs.google.com/presentation/d/e/2PACX-1vSK4ZirU1tcdF2FOzRUnLO375H5eZAlZ3FA2SJlltXWlXcOo_Zh1NXcnC8vjzAzsnshh7DStbO6VRo0/embed?start=false&loop=false&delayms=3000"
        />
      </b-row>
    </div>
  </b-container>
</template>

<script>
//externalData
import linkButton from "~/components/generateObj/extrenalData/linkbutton";
//fileObj
import downLoadFile from "~/components/generateObj/file/downloadfile";
import upLoadFile from "~/components/generateObj/file/uploadfile";
//inputForm
import textArea from "~/components/generateObj/form/textArea";
import textInput from "~/components/generateObj/form/textInput";
import radioInput from "~/components/generateObj/form/radio";
import selectionInput from "~/components/generateObj/form/selection";
//image
import smallImg from "~/components/generateObj/image/smallImage";
import bigImage from "~/components/generateObj/image/bigImage";
import iflameSlider from "~/components/generateObj/image/slider";
//textContent
import textTitle from "~/components/generateObj/text/title";
import textContent from "~/components/generateObj/text/content";
//videp
import youtube from "~/components/generateObj/video/youtube";
export default {
  layout: "Lesson",
  components: {
    linkButton,
    downLoadFile,
    upLoadFile,
    textArea,
    textInput,
    radioInput,
    selectionInput,
    smallImg,
    bigImage,
    iflameSlider,
    textTitle,
    textContent,
    youtube
  },
  layout: "Lesson",
  data() {
    return {
      faketext:
        "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
      items: [
        {
          text: "Admin",
          href: "#"
        },
        {
          text: "Manage",
          href: "#"
        },
        {
          text: "Library",
          active: true
        }
      ],
      e1: 0,
      testdata: [
        { text: "First radio", value: "first" },
        { text: "Second radio", value: "second" },
        { text: "Third radio", value: "third" }
      ]
    };
  }
};
</script>