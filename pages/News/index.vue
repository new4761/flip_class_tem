<template>
<div class="background bgtop">
<b class ="p-5">

    <b-row class = "pl-5 ml-5">
        <h1><strong>ประกาศ</strong></h1>
    </b-row>

    <b-row class = "pt-4 px-5 justify-content-center"> 
        <Notitag v-bind:TagData="TagData"/>
    </b-row>

   <b-row align-h="around" class = "pt-4 px-4" >
       
        <b-col cols="auto" class = "d-flex">
            <Sortdropdown v-bind:SortData="SortData"/>
        </b-col>
        
        <b-col cols="auto" class = "d-flex">  
            <div class="input-group ml-auto">
                <input type="text" class="form-control" placeholder="ค้นหา..." aria-label="ค้นหา...">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">
                            <i class="icon-magnifier"></i>
                        </button>
                    </span>
            </div>
        </b-col>        
    </b-row>
    
    <b-row  class = "justify-content-center">
        <b-col md="9" sm="7" class="px-4 bg-white cardradius">
    <Noticard v-bind:CardData="CardData"/> 
        
        <pagebar v-bind:PageBarData="PageBarData"/>

        </b-col>
    </b-row>
    
    

           
</b>
</div>

</template>

<script>
import Noticard from "./component/Noticard.vue";
import Notitag from "./component/Notitag.vue";
import Pagebar from "./component/Pagebar.vue";
import Sortdropdown from "./component/Sortdropdown.vue";

export default {
    components: {
        Noticard,
        Notitag,
        Pagebar,
        Sortdropdown
  },
  
  data(){
      return{
    CardData:[
    {tagtype:"warning",
     tagname:"tag",
     imgsrc:"https://i.imgur.com/o3LF5o5.jpg?1",
     header:"ประกาศที่ 1",
     time:"9:00",
     date:"20/11/19",
     username:"username",
     content:"แล้วสอนว่าอย่าไว้ใจมนุษย์ มันแสนสุดลึกล้ำเหลือกำหนด ถึงเถาวัลย์พันเกี่ยวที่เลี้ยวลด ก็ไม่คดเหมือนหนึ่งในน้ำใจคน",
     link:"news/1"
     },

    {tagtype:"success",
     tagname:"tag",
     imgsrc:"https://i.imgur.com/ANGVYVG.jpg?1",
     header:"ประกาศที่ 2",
     time:"21:00",
     date:"15/11/19",
     username:"username",
     content:"อันความคิดวิทยาเหมือนอาวุธ ประเสริฐสุดซ่อนใส่เสียในฝัก สงวนคมสมนึกใครฮึกฮัก จึงค่อยชักเชือดฟันให้บรรลัย",
     link:"#"
     },

    {tagtype:"success",
     tagname:"tag",
     imgsrc:"https://i.imgur.com/QmaCxKV.jpg?1",
     header:"ประกาศที่ 3",
     time:"13:50",
     date:"12/11/19",
     username:"username",
     content:"อันนินทากาเลเหมือนเทน้ำ ไม่ชอกช้ำเหมือนเอามีดมากรีดหิน แม้องค์พระปฏิมายังราคิน คนเดินหรือจะสิ้นคนนินทา",
     link:"#"
     },

    {tagtype:"danger",
     tagname:"tag",
     imgsrc:"https://i.imgur.com/QdKfkU4.jpg?1",
     header:"ประกาศที่ 4",
     time:"17:25",
     date:"11/11/19",
     username:"username",
     content:"เป็นมนุษย์สุดนิยมเพียงลมปาก จะได้ยากโหยหิวเพราะชิวหา แม้นพูดดีมีคนเขาเมตตา จะพูดจาพิเคราะห์ให้เหมาะความ",
     link:"#"
     },

    {tagtype:"warning",
     tagname:"tag",
     imgsrc:"https://i.imgur.com/RLvtcYE.jpg?1",
     header:"ประกาศที่ 5",
     time:"11:11",
     date:"10/11/19",
     username:"username",
     content:"พระโหยหวนครวญเพลงวังเวงจิต ให้คนคิดถึงถิ่นถวิลหวัง ว่าจากเรือนเหมือนนกมาจากรัง อยู่ข้างหลังก็จะแลชะแง้คอย",
     link:"#"
     },

    {tagtype:"warning",
     tagname:"tag",
     imgsrc:"https://i.imgur.com/6O2tKQZ.jpg?1",
     header:"ประกาศที่ 6",
     time:"10:30",
     date:"10/11/19",
     username:"username",
     content:"ถึงม้วยดินสิ้นฟ้ามหาสมุทร ไม่สิ้นสุดความรักสมัครสมาน แม้อยู่ในใต้หล้าสุธาธาร ขอพบพานพิสวาทมิคลาดคลา แม้เนื้อเย็นเป็นห้วงมหรรณพ",
     link:"#"
     },

    {tagtype:"danger",
     tagname:"tag",
     imgsrc:"https://i.imgur.com/VsjYWPn.jpg",
     header:"ประกาศที่ 7",
     time:"11:30",
     date:"9/11/19",
     username:"username",
     content:"จะหักอื่น ขืนหัก ก็จักได้ หักอาลัย นี้ไม่หลุด สุดจะหัก สารพัด ตัดขาด ประหลาดนัก แต่ตัดรัก นี้ไม่ขาด ประหลาดใจ",
     link:"#"
     },

    {tagtype:"danger",
     tagname:"tag",
     imgsrc:"https://i.imgur.com/Buxhv2M.jpg?1",
     header:"ประกาศที่ 8",
     time:"10:30",
     date:"9/11/19",
     username:"username",
     content:"ถึงบางพูดพูดดีเป็นศรีศักดิ์ มีคนรักรสถ้อยอร่อยจิต แม้พูดชั่วตัวตายทำลายมิตร จะชอบผิดในมนุษย์เพราะพูดจา",
     link:"#"
     },



     


     



    ],

    TagData:[
    {  name:"tag1",type:"success"},
    {  name:"tag2",type:"danger"},
    {  name:"tag3",type:"warning"}
    ],

    SortData:[
    {  sorting:"ประเภท1",icon:"fa fa-sort-alpha-asc"},
    {  sorting:"ประเภท2", icon:"fa fa-sort-amount-asc"},
    {  sorting:"ประเภท3",icon:"fa fa-sort-numeric-asc"},
    ],

    PageBarData:[
    {  link:"#" },
    {  link:"#" },
    {  link:"#" }
    ]

    }
  },
  methods:{
      sortby(prop){
      this.CardData.sort((a,b) => a[prop] < b[prop] ? -1 : 1)
      }
  }
  
}

</script>


<style >


</style>