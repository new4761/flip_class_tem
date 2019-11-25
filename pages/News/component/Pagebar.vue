<template>
        <div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                    <li v-for="(data,idx) in PageBarData" :key="idx" class="page-item"><a class="page-link" href="#"> {{idx+1}}</a></li>
                    <li class="page-item">
                    <a class="page-link" href="data.link">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
     props:['PageBarData'],
        data:()=>({
    })
}

</script>