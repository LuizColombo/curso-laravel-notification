<template>
    <li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Notificações ({{ notifications.length }})
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

        <a class="dropdown-item" href="#" v-for="notification in notifications" :key="notification.id">
            <span @click.prevent="markAsRead(notification.id)">Lida</span>
            {{ notification.data.comment.user.name }} comentou: {{notification.data.comment.title}}
        </a>

        <a class="dropdown-item" href="#" @click.prevent="markAllAsRead">
            Marcar todas como lidas
        </a>
    </div>
    </li>
</template>

<script>

export default {
    created() {
        //this.loadNotifications();
        this.$store.dispatch('loadNotifications');
    },

    computed: {
        notifications(){
            return this.$store.state.notifications.items
        }
    },  

    methods: {
        markAsRead(idNotification){
            this.$store.dispatch('markAsRead', {id: idNotification});
        },
        markAllAsRead(){
            this.$store.dispatch('markAllAsRead');
        }
    }
};
</script>