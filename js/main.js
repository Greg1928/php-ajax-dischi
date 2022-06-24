const app = new Vue({
    el: '#app',
    data: {
        disks: [],
    },
    created() {
        axios.get('http://localhost:80/php-ajax-dischi/api.php')
        .then((response) => {
            this.disks = response.data;
        })
        .catch((error) => {
            console.log(error);
        });
    },
})
