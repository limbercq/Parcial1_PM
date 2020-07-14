<template>

    <div class="container">
        <h1>Registro de personas</h1>
        <div class="row justify-content-center">    
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom01">Nombre y apellido</label>
                        <input type="text" class="form-control" id="validationCustom01" v-model="nombre" required>
                        <div class="valid-feedback">
                            Ingrese el nombre 
                        </div>
                    </div>                    
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Carnet</label>
                        <input type="number" class="form-control" id="validationCustom01" v-model="ci" required>
                        <div class="valid-feedback">
                            Ingrese el carnet
                        </div>                        
                    </div>      
                
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Residencia</label>
                        <input type="text" class="form-control" id="validationCustom01" v-model="residencia" required>
                        <div class="valid-feedback">
                            Ingrese su residencia
                        </div>                        
                    </div>       
                    
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">F. Nacimiento</label>
                        <input type="date" class="form-control" id="validationCustom01" v-model="f_naci" required>
                        <div class="valid-feedback">
                            Ingrese la fecha de Nacimiento 
                        </div>                        
                    </div>           
                </div>
                <button class="btn btn-primary" @click="registrar()" type="submit">Registrar</button>
            </form>


        </div>
    </div>

</template>
<script>
    export default {
        data(){
            return{
                nombre : "",
                ci : "",
                f_naci : "",
                residencia :""
            } 
        },
        methods :{
            registrar(){
                let me=this;
                axios.post('/registrar',{
                    'nombre' : this.nombre,
                    'ci' : this.ci,
                    'f_naci' : this.f_naci,
                    'residencia' : this.residencia,
                }).then(function (response) { 
                    me.limpiar();                                     
                })
                .catch(function (error) {
                    // console.log(error);
                });
            },
            limpiar(){
                this.nombre = "";
                this.ci = "";
                this.f_naci = "";
                this.residencia = "";
            }
        },
        mounted() {
           this.limpiar();
           
        }
    }
</script>