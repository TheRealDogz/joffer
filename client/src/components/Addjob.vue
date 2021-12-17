<template>
  <div class="flex">
      <div class="flex flex-col h-full w-1/4 justify-center">
            <label for="title" class="mb-2">Linguaggio</label>
            <input class="rounded px-3 w-full py-1 outline-none" type="text" id="ling" placeholder="linguaggio" v-model="job.ling">
            <label for="title" class="mb-2 mt-3">Azienda</label>
            <input class="rounded px-3 w-full py-1 outline-none" type="text" id="azi" placeholder="azienda" v-model="job.azienda">
            <label for="title" class="mb-2 mt-3">RAL</label>
            <input class="rounded px-3 w-full py-1 outline-none" type="integer" id="ral" placeholder="RAL" v-model="job.ral">
            <label for="title" class="mb-2 mt-3 outline-none">Esperienza richiesta</label>
            <input class="rounded px-3 w-full pt-1 py-1 outline-none" name="descrizione" id="exp" placeholder="esperienza" v-model="job.exp">
            <label for="title" class="mb-2">Location</label>
            <input class="rounded px-3 w-full py-1 outline-none" type="text" id="loc" placeholder="Location" v-model="job.loc">
            <label for="title" class="mb-2">Descrizione</label>
            <textarea class="rounded px-3 w-full pt-1 py-1 outline-none" name="descrizione" id="descrizione" cols="30" rows="10" placeholder="Descrizione" v-model="job.des"></textarea>
        </div>
        <div>
            <button class="rounded-lg py-1 px-4" 
                @click="addJob()"
                :disabled="this.job.ling == '' 
                           || this.job.azienda == ''
                           || this.job.ral == ''
                           || this.job.exp == ''
                           || this.job.loc == ''
                           || this.job.des == ''
                              "
                >
            </button>
        </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
    name: "addJob",
    data(){
        return{
            job: {
                linguaggio: "",
                azienda: "",
                RAL: "",
                esperienza: "",
                descrizione:""
            }
        }
    },
    methods: {
        async addJob() {
            await axios.post("http://localhost:8000/api/movies/create", this.job)   
            this.$router.push("/home")
        }
    }
}

</script>
