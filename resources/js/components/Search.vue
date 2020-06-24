<template>
<div>
    <li class="d-none d-sm-block">
        <form class="app-search">
            <div class="app-search-box">
                <div class="input-group">
                    <input type="text" class="form-control" v-model="search_input" placeholder="Search...">
                    <div class="input-group-append">
                        <button class="btn" type="submit">
                            <i class="fe-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </li>
    <div id="ressult">
        <ul>
            <li><a href="">Harare Cases</a></li>
        </ul>
    </div>
</div>
</template>

<script>
    export default {
        data() {
            return
        }
    }
</script>
