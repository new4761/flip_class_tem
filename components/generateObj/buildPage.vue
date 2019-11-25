<template>
  <b-container style="background-color: white; ">
    <div class="p-md-5 justify-content-center">
      <b-row v-for="(data,idx) in ComponentData" :key="idx">
        <b-row v-if="data.type == 'textTitle'" class="justify-content-center">
          <textTitle :title="data.title" />
        </b-row>

        <b-row v-if="data.type == 'textContent'" class="justify-content-center">
          <textContent :conntent="data.content" />
        </b-row>

        <b-row v-if="data.type == 'youtube'" class="justify-content-center">
          <youtube :youtubeLink="data.link" />
        </b-row>

        <b-row v-if="data.type == 'linkButton'" class="justify-content-center text-center">
          <linkButton :link="data.link" :buttonText="data.title" />
        </b-row>

        <b-row v-if="data.type == 'downLoadFile'" class="justify-content-center">
          <downLoadFile :link="data.link" :buttonText="data.title" />
        </b-row>

        <b-row v-if="data.type == 'upLoadFile'" class="justify-content-center">
          <upLoadFile :fileName="data.title" :desc="data.desc" />
        </b-row>

        <b-row v-if="data.type == 'textArea'" class="justify-content-center">
          <textArea :title="data.title" :desc="data.desc" />
        </b-row>

        <b-row v-if="data.type == 'textInput'" class="justify-content-center">
          <textInput :title="data.title" :desc="data.desc" />
        </b-row>

        <b-row v-if="data.type == 'radioInput'" class="justify-content-center">
          <radioInput :title="data.title" :desc="data.desc" :myOptions="data.testdata " />
        </b-row>

        <b-row v-if="data.type == 'selectionInput'" class="justify-content-center">
          <selectionInput :title="data.title" :desc="data.desc" :myOptions="data.testdata " />
        </b-row>

        <b-row v-if="data.type == 'smallImg'" class="justify-content-center">
          <smallImg :srcLink="data.link" />
        </b-row>

        <b-row v-if="data.type == 'bigImage'" class="justify-content-center">
          <bigImage :srcLink="data.link" />
        </b-row>

        <b-row v-if="data.type == 'iflameSlider'" class="justify-content-center">
          <iflameSlider :iframeLink="data.link" />
        </b-row>
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
  props:{ComponentData:{type:Array}},
  layout: "admin",
  data() {
    return {
    };
  },


   computed: {
    pathSp() {
      let pathArray = this.$route.path.split("/");
      pathArray.shift();
      return pathArray;
    },
    getID() {
      return this.$route.params.id;
    },
    post: function() {
      return this.posts.find(post => post.id === this.$route.params.id);
    }
  },

  
};


</script>