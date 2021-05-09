$(document).ready(function() {
    $(".logout-btn").click(function() {
        Swal.fire({
            title: 'Ar tikrai norite atsijungti?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Taip!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    method: 'POST',
                    url: "/logout",
                    success: function(response) {
                        header('Location: /login')
                        
                    },
                })
            }
            window.location.replace("/login");
        })
    });

});

