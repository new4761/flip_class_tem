<template>
  <div>
    <div class="bg-dark text-white py-2 px-5">
      <h3>{{path}}</h3>
    </div>

    <b-container fluid class="app bgtop">
      <div class="p-md-5 mx-md-5 p-sm-3 justify-content-center bg-white">
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

          <b-row v-if="data.type == 'bigImage'" class="justify-content-center">
            <bigImage :srcLink="data.link" />
          </b-row>
        </b-row>
      </div>
    </b-container>
  </div>
</template>

<script>
//externalData
import linkButton from "~/components/generateObj/extrenalData/linkbutton";
//image
import bigImage from "~/components/generateObj/image/bigImage";
//textContent
import textTitle from "~/components/generateObj/text/title";
import textContent from "~/components/generateObj/text/content";
//videp
import youtube from "~/components/generateObj/video/youtube";
export default {
  layout: "Lesson",
  components: {
    linkButton,
    bigImage,
    textTitle,
    textContent,
    youtube
  },
  layout: "default",

  computed: {
    path() {
      var str = this.$route.path;
      str = str.replace(/\//g, "  ");
      return str;
    }
  },
  data() {
    return {
      ComponentData: [
        {
          type: "textTitle",
          title: "Rickrolling is here"
        },

        {
          type: "bigImage",
          link:
            "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQuS0Ll4QdXamM5KlNFJrYMghvrj6QdUR86nqHFaQ62eDXgICus"
        },

        {
          type: "textContent",
          content:
            " Rick Roll redirects here. It is not to be confused with Richard Roll."
        },

        {
          type: "textContent",
          content:
            " Rickrolling, alternatively rick-rolling, is a prank and an Internet meme involving an unexpected appearance of the music video for the 1987 Rick Astley song Never Gonna Give You Up. The meme is a type of bait and switch using a disguised hyperlink that leads to the music video. The victims, believing that they are accessing some unrelated material, are said to have been rickrolled.[1] The trend has extended to disruptive or humorous appearances of the song in other situations, such as a live appearance of Astley himself in the 2008 Macy's Thanksgiving Day Parade in New York."
        },

        {
          type: "textContent",
          content:
            " Rick Astley's dance pop single [Never Gonna Give You Up] was originally released as part of his 1987 solo debut album Whenever You Need Somebody. Upon its initial release, the single became a number one hit on several international charts, including the Billboard Hot 100 and UK Singles Chart. YouTuber Erik Helwig claims to have prank called a Michigan radio station after a sports game and played [Never Gonna Give You Up] over the phone on August 31st, 2006. The story was explained in a YouTube video titled I Did the First Rickroll (w/ Proof) uploaded on August 7th, 2015 "
        },

        {
          type: "youtube",
          link: "https://www.youtube.com/embed/dQw4w9WgXcQ?controls=0"
        },

        {
          type: "linkButton",
          title: "get Rickrolled now",
          link: "https://www.youtube.com/watch?v=dQw4w9WgXcQ"
        }
      ]
    };
  }
};
</script>

<style>
.bgtop {
  background: url(https://i.imgur.com/HJMyKem.png) no-repeat;
  background-size: cover;
}
</style>