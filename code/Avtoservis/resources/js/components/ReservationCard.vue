<template>
    <div>
        <div class="mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ res.title }}</h5>
                    <p class="card-text">{{ res.completed }}</p>

                    <a href="#" class="btn btn-primary btn-padding">Podrobnosti</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            // axios.get("https://jsonplaceholder.typicode.com/todos").then(response => {
      	    //     app.reservations = response.data
            // }).catch(error => console.log(error))
        }
    }
</script>
