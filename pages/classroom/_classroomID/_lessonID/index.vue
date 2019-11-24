<template>
  <b-container style="background-color: white; " >
    <div  class="p-md-5 justify-content-center">

    <b-row v-for="(data,idx) in ComponentData" :key="idx">


      <b-row v-if="data.type == 'textTitle'"  class="justify-content-center">
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

      <b-row v-if="data.type == 'downLoadFile'"  class="justify-content-center">
        <downLoadFile :link="data.link" :buttonText="data.title" />
      </b-row>

        <b-row v-if="data.type == 'upLoadFile'" class="justify-content-center">
        <upLoadFile :fileName="data.title" :desc="data.desc" />
      </b-row>

      <b-row v-if="data.type == 'textArea'" class="justify-content-center">
        <textArea :title="data.title" :desc="data.desc" />
      </b-row>

      <b-row v-if="data.type == 'textInput'" class="justify-content-center">
        <textInput
          :title="data.title"
          :desc="data.desc"
        />
      </b-row>

      <b-row v-if="data.type == 'radioInput'" class="justify-content-center">
        <radioInput
          :title="data.title"
          :desc="data.desc"
          :myOptions="data.testdata "
        />
      </b-row>

      <b-row v-if="data.type == 'selectionInput'" class="justify-content-center">
        <selectionInput
          :title="data.title"
          :desc="data.desc"
          :myOptions="data.testdata "
        />
      </b-row>

      
      <b-row v-if="data.type == 'smallImg'" class="justify-content-center">
        <smallImg :srcLink="data.link" />
      </b-row>

      <b-row v-if="data.type == 'bigImage'" class="justify-content-center">
        <bigImage :srcLink="data.link" />
      </b-row>

      <b-row v-if="data.type == 'iflameSlider'" class="justify-content-center">
        <iflameSlider
          :iframeLink="data.link"
        />
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

      ComponentData:[
        {
          type:"textTitle",
          title:"Fermi paradox"
        },

        {
          type:"bigImage",
          link:"https://i.imgur.com/GIDPZtx.png"
        },

        {
          type:"textContent",
          content:"This article is about the absence of evidence for extraterrestrial intelligence. For a type of estimation problem, see Fermi problem. For the album by Tub Ring, see Fermi Paradox (album).Where is everybody redirects here. For the Twilight Zone episode, see Where Is Everybody? For the television production company, see Where's Everybody"
        },

        {
          type:"textContent",
          content:"The Fermi paradox, named after Italian-American physicist Enrico Fermi, is the apparent contradiction between the lack of evidence for extraterrestrial civilizations elsewhere in the Milky Way galaxy and various high estimates for their probability (such as those that result from optimistic parameters for the Drake equation)."
        },
                
        {
          type:"textContent",
          content:"The Fermi paradox is a conflict between the argument that scale and probability seem to favor intelligent life being common in the universe, and the total lack of evidence of intelligent life having ever arisen anywhere other than on the Earth. The first aspect of the Fermi paradox is a function of the scale or the large numbers involved: there are an estimated 200–400 billion stars in the Milky Way and 70 sextillion  in the observable universe. Even if intelligent life occurs on only a minuscule percentage of planets around these stars, there might still be a great number of extant civilizations, and if the percentage were high enough it would produce a significant number of extant civilizations in the Milky Way. This assumes the mediocrity principle, by which the Earth is a typical planet."
        },
                
        {
          type:"textContent",
          content:"The second aspect of the Fermi paradox is the argument of probability: given intelligent life's ability to overcome scarcity, and its tendency to colonize new habitats, it seems possible that at least some civilizations would be technologically advanced, seek out new resources in space, and colonize their own star system and, subsequently, surrounding star systems. Since there is no significant evidence on Earth, or elsewhere in the known universe, of other intelligent life after 13.8 billion years of the universe's history, there is a conflict requiring a resolution. Some examples of possible resolutions are that intelligent life is rarer than we think, that our assumptions about the general development or behavior of intelligent species are flawed, or, more radically, that our current scientific understanding of the nature of the universe itself is quite incomplete."
        },

        {
          type:"smallImg",
          link:"https://i.imgur.com/S7jHVCb.png"
        },
        

                
        {
          type:"textContent",
          content:"The Fermi paradox can be asked in two ways. The first is, 'Why are no aliens or their artifacts found here on Earth, or in the Solar System?' If interstellar travel is possible, even the 'slow' kind nearly within the reach of Earth technology, then it would only take from 5 million to 50 million years to colonize the galaxy.[17] This is relatively brief on a geological scale, let alone a cosmological one. Since there are many stars older than the Sun, and since intelligent life might have evolved earlier elsewhere, the question then becomes why the galaxy has not been colonized already. Even if colonization is impractical or undesirable to all alien civilizations, large-scale exploration of the galaxy could be possible by probes. These might leave detectable artifacts in the Solar System, such as old probes or evidence of mining activity, but none of these have been observed."
        },
        
        {
          type:"youtube",
          link:"https://www.youtube.com/embed/sNhhvQGsMEc"
        },

        {
          type:"linkButton",
          title:"this is linked button",
          link:"https://www.youtube.com/watch?v=dQw4w9WgXcQ"
        },
        {
          type:"downLoadFile",
          title:"this is download button",
          link:"https://www.youtube.com/watch?v=dQw4w9WgXcQ"
        },

        {
          type:"upLoadFile",
          title:"this is for upload",
          desc:"sample desc"
        },

        {
          type:"textArea",
          title:"this is text area",
          desc:"sample desc"
        },

        {
          type:"textInput",
          title:"this is text input",
          desc:"sample desc"
        },

        {
          type:"radioInput",
          title:"Question",
          desc:"question desc",
           testdata: [
                      { text: "First radioInput", value: "first" },
                      { text: "Second radioInput", value: "second" },
                      { text: "Third radioInput", value: "third" }
           ]
        },

        {
          type:"radioInput",
          title:"Question2",
          desc:"question desc",
           testdata: [
                      { text: "hi", value: "first" },
                      { text: "yo", value: "second" },
                      { text: "ok", value: "third" }
           ]
        },

        {
          type:"selectionInput",
          title:"Question2",
          desc:"question desc",
           testdata: [
                      { text: "hi", value: "first" },
                      { text: "yo", value: "second" },
                      { text: "ok", value: "third" }
           ]
        },

        {
          type:"iflameSlider",
          link:"https://docs.google.com/presentation/d/e/2PACX-1vSK4ZirU1tcdF2FOzRUnLO375H5eZAlZ3FA2SJlltXWlXcOo_Zh1NXcnC8vjzAzsnshh7DStbO6VRo0/embed?start=false&loop=false&delayms=3000"
        },

      ]
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