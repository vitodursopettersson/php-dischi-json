const { createApp } = Vue;

createApp({
    data() {
        return {
            songs: []
        }
    },
    methods: {
        getSongs() {
            axios.get('song.php').then((response) => {
                console.log(response.data);
                this.songs = response.data;
            })
        }
    },
    created() {
        this.getSongs();
    }
}).mount('#app');