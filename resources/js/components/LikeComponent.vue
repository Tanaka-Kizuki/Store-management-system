<template>
 <div class="like_button">
  <button v-if="status == false" type="button" @click.prevent="like_check" class="btn btn-outline-warning">&#9825;</button><a v-if="status == false" v-bind:href="link">{{count}}</a>
  <button v-else type="button" @click.prevent="like_check" class="btn btn-warning">&#9829;</button><a v-if="status == true" v-bind:href="link">{{count}}</a>
 </div>
</template>

<script>
export default {
 props: ['post_id'],      
 data() {
   return {
     status: false,
     count: 0,
     link: ''
   }
 },
 created() {
   this.first_check()
 },
 methods: {
   first_check() {
     const id = this.post_id
     const array = ["/posts/",id,"/firstcheck"];
     const path = array.join('')
     const linkurl = ["/posts/",id,"/like"];
     const link = linkurl.join('')
     axios.get(path).then(res => {
       if(res.data[0] == 1) {
         this.status = true
         this.count = res.data[1]
         this.link = link
         console.log(link)
       } else {
         console.log(res)
         this.status = false
         this.count = res.data[1]
         this.link = link
       }
     }).catch(function(err) {
       console.log(err)
     })
   },
   like_check() {
     const id = this.post_id
     const array = ["/posts/",id,"/check"];
     const path = array.join('')
     axios.get(path).then(res => {
       if(res.data[0] == 1) {
         this.status = true
         this.count = res.data[1]
       } else {
         this.status = false
         this.count = res.data[1]
       }
     }).catch(function(err) {
       console.log(err)
     })
   },
 }
}
</script>
