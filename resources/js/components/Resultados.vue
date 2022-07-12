<template>
    <div>
        <div class="container">
            <b-card-group deck>
                <b-card
                    border-variant="primary"
                    header="Vuelo 1"
                    header-bg-variant="primary"
                    header-text-variant="white"
                    align="center"
                >
                    <b-card-text>{{ data }}</b-card-text>
                </b-card>

                <b-card
                    border-variant="secondary"
                    header="Vuelo 2"
                    header-border-variant="secondary"
                    align="center"
                >
                    <b-card-text>{{ data }}</b-card-text>
                </b-card>

                <b-card border-variant="success" header="Vuelo 3" align="center">
                    <b-card-text>{{ data }}</b-card-text>
                </b-card>
                </b-card-group>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name:'app',
        computed: {
            data() {
                return 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            }
        }
    }
</script>