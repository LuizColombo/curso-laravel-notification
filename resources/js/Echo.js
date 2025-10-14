if (Laravel.user) {
    Echo.private(`App.Models.User.${Laravel.user}`).notification(
        (notification) => {
            console.log(notification);
        }
    );
}
