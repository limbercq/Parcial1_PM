<template>
    <section class="">
      <div class="jumbotron ">
      </div>
      <div class="container">
      <div class="row justify-content-center Perfilcont">
          
          <div class="col-11 col-sm-6 contPerfil ">
              <h1 >Usuario</h1>
              <h3 class="text-center" v-text="persona.nombre"></h3>
              <div class="materiasPerf pt-2">
                  <div class="input-group pt-1">
                      <p class="card-text mb-0 text-danger">C.I</p>
                      <p class="card-text ml-1" v-text="persona.ci"></p>
                  </div>
                  <div class="input-group pt-1">
                      <p class="card-text mb-0 text-danger">Fecha de nacimiento</p>
                      <p class="card-text ml-1" v-text="persona.f_naci"></p>
                  </div>  
                  <div class="input-group pt-1">
                      <p class="card-text mb-0 text-danger">Residencia</p>
                      <p class="card-text ml-1" v-text="persona.residencia"></p>
                  </div>
                <label>Elegir un color</label>
                <input type="color" v-model="color" name="color"> 
                <button type="submit" @click="cambiarColor(persona.ci)" class="btn btn-outline-secundari btn-sm">cambiar color</button>                   
              </div>    
          </div>
          <div class="col-4 col-sm-6 col-lg-4 perfilImg ">
              <img class="img-fluid p-0 m-0 imgPerfil " src="img/persona1.jpg" alt="">               
          </div>
      </div>
      </div>
  </section>
</template>

<script>
    export default {
        data(){
            return{
                persona :[],
                color : ""
            } 
        },
        methods :{
            listarPersona (){
                let me=this;
                var url= '/usuraio';
                axios.get(url).then(function (response) {
                    me.persona = response.data;      
                    me.color = me.persona.color;                                  
                })
                .catch(function (error) {
                    // console.log(error);
                });
            },
            cambiarColor(id){
                let me=this;
                axios.put('/usuraiocolor',{
                    'ci':id,
                    'color':this.color
                }).then(function (response) { 
                    location.reload()                                     
                })
                .catch(function (error) {
                    // console.log(error);
                });
                
            }
        },
        mounted() {
           this.listarPersona();
           
        }
    }
</script>
