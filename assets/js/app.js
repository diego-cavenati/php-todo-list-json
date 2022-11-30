const { createApp } = Vue;

createApp({
    data() {
        return {
            tasks: [],
            api_url: 'server.php',
        }
    },
    methods: {
        catchTasks(url) {
            axios
                .get(url)
                .then(response => {
                    this.tasks = response.data
                })
                .catch(err => {
                    console.log(err.message);
                })
        }
    },
    mounted() {
        this.catchTasks(this.api_url)
    }
}).mount('#app')