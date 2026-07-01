@extends('adminlte::page')

@section('js')
    @parent
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: "{{ session('success') }}"
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: "{{ session('error') }}"
            });
        </script>
    @endif

    @if(session('warning'))
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Advertencia',
                text: "{{ session('warning') }}"
            });
        </script>
    @endif

    @if(session('info'))
        <script>
            Swal.fire({
                icon: 'info',
                title: 'Información',
                text: "{{ session('info') }}"
            });
        </script>
    @endif

    {{-- CONFIRMACIÓN GLOBAL DE ELIMINACIÓN --}}
    <script>
        document.addEventListener('click', function (e) {
            const btn = e.target.closest('.btn-delete');

            if (!btn) return;

            e.preventDefault();

            Swal.fire({
                title: '¿Eliminar registro?',
                text: "Esta acción no se puede deshacer",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    btn.closest('form').submit();
                }
            });
        });
    </script>
@stop