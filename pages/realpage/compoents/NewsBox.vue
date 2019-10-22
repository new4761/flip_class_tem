<template>
  <b-card class="cardradius" no-body>
    <v-tabs :hide-slider="true" :show-arrows="true" fixed-tabs class="my-0 p-2">
      <v-tab
        class="cardradius p-"
        active-class="bg-primary text-white "
        v-for="(item,index) in newsBoxData"
        :key="index"
      >
        <h6 class="py-2">{{item.boxName}}</h6>
      </v-tab>

      <v-tab-item v-for="(item,index) in newsBoxData" :key="index" class="px-3 pt-4">
        <b-list-group flush>
          <b-list-group-item v-for="(subItem,subIndex) in item.boxData" :key="subIndex">
            <UpdateMedia :MediaData="subItem" />
          </b-list-group-item>
        </b-list-group>
        <div class="mt-3">
          <b-button block pill variant="warning">ดูประกาศทั้งหมด</b-button>
        </div>
      </v-tab-item>
    </v-tabs>
  </b-card>
</template>
<script>
import AvatarRef from "~/components/AvatarRef";
import UpdateMedia from "~/components/UpdateMedia";
export default {
  components: {
    AvatarRef,
    UpdateMedia
  },

  data: () => ({
    rows: 10,
    perPage: 3,
    currentPage: 1,
    newsBoxData: [
      {
        boxName: "ประกาศสำคัญ",
        boxData: [
          {
            id: 1,
            type: { variant: "warning", name: "ประเภท" },
            title: "ชื่อหัวข้อข่าว",
            upTime: "14/7/2542 10:24",
            CreaterData: {
              src: "https://placekitten.com/380/200",
              name: "GodNewInwZa"
            },
            smallDes:
              " Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc acnisi vulputate fringilla. Donec lacinia congue felis in faucibus.",
            viewCount: 3000
          },
          {
            id: 2,
            type: { variant: "warning", name: "ประเภท" },
            title: "ชื่อหัวข้อข่าว",
            upTime: "14/7/2542 10:24",
            CreaterData: {
              src: "https://placekitten.com/380/200",
              name: "GodNewInwZa"
            },
            smallDes:
              " Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc acnisi vulputate fringilla. Donec lacinia congue felis in faucibus.",
            viewCount: 3000
          },
          {
            id: 3,
            type: { variant: "warning", name: "ประเภท" },
            title: "ชื่อหัวข้อข่าว",
            upTime: "14/7/2542 10:24",
            CreaterData: {
              src: "https://placekitten.com/380/200",
              name: "GodNewInwZa"
            },
            smallDes:
              " Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc acnisi vulputate fringilla. Donec lacinia congue felis in faucibus.",
            viewCount: 3000
          },
          {
            id: 4,
            type: { variant: "warning", name: "ประเภท" },
            title: "ชื่อหัวข้อข่าว",
            upTime: "14/7/2542 10:24",
            CreaterData: {
              src: "https://placekitten.com/380/200",
              name: "GodNewInwZa"
            },
            smallDes:
              " Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc acnisi vulputate fringilla. Donec lacinia congue felis in faucibus.",
            viewCount: 3000
          }
        ]
      },
      {
        boxName: "เเหล่งการเรียนรู้ภายนอก",

        boxData: [
          {
            id: 1,
            type: { variant: "warning", name: "ประเภท" },
            title: "ชื่อหัวข้อข่าว",
            upTime: "14/7/2542 10:24",
            CreaterData: {
              src: "https://placekitten.com/380/200",
              name: "GodNewInwZa"
            },
            smallDes:
              " Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc acnisi vulputate fringilla. Donec lacinia congue felis in faucibus.",
            viewCount: 3000
          }
        ]
      },
      {
        boxName: "เเหล่งการเรียนรู้ภายนอก",
        boxData: [
          {
            id: 1,
            type: { variant: "warning", name: "ประเภท" },
            title: "ชื่อหัวข้อข่าว",
            upTime: "14/7/2542 10:24",
            CreaterData: {
              src: "https://placekitten.com/380/200",
              name: "GodNewInwZa"
            },
            smallDes:
              " Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc acnisi vulputate fringilla. Donec lacinia congue felis in faucibus.",
            viewCount: 3000
          }
        ]
      }
    ],
    testData: {
      cardCreaterData: {
        src: "https://placekitten.com/380/200",
        name: "GodNewInwZa"
      }
    }
  })
};
</script>