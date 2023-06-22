
function getData (data) {
    BX.Vue3.BitrixVue.createApp({
        data() {
            return {
                data: data,
                type: "GAZ",
                city: '',
            }
        },
        computed: {
            filteredList() {
                let comp = this.city;
                return this.data.ITEMS.filter(function (elem) {
                    if (comp === '') return true;
                    else return elem.NAME.toLowerCase().indexOf(comp) > -1;
                })
            }
        }
    }).mount('#delivery');
    
}



