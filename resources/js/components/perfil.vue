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
                persona :[]
            } 
        },
        methods :{
            listarPersona (){
                let me=this;
                me.update = true;
                var url= '/usuraio';
                axios.get(url).then(function (response) {
                    // var respuesta= response.data;                    
                    me.persona = response.data;                    
                    
                })
                .catch(function (error) {
                    // console.log(error);
                });
            },
        },
        mounted() {
           this.listarPersona();
           
        }
    }
</script>
