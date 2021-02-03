new Vue({
    el: '#app',
    data: {
        dataBase: 'database\db.php',
        albumList: null
    },
    mounted() {
        axios
            .get(this.dataBase)
            .then(response => {
                this.albumList = response.data.response;
                console.log(this.albumList);
            })
        }
    }
)