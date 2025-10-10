<template>
    <li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Notificações
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

        <a class="dropdown-item" href="#" v-for="notification in notifications" :key="notification">
            {{notifications}}
        </a>
        <a class="dropdown-item" href="#">
            Limpar Notificações
        </a>
    </div>
    </li>
</template>

<script>
export default {
    computed: {
        notifications(){
            return [1,2,3,4,5];
        }
    },
};
</script>