<template>
    <div class="container">
        <h1>Lista de Personas</h1>
        <div class="row justify-content-center">            
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm table-hover">                    
                    <thead>
                        <tr class="text-center"> 
                            <th>#</th>                           
                            <th>Nombre y apellidos</th>
                            <th>Carnet</th>
                            <th>F. Nacimiento</th>
                            <th>Residencia</th>
                            <th>Clave</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(persona ,index) in arrayPersona" :key="persona.ci" class="text-center"> 
                        <td v-text="index+1"></td>
                        <td v-text="persona.nombre"></td>
                        <td v-text="persona.ci"></td>
                        <td v-text="persona.f_naci"></td>
                        <td v-text="persona.residencia"></td>
                        <td v-text="persona.ci"></td>
                        </tr>                                
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                arrayPersona :[]
            } 
        },
        methods :{
            listarPersona (){
                let me=this;
                me.update = true;
                var url= '/personas';
                axios.get(url).then(function (response) {
                    // var respuesta= response.data;                    
                    me.arrayPersona = response.data;                    
                    
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