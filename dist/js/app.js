new Vue({
    el: '#app',
    data: {
        dataBase: 'database/db_api.php',
        albumList: null
    },
    mounted() {
        axios
            .get(this.dataBase)
            .then(response => {
            this.albumList = response.data;
                console.log(response);

                //console.log(this.albumList);
            })
            .catch(error => {
                console.log('ERROR', error);
            })
        }
    }
)