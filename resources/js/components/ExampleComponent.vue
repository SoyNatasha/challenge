<template>
    <div>
        <div class="container">
            <b-form inline>
                <label class="sr-only" for="inline-form-input-corigen">Ciudad de Origen</label>
                <b-form-input
                id="inline-form-input-corigen"
                class="mb-2 mr-sm-2 mb-sm-0"
                placeholder="Quito"
                ></b-form-input>

                <label class="sr-only" for="inline-form-input-cdestino">Ciudad de Destino</label>
                <b-form-input
                id="inline-form-input-cdestino"
                class="mb-2 mr-sm-2 mb-sm-0"
                placeholder="Guayaquil"
                ></b-form-input>

                <label for="example-datepicker">Fecha de Salida</label>
                <b-form-datepicker id="example-datepicker" v-model="value" class="mb-2"></b-form-datepicker>
                
                <label for="example-datepicker">Fecha de Retorno</label>
                <b-form-datepicker id="example-datepicker" v-model="value" class="mb-2"></b-form-datepicker>

                <b-link to="/resultados" variant="primary">Buscar</b-link>
            </b-form>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
