<template>
   <div>
       <button v-bind:class="d1"  v-bind:style="styleData" @click="followUser" v-text="buttonText"></button>
   </div>
</template>

<script>
    export default {

        props: ['userId', 'follows', 'classData','msg'],


        mounted() {
            console.log('Component mounted.')
        },

        data: function () {
            return {
                style: {
                    color:'blue',
                    border:'none'
                },
                d1:this.classData,
                status: this.follows,
            }
        },

        methods: {
           followUser() {
               axios.post('/follow/'+ this.userId).then(response => {
                   this.status = ! this.status;
                   console.log(response.data);
               })
               .catch(errors => {
                  if (errors.response.status == 401) {
                      window.location = '/login';
                  }
               });
           }
        },

        computed: {

            buttonText() {
                return this.status ? 'unfollow' : 'Follow';
            },
            styleData( ){
                if (this.msg == 'post'){
                    return this.style;
                }
            }
        }

    }
</script>
