<template>
    <div class="container">
        <h1>Nro de aporbados por Departamentos</h1>
        <div class="row justify-content-center">            
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm table-hover">                    
                    <thead>
                        <tr class="text-center"> 
                            <th>#</th>                           
                            <th>Nro de aprobados</th>
                            <th>Departamento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(nota ,index) in arrayNota" :key="index" class="text-center"> 
                        <td v-text="index+1"></td>
                        <td v-text="nota.nro_aprobado"></td>
                        <td v-text="nota.depto"></td>
                        </tr>                                
                    </tbody>
                </table>
                
                <h1>Notas</h1>
                <table class="table table-bordered table-striped table-sm table-hover">                    
                    <thead>
                        <tr class="text-center"> 
                            <th>#</th>                           
                            <th>Nombre y apellidos</th>
                            <th>Carnet</th>
                            <th>Nota Final</th>
                            <th>Materia</th>
                            <th>Residencia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(persona ,index) in arrayPersona" :key="persona.ci" class="text-center"> 
                        <td v-text="index+1"></td>
                        <td v-text="persona.nombre"></td>
                        <td v-text="persona.ci"></td>
                        <td v-if="persona.nota_final > 50" v-text="persona.nota_final" class="text-success"></td>
                        <td v-else v-text="persona.nota_final" class="text-danger"></td>
                        <td v-text="persona.materia"></td>
                        <td v-text="persona.depto"></td>
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
                arrayPersona :[],
                arrayNota : []
            } 
        },
        methods :{
            listarPersona (){
                let me=this;
                me.update = true;
                var url= '/notas';
                axios.get(url).then(function (response) {
                    var respuesta= response.data;                   
                    me.arrayPersona = respuesta.personas;   
                    me.arrayNota = respuesta.notas;                                                            
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