<template>
        <div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                    <li v-for="index in item " :key="index" class="page-item"><a class="page-link" href="#"> {{index}}</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
        data:()=>{
        return { item: 5 }
    }
}

</script>