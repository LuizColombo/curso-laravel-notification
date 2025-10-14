<template>
    <li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Notificações ({{ notifications.length }})
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

        <a class="dropdown-item" href="#" v-for="notification in notifications" :key="notification.id">
            {{ notification.data.comment.user.name }} comentou: {{notification.data.comment.title}}
        </a>

        <a class="dropdown-item" href="#">
            Limpar Notificações
        </a>
    </div>
    </li>
</template>

<script>
import axios from 'axios';

export default {
    created() {
        this.loadNotifications();
    },

    computed: {
        notifications(){
            return this.notificationsItems
        }
    },

    data (){
        return {
            notificationsItems: []
        }
    },    

    methods: {
        loadNotifications(){
            axios.get('/notifications')
                .then(response => 
                    // console.log(response.data.notifications);
                    this.notificationsItems = response.data.notifications
                )
                .catch(error => {
                    console.error('Erro ao carregar notificações:', error);
                });
        }
    }
};
</script>