<template>
    <div>
        
    </div>
</template>
<script>
export default {


    props:{
        slides: {
            type: Array,
            required: true,
            default: () => [],
        },

        public_path: {
            type: String,
            required: true,
        }
    },

    data() {

        return {
            images: [],
            currentIndex: -1,
            content: [],
            current: false,
            images_loaded: false,

        };
    },

    mounted() {

    },

    methods: {

     

     
    }
};
</script>

  