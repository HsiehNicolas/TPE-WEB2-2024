Gonzalo Martinez (gonzalomartinez2934@gmail.com) 42630924
Hsieh Nicolas Federico(hsiehnicolas@gmail.com) 44839099

Este proyecto tiene como objetivo diseñar una base de datos que organice y gestione información detallada sobre videojuegos y las compañías que los desarrollan o publican. La base de datos está estructurada en dos tablas principales: Games (Juegos) y Company (Compañías), lo que permite mantener un catálogo eficiente y bien organizado de títulos de videojuegos junto con la información de las empresas responsables de su creación.

Tabla de Games: Esta tabla almacena los detalles de los juegos disponibles en la biblioteca, incluyendo el título, género, fecha de lanzamiento, plataforma, y clasificación. Cada juego está vinculado a una compañía que lo ha desarrollado o distribuido.

Tabla de Company: Esta tabla contiene información sobre las compañías que desarrollan o publican los juegos, como su nombre, país de origen, año de fundación y sitio web oficial. Cada compañía puede estar asociada a varios juegos.

La relación entre estas dos tablas está basada en el campo id_company, que conecta a las compañías con los juegos que han creado o publicado. Esta estructura facilita una gestión eficiente del catálogo de juegos, permitiendo saber qué compañía está detrás de cada título, con la posibilidad de agregar tus juegos favoritos a esta biblioteca, tenerlos organizados en un mismo entorno con sus datos de juego, puntuar tus juegos favoritos y que destaquen en una tabla.