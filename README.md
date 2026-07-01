# Sistema de Registro y Control de Activos Fijos

Sistema web desarrollado con Laravel para el registro, administración y control de activos fijos de una organización.

---

## 📸 Capturas de pantalla

> Agregar aquí las capturas del sistema.

### Inicio de sesión

![Login](docs/images/login.png)

### Dashboard

![Dashboard](docs/images/dashboard.png)

### Gestión de activos

![Activos](docs/images/activos.png)

### Reporte PDF

![Reporte PDF](docs/images/reporte-pdf.png)

### Etiquetas con código QR

![QR](docs/images/qr.png)

---

## ✨ Características

- Autenticación de usuarios.
- Gestión de activos.
- Gestión de oficinas.
- Gestión de grupos.
- Gestión de estados.
- Gestión de responsables.
- Carga de fotografías.
- Generación de reportes PDF.
- Generación de etiquetas con código QR.
- Panel administrativo con AdminLTE.
- Alertas interactivas con SweetAlert2.
- Base de datos PostgreSQL.

---

## 🛠 Tecnologías utilizadas

- Laravel 13
- PHP 8.3+
- PostgreSQL
- Bootstrap 5
- AdminLTE
- SweetAlert2
- DomPDF
- Simple QrCode
- Font Awesome
- Vite

---

## 📋 Requisitos

- PHP >= 8.3
- Composer
- Node.js y npm
- PostgreSQL

---

## ⚙️ Instalación

Clonar el repositorio:

```bash
git clone https://github.com/Amilcarqs/activos_fijos.git
cd activos_fijos
```

Instalar dependencias de PHP:

```bash
composer install
```

Instalar dependencias de JavaScript:

```bash
npm install
```

Crear el archivo de configuración:

```bash
cp .env.example .env
```

Configurar la conexión a PostgreSQL en el archivo `.env`.

Generar la clave de la aplicación:

```bash
php artisan key:generate
```

Ejecutar las migraciones:

```bash
php artisan migrate
```

Ejecutar los seeders:

```bash
php artisan db:seed
```

> Si deseas ejecutar migraciones y seeders en un solo comando:

```bash
php artisan migrate --seed
```

Compilar los recursos:

```bash
npm run build
```

Para desarrollo:

```bash
npm run dev
```

Iniciar el servidor:

```bash
php artisan serve
```

---

## 📁 Estructura del proyecto

```text
app/
database/
resources/
routes/
public/
storage/
```

---

## 📚 Paquetes utilizados

| Paquete | Propósito |
|----------|-----------|
| jeroennoten/laravel-adminlte | Panel administrativo |
| barryvdh/laravel-dompdf | Exportación a PDF |
| simplesoftwareio/simple-qrcode | Generación de códigos QR |
| sweetalert2 | Alertas y confirmaciones |

---

## 🚀 Funcionalidades futuras

- [ ] Búsqueda avanzada de activos.
- [ ] Exportación a Excel.
- [ ] Historial de movimientos.
- [ ] Gestión de roles y permisos.
- [ ] Dashboard con estadísticas.

---

## 👤 Autor

**Amilcarqs**

GitHub: https://github.com/Amilcarqs