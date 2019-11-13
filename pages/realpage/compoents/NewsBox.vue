<template>
  <b-card class="cardradius"  no-body style="border-style:none;">
    <b-tabs  justified pills >
      <b-tab title="ประกาศล่าสุด" active class="overflow-auto" style="height:36em; " >
        <b-list-group class=" overflow-auto" flush>
          <b-list-group-item v-for="(subItem,subIndex) in boxData" :key="subIndex" class="mx-1">
            <UpdateMedia :MediaData="subItem" />
          </b-list-group-item>
        </b-list-group>
      </b-tab>
      <b-tab title="Second">
        <p>I'm the second tab</p>
      </b-tab>
    </b-tabs>
    <!-- <h2 class="text-left m-3">ประกาศเเจ้งเตือน</h2> -->

    <!-- <b-button size="md" class="d-inline mt-auto" block variant="primary">ดูประกาศทั้งหมด</b-button> -->
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