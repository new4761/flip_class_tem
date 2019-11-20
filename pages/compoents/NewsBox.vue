<template>

  <b-card class="cardradius overflow-auto"  style="max-height:350px; border-width:0px;">

        <div  v-for="(subItem,subIndex) in boxData" :key="subIndex" >
          <UpdateMedia class="mb-4 mx-4" :MediaData="subItem" />
             <!-- <v-divider class="mx-5"></v-divider> -->
        </div>
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

    // rows: 10,
    // perPage: 3,
    // currentPage: 1,
    boxData: [
      {
        id: 1,
        type: { variant: "warning", name: "ประเภท" },
        title: "ชื่อหัวข้อข่าวasdasdasdkasl;dojqwoejp",
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
      ,  {
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
    ],

    // newsBoxData: [
    //   {

    //     boxData: [
    //       {
    //         id: 1,
    //         type: { variant: "warning", name: "ประเภท" },
    //         title: "ชื่อหัวข้อข่าว",
    //         upTime: "14/7/2542 10:24",
    //         CreaterData: {
    //           src: "https://placekitten.com/380/200",
    //           name: "GodNewInwZa"
    //         },
    //         smallDes:
    //           " Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc acnisi vulputate fringilla. Donec lacinia congue felis in faucibus.",
    //         viewCount: 3000
    //       },
    //       {
    //         id: 2,
    //         type: { variant: "warning", name: "ประเภท" },
    //         title: "ชื่อหัวข้อข่าว",
    //         upTime: "14/7/2542 10:24",
    //         CreaterData: {
    //           src: "https://placekitten.com/380/200",
    //           name: "GodNewInwZa"
    //         },
    //         smallDes:
    //           " Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc acnisi vulputate fringilla. Donec lacinia congue felis in faucibus.",
    //         viewCount: 3000
    //       },
    //       {
    //         id: 3,
    //         type: { variant: "warning", name: "ประเภท" },
    //         title: "ชื่อหัวข้อข่าว",
    //         upTime: "14/7/2542 10:24",
    //         CreaterData: {
    //           src: "https://placekitten.com/380/200",
    //           name: "GodNewInwZa"
    //         },
    //         smallDes:
    //           " Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc acnisi vulputate fringilla. Donec lacinia congue felis in faucibus.",
    //         viewCount: 3000
    //       },
    //       {
    //         id: 4,
    //         type: { variant: "warning", name: "ประเภท" },
    //         title: "ชื่อหัวข้อข่าว",
    //         upTime: "14/7/2542 10:24",
    //         CreaterData: {
    //           src: "https://placekitten.com/380/200",
    //           name: "GodNewInwZa"
    //         },
    //         smallDes:
    //           " Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc acnisi vulputate fringilla. Donec lacinia congue felis in faucibus.",
    //         viewCount: 3000
    //       }
    //     ]
    //   },
    //   {
    //     boxName: "เเหล่งการเรียนรู้ภายนอก",

    //     boxData: [
    //       {
    //         id: 1,
    //         type: { variant: "warning", name: "ประเภท" },
    //         title: "ชื่อหัวข้อข่าว",
    //         upTime: "14/7/2542 10:24",
    //         CreaterData: {
    //           src: "https://placekitten.com/380/200",
    //           name: "GodNewInwZa"
    //         },
    //         smallDes:
    //           " Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc acnisi vulputate fringilla. Donec lacinia congue felis in faucibus.",
    //         viewCount: 3000
    //       }
    //     ]
    //   },
    //   {
    //     boxName: "เเหล่งการเรียนรู้ภายนอก",
    //     boxData: [
    //       {
    //         id: 1,
    //         type: { variant: "warning", name: "ประเภท" },
    //         title: "ชื่อหัวข้อข่าว",
    //         upTime: "14/7/2542 10:24",
    //         CreaterData: {
    //           src: "https://placekitten.com/380/200",
    //           name: "GodNewInwZa"
    //         },
    //         smallDes:
    //           " Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc acnisi vulputate fringilla. Donec lacinia congue felis in faucibus.",
    //         viewCount: 3000
    //       }
    //     ]
    //   }
    // ],
    testData: {
      cardCreaterData: {
        src: "https://placekitten.com/380/200",
        name: "GodNewInwZa"
      }
    }
  })
};
</script>