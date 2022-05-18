        function erase(obj){
            
            let codigo = obj.children[0].innerHTML;


            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            
            swalWithBootstrapButtons.fire({
                title: '¿Estas seguro?',
                text: "No se podrá revertir!!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, borralo!',
                cancelButtonText: 'No, cancelar!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {

                    window.location="index.php?ruta=erase&codigo="+codigo;

                // swalWithBootstrapButtons.fire(
                //     'Borrado!',
                //     'El registro fue borrado',
                //     'Se ha borrado satisfactoriamente'
                // )
                } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
                ) {
                swalWithBootstrapButtons.fire(
                    'Cancelado',
                    'Tus datos estan seguros :)',
                    'error'
                )
                }
            })
        }

        function getData(obj){
            let nombre = obj.children[1].innerHTML;
            let Apellido = obj.children[2].innerHTML;
            let usuario = obj.children[3].innerHTML;
            let clave = obj.children[4].innerHTML;
            let codigo = obj.children[0].innerHTML;
            
            document.getElementById("txtNombreM").value = nombre;
            document.getElementById("txtApellidoM").value = Apellido;
            document.getElementById("txtUsuarioM").value = usuario;
            document.getElementById("txtClaveM").value = clave;
            document.getElementById("txtCodigoM").value = codigo;
            
        }

        function getGeneraReporte(e){
            window.open('view/modulo/alluser.php','_blank');
            e.preventDefault();
        }