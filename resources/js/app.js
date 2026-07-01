import Alpine from 'alpinejs';
import Swal from 'sweetalert2';

window.Alpine = Alpine;
window.Swal = Swal;

Alpine.start();

document.body.addEventListener('click', function (e) {
  const btn = e.target.closest('.btn-delete');
  if (!btn) return;

  const form = btn.closest('form');
  const title = btn.dataset.title || 'Eliminar';
  const text = btn.dataset.text || '¿Está seguro?';

  Swal.fire({
    title,
    text,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Sí, eliminar',
    cancelButtonText: 'Cancelar',
  }).then((result) => {
    if (result.isConfirmed && form) {
      form.submit();
    }
  });
});