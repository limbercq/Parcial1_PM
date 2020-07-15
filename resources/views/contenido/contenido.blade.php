    <template v-if="menu == 0">        
        <perfil></perfil>
    </template>

    <template v-if="menu == 1">
        <lista></lista>
    </template>

    <template v-if="menu == 2">        
        <Registro></Registro>
    </template>

    <template v-if="menu == 3">
        <Nota></Nota>
    </template>
