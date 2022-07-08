<template>
    <div>
        <div class="container">
            <b-card-group deck>
                <b-card
                    border-variant="primary"
                    header="Primary"
                    header-bg-variant="primary"
                    header-text-variant="white"
                    align="center"
                >
                    <b-card-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</b-card-text>
                </b-card>

                <b-card
                    border-variant="secondary"
                    header="Secondary"
                    header-border-variant="secondary"
                    align="center"
                >
                    <b-card-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</b-card-text>
                </b-card>

                <b-card border-variant="success" header="Success" align="center">
                    <b-card-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</b-card-text>
                </b-card>
                </b-card-group>
            </div>
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