# Software Requirements Specification (SRS)
## SMS-EDUCOL - Sistema de Gestión Escolar

**Versión:** 1.0  
**Fecha:** Abril 3, 2026  
**Preparado por:** Equipo de Ingeniería de Software  
**Proyecto:** SMS-EDUCOL (Sistema de Manejo Escolar Educativo de Colombia)

---

## Tabla de Contenidos

1. [Introducción](#1-introducción)
2. [Descripción General](#2-descripción-general)
3. [Requisitos Funcionales del MVP](#3-requisitos-funcionales-del-mvp)
4. [Requisitos No Funcionales](#4-requisitos-no-funcionales)
5. [Casos de Uso](#5-casos-de-uso)
6. [Modelo de Datos](#6-modelo-de-datos)
7. [Interfaces de Usuario](#7-interfaces-de-usuario)
8. [Restricciones y Supuestos](#8-restricciones-y-supuestos)
9. [Criterios de Aceptación](#9-criterios-de-aceptación)

---

## 1. Introducción

### 1.1 Propósito
Este documento especifica los requisitos funcionales y no funcionales para el desarrollo del Sistema de Gestión Escolar SMS-EDUCOL. El sistema está diseñado para automatizar y optimizar los procesos administrativos y académicos de instituciones educativas de nivel básico y medio en Colombia.

El presente SRS tiene como objetivo establecer un entendimiento común entre los stakeholders del proyecto (desarrolladores, gerentes de proyecto, usuarios finales y personal administrativo) sobre las funcionalidades, restricciones y características técnicas del sistema.

### 1.2 Alcance del Sistema
SMS-EDUCOL es una aplicación web diseñada para gestionar los procesos fundamentales de una institución educativa colombiana. El sistema centraliza la información académica y administrativa, facilitando la toma de decisiones y mejorando la eficiencia operativa.

**Funcionalidades incluidas en la versión inicial:**
- Gestión integral de usuarios (estudiantes, docentes, personal administrativo)
- Configuración y administración de la estructura académica (años lectivos, períodos, grados, grupos, asignaturas)
- Gestión del proceso de matrícula e inscripciones
- Registro y seguimiento de asistencia
- Administración de calificaciones y evaluaciones
- Generación de reportes académicos y administrativos

**Funcionalidades previstas para versiones futuras:**
- Módulo financiero y de tesorería (gestión de pagos, matrículas, mensualidades)
- Sistema de biblioteca
- Portal de comunicación para padres de familia
- Sistema de mensajería interna
- Aplicación móvil complementaria
- Integración con plataformas de aprendizaje virtual (LMS)

### 1.3 Definiciones, Acrónimos y Abreviaturas
- **SMS-EDUCOL**: Sistema de Manejo Escolar Educativo de Colombia
- **CRUD**: Create, Read, Update, Delete (Crear, Leer, Actualizar, Eliminar)
- **SRS**: Software Requirements Specification (Especificación de Requisitos de Software)
- **Año Lectivo**: Período académico anual en el cual se desarrollan las actividades educativas
- **Período Académico**: Subdivisión del año lectivo (bimestre, trimestre, semestre)
- **Grado**: Nivel educativo según la estructura del sistema educativo colombiano (1°, 2°, 3°, etc.)
- **Grupo**: División de estudiantes dentro de un mismo grado (Grupo A, Grupo B, Grupo C)
- **Asignatura**: Materia o área de conocimiento que se imparte en la institución
- **Docente**: Profesional encargado de impartir una o más asignaturas
- **Matrícula**: Proceso de inscripción formal de un estudiante en la institución educativa
- **Acudiente**: Persona responsable legal del estudiante (padre, madre o tutor)

### 1.4 Referencias
- Laravel Framework Documentation v13.x - https://laravel.com/docs
- PostgreSQL 16 Documentation - https://www.postgresql.org/docs/16/
- ISO/IEC 25010:2011 - Systems and Software Quality Requirements and Evaluation (SQuaRE)
- Ministerio de Educación Nacional de Colombia - Normativa Educativa Vigente

---

## 2. Descripción General

### 2.1 Perspectiva del Producto
SMS-EDUCOL es un sistema de información web autónomo, desarrollado específicamente para satisfacer las necesidades de gestión académica y administrativa de instituciones educativas colombianas. El sistema está diseñado bajo una arquitectura cliente-servidor, utilizando tecnologías web modernas que garantizan accesibilidad desde cualquier dispositivo con navegador web.

El sistema opera de forma independiente, sin requerir integración obligatoria con otros sistemas externos en su fase inicial. No obstante, su arquitectura modular permite futuras integraciones con:
- Sistemas del Ministerio de Educación Nacional (SIMAT, DUE)
- Plataformas de pago electrónico
- Sistemas de gestión de aprendizaje (LMS)
- Servicios de mensajería y notificaciones

SMS-EDUCOL está orientado a instituciones educativas de tamaño pequeño a mediano, con una capacidad operativa de 50 a 1000 estudiantes, abarcando educación básica primaria, básica secundaria y media.

### 2.2 Funciones Principales del Sistema
1. **Autenticación y Control de Acceso**: Sistema robusto de autenticación con control de permisos basado en roles, garantizando la seguridad y privacidad de la información.

2. **Gestión de Estudiantes y Docentes**: Administración centralizada de la información personal, académica y de contacto de estudiantes y personal docente.

3. **Configuración de Estructura Académica**: Definición y administración de años lectivos, períodos académicos, grados, grupos y asignaturas según las necesidades institucionales.

4. **Control de Asistencia**: Registro diario de asistencia con múltiples estados (presente, ausente, tardanza, justificado) y generación de reportes estadísticos.

5. **Gestión de Calificaciones**: Sistema configurable de registro, cálculo y consulta de calificaciones, adaptable a diferentes sistemas de evaluación.

6. **Generación de Reportes**: Herramientas de reporting para obtener información académica y administrativa en formatos digitales y exportables.

### 2.3 Perfiles de Usuario

El sistema identifica cuatro perfiles principales de usuario, cada uno con privilegios y funcionalidades específicas:

| Perfil | Descripción | Competencias Técnicas Requeridas |
|--------|-------------|----------------------------------|
| **Superadministrador** | Responsable de la configuración global del sistema, gestión de usuarios administrativos y mantenimiento técnico. | Competencias intermedias en uso de sistemas informáticos |
| **Administrador Escolar** | Encargado de la operación diaria del sistema: gestión académica, matrículas, reportes y configuración de períodos lectivos. | Competencias básicas en uso de aplicaciones web |
| **Docente** | Responsable del registro de asistencia y calificaciones de las asignaturas asignadas. Consulta de información de estudiantes. | Competencias básicas en navegación web y manejo de formularios |
| **Estudiante** | Usuario final con acceso de solo lectura a su información académica personal: calificaciones, asistencia y datos de matrícula. | Competencias básicas en navegación web |

**Nota**: El perfil de "Acudiente" (padre/madre/tutor) está previsto para versiones futuras del sistema.

### 2.4 Restricciones Técnicas y Operativas

**Restricciones de Software:**
- El sistema debe ser compatible con navegadores web modernos: Google Chrome (v120+), Mozilla Firefox (v120+), Safari (v17+), Microsoft Edge (v120+)
- Base de datos: PostgreSQL 16.x o superior
- Servidor de aplicaciones: PHP 8.3+ con framework Laravel 13.x
- Servidor web: Apache 2.4+ o Nginx 1.24+

**Restricciones de Rendimiento:**
- Tiempo de respuesta menor a 3 segundos para operaciones de consulta estándar
- Tiempo de respuesta menor a 5 segundos para generación de reportes complejos
- Capacidad de soporte para mínimo 100 usuarios concurrentes

**Restricciones de Disponibilidad:**
- Disponibilidad del sistema: 99.5% del tiempo durante período lectivo (excluyendo ventanas de mantenimiento programado)
- Mantenimiento programado: máximo 4 horas mensuales, preferiblemente en horario no lectivo

**Restricciones Regulatorias:**
- Cumplimiento de la Ley 1581 de 2012 (Protección de Datos Personales en Colombia)
- Cumplimiento de normativas del Ministerio de Educación Nacional de Colombia

### 2.5 Supuestos y Dependencias

**Supuestos del Sistema:**
- La institución educativa cuenta con infraestructura de red (LAN/Wi-Fi) estable y funcional
- Los usuarios tienen acceso regular a dispositivos con navegador web (computadores, tablets)
- La institución sigue la estructura académica tradicional del sistema educativo colombiano (grados y grupos)
- El sistema de evaluación institucional es de carácter numérico en escala de 1.0 a 5.0 (decimal) o de 0 a 100 (entero)
- El año lectivo se divide en períodos académicos (bimestres, trimestres o semestres)
- El personal administrativo y docente posee competencias básicas en el uso de aplicaciones web

**Dependencias Externas:**
- Disponibilidad de servicio de internet para acceso al sistema
- Disponibilidad de servidor de correo electrónico (SMTP) para notificaciones
- Servicio de hosting web con capacidad para alojar aplicaciones PHP/Laravel
- Servicio de base de datos PostgreSQL

**Dependencias de Datos:**
- Información institucional básica (nombre, logo, datos de contacto)
- Estructura de grados según el Proyecto Educativo Institucional (PEI)
- Catálogo de asignaturas por grado
- Información personal de estudiantes y docentes (proporcionada por la institución)

---

## 3. Requisitos Funcionales

Los requisitos funcionales describen las funcionalidades específicas que el sistema SMS-EDUCOL debe proporcionar. Cada requisito se identifica con un código único (RF-XX.X) y se especifica su prioridad de implementación.

### RF-01: Módulo de Autenticación

#### RF-01.1: Login de Usuario
**Prioridad:** Alta  
**Descripción:** Los usuarios deben poder iniciar sesión con credenciales válidas.

**Criterios de Aceptación:**
- El sistema valida email y contraseña
- Redirección al dashboard según rol después del login
- Mensaje de error para credenciales inválidas
- Protección contra fuerza bruta (máximo 5 intentos en 5 minutos)

#### RF-01.2: Recuperación de Contraseña
**Prioridad:** Media  
**Descripción:** Los usuarios pueden recuperar su contraseña vía email.

**Criterios de Aceptación:**
- Envío de link de recuperación al email registrado
- Link válido por 60 minutos
- Cambio exitoso de contraseña

#### RF-01.3: Gestión de Sesiones
**Prioridad:** Alta  
**Descripción:** Control de sesiones activas de usuarios.

**Criterios de Aceptación:**
- Cierre de sesión manual
- Cierre automático tras 120 minutos de inactividad
- Solo una sesión activa por usuario

---

### RF-02: Módulo de Gestión de Usuarios

#### RF-02.1: Gestión de Estudiantes
**Prioridad:** Alta  
**Descripción:** El sistema debe permitir a los usuarios con perfil de Administrador realizar operaciones completas de gestión (creación, consulta, modificación y eliminación) sobre los registros de estudiantes.

**Información requerida del estudiante:**
- Datos de identificación: tipo de documento (TI, CC, CE), número de documento, nombres completos, apellidos completos
- Datos personales: fecha de nacimiento, género, grupo sanguíneo (opcional)
- Datos de contacto: dirección de residencia, teléfono, correo electrónico (opcional)
- Datos académicos: código de estudiante (generado automáticamente por el sistema)
- Fotografía (opcional, formato JPG/PNG, máximo 2MB)

**Criterios de Aceptación:**
- El sistema debe validar la unicidad del número de documento de identidad
- El código de estudiante debe generarse automáticamente siguiendo un formato configurable
- El sistema debe permitir búsquedas por nombre, apellido, número de documento o código de estudiante
- La visualización de listados debe ser paginada (configurable, por defecto 20 registros por página)
- Las eliminaciones deben ser lógicas (soft delete), preservando el registro en la base de datos
- El correo electrónico, cuando se proporcione, debe ser único en el sistema
- El sistema debe validar el formato de los datos ingresados (email, teléfono, fecha de nacimiento)

#### RF-02.2: Gestión de Docentes
**Prioridad:** Alta  
**Descripción:** El sistema debe permitir a los usuarios con perfil de Administrador realizar operaciones completas de gestión sobre los registros del personal docente.

**Información requerida del docente:**
- Datos de identificación: tipo de documento (CC, CE), número de documento, nombres completos, apellidos completos
- Datos personales: fecha de nacimiento, género
- Datos de contacto: teléfono, correo electrónico institucional
- Datos laborales: código de empleado (generado automáticamente), área de especialidad, título profesional
- Fotografía (opcional, formato JPG/PNG, máximo 2MB)

**Criterios de Aceptación:**
- El sistema debe validar la unicidad del número de documento de identidad
- El código de empleado debe generarse automáticamente siguiendo un formato configurable
- El sistema debe permitir búsquedas por nombre, apellido, número de documento o código de empleado
- La visualización de listados debe ser paginada
- Las eliminaciones deben ser lógicas (soft delete)
- El correo electrónico debe ser único en el sistema
- El sistema debe permitir asociar múltiples áreas de especialidad a un docente

#### RF-02.3: Gestión de Perfiles
**Prioridad:** Media  
**Descripción:** Usuarios pueden ver y editar su propio perfil.

**Criterios de Aceptación:**
- Ver información personal
- Editar información de contacto
- Cambiar contraseña
- Subir/cambiar foto de perfil

---

### RF-03: Módulo de Configuración Académica

#### RF-03.1: Gestión de Años Lectivos
**Prioridad:** Alta  
**Descripción:** El sistema debe permitir a los Administradores configurar y gestionar los años lectivos de la institución educativa.

**Información requerida:**
- Nombre o identificador del año lectivo (ej: "2026", "2026-2027")
- Fecha de inicio del año lectivo
- Fecha de finalización del año lectivo
- Estado (Activo/Inactivo)

**Criterios de Aceptación:**
- El sistema debe permitir tener solo un año lectivo en estado activo simultáneamente
- El sistema debe validar que las fechas de diferentes años lectivos no se solapen
- El sistema debe proporcionar funcionalidad CRUD completa para años lectivos
- Al desactivar un año lectivo, el sistema debe solicitar confirmación
- El sistema debe advertir si existen períodos, grupos o matrículas asociadas antes de permitir la eliminación

#### RF-03.2: Gestión de Períodos Académicos
**Prioridad:** Alta  
**Descripción:** Administradores configuran períodos (bimestres/trimestres).

**Datos requeridos:**
- Nombre (ej: "1er Bimestre")
- Fecha de inicio y fin
- Año académico asociado
- Orden (1, 2, 3, 4)

**Criterios de Aceptación:**
- Los períodos pertenecen a un año académico
- Las fechas están dentro del año académico
- No se solapan fechas entre períodos del mismo año
- CRUD completo de períodos

#### RF-03.3: Gestión de Grados
**Prioridad:** Alta  
**Descripción:** Administradores configuran los grados/niveles educativos.

**Datos requeridos:**
- Nombre (ej: "1° Básico", "7° Grado")
- Nivel educativo (Primaria/Secundaria)
- Orden (1, 2, 3...)

**Criterios de Aceptación:**
- CRUD completo de grados
- Listado ordenado por nivel y orden

#### RF-03.4: Gestión de Grupos
**Prioridad:** Alta  
**Descripción:** El sistema debe permitir a los Administradores crear y gestionar grupos para cada grado en un año lectivo específico.

**Información requerida:**
- Grado al que pertenece el grupo
- Identificador del grupo (ej: "A", "B", "C", "1", "2")
- Año lectivo asociado
- Capacidad máxima de estudiantes
- Docente director de grupo (opcional)
- Jornada (Mañana/Tarde/Completa/Nocturna/Fin de semana)

**Criterios de Aceptación:**
- El sistema debe proporcionar funcionalidad CRUD completa para grupos
- Un grupo debe pertenecer a un grado y a un año lectivo específico
- El sistema debe validar que no se exceda la capacidad máxima al inscribir estudiantes
- El sistema debe permitir asignar un docente como director de grupo
- El identificador del grupo debe ser único dentro del mismo grado y año lectivo
- El sistema debe mostrar estadísticas del grupo (estudiantes inscritos, cupos disponibles)

#### RF-03.5: Gestión de Asignaturas
**Prioridad:** Alta  
**Descripción:** Administradores configuran asignaturas/materias.

**Datos requeridos:**
- Nombre (ej: "Matemáticas", "Historia")
- Código (ej: "MAT-101")
- Descripción
- Horas semanales

**Criterios de Aceptación:**
- CRUD completo de asignaturas
- Código único por asignatura

#### RF-03.6: Asignación de Asignaturas a Grados
**Prioridad:** Alta  
**Descripción:** Administradores asocian asignaturas a grados específicos.

**Criterios de Aceptación:**
- Asignar múltiples asignaturas a un grado
- Ver asignaturas por grado
- Remover asignaciones

#### RF-03.7: Asignación Docente-Asignatura-Grupo (Carga Académica)
**Prioridad:** Alta  
**Descripción:** El sistema debe permitir a los Administradores asignar docentes para impartir asignaturas específicas en grupos determinados, configurando así la carga académica institucional.

**Información requerida:**
- Docente asignado
- Asignatura a impartir
- Grupo al que se imparte
- Año lectivo
- Intensidad horaria semanal (opcional)

**Criterios de Aceptación:**
- Un docente puede tener múltiples asignaciones (diferentes asignaturas y/o grupos)
- Una combinación asignatura-grupo debe tener un único docente asignado por año lectivo
- El sistema debe permitir visualizar todas las asignaciones de un docente específico
- El sistema debe permitir visualizar todas las asignaciones (docentes y asignaturas) de un grupo
- El sistema debe validar que la asignatura esté asociada al grado del grupo
- El sistema debe permitir generar reportes de carga académica por docente

---

### RF-04: Módulo de Inscripciones

#### RF-04.1: Matrícula de Estudiantes
**Prioridad:** Alta  
**Descripción:** El sistema debe permitir a los Administradores registrar la matrícula de estudiantes en grupos específicos para un año lectivo.

**Información requerida:**
- Estudiante a matricular
- Grupo asignado
- Año lectivo
- Fecha de matrícula (registro automático)
- Estado de matrícula (Activo/Retirado/Trasladado)
- Observaciones (opcional)

**Criterios de Aceptación:**
- El sistema debe validar que el grupo seleccionado no haya alcanzado su capacidad máxima
- Un estudiante solo puede tener una matrícula activa por año lectivo
- El sistema debe registrar automáticamente la fecha y hora de matrícula
- El sistema debe permitir cambiar el estado de matrícula (retirar o trasladar estudiante)
- Al retirar un estudiante, el sistema debe solicitar motivo y fecha de retiro
- El sistema debe liberar un cupo en el grupo cuando se retira un estudiante
- El sistema debe generar un número de matrícula único por estudiante y año lectivo

#### RF-04.2: Consulta de Matrículas
**Prioridad:** Media  
**Descripción:** El sistema debe proporcionar funcionalidades de consulta y visualización de matrículas con diferentes criterios de filtrado.

**Criterios de Aceptación:**
- El sistema debe permitir visualizar el listado completo de estudiantes matriculados por grupo
- El sistema debe permitir filtrar matrículas por año lectivo
- El sistema debe permitir buscar la matrícula de un estudiante específico
- El sistema debe mostrar estadísticas: total matriculados, activos, retirados, trasladados
- El sistema debe permitir exportar listados de matrícula en formato Excel y PDF
- El sistema debe mostrar el historial de matrículas de un estudiante (años anteriores)

---

### RF-05: Módulo de Asistencia

#### RF-05.1: Registro de Asistencia
**Prioridad:** Alta  
**Descripción:** Docentes registran la asistencia de estudiantes.

**Datos requeridos:**
- Asignación (Docente-Asignatura-Grupo)
- Fecha
- Por cada estudiante: estado (Presente/Ausente/Tardanza/Justificado)
- Observaciones (opcional)

**Criterios de Aceptación:**
- Un docente solo puede registrar asistencia en sus asignaciones
- Solo se puede registrar asistencia una vez por día por asignación
- Permitir editar asistencia del mismo día
- No se puede registrar asistencia de fechas futuras
- Listado automático de estudiantes de la grupo

#### RF-05.2: Consulta de Asistencia
**Prioridad:** Media  
**Descripción:** Visualizar registros de asistencia.

**Criterios de Aceptación:**
- Docentes ven asistencia de sus asignaciones
- Administradores ven asistencia de cualquier grupo
- Estudiantes ven su propia asistencia
- Filtrar por fecha, grupo, asignatura
- Ver estadísticas: % asistencia, total ausencias, tardanzas

#### RF-05.3: Justificación de Ausencias
**Prioridad:** Baja (Post-MVP)  
**Descripción:** Cambiar estado de ausencia a justificada.

**Criterios de Aceptación:**
- Solo administradores pueden justificar ausencias
- Agregar nota de justificación

---

### RF-06: Módulo de Calificaciones

#### RF-06.1: Configuración de Tipos de Evaluación
**Prioridad:** Alta  
**Descripción:** Administradores configuran tipos de evaluaciones.

**Datos requeridos:**
- Nombre (Examen, Tarea, Participación, Proyecto)
- Porcentaje de peso en nota final
- Asignatura (opcional: global o por asignatura)

**Criterios de Aceptación:**
- CRUD de tipos de evaluación
- La suma de porcentajes debe ser 100% por asignatura

#### RF-06.2: Registro de Calificaciones
**Prioridad:** Alta  
**Descripción:** Docentes registran calificaciones de estudiantes.

**Datos requeridos:**
- Estudiante
- Asignatura (de las asignaciones del docente)
- Período académico
- Tipo de evaluación
- Calificación (0-100)
- Fecha de evaluación
- Observaciones (opcional)

**Criterios de Aceptación:**
- Solo docentes pueden registrar calificaciones en sus asignaturas
- Validar rango de calificación (0-100)
- Permitir editar calificaciones
- No se pueden registrar calificaciones de períodos cerrados

#### RF-06.3: Cálculo Automático de Promedios
**Prioridad:** Alta  
**Descripción:** El sistema calcula promedios automáticamente.

**Criterios de Aceptación:**
- Promedio por asignatura por período (según pesos de tipos de evaluación)
- Promedio general del período (todas las asignaturas)
- Promedio final del año académico
- Actualización automática al registrar/editar calificaciones

#### RF-06.4: Consulta de Calificaciones
**Prioridad:** Alta  
**Descripción:** Visualizar calificaciones según rol.

**Criterios de Aceptación:**
- Docentes ven calificaciones de sus asignaturas
- Estudiantes ven sus propias calificaciones
- Administradores ven todas las calificaciones
- Filtrar por período, asignatura, estudiante
- Ver detalle de evaluaciones y promedios

#### RF-06.5: Boletín de Calificaciones
**Prioridad:** Media  
**Descripción:** Generar boletín de calificaciones en PDF.

**Criterios de Aceptación:**
- Generar por estudiante y período
- Incluir: datos del estudiante, asignaturas, calificaciones por tipo, promedios
- Logo de la institución
- Firma del docente y director (espacio)
- Descargable en PDF

---

### RF-07: Módulo de Reportes

#### RF-07.1: Reporte de Estudiantes
**Prioridad:** Media  
**Descripción:** Listado de estudiantes con filtros.

**Criterios de Aceptación:**
- Filtrar por grado, grupo, estado
- Exportar a Excel/PDF
- Columnas: código, nombre, grado, grupo, estado

#### RF-07.2: Reporte de Asistencia General
**Prioridad:** Media  
**Descripción:** Estadísticas de asistencia.

**Criterios de Aceptación:**
- Filtrar por rango de fechas, grupo, estudiante
- Mostrar: % asistencia, total días, presentes, ausentes, tardanzas
- Exportar a Excel/PDF

#### RF-07.3: Reporte de Rendimiento Académico
**Prioridad:** Media  
**Descripción:** Calificaciones por grupo o estudiante.

**Criterios de Aceptación:**
- Filtrar por período, grupo, asignatura
- Mostrar listado de estudiantes con promedios
- Indicar estudiantes con promedios < 60 (reprobados)
- Exportar a Excel/PDF

#### RF-07.4: Dashboard Administrativo
**Prioridad:** Baja  
**Descripción:** Resumen visual de estadísticas clave.

**Criterios de Aceptación:**
- Total de estudiantes activos
- Total de docentes
- Total de grupos activas
- Gráfico de asistencia semanal
- Gráfico de rendimiento académico por grado

---

### RF-08: Módulo de Configuración del Sistema

#### RF-08.1: Información de la Institución
**Prioridad:** Media  
**Descripción:** Configurar datos de la institución.

**Datos requeridos:**
- Nombre de la institución
- Logo
- Dirección
- Teléfono
- Email
- Sitio web

**Criterios de Aceptación:**
- Solo super admin puede editar
- Información visible en reportes y boletines

#### RF-08.2: Gestión de Administradores
**Prioridad:** Alta  
**Descripción:** Super admin gestiona cuentas de administradores.

**Criterios de Aceptación:**
- Crear cuenta de administrador
- Asignar roles (Admin Escolar, Super Admin)
- Desactivar/activar cuentas

---

## 4. Requisitos No Funcionales

Los requisitos no funcionales definen las cualidades y restricciones del sistema que no están directamente relacionadas con funcionalidades específicas, pero que son esenciales para garantizar la calidad, rendimiento y usabilidad de SMS-EDUCOL.

### RNF-01: Rendimiento

**RNF-01.1** - El sistema debe cargar las páginas principales en un tiempo máximo de 3 segundos bajo condiciones de red estándar (conexión de 10 Mbps o superior).

**RNF-01.2** - El sistema debe soportar al menos 100 usuarios concurrentes sin degradación perceptible en el rendimiento.

**RNF-01.3** - Las consultas a la base de datos deben ejecutarse en un tiempo promedio no superior a 1 segundo.

**RNF-01.4** - La generación de reportes complejos (boletines, reportes de asistencia) debe completarse en un tiempo máximo de 5 segundos.

**RNF-01.5** - El sistema debe optimizar el uso de recursos mediante técnicas de caching para consultas frecuentes.

### RNF-02: Seguridad

**RNF-02.1** - Todas las contraseñas de usuario deben almacenarse encriptadas utilizando el algoritmo bcrypt con un factor de costo mínimo de 10.

**RNF-02.2** - El sistema debe implementar protección contra ataques CSRF (Cross-Site Request Forgery) en todos los formularios.

**RNF-02.3** - Todas las entradas de usuario deben ser validadas tanto en el lado del cliente como en el servidor para prevenir ataques de inyección.

**RNF-02.4** - Las sesiones de usuario deben utilizar tokens seguros y estar protegidas contra secuestro de sesión.

**RNF-02.5** - El sistema debe implementar HTTPS obligatorio en ambiente de producción para cifrar toda la comunicación.

**RNF-02.6** - El sistema debe mantener un registro de auditoría de todas las acciones críticas (creación, modificación y eliminación de registros de estudiantes, docentes, matrículas y calificaciones).

**RNF-02.7** - El acceso a las funcionalidades del sistema debe estar controlado mediante un sistema de roles y permisos granular.

**RNF-02.8** - Los datos personales de estudiantes y docentes deben cumplir con la Ley 1581 de 2012 de Protección de Datos Personales de Colombia.

### RNF-03: Usabilidad

**RNF-03.1** - La interfaz de usuario debe ser responsive y adaptarse correctamente a dispositivos desktop (1024px+), tablet (768px-1023px) y móvil (375px-767px).

**RNF-03.2** - Los mensajes de error deben ser claros, específicos y estar redactados en español, indicando al usuario cómo corregir el problema.

**RNF-03.3** - El sistema debe solicitar confirmación explícita antes de ejecutar acciones destructivas (eliminación de registros, cambios de estado irreversibles).

**RNF-03.4** - La navegación hacia cualquier función principal del sistema no debe requerir más de 3 clics desde el dashboard.

**RNF-03.5** - El sistema debe proporcionar feedback visual inmediato para todas las acciones del usuario (estados de carga, mensajes de éxito, mensajes de error).

**RNF-03.6** - La interfaz debe ser intuitiva, requiriendo capacitación mínima para usuarios con competencias básicas en informática.

**RNF-03.7** - El sistema debe cumplir con estándares básicos de accesibilidad WCAG 2.1 nivel AA.

### RNF-04: Mantenibilidad

**RNF-04.1** - El código fuente debe seguir las convenciones de estilo PSR-12 para PHP.

**RNF-04.2** - Las funciones complejas y la lógica de negocio deben estar adecuadamente documentadas mediante comentarios descriptivos.

**RNF-04.3** - El sistema debe implementar una clara separación de responsabilidades mediante el patrón MVC extendido con capas de Servicios y Repositorios.

**RNF-04.4** - Todos los cambios en el esquema de base de datos deben gestionarse mediante archivos de migración versionados.

**RNF-04.5** - El código debe ser modular y reutilizable, facilitando futuras extensiones del sistema.

### RNF-05: Disponibilidad

**RNF-05.1** - El sistema debe mantener una disponibilidad del 99.5% durante el período lectivo activo.

**RNF-05.2** - Las ventanas de mantenimiento programado deben realizarse preferiblemente fuera del horario lectivo y no deben exceder 4 horas mensuales.

**RNF-05.3** - El sistema debe contar con un mecanismo de respaldo (backup) automático de la base de datos con frecuencia diaria.

**RNF-05.4** - Los respaldos de base de datos deben conservarse durante un mínimo de 30 días.

### RNF-06: Compatibilidad

**RNF-06.1** - El sistema debe ser compatible con los siguientes navegadores web:
- Google Chrome versión 120 o superior
- Mozilla Firefox versión 120 o superior  
- Safari versión 17 o superior
- Microsoft Edge versión 120 o superior

**RNF-06.2** - La interfaz debe ser funcional en dispositivos con resolución mínima de 375px de ancho.

**RNF-06.3** - El sistema debe funcionar correctamente en sistemas operativos Windows, macOS y Linux.

### RNF-07: Escalabilidad

**RNF-07.1** - La arquitectura del sistema debe permitir el crecimiento hasta soportar 1000 estudiantes activos sin requerir rediseño significativo.

**RNF-07.2** - El diseño de la base de datos debe seguir principios de normalización para evitar redundancia y facilitar el escalamiento.

**RNF-07.3** - Las tablas de la base de datos deben incluir índices apropiados en columnas utilizadas frecuentemente en búsquedas y filtros.

### RNF-08: Portabilidad

**RNF-08.1** - El sistema debe poder desplegarse tanto en infraestructura on-premise como en servicios cloud (AWS, Google Cloud, Azure).

**RNF-08.2** - El sistema debe ser independiente del sistema operativo del servidor (compatible con Linux, Windows Server).

**RNF-08.3** - La configuración del sistema debe gestionarse mediante variables de entorno, facilitando el despliegue en diferentes ambientes.

### RNF-09: Interoperabilidad

**RNF-09.1** - El sistema debe generar reportes en formatos estándar de intercambio: PDF y Excel (XLSX).

**RNF-09.2** - La arquitectura debe permitir futuras integraciones con sistemas externos mediante APIs REST.

**RNF-09.3** - El sistema debe utilizar estándares web actuales (HTML5, CSS3, JavaScript ES6+).

---

---

## 5. Casos de Uso

### CU-01: Inscribir Estudiante en Grupo

**Actor Principal:** Administrador  
**Precondiciones:**
- Administrador autenticado
- Existe el estudiante en el sistema
- Existe la grupo con cupo disponible
- Hay un año académico activo

**Flujo Normal:**
1. Administrador navega a "Inscripciones" > "Nueva Inscripción"
2. Sistema muestra formulario
3. Administrador selecciona año académico actual
4. Sistema muestra lista de grupos disponibles
5. Administrador selecciona grupo
6. Administrador busca y selecciona estudiante
7. Sistema valida que el estudiante no tenga inscripción activa
8. Sistema valida que la grupo tenga cupo
9. Administrador confirma inscripción
10. Sistema registra inscripción con fecha actual y estado "Activo"
11. Sistema muestra mensaje de éxito

**Flujos Alternativos:**
- **4a.** No hay grupos disponibles: Sistema muestra mensaje "Debe crear grupos primero"
- **7a.** Estudiante ya inscrito: Sistema muestra error "El estudiante ya tiene una inscripción activa en este año"
- **8a.** Grupo llena: Sistema muestra error "La grupo ha alcanzado su capacidad máxima"

**Postcondiciones:**
- Estudiante inscrito en la grupo
- Contador de estudiantes de la grupo incrementado

---

### CU-02: Registrar Asistencia Diaria

**Actor Principal:** Docente  
**Precondiciones:**
- Docente autenticado
- Docente tiene asignaciones activas
- Es día hábil

**Flujo Normal:**
1. Docente navega a "Asistencia" > "Registrar"
2. Sistema muestra lista de asignaciones del docente
3. Docente selecciona asignación (Asignatura-Grupo)
4. Sistema verifica que no exista registro de asistencia para hoy en esa asignación
5. Sistema muestra listado de estudiantes de la grupo con checkboxes
6. Docente marca estado de cada estudiante (Presente/Ausente/Tardanza)
7. Docente agrega observaciones generales (opcional)
8. Docente presiona "Guardar"
9. Sistema valida que todos los estudiantes tengan estado marcado
10. Sistema registra asistencia con fecha actual
11. Sistema muestra mensaje de éxito

**Flujos Alternativos:**
- **4a.** Ya existe registro de hoy: Sistema muestra la asistencia registrada en modo edición
- **9a.** Faltan estados por marcar: Sistema muestra error "Debe marcar asistencia de todos los estudiantes"

**Postcondiciones:**
- Asistencia registrada para la fecha y asignación
- Estadísticas de asistencia actualizadas

---

### CU-03: Registrar Calificación

**Actor Principal:** Docente  
**Precondiciones:**
- Docente autenticado
- Docente tiene asignaciones activas
- Período académico activo

**Flujo Normal:**
1. Docente navega a "Calificaciones" > "Registrar"
2. Sistema muestra lista de asignaciones del docente
3. Docente selecciona asignación (Asignatura-Grupo)
4. Sistema muestra lista de estudiantes de la grupo
5. Docente selecciona estudiante
6. Sistema muestra formulario de calificación
7. Docente selecciona período académico
8. Docente selecciona tipo de evaluación
9. Docente ingresa calificación (0-100)
10. Docente ingresa fecha de evaluación
11. Docente agrega observaciones (opcional)
12. Docente presiona "Guardar"
13. Sistema valida rango de calificación
14. Sistema registra calificación
15. Sistema recalcula promedio del estudiante en la asignatura
16. Sistema muestra mensaje de éxito

**Flujos Alternativos:**
- **13a.** Calificación fuera de rango: Sistema muestra error "La calificación debe estar entre 0 y 100"
- **14a.** Ya existe calificación del mismo tipo y fecha: Sistema pregunta "¿Desea reemplazar la calificación existente?"

**Postcondiciones:**
- Calificación registrada
- Promedio del estudiante actualizado

---

### CU-04: Consultar Boletín de Calificaciones

**Actor Principal:** Estudiante  
**Precondiciones:**
- Estudiante autenticado
- Estudiante tiene inscripción activa

**Flujo Normal:**
1. Estudiante navega a "Mis Calificaciones"
2. Sistema muestra lista de períodos académicos del año actual
3. Estudiante selecciona período
4. Sistema muestra tabla con:
   - Asignaturas cursadas
   - Calificaciones por tipo de evaluación
   - Promedio por asignatura
   - Promedio general del período
5. Estudiante presiona "Descargar Boletín"
6. Sistema genera PDF del boletín
7. Sistema descarga PDF en el navegador

**Flujos Alternativos:**
- **3a.** Período sin calificaciones: Sistema muestra mensaje "Aún no hay calificaciones registradas para este período"

**Postcondiciones:**
- Boletín PDF descargado

---

### CU-05: Generar Reporte de Asistencia

**Actor Principal:** Administrador  
**Precondiciones:**
- Administrador autenticado
- Existen registros de asistencia

**Flujo Normal:**
1. Administrador navega a "Reportes" > "Asistencia"
2. Sistema muestra formulario de filtros
3. Administrador selecciona rango de fechas
4. Administrador selecciona grupo (opcional)
5. Administrador selecciona estudiante (opcional)
6. Administrador presiona "Generar"
7. Sistema consulta registros de asistencia según filtros
8. Sistema calcula estadísticas (% asistencia, totales)
9. Sistema muestra tabla con resultados
10. Administrador presiona "Exportar a Excel"
11. Sistema genera archivo Excel
12. Sistema descarga archivo

**Flujos Alternativos:**
- **7a.** No hay registros: Sistema muestra mensaje "No se encontraron registros con los filtros aplicados"

**Postcondiciones:**
- Reporte generado y descargado

---


---

## 7. Interfaces de Usuario

### 7.1 Consideraciones Generales de Diseño

El diseño de interfaces de SMS-EDUCOL debe cumplir con los siguientes principios:

**Principios de Usabilidad:**
- Interfaz intuitiva que requiera capacitación mínima
- Navegación clara con máximo 3 niveles de profundidad
- Mensajes de error y confirmación en lenguaje claro y español
- Feedback visual inmediato para todas las acciones del usuario
- Accesibilidad básica siguiendo estándares WCAG 2.1 nivel AA

**Diseño Responsive:**
- **Desktop (1024px+)**: Diseño con sidebar de navegación fijo, tablas completas, formularios en dos columnas
- **Tablet (768px-1023px)**: Sidebar colapsable, tablas con scroll horizontal, formularios en una columna
- **Móvil (375px-767px)**: Menú tipo hamburguesa, cards en lugar de tablas, formularios optimizados para pantalla táctil

**Paleta de Colores:**
- Se definirá según la identidad visual de la institución
- Uso de colores semánticos: verde (éxito), rojo (error), amarillo (advertencia), azul (información)

**Tipografía:**
- Fuente sans-serif legible (ej: Inter, Roboto, Open Sans)
- Tamaño mínimo: 14px para texto general, 16px para formularios

### 7.2 Componentes de Interfaz Principales

**Componentes de Navegación:**
- Barra superior con logo institucional, nombre de usuario y opciones de cuenta
- Menú lateral con secciones agrupadas por módulos
- Breadcrumbs para indicar ubicación en el sistema

**Componentes de Datos:**
- Tablas paginadas con opciones de ordenamiento y filtrado
- Formularios con validación en tiempo real
- Modales para confirmaciones y acciones rápidas
- Cards para presentación de información resumida

**Elementos de Feedback:**
- Notificaciones toast para acciones exitosas
- Alertas en línea para errores de validación
- Estados de carga (spinners) para operaciones asíncronas
- Mensajes de confirmación para acciones destructivas

### 7.3 Wireframes de Pantallas Principales

**Nota**: Los wireframes detallados y mockups de alta fidelidad serán desarrollados en la fase de diseño de interfaz. A continuación se describen las pantallas principales:

#### 7.3.1 Dashboard Administrativo
- Resumen de estadísticas clave en cards
- Gráficos de asistencia y rendimiento académico
- Accesos rápidos a funciones frecuentes
- Listado de actividades recientes

#### 7.3.2 Gestión de Estudiantes
- Tabla con filtros por grado, grupo, estado
- Búsqueda por nombre, documento o código
- Acciones: Ver detalle, Editar, Matricular, Descargar reporte
- Exportación a Excel/PDF

#### 7.3.3 Registro de Asistencia
- Selector de asignación (asignatura-grupo)
- Listado de estudiantes con controles de asistencia
- Marcado rápido (todos presentes, todos ausentes)
- Guardado automático de cambios

#### 7.3.4 Registro de Calificaciones
- Selector de grupo y asignatura
- Tabla de estudiantes con campos de calificación por tipo de evaluación
- Cálculo automático de promedios
- Indicadores visuales de rendimiento (aprobado/reprobado)

#### 7.3.5 Boletín de Calificaciones
- Vista previa en pantalla antes de generar PDF
- Información del estudiante y período
- Tabla de asignaturas con calificaciones desglosadas
- Promedio general y observaciones
- Opción de descarga en PDF

### 7.4 Consideraciones de Accesibilidad

- Contraste adecuado entre texto y fondo (mínimo 4.5:1)
- Navegación por teclado en todos los componentes interactivos
- Etiquetas descriptivas en campos de formulario
- Textos alternativos en elementos visuales
- Mensajes de error asociados a campos específicos

### 7.5 Documentación Complementaria

Los siguientes documentos serán elaborados durante la fase de diseño:
- Guía de estilos UI (Style Guide)
- Biblioteca de componentes reutilizables
- Wireframes de alta fidelidad por cada pantalla principal
- Prototipos interactivos para validación con usuarios

---

---

## 8. Restricciones y Supuestos

### 8.1 Restricciones Técnicas
- Framework de desarrollo: Laravel 13.x con PHP 8.3+
- Sistema Gestor de Base de Datos: PostgreSQL 16.x o superior
- Frontend: Blade Templates + Tailwind CSS 3.x
- Entorno de hosting: Servidor Linux (Ubuntu 22.04 LTS o superior) con mínimo 4GB RAM
- No se contempla desarrollo de aplicación móvil nativa en esta versión

### 8.2 Restricciones Operativas
- Sistema single-tenant: una instalación independiente por institución educativa
- El sistema operará en modalidad on-premise o cloud según preferencia de la institución
- Respaldo de base de datos: diario, con retención mínima de 30 días
- Ventanas de mantenimiento: máximo 4 horas mensuales en horario no lectivo

### 8.3 Restricciones de Negocio
- Sistema de calificación configurable: escala decimal (1.0-5.0) o entera (0-100) según normativa institucional
- Estructura de períodos académicos configurable: bimestral, trimestral o semestral
- Idioma del sistema: español colombiano
- Cumplimiento obligatorio de normativas colombianas de protección de datos

### 8.4 Supuestos Técnicos
- La institución cuenta con infraestructura de red local (LAN) o inalámbrica (Wi-Fi) estable
- Los dispositivos de usuario (computadores, tablets) tienen navegadores web actualizados
- Existe personal técnico o proveedor de soporte para tareas de administración del servidor
- La institución cuenta con servicio de internet con ancho de banda adecuado (mínimo 10 Mbps)

### 8.5 Supuestos del Negocio
- La estructura organizacional de la institución sigue el modelo tradicional colombiano (grados, grupos, jornadas)
- El personal administrativo y docente posee competencias básicas en el uso de aplicaciones web
- La institución proporcionará los datos iniciales necesarios (estudiantes, docentes, estructura académica)
- Existe compromiso institucional para la adopción y uso continuo del sistema

---

---

## 9. Criterios de Aceptación del Sistema

### 9.1 Criterios Funcionales

El sistema SMS-EDUCOL se considera funcionalmente completo cuando cumple con los siguientes criterios:

**1. Autenticación y Gestión de Usuarios:**
- Sistema de login, logout y recuperación de contraseña operativo
- Implementación completa de roles y permisos (Superadministrador, Administrador, Docente, Estudiante)
- Gestión CRUD funcional para estudiantes y docentes
- Mínimo 50 registros de estudiantes y 10 de docentes en ambiente de pruebas

**2. Configuración Académica:**
- Creación y gestión de año lectivo con períodos académicos
- Configuración de estructura de grados (mínimo 6 grados)
- Creación de grupos por grado (mínimo 2 grupos por grado)
- Catálogo de asignaturas operativo (mínimo 8 asignaturas)
- Sistema de asignación de asignaturas a grados funcional
- Asignación de carga académica (docente-asignatura-grupo) operativa (mínimo 10 asignaciones)

**3. Gestión de Matrículas:**
- Proceso completo de matrícula de estudiantes funcional
- Validación de capacidad máxima de grupos operativa
- Consultas y filtros de matrículas por diferentes criterios
- Mínimo 100 matrículas activas en ambiente de pruebas

**4. Control de Asistencia:**
- Registro de asistencia por asignatura y fecha funcional
- Soporte para estados: Presente, Ausente, Tardanza, Justificado
- Consultas y reportes de asistencia operativos
- Cálculo automático de estadísticas de asistencia
- Mínimo 20 días de registros de asistencia en ambiente de pruebas

**5. Gestión de Calificaciones:**
- Configuración de tipos de evaluación con porcentajes
- Registro de calificaciones por estudiante, asignatura y período
- Cálculo automático de promedios (por asignatura, por período, anual)
- Generación de boletines de calificaciones en formato PDF
- Mínimo 50 registros de calificaciones en ambiente de pruebas

**6. Reportes y Consultas:**
- Reporte de estudiantes con filtros y exportación (Excel/PDF)
- Reporte de asistencia con estadísticas
- Reporte de rendimiento académico por grupo/estudiante
- Dashboard con estadísticas generales del sistema

### 9.2 Criterios No Funcionales

**Rendimiento:**
- Tiempo de carga de páginas: máximo 3 segundos en condiciones normales
- Tiempo de generación de reportes: máximo 5 segundos para reportes estándar
- Soporte mínimo de 50 usuarios concurrentes sin degradación significativa

**Seguridad:**
- Todas las rutas protegidas según roles y permisos
- Contraseñas encriptadas con algoritmo bcrypt
- Protección CSRF activa en todos los formularios
- Validación de entrada en cliente y servidor
- Registro de auditoría para acciones críticas (creación, edición, eliminación)

**Usabilidad:**
- Interfaz responsive funcional en dispositivos desktop, tablet y móvil
- Mensajes de error y confirmación claros en español
- Confirmación obligatoria para acciones destructivas
- Feedback visual de operaciones en progreso

**Disponibilidad:**
- Sistema operativo sin errores críticos
- Mecanismo de respaldo de base de datos configurado
- Logs de errores y actividad del sistema funcionales

### 9.3 Documentación Requerida

El proyecto incluye la siguiente documentación:

- [x] Software Requirements Specification (SRS) - Este documento
- [ ] Manual de Instalación y Configuración
- [ ] Manual de Usuario por perfil (Administrador, Docente, Estudiante)
- [ ] Documentación técnica de API (si aplica)
- [ ] Guía de mantenimiento y soporte

### 9.4 Entregables del Proyecto

**Código Fuente:**
- Repositorio Git con historial completo de commits
- Código documentado según estándares PSR-12
- Estructura de carpetas organizada según arquitectura definida

**Base de Datos:**
- Script de creación de esquema completo
- Seeders para datos de prueba
- Procedimientos de migración documentados

**Entorno de Pruebas:**
- Sistema desplegado en ambiente de pruebas accesible
- Datos de prueba precargados
- Credenciales de acceso para diferentes roles

**Pruebas:**
- Tests unitarios de funcionalidades críticas (cobertura mínima: 60%)
- Tests de integración de flujos principales
- Reporte de pruebas ejecutadas

---

---

## 10. Planificación y Cronograma

### 10.1 Fases del Proyecto

El desarrollo de SMS-EDUCOL se estructura en las siguientes fases principales:

| Fase | Descripción | Entregables Principales |
|------|-------------|------------------------|
| **Fase 1: Análisis y Diseño** | Refinamiento de requisitos, diseño de arquitectura, diseño de base de datos, diseño de interfaces | Documento de arquitectura, Modelo ER detallado, Wireframes, Especificaciones técnicas |
| **Fase 2: Implementación Core** | Desarrollo de módulos de autenticación, gestión de usuarios y configuración académica | Módulos funcionales, Tests unitarios |
| **Fase 3: Implementación Académica** | Desarrollo de módulos de matrícula, asistencia y calificaciones | Módulos funcionales, Tests de integración |
| **Fase 4: Reportes y Dashboard** | Desarrollo de módulo de reportes, dashboard y exportaciones | Sistema de reportes completo |
| **Fase 5: Pruebas y Refinamiento** | Testing integral, corrección de bugs, optimización de rendimiento | Reporte de pruebas, Sistema estabilizado |
| **Fase 6: Documentación y Despliegue** | Elaboración de manuales, capacitación, puesta en producción | Documentación completa, Sistema en producción |

### 10.2 Estimación de Esfuerzo

**Nota**: La estimación detallada de tiempos será determinada durante la planificación del proyecto considerando:
- Tamaño y experiencia del equipo de desarrollo
- Disponibilidad de recursos
- Complejidad de integraciones requeridas
- Alcance de personalización institucional

**Estimación preliminar**: 10-14 semanas para versión inicial funcional con un equipo de 2-3 desarrolladores.

### 10.3 Hitos del Proyecto

Los siguientes hitos marcan puntos críticos de validación:

1. **Hito 1 - Diseño Aprobado**: Arquitectura, modelo de datos y diseños de interfaz validados por stakeholders
2. **Hito 2 - Módulos Core Funcionales**: Autenticación, usuarios y configuración académica operativos
3. **Hito 3 - Módulos Académicos Completos**: Matrícula, asistencia y calificaciones funcionales
4. **Hito 4 - Sistema Integrado**: Todos los módulos integrados y funcionando conjuntamente
5. **Hito 5 - Aceptación de Usuario**: Sistema validado por usuarios representativos de cada perfil
6. **Hito 6 - Puesta en Producción**: Sistema desplegado y operativo en ambiente productivo

---

---

## Apéndices

### A. Glosario de Términos

- **Acudiente**: Persona responsable legal del estudiante (padre, madre o tutor legal)
- **Año Lectivo**: Período académico anual durante el cual se desarrollan las actividades educativas
- **Asignación de Carga Académica**: Relación que establece qué docente imparte una asignatura específica en un grupo determinado
- **Asignatura**: Materia o área de conocimiento incluida en el plan de estudios
- **Boletín de Calificaciones**: Documento oficial que consolida las calificaciones de un estudiante por período académico
- **Carga Académica**: Conjunto de asignaturas y grupos asignados a un docente
- **Director de Grupo**: Docente responsable del seguimiento y orientación de un grupo específico
- **Docente**: Profesional encargado de impartir una o más asignaturas
- **Grado**: Nivel educativo dentro de la estructura del sistema educativo colombiano (1°, 2°, 3°, etc.)
- **Grupo**: División de estudiantes dentro de un mismo grado (Grupo A, Grupo B, etc.)
- **Jornada**: Horario en que se desarrollan las actividades académicas (mañana, tarde, completa, nocturna, fin de semana)
- **Matrícula**: Proceso formal de inscripción de un estudiante en la institución educativa
- **Período Académico**: Subdivisión del año lectivo (bimestre, trimestre o semestre)
- **Soft Delete**: Eliminación lógica de registros que los mantiene en base de datos marcados como eliminados

### B. Referencias Técnicas

- **Laravel Framework Documentation v13.x**: https://laravel.com/docs/13.x
- **PostgreSQL 16 Documentation**: https://www.postgresql.org/docs/16/
- **Tailwind CSS Documentation**: https://tailwindcss.com/docs
- **PHP Standards Recommendations (PSR-12)**: https://www.php-fig.org/psr/psr-12/
- **ISO/IEC 25010:2011** - Systems and Software Quality Requirements and Evaluation (SQuaRE)

### C. Referencias Regulatorias (Colombia)

- **Ley 1581 de 2012**: Protección de Datos Personales
- **Decreto 1075 de 2015**: Decreto Único Reglamentario del Sector Educación
- **Ley 115 de 1994**: Ley General de Educación
- Normativas del Ministerio de Educación Nacional de Colombia: https://www.mineducacion.gov.co

### D. Acrónimos y Abreviaturas

- **API**: Application Programming Interface
- **CC**: Cédula de Ciudadanía
- **CE**: Cédula de Extranjería
- **CRUD**: Create, Read, Update, Delete
- **CSRF**: Cross-Site Request Forgery
- **ER**: Entidad-Relación
- **FK**: Foreign Key (Clave Foránea)
- **HTTPS**: HyperText Transfer Protocol Secure
- **LMS**: Learning Management System
- **MEN**: Ministerio de Educación Nacional
- **PDF**: Portable Document Format
- **PEI**: Proyecto Educativo Institucional
- **PSR**: PHP Standards Recommendation
- **SIMAT**: Sistema Integrado de Matrícula
- **SMS-EDUCOL**: Sistema de Manejo Escolar Educativo de Colombia
- **SQL**: Structured Query Language
- **SRS**: Software Requirements Specification
- **TI**: Tarjeta de Identidad
- **UI**: User Interface
- **UX**: User Experience
- **WCAG**: Web Content Accessibility Guidelines

---

**Fin del documento SRS SMS-EDUCOL v1.0**

**Fecha de elaboración**: Abril 3, 2026  
**Elaborado por**: Equipo de Ingeniería de Software  
**Estado**: Versión aprobada para desarrollo

---

## 11. Guía de implementación técnica (resumen conciso)

11.1 Especificación de API (resumen)
- Auth: `POST /api/login`, `POST /api/logout`, `POST /api/password/forgot`, `POST /api/password/reset`.
- Usuarios: `GET /api/users`, `POST /api/users`, `GET /api/users/{id}`, `PUT /api/users/{id}`, `DELETE /api/users/{id}`.
- Estudiantes/Docentes: rutas CRUD separadas (`/api/students`, `/api/teachers`).
- Matrículas: `GET/POST /api/enrollments` y endpoints para estados (retirar/trasladar).
- Asistencia: `GET/POST /api/attendances` (por asignación y fecha).
- Calificaciones: `GET/POST /api/grade-records` y cálculo de promedios `GET /api/grades/summary`.

11.2 Diccionario de datos (qué añadir)
- Incluir para cada tabla: columna, tipo, not null, unique, índices sugeridos y ejemplo de valor.
- Referenciar [SMS_EDUCOL_DIAGRAM.dbml](SMS_EDUCOL_DIAGRAM.dbml) como fuente canonical.

11.3 Pruebas y criterios (conciso)
- Unitarias: modelos y servicios críticos (auth, enrollments, grade calculations).
- Integración: flujos clave (login → matricular → registrar asistencia → registrar calificación).
- E2E: casos de uso CU-01 a CU-05. Definir datos de prueba y pasos automatizables.
- Cobertura mínima objetivo: 60% unitarias; pruebas de integración para flujos críticos.

11.4 Seguridad y cumplimiento (acciones concretas)
- Contraseñas: bcrypt, cost >= 10. HTTPS obligatorio en prod.
- RBAC: permisos por rol y middleware de autorización en API.
- Logs y auditoría: registrar create/update/delete en entidades críticas.
- Protección de datos: políticas de retención, encriptación de campos sensibles y acceso restringido según Ley 1581.

11.5 Migraciones, seeds y datos de prueba
- Migraciones ordenadas por dominio (users, academic, enrollments, records).
- Seeds para: 1 admin, 5 docentes, 50 estudiantes, 6 grados, 2 grupos por grado, 8 asignaturas.
- Script `db:seed --env=local` para desarrollo.

11.6 Arquitectura, despliegue y CI/CD (mínimos)
- Stack: Laravel 13 + PHP 8.3, PostgreSQL 16, Nginx o Apache, Redis (cache/queues).
- CI: pipeline en GitHub Actions o GitLab CI con pasos: lint, tests, build assets, migraciones en staging.
- Backups: snapshot diario de base de datos y retención 30 días.

11.7 UI / Wireframes (entregables)
- Entregar wireframes de: Dashboard, Gestión Estudiantes, Registro Asistencia, Registro Calificaciones, Boletín.
- Especificar componentes reusables (tabla paginada, selector de asignación, modal de confirmación).

11.8 Roadmap corto (3 sprints iniciales)
- Sprint 1 (2 semanas): Auth, modelos usuarios, migraciones, seeds, endpoints básicos.
- Sprint 2 (2 semanas): Gestión estudiantes/docentes, UI básica, tests unitarios.
- Sprint 3 (2 semanas): Matrículas, asistencia, calificaciones y pruebas de integración.

---

**Fin del documento SRS SMS-EDUCOL v1.0 (ampliado)**

**Fecha de elaboración**: Abril 3, 2026
**Elaborado por**: Equipo de Ingeniería de Software
**Estado**: Versión ampliada para desarrollo

