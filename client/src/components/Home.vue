<template>
  <div class="flex flex-row p-10 bg-gray-400 h-screen">
      <div class="grid grid-cols-4 gap-10 w-screen">
        <div class="flex flex-col w-60 h-96 bg-yellow-500" v-for="job in jobs" :key="job.id">
          <div class="flex flex-row bg-yellow-500 p-2"><p>{{job.azienda}}</p></div>
          <br>
          <div class="flex flex-row bg-yellow-500 p-2"><p>{{job.descrizione}}</p></div>
          <br>
          <div class="flex flex-row bg-yellow-500 p-2"><p>{{job.esperienza}}</p></div>
          <br>
          <div class="flex flex-row bg-yellow-500 p-2"><p>{{job.linguaggio}}</p></div>
          <br>
          <div class="flex flex-row bg-yellow-500 p-2"><p>{{job.RAL}}</p></div>
          <br>
        </div>
      </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
    name: 'Home',

    data(){
      return{    
          jobs: [],
      }
    },

    async mounted(){
      this.jobs = (await axios.get('http://127.0.0.1:8000/api/jobs')).data
    },
    methods: {
        async addJob(){
            await axios.post("http://localhost:8000/api/addjob", this.job)
            this.$router.push("/home")
        }
    }
}
</script>
