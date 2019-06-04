/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueTippy from 'vue-tippy'

Vue.use(VueTippy)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('reservation-component', require('./components/ReservationCard.vue').default);
import VuePagination from './components/Pagination.vue';
import axios from 'axios';

axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
};

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



// const cars = new Vue({
//     el: '#app',
//     data: {
//         reservations: []
//     },
//     mounted() {
//     	axios.get("cars").then(response => {
//             console.log(response.data)
//             cars.reservations = response.data
//         }).catch(error => {
//             console.log(error)
//         });
//     }
// });

const app = new Vue({
    el: '#app',
    data: {
        reservations: {
            total: 0,
            per_page: 2,
            from: 1,
            to: 0,
            current_page: 1
        },
        offset: 4,
        cars: []
    },
    mounted() {
        this.getReservations();
        this.getCars();
    },
    components: {
        VuePagination,
    },
    methods: {
        getReservations() {
            axios.get(`/reservations?page=${this.reservations.current_page}`).then(response => {
                this.reservations = response.data;
            }).catch(error => {
                console.log(error);
            });
        },
        getCars() {
            axios.get("cars").then(response => {
                this.cars = response.data
            }).catch(error => {
                console.log(error);
            });
        },
        deleteCar(id) {
            // console.log(`/cars/${id}`)
            // return `/cars/${id}`;
            axios.delete(`/cars/${id}`).then(response => {
                // console.log(response);
                this.getCars()
            }).catch(error => {
                console.log(error);
            });
        },
        updateCar(id) {
            return `/cars/${id}/edit`;
        },
        getCarId(id) {
            return `reservation-${id}`;
        },
        getCarIdWithHashTag(id) {
            return `#reservation-${id}`;
        }
    }
});




