function cerrarSesion() {
    Swal.fire({
        title: "Cerrar Sesión?",
        text: "Estas seguro de cerrar tu cuenta!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, Salir!",
        cancelButtonText: "Cancelar"
      }).then((result) => {
        if (result.isConfirmed) {
            Window.location = base_url + 'dashboard/salir';
          
        }
      });
}