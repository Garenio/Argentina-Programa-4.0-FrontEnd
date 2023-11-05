![Logo](https://www.tierradelfuego.gob.ar/wp-content/uploads/2023/07/WhatsApp-Image-2023-07-28-at-11.11.26-1200x480.jpeg)


# Argentina Programa 4.0 | Proyecto Final | Trayecto FullStack Jr.

Universidad Nacional de La Pampa (UNLPam)


## Vista General

El proyecto **TecnoNews** se trata de una web del estilo diario o blog programada en PHP. Además se utilizó mysql, HTML y CSS para completar su correcto funcionamiento.

Recursos utilizados:

- [Bootstrap](https://getbootstrap.com/)
- [Google Fonts](https://fonts.google.com/)



## Características

-  El proyecto trabaja con una base de datos mysql llamada **diariodb** que cuenta con 2 tablas: usuarios y news.

- Manejo de roles de usuarios. En el sitio existen dos tipos de usuarios: Admin y Autor

- Los usuarios que son **Admin** tienen diferentes capacidades:
    - Crear, editar y eliminar usuarios.
    - Crear, editar y eliminar noticias.
    - Ver listado completo de usuarios y noticias.

- Los usuarios que son **Autor** podrán crear y editar sus propias publicaciones. Los usuarios con este rol pueden registrarse directamente desde la web utilizando el botón "Registrar" del menú de navegación.

- Cualquiera sea el tipo de usuario logeado, se podrá agregar un nuevo artículo al sitio usuando la opción de **Crear un artículo** disponible en el menú desplegable en el nombre del usuario conectado.

- La creación de artículos requiere los siguientes datos obligatorios:
    - Título
    - Copete
    - Cuerpo
    - Imagen
    - Categoría

- El artículo creado se guardará en la base de datos con los datos ingresados y adicionalmente se guardará un id de noticia, el id del usuario creador y la fecha de creación.

- Con el botón de **Inicio** disponible en el menú de navegación se pueden cosultar los artículos disponibles en el sitio. Se mostrarán en forma de cards, y se podrá acceder a la noticia completa presionando el botón de **Leer más**.

- Desde el menú de navegación se puede acceder a ver noticias de categorías específicas desde los botones de **Tecnología**, **Gaming** y **Reviews**.


## Uso y pruebas del sitio

Para poder probar correctamente las funciones del sitio web se pueden utilizar las siguientes cuentas:

- Usuario: Eugenio | Contraseña: Eugenio => [Cuenta Admin]
- Usuario: TestAutor | Contraseña: TestAutor => [Cuenta Autor]

## Concluisones

Este trabajo se realizó bajo las condiciones de entregas dispuestas por la entidad educativa a cargo de llevar a cabo el dictado del trayecto educativo FullStack Jr. para Argentina Programa 4.0.

Se aplicaron los conceptos vistos de PHP y MySQL durante la cursada y se integraron con otros conceptos vistos en las etapas anteriores como HTML, CSS y uso de frameworks.

**Desarrollo por:** Eugenio Garcia