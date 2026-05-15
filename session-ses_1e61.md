# Qué es este proyecto Laravel

**Session ID:** ses_1e6191d9dffeuigGK6eX0kNOuD
**Created:** 11/5/2026, 20:57:02
**Updated:** 12/5/2026, 23:06:59

---

## User

Puedes decirme de que se trata este proyecto de laravel

---

## Assistant (Build · MiniMax M2.5 Free · 11.5s)

_Thinking:_

El usuario quiere saber de qué se trata este proyecto Laravel. Debo explorar el proyecto para entender su propósito. Voy a buscar archivos como README.md, composer.json, y la estructura del proyecto para entender de qué se trata.







**Tool: glob**

**Input:**
```json
{
  "pattern": "*.md"
}
```

**Output:**
```
C:\Cursos\php\sms\.agents\skills\tailwindcss-development\SKILL.md
C:\Cursos\php\sms\.agents\skills\pest-testing\SKILL.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\SKILL.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\validation.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\testing.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\style.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\security.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\scheduling.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\routing.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\queue-jobs.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\migrations.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\mail.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\http-client.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\events-notifications.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\error-handling.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\eloquent.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\db-performance.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\config.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\collections.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\caching.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\blade-views.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\architecture.md
C:\Cursos\php\sms\.agents\skills\laravel-best-practices\rules\advanced-queries.md
C:\Cursos\php\sms\GEMINI.md
C:\Cursos\php\sms\.deepseek\instructions.md
C:\Cursos\php\sms\docs\SMS_EDUCOL_SRS.md
C:\Cursos\php\sms\docs\SMS_EDUCOL_SAD.md
C:\Cursos\php\sms\README.md
```

**Tool: glob**

**Input:**
```json
{
  "pattern": "composer.json"
}
```

**Output:**
```
C:\Cursos\php\sms\composer.json
```

---

## Assistant (Build · MiniMax M2.5 Free · 6.9s)

_Thinking:_

Encontré un README.md y archivos de documentación en docs/. También hay un archivo composer.json. Voy a leer el README.md y los archivos de documentación para entender de qué se trata el proyecto.







**Tool: read**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\README.md"
}
```

**Output:**
```
<path>C:\Cursos\php\sms\README.md</path>
<type>file</type>
<content>
1: <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
2: 
3: <p align="center">
4: <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
5: <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
6: <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
7: <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
8: </p>
9: 
10: ## About Laravel
11: 
12: Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:
13: 
14: - [Simple, fast routing engine](https://laravel.com/docs/routing).
15: - [Powerful dependency injection container](https://laravel.com/docs/container).
16: - Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
17: - Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
18: - Database agnostic [schema migrations](https://laravel.com/docs/migrations).
19: - [Robust background job processing](https://laravel.com/docs/queues).
20: - [Real-time event broadcasting](https://laravel.com/docs/broadcasting).
21: 
22: Laravel is accessible, powerful, and provides tools required for large, robust applications.
23: 
24: ## Learning Laravel
25: 
26: Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.
27: 
28: In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
29: 
30: You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.
31: 
32: ## Agentic Development
33: 
34: Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:
35: 
36: ```bash
37: composer require laravel/boost --dev
38: 
39: php artisan boost:install
40: ```
41: 
42: Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.
43: 
44: ## Contributing
45: 
46: Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).
47: 
48: ## Code of Conduct
49: 
50: In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).
51: 
52: ## Security Vulnerabilities
53: 
54: If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.
55: 
56: ## License
57: 
58: The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

(End of file - total 58 lines)
</content>
```

---

## Assistant (Build · MiniMax M2.5 Free · 3.7s)

_Thinking:_

El README.md parece ser el README genérico de Laravel. Debo revisar la documentación del proyecto (en docs/) para entender de qué se trata específicamente. También veo que hay archivos como SMS_EDUCOL_SRS.md y SMS_EDUCOL_SAD.md que probablemente contienen la especificación del proyecto.






El README es genérico. Déjame revisar la documentación específica del proyecto:


**Tool: read**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\docs\\SMS_EDUCOL_SRS.md"
}
```

**Output:**
```
<path>C:\Cursos\php\sms\docs\SMS_EDUCOL_SRS.md</path>
<type>file</type>
<content>
1: # Software Requirements Specification (SRS)
2: ## SMS-EDUCOL - Sistema de Gestión Escolar
3: 
4: **Versión:** 1.0  
5: **Fecha:** Abril 3, 2026  
6: **Preparado por:** Equipo de Ingeniería de Software  
7: **Proyecto:** SMS-EDUCOL (Sistema de Manejo Escolar Educativo de Colombia)
8: 
9: ---
10: 
11: ## Tabla de Contenidos
12: 
13: 1. [Introducción](#1-introducción)
14: 2. [Descripción General](#2-descripción-general)
15: 3. [Requisitos Funcionales del MVP](#3-requisitos-funcionales-del-mvp)
16: 4. [Requisitos No Funcionales](#4-requisitos-no-funcionales)
17: 5. [Casos de Uso](#5-casos-de-uso)
18: 6. [Modelo de Datos](#6-modelo-de-datos)
19: 7. [Interfaces de Usuario](#7-interfaces-de-usuario)
20: 8. [Restricciones y Supuestos](#8-restricciones-y-supuestos)
21: 9. [Criterios de Aceptación](#9-criterios-de-aceptación)
22: 
23: ---
24: 
25: ## 1. Introducción
26: 
27: ### 1.1 Propósito
28: Este documento especifica los requisitos funcionales y no funcionales para el desarrollo del Sistema de Gestión Escolar SMS-EDUCOL. El sistema está diseñado para automatizar y optimizar los procesos administrativos y académicos de instituciones educativas de nivel básico y medio en Colombia.
29: 
30: El presente SRS tiene como objetivo establecer un entendimiento común entre los stakeholders del proyecto (desarrolladores, gerentes de proyecto, usuarios finales y personal administrativo) sobre las funcionalidades, restricciones y características técnicas del sistema.
31: 
32: ### 1.2 Alcance del Sistema
33: SMS-EDUCOL es una aplicación web diseñada para gestionar los procesos fundamentales de una institución educativa colombiana. El sistema centraliza la información académica y administrativa, facilitando la toma de decisiones y mejorando la eficiencia operativa.
34: 
35: **Funcionalidades incluidas en la versión inicial:**
36: - Gestión integral de usuarios (estudiantes, docentes, personal administrativo)
37: - Configuración y administración de la estructura académica (años lectivos, períodos, grados, grupos, asignaturas)
38: - Gestión del proceso de matrícula e inscripciones
39: - Registro y seguimiento de asistencia
40: - Administración de calificaciones y evaluaciones
41: - Generación de reportes académicos y administrativos
42: 
43: **Funcionalidades previstas para versiones futuras:**
44: - Módulo financiero y de tesorería (gestión de pagos, matrículas, mensualidades)
45: - Sistema de biblioteca
46: - Portal de comunicación para padres de familia
47: - Sistema de mensajería interna
48: - Aplicación móvil complementaria
49: - Integración con plataformas de aprendizaje virtual (LMS)
50: 
51: ### 1.3 Definiciones, Acrónimos y Abreviaturas
52: - **SMS-EDUCOL**: Sistema de Manejo Escolar Educativo de Colombia
53: - **CRUD**: Create, Read, Update, Delete (Crear, Leer, Actualizar, Eliminar)
54: - **SRS**: Software Requirements Specification (Especificación de Requisitos de Software)
55: - **Año Lectivo**: Período académico anual en el cual se desarrollan las actividades educativas
56: - **Período Académico**: Subdivisión del año lectivo (bimestre, trimestre, semestre)
57: - **Grado**: Nivel educativo según la estructura del sistema educativo colombiano (1°, 2°, 3°, etc.)
58: - **Grupo**: División de estudiantes dentro de un mismo grado (Grupo A, Grupo B, Grupo C)
59: - **Asignatura**: Materia o área de conocimiento que se imparte en la institución
60: - **Docente**: Profesional encargado de impartir una o más asignaturas
61: - **Matrícula**: Proceso de inscripción formal de un estudiante en la institución educativa
62: - **Acudiente**: Persona responsable legal del estudiante (padre, madre o tutor)
63: 
64: ### 1.4 Referencias
65: - Laravel Framework Documentation v13.x - https://laravel.com/docs
66: - PostgreSQL 16 Documentation - https://www.postgresql.org/docs/16/
67: - ISO/IEC 25010:2011 - Systems and Software Quality Requirements and Evaluation (SQuaRE)
68: - Ministerio de Educación Nacional de Colombia - Normativa Educativa Vigente
69: 
70: ---
71: 
72: ## 2. Descripción General
73: 
74: ### 2.1 Perspectiva del Producto
75: SMS-EDUCOL es un sistema de información web autónomo, desarrollado específicamente para satisfacer las necesidades de gestión académica y administrativa de instituciones educativas colombianas. El sistema está diseñado bajo una arquitectura cliente-servidor, utilizando tecnologías web modernas que garantizan accesibilidad desde cualquier dispositivo con navegador web.
76: 
77: El sistema opera de forma independiente, sin requerir integración obligatoria con otros sistemas externos en su fase inicial. No obstante, su arquitectura modular permite futuras integraciones con:
78: - Sistemas del Ministerio de Educación Nacional (SIMAT, DUE)
79: - Plataformas de pago electrónico
80: - Sistemas de gestión de aprendizaje (LMS)
81: - Servicios de mensajería y notificaciones
82: 
83: SMS-EDUCOL está orientado a instituciones educativas de tamaño pequeño a mediano, con una capacidad operativa de 50 a 1000 estudiantes, abarcando educación básica primaria, básica secundaria y media.
84: 
85: ### 2.2 Funciones Principales del Sistema
86: 1. **Autenticación y Control de Acceso**: Sistema robusto de autenticación con control de permisos basado en roles, garantizando la seguridad y privacidad de la información.
87: 
88: 2. **Gestión de Estudiantes y Docentes**: Administración centralizada de la información personal, académica y de contacto de estudiantes y personal docente.
89: 
90: 3. **Configuración de Estructura Académica**: Definición y administración de años lectivos, períodos académicos, grados, grupos y asignaturas según las necesidades institucionales.
91: 
92: 4. **Control de Asistencia**: Registro diario de asistencia con múltiples estados (presente, ausente, tardanza, justificado) y generación de reportes estadísticos.
93: 
94: 5. **Gestión de Calificaciones**: Sistema configurable de registro, cálculo y consulta de calificaciones, adaptable a diferentes sistemas de evaluación.
95: 
96: 6. **Generación de Reportes**: Herramientas de reporting para obtener información académica y administrativa en formatos digitales y exportables.
97: 
98: ### 2.3 Perfiles de Usuario
99: 
100: El sistema identifica cuatro perfiles principales de usuario, cada uno con privilegios y funcionalidades específicas:
101: 
102: | Perfil | Descripción | Competencias Técnicas Requeridas |
103: |--------|-------------|----------------------------------|
104: | **Superadministrador** | Responsable de la configuración global del sistema, gestión de usuarios administrativos y mantenimiento técnico. | Competencias intermedias en uso de sistemas informáticos |
105: | **Administrador Escolar** | Encargado de la operación diaria del sistema: gestión académica, matrículas, reportes y configuración de períodos lectivos. | Competencias básicas en uso de aplicaciones web |
106: | **Docente** | Responsable del registro de asistencia y calificaciones de las asignaturas asignadas. Consulta de información de estudiantes. | Competencias básicas en navegación web y manejo de formularios |
107: | **Estudiante** | Usuario final con acceso de solo lectura a su información académica personal: calificaciones, asistencia y datos de matrícula. | Competencias básicas en navegación web |
108: 
109: **Nota**: El perfil de "Acudiente" (padre/madre/tutor) está previsto para versiones futuras del sistema.
110: 
111: ### 2.4 Restricciones Técnicas y Operativas
112: 
113: **Restricciones de Software:**
114: - El sistema debe ser compatible con navegadores web modernos: Google Chrome (v120+), Mozilla Firefox (v120+), Safari (v17+), Microsoft Edge (v120+)
115: - Base de datos: PostgreSQL 16.x o superior
116: - Servidor de aplicaciones: PHP 8.3+ con framework Laravel 13.x
117: - Servidor web: Apache 2.4+ o Nginx 1.24+
118: 
119: **Restricciones de Rendimiento:**
120: - Tiempo de respuesta menor a 3 segundos para operaciones de consulta estándar
121: - Tiempo de respuesta menor a 5 segundos para generación de reportes complejos
122: - Capacidad de soporte para mínimo 100 usuarios concurrentes
123: 
124: **Restricciones de Disponibilidad:**
125: - Disponibilidad del sistema: 99.5% del tiempo durante período lectivo (excluyendo ventanas de mantenimiento programado)
126: - Mantenimiento programado: máximo 4 horas mensuales, preferiblemente en horario no lectivo
127: 
128: **Restricciones Regulatorias:**
129: - Cumplimiento de la Ley 1581 de 2012 (Protección de Datos Personales en Colombia)
130: - Cumplimiento de normativas del Ministerio de Educación Nacional de Colombia
131: 
132: ### 2.5 Supuestos y Dependencias
133: 
134: **Supuestos del Sistema:**
135: - La institución educativa cuenta con infraestructura de red (LAN/Wi-Fi) estable y funcional
136: - Los usuarios tienen acceso regular a dispositivos con navegador web (computadores, tablets)
137: - La institución sigue la estructura académica tradicional del sistema educativo colombiano (grados y grupos)
138: - El sistema de evaluación institucional es de carácter numérico en escala de 1.0 a 5.0 (decimal) o de 0 a 100 (entero)
139: - El año lectivo se divide en períodos académicos (bimestres, trimestres o semestres)
140: - El personal administrativo y docente posee competencias básicas en el uso de aplicaciones web
141: 
142: **Dependencias Externas:**
143: - Disponibilidad de servicio de internet para acceso al sistema
144: - Disponibilidad de servidor de correo electrónico (SMTP) para notificaciones
145: - Servicio de hosting web con capacidad para alojar aplicaciones PHP/Laravel
146: - Servicio de base de datos PostgreSQL
147: 
148: **Dependencias de Datos:**
149: - Información institucional básica (nombre, logo, datos de contacto)
150: - Estructura de grados según el Proyecto Educativo Institucional (PEI)
151: - Catálogo de asignaturas por grado
152: - Información personal de estudiantes y docentes (proporcionada por la institución)
153: 
154: ---
155: 
156: ## 3. Requisitos Funcionales
157: 
158: Los requisitos funcionales describen las funcionalidades específicas que el sistema SMS-EDUCOL debe proporcionar. Cada requisito se identifica con un código único (RF-XX.X) y se especifica su prioridad de implementación.
159: 
160: ### RF-01: Módulo de Autenticación
161: 
162: #### RF-01.1: Login de Usuario
163: **Prioridad:** Alta  
164: **Descripción:** Los usuarios deben poder iniciar sesión con credenciales válidas.
165: 
166: **Criterios de Aceptación:**
167: - El sistema valida email y contraseña
168: - Redirección al dashboard según rol después del login
169: - Mensaje de error para credenciales inválidas
170: - Protección contra fuerza bruta (máximo 5 intentos en 5 minutos)
171: 
172: #### RF-01.2: Recuperación de Contraseña
173: **Prioridad:** Media  
174: **Descripción:** Los usuarios pueden recuperar su contraseña vía email.
175: 
176: **Criterios de Aceptación:**
177: - Envío de link de recuperación al email registrado
178: - Link válido por 60 minutos
179: - Cambio exitoso de contraseña
180: 
181: #### RF-01.3: Gestión de Sesiones
182: **Prioridad:** Alta  
183: **Descripción:** Control de sesiones activas de usuarios.
184: 
185: **Criterios de Aceptación:**
186: - Cierre de sesión manual
187: - Cierre automático tras 120 minutos de inactividad
188: - Solo una sesión activa por usuario
189: 
190: ---
191: 
192: ### RF-02: Módulo de Gestión de Usuarios
193: 
194: #### RF-02.1: Gestión de Estudiantes
195: **Prioridad:** Alta  
196: **Descripción:** El sistema debe permitir a los usuarios con perfil de Administrador realizar operaciones completas de gestión (creación, consulta, modificación y eliminación) sobre los registros de estudiantes.
197: 
198: **Información requerida del estudiante:**
199: - Datos de identificación: tipo de documento (TI, CC, CE), número de documento, nombres completos, apellidos completos
200: - Datos personales: fecha de nacimiento, género, grupo sanguíneo (opcional)
201: - Datos de contacto: dirección de residencia, teléfono, correo electrónico (opcional)
202: - Datos académicos: código de estudiante (generado automáticamente por el sistema)
203: - Fotografía (opcional, formato JPG/PNG, máximo 2MB)
204: 
205: **Criterios de Aceptación:**
206: - El sistema debe validar la unicidad del número de documento de identidad
207: - El código de estudiante debe generarse automáticamente siguiendo un formato configurable
208: - El sistema debe permitir búsquedas por nombre, apellido, número de documento o código de estudiante
209: - La visualización de listados debe ser paginada (configurable, por defecto 20 registros por página)
210: - Las eliminaciones deben ser lógicas (soft delete), preservando el registro en la base de datos
211: - El correo electrónico, cuando se proporcione, debe ser único en el sistema
212: - El sistema debe validar el formato de los datos ingresados (email, teléfono, fecha de nacimiento)
213: 
214: #### RF-02.2: Gestión de Docentes
215: **Prioridad:** Alta  
216: **Descripción:** El sistema debe permitir a los usuarios con perfil de Administrador realizar operaciones completas de gestión sobre los registros del personal docente.
217: 
218: **Información requerida del docente:**
219: - Datos de identificación: tipo de documento (CC, CE), número de documento, nombres completos, apellidos completos
220: - Datos personales: fecha de nacimiento, género
221: - Datos de contacto: teléfono, correo electrónico institucional
222: - Datos laborales: código de empleado (generado automáticamente), área de especialidad, título profesional
223: - Fotografía (opcional, formato JPG/PNG, máximo 2MB)
224: 
225: **Criterios de Aceptación:**
226: - El sistema debe validar la unicidad del número de documento de identidad
227: - El código de empleado debe generarse automáticamente siguiendo un formato configurable
228: - El sistema debe permitir búsquedas por nombre, apellido, número de documento o código de empleado
229: - La visualización de listados debe ser paginada
230: - Las eliminaciones deben ser lógicas (soft delete)
231: - El correo electrónico debe ser único en el sistema
232: - El sistema debe permitir asociar múltiples áreas de especialidad a un docente
233: 
234: #### RF-02.3: Gestión de Perfiles
235: **Prioridad:** Media  
236: **Descripción:** Usuarios pueden ver y editar su propio perfil.
237: 
238: **Criterios de Aceptación:**
239: - Ver información personal
240: - Editar información de contacto
241: - Cambiar contraseña
242: - Subir/cambiar foto de perfil
243: 
244: ---
245: 
246: ### RF-03: Módulo de Configuración Académica
247: 
248: #### RF-03.1: Gestión de Años Lectivos
249: **Prioridad:** Alta  
250: **Descripción:** El sistema debe permitir a los Administradores configurar y gestionar los años lectivos de la institución educativa.
251: 
252: **Información requerida:**
253: - Nombre o identificador del año lectivo (ej: "2026", "2026-2027")
254: - Fecha de inicio del año lectivo
255: - Fecha de finalización del año lectivo
256: - Estado (Activo/Inactivo)
257: 
258: **Criterios de Aceptación:**
259: - El sistema debe permitir tener solo un año lectivo en estado activo simultáneamente
260: - El sistema debe validar que las fechas de diferentes años lectivos no se solapen
261: - El sistema debe proporcionar funcionalidad CRUD completa para años lectivos
262: - Al desactivar un año lectivo, el sistema debe solicitar confirmación
263: - El sistema debe advertir si existen períodos, grupos o matrículas asociadas antes de permitir la eliminación
264: 
265: #### RF-03.2: Gestión de Períodos Académicos
266: **Prioridad:** Alta  
267: **Descripción:** Administradores configuran períodos (bimestres/trimestres).
268: 
269: **Datos requeridos:**
270: - Nombre (ej: "1er Bimestre")
271: - Fecha de inicio y fin
272: - Año académico asociado
273: - Orden (1, 2, 3, 4)
274: 
275: **Criterios de Aceptación:**
276: - Los períodos pertenecen a un año académico
277: - Las fechas están dentro del año académico
278: - No se solapan fechas entre períodos del mismo año
279: - CRUD completo de períodos
280: 
281: #### RF-03.3: Gestión de Grados
282: **Prioridad:** Alta  
283: **Descripción:** Administradores configuran los grados/niveles educativos.
284: 
285: **Datos requeridos:**
286: - Nombre (ej: "1° Básico", "7° Grado")
287: - Nivel educativo (Primaria/Secundaria)
288: - Orden (1, 2, 3...)
289: 
290: **Criterios de Aceptación:**
291: - CRUD completo de grados
292: - Listado ordenado por nivel y orden
293: 
294: #### RF-03.4: Gestión de Grupos
295: **Prioridad:** Alta  
296: **Descripción:** El sistema debe permitir a los Administradores crear y gestionar grupos para cada grado en un año lectivo específico.
297: 
298: **Información requerida:**
299: - Grado al que pertenece el grupo
300: - Identificador del grupo (ej: "A", "B", "C", "1", "2")
301: - Año lectivo asociado
302: - Capacidad máxima de estudiantes
303: - Docente director de grupo (opcional)
304: - Jornada (Mañana/Tarde/Completa/Nocturna/Fin de semana)
305: 
306: **Criterios de Aceptación:**
307: - El sistema debe proporcionar funcionalidad CRUD completa para grupos
308: - Un grupo debe pertenecer a un grado y a un año lectivo específico
309: - El sistema debe validar que no se exceda la capacidad máxima al inscribir estudiantes
310: - El sistema debe permitir asignar un docente como director de grupo
311: - El identificador del grupo debe ser único dentro del mismo grado y año lectivo
312: - El sistema debe mostrar estadísticas del grupo (estudiantes inscritos, cupos disponibles)
313: 
314: #### RF-03.5: Gestión de Asignaturas
315: **Prioridad:** Alta  
316: **Descripción:** Administradores configuran asignaturas/materias.
317: 
318: **Datos requeridos:**
319: - Nombre (ej: "Matemáticas", "Historia")
320: - Código (ej: "MAT-101")
321: - Descripción
322: - Horas semanales
323: 
324: **Criterios de Aceptación:**
325: - CRUD completo de asignaturas
326: - Código único por asignatura
327: 
328: #### RF-03.6: Asignación de Asignaturas a Grados
329: **Prioridad:** Alta  
330: **Descripción:** Administradores asocian asignaturas a grados específicos.
331: 
332: **Criterios de Aceptación:**
333: - Asignar múltiples asignaturas a un grado
334: - Ver asignaturas por grado
335: - Remover asignaciones
336: 
337: #### RF-03.7: Asignación Docente-Asignatura-Grupo (Carga Académica)
338: **Prioridad:** Alta  
339: **Descripción:** El sistema debe permitir a los Administradores asignar docentes para impartir asignaturas específicas en grupos determinados, configurando así la carga académica institucional.
340: 
341: **Información requerida:**
342: - Docente asignado
343: - Asignatura a impartir
344: - Grupo al que se imparte
345: - Año lectivo
346: - Intensidad horaria semanal (opcional)
347: 
348: **Criterios de Aceptación:**
349: - Un docente puede tener múltiples asignaciones (diferentes asignaturas y/o grupos)
350: - Una combinación asignatura-grupo debe tener un único docente asignado por año lectivo
351: - El sistema debe permitir visualizar todas las asignaciones de un docente específico
352: - El sistema debe permitir visualizar todas las asignaciones (docentes y asignaturas) de un grupo
353: - El sistema debe validar que la asignatura esté asociada al grado del grupo
354: - El sistema debe permitir generar reportes de carga académica por docente
355: 
356: ---
357: 
358: ### RF-04: Módulo de Inscripciones
359: 
360: #### RF-04.1: Matrícula de Estudiantes
361: **Prioridad:** Alta  
362: **Descripción:** El sistema debe permitir a los Administradores registrar la matrícula de estudiantes en grupos específicos para un año lectivo.
363: 
364: **Información requerida:**
365: - Estudiante a matricular
366: - Grupo asignado
367: - Año lectivo
368: - Fecha de matrícula (registro automático)
369: - Estado de matrícula (Activo/Retirado/Trasladado)
370: - Observaciones (opcional)
371: 
372: **Criterios de Aceptación:**
373: - El sistema debe validar que el grupo seleccionado no haya alcanzado su capacidad máxima
374: - Un estudiante solo puede tener una matrícula activa por año lectivo
375: - El sistema debe registrar automáticamente la fecha y hora de matrícula
376: - El sistema debe permitir cambiar el estado de matrícula (retirar o trasladar estudiante)
377: - Al retirar un estudiante, el sistema debe solicitar motivo y fecha de retiro
378: - El sistema debe liberar un cupo en el grupo cuando se retira un estudiante
379: - El sistema debe generar un número de matrícula único por estudiante y año lectivo
380: 
381: #### RF-04.2: Consulta de Matrículas
382: **Prioridad:** Media  
383: **Descripción:** El sistema debe proporcionar funcionalidades de consulta y visualización de matrículas con diferentes criterios de filtrado.
384: 
385: **Criterios de Aceptación:**
386: - El sistema debe permitir visualizar el listado completo de estudiantes matriculados por grupo
387: - El sistema debe permitir filtrar matrículas por año lectivo
388: - El sistema debe permitir buscar la matrícula de un estudiante específico
389: - El sistema debe mostrar estadísticas: total matriculados, activos, retirados, trasladados
390: - El sistema debe permitir exportar listados de matrícula en formato Excel y PDF
391: - El sistema debe mostrar el historial de matrículas de un estudiante (años anteriores)
392: 
393: ---
394: 
395: ### RF-05: Módulo de Asistencia
396: 
397: #### RF-05.1: Registro de Asistencia
398: **Prioridad:** Alta  
399: **Descripción:** Docentes registran la asistencia de estudiantes.
400: 
401: **Datos requeridos:**
402: - Asignación (Docente-Asignatura-Grupo)
403: - Fecha
404: - Por cada estudiante: estado (Presente/Ausente/Tardanza/Justificado)
405: - Observaciones (opcional)
406: 
407: **Criterios de Aceptación:**
408: - Un docente solo puede registrar asistencia en sus asignaciones
409: - Solo se puede registrar asistencia una vez por día por asignación
410: - Permitir editar asistencia del mismo día
411: - No se puede registrar asistencia de fechas futuras
412: - Listado automático de estudiantes de la grupo
413: 
414: #### RF-05.2: Consulta de Asistencia
415: **Prioridad:** Media  
416: **Descripción:** Visualizar registros de asistencia.
417: 
418: **Criterios de Aceptación:**
419: - Docentes ven asistencia de sus asignaciones
420: - Administradores ven asistencia de cualquier grupo
421: - Estudiantes ven su propia asistencia
422: - Filtrar por fecha, grupo, asignatura
423: - Ver estadísticas: % asistencia, total ausencias, tardanzas
424: 
425: #### RF-05.3: Justificación de Ausencias
426: **Prioridad:** Baja (Post-MVP)  
427: **Descripción:** Cambiar estado de ausencia a justificada.
428: 
429: **Criterios de Aceptación:**
430: - Solo administradores pueden justificar ausencias
431: - Agregar nota de justificación
432: 
433: ---
434: 
435: ### RF-06: Módulo de Calificaciones
436: 
437: #### RF-06.1: Configuración de Tipos de Evaluación
438: **Prioridad:** Alta  
439: **Descripción:** Administradores configuran tipos de evaluaciones.
440: 
441: **Datos requeridos:**
442: - Nombre (Examen, Tarea, Participación, Proyecto)
443: - Porcentaje de peso en nota final
444: - Asignatura (opcional: global o por asignatura)
445: 
446: **Criterios de Aceptación:**
447: - CRUD de tipos de evaluación
448: - La suma de porcentajes debe ser 100% por asignatura
449: 
450: #### RF-06.2: Registro de Calificaciones
451: **Prioridad:** Alta  
452: **Descripción:** Docentes registran calificaciones de estudiantes.
453: 
454: **Datos requeridos:**
455: - Estudiante
456: - Asignatura (de las asignaciones del docente)
457: - Período académico
458: - Tipo de evaluación
459: - Calificación (0-100)
460: - Fecha de evaluación
461: - Observaciones (opcional)
462: 
463: **Criterios de Aceptación:**
464: - Solo docentes pueden registrar calificaciones en sus asignaturas
465: - Validar rango de calificación (0-100)
466: - Permitir editar calificaciones
467: - No se pueden registrar calificaciones de períodos cerrados
468: 
469: #### RF-06.3: Cálculo Automático de Promedios
470: **Prioridad:** Alta  
471: **Descripción:** El sistema calcula promedios automáticamente.
472: 
473: **Criterios de Aceptación:**
474: - Promedio por asignatura por período (según pesos de tipos de evaluación)
475: - Promedio general del período (todas las asignaturas)
476: - Promedio final del año académico
477: - Actualización automática al registrar/editar calificaciones
478: 
479: #### RF-06.4: Consulta de Calificaciones
480: **Prioridad:** Alta  
481: **Descripción:** Visualizar calificaciones según rol.
482: 
483: **Criterios de Aceptación:**
484: - Docentes ven calificaciones de sus asignaturas
485: - Estudiantes ven sus propias calificaciones
486: - Administradores ven todas las calificaciones
487: - Filtrar por período, asignatura, estudiante
488: - Ver detalle de evaluaciones y promedios
489: 
490: #### RF-06.5: Boletín de Calificaciones
491: **Prioridad:** Media  
492: **Descripción:** Generar boletín de calificaciones en PDF.
493: 
494: **Criterios de Aceptación:**
495: - Generar por estudiante y período
496: - Incluir: datos del estudiante, asignaturas, calificaciones por tipo, promedios
497: - Logo de la institución
498: - Firma del docente y director (espacio)
499: - Descargable en PDF
500: 
501: ---
502: 
503: ### RF-07: Módulo de Reportes
504: 
505: #### RF-07.1: Reporte de Estudiantes
506: **Prioridad:** Media  
507: **Descripción:** Listado de estudiantes con filtros.
508: 
509: **Criterios de Aceptación:**
510: - Filtrar por grado, grupo, estado
511: - Exportar a Excel/PDF
512: - Columnas: código, nombre, grado, grupo, estado
513: 
514: #### RF-07.2: Reporte de Asistencia General
515: **Prioridad:** Media  
516: **Descripción:** Estadísticas de asistencia.
517: 
518: **Criterios de Aceptación:**
519: - Filtrar por rango de fechas, grupo, estudiante
520: - Mostrar: % asistencia, total días, presentes, ausentes, tardanzas
521: - Exportar a Excel/PDF
522: 
523: #### RF-07.3: Reporte de Rendimiento Académico
524: **Prioridad:** Media  
525: **Descripción:** Calificaciones por grupo o estudiante.
526: 
527: **Criterios de Aceptación:**
528: - Filtrar por período, grupo, asignatura
529: - Mostrar listado de estudiantes con promedios
530: - Indicar estudiantes con promedios < 60 (reprobados)
531: - Exportar a Excel/PDF
532: 
533: #### RF-07.4: Dashboard Administrativo
534: **Prioridad:** Baja  
535: **Descripción:** Resumen visual de estadísticas clave.
536: 
537: **Criterios de Aceptación:**
538: - Total de estudiantes activos
539: - Total de docentes
540: - Total de grupos activas
541: - Gráfico de asistencia semanal
542: - Gráfico de rendimiento académico por grado
543: 
544: ---
545: 
546: ### RF-08: Módulo de Configuración del Sistema
547: 
548: #### RF-08.1: Información de la Institución
549: **Prioridad:** Media  
550: **Descripción:** Configurar datos de la institución.
551: 
552: **Datos requeridos:**
553: - Nombre de la institución
554: - Logo
555: - Dirección
556: - Teléfono
557: - Email
558: - Sitio web
559: 
560: **Criterios de Aceptación:**
561: - Solo super admin puede editar
562: - Información visible en reportes y boletines
563: 
564: #### RF-08.2: Gestión de Administradores
565: **Prioridad:** Alta  
566: **Descripción:** Super admin gestiona cuentas de administradores.
567: 
568: **Criterios de Aceptación:**
569: - Crear cuenta de administrador
570: - Asignar roles (Admin Escolar, Super Admin)
571: - Desactivar/activar cuentas
572: 
573: ---
574: 
575: ## 4. Requisitos No Funcionales
576: 
577: Los requisitos no funcionales definen las cualidades y restricciones del sistema que no están directamente relacionadas con funcionalidades específicas, pero que son esenciales para garantizar la calidad, rendimiento y usabilidad de SMS-EDUCOL.
578: 
579: ### RNF-01: Rendimiento
580: 
581: **RNF-01.1** - El sistema debe cargar las páginas principales en un tiempo máximo de 3 segundos bajo condiciones de red estándar (conexión de 10 Mbps o superior).
582: 
583: **RNF-01.2** - El sistema debe soportar al menos 100 usuarios concurrentes sin degradación perceptible en el rendimiento.
584: 
585: **RNF-01.3** - Las consultas a la base de datos deben ejecutarse en un tiempo promedio no superior a 1 segundo.
586: 
587: **RNF-01.4** - La generación de reportes complejos (boletines, reportes de asistencia) debe completarse en un tiempo máximo de 5 segundos.
588: 
589: **RNF-01.5** - El sistema debe optimizar el uso de recursos mediante técnicas de caching para consultas frecuentes.
590: 
591: ### RNF-02: Seguridad
592: 
593: **RNF-02.1** - Todas las contraseñas de usuario deben almacenarse encriptadas utilizando el algoritmo bcrypt con un factor de costo mínimo de 10.
594: 
595: **RNF-02.2** - El sistema debe implementar protección contra ataques CSRF (Cross-Site Request Forgery) en todos los formularios.
596: 
597: **RNF-02.3** - Todas las entradas de usuario deben ser validadas tanto en el lado del cliente como en el servidor para prevenir ataques de inyección.
598: 
599: **RNF-02.4** - Las sesiones de usuario deben utilizar tokens seguros y estar protegidas contra secuestro de sesión.
600: 
601: **RNF-02.5** - El sistema debe implementar HTTPS obligatorio en ambiente de producción para cifrar toda la comunicación.
602: 
603: **RNF-02.6** - El sistema debe mantener un registro de auditoría de todas las acciones críticas (creación, modificación y eliminación de registros de estudiantes, docentes, matrículas y calificaciones).
604: 
605: **RNF-02.7** - El acceso a las funcionalidades del sistema debe estar controlado mediante un sistema de roles y permisos granular.
606: 
607: **RNF-02.8** - Los datos personales de estudiantes y docentes deben cumplir con la Ley 1581 de 2012 de Protección de Datos Personales de Colombia.
608: 
609: ### RNF-03: Usabilidad
610: 
611: **RNF-03.1** - La interfaz de usuario debe ser responsive y adaptarse correctamente a dispositivos desktop (1024px+), tablet (768px-1023px) y móvil (375px-767px).
612: 
613: **RNF-03.2** - Los mensajes de error deben ser claros, específicos y estar redactados en español, indicando al usuario cómo corregir el problema.
614: 
615: **RNF-03.3** - El sistema debe solicitar confirmación explícita antes de ejecutar acciones destructivas (eliminación de registros, cambios de estado irreversibles).
616: 
617: **RNF-03.4** - La navegación hacia cualquier función principal del sistema no debe requerir más de 3 clics desde el dashboard.
618: 
619: **RNF-03.5** - El sistema debe proporcionar feedback visual inmediato para todas las acciones del usuario (estados de carga, mensajes de éxito, mensajes de error).
620: 
621: **RNF-03.6** - La interfaz debe ser intuitiva, requiriendo capacitación mínima para usuarios con competencias básicas en informática.
622: 
623: **RNF-03.7** - El sistema debe cumplir con estándares básicos de accesibilidad WCAG 2.1 nivel AA.
624: 
625: ### RNF-04: Mantenibilidad
626: 
627: **RNF-04.1** - El código fuente debe seguir las convenciones de estilo PSR-12 para PHP.
628: 
629: **RNF-04.2** - Las funciones complejas y la lógica de negocio deben estar adecuadamente documentadas mediante comentarios descriptivos.
630: 
631: **RNF-04.3** - El sistema debe implementar una clara separación de responsabilidades mediante el patrón MVC extendido con capas de Servicios y Repositorios.
632: 
633: **RNF-04.4** - Todos los cambios en el esquema de base de datos deben gestionarse mediante archivos de migración versionados.
634: 
635: **RNF-04.5** - El código debe ser modular y reutilizable, facilitando futuras extensiones del sistema.
636: 
637: ### RNF-05: Disponibilidad
638: 
639: **RNF-05.1** - El sistema debe mantener una disponibilidad del 99.5% durante el período lectivo activo.
640: 
641: **RNF-05.2** - Las ventanas de mantenimiento programado deben realizarse preferiblemente fuera del horario lectivo y no deben exceder 4 horas mensuales.
642: 
643: **RNF-05.3** - El sistema debe contar con un mecanismo de respaldo (backup) automático de la base de datos con frecuencia diaria.
644: 
645: **RNF-05.4** - Los respaldos de base de datos deben conservarse durante un mínimo de 30 días.
646: 
647: ### RNF-06: Compatibilidad
648: 
649: **RNF-06.1** - El sistema debe ser compatible con los siguientes navegadores web:
650: - Google Chrome versión 120 o superior
651: - Mozilla Firefox versión 120 o superior  
652: - Safari versión 17 o superior
653: - Microsoft Edge versión 120 o superior
654: 
655: **RNF-06.2** - La interfaz debe ser funcional en dispositivos con resolución mínima de 375px de ancho.
656: 
657: **RNF-06.3** - El sistema debe funcionar correctamente en sistemas operativos Windows, macOS y Linux.
658: 
659: ### RNF-07: Escalabilidad
660: 
661: **RNF-07.1** - La arquitectura del sistema debe permitir el crecimiento hasta soportar 1000 estudiantes activos sin requerir rediseño significativo.
662: 
663: **RNF-07.2** - El diseño de la base de datos debe seguir principios de normalización para evitar redundancia y facilitar el escalamiento.
664: 
665: **RNF-07.3** - Las tablas de la base de datos deben incluir índices apropiados en columnas utilizadas frecuentemente en búsquedas y filtros.
666: 
667: ### RNF-08: Portabilidad
668: 
669: **RNF-08.1** - El sistema debe poder desplegarse tanto en infraestructura on-premise como en servicios cloud (AWS, Google Cloud, Azure).
670: 
671: **RNF-08.2** - El sistema debe ser independiente del sistema operativo del servidor (compatible con Linux, Windows Server).
672: 
673: **RNF-08.3** - La configuración del sistema debe gestionarse mediante variables de entorno, facilitando el despliegue en diferentes ambientes.
674: 
675: ### RNF-09: Interoperabilidad
676: 
677: **RNF-09.1** - El sistema debe generar reportes en formatos estándar de intercambio: PDF y Excel (XLSX).
678: 
679: **RNF-09.2** - La arquitectura debe permitir futuras integraciones con sistemas externos mediante APIs REST.
680: 
681: **RNF-09.3** - El sistema debe utilizar estándares web actuales (HTML5, CSS3, JavaScript ES6+).
682: 
683: ---
684: 
685: ---
686: 
687: ## 5. Casos de Uso
688: 
689: ### CU-01: Inscribir Estudiante en Grupo
690: 
691: **Actor Principal:** Administrador  
692: **Precondiciones:**
693: - Administrador autenticado
694: - Existe el estudiante en el sistema
695: - Existe la grupo con cupo disponible
696: - Hay un año académico activo
697: 
698: **Flujo Normal:**
699: 1. Administrador navega a "Inscripciones" > "Nueva Inscripción"
700: 2. Sistema muestra formulario
701: 3. Administrador selecciona año académico actual
702: 4. Sistema muestra lista de grupos disponibles
703: 5. Administrador selecciona grupo
704: 6. Administrador busca y selecciona estudiante
705: 7. Sistema valida que el estudiante no tenga inscripción activa
706: 8. Sistema valida que la grupo tenga cupo
707: 9. Administrador confirma inscripción
708: 10. Sistema registra inscripción con fecha actual y estado "Activo"
709: 11. Sistema muestra mensaje de éxito
710: 
711: **Flujos Alternativos:**
712: - **4a.** No hay grupos disponibles: Sistema muestra mensaje "Debe crear grupos primero"
713: - **7a.** Estudiante ya inscrito: Sistema muestra error "El estudiante ya tiene una inscripción activa en este año"
714: - **8a.** Grupo llena: Sistema muestra error "La grupo ha alcanzado su capacidad máxima"
715: 
716: **Postcondiciones:**
717: - Estudiante inscrito en la grupo
718: - Contador de estudiantes de la grupo incrementado
719: 
720: ---
721: 
722: ### CU-02: Registrar Asistencia Diaria
723: 
724: **Actor Principal:** Docente  
725: **Precondiciones:**
726: - Docente autenticado
727: - Docente tiene asignaciones activas
728: - Es día hábil
729: 
730: **Flujo Normal:**
731: 1. Docente navega a "Asistencia" > "Registrar"
732: 2. Sistema muestra lista de asignaciones del docente
733: 3. Docente selecciona asignación (Asignatura-Grupo)
734: 4. Sistema verifica que no exista registro de asistencia para hoy en esa asignación
735: 5. Sistema muestra listado de estudiantes de la grupo con checkboxes
736: 6. Docente marca estado de cada estudiante (Presente/Ausente/Tardanza)
737: 7. Docente agrega observaciones generales (opcional)
738: 8. Docente presiona "Guardar"
739: 9. Sistema valida que todos los estudiantes tengan estado marcado
740: 10. Sistema registra asistencia con fecha actual
741: 11. Sistema muestra mensaje de éxito
742: 
743: **Flujos Alternativos:**
744: - **4a.** Ya existe registro de hoy: Sistema muestra la asistencia registrada en modo edición
745: - **9a.** Faltan estados por marcar: Sistema muestra error "Debe marcar asistencia de todos los estudiantes"
746: 
747: **Postcondiciones:**
748: - Asistencia registrada para la fecha y asignación
749: - Estadísticas de asistencia actualizadas
750: 
751: ---
752: 
753: ### CU-03: Registrar Calificación
754: 
755: **Actor Principal:** Docente  
756: **Precondiciones:**
757: - Docente autenticado
758: - Docente tiene asignaciones activas
759: - Período académico activo
760: 
761: **Flujo Normal:**
762: 1. Docente navega a "Calificaciones" > "Registrar"
763: 2. Sistema muestra lista de asignaciones del docente
764: 3. Docente selecciona asignación (Asignatura-Grupo)
765: 4. Sistema muestra lista de estudiantes de la grupo
766: 5. Docente selecciona estudiante
767: 6. Sistema muestra formulario de calificación
768: 7. Docente selecciona período académico
769: 8. Docente selecciona tipo de evaluación
770: 9. Docente ingresa calificación (0-100)
771: 10. Docente ingresa fecha de evaluación
772: 11. Docente agrega observaciones (opcional)
773: 12. Docente presiona "Guardar"
774: 13. Sistema valida rango de calificación
775: 14. Sistema registra calificación
776: 15. Sistema recalcula promedio del estudiante en la asignatura
777: 16. Sistema muestra mensaje de éxito
778: 
779: **Flujos Alternativos:**
780: - **13a.** Calificación fuera de rango: Sistema muestra error "La calificación debe estar entre 0 y 100"
781: - **14a.** Ya existe calificación del mismo tipo y fecha: Sistema pregunta "¿Desea reemplazar la calificación existente?"
782: 
783: **Postcondiciones:**
784: - Calificación registrada
785: - Promedio del estudiante actualizado
786: 
787: ---
788: 
789: ### CU-04: Consultar Boletín de Calificaciones
790: 
791: **Actor Principal:** Estudiante  
792: **Precondiciones:**
793: - Estudiante autenticado
794: - Estudiante tiene inscripción activa
795: 
796: **Flujo Normal:**
797: 1. Estudiante navega a "Mis Calificaciones"
798: 2. Sistema muestra lista de períodos académicos del año actual
799: 3. Estudiante selecciona período
800: 4. Sistema muestra tabla con:
801:    - Asignaturas cursadas
802:    - Calificaciones por tipo de evaluación
803:    - Promedio por asignatura
804:    - Promedio general del período
805: 5. Estudiante presiona "Descargar Boletín"
806: 6. Sistema genera PDF del boletín
807: 7. Sistema descarga PDF en el navegador
808: 
809: **Flujos Alternativos:**
810: - **3a.** Período sin calificaciones: Sistema muestra mensaje "Aún no hay calificaciones registradas para este período"
811: 
812: **Postcondiciones:**
813: - Boletín PDF descargado
814: 
815: ---
816: 
817: ### CU-05: Generar Reporte de Asistencia
818: 
819: **Actor Principal:** Administrador  
820: **Precondiciones:**
821: - Administrador autenticado
822: - Existen registros de asistencia
823: 
824: **Flujo Normal:**
825: 1. Administrador navega a "Reportes" > "Asistencia"
826: 2. Sistema muestra formulario de filtros
827: 3. Administrador selecciona rango de fechas
828: 4. Administrador selecciona grupo (opcional)
829: 5. Administrador selecciona estudiante (opcional)
830: 6. Administrador presiona "Generar"
831: 7. Sistema consulta registros de asistencia según filtros
832: 8. Sistema calcula estadísticas (% asistencia, totales)
833: 9. Sistema muestra tabla con resultados
834: 10. Administrador presiona "Exportar a Excel"
835: 11. Sistema genera archivo Excel
836: 12. Sistema descarga archivo
837: 
838: **Flujos Alternativos:**
839: - **7a.** No hay registros: Sistema muestra mensaje "No se encontraron registros con los filtros aplicados"
840: 
841: **Postcondiciones:**
842: - Reporte generado y descargado
843: 
844: ---
845: 
846: 
847: ---
848: 
849: ## 7. Interfaces de Usuario
850: 
851: ### 7.1 Consideraciones Generales de Diseño
852: 
853: El diseño de interfaces de SMS-EDUCOL debe cumplir con los siguientes principios:
854: 
855: **Principios de Usabilidad:**
856: - Interfaz intuitiva que requiera capacitación mínima
857: - Navegación clara con máximo 3 niveles de profundidad
858: - Mensajes de error y confirmación en lenguaje claro y español
859: - Feedback visual inmediato para todas las acciones del usuario
860: - Accesibilidad básica siguiendo estándares WCAG 2.1 nivel AA
861: 
862: **Diseño Responsive:**
863: - **Desktop (1024px+)**: Diseño con sidebar de navegación fijo, tablas completas, formularios en dos columnas
864: - **Tablet (768px-1023px)**: Sidebar colapsable, tablas con scroll horizontal, formularios en una columna
865: - **Móvil (375px-767px)**: Menú tipo hamburguesa, cards en lugar de tablas, formularios optimizados para pantalla táctil
866: 
867: **Paleta de Colores:**
868: - Se definirá según la identidad visual de la institución
869: - Uso de colores semánticos: verde (éxito), rojo (error), amarillo (advertencia), azul (información)
870: 
871: **Tipografía:**
872: - Fuente sans-serif legible (ej: Inter, Roboto, Open Sans)
873: - Tamaño mínimo: 14px para texto general, 16px para formularios
874: 
875: ### 7.2 Componentes de Interfaz Principales
876: 
877: **Componentes de Navegación:**
878: - Barra superior con logo institucional, nombre de usuario y opciones de cuenta
879: - Menú lateral con secciones agrupadas por módulos
880: - Breadcrumbs para indicar ubicación en el sistema
881: 
882: **Componentes de Datos:**
883: - Tablas paginadas con opciones de ordenamiento y filtrado
884: - Formularios con validación en tiempo real
885: - Modales para confirmaciones y acciones rápidas
886: - Cards para presentación de información resumida
887: 
888: **Elementos de Feedback:**
889: - Notificaciones toast para acciones exitosas
890: - Alertas en línea para errores de validación
891: - Estados de carga (spinners) para operaciones asíncronas
892: - Mensajes de confirmación para acciones destructivas
893: 
894: ### 7.3 Wireframes de Pantallas Principales
895: 
896: **Nota**: Los wireframes detallados y mockups de alta fidelidad serán desarrollados en la fase de diseño de interfaz. A continuación se describen las pantallas principales:
897: 
898: #### 7.3.1 Dashboard Administrativo
899: - Resumen de estadísticas clave en cards
900: - Gráficos de asistencia y rendimiento académico
901: - Accesos rápidos a funciones frecuentes
902: - Listado de actividades recientes
903: 
904: #### 7.3.2 Gestión de Estudiantes
905: - Tabla con filtros por grado, grupo, estado
906: - Búsqueda por nombre, documento o código
907: - Acciones: Ver detalle, Editar, Matricular, Descargar reporte
908: - Exportación a Excel/PDF
909: 
910: #### 7.3.3 Registro de Asistencia
911: - Selector de asignación (asignatura-grupo)
912: - Listado de estudiantes con controles de asistencia
913: - Marcado rápido (todos presentes, todos ausentes)
914: - Guardado automático de cambios
915: 
916: #### 7.3.4 Registro de Calificaciones
917: - Selector de grupo y asignatura
918: - Tabla de estudiantes con campos de calificación por tipo de evaluación
919: - Cálculo automático de promedios
920: - Indicadores visuales de rendimiento (aprobado/reprobado)
921: 
922: #### 7.3.5 Boletín de Calificaciones
923: - Vista previa en pantalla antes de generar PDF
924: - Información del estudiante y período
925: - Tabla de asignaturas con calificaciones desglosadas
926: - Promedio general y observaciones
927: - Opción de descarga en PDF
928: 
929: ### 7.4 Consideraciones de Accesibilidad
930: 
931: - Contraste adecuado entre texto y fondo (mínimo 4.5:1)
932: - Navegación por teclado en todos los componentes interactivos
933: - Etiquetas descriptivas en campos de formulario
934: - Textos alternativos en elementos visuales
935: - Mensajes de error asociados a campos específicos
936: 
937: ### 7.5 Documentación Complementaria
938: 
939: Los siguientes documentos serán elaborados durante la fase de diseño:
940: - Guía de estilos UI (Style Guide)
941: - Biblioteca de componentes reutilizables
942: - Wireframes de alta fidelidad por cada pantalla principal
943: - Prototipos interactivos para validación con usuarios
944: 
945: ---
946: 
947: ---
948: 
949: ## 8. Restricciones y Supuestos
950: 
951: ### 8.1 Restricciones Técnicas
952: - Framework de desarrollo: Laravel 13.x con PHP 8.3+
953: - Sistema Gestor de Base de Datos: PostgreSQL 16.x o superior
954: - Frontend: Blade Templates + Tailwind CSS 3.x
955: - Entorno de hosting: Servidor Linux (Ubuntu 22.04 LTS o superior) con mínimo 4GB RAM
956: - No se contempla desarrollo de aplicación móvil nativa en esta versión
957: 
958: ### 8.2 Restricciones Operativas
959: - Sistema single-tenant: una instalación independiente por institución educativa
960: - El sistema operará en modalidad on-premise o cloud según preferencia de la institución
961: - Respaldo de base de datos: diario, con retención mínima de 30 días
962: - Ventanas de mantenimiento: máximo 4 horas mensuales en horario no lectivo
963: 
964: ### 8.3 Restricciones de Negocio
965: - Sistema de calificación configurable: escala decimal (1.0-5.0) o entera (0-100) según normativa institucional
966: - Estructura de períodos académicos configurable: bimestral, trimestral o semestral
967: - Idioma del sistema: español colombiano
968: - Cumplimiento obligatorio de normativas colombianas de protección de datos
969: 
970: ### 8.4 Supuestos Técnicos
971: - La institución cuenta con infraestructura de red local (LAN) o inalámbrica (Wi-Fi) estable
972: - Los dispositivos de usuario (computadores, tablets) tienen navegadores web actualizados
973: - Existe personal técnico o proveedor de soporte para tareas de administración del servidor
974: - La institución cuenta con servicio de internet con ancho de banda adecuado (mínimo 10 Mbps)
975: 
976: ### 8.5 Supuestos del Negocio
977: - La estructura organizacional de la institución sigue el modelo tradicional colombiano (grados, grupos, jornadas)
978: - El personal administrativo y docente posee competencias básicas en el uso de aplicaciones web
979: - La institución proporcionará los datos iniciales necesarios (estudiantes, docentes, estructura académica)
980: - Existe compromiso institucional para la adopción y uso continuo del sistema
981: 
982: ---
983: 
984: ---
985: 
986: ## 9. Criterios de Aceptación del Sistema
987: 
988: ### 9.1 Criterios Funcionales
989: 
990: El sistema SMS-EDUCOL se considera funcionalmente completo cuando cumple con los siguientes criterios:
991: 
992: **1. Autenticación y Gestión de Usuarios:**
993: - Sistema de login, logout y recuperación de contraseña operativo
994: - Implementación completa de roles y permisos (Superadministrador, Administrador, Docente, Estudiante)
995: - Gestión CRUD funcional para estudiantes y docentes
996: - Mínimo 50 registros de estudiantes y 10 de docentes en ambiente de pruebas
997: 
998: **2. Configuración Académica:**
999: - Creación y gestión de año lectivo con períodos académicos
1000: - Configuración de estructura de grados (mínimo 6 grados)
1001: - Creación de grupos por grado (mínimo 2 grupos por grado)
1002: - Catálogo de asignaturas operativo (mínimo 8 asignaturas)
1003: - Sistema de asignación de asignaturas a grados funcional
1004: - Asignación de carga académica (docente-asignatura-grupo) operativa (mínimo 10 asignaciones)
1005: 
1006: **3. Gestión de Matrículas:**
1007: - Proceso completo de matrícula de estudiantes funcional
1008: - Validación de capacidad máxima de grupos operativa
1009: - Consultas y filtros de matrículas por diferentes criterios
1010: - Mínimo 100 matrículas activas en ambiente de pruebas
1011: 
1012: **4. Control de Asistencia:**
1013: - Registro de asistencia por asignatura y fecha funcional
1014: - Soporte para estados: Presente, Ausente, Tardanza, Justificado
1015: - Consultas y reportes de asistencia operativos
1016: - Cálculo automático de estadísticas de asistencia
1017: - Mínimo 20 días de registros de asistencia en ambiente de pruebas
1018: 
1019: **5. Gestión de Calificaciones:**
1020: - Configuración de tipos de evaluación con porcentajes
1021: - Registro de calificaciones por estudiante, asignatura y período
1022: - Cálculo automático de promedios (por asignatura, por período, anual)
1023: - Generación de boletines de calificaciones en formato PDF
1024: - Mínimo 50 registros de calificaciones en ambiente de pruebas
1025: 
1026: **6. Reportes y Consultas:**
1027: - Reporte de estudiantes con filtros y exportación (Excel/PDF)
1028: - Reporte de asistencia con estadísticas
1029: - Reporte de rendimiento académico por grupo/estudiante
1030: - Dashboard con estadísticas generales del sistema
1031: 
1032: ### 9.2 Criterios No Funcionales
1033: 
1034: **Rendimiento:**
1035: - Tiempo de carga de páginas: máximo 3 segundos en condiciones normales
1036: - Tiempo de generación de reportes: máximo 5 segundos para reportes estándar
1037: - Soporte mínimo de 50 usuarios concurrentes sin degradación significativa
1038: 
1039: **Seguridad:**
1040: - Todas las rutas protegidas según roles y permisos
1041: - Contraseñas encriptadas con algoritmo bcrypt
1042: - Protección CSRF activa en todos los formularios
1043: - Validación de entrada en cliente y servidor
1044: - Registro de auditoría para acciones críticas (creación, edición, eliminación)
1045: 
1046: **Usabilidad:**
1047: - Interfaz responsive funcional en dispositivos desktop, tablet y móvil
1048: - Mensajes de error y confirmación claros en español
1049: - Confirmación obligatoria para acciones destructivas
1050: - Feedback visual de operaciones en progreso
1051: 
1052: **Disponibilidad:**
1053: - Sistema operativo sin errores críticos
1054: - Mecanismo de respaldo de base de datos configurado
1055: - Logs de errores y actividad del sistema funcionales
1056: 
1057: ### 9.3 Documentación Requerida
1058: 
1059: El proyecto incluye la siguiente documentación:
1060: 
1061: - [x] Software Requirements Specification (SRS) - Este documento
1062: - [ ] Manual de Instalación y Configuración
1063: - [ ] Manual de Usuario por perfil (Administrador, Docente, Estudiante)
1064: - [ ] Documentación técnica de API (si aplica)
1065: - [ ] Guía de mantenimiento y soporte
1066: 
1067: ### 9.4 Entregables del Proyecto
1068: 
1069: **Código Fuente:**
1070: - Repositorio Git con historial completo de commits
1071: - Código documentado según estándares PSR-12
1072: - Estructura de carpetas organizada según arquitectura definida
1073: 
1074: **Base de Datos:**
1075: - Script de creación de esquema completo
1076: - Seeders para datos de prueba
1077: - Procedimientos de migración documentados
1078: 
1079: **Entorno de Pruebas:**
1080: - Sistema desplegado en ambiente de pruebas accesible
1081: - Datos de prueba precargados
1082: - Credenciales de acceso para diferentes roles
1083: 
1084: **Pruebas:**
1085: - Tests unitarios de funcionalidades críticas (cobertura mínima: 60%)
1086: - Tests de integración de flujos principales
1087: - Reporte de pruebas ejecutadas
1088: 
1089: ---
1090: 
1091: ---
1092: 
1093: ## 10. Planificación y Cronograma
1094: 
1095: ### 10.1 Fases del Proyecto
1096: 
1097: El desarrollo de SMS-EDUCOL se estructura en las siguientes fases principales:
1098: 
1099: | Fase | Descripción | Entregables Principales |
1100: |------|-------------|------------------------|
1101: | **Fase 1: Análisis y Diseño** | Refinamiento de requisitos, diseño de arquitectura, diseño de base de datos, diseño de interfaces | Documento de arquitectura, Modelo ER detallado, Wireframes, Especificaciones técnicas |
1102: | **Fase 2: Implementación Core** | Desarrollo de módulos de autenticación, gestión de usuarios y configuración académica | Módulos funcionales, Tests unitarios |
1103: | **Fase 3: Implementación Académica** | Desarrollo de módulos de matrícula, asistencia y calificaciones | Módulos funcionales, Tests de integración |
1104: | **Fase 4: Reportes y Dashboard** | Desarrollo de módulo de reportes, dashboard y exportaciones | Sistema de reportes completo |
1105: | **Fase 5: Pruebas y Refinamiento** | Testing integral, corrección de bugs, optimización de rendimiento | Reporte de pruebas, Sistema estabilizado |
1106: | **Fase 6: Documentación y Despliegue** | Elaboración de manuales, capacitación, puesta en producción | Documentación completa, Sistema en producción |
1107: 
1108: ### 10.2 Estimación de Esfuerzo
1109: 
1110: **Nota**: La estimación detallada de tiempos será determinada durante la planificación del proyecto considerando:
1111: - Tamaño y experiencia del equipo de desarrollo
1112: - Disponibilidad de recursos
1113: - Complejidad de integraciones requeridas
1114: - Alcance de personalización institucional
1115: 
1116: **Estimación preliminar**: 10-14 semanas para versión inicial funcional con un equipo de 2-3 desarrolladores.
1117: 
1118: ### 10.3 Hitos del Proyecto
1119: 
1120: Los siguientes hitos marcan puntos críticos de validación:
1121: 
1122: 1. **Hito 1 - Diseño Aprobado**: Arquitectura, modelo de datos y diseños de interfaz validados por stakeholders
1123: 2. **Hito 2 - Módulos Core Funcionales**: Autenticación, usuarios y configuración académica operativos
1124: 3. **Hito 3 - Módulos Académicos Completos**: Matrícula, asistencia y calificaciones funcionales
1125: 4. **Hito 4 - Sistema Integrado**: Todos los módulos integrados y funcionando conjuntamente
1126: 5. **Hito 5 - Aceptación de Usuario**: Sistema validado por usuarios representativos de cada perfil
1127: 6. **Hito 6 - Puesta en Producción**: Sistema desplegado y operativo en ambiente productivo
1128: 
1129: ---
1130: 
1131: ---
1132: 
1133: ## Apéndices
1134: 
1135: ### A. Glosario de Términos
1136: 
1137: - **Acudiente**: Persona responsable legal del estudiante (padre, madre o tutor legal)
1138: - **Año Lectivo**: Período académico anual durante el cual se desarrollan las actividades educativas
1139: - **Asignación de Carga Académica**: Relación que establece qué docente imparte una asignatura específica en un grupo determinado
1140: - **Asignatura**: Materia o área de conocimiento incluida en el plan de estudios
1141: - **Boletín de Calificaciones**: Documento oficial que consolida las calificaciones de un estudiante por período académico
1142: - **Carga Académica**: Conjunto de asignaturas y grupos asignados a un docente
1143: - **Director de Grupo**: Docente responsable del seguimiento y orientación de un grupo específico
1144: - **Docente**: Profesional encargado de impartir una o más asignaturas
1145: - **Grado**: Nivel educativo dentro de la estructura del sistema educativo colombiano (1°, 2°, 3°, etc.)
1146: - **Grupo**: División de estudiantes dentro de un mismo grado (Grupo A, Grupo B, etc.)
1147: - **Jornada**: Horario en que se desarrollan las actividades académicas (mañana, tarde, completa, nocturna, fin de semana)
1148: - **Matrícula**: Proceso formal de inscripción de un estudiante en la institución educativa
1149: - **Período Académico**: Subdivisión del año lectivo (bimestre, trimestre o semestre)
1150: - **Soft Delete**: Eliminación lógica de registros que los mantiene en base de datos marcados como eliminados
1151: 
1152: ### B. Referencias Técnicas
1153: 
1154: - **Laravel Framework Documentation v13.x**: https://laravel.com/docs/13.x
1155: - **PostgreSQL 16 Documentation**: https://www.postgresql.org/docs/16/
1156: - **Tailwind CSS Documentation**: https://tailwindcss.com/docs
1157: - **PHP Standards Recommendations (PSR-12)**: https://www.php-fig.org/psr/psr-12/
1158: - **ISO/IEC 25010:2011** - Systems and Software Quality Requirements and Evaluation (SQuaRE)
1159: 
1160: ### C. Referencias Regulatorias (Colombia)
1161: 
1162: - **Ley 1581 de 2012**: Protección de Datos Personales
1163: - **Decreto 1075 de 2015**: Decreto Único Reglamentario del Sector Educación
1164: - **Ley 115 de 1994**: Ley General de Educación

(Output capped at 50 KB. Showing lines 1-1164. Use offset=1165 to continue.)
</content>
```

---

## Assistant (Build · MiniMax M2.5 Free · 7.1s)

_Thinking:_

Ahora tengo una idea clara del proyecto. Es un Sistema de Gestión Escolar para instituciones educativas colombianas. Voy a resumir esto de manera concisa para el usuario.




Este es **SMS-EDUCOL** - un Sistema de Gestión Escolar desarrollado en Laravel para instituciones educativas colombianas.

**Propósito:** Automatizar y optimizar los procesos administrativos y académicos de escuelas/colleges en Colombia.

**Módulos principales:**
- Gestión de usuarios (estudiantes, docentes, administradores)
- Configuración académica (años lectivos, períodos, grados, grupos, asignaturas)
- Matrículas e inscripciones
- Control de asistencia
- Registro de calificaciones y evaluaciones
- Generación de reportes y boletines

**Perfiles de usuario:** Superadministrador, Administrador Escolar, Docente, Estudiante

**Tech stack:** Laravel 13.x + PHP 8.3+, PostgreSQL 16, Tailwind CSS

El proyecto está documentado en `docs/SMS_EDUCOL_SRS.md` con la especificación completa de requisitos.

---

## User

En que requisito funcional voy, segun el @docs/SMS_EDUCOL_SAD.md, que partes se han desarrollado, sabiendo que emplea arquitectura exagonal

---

## Assistant (Build · MiniMax M2.5 Free · 8.7s)

_Thinking:_

El usuario quiere saber en qué requisito funcional está según el documento SAD (Software Architecture Document) y qué partes se han desarrollado. También menciona que el proyecto usa arquitectura hexagonal.

Necesito leer el archivo SAD para entender la arquitectura y los módulos implementados, y luego comparar con lo que hay desarrollado en el proyecto.







**Tool: read**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\docs\\SMS_EDUCOL_SAD.md"
}
```

**Output:**
```
<path>C:\Cursos\php\sms\docs\SMS_EDUCOL_SAD.md</path>
<type>file</type>
<content>
1: # DOCUMENTO DE ARQUITECTURA DE SOFTWARE (SAD)
2: 
3: ## SMS-EDUCOL — Sistema de Gestión Académica para Instituciones Educativas Colombianas
4: 
5: ---
6: 
7: **Versión:** 1.0  
8: **Fecha:** 07 de Mayo de 2026  
9: **Estado:** Aprobado para Desarrollo  
10: **Arquitecto Responsable:** Equipo de Ingeniería de Software  
11: **Stack Tecnológico:** Laravel 13.x, PHP 8.3+, PostgreSQL 16+, Redis 7.x  
12: **Patrón Arquitectónico:** Hexagonal (Ports & Adapters) + DDD Táctico  
13: **Estructura:** Modular por Dominio  
14: 
15: ---
16: 
17: ## CONTROL DE VERSIONES
18: 
19: | Versión | Fecha | Autor | Cambios |
20: |---------|-------|-------|---------|
21: | 1.0 | 2026-05-07 | Arquitecto Software | Versión inicial con modelo C4, diagramas hexagonales y especificación de módulos. Unificación de versiones y terminología. |
22: 
23: ---
24: 
25: ## TABLA DE CONTENIDOS
26: 
27: 1. [Introducción](#1-introducción)
28: 2. [Objetivos y Alcance](#2-objetivos-y-alcance)
29: 3. [Stakeholders y Audiencia](#3-stakeholders-y-audiencia)
30: 4. [Vista de Contexto — Modelo C4 Nivel 1](#4-vista-de-contexto--modelo-c4-nivel-1)
31: 5. [Vista de Contenedores — Modelo C4 Nivel 2](#5-vista-de-contenedores--modelo-c4-nivel-2)
32: 6. [Vista de Componentes — Modelo C4 Nivel 3](#6-vista-de-componentes--modelo-c4-nivel-3)
33: 7. [Vista de Código — Modelo C4 Nivel 4](#7-vista-de-código--modelo-c4-nivel-4)
34: 8. [Arquitectura Hexagonal Detallada](#8-arquitectura-hexagonal-detallada)
35: 9. [Estructura de Módulos](#9-estructura-de-módulos)
36: 10. [Flujo de Datos entre Capas](#10-flujo-de-datos-entre-capas)
37: 11. [Decisiones Arquitectónicas (ADRs)](#11-decisiones-arquitectónicas-adrs)
38: 12. [Estrategia de Persistencia](#12-estrategia-de-persistencia)
39: 13. [Estrategia de Eventos de Dominio](#13-estrategia-de-eventos-de-dominio)
40: 14. [Estrategia de Testing](#14-estrategia-de-testing)
41: 15. [Reglas de Codificación Arquitectónica](#15-reglas-de-codificación-arquitectónica)
42: 16. [Riesgos Arquitectónicos](#16-riesgos-arquitectónicos)
43: 17. [Anexos](#17-anexos)
44: 
45: ---
46: 
47: ## 1. INTRODUCCIÓN
48: 
49: ### 1.1 Propósito
50: 
51: Este documento establece la arquitectura de software para SMS-EDUCOL, definiendo:
52: 
53: - La estructura modular del sistema y las responsabilidades de cada módulo
54: - El patrón arquitectónico hexagonal aplicado al contexto de Laravel 13.x
55: - Las decisiones técnicas fundamentales y sus justificaciones
56: - Los flujos de datos críticos entre capas y módulos
57: - Las reglas de codificación que garantizan la integridad arquitectónica
58: 
59: ### 1.2 Relación con el SRS
60: 
61: | Documento | Propósito | Estado |
62: |-----------|-----------|--------|
63: | SRS (Software Requirements Specification) | Define QUÉ construir: requisitos funcionales y no funcionales | Completado |
64: | **SAD (este documento)** | Define CÓMO construirlo: estructura, patrones, flujos | En elaboración |
65: | Esquema de Base de Datos | Define DÓNDE persistir: modelo relacional PostgreSQL | Completado |
66: 
67: **Trazabilidad SRS → SAD:**
68: 
69: | Requisito SRS | Módulo SAD | Componente Arquitectónico |
70: |--------------|------------|--------------------------|
71: | RF-01 (Autenticación) | `SMS\Users` | `AuthenticateUserUseCase`, `LaravelAuthAdapter` |
72: | RF-02 (Gestión Usuarios) | `SMS\Users`, `SMS\Students`, `SMS\Teachers` | Entidades, Repositorios, Controladores |
73: | RF-03 (Config. Académica) | `SMS\Academic` | `AcademicYear`, `Grade`, `Group` entidades |
74: | RF-04 (Matrículas) | `SMS\Enrollments` | `EnrollmentService`, `EnrollmentRepository` |
75: | RF-05 (Asistencia) | `SMS\Attendance` | `AttendanceRecord`, `AttendanceRepository` |
76: | RF-06 (Calificaciones) | `SMS\Grades` | `GradeRecord`, `GradeCalculationService` |
77: | RF-07 (Reportes) | `SMS\Reports` | `ReportGenerator`, `PDFAdapter`, `ExcelAdapter` |
78: | RF-08.1 (Info Institución) | `SMS\Shared` | `SchoolInfoRepository`, `SchoolInfoController` |
79: | RF-08.2 (Gestión Administradores) | `SMS\Users` | `CreateAdminUseCase`, `AdminRolePolicy` |
80: | RNF-02 (Seguridad) | `SMS\Users` | `Password` Value Object, `Role` enum |
81: | RNF-06 (Rendimiento) | Infraestructura | Redis Cache, PostgreSQL índices |
82: 
83: ---
84: 
85: ## 2. OBJETIVOS Y ALCANCE
86: 
87: ### 2.1 Objetivos de la Arquitectura
88: 
89: 1. **Independencia del framework:** El dominio de negocio no depende de Laravel, Eloquent ni PostgreSQL
90: 2. **Testabilidad:** Tests unitarios del dominio ejecutables en milisegundos sin base de datos
91: 3. **Modularidad:** Cada módulo (Users, Students, Grades) puede desarrollarse, testearse y desplegarse de forma aislada
92: 4. **Escalabilidad evolutiva:** Posibilidad de extraer módulos a microservicios sin reescribir el dominio
93: 5. **Cumplimiento normativo:** Soporte para regulaciones educativas colombianas (Decreto 1290/2009, Resolución 1296/2010)
94: 
95: ### 2.2 Alcance
96: 
97: **Incluido:**
98: - Arquitectura hexagonal aplicada a 8 módulos de dominio
99: - Modelo C4 completo (4 niveles)
100: - Estrategia de persistencia con PostgreSQL y Eloquent como adaptador
101: - Comunicación entre módulos vía eventos de dominio
102: - Estrategia de testing por capas
103: 
104: **Excluido:**
105: - Arquitectura de despliegue e infraestructura física (servidores, redes)
106: - Diseño detallado de interfaces de usuario (wireframes, mockups)
107: - Estrategia de CI/CD completa (pipelines, ambientes)
108: 
109: ---
110: 
111: ## 3. STAKEHOLDERS Y AUDIENCIA
112: 
113: | Rol | Interés en el SAD | Nivel de Detalle Requerido |
114: |-----|-------------------|---------------------------|
115: | **Desarrollador Backend** | Entender dónde colocar código nuevo, cómo testear | Nivel 3-4 (componentes y código) |
116: | **Líder Técnico / Arquitecto** | Validar decisiones, planificar evolución | Nivel 1-2 (contexto y contenedores) |
117: | **DevOps** | Comprender dependencias entre servicios | Nivel 2 (contenedores) |
118: | **QA Engineer** | Diseñar estrategia de testing por capas | Nivel 3 (componentes) |
119: | **Directivo Institución Educativa** | Entender capacidades y limitaciones técnicas | Nivel 1 (contexto) |
120: 
121: ---
122: 
123: ## 4. VISTA DE CONTEXTO — MODELO C4 NIVEL 1
124: 
125: El diagrama de contexto muestra SMS-EDUCOL como una caja negra y sus interacciones con actores y sistemas externos.
126: 
127: ```mermaid
128: C4Context
129:     title Diagrama de Contexto - SMS-EDUCOL (Nivel 1)
130: 
131:     Person(docente, "Docente", "Registra asistencia, calificaciones y consulta grupos asignados")
132:     Person(estudiante, "Estudiante", "Consulta calificaciones propias y descarga boletines")
133:     Person(acudiente, "Acudiente", "Consulta calificaciones del estudiante a su cargo (solo lectura)")
134:     Person(coordinador, "Coordinador Académico", "Configura estructura académica, cierra períodos, genera reportes")
135:     Person(secretario, "Secretario Académico", "Gestiona matrículas, certificados y documentación oficial")
136:     Person(superadmin, "Super Administrador", "Configura sistema, gestiona usuarios administrativos, auditoría")
137: 
138:     System_Boundary(sms, "SMS-EDUCOL") {
139:         System(sistema, "Sistema de Gestión Académica", "Gestión de usuarios, matrículas, asistencia, calificaciones y reportes para instituciones educativas colombianas")
140:     }
141: 
142:     System_Ext(email, "Servicio de Email", "Envío de notificaciones, recuperación de contraseñas, boletines")
143:     System_Ext(storage, "Almacenamiento de Archivos", "PDFs de boletines, certificados, fotos de perfil")
144:     System_Ext(backup, "Sistema de Backup", "Respaldo diario de base de datos PostgreSQL")
145: 
146:     Rel(docente, sistema, "Registra asistencia y calificaciones", "HTTPS/Web")
147:     Rel(estudiante, sistema, "Consulta calificaciones y boletines", "HTTPS/Web")
148:     Rel(acudiente, sistema, "Consulta calificaciones del acudido", "HTTPS/Web")
149:     Rel(coordinador, sistema, "Configura año lectivo, cierra períodos, reportes", "HTTPS/Web")
150:     Rel(secretario, sistema, "Matricula estudiantes, genera certificados", "HTTPS/Web")
151:     Rel(superadmin, sistema, "Gestiona usuarios, auditoría, configuración", "HTTPS/Web")
152: 
153:     Rel(sistema, email, "Envía notificaciones", "SMTP/API")
154:     Rel(sistema, storage, "Almacena PDFs y fotos", "S3/Local Filesystem")
155:     Rel(sistema, backup, "Respaldo automático", "pg_dump/SSH")
156: ```
157: 
158: **Descripción:** SMS-EDUCOL es el sistema central que orquesta todas las operaciones académicas. Los usuarios interactúan vía navegador web. El sistema depende de servicios externos para comunicaciones (email), almacenamiento de documentos y respaldo de datos.
159: 
160: ---
161: 
162: ## 5. VISTA DE CONTENEDORES — MODELO C4 NIVEL 2
163: 
164: El diagrama de contenedores descompone SMS-EDUCOL en sus aplicaciones/servicios principales y tecnologías.
165: 
166: ```mermaid
167: C4Container
168:     title Diagrama de Contenedores - SMS-EDUCOL (Nivel 2)
169: 
170:     Person(docente, "Docente", "Tablet/Laptop")
171:     Person(estudiante, "Estudiante", "Smartphone")
172:     Person(acudiente, "Acudiente", "Smartphone")
173:     Person(admin, "Personal Administrativo", "Desktop")
174: 
175:     System_Boundary(sms, "SMS-EDUCOL") {
176:         Container(web, "Aplicación Web", "Laravel 13.x, PHP 8.3+, Blade + Alpine.js", "Interfaz de usuario server-side rendering, responsive, accesible")
177:         
178:         Container(api, "API REST (Preparada)", "Laravel 13.x, JSON:API", "Endpoints para futura app móvil y integraciones (no activa en MVP)")
179:         
180:         Container(domain, "Capa de Dominio", "PHP Puro", "Entidades, Value Objects, Casos de Uso, Repositorios (interfaces), Eventos de dominio")
181:         
182:         Container(queue, "Procesador de Colas", "Laravel Queue + Redis", "Generación masiva de PDFs, envío de emails, cálculos pesados")
183:         
184:         ContainerDb(postgres, "Base de Datos", "PostgreSQL 16+", "Datos académicos, usuarios, calificaciones, matrículas, auditoría")
185:         
186:         ContainerDb(redis, "Caché y Sesiones", "Redis 7.x", "Sesiones de usuario, catálogos académicos, cache de consultas frecuentes")
187:         
188:         ContainerDb(files, "Almacenamiento", "S3-compatible / Local", "PDFs de boletines, certificados, fotos de perfil")
189:     }
190: 
191:     System_Ext(email, "Servicio Email", "SendGrid / Mailgun / SMTP Institucional")
192:     System_Ext(backup, "Backup Externo", "AWS S3 / Wasabi / MinIO")
193: 
194:     Rel(docente, web, "Accede vía navegador", "HTTPS")
195:     Rel(estudiante, web, "Accede vía navegador", "HTTPS")
196:     Rel(acudiente, web, "Accede vía navegador", "HTTPS")
197:     Rel(admin, web, "Accede vía navegador", "HTTPS")
198: 
199:     Rel(web, domain, "Ejecuta casos de uso", "PHP Objects")
200:     Rel(web, redis, "Lee/escribe sesiones y caché", "TCP/6379")
201:     Rel(web, postgres, "Lee/escribe datos", "TCP/5432")
202:     Rel(web, files, "Almacena/recupera archivos", "HTTPS/S3 API")
203:     
204:     Rel(domain, postgres, "Persiste vía Repositorios", "SQL/Eloquent Adapter")
205:     Rel(domain, redis, "Cache vía adaptador", "Redis Adapter")
206:     
207:     Rel(web, queue, "Encola trabajos pesados", "Redis/Database")
208:     Rel(queue, email, "Envía emails", "SMTP/API")
209:     Rel(queue, files, "Genera y almacena PDFs", "S3 API")
210:     Rel(queue, postgres, "Lee datos para reportes", "SQL")
211: 
212:     Rel(postgres, backup, "Respaldo diario", "pg_dump")
213:     Rel(files, backup, "Respaldo de archivos", "Sync")
214: ```
215: 
216: **Descripción:** La aplicación web (monolítica) es el punto de entrada principal. La capa de dominio (PHP puro) es independiente del framework. Los procesos pesados (PDFs, emails) se delegan a colas asíncronas. PostgreSQL es la fuente de verdad; Redis acelera sesiones y consultas.
217: 
218: ---
219: 
220: ## 6. VISTA DE COMPONENTES — MODELO C4 NIVEL 3
221: 
222: Descompone la aplicación web en sus componentes internos siguiendo la arquitectura hexagonal modular.
223: 
224: ```mermaid
225: C4Component
226:     title Diagrama de Componentes - Módulo Users (Nivel 3)
227: 
228:     Person(usuario, "Usuario", "Cualquier rol del sistema")
229: 
230:     Container_Boundary(web, "Aplicación Web Laravel") {
231:         Component(controller, "AuthController\nUserController\nProfileController", "Laravel Controller", "Recibe requests HTTP, valida entrada, delega a casos de uso")
232:         
233:         Component(requests, "LoginRequest\nStoreUserRequest\nUpdateUserRequest", "Laravel Form Request", "Validación de datos de entrada (formato, reglas)")
234:         
235:         Component(resources, "UserResource", "Laravel API Resource", "Transforma respuestas a JSON estructurado")
236:         
237:         Component(provider, "UserServiceProvider", "Laravel Service Provider", "Registra bindings de interfaces a implementaciones")
238:     }
239: 
240:     Container_Boundary(app, "Capa de Aplicación") {
241:         Component(usecases, "CreateUserUseCase\nAuthenticateUserUseCase\nUpdateProfileUseCase\nDeactivateUserUseCase", "PHP Puro", "Orquesta lógica de aplicación, coordina dominio e infraestructura")
242:         
243:         Component(dtos, "CreateUserRequestDTO\nUserResponseDTO\nChangePasswordDTO", "PHP Puro", "Objetos de transferencia de datos entre capas")
244:         
245:         Component(validators, "CreateUserValidator\nPasswordStrengthValidator", "PHP Puro", "Validación de reglas de aplicación (complejidad, formatos)")
246:         
247:         Component(mappers, "UserMapper", "PHP Puro", "Convierte Entidades de Dominio ↔ DTOs")
248:     }
249: 
250:     Container_Boundary(domain, "Capa de Dominio") {
251:         Component(entities, "User Entity\nUserStatus", "PHP Puro", "Entidad raíz con comportamiento de negocio y estado")
252:         
253:         Component(vos, "Email\nPassword\nRole\nUserId\nDocument", "PHP Puro", "Value Objects inmutables con validación interna")
254:         
255:         Component(repos, "UserRepositoryInterface\nUserQueryInterface", "PHP Interface", "Puertos: contratos que el dominio necesita del exterior")
256:         
257:         Component(services, "AuthenticateUserService", "PHP Puro", "Servicio de dominio con lógica pura")
258:         
259:         Component(events, "UserCreated\nUserPasswordChanged\nUserDeactivated", "PHP Puro", "Eventos de dominio para comunicación desacoplada")
260:         
261:         Component(policies, "UserPolicy", "PHP Puro", "Reglas de autorización del dominio")
262:     }
263: 
264:     Container_Boundary(infra, "Capa de Infraestructura") {
265:         Component(eloquent_repo, "EloquentUserRepository", "PHP + Eloquent", "Implementa UserRepositoryInterface con Eloquent ORM")
266:         
267:         Component(eloquent_query, "EloquentUserQuery", "PHP + Eloquent", "Implementa UserQueryInterface para consultas complejas")
268:         
269:         Component(eloquent_mapper, "EloquentUserMapper", "PHP", "Convierte User Entity ↔ UserEloquent Model")
270:         
271:         Component(eloquent_model, "UserEloquent\nStudentEloquent\nTeacherEloquent", "Eloquent Model", "Modelos ORM mapeados a tablas PostgreSQL")
272:         
273:         Component(auth_adapter, "LaravelAuthAdapter", "PHP + Laravel Auth", "Adapta Laravel Auth/Sanctum a interfaz de dominio")
274:         
275:         Component(notification, "WelcomeEmailNotification", "Laravel Notification", "Envía emails usando servicios externos")
276:     }
277: 
278:     Rel(usuario, controller, "Realiza peticiones HTTP", "HTTPS/JSON")
279:     Rel(controller, requests, "Valida entrada")
280:     Rel(controller, usecases, "Ejecuta caso de uso", "DTO")
281:     Rel(controller, resources, "Formatea respuesta")
282:     
283:     Rel(usecases, dtos, "Usa para entrada/salida")
284:     Rel(usecases, validators, "Valida reglas de aplicación")
285:     Rel(usecases, entities, "Crea/modifica entidades")
286:     Rel(usecases, repos, "Persiste/recupera vía interfaz")
287:     Rel(usecases, mappers, "Convierte a DTO de respuesta")
288:     
289:     Rel(entities, vos, "Compone")
290:     Rel(entities, services, "Usa para lógica compleja")
291:     Rel(entities, events, "Emite cuando cambia estado")
292:     Rel(entities, policies, "Verifica autorización")
293:     
294:     Rel(repos, eloquent_repo, "Implementado por")
295:     Rel(eloquent_repo, eloquent_mapper, "Usa para conversión")
296:     Rel(eloquent_mapper, eloquent_model, "Convierte a/desde")
297:     Rel(eloquent_repo, eloquent_model, "Persiste vía")
298:     
299:     Rel(usecases, auth_adapter, "Verifica autenticación")
300:     Rel(events, notification, "Dispara notificación")
301: ```
302: 
303: ---
304: 
305: ## 7. VISTA DE CÓDIGO — MODELO C4 NIVEL 4
306: 
307: Muestra la estructura de directorios y archivos representativos del código fuente.
308: 
309: ```mermaid
310: graph TD
311:     subgraph "src/SMS/ (Código Fuente)"
312:         subgraph "Shared/"
313:             SD[Domain/]
314:             SI[Infrastructure/]
315:         end
316:         
317:         subgraph "Users/"
318:             UD[Domain/]
319:             UA[Application/]
320:             UI[Infrastructure/]
321:         end
322:         
323:         subgraph "Students/"
324:             StD[Domain/]
325:             StA[Application/]
326:             StI[Infrastructure/]
327:         end
328:         
329:         subgraph "Teachers/"
330:             TD[Domain/]
331:             TA[Application/]
332:             TI[Infrastructure/]
333:         end
334:         
335:         subgraph "Academic/"
336:             AcD[Domain/]
337:             AcA[Application/]
338:             AcI[Infrastructure/]
339:         end
340:         
341:         subgraph "Enrollments/"
342:             ED[Domain/]
343:             EA[Application/]
344:             EI[Infrastructure/]
345:         end
346:         
347:         subgraph "Attendance/"
348:             AtD[Domain/]
349:             AtA[Application/]
350:             AtI[Infrastructure/]
351:         end
352:         
353:         subgraph "Grades/"
354:             GD[Domain/]
355:             GA[Application/]
356:             GI[Infrastructure/]
357:         end
358:         
359:         subgraph "Reports/"
360:             RD[Domain/]
361:             RA[Application/]
362:             RI[Infrastructure/]
363:         end
364:     end
365:     
366:     subgraph "Detalle Users/Domain/"
367:         UDE[Entities/]
368:         UDV[ValueObjects/]
369:         UDR[Repositories/]
370:         UDS[Services/]
371:         UDEv[Events/]
372:         UDEx[Exceptions/]
373:     end
374:     
375:     subgraph "Detalle Users/Application/"
376:         UAD[DTOs/]
377:         UAU[UseCases/]
378:         UAV[Validators/]
379:         UAM[Mappers/]
380:     end
381:     
382:     subgraph "Detalle Users/Infrastructure/"
383:         UIP[Persistence/Eloquent/]
384:         UIW[Web/Controllers/]
385:         UIA[Auth/]
386:         UIN[Notifications/]
387:     end
388:     
389:     UD --> UDE
390:     UD --> UDV
391:     UD --> UDR
392:     UD --> UDS
393:     UD --> UDEv
394:     UD --> UDEx
395:     
396:     UA --> UAD
397:     UA --> UAU
398:     UA --> UAV
399:     UA --> UAM
400:     
401:     UI --> UIP
402:     UI --> UIW
403:     UI --> UIA
404:     UI --> UIN
405:     
406:     style SD fill:#e1f5fe
407:     style UD fill:#fff3e0
408:     style UA fill:#e8f5e9
409:     style UI fill:#fce4ec
410: ```
411: 
412: **Estructura de archivos representativa:**
413: 
414: ```
415: src/SMS/
416: ├── Shared/
417: │   ├── Domain/
418: │   │   ├── ValueObjects/
419: │   │   │   ├── Uuid.php
420: │   │   │   └── Timestamp.php
421: │   │   ├── Events/
422: │   │   │   └── DomainEvent.php
423: │   │   └── Exceptions/
424: │   │       └── DomainException.php
425: │   └── Infrastructure/
426: │       └── Persistence/
427: │           └── BaseEloquentModel.php
428: │
429: ├── Users/
430: │   ├── Domain/
431: │   │   ├── Entities/
432: │   │   │   ├── User.php
433: │   │   │   └── UserStatus.php
434: │   │   ├── ValueObjects/
435: │   │   │   ├── Email.php
436: │   │   │   ├── Password.php
437: │   │   │   ├── Role.php
438: │   │   │   ├── UserId.php
439: │   │   │   └── Document.php
440: │   │   ├── Repositories/
441: │   │   │   ├── UserRepositoryInterface.php
442: │   │   │   └── UserQueryInterface.php
443: │   │   ├── Services/
444: │   │   │   └── AuthenticateUserService.php
445: │   │   ├── Events/
446: │   │   │   ├── UserCreated.php
447: │   │   │   ├── UserPasswordChanged.php
448: │   │   │   └── UserDeactivated.php
449: │   │   ├── Policies/
450: │   │   │   └── UserPolicy.php
451: │   │   └── Exceptions/
452: │   │       ├── UserNotFoundException.php
453: │   │       ├── InvalidCredentialsException.php
454: │   │       └── DuplicateEmailException.php
455: │   │
456: │   ├── Application/
457: │   │   ├── DTOs/
458: │   │   │   ├── CreateUserRequest.php
459: │   │   │   ├── UpdateUserRequest.php
460: │   │   │   ├── ChangePasswordRequest.php
461: │   │   │   └── UserResponse.php
462: │   │   ├── UseCases/
463: │   │   │   ├── CreateUserUseCase.php
464: │   │   │   ├── AuthenticateUserUseCase.php
465: │   │   │   ├── UpdateProfileUseCase.php
466: │   │   │   └── DeactivateUserUseCase.php
467: │   │   ├── Validators/
468: │   │   │   ├── CreateUserValidator.php
469: │   │   │   └── PasswordStrengthValidator.php
470: │   │   └── Mappers/
471: │   │       └── UserMapper.php
472: │   │
473: │   └── Infrastructure/
474: │       ├── Persistence/
475: │       │   └── Eloquent/
476: │       │       ├── Models/
477: │       │       │   ├── UserEloquent.php
478: │       │       │   └── PasswordResetTokenEloquent.php
479: │       │       ├── Repositories/
480: │       │       │   ├── EloquentUserRepository.php
481: │       │       │   └── EloquentUserQuery.php
482: │       │       └── Mappers/
483: │       │           └── EloquentUserMapper.php
484: │       ├── Web/
485: │       │   ├── Controllers/
486: │       │   │   ├── AuthController.php
487: │       │   │   ├── UserController.php
488: │       │   │   └── ProfileController.php
489: │       │   ├── Requests/
490: │       │   │   ├── LoginRequest.php
491: │       │   │   ├── StoreUserRequest.php
492: │       │   │   └── UpdateUserRequest.php
493: │       │   └── Resources/
494: │       │       └── UserResource.php
495: │       ├── Auth/
496: │       │   └── LaravelAuthAdapter.php
497: │       └── Notifications/
498: │           └── WelcomeEmailNotification.php
499: │
500: └── [Otros módulos: Students, Teachers, Academic, Enrollments, Attendance, Grades, Reports]
501:     └── [Estructura análoga: Domain/, Application/, Infrastructure/]
502: ```
503: 
504: ---
505: 
506: ## 8. ARQUITECTURA HEXAGONAL DETALLADA
507: 
508: ### 8.1 Principios Fundamentales
509: 
510: La arquitectura hexagonal (Ports & Adapters) organiza el software en tres capas concéntricas con reglas estrictas de dependencia:
511: 
512: ```mermaid
513: graph TB
514:     subgraph "CAPA EXTERNA: Infraestructura"
515:         direction TB
516:         WEB["🌐 Web Adapters<br/>Controllers, Requests, Resources"]
517:         CLI["⌨️ CLI Adapters<br/>Artisan Commands"]
518:         QUEUE["📨 Queue Adapters<br/>Job Handlers"]
519:         DB["💾 Persistence Adapters<br/>Eloquent Repositories"]
520:         CACHE["⚡ Cache Adapters<br/>Redis"]
521:         MAIL["📧 Notification Adapters<br/>Email, SMS"]
522:         FILE["📁 Storage Adapters<br/>S3, Local"]
523:     end
524:     
525:     subgraph "CAPA INTERMEDIA: Aplicación"
526:         direction TB
527:         UC["🎯 Use Cases<br/>Orquestación de casos de uso"]
528:         DTO["📋 DTOs<br/>Objetos de transferencia"]
529:         VAL["✅ Validators<br/>Reglas de aplicación"]
530:         MAP["🔄 Mappers<br/>Conversión Entity ↔ DTO"]
531:         LIST["👂 Event Listeners<br/>Reacción a eventos"]
532:     end
533:     
534:     subgraph "CAPA INTERNA: Dominio"
535:         direction TB
536:         ENT["🏛️ Entities<br/>Objetos con identidad y comportamiento"]
537:         VO["💎 Value Objects<br/>Objetos inmutables sin identidad"]
538:         REPO["🔌 Repository Interfaces<br/>Puertos de persistencia"]
539:         SERV["⚙️ Domain Services<br/>Lógica de negocio pura"]
540:         EVT["📢 Domain Events<br/>Notificaciones de cambios"]
541:         POL["🛡️ Policies<br/>Reglas de autorización"]
542:         EXC["❌ Exceptions<br/>Errores de dominio"]
543:     end
544:     
545:     WEB -->|"usa"| UC
546:     CLI -->|"usa"| UC
547:     QUEUE -->|"usa"| UC
548:     UC -->|"usa"| ENT
549:     UC -->|"usa"| SERV
550:     UC -->|"usa"| REPO
551:     DTO -->|"envuelve"| ENT
552:     VAL -->|"valida"| DTO
553:     MAP -->|"convierte"| ENT
554:     LIST -->|"escucha"| EVT
555:     
556:     ENT -->|"compone"| VO
557:     ENT -->|"emite"| EVT
558:     SERV -->|"usa"| ENT
559:     SERV -->|"usa"| VO
560:     POL -->|"evalúa"| ENT
561:     
562:     DB -->|"implementa"| REPO
563:     CACHE -->|"implementa"| REPO
564:     MAIL -->|"reacciona a"| EVT
565:     FILE -->|"reacciona a"| EVT
566:     
567:     style ENT fill:#ffecb3
568:     style VO fill:#ffecb3
569:     style REPO fill:#ffecb3
570:     style SERV fill:#ffecb3
571:     style EVT fill:#ffecb3
572:     style UC fill:#c8e6c9
573:     style DTO fill:#c8e6c9
574:     style WEB fill:#bbdefb
575:     style DB fill:#bbdefb
576: ```
577: 
578: ### 8.2 Reglas de Dependencia
579: 
580: | Regla | Descripción | Ejemplo de Violación |
581: |-------|-------------|---------------------|
582: | **R1** | El Dominio no conoce frameworks ni librerías externas | `use Illuminate\Support\Collection;` en `src/SMS/Users/Domain/Entities/User.php` |
583: | **R2** | La Aplicación no conoce detalles de persistencia | `DB::transaction()` en un UseCase |
584: | **R3** | La Infraestructura no contiene lógica de negocio | Calcular promedio en un Controller |
585: | **R4** | Las dependencias apuntan siempre hacia el centro | Un Repository interface importa una clase Eloquent |
586: | **R5** | Los módulos solo exponen interfaces, no implementaciones | `use Src\SMS\Grades\Infrastructure\Eloquent\GradeRecord` en `Users` |
587: 
588: ### 8.3 Comparación: Arquitectura Tradicional vs. Hexagonal
589: 
590: ```mermaid
591: graph LR
592:     subgraph "Arquitectura Laravel Tradicional"
593:         direction TB
594:         T_REQ["Request"]
595:         T_CTRL["Controller"]
596:         T_MOD["Model (Eloquent)"]
597:         T_DB["Base de Datos"]
598:         
599:         T_REQ --> T_CTRL
600:         T_CTRL --> T_MOD
601:         T_MOD --> T_DB
602:         
603:         style T_MOD fill:#ffcdd2
604:     end
605:     
606:     subgraph "Arquitectura Hexagonal"
607:         direction TB
608:         H_REQ["Request"]
609:         H_CTRL["Controller"]
610:         H_UC["Use Case"]
611:         H_ENT["Entity (Dominio)"]
612:         H_REPO["Repository Interface"]
613:         H_IMPL["Eloquent Repository"]
614:         H_DB["Base de Datos"]
615:         
616:         H_REQ --> H_CTRL
617:         H_CTRL --> H_UC
618:         H_UC --> H_ENT
619:         H_UC --> H_REPO
620:         H_IMPL --> H_REPO
621:         H_IMPL --> H_DB
622:         
623:         style H_ENT fill:#c8e6c9
624:         style H_REPO fill:#ffecb3
625:     end
626: ```
627: 
628: ---
629: 
630: ## 9. ESTRUCTURA DE MÓDULOS
631: 
632: ### 9.1 Módulo: Users (RF-01, RF-02, RF-08.2)
633: 
634: **Responsabilidad:** Autenticación, autorización RBAC, gestión de perfiles de usuario.
635: 
636: ```mermaid
637: classDiagram
638:     class User {
639:         +UserId id
640:         +Email email
641:         +Password password
642:         +Role role
643:         +UserStatus status
644:         +changePassword(newPassword, oldPassword)
645:         +deactivate()
646:         +hasRole(role): bool
647:         +isActive(): bool
648:     }
649:     
650:     class Email {
651:         +string value
652:         +normalize()
653:         +equals(other): bool
654:         +isValid(): bool
655:     }
656:     
657:     class Password {
658:         +string hash
659:         +verify(plain): bool
660:         +isStrong(plain): bool
661:     }
662:     
663:     class Role {
664:         <<enumeration>>
665:         SUPER_ADMIN
666:         ADMIN
667:         TEACHER
668:         STUDENT
669:         ATTENDANT
670:     }
671:     
672:     class UserStatus {
673:         <<enumeration>>
674:         ACTIVE
675:         INACTIVE
676:         SUSPENDED
677:         PENDING_PASSWORD_CHANGE
678:     }
679:     
680:     class UserRepositoryInterface {
681:         <<interface>>
682:         +findById(UserId): ?User
683:         +findByEmail(Email): ?User
684:         +findByDocument(Document): ?User
685:         +save(User): void
686:         +delete(UserId): void
687:         +existsEmail(Email): bool
688:     }
689:     
690:     class AuthenticateUserUseCase {
691:         +execute(AuthenticateRequest): AuthResponse
692:     }
693:     
694:     class CreateUserUseCase {
695:         +execute(CreateUserRequest): UserResponse
696:     }
697:     
698:     User --> Email
699:     User --> Password
700:     User --> Role
701:     User --> UserStatus
702:     AuthenticateUserUseCase ..> UserRepositoryInterface
703:     CreateUserUseCase ..> UserRepositoryInterface
704: ```
705: 
706: **Puertos exportados (interfaces públicas del módulo):**
707: - `UserRepositoryInterface` — para búsqueda y persistencia de usuarios
708: - `AuthenticateUserUseCase` — para verificación de credenciales
709: - `UserCreated`, `UserPasswordChanged` — eventos de dominio
710: 
711: ### 9.2 Módulo: Students (RF-02.1, RF-04)
712: 
713: **Responsabilidad:** Gestión de estudiantes, datos personales, historial académico.
714: 
715: ```mermaid
716: classDiagram
717:     class Student {
718:         +StudentId id
719:         +Document document
720:         +FullName fullName
721:         +DateOfBirth birthDate
722:         +BloodType bloodType
723:         +EPS eps
724:         +StudentCode studentCode
725:         +calculateAge(): int
726:         +isAgeAppropriateForGrade(Grade): bool
727:     }
728:     
729:     class Document {
730:         +string type
731:         +string number
732:         +validate Colombian algorithm
733:         +equals(other): bool
734:     }
735:     
736:     class StudentRepositoryInterface {
737:         <<interface>>
738:         +findById(StudentId): ?Student
739:         +findByDocument(Document): ?Student
740:         +findByCode(StudentCode): ?Student
741:         +save(Student): void
742:         +search(criteria): Student[]
743:     }
744:     
745:     class CreateStudentUseCase {
746:         +execute(CreateStudentRequest): StudentResponse
747:     }
748:     
749:     Student --> Document
750:     CreateStudentUseCase ..> StudentRepositoryInterface
751: ```
752: 
753: ### 9.3 Módulo: Teachers (RF-02.2, RF-03.7)
754: 
755: **Responsabilidad:** Gestión de docentes, especialidades, carga académica.
756: 
757: ```mermaid
758: classDiagram
759:     class Teacher {
760:         +TeacherId id
761:         +Document document
762:         +FullName fullName
763:         +EmployeeCode employeeCode
764:         +Specialty specialty
765:         +ProfessionalTitle title
766:         +HireDate hireDate
767:         +isAvailableForAssignment(): bool
768:         +totalWeeklyHours(): int
769:     }
770:     
771:     class TeacherRepositoryInterface {
772:         <<interface>>
773:         +findById(TeacherId): ?Teacher
774:         +findByDocument(Document): ?Teacher
775:         +findAvailable(): Teacher[]
776:         +save(Teacher): void
777:     }
778:     
779:     class AssignmentRepositoryInterface {
780:         <<interface>>
781:         +findByTeacher(TeacherId): Assignment[]
782:         +findByGroup(GroupId): Assignment[]
783:         +save(Assignment): void
784:     }
785:     
786:     Teacher --> Document
787: ```
788: 
789: ### 9.4 Módulo: Academic (RF-03)
790: 
791: **Responsabilidad:** Configuración de estructura académica: años lectivos, períodos, grados, grupos, asignaturas.
792: 
793: ```mermaid
794: classDiagram
795:     class AcademicYear {
796:         +AcademicYearId id
797:         +string name
798:         +Date startDate
799:         +Date endDate
800:         +boolean isActive
801:         +activate()
802:         +close()
803:         +addPeriod(Period): void
804:     }
805:     
806:     class Period {
807:         +PeriodId id
808:         +string name
809:         +int order
810:         +Date startDate
811:         +Date endDate
812:         +PeriodStatus status
813:         +isOpen(): bool
814:         +close(): void
815:     }
816:     
817:     class Grade {
818:         +GradeId id
819:         +string name
820:         +GradeLevel level
821:         +int order
822:     }
823:     
824:     class Group {
825:         +GroupId id
826:         +string name
827:         +int maxCapacity
828:         +int currentEnrollment
829:         +Shift shift
830:         +hasCapacity(): bool
831:         +enrollStudent(): void
832:     }
833:     
834:     class Subject {
835:         +SubjectId id
836:         +string code
837:         +string name
838:         +int weeklyHours
839:     }
840:     
841:     class AcademicYearRepositoryInterface {
842:         <<interface>>
843:         +findActive(): ?AcademicYear
844:         +findById(AcademicYearId): ?AcademicYear
845:         +save(AcademicYear): void
846:     }
847:     
848:     AcademicYear --> Period
849:     Grade --> Group
850: ```
851: 
852: ### 9.5 Módulo: Enrollments (RF-04)
853: 
854: **Responsabilidad:** Proceso de matrícula, control de cupos, traslados, retiros.
855: 
856: ```mermaid
857: classDiagram
858:     class Enrollment {
859:         +EnrollmentId id
860:         +StudentId studentId
861:         +GroupId groupId
862:         +AcademicYearId yearId
863:         +string enrollmentNumber
864:         +Date enrollmentDate
865:         +EnrollmentStatus status
866:         +withdraw(reason, date): void
867:         +transferTo(Group): void
868:     }
869:     
870:     class EnrollmentRepositoryInterface {
871:         <<interface>>
872:         +findById(EnrollmentId): ?Enrollment
873:         +findByStudentAndYear(StudentId, AcademicYearId): ?Enrollment
874:         +findByGroup(GroupId): Enrollment[]
875:         +save(Enrollment): void
876:         +countActiveByGroup(GroupId): int
877:     }
878:     
879:     class CreateEnrollmentUseCase {
880:         +execute(CreateEnrollmentRequest): EnrollmentResponse
881:         -validateCapacity(Group): void
882:         -validateStudentNotEnrolled(StudentId, YearId): void
883:     }
884:     
885:     CreateEnrollmentUseCase ..> EnrollmentRepositoryInterface
886: ```
887: 
888: ### 9.6 Módulo: Attendance (RF-05)
889: 
890: **Responsabilidad:** Registro diario de asistencia, estados (presente, ausente, tardanza, justificado).
891: 
892: ```mermaid
893: classDiagram
894:     class AttendanceRecord {
895:         +AttendanceId id
896:         +AssignmentId assignmentId
897:         +StudentId studentId
898:         +Date date
899:         +AttendanceStatus status
900:         +string notes
901:         +justify(): void
902:     }
903:     
904:     class AttendanceStatus {
905:         <<enumeration>>
906:         PRESENT
907:         ABSENT
908:         LATE
909:         EXCUSED
910:     }
911:     
912:     class AttendanceRepositoryInterface {
913:         <<interface>>
914:         +findByAssignmentAndDate(AssignmentId, Date): AttendanceRecord[]
915:         +findByStudentAndRange(StudentId, Date, Date): AttendanceRecord[]
916:         +save(AttendanceRecord): void
917:         +existsForAssignmentAndDate(AssignmentId, Date): bool
918:     }
919:     
920:     class RecordAttendanceUseCase {
921:         +execute(RecordAttendanceRequest): void
922:         -validateNotFutureDate(Date): void
923:         -validatePeriodOpen(Date): void
924:     }
925:     
926:     AttendanceRecord --> AttendanceStatus
927:     RecordAttendanceUseCase ..> AttendanceRepositoryInterface
928: ```
929: 
930: ### 9.7 Módulo: Grades (RF-06)
931: 
932: **Responsabilidad:** Registro de calificaciones, cálculo de promedios, cierre de períodos.
933: 
934: ```mermaid
935: classDiagram
936:     class GradeRecord {
937:         +GradeRecordId id
938:         +EnrollmentId enrollmentId
939:         +SubjectId subjectId
940:         +PeriodId periodId
941:         +EvaluationTypeId evalTypeId
942:         +decimal score
943:         +Date evaluationDate
944:         +string notes
945:         +isInRange(): bool
946:     }
947:     
948:     class EvaluationType {
949:         +EvaluationTypeId id
950:         +string name
951:         +decimal weightPercentage
952:     }
953:     
954:     class GradeCalculationService {
955:         +calculatePeriodAverage(GradeRecord[]): decimal
956:         +calculateYearAverage(PeriodResult[]): decimal
957:         +convertToQualitative(decimal): string
958:     }
959:     
960:     class GradeRecordRepositoryInterface {
961:         <<interface>>
962:         +findByEnrollmentAndPeriod(EnrollmentId, PeriodId): GradeRecord[]
963:         +findByStudentAndSubject(StudentId, SubjectId): GradeRecord[]
964:         +save(GradeRecord): void
965:         +existsForEnrollmentAndType(EnrollmentId, EvalTypeId, PeriodId): bool
966:     }
967:     
968:     class RecordGradeUseCase {
969:         +execute(RecordGradeRequest): GradeResponse
970:         -validatePeriodOpen(PeriodId): void
971:         -validateTeacherAssignment(TeacherId, SubjectId, GroupId): void
972:         -validateScoreRange(decimal): void
973:     }
974:     
975:     GradeRecord --> EvaluationType
976:     RecordGradeUseCase ..> GradeRecordRepositoryInterface
977:     GradeCalculationService ..> GradeRecord
978: ```
979: 
980: ### 9.8 Módulo: Reports (RF-07, RF-08.2)
981: 
982: **Responsabilidad:** Generación de boletines, certificados, consolidados, estadísticas y reportes administrativos en formatos PDF y Excel.
983: 
984: ```mermaid
985: classDiagram
986:     class ReportGenerator {
987:         <<interface>>
988:         +generateBulletin(BulletinRequest): PDF
989:         +generateCertificate(CertificateRequest): PDF
990:         +generateStudentListReport(StudentListRequest): Excel
991:         +generateAttendanceReport(AttendanceReportRequest): Excel
992:         +generateGradeReport(GradeReportRequest): Excel
993:         +generateEnrollmentStatsReport(EnrollmentStatsRequest): PDF
994:     }
995:     
996:     class BulletinData {
997:         +StudentInfo student
998:         +PeriodResult[] results
999:         +decimal generalAverage
1000:         +string qualitativeRating
1001:         +SchoolInfo schoolInfo
1002:     }
1003:     
1004:     class ReportDataCollector {
1005:         +collectStudentData(StudentId, PeriodId): BulletinData
1006:         +collectAttendanceData(GroupId, DateRange): AttendanceStats[]
1007:         +collectGradeData(GroupId, PeriodId): GradeStats[]
1008:     }
1009:     
1010:     class PDFAdapter {
1011:         +generate(template, data): PDF
1012:         +addSchoolHeader(data): void
1013:         +addSignatureSpace(): void
1014:     }
1015:     
1016:     class ExcelAdapter {
1017:         +generate(headers, rows): Excel
1018:         +addFilters(): void
1019:         +addCharts(data): void
1020:     }
1021:     
1022:     class GenerateBulletinUseCase {
1023:         +execute(BulletinRequest): PDF
1024:         -validateStudentEnrollment(StudentId, PeriodId): void
1025:         -collectData(): BulletinData
1026:         -generatePDF(): PDF
1027:     }
1028:     
1029:     ReportGenerator --> PDFAdapter
1030:     ReportGenerator --> ExcelAdapter
1031:     ReportGenerator --> ReportDataCollector
1032:     GenerateBulletinUseCase ..> ReportGenerator
1033: ```
1034: 
1035: ### 9.9 Módulo: Shared / Configuration (RF-08.1)
1036: 
1037: **Responsabilidad:** Información institucional y parámetros globales del sistema.
1038: 
1039: ```mermaid
1040: classDiagram
1041:     class SchoolInfo {
1042:         +string name
1043:         +string logoPath
1044:         +string address
1045:         +string phone
1046:         +string email
1047:         +string website
1048:         +update(data): void
1049:     }
1050:     
1051:     class SchoolInfoRepositoryInterface {
1052:         <<interface>>
1053:         +get(): SchoolInfo
1054:         +save(SchoolInfo): void
1055:     }
1056: ```
1057: 
1058: ---
1059: 
1060: ## 10. FLUJO DE DATOS ENTRE CAPAS
1061: 
1062: ### 10.1 Flujo General de una Request HTTP
1063: 
1064: ```mermaid
1065: sequenceDiagram
1066:     actor U as Usuario
1067:     participant C as Controller<br/>(Infraestructura)
1068:     participant R as Request<br/>(Infraestructura)
1069:     participant UC as UseCase<br/>(Aplicación)
1070:     participant V as Validator<br/>(Aplicación)
1071:     participant D as Domain<br/>(Entidad + Repo Interface)
1072:     participant RI as RepositoryImpl<br/>(Infraestructura)
1073:     participant M as Mapper<br/>(Infraestructura)
1074:     participant E as Eloquent Model<br/>(Infraestructura)
1075:     participant DB as PostgreSQL
1076: 
1077:     U->>C: POST /api/estudiantes
1078:     C->>R: StoreStudentRequest
1079:     R-->>C: Datos validados
1080:     
1081:     C->>UC: CreateStudentUseCase.execute(dto)
1082:     
1083:     UC->>V: validate(dto)
1084:     V-->>UC: OK
1085:     
1086:     UC->>D: new Student(...)
1087:     Note over D: Reglas de negocio:<br/>- Documento válido<br/>- Edad apropiada<br/>- Email único
1088:     
1089:     UC->>D: repository.save(student)
1090:     D->>RI: save(Student entity)
1091:     
1092:     RI->>M: toEloquent(student)
1093:     M-->>RI: StudentEloquent model
1094:     
1095:     RI->>E: save()
1096:     E->>DB: INSERT INTO students...
1097:     DB-->>E: OK
1098:     
1099:     E-->>RI: Model saved
1100:     RI-->>D: void
1101:     D-->>UC: void
1102:     
1103:     UC->>D: event(new StudentCreated)
1104:     
1105:     UC-->>C: StudentResponse(dto)
1106:     C-->>U: 201 Created + JSON
1107: ```
1108: 
1109: ### 10.2 Flujo de Autenticación (RF-01.1)
1110: 
1111: ```mermaid
1112: sequenceDiagram
1113:     actor U as Usuario
1114:     participant C as AuthController
1115:     participant R as LoginRequest
1116:     participant UC as AuthenticateUserUseCase
1117:     participant A as AuthService<br/>(Dominio)
1118:     participant RI as EloquentUserRepository
1119:     participant M as EloquentUserMapper
1120:     participant E as UserEloquent
1121:     participant DB as PostgreSQL
1122:     participant Redis as Redis
1123: 
1124:     U->>C: POST /login<br/>{email, password}
1125:     C->>R: LoginRequest
1126:     R-->>C: Validado
1127:     
1128:     C->>UC: execute(credentials)
1129:     
1130:     UC->>RI: findByEmail(email)
1131:     RI->>M: build query
1132:     RI->>E: where('email', $email)->first()
1133:     E->>DB: SELECT * FROM users...
1134:     DB-->>E: User record
1135:     
1136:     E-->>RI: UserEloquent model
1137:     RI->>M: toDomain(model)
1138:     M-->>RI: User entity
1139:     
1140:     RI-->>UC: User entity
1141:     
1142:     UC->>A: verifyPassword(password, user.password)
1143:     A-->>UC: true
1144:     
1145:     UC->>UC: generateToken(user)
1146:     UC->>Redis: store session
1147:     
1148:     UC-->>C: AuthResponse(token, user)
1149:     C-->>U: 200 OK + token
1150: ```
1151: 
1152: ### 10.3 Flujo de Cierre de Período (RF-06.4)
1153: 
1154: ```mermaid
1155: sequenceDiagram
1156:     actor C as Coordinador
1157:     participant Ctrl as PeriodController
1158:     participant UC as ClosePeriodUseCase
1159:     participant P as Period<br/>(Dominio)
1160:     participant GR as GradeRecordRepository
1161:     participant ER as EnrollmentRepository
1162:     participant E as Event Bus
1163:     participant L1 as GenerateBulletinsListener
1164:     participant L2 as UpdateStatsListener
1165:     participant PDF as PDFGenerator
1166:     participant DB as PostgreSQL
1167: 
1168:     C->>Ctrl: POST /periodos/3/cerrar
1169:     Ctrl->>UC: execute(periodId)
1170:     
1171:     UC->>P: findById(periodId)
1172:     P-->>UC: Period entity
1173:     
1174:     UC->>P: validateCanClose()
1175:     Note over P: Verifica:<br/>1. Período anterior cerrado<br/>2. Todas calificaciones completas
1176:     
1177:     UC->>GR: findIncompleteByPeriod(periodId)
1178:     GR->>DB: SELECT ... WHERE period_id = 3<br/>AND status = 'incomplete'
1179:     DB-->>GR: Listado
1180:     
1181:     alt Hay calificaciones incompletas
1182:         GR-->>UC: Lista de faltantes
1183:         UC-->>Ctrl: 422 Unprocessable<br/>+ lista de estudiantes/asignaturas
1184:         Ctrl-->>C: Error + detalle
1185:     else Todo completo
1186:         GR-->>UC: Vacío
1187:         
1188:         UC->>P: close()
1189:         P-->>UC: Estado cambiado a CLOSED
1190:         
1191:         UC->>P: repository.save(period)
1192:         
1193:         UC->>E: dispatch(PeriodClosed)
1194:         
1195:         E->>L1: onPeriodClosed
1196:         L1->>ER: findEnrolledByPeriod(periodId)
1197:         ER->>DB: SELECT ...
1198:         DB-->>ER: Matriculados
1199:         
1200:         loop Por cada estudiante
1201:             L1->>PDF: generateBulletin(student, period)
1202:             PDF-->>L1: PDF file
1203:         end
1204:         
1205:         E->>L2: onPeriodClosed
1206:         L2->>DB: UPDATE statistics...
1207:         
1208:         UC-->>Ctrl: SuccessResponse
1209:         Ctrl-->>C: 200 OK<br/>"Período cerrado. Boletines en generación."
1210:     end
1211: ```
1212: 
1213: ---
1214: 
1215: ## 11. DECISIONES ARQUITECTÓNICAS (ADRs)
1216: 
1217: ### ADR-001: Arquitectura Hexagonal con DDD Táctico
1218: 
1219: **Estado:** Aceptado  
1220: **Fecha:** 2026-05-07  
1221: **Contexto:** El sistema debe soportar lógica de negocio compleja (matrículas con cupos, cálculo de promedios ponderados, cierre de períodos) sin acoplarse a Laravel o PostgreSQL. Se requiere testabilidad unitaria y posibilidad de evolución a microservicios.
1222: 
1223: **Decisión:** Aplicar Arquitectura Hexagonal (Ports & Adapters) con Domain-Driven Design táctico. El dominio vive en PHP puro, la aplicación orquesta casos de uso, y la infraestructura adapta Laravel/Eloquent/PostgreSQL.
1224: 
1225: **Consecuencias:**
1226: - ✅ Dominio desacoplado, testable sin framework
1227: - ✅ Cambio de tecnología posible sin reescribir reglas de negocio
1228: - ✅ Módulos independientes, extracción futura a microservicios viable
1229: - ❌ Curva de aprendizaje para equipo acostumbrado a Laravel tradicional
1230: - ❌ Más código boilerplate (interfaces, mappers, DTOs)
1231: 
1232: **Alternativas rechazadas:**
1233: - Arquitectura Laravel tradicional (Model-Controller): Acopla negocio a Eloquent, difícil de testear unitariamente
1234: - Microservicios desde inicio: Overhead operativo innecesario para MVP de 15 semanas
1235: 
1236: ---
1237: 
1238: ### ADR-002: Estructura Modular por Dominio
1239: 
1240: **Estado:** Aceptado  
1241: **Fecha:** 2026-05-07  
1242: **Contexto:** El SRS define 8 dominios funcionales claramente separados. Se necesita que equipos puedan trabajar en paralelo y que el sistema escale por dominio.
1243: 
1244: **Decisión:** Organizar código en módulos (`src/SMS/Users`, `src/SMS/Students`, etc.) donde cada módulo contiene sus 3 capas (Domain, Application, Infrastructure).
1245: 
1246: **Consecuencias:**
1247: - ✅ Desarrollo paralelo por equipos especializados
1248: - ✅ Límites claros del dominio
1249: - ✅ Posible extracción futura a servicio independiente
1250: - ❌ Posible duplicación si Shared Kernel no está bien definido
1251: - ❌ Navegación más profunda en árbol de directorios
1252: 
1253: ---
1254: 
1255: ### ADR-003: PostgreSQL 16+ como Base de Datos Única
1256: 
1257: **Estado:** Aceptado  
1258: **Fecha:** 2026-05-07  
1259: **Contexto:** Se requieren transacciones ACID fuertes (matrículas, calificaciones), integridad referencial compleja, y soporte para datos JSON flexibles (SISBEN, observaciones).
1260: 
1261: **Decisión:** PostgreSQL 17 único. Eloquent como adaptador ORM en la capa de infraestructura.
1262: 
1263: **Consecuencias:**
1264: - ✅ Transacciones ACID robustas
1265: - ✅ Integridad referencial con foreign keys
1266: - ✅ Índices avanzados (parciales, GIN, GiST)
1267: - ✅ JSONB para campos semi-estructurados
1268: - ❌ Escalamiento horizontal más complejo que NoSQL
1269: 
1270: **Alternativas rechazadas:**
1271: - MySQL 8: Menor soporte para JSON avanzado e índices parciales
1272: - MongoDB: Sin transacciones ACID confiables en versiones antiguas para operaciones multi-documento críticas
1273: 
1274: ---
1275: 
1276: ### ADR-004: Laravel 13.x como Framework de Infraestructura
1277: 
1278: **Estado:** Aceptado  
1279: **Fecha:** 2026-05-07  
1280: **Contexto:** Se necesita un framework PHP maduro con ecosistema amplio para el MVP.
1281: 
1282: **Decisión:** Usar Laravel 13.x exclusivamente en infraestructura: routing, controllers, Eloquent como adaptador, Blade, Sanctum, Queue, Notification.
1283: 
1284: **Consecuencias:**
1285: - ✅ Aprovecha ecosistema Laravel (migraciones, seeders, artisan, horizon)
1286: - ✅ Comunidad amplia, documentación extensa
1287: - ✅ El dominio permanece puro PHP, portable
1288: - ❌ Requiere disciplina para no usar facilidades de Laravel en dominio
1289: 
1290: ---
1291: 
1292: ### ADR-005: Escala de Calificación Configurable
1293: 
1294: **Estado:** Aceptado  
1295: **Fecha:** 2026-05-07  
1296: **Contexto:** Las instituciones educativas colombianas usan diferentes escalas según su PEI. Decreto 1290/2009 sugiere 1.0-5.0, pero muchas instituciones usan 0-100 por tradición.
1297: 
1298: **Decisión:** DECIMAL(5,2) en PostgreSQL soportando 0-100 (entero) o 0.0-5.0 (decimal). Value Object `GradeScore` valida según configuración en `school_info`.
1299: 
1300: **Consecuencias:**
1301: - ✅ Flexibilidad institucional (escala por defecto 0-100)
1302: - ✅ Conversión entre escalas si cambia normativa
1303: - ✅ Cálculos precisos sin errores de punto flotante
1304: - ⚠️ Validación en runtime según config institucional
1305: 
1306: **Configuración:** `school_info.grading_scale_type`, `grading_min`, `grading_max`, `grading_passing_score`
1307: 
1308: ---
1309: 
1310: ### ADR-006: Nomenclatura `groups` (Grupos) en Base de Datos
1311: 
1312: **Estado:** Aceptado  
1313: **Fecha:** 2026-05-07  
1314: **Contexto:** En Colombia se usa "Grupo A/B/C", no "sección". Alineación con SRS y terminología local.
1315: 
1316: **Decisión:** Tabla `groups` en BD, mapeo a "Grupo" en UI español.
1317: 
1318: **Consecuencias:**
1319: - ✅ Consistencia SRS ↔ SAD ↔ Schema
1320: - ✅ Claridad para equipo colombiano
1321: - ✅ Alineación cultural
1322: 
1323: **Tablas confirmadas:** `groups`, `grade_subject`, `assignments`
1324: 
1325: ## 12. ESTRATEGIA DE PERSISTENCIA
1326: 
1327: ### 12.1 Patrón Repository con Eloquent como Adaptador
1328: 
1329: ```mermaid
1330: graph TB
1331:     subgraph "Dominio"
1332:         E[Entity<br/>Student]
1333:         RI[Repository Interface<br/>StudentRepositoryInterface]
1334:     end
1335:     
1336:     subgraph "Infraestructura"
1337:         EM[Eloquent Model<br/>StudentEloquent]
1338:         ER[Eloquent Repository<br/>EloquentStudentRepository]
1339:         M[Mapper<br/>EloquentStudentMapper]
1340:     end
1341:     
1342:     subgraph "Base de Datos"
1343:         DB[(PostgreSQL 16+<br/>Tabla students)]
1344:     end
1345:     
1346:     E -->|"define"| RI
1347:     ER -->|"implementa"| RI
1348:     ER -->|"usa"| M
1349:     M -->|"convierte a"| E
1350:     M -->|"convierte a"| EM
1351:     ER -->|"persiste via"| EM
1352:     EM -->|"INSERT/UPDATE"| DB
1353: ```
1354: 
1355: ### 12.2 Reglas de Mapeo
1356: 
1357: | Entidad Dominio | Eloquent Model | Tabla PostgreSQL | Notas |
1358: |----------------|---------------|------------------|-------|
1359: | `User` | `UserEloquent` | `users` | Relación polimórfica con Student/Teacher |
1360: | `Student` | `StudentEloquent` | `students` | Hereda de User via userable |
1361: | `Teacher` | `TeacherEloquent` | `teachers` | Hereda de User via userable |
1362: | `AcademicYear` | `AcademicYearEloquent` | `academic_years` | Constraint: solo uno activo |
1363: | `Period` | `PeriodEloquent` | `academic_periods` | FK a academic_years |
1364: | `Grade` | `GradeEloquent` | `grades` | Catálogo global |
1365: | `Group` | `GroupEloquent` | `groups` | FK a grades, academic_years |
1366: | `Subject` | `SubjectEloquent` | `subjects` | Código único |
1367: | `Enrollment` | `EnrollmentEloquent` | `enrollments` | Constraint único: student + year |
1368: | `AttendanceRecord` | `AttendanceEloquent` | `attendances` | Constraint único: assignment + student + date |
1369: | `GradeRecord` | `GradeRecordEloquent` | `grade_records` | Decimal(3,1) para score |
1370: | `EvaluationType` | `EvaluationTypeEloquent` | `evaluation_types` | Peso configurable |
1371: 
1372: ### 12.3 Índices Críticos PostgreSQL
1373: 
1374: ```sql
1375: -- Índices de unicidad y búsqueda frecuente
1376: CREATE UNIQUE INDEX idx_users_email ON users(email) WHERE deleted_at IS NULL;
1377: CREATE UNIQUE INDEX idx_users_document ON users(document_number, document_type) WHERE deleted_at IS NULL;
1378: CREATE UNIQUE INDEX idx_students_code ON students(student_code);
1379: CREATE UNIQUE INDEX idx_enrollments_student_year ON enrollments(student_id, academic_year_id) WHERE status = 'active';
1380: CREATE UNIQUE INDEX idx_attendance_assignment_student_date ON attendances(assignment_id, student_id, date);
1381: 
1382: -- Índices de búsqueda
1383: CREATE INDEX idx_students_name ON students USING gin(to_tsvector('spanish', first_name || ' ' || last_name));
1384: CREATE INDEX idx_grade_records_enrollment_period ON grade_records(enrollment_id, academic_period_id);
1385: CREATE INDEX idx_enrollments_group_status ON enrollments(group_id, status);
1386: 
1387: -- Índices parciales
1388: CREATE INDEX idx_users_active ON users(id) WHERE deleted_at IS NULL;
1389: CREATE INDEX idx_periods_open ON academic_periods(id) WHERE status = 'open';
1390: ```
1391: 
1392: ---
1393: 
1394: ## 13. ESTRATEGIA DE EVENTOS DE DOMINIO
1395: 
1396: ### 13.1 Bus de Eventos
1397: 
1398: ```mermaid
1399: graph LR
1400:     subgraph "Emisores"
1401:         E1[EnrollmentCreated]
1402:         E2[GradeRecorded]
1403:         E3[PeriodClosed]
1404:         E4[UserCreated]
1405:         E5[StudentWithdrawn]
1406:     end
1407:     
1408:     subgraph "Bus de Eventos<br/>(Laravel Event Dispatcher)"
1409:         BUS[Event Bus]
1410:     end
1411:     
1412:     subgraph "Listeners por Módulo"
1413:         L1[Reports Module<br/>UpdateStatistics]
1414:         L2[Notifications Module<br/>SendEmail]
1415:         L3[Grades Module<br/>RecalculateAverage]
1416:         L4[Users Module<br/>CreateEmptyGradeRecords]
1417:     end
1418:     
1419:     E1 --> BUS
1420:     E2 --> BUS
1421:     E3 --> BUS
1422:     E4 --> BUS
1423:     E5 --> BUS
1424:     
1425:     BUS --> L1
1426:     BUS --> L2
1427:     BUS --> L3
1428:     BUS --> L4
1429: ```
1430: 
1431: ### 13.2 Eventos y Listeners Documentados
1432: 
1433: | Evento | Emitido por | Escuchado por | Acción |
1434: |--------|------------|---------------|--------|
1435: | `UserCreated` | `Users` domain | `Notifications` infra | Enviar email de bienvenida |
1436: | `UserCreated` | `Users` domain | `Users` infra | Generar email institucional |
1437: | `StudentCreated` | `Students` domain | `Users` infra | Crear registro de autenticación |
1438: | `EnrollmentCreated` | `Enrollments` domain | `Grades` infra | Crear registros de calificación vacíos |
1439: | `EnrollmentCreated` | `Enrollments` domain | `Reports` infra | Actualizar estadísticas de matrícula |
1440: | `GradeRecorded` | `Grades` domain | `Reports` infra | Recalcular promedio del estudiante |
1441: | `GradeRecorded` | `Grades` domain | `Notifications` infra | Notificar acudiente si nota < 3.0 |
1442: | `PeriodClosed` | `Academic` domain | `Reports` infra | Generar boletines masivamente |
1443: | `PeriodClosed` | `Academic` domain | `Grades` infra | Bloquear edición de calificaciones |
1444: | `StudentWithdrawn` | `Enrollments` domain | `Grades` infra | Anular calificaciones pendientes |
1445: 
1446: ---
1447: 
1448: ## 14. ESTRATEGIA DE TESTING
1449: 
1450: ### 14.1 Pirámide de Testing
1451: 
1452: ```mermaid
1453: graph TD
1454:     subgraph "Pirámide de Testing SMS-EDUCOL"
1455:         E2E["🔺 E2E / Browser Tests<br/>Laravel Dusk<br/>5% de casos críticos<br/>Login, matrícula completa, cierre período"]
1456:         
1457:         INT["🔷 Integration Tests<br/>Adaptadores + DB real<br/>25% de cobertura<br/>Repositories, API endpoints"]
1458:         
1459:         UNIT["🔻 Unit Tests<br/>Dominio puro, sin framework<br/>70% de cobertura<br/>Value Objects, Entities, Services"]
1460:     end
1461:     
1462:     style E2E fill:#ffcdd2
1463:     style INT fill:#fff9c4
1464:     style UNIT fill:#c8e6c9
1465: ```
1466: 
1467: ### 14.2 Estructura de Tests
1468: 
1469: ```
1470: tests/
1471: ├── Unit/
1472: │   └── SMS/
1473: │       ├── Users/
1474: │       │   └── Domain/
1475: │       │       ├── ValueObjects/
1476: │       │       │   ├── EmailTest.php
1477: │       │       │   ├── PasswordTest.php
1478: │       │       │   └── DocumentTest.php

(Output capped at 50 KB. Showing lines 1-1478. Use offset=1479 to continue.)
</content>
```

---

## Assistant (Build · MiniMax M2.5 Free · 6.5s)

_Thinking:_

Ahora tengo los dos documentos: SRS y SAD. Necesito comparar qué módulos están desarrollados actualmente en el proyecto. Déjame explorar la estructura del código para ver qué se ha implementado.




Ahora déjame explorar la estructura real del proyecto para ver qué se ha implementado:


**Tool: glob**

**Input:**
```json
{
  "pattern": "src/SMS/*/Domain/Entities/*.php"
}
```

**Output:**
```
C:\Cursos\php\sms\src\SMS\Users\Domain\Entities\User.php
```

---

## Assistant (Build · MiniMax M2.5 Free · 3.8s)

_Thinking:_

Solo hay un archivo de entidad en el proyecto. Déjame buscar más ampliamente para ver qué hay desarrollado.







**Tool: glob**

**Input:**
```json
{
  "pattern": "src/SMS/**/*.php"
}
```

**Output:**
```
C:\Cursos\php\sms\src\SMS\Users\Domain\Repositories\UserRepositoryInterface.php
C:\Cursos\php\sms\src\SMS\Users\Infrastructure\Mappers\EloquentUserMapper.php
C:\Cursos\php\sms\src\SMS\Users\Domain\ValueObjects\Password.php
C:\Cursos\php\sms\src\SMS\Users\Infrastructure\Repositories\EloquentUserRepository.php
C:\Cursos\php\sms\src\SMS\Users\Application\UseCases\AuthenticateUserUseCase.php
C:\Cursos\php\sms\src\SMS\Users\Application\DTOs\CreateUserDTO.php
C:\Cursos\php\sms\src\SMS\Users\Application\DTOs\LoginRequestDTO.php
C:\Cursos\php\sms\src\SMS\Users\Application\DTOs\UserResponseDTO.php
C:\Cursos\php\sms\src\SMS\Users\Application\DTOs\AuthResponseDTO.php
C:\Cursos\php\sms\src\SMS\Users\Domain\Exceptions\UserInactiveException.php
C:\Cursos\php\sms\src\SMS\Users\Domain\Exceptions\InvalidCredentialsException.php
C:\Cursos\php\sms\src\SMS\Users\Domain\Entities\User.php
C:\Cursos\php\sms\src\SMS\Shared\Domain\ValueObjects\Email.php
C:\Cursos\php\sms\src\SMS\Users\Application\UseCases\CreateUserUseCase.php
C:\Cursos\php\sms\src\SMS\Users\Domain\ValueObjects\Role.php
C:\Cursos\php\sms\src\SMS\Shared\Domain\ValueObjects\UserId.php
C:\Cursos\php\sms\src\SMS\Users\Domain\Events\UserCreatedEvent.php
C:\Cursos\php\sms\src\SMS\Users\Domain\Exceptions\DuplicateEmailException.php
C:\Cursos\php\sms\src\SMS\Users\Domain\ValueObjects\UserStatus.php
```

---

## Assistant (Build · MiniMax M2.5 Free · 6.9s)

_Thinking:_

Ahora veo que solo hay código en el módulo de Users. Déjame verificar si hay algo más en la aplicación, como controllers, modelos Eloquent, migraciones, etc.




Veamos qué hay en la capa de infraestructura (modelos, controllers):



**Tool: glob**

**Input:**
```json
{
  "pattern": "app/Models/*.php"
}
```

**Output:**
```
C:\Cursos\php\sms\app\Models\User.php
C:\Cursos\php\sms\app\Models\Teacher.php
```

---

## Assistant (Build · MiniMax M2.5 Free · 6.5s)

_Thinking:_

Hay algunos modelos Eloquent, pero parece que el desarrollo del proyecto está apenas comenzando. Déjame revisar las migraciones para ver qué tablas se han creado.








**Tool: glob**

**Input:**
```json
{
  "pattern": "database/migrations/*.php"
}
```

**Output:**
```
C:\Cursos\php\sms\database\migrations\0001_01_01_000000_create_users_table.php
C:\Cursos\php\sms\database\migrations\0001_01_01_000002_create_jobs_table.php
C:\Cursos\php\sms\database\migrations\0001_01_01_000001_create_cache_table.php
```

---

## Assistant (Build · MiniMax M2.5 Free · 6.5s)

_Thinking:_

Solo hay migraciones básicas de usuarios. Déjame revisar si hay controllers HTTP para ver qué rutas están implementadas.




Déjame verificar las rutas y controllers disponibles:



**Tool: glob**

**Input:**
```json
{
  "pattern": "app/Http/Controllers/**/*.php"
}
```

**Output:**
```
C:\Cursos\php\sms\app\Http\Controllers\Auth\LoginController.php
C:\Cursos\php\sms\app\Http\Controllers\Controller.php
```

---

## Assistant (Build · MiniMax M2.5 Free · 4.1s)

_Thinking:_

El proyecto está muy avanzado en la documentación pero apenas comenzando en la implementación. Solo hay:
- Módulo Users parcialmente implementado con arquitectura hexagonal
- Algunos modelos Eloquent básicos
- Un LoginController básico

Déjame ver el archivo de rutas para confirmar qué está implementado.







Veamos las rutas definidas:





**Tool: glob**

**Input:**
```json
{
  "pattern": "routes/*.php"
}
```

**Output:**
```
C:\Cursos\php\sms\routes\web.php
C:\Cursos\php\sms\routes\console.php
```

---

## Assistant (Build · MiniMax M2.5 Free · 4.1s)

_Thinking:_

Déjame leer el archivo de rutas web para ver qué hay implementado.













**Tool: read**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\routes\\web.php"
}
```

**Output:**
```
<path>C:\Cursos\php\sms\routes\web.php</path>
<type>file</type>
<content>
1: <?php
2: 
3: use App\Http\Controllers\Auth\LoginController;
4: use Illuminate\Support\Facades\Route;
5: 
6: Route::middleware('guest')->group(function () {
7:     Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
8:     Route::post('/login', [LoginController::class, 'login']);
9: });
10: 
11: Route::middleware('auth')->group(function () {
12:     Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
13:     Route::get('/dashboard', function () {
14:         return view('dashboard');
15:     })->name('dashboard');
16: });
17: 
18: Route::get('/', function () {
19:     return redirect()->route('login');
20: });

(End of file - total 20 lines)
</content>
```

---

## Assistant (Build · MiniMax M2.5 Free · 8.5s)

_Thinking:_

Ahora tengo el panorama completo. Déjame resumir:

1. El SAD define 8 módulos principales: Users, Students, Teachers, Academic, Enrollments, Attendance, Grades, Reports

2. Lo que se ha desarrollado hasta ahora:
- Solo el módulo **Users** está parcialmente implementado en la capa de dominio (arquitectura hexagonal)
- Existe un LoginController básico que probablemente usa autenticación tradicional de Laravel
- Hay algunos modelos Eloquent (User, Teacher)
- Las migraciones solo tienen la tabla de users básica

3. Según el SAD, la trazabilidad con SRS sería:
- RF-01 (Autenticación) → Módulo Users - PARCIALMENTE desarrollado (tienes la estructura pero no el login completo con la arquitectura hexagonal)
- RF-02 (Gestión Usuarios) → Módulo Users - NO desarrollado
- RF-03 (Config. Académica) → Módulo Academic - NO desarrollado
- RF-04 (Matrículas) → Módulo Enrollments - NO desarrollado
- RF-05 (Asistencia) → Módulo Attendance - NO desarrollado
- RF-06 (Calificaciones) → Módulo Grades - NO desarrollado
- RF-07 (Reportes) → Módulo Reports - NO desarrollado

El proyecto está en las etapas iniciales de desarrollo. Solo se ha implementado la estructura básica del módulo Users con arquitectura hexagonal, pero falta wiring completo con controllers y la implementación real de los Use Cases.




Según mi análisis del proyecto, aquí está el estado:

## Estado de Desarrollo vs SAD/SRS

### Módulos Implementados

| Módulo SAD | Requisito SRS | Estado |
|------------|---------------|--------|
| **Users** | RF-01, RF-02, RF-08.2 | **Parcial** ✅ |

### Lo que existe actualmente:

**Capa Dominio (Hexagonal):**
- `src/SMS/Users/Domain/Entities/User.php`
- `src/SMS/Users/Domain/ValueObjects/` (Email, Password, Role, UserStatus)
- `src/SMS/Users/Domain/Repositories/UserRepositoryInterface.php`
- `src/SMS/Users/Domain/Events/UserCreatedEvent.php`
- `src/SMS/Users/Domain/Exceptions/`

**Capa Aplicación:**
- `src/SMS/Users/Application/UseCases/AuthenticateUserUseCase.php`
- `src/SMS/Users/Application/UseCases/CreateUserUseCase.php`
- `src/SMS/Users/Application/DTOs/` (CreateUserDTO, LoginRequestDTO, UserResponseDTO, AuthResponseDTO)

**Capa Infraestructura:**
- `EloquentUserRepository`, `EloquentUserMapper`
- `LoginController` básico (usa Laravel Auth tradicional)

**Base de datos:**
- Solo migración de tabla `users` básica

### Lo que falta desarrollar:

- ❌ **Students** (RF-02.1, RF-04)
- ❌ **Teachers** (RF-02.2)
- ❌ **Academic** (RF-03) - Años lectivos, períodos, grados, grupos, asignaturas
- ❌ **Enrollments** (RF-04) - Matrículas
- ❌ **Attendance** (RF-05) - Asistencia
- ❌ **Grades** (RF-06) - Calificaciones
- ❌ **Reports** (RF-07)

### Conclusión

El proyecto está en las **etapas iniciales**. Solo se ha implementado la **estructura base del módulo Users** con arquitectura hexagonal (carpetas Domain/Application/Infrastructure), pero el LoginController actual probablemente no está conectado a los UseCases hexagonales. El desarrollo completo del MVP aún está por hacer.

---

## User

Creame un plan para el modulo students

---

## Assistant (Plan · MiniMax M2.5 Free · 406.9s)

_Thinking:_

El usuario quiere que cree un plan para el módulo de Students. Según el SAD, el módulo Students corresponde a los requisitos RF-02.1 (Gestión de Estudiantes) y RF-04 (Matrículas). 

Necesito crear un plan detallado que incluya:
1. Entidades del dominio
2. Value Objects
3. Repositories
4. Use Cases
5. Infraestructura (Eloquent, Controllers)
6. Rutas
7. UI/Vistas

Debo seguir la arquitectura hexagonal definida en el SAD.

Voy a preguntarle al usuario si tiene alguna preferencia específica antes de presentar el plan completo.







**Tool: question**

**Input:**
```json
{
  "questions": [
    {
      "question": "¿Qué nivel de detalle prefieres para el plan del módulo Students?",
      "header": "Nivel detalle",
      "options": [
        {
          "label": "Completo",
          "description": "Incluye todos los componentes: entidades, value objects, use cases, repositorios, controladores, rutas, vistas y tests"
        },
        {
          "label": "Core + Infraestructura",
          "description": "Dominio y aplicación completos, controlador y rutas, sin vistas ni tests"
        },
        {
          "label": "Solo Dominio",
          "description": "Entidades, value objects, repositorios e interfaces, sin use cases ni infraestructura"
        }
      ]
    }
  ]
}
```

**Output:**
```
User has answered your questions: "¿Qué nivel de detalle prefieres para el plan del módulo Students?"="Solo Dominio". You can now continue with the user's answers in mind.
```

---

## Assistant (Plan · MiniMax M2.5 Free · 19.8s)

_Thinking:_

El usuario quiere un plan detallado solo para el Dominio (capa interna de la arquitectura hexagonal). Esto significa que debo enfocame en:

1. Entities
2. Value Objects
3. Repository Interfaces
4. Domain Services
5. Domain Events
6. Domain Exceptions

Voy a revisar primero el SAD para entender exactamente qué debe incluir el módulo Students según la especificación.







**Tool: read**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\docs\\SMS_EDUCOL_SAD.md",
  "offset": 710,
  "limit": 50
}
```

**Output:**
```
<path>C:\Cursos\php\sms\docs\SMS_EDUCOL_SAD.md</path>
<type>file</type>
<content>
710: 
711: ### 9.2 Módulo: Students (RF-02.1, RF-04)
712: 
713: **Responsabilidad:** Gestión de estudiantes, datos personales, historial académico.
714: 
715: ```mermaid
716: classDiagram
717:     class Student {
718:         +StudentId id
719:         +Document document
720:         +FullName fullName
721:         +DateOfBirth birthDate
722:         +BloodType bloodType
723:         +EPS eps
724:         +StudentCode studentCode
725:         +calculateAge(): int
726:         +isAgeAppropriateForGrade(Grade): bool
727:     }
728:     
729:     class Document {
730:         +string type
731:         +string number
732:         +validate Colombian algorithm
733:         +equals(other): bool
734:     }
735:     
736:     class StudentRepositoryInterface {
737:         <<interface>>
738:         +findById(StudentId): ?Student
739:         +findByDocument(Document): ?Student
740:         +findByCode(StudentCode): ?Student
741:         +save(Student): void
742:         +search(criteria): Student[]
743:     }
744:     
745:     class CreateStudentUseCase {
746:         +execute(CreateStudentRequest): StudentResponse
747:     }
748:     
749:     Student --> Document
750:     CreateStudentUseCase ..> StudentRepositoryInterface
751: ```
752: 
753: ### 9.3 Módulo: Teachers (RF-02.2, RF-03.7)
754: 
755: **Responsabilidad:** Gestión de docentes, especialidades, carga académica.
756: 
757: ```mermaid
758: classDiagram
759:     class Teacher {

(Showing lines 710-759 of 1803. Use offset=760 to continue.)
</content>
```

---

## Assistant (Plan · MiniMax M2.5 Free · 12.5s)

_Thinking:_

Ahora tengo una buena comprensión de lo que debe incluir el módulo Students. También debo revisar las políticas existentes del módulo Users para mantener consistencia.





Ahora voy a revisar cómo está estructurado el módulo Users existente para mantener consistencia:




**Tool: read**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Users\\Domain\\Entities\\User.php"
}
```

**Output:**
```
<path>C:\Cursos\php\sms\src\SMS\Users\Domain\Entities\User.php</path>
<type>file</type>
<content>
1: <?php
2: 
3: declare(strict_types=1);
4: 
5: namespace Src\SMS\Users\Domain\Entities;
6: 
7: use Src\SMS\Shared\Domain\ValueObjects\Email;
8: use Src\SMS\Shared\Domain\ValueObjects\UserId;
9: use Src\SMS\Users\Domain\ValueObjects\Password;
10: use Src\SMS\Users\Domain\ValueObjects\Role;
11: use Src\SMS\Users\Domain\ValueObjects\UserStatus;
12: 
13: final class User
14: {
15:     private UserId $userId;
16:     private Email $email;
17:     private Password $password;
18:     private Role $role;
19:     private UserStatus $status;
20: 
21:     /**
22:      * @var array<int, object> Domain events that occurred during this operation
23:      */
24:     private array $domainEvents = [];
25: 
26:     private function __construct(UserId $id, Email $email, Password $password, Role $role, UserStatus $status)
27:     {
28:         $this->userId   = $id;
29:         $this->email    = $email;
30:         $this->password = $password;
31:         $this->role     = $role;
32:         $this->status   = $status;
33:     }
34: 
35:     // ===== Getters =====
36: 
37:     public function getId(): UserId
38:     {
39:         return $this->userId;
40:     }
41: 
42:     public function getEmail(): Email
43:     {
44:         return $this->email;
45:     }
46: 
47:     public function getPassword(): Password
48:     {
49:         return $this->password;
50:     }
51: 
52:     public function getRole(): Role
53:     {
54:         return $this->role;
55:     }
56: 
57:     public function getStatus(): UserStatus
58:     {
59:         return $this->status;
60:     }
61: 
62:     /**
63:      * Factory method to create a new User
64:      *
65:      * @param Email $email
66:      * @param string $plainPassword
67:      * @param Role $role
68:      * @return User
69:      */
70:     public static function create(Email $email, string $plainPassword, Role $role): self
71:     {
72:         return new self(
73:             new UserId(),
74:             $email,
75:             Password::fromPlainText($plainPassword),
76:             $role,
77:             UserStatus::ACTIVE
78:         );
79:     }
80: 
81:     /**
82:      * Reconstruct a User from persistence (e.g. database record)
83:      *
84:      * @param UserId $userId
85:      * @param Email $email
86:      * @param Password $password
87:      * @param Role $role
88:      * @param UserStatus $status
89:      * @return User
90:      */
91:     public static function reconstruct(UserId $userId, Email $email, Password $password, Role $role, UserStatus $status): self
92:     {
93:         return new self($userId, $email, $password, $role, $status);
94:     }
95: 
96:     /**
97:      * Change the user's password after verifying the current password.
98:      *
99:      * @param string $currentPasswordPlain
100:      * @param string $newPasswordPlain
101:      * @throws \InvalidArgumentException
102:      * @return void
103:      */
104:     public function changePassword(string $currentPasswordPlain, string $newPasswordPlain): void
105:     {
106:         if (!$this->password->verify($currentPasswordPlain)) {
107:             throw new \InvalidArgumentException('Current password is incorrect.');
108:         }
109: 
110:         $this->password = Password::fromPlainText($newPasswordPlain);
111:     }
112: 
113:     /**
114:      * Change the user's role.
115:      *
116:      * @param Role $newRole
117:      * @return void
118:      */
119:     public function changeRole(Role $newRole): void
120:     {
121:         if ($this->role->equals($newRole)) {
122:             return; // No change needed
123:         }
124: 
125:         $this->role = $newRole;
126:     }
127: 
128:     /**
129:      * Channge the user's status to SUSPENDED
130:      *
131:      * @param string $reason
132:      * @return void
133:      */
134:     public function suspend(string $reason = ''): void
135:     {
136:         if ($this->status === UserStatus::SUSPENDED) {
137:             return;
138:         }
139: 
140:         $this->status = UserStatus::SUSPENDED;
141:     }
142: 
143:     public function activate(): void
144:     {
145:         if ($this->status === UserStatus::ACTIVE) {
146:             return;
147:         }
148: 
149:         $this->status = UserStatus::ACTIVE;
150:     }
151: 
152:     /**
153:      * Change the user's status to INACTIVE
154:      *
155:      * @return void
156:      */
157:     public function deactivate(): void
158:     {
159:         if ($this->status === UserStatus::INACTIVE) {
160:             return;
161:         }
162: 
163:         $this->status = UserStatus::INACTIVE;
164:     }
165: 
166:     /**
167:      * Change the user's email.
168:      *
169:      * @param Email $newEmail
170:      * @return void
171:      */
172:     public function changeEmail(Email $newEmail): void
173:     {
174:         if ($this->email->equals($newEmail)) {
175:             return;
176:         }
177: 
178:         $this->email = $newEmail;
179:     }
180: 
181:     /**
182:      * Compare this user with another user.
183:      *
184:      * @param User $other
185:      * @return bool
186:      */
187:     public function equals(User $other): bool
188:     {
189:         return $this->userId->equals($other->userId);
190:     }
191: 
192:     // ===== Domain Events =====
193: 
194:     /**
195:      * @return array<int, object>
196:      */
197:     public function getDomainEvents(): array
198:     {
199:         return $this->domainEvents;
200:     }
201: 
202:     protected function recordEvent(object $event): void
203:     {
204:         $this->domainEvents[] = $event;
205:     }
206: 
207:     public function clearDomainEvents(): void
208:     {
209:         $this->domainEvents = [];
210:     }
211: 
212:     public function __toString(): string
213:     {
214:         return sprintf('%s (%s)', $this->email->value(), $this->role->value);
215:     }
216: }

(End of file - total 216 lines)
</content>
```

---

## Assistant (Plan · MiniMax M2.5 Free · 15.6s)

_Thinking:_

Ahora tengo toda la información necesaria para crear el plan del módulo Students. Voy a presentar el plan completo al usuario.





# Plan: Módulo Students (Solo Dominio)

Basándome en la arquitectura hexagonal del SAD y el patrón existente en el módulo Users, este es el plan para la capa de Dominio del módulo Students:

---

## Estructura de Archivos a Crear

```
src/SMS/Students/
├── Domain/
│   ├── Entities/
│   │   └── Student.php
│   ├── ValueObjects/
│   │   ├── StudentId.php
│   │   ├── Document.php
│   │   ├── FullName.php
│   │   ├── DateOfBirth.php
│   │   ├── BloodType.php
│   │   ├── StudentCode.php
│   │   └── Eps.php
│   ├── Repositories/
│   │   ├── StudentRepositoryInterface.php
│   │   └── StudentQueryInterface.php
│   ├── Services/
│   │   └── StudentCodeGenerator.php
│   ├── Events/
│   │   ├── StudentCreatedEvent.php
│   │   └── StudentUpdatedEvent.php
│   ├── Exceptions/
│   │   ├── StudentNotFoundException.php
│   │   ├── DuplicateDocumentException.php
│   │   └── DuplicateStudentCodeException.php
│   └── Policies/
│       └── StudentPolicy.php
```

---

## Detalle por Componente

### 1. Value Objects (Objetos de Valor)

| VO | Propiedades | Validaciones |
|----|-------------|--------------|
| `StudentId` | UUID | Inmutabilidad, generación automática |
| `Document` | `type` (TI, CC, CE), `number` | Algoritmo validación documento colombiano |
| `FullName` | `firstName`, `lastName` | No vacío, max 100 caracteres |
| `DateOfBirth` | `value` (Date) | Fecha válida, no futura, edad entre 3-25 años |
| `BloodType` | `value` (A+, A-, B+, B-, AB+, AB-, O+, O-) | Enum válido |
| `StudentCode` | `value` (string) | Formato configurable, único |
| `Eps` | `name`, `code` (opcional) | Opcional |

### 2. Entidad: Student

**Propiedades:**
- `id`: StudentId
- `document`: Document
- `fullName`: FullName
- `birthDate`: DateOfBirth
- `gender`: string (M/F/O)
- `bloodType`: ?BloodType
- `eps`: ?Eps
- `address`: ?string
- `phone`: ?string
- `photoPath`: ?string
- `studentCode`: StudentCode

**Métodos de Dominio:**
- `calculateAge()`: int
- `isAgeAppropriateForGrade(int $minAge, int $maxAge)`: bool
- `changeAddress(string $newAddress): void`
- `updatePhone(string $newPhone): void`
- `equals(Student $other): bool`

**Factory Methods:**
- `create(Document, FullName, DateOfBirth, ...): self`
- `reconstruct(StudentId, ...): self`

### 3. Repository Interfaces

**StudentRepositoryInterface:**
```php
findById(StudentId): ?Student
findByDocument(Document): ?Student
findByCode(StudentCode): ?Student
save(Student): void
delete(StudentId): void
existsByDocument(Document): bool
existsByCode(StudentCode): bool
```

**StudentQueryInterface:**
```php
search(SearchCriteria): PaginatedResult
findByName(string $name): Student[]
findByAgeRange(int $min, int $max): Student[]
```

### 4. Domain Services

**StudentCodeGenerator:**
- Genera código automático según formato configurable
- Formato por defecto: `EST-YYYYMMDD-XXXX`
- Método: `generate(AcademicYearId): StudentCode`

### 5. Domain Events

| Evento | Disparado cuando |
|--------|-------------------|
| `StudentCreatedEvent` | Se crea un nuevo estudiante |
| `StudentUpdatedEvent` | Se actualiza información del estudiante |

### 6. Domain Exceptions

- `StudentNotFoundException` - 404
- `DuplicateDocumentException` - 422
- `DuplicateStudentCodeException` - 422

### 7. Domain Policy

**StudentPolicy:**
```php
canView(User $user, Student $student): bool
canCreate(User $user): bool
canUpdate(User $user, Student $student): bool
canDelete(User $user, Student $student): bool
```

---

## Orden de Implementación Recomendado

1. **Value Objects** (base reusable)
2. **Entidad Student** (lógica de negocio)
3. **Repository Interfaces** (contratos)
4. **Domain Services** (generador de códigos)
5. **Domain Events** (notificaciones)
6. **Exceptions** (errores)
7. **Policies** (autorización)

---

## Siguiente Paso

Una vez completado el Dominio, el plan **Core + Infraestructura** agregaría:
- Use Cases (CreateStudent, UpdateStudent, SearchStudents, etc.)
- DTOs (Request/Response)
- Eloquent Repository Implementation
- Controller + Routes

¿Confirmas este plan para proceder con la implementación del Dominio?

---

## User

Me gusta el plan, ejecuta

---

## Assistant (Build · MiniMax M2.5 Free · 12.7s)

_Thinking:_

The user wants me to execute the plan for the Students module (Domain layer only). I'll create all the files following the hexagonal architecture pattern, consistent with the existing Users module.

Let me create:
1. Value Objects first
2. Then Entity
3. Repository Interfaces
4. Domain Services
5. Domain Events
6. Exceptions
7. Policies

I'll use the same code style as the existing Users module.







**Tool: todowrite**

**Input:**
```json
{
  "todos": [
    {
      "content": "Create Value Objects (StudentId, Document, FullName, DateOfBirth, BloodType, StudentCode, Eps)",
      "status": "in_progress",
      "priority": "high"
    },
    {
      "content": "Create Student Entity",
      "status": "pending",
      "priority": "high"
    },
    {
      "content": "Create Repository Interfaces",
      "status": "pending",
      "priority": "high"
    },
    {
      "content": "Create Domain Services",
      "status": "pending",
      "priority": "medium"
    },
    {
      "content": "Create Domain Events",
      "status": "pending",
      "priority": "medium"
    },
    {
      "content": "Create Domain Exceptions",
      "status": "pending",
      "priority": "medium"
    },
    {
      "content": "Create Domain Policy",
      "status": "pending",
      "priority": "medium"
    }
  ]
}
```

**Output:**
```
[
  {
    "content": "Create Value Objects (StudentId, Document, FullName, DateOfBirth, BloodType, StudentCode, Eps)",
    "status": "in_progress",
    "priority": "high"
  },
  {
    "content": "Create Student Entity",
    "status": "pending",
    "priority": "high"
  },
  {
    "content": "Create Repository Interfaces",
    "status": "pending",
    "priority": "high"
  },
  {
    "content": "Create Domain Services",
    "status": "pending",
    "priority": "medium"
  },
  {
    "content": "Create Domain Events",
    "status": "pending",
    "priority": "medium"
  },
  {
    "content": "Create Domain Exceptions",
    "status": "pending",
    "priority": "medium"
  },
  {
    "content": "Create Domain Policy",
    "status": "pending",
    "priority": "medium"
  }
]
```

---

## Assistant (Build · MiniMax M2.5 Free · 9.0s)

_Thinking:_

Now let me create all the Value Objects. I'll start with StudentId which is similar to UserId.







**Tool: read**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Shared\\Domain\\ValueObjects\\UserId.php"
}
```

**Output:**
```
<path>C:\Cursos\php\sms\src\SMS\Shared\Domain\ValueObjects\UserId.php</path>
<type>file</type>
<content>
1: <?php
2: 
3: declare(strict_types=1);
4: 
5: namespace Src\SMS\Shared\Domain\ValueObjects;
6: 
7: use InvalidArgumentException;
8: use Ramsey\Uuid\Uuid;
9: 
10: final class UserId
11: {
12:     private string $value;
13: 
14:     public function __construct(?string $value = null)
15:     {
16:         if ($value == null) {
17:             $this->value = $this->generate();
18:         } else {
19:             $this->validate($value);
20:             $this->value = $value;
21:         }
22:     }
23: 
24:     public function value(): string
25:     {
26:         return $this->value;
27:     }
28: 
29:     public function equals(UserId $other): bool
30:     {
31:         return $this->value === $other->value();
32:     }
33: 
34:     public function generate(): string
35:     {
36:         return Uuid::uuid4()->toString();
37:     }
38: 
39:     public function validate(string $uuid): void
40:     {
41:         if (!Uuid::isValid($uuid)) {
42:             throw new InvalidArgumentException(
43:                 sprintf("Invalid uuid: %s", $uuid)
44:             );
45:         }
46:     }
47: 
48:     public function __toString(): string
49:     {
50:         return $this->value;
51:     }
52: }

(End of file - total 52 lines)
</content>
```

---

## Assistant (Build · MiniMax M2.5 Free · 12.9s)

_Thinking:_

I'll use this as a template. Now let me create all the value objects and other domain components.







**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\ValueObjects\\StudentId.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Domain\\ValueObjects;\n\nuse InvalidArgumentException;\nuse Ramsey\\Uuid\\Uuid;\n\nfinal class StudentId\n{\n    private string $value;\n\n    public function __construct(?string $value = null)\n    {\n        if ($value === null) {\n            $this->value = $this->generate();\n        } else {\n            $this->validate($value);\n            $this->value = $value;\n        }\n    }\n\n    public function value(): string\n    {\n        return $this->value;\n    }\n\n    public function equals(StudentId $other): bool\n    {\n        return $this->value === $other->value();\n    }\n\n    private function generate(): string\n    {\n        return Uuid::uuid4()->toString();\n    }\n\n    private function validate(string $uuid): void\n    {\n        if (!Uuid::isValid($uuid)) {\n            throw new InvalidArgumentException(\n                sprintf('Invalid student ID: %s', $uuid)\n            );\n        }\n    }\n\n    public function __toString(): string\n    {\n        return $this->value;\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 15.2s)

_Thinking:_

Now let me create the Document value object with validation for Colombian documents.










**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\ValueObjects\\Document.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Domain\\ValueObjects;\n\nuse InvalidArgumentException;\n\nfinal class Document\n{\n    public const TYPE_TI = 'TI';\n    public const TYPE_CC = 'CC';\n    public const TYPE_CE = 'CE';\n\n    public const VALID_TYPES = [\n        self::TYPE_TI,\n        self::TYPE_CC,\n        self::TYPE_CE,\n    ];\n\n    private string $type;\n    private string $number;\n\n    public function __construct(string $type, string $number)\n    {\n        $this->validateType($type);\n        $this->validateNumber($type, $number);\n\n        $this->type = $type;\n        $this->number = $this->normalizeNumber($number);\n    }\n\n    public function type(): string\n    {\n        return $this->type;\n    }\n\n    public function number(): string\n    {\n        return $this->number;\n    }\n\n    public function equals(Document $other): bool\n    {\n        return $this->type === $other->type() && $this->number === $other->number();\n    }\n\n    private function validateType(string $type): void\n    {\n        if (!in_array($type, self::VALID_TYPES, true)) {\n            throw new InvalidArgumentException(\n                sprintf(\n                    'Invalid document type: %s. Valid types are: %s',\n                    $type,\n                    implode(', ', self::VALID_TYPES)\n                )\n            );\n        }\n    }\n\n    private function validateNumber(string $type, string $number): void\n    {\n        if (empty(trim($number))) {\n            throw new InvalidArgumentException('Document number cannot be empty');\n        }\n\n        $number = preg_replace('/[^0-9]/', '', $number);\n\n        $minLength = match ($type) {\n            self::TYPE_TI => 8,\n            self::TYPE_CC => 6,\n            self::TYPE_CE => 6,\n            default => 6,\n        };\n\n        if (strlen($number) < $minLength) {\n            throw new InvalidArgumentException(\n                sprintf(\n                    'Document number must be at least %d digits for type %s',\n                    $minLength,\n                    $type\n                )\n            );\n        }\n\n        if (strlen($number) > 15) {\n            throw new InvalidArgumentException('Document number cannot exceed 15 digits');\n        }\n    }\n\n    private function normalizeNumber(string $number): string\n    {\n        return preg_replace('/[^0-9]/', '', $number);\n    }\n\n    public function __toString(): string\n    {\n        return sprintf('%s %s', $this->type, $this->number);\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 20.4s)

_Thinking:_

Now let me create FullName value object.












**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\ValueObjects\\FullName.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Domain\\ValueObjects;\n\nuse InvalidArgumentException;\n\nfinal class FullName\n{\n    private string $firstName;\n    private string $lastName;\n    private string $fullName;\n\n    public function __construct(string $firstName, string $lastName)\n    {\n        $this->validateFirstName($firstName);\n        $this->validateLastName($lastName);\n\n        $this->firstName = $this->normalize($firstName);\n        $this->lastName = $this->normalize($lastName);\n        $this->fullName = trim(sprintf('%s %s', $this->firstName, $this->lastName));\n    }\n\n    public function firstName(): string\n    {\n        return $this->firstName;\n    }\n\n    public function lastName(): string\n    {\n        return $this->lastName;\n    }\n\n    public function value(): string\n    {\n        return $this->fullName;\n    }\n\n    public function equals(FullName $other): bool\n    {\n        return $this->firstName === $other->firstName()\n            && $this->lastName === $other->lastName();\n    }\n\n    public function initials(): string\n    {\n        return sprintf(\n            '%s%s',\n            strtoupper(substr($this->firstName, 0, 1)),\n            strtoupper(substr($this->lastName, 0, 1))\n        );\n    }\n\n    private function validateFirstName(string $firstName): void\n    {\n        $firstName = trim($firstName);\n\n        if (empty($firstName)) {\n            throw new InvalidArgumentException('First name cannot be empty');\n        }\n\n        if (mb_strlen($firstName) > 50) {\n            throw new InvalidArgumentException('First name cannot exceed 50 characters');\n        }\n    }\n\n    private function validateLastName(string $lastName): void\n    {\n        $lastName = trim($lastName);\n\n        if (empty($lastName)) {\n            throw new InvalidArgumentException('Last name cannot be empty');\n        }\n\n        if (mb_strlen($lastName) > 50) {\n            throw new InvalidArgumentException('Last name cannot exceed 50 characters');\n        }\n    }\n\n    private function normalize(string $name): string\n    {\n        $name = trim($name);\n        $name = preg_replace('/\\s+/', ' ', $name);\n        return mb_convert_case($name, MB_CASE_TITLE, 'UTF-8');\n    }\n\n    public function __toString(): string\n    {\n        return $this->fullName;\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 20.2s)

_Thinking:_

Now let me create the DateOfBirth value object.














**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\ValueObjects\\DateOfBirth.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Domain\\ValueObjects;\n\nuse InvalidArgumentException;\nuse DateTimeImmutable;\n\nfinal class DateOfBirth\n{\n    private DateTimeImmutable $value;\n\n    private const MIN_AGE = 3;\n    private const MAX_AGE = 25;\n\n    public function __construct(string|DateTimeImmutable $value)\n    {\n        if (is_string($value)) {\n            $this->value = $this->parseDate($value);\n        } else {\n            $this->value = $value;\n        }\n\n        $this->validate();\n    }\n\n    public function value(): DateTimeImmutable\n    {\n        return $this->value;\n    }\n\n    public function toString(string $format = 'Y-m-d'): string\n    {\n        return $this->value->format($format);\n    }\n\n    public function calculateAge(): int\n    {\n        $now = new DateTimeImmutable();\n        $interval = $this->value->diff($now);\n\n        return $interval->y;\n    }\n\n    public function isAgeAppropriate(int $minAge, int $maxAge): bool\n    {\n        $age = $this->calculateAge();\n        return $age >= $minAge && $age <= $maxAge;\n    }\n\n    public function equals(DateOfBirth $other): bool\n    {\n        return $this->value->format('Y-m-d') === $other->value()->format('Y-m-d');\n    }\n\n    private function parseDate(string $date): DateTimeImmutable\n    {\n        $parsed = DateTimeImmutable::createFromFormat('Y-m-d', $date);\n\n        if ($parsed === false) {\n            $parsed = DateTimeImmutable::createFromFormat('d/m/Y', $date);\n        }\n\n        if ($parsed === false) {\n            throw new InvalidArgumentException(\n                sprintf('Invalid date format: %s. Expected Y-m-d', $date)\n            );\n        }\n\n        return $parsed;\n    }\n\n    private function validate(): void\n    {\n        $now = new DateTimeImmutable();\n\n        if ($this->value > $now) {\n            throw new InvalidArgumentException('Date of birth cannot be in the future');\n        }\n\n        $age = $this->calculateAge();\n\n        if ($age < self::MIN_AGE) {\n            throw new InvalidArgumentException(\n                sprintf('Student must be at least %d years old', self::MIN_AGE)\n            );\n        }\n\n        if ($age > self::MAX_AGE) {\n            throw new InvalidArgumentException(\n                sprintf('Student cannot be older than %d years', self::MAX_AGE)\n            );\n        }\n    }\n\n    public function __toString(): string\n    {\n        return $this->toString();\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 21.3s)

_Thinking:_

Now let me create the BloodType value object.




















**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\ValueObjects\\BloodType.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Domain\\ValueObjects;\n\nuse InvalidArgumentException;\n\nfinal class BloodType\n{\n    public const A_POSITIVE = 'A+';\n    public const A_NEGATIVE = 'A-';\n    public const B_POSITIVE = 'B+';\n    public const B_NEGATIVE = 'B-';\n    public const AB_POSITIVE = 'AB+';\n    public const AB_NEGATIVE = 'AB-';\n    public const O_POSITIVE = 'O+';\n    public const O_NEGATIVE = 'O-';\n\n    public const VALID_TYPES = [\n        self::A_POSITIVE,\n        self::A_NEGATIVE,\n        self::B_POSITIVE,\n        self::B_NEGATIVE,\n        self::AB_POSITIVE,\n        self::AB_NEGATIVE,\n        self::O_POSITIVE,\n        self::O_NEGATIVE,\n    ];\n\n    private string $value;\n\n    public function __construct(?string $value = null)\n    {\n        if ($value === null) {\n            return;\n        }\n\n        $this->validate($value);\n        $this->value = $value;\n    }\n\n    public function value(): string\n    {\n        return $this->value;\n    }\n\n    public function hasValue(): bool\n    {\n        return isset($this->value);\n    }\n\n    public function isPositive(): bool\n    {\n        return in_array($this->value, ['A+', 'B+', 'AB+', 'O+'], true);\n    }\n\n    public function canDonateTo(BloodType $recipient): bool\n    {\n        $donorCompatibility = [\n            'O-' => ['O-', 'O+', 'A-', 'A+', 'B-', 'B+', 'AB-', 'AB+'],\n            'O+' => ['O+', 'A+', 'B+', 'AB+'],\n            'A-' => ['A-', 'A+', 'AB-', 'AB+'],\n            'A+' => ['A+', 'AB+'],\n            'B-' => ['B-', 'B+', 'AB-', 'AB+'],\n            'B+' => ['B+', 'AB+'],\n            'AB-' => ['AB-', 'AB+'],\n            'AB+' => ['AB+'],\n        ];\n\n        return in_array($recipient->value(), $donorCompatibility[$this->value] ?? [], true);\n    }\n\n    public function canReceiveFrom(BloodType $donor): bool\n    {\n        return $donor->canDonateTo($this);\n    }\n\n    public function equals(BloodType $other): bool\n    {\n        return $this->value === $other->value();\n    }\n\n    private function validate(string $value): void\n    {\n        if (!in_array($value, self::VALID_TYPES, true)) {\n            throw new InvalidArgumentException(\n                sprintf(\n                    'Invalid blood type: %s. Valid types are: %s',\n                    $value,\n                    implode(', ', self::VALID_TYPES)\n                )\n            );\n        }\n    }\n\n    public function __toString(): string\n    {\n        return $this->value ?? '';\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 31.4s)

_Thinking:_

Now let me create StudentCode value object.

























**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\ValueObjects\\StudentCode.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Domain\\ValueObjects;\n\nuse InvalidArgumentException;\n\nfinal class StudentCode\n{\n    private string $value;\n\n    public const DEFAULT_FORMAT = 'EST-{YEAR}-{SEQUENCE}';\n    public const SEQUENCE_LENGTH = 4;\n\n    private function __construct(string $value)\n    {\n        $this->value = $value;\n    }\n\n    public static function create(string $value): self\n    {\n        $value = strtoupper(trim($value));\n\n        if (empty($value)) {\n            throw new InvalidArgumentException('Student code cannot be empty');\n        }\n\n        if (strlen($value) > 20) {\n            throw new InvalidArgumentException('Student code cannot exceed 20 characters');\n        }\n\n        if (!preg_match('/^[A-Z0-9\\-]+$/', $value)) {\n            throw new InvalidArgumentException(\n                'Student code can only contain uppercase letters, numbers, and hyphens'\n            );\n        }\n\n        return new self($value);\n    }\n\n    public static function generate(int $year, int $sequence): self\n    {\n        $sequenceStr = str_pad((string)$sequence, self::SEQUENCE_LENGTH, '0', STR_PAD_LEFT);\n        $code = str_replace('{YEAR}', (string)$year, self::DEFAULT_FORMAT);\n        $code = str_replace('{SEQUENCE}', $sequenceStr, $code);\n\n        return new self($code);\n    }\n\n    public function value(): string\n    {\n        return $this->value;\n    }\n\n    public function sequence(): int\n    {\n        if (preg_match('/-(\\d+)$/', $this->value, $matches)) {\n            return (int)$matches[1];\n        }\n\n        return 0;\n    }\n\n    public function year(): int\n    {\n        if (preg_match('/(\\d{4})/', $this->value, $matches)) {\n            return (int)$matches[1];\n        }\n\n        return 0;\n    }\n\n    public function equals(StudentCode $other): bool\n    {\n        return $this->value === $other->value();\n    }\n\n    public function __toString(): string\n    {\n        return $this->value;\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 56.3s)

_Thinking:_

Now let me create the Eps value object.































**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\ValueObjects\\Eps.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Domain\\ValueObjects;\n\nuse InvalidArgumentException;\n\nfinal class Eps\n{\n    private string $name;\n    private ?string $code;\n\n    public function __construct(string $name, ?string $code = null)\n    {\n        $this->validateName($name);\n        $this->validateCode($code);\n\n        $this->name = trim($name);\n        $this->code = $code !== null ? strtoupper(trim($code)) : null;\n    }\n\n    public function name(): string\n    {\n        return $this->name;\n    }\n\n    public function code(): ?string\n    {\n        return $this->code;\n    }\n\n    public function hasCode(): bool\n    {\n        return $this->code !== null;\n    }\n\n    public function equals(Eps $other): bool\n    {\n        if ($this->code !== null && $other->code !== null) {\n            return $this->code === $other->code;\n        }\n\n        return strcasecmp($this->name, $other->name) === 0;\n    }\n\n    private function validateName(string $name): void\n    {\n        $name = trim($name);\n\n        if (empty($name)) {\n            throw new InvalidArgumentException('EPS name cannot be empty');\n        }\n\n        if (mb_strlen($name) > 100) {\n            throw new InvalidArgumentException('EPS name cannot exceed 100 characters');\n        }\n    }\n\n    private function validateCode(?string $code): void\n    {\n        if ($code === null) {\n            return;\n        }\n\n        $code = trim($code);\n\n        if (!empty($code) && strlen($code) > 10) {\n            throw new InvalidArgumentException('EPS code cannot exceed 10 characters');\n        }\n    }\n\n    public function __toString(): string\n    {\n        return $this->name;\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 8.6s)

_Thinking:_

Now I've created all Value Objects. Let me update the todo and start with the Entity.









**Tool: todowrite**

**Input:**
```json
{
  "todos": [
    {
      "content": "Create Value Objects (StudentId, Document, FullName, DateOfBirth, BloodType, StudentCode, Eps)",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Student Entity",
      "status": "in_progress",
      "priority": "high"
    },
    {
      "content": "Create Repository Interfaces",
      "status": "pending",
      "priority": "high"
    },
    {
      "content": "Create Domain Services",
      "status": "pending",
      "priority": "medium"
    },
    {
      "content": "Create Domain Events",
      "status": "pending",
      "priority": "medium"
    },
    {
      "content": "Create Domain Exceptions",
      "status": "pending",
      "priority": "medium"
    },
    {
      "content": "Create Domain Policy",
      "status": "pending",
      "priority": "medium"
    }
  ]
}
```

**Output:**
```
[
  {
    "content": "Create Value Objects (StudentId, Document, FullName, DateOfBirth, BloodType, StudentCode, Eps)",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Student Entity",
    "status": "in_progress",
    "priority": "high"
  },
  {
    "content": "Create Repository Interfaces",
    "status": "pending",
    "priority": "high"
  },
  {
    "content": "Create Domain Services",
    "status": "pending",
    "priority": "medium"
  },
  {
    "content": "Create Domain Events",
    "status": "pending",
    "priority": "medium"
  },
  {
    "content": "Create Domain Exceptions",
    "status": "pending",
    "priority": "medium"
  },
  {
    "content": "Create Domain Policy",
    "status": "pending",
    "priority": "medium"
  }
]
```

---

## Assistant (Build · MiniMax M2.5 Free · 16.7s)

_Thinking:_

Now let me create the Student Entity, following the pattern of the User entity.







**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\Entities\\Student.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Domain\\Entities;\n\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\StudentId;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\Document;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\FullName;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\DateOfBirth;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\BloodType;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\StudentCode;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\Eps;\n\nfinal class Student\n{\n    private StudentId $id;\n    private Document $document;\n    private FullName $fullName;\n    private DateOfBirth $birthDate;\n    private string $gender;\n    private ?BloodType $bloodType;\n    private ?Eps $eps;\n    private ?string $address;\n    private ?string $phone;\n    private ?string $email;\n    private ?string $photoPath;\n    private StudentCode $studentCode;\n    private ?string $parentName;\n    private ?string $parentPhone;\n    private ?string $parentEmail;\n\n    private array $domainEvents = [];\n\n    private function __construct(\n        StudentId $id,\n        Document $document,\n        FullName $fullName,\n        DateOfBirth $birthDate,\n        string $gender,\n        StudentCode $studentCode,\n        ?BloodType $bloodType = null,\n        ?Eps $eps = null,\n        ?string $address = null,\n        ?string $phone = null,\n        ?string $email = null,\n        ?string $photoPath = null,\n        ?string $parentName = null,\n        ?string $parentPhone = null,\n        ?string $parentEmail = null\n    ) {\n        $this->id = $id;\n        $this->document = $document;\n        $this->fullName = $fullName;\n        $this->birthDate = $birthDate;\n        $this->gender = $gender;\n        $this->bloodType = $bloodType;\n        $this->eps = $eps;\n        $this->address = $address;\n        $this->phone = $phone;\n        $this->email = $email;\n        $this->photoPath = $photoPath;\n        $this->studentCode = $studentCode;\n        $this->parentName = $parentName;\n        $this->parentPhone = $parentPhone;\n        $this->parentEmail = $parentEmail;\n    }\n\n    public function getId(): StudentId\n    {\n        return $this->id;\n    }\n\n    public function getDocument(): Document\n    {\n        return $this->document;\n    }\n\n    public function getFullName(): FullName\n    {\n        return $this->fullName;\n    }\n\n    public function getBirthDate(): DateOfBirth\n    {\n        return $this->birthDate;\n    }\n\n    public function getGender(): string\n    {\n        return $this->gender;\n    }\n\n    public function getBloodType(): ?BloodType\n    {\n        return $this->bloodType;\n    }\n\n    public function getEps(): ?Eps\n    {\n        return $this->eps;\n    }\n\n    public function getAddress(): ?string\n    {\n        return $this->address;\n    }\n\n    public function getPhone(): ?string\n    {\n        return $this->phone;\n    }\n\n    public function getEmail(): ?string\n    {\n        return $this->email;\n    }\n\n    public function getPhotoPath(): ?string\n    {\n        return $this->photoPath;\n    }\n\n    public function getStudentCode(): StudentCode\n    {\n        return $this->studentCode;\n    }\n\n    public function getParentName(): ?string\n    {\n        return $this->parentName;\n    }\n\n    public function getParentPhone(): ?string\n    {\n        return $this->parentPhone;\n    }\n\n    public function getParentEmail(): ?string\n    {\n        return $this->parentEmail;\n    }\n\n    public static function create(\n        Document $document,\n        FullName $fullName,\n        DateOfBirth $birthDate,\n        string $gender,\n        StudentCode $studentCode,\n        ?BloodType $bloodType = null,\n        ?Eps $eps = null,\n        ?string $address = null,\n        ?string $phone = null,\n        ?string $email = null,\n        ?string $photoPath = null,\n        ?string $parentName = null,\n        ?string $parentPhone = null,\n        ?string $parentEmail = null\n    ): self {\n        $student = new self(\n            new StudentId(),\n            $document,\n            $fullName,\n            $birthDate,\n            $gender,\n            $studentCode,\n            $bloodType,\n            $eps,\n            $address,\n            $phone,\n            $email,\n            $photoPath,\n            $parentName,\n            $parentPhone,\n            $parentEmail\n        );\n\n        return $student;\n    }\n\n    public static function reconstruct(\n        StudentId $id,\n        Document $document,\n        FullName $fullName,\n        DateOfBirth $birthDate,\n        string $gender,\n        StudentCode $studentCode,\n        ?BloodType $bloodType = null,\n        ?Eps $eps = null,\n        ?string $address = null,\n        ?string $phone = null,\n        ?string $email = null,\n        ?string $photoPath = null,\n        ?string $parentName = null,\n        ?string $parentPhone = null,\n        ?string $parentEmail = null\n    ): self {\n        return new self(\n            $id,\n            $document,\n            $fullName,\n            $birthDate,\n            $gender,\n            $studentCode,\n            $bloodType,\n            $eps,\n            $address,\n            $phone,\n            $email,\n            $photoPath,\n            $parentName,\n            $parentPhone,\n            $parentEmail\n        );\n    }\n\n    public function calculateAge(): int\n    {\n        return $this->birthDate->calculateAge();\n    }\n\n    public function isAgeAppropriateForGrade(int $minAge, int $maxAge): bool\n    {\n        return $this->birthDate->isAgeAppropriate($minAge, $maxAge);\n    }\n\n    public function hasValidEmail(): bool\n    {\n        return $this->email !== null && filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;\n    }\n\n    public function hasParentContact(): bool\n    {\n        return $this->parentPhone !== null || $this->parentEmail !== null;\n    }\n\n    public function changeAddress(string $newAddress): void\n    {\n        $this->address = trim($newAddress);\n    }\n\n    public function changePhone(string $newPhone): void\n    {\n        $this->phone = preg_replace('/[^0-9]/', '', $newPhone);\n    }\n\n    public function changeEmail(?string $newEmail): void\n    {\n        if ($newEmail !== null && filter_var($newEmail, FILTER_VALIDATE_EMAIL) === false) {\n            throw new \\InvalidArgumentException('Invalid email address');\n        }\n        $this->email = $newEmail;\n    }\n\n    public function updateBloodType(?BloodType $bloodType): void\n    {\n        $this->bloodType = $bloodType;\n    }\n\n    public function updateEps(?Eps $eps): void\n    {\n        $this->eps = $eps;\n    }\n\n    public function updatePhoto(?string $photoPath): void\n    {\n        $this->photoPath = $photoPath;\n    }\n\n    public function updateParentContact(\n        ?string $parentName,\n        ?string $parentPhone,\n        ?string $parentEmail\n    ): void {\n        $this->parentName = $parentName;\n        $this->parentPhone = $parentPhone !== null ? preg_replace('/[^0-9]/', '', $parentPhone) : null;\n        $this->parentEmail = $parentEmail;\n    }\n\n    public function equals(Student $other): bool\n    {\n        return $this->id->equals($other->getId());\n    }\n\n    public function getDomainEvents(): array\n    {\n        return $this->domainEvents;\n    }\n\n    protected function recordEvent(object $event): void\n    {\n        $this->domainEvents[] = $event;\n    }\n\n    public function clearDomainEvents(): void\n    {\n        $this->domainEvents = [];\n    }\n\n    public function __toString(): string\n    {\n        return sprintf(\n            '%s (%s) - %s',\n            $this->fullName->value(),\n            $this->studentCode->value(),\n            $this->document\n        );\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 18.3s)

_Thinking:_

Now let me create the Repository interfaces. I'll use a similar pattern to the User module.









**Tool: todowrite**

**Input:**
```json
{
  "todos": [
    {
      "content": "Create Value Objects (StudentId, Document, FullName, DateOfBirth, BloodType, StudentCode, Eps)",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Student Entity",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Repository Interfaces",
      "status": "in_progress",
      "priority": "high"
    },
    {
      "content": "Create Domain Services",
      "status": "pending",
      "priority": "medium"
    },
    {
      "content": "Create Domain Events",
      "status": "pending",
      "priority": "medium"
    },
    {
      "content": "Create Domain Exceptions",
      "status": "pending",
      "priority": "medium"
    },
    {
      "content": "Create Domain Policy",
      "status": "pending",
      "priority": "medium"
    }
  ]
}
```

**Output:**
```
[
  {
    "content": "Create Value Objects (StudentId, Document, FullName, DateOfBirth, BloodType, StudentCode, Eps)",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Student Entity",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Repository Interfaces",
    "status": "in_progress",
    "priority": "high"
  },
  {
    "content": "Create Domain Services",
    "status": "pending",
    "priority": "medium"
  },
  {
    "content": "Create Domain Events",
    "status": "pending",
    "priority": "medium"
  },
  {
    "content": "Create Domain Exceptions",
    "status": "pending",
    "priority": "medium"
  },
  {
    "content": "Create Domain Policy",
    "status": "pending",
    "priority": "medium"
  }
]
```

---

## Assistant (Build · MiniMax M2.5 Free · 16.3s)

_Thinking:_

Now let me check the UserRepositoryInterface to follow the same pattern.










**Tool: read**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Users\\Domain\\Repositories\\UserRepositoryInterface.php"
}
```

**Output:**
```
<path>C:\Cursos\php\sms\src\SMS\Users\Domain\Repositories\UserRepositoryInterface.php</path>
<type>file</type>
<content>
1: <?php
2: 
3: declare(strict_types=1);
4: 
5: namespace Src\SMS\Users\Domain\Repositories;
6: 
7: use Src\SMS\Shared\Domain\ValueObjects\Email;
8: use Src\SMS\Shared\Domain\ValueObjects\UserId;
9: use Src\SMS\Users\Domain\Entities\User;
10: 
11: interface UserRepositoryInterface
12: {
13:     /**
14:      * Persist a new user or update an existing one
15:      */
16:     public function save(User $user): void;
17: 
18:     /**
19:      * Find a user by their unique identifier
20:      */
21:     public function findById(UserId $userId): ?User;
22: 
23:     /**
24:      * Find a user by their email address
25:      */
26:     public function findByEmail(Email $email): ?User;
27: 
28:     /**
29:      * Check if a user with the given email exists
30:      *
31:      * @param Email $email
32:      * @return bool
33:      */
34:     public function existsByEmail(Email $email): bool;
35: 
36:     /**
37:      * Delete a user from persistence
38:      */
39:     public function delete(User $user): void;
40: }

(End of file - total 40 lines)
</content>
```

---

## Assistant (Build · MiniMax M2.5 Free · 28.1s)

_Thinking:_

Good. Now I'll create the StudentRepositoryInterface and StudentQueryInterface following this pattern.













**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\Repositories\\StudentRepositoryInterface.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Domain\\Repositories;\n\nuse Src\\SMS\\Students\\Domain\\Entities\\Student;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\StudentId;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\Document;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\StudentCode;\n\ninterface StudentRepositoryInterface\n{\n    public function save(Student $student): void;\n\n    public function findById(StudentId $studentId): ?Student;\n\n    public function findByDocument(Document $document): ?Student;\n\n    public function findByCode(StudentCode $studentCode): ?Student;\n\n    public function delete(Student $student): void;\n\n    public function existsByDocument(Document $document): bool;\n\n    public function existsByCode(StudentCode $studentCode): bool;\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 37.9s)

_Thinking:_

Now let me create the StudentQueryInterface for complex queries.






















**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\Repositories\\StudentQueryInterface.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Domain\\Repositories;\n\nuse Src\\SMS\\Students\\Domain\\Entities\\Student;\n\ninterface StudentQueryInterface\n{\n    public function search(StudentSearchCriteria $criteria): StudentPaginatedResult;\n\n    public function findByName(string $name): array;\n\n    public function findByAgeRange(int $minAge, int $maxAge): array;\n\n    public function findAll(int $page = 1, int $perPage = 20): StudentPaginatedResult;\n}\n\nclass StudentSearchCriteria\n{\n    public function __construct(\n        public readonly ?string $name = null,\n        public readonly ?string $documentNumber = null,\n        public readonly ?string $studentCode = null,\n        public readonly ?string $gender = null,\n        public readonly ?int $minAge = null,\n        public readonly ?int $maxAge = null,\n        public readonly ?string $eps = null,\n        public readonly ?string $orderBy = 'full_name',\n        public readonly ?string $orderDirection = 'asc'\n    ) {}\n}\n\nclass StudentPaginatedResult\n{\n    public function __construct(\n        public readonly array $items,\n        public readonly int $total,\n        public readonly int $currentPage,\n        public readonly int $perPage,\n        public readonly int $lastPage\n    ) {}\n\n    public static function empty(): self\n    {\n        return new self([], 0, 1, 20, 0);\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 16.0s)

_Thinking:_

Now let me create the Domain Services (StudentCodeGenerator).













**Tool: todowrite**

**Input:**
```json
{
  "todos": [
    {
      "content": "Create Value Objects (StudentId, Document, FullName, DateOfBirth, BloodType, StudentCode, Eps)",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Student Entity",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Repository Interfaces",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Domain Services",
      "status": "in_progress",
      "priority": "medium"
    },
    {
      "content": "Create Domain Events",
      "status": "pending",
      "priority": "medium"
    },
    {
      "content": "Create Domain Exceptions",
      "status": "pending",
      "priority": "medium"
    },
    {
      "content": "Create Domain Policy",
      "status": "pending",
      "priority": "medium"
    }
  ]
}
```

**Output:**
```
[
  {
    "content": "Create Value Objects (StudentId, Document, FullName, DateOfBirth, BloodType, StudentCode, Eps)",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Student Entity",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Repository Interfaces",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Domain Services",
    "status": "in_progress",
    "priority": "medium"
  },
  {
    "content": "Create Domain Events",
    "status": "pending",
    "priority": "medium"
  },
  {
    "content": "Create Domain Exceptions",
    "status": "pending",
    "priority": "medium"
  },
  {
    "content": "Create Domain Policy",
    "status": "pending",
    "priority": "medium"
  }
]
```

---

## Assistant (Build · MiniMax M2.5 Free · 23.1s)

_Thinking:_

Now I'll create the Domain Services (StudentCodeGenerator).



















**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\Services\\StudentCodeGenerator.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Domain\\Services;\n\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\StudentCode;\n\nfinal class StudentCodeGenerator\n{\n    private const DEFAULT_FORMAT = 'EST-{YEAR}-{SEQUENCE}';\n    private const SEQUENCE_LENGTH = 4;\n\n    private int $nextSequence;\n\n    public function __construct(int $startSequence = 1)\n    {\n        $this->nextSequence = $startSequence;\n    }\n\n    public function generate(int $year, ?string $format = null): StudentCode\n    {\n        $format = $format ?? self::DEFAULT_FORMAT;\n        $sequenceStr = str_pad(\n            (string)$this->nextSequence,\n            self::SEQUENCE_LENGTH,\n            '0',\n            STR_PAD_LEFT\n        );\n\n        $code = str_replace('{YEAR}', (string)$year, $format);\n        $code = str_replace('{SEQUENCE}', $sequenceStr, $code);\n\n        $this->nextSequence++;\n\n        return StudentCode::create($code);\n    }\n\n    public function setSequence(int $sequence): void\n    {\n        $this->nextSequence = $sequence;\n    }\n\n    public function getCurrentSequence(): int\n    {\n        return $this->nextSequence;\n    }\n\n    public static function parseCode(string $studentCode): array\n    {\n        $pattern = '/(\\w+)-(\\d{4})-(\\d+)/';\n\n        if (preg_match($pattern, $studentCode, $matches)) {\n            return [\n                'prefix' => $matches[1],\n                'year' => (int)$matches[2],\n                'sequence' => (int)$matches[3],\n            ];\n        }\n\n        return [];\n    }\n\n    public static function extractYear(string $studentCode): ?int\n    {\n        $parsed = self::parseCode($studentCode);\n        return $parsed['year'] ?? null;\n    }\n\n    public static function extractSequence(string $studentCode): ?int\n    {\n        $parsed = self::parseCode($studentCode);\n        return $parsed['sequence'] ?? null;\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 13.1s)

_Thinking:_

Now let me create the Domain Events.
















**Tool: todowrite**

**Input:**
```json
{
  "todos": [
    {
      "content": "Create Value Objects (StudentId, Document, FullName, DateOfBirth, BloodType, StudentCode, Eps)",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Student Entity",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Repository Interfaces",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Domain Services",
      "status": "completed",
      "priority": "medium"
    },
    {
      "content": "Create Domain Events",
      "status": "in_progress",
      "priority": "medium"
    },
    {
      "content": "Create Domain Exceptions",
      "status": "pending",
      "priority": "medium"
    },
    {
      "content": "Create Domain Policy",
      "status": "pending",
      "priority": "medium"
    }
  ]
}
```

**Output:**
```
[
  {
    "content": "Create Value Objects (StudentId, Document, FullName, DateOfBirth, BloodType, StudentCode, Eps)",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Student Entity",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Repository Interfaces",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Domain Services",
    "status": "completed",
    "priority": "medium"
  },
  {
    "content": "Create Domain Events",
    "status": "in_progress",
    "priority": "medium"
  },
  {
    "content": "Create Domain Exceptions",
    "status": "pending",
    "priority": "medium"
  },
  {
    "content": "Create Domain Policy",
    "status": "pending",
    "priority": "medium"
  }
]
```

---

## Assistant (Build · MiniMax M2.5 Free · 11.2s)

_Thinking:_

Now I'll create the domain events for the Students module. Let me first check the pattern used in the Users module.













**Tool: read**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Users\\Domain\\Events\\UserCreatedEvent.php"
}
```

**Output:**
```
<path>C:\Cursos\php\sms\src\SMS\Users\Domain\Events\UserCreatedEvent.php</path>
<type>file</type>
<content>
1: <?php
2: 
3: declare(strict_types=1);
4: 
5: namespace Src\SMS\Users\Domain\Events;
6: 
7: use Src\SMS\Shared\Domain\ValueObjects\Email;
8: use Src\SMS\Shared\Domain\ValueObjects\UserId;
9: use Src\SMS\Users\Domain\ValueObjects\Role;
10: 
11: final class UserCreatedEvent
12: {
13:     public function __construct(
14:         private readonly UserId $userId,
15:         private readonly Email $email,
16:         private readonly Role $role,
17:     ) {
18:     }
19: 
20:     public function getUserId(): UserId
21:     {
22:         return $this->userId;
23:     }
24: 
25:     public function getEmail(): Email
26:     {
27:         return $this->email;
28:     }
29: 
30:     public function getRole(): Role
31:     {
32:         return $this->role;
33:     }
34: 
35:     public function getOccurredOn(): \DateTimeImmutable
36:     {
37:         return new \DateTimeImmutable();
38:     }
39: }

(End of file - total 39 lines)
</content>
```

---

## Assistant (Build · MiniMax M2.5 Free · 12.4s)

_Thinking:_

Now I'll create the domain events for Students following this pattern.


















**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\Events\\StudentCreatedEvent.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Domain\\Events;\n\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\StudentId;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\StudentCode;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\Document;\n\nfinal class StudentCreatedEvent\n{\n    public function __construct(\n        private readonly StudentId $studentId,\n        private readonly StudentCode $studentCode,\n        private readonly Document $document,\n        private readonly string $fullName,\n    ) {\n    }\n\n    public function getStudentId(): StudentId\n    {\n        return $this->studentId;\n    }\n\n    public function getStudentCode(): StudentCode\n    {\n        return $this->studentCode;\n    }\n\n    public function getDocument(): Document\n    {\n        return $this->document;\n    }\n\n    public function getFullName(): string\n    {\n        return $this->fullName;\n    }\n\n    public function getOccurredOn(): \\DateTimeImmutable\n    {\n        return new \\DateTimeImmutable();\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 66.7s)

_Thinking:_

Now let me create StudentUpdatedEvent.




























**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\Events\\StudentUpdatedEvent.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Domain\\Events;\n\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\StudentId;\n\nfinal class StudentUpdatedEvent\n{\n    public function __construct(\n        private readonly StudentId $studentId,\n        private readonly array $changedFields,\n    ) {\n    }\n\n    public function getStudentId(): StudentId\n    {\n        return $this->studentId;\n    }\n\n    public function getChangedFields(): array\n    {\n        return $this->changedFields;\n    }\n\n    public function hasChanged(string $field): bool\n    {\n        return in_array($field, $this->changedFields, true);\n    }\n\n    public function getOccurredOn(): \\DateTimeImmutable\n    {\n        return new \\DateTimeImmutable();\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 44.0s)

_Thinking:_

Now let me create the Domain Exceptions.













**Tool: todowrite**

**Input:**
```json
{
  "todos": [
    {
      "content": "Create Value Objects (StudentId, Document, FullName, DateOfBirth, BloodType, StudentCode, Eps)",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Student Entity",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Repository Interfaces",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Domain Services",
      "status": "completed",
      "priority": "medium"
    },
    {
      "content": "Create Domain Events",
      "status": "completed",
      "priority": "medium"
    },
    {
      "content": "Create Domain Exceptions",
      "status": "in_progress",
      "priority": "medium"
    },
    {
      "content": "Create Domain Policy",
      "status": "pending",
      "priority": "medium"
    }
  ]
}
```

**Output:**
```
[
  {
    "content": "Create Value Objects (StudentId, Document, FullName, DateOfBirth, BloodType, StudentCode, Eps)",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Student Entity",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Repository Interfaces",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Domain Services",
    "status": "completed",
    "priority": "medium"
  },
  {
    "content": "Create Domain Events",
    "status": "completed",
    "priority": "medium"
  },
  {
    "content": "Create Domain Exceptions",
    "status": "in_progress",
    "priority": "medium"
  },
  {
    "content": "Create Domain Policy",
    "status": "pending",
    "priority": "medium"
  }
]
```

---

## Assistant (Build · MiniMax M2.5 Free · 19.4s)

_Thinking:_

Let me check the exceptions from the Users module to follow the same pattern.




















**Tool: read**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Users\\Domain\\Exceptions\\InvalidCredentialsException.php"
}
```

**Output:**
```
<path>C:\Cursos\php\sms\src\SMS\Users\Domain\Exceptions\InvalidCredentialsException.php</path>
<type>file</type>
<content>
1: <?php
2: 
3: declare(strict_types=1);
4: 
5: namespace Src\SMS\Users\Domain\Exceptions;
6: 
7: use DomainException;
8: 
9: final class InvalidCredentialsException extends DomainException
10: {
11:     public static function failed(): self
12:     {
13:         return new self('Las credenciales proporcionadas no son válidas.');
14:     }
15: 
16:     public static function userNotFound(): self
17:     {
18:         return new self('No se encontró un usuario con ese correo electrónico.');
19:     }
20: }

(End of file - total 20 lines)
</content>
```

---

## Assistant (Build · MiniMax M2.5 Free · 56.5s)

_Thinking:_

Now let me create the three exceptions for the Students module.




























**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\Exceptions\\StudentNotFoundException.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Domain\\Exceptions;\n\nuse DomainException;\n\nfinal class StudentNotFoundException extends DomainException\n{\n    public static function withId(string $studentId): self\n    {\n        return new self(sprintf('No se encontró el estudiante con ID: %s', $studentId));\n    }\n\n    public static function withDocument(string $document): self\n    {\n        return new self(sprintf('No se encontró el estudiante con documento: %s', $document));\n    }\n\n    public static function withCode(string $studentCode): self\n    {\n        return new self(sprintf('No se encontró el estudiante con código: %s', $studentCode));\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 20.3s)

_Thinking:_

Now let me create DuplicateDocumentException.






































**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\Exceptions\\DuplicateDocumentException.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Domain\\Exceptions;\n\nuse DomainException;\n\nfinal class DuplicateDocumentException extends DomainException\n{\n    public static function withDocument(string $documentType, string $documentNumber): self\n    {\n        return new self(\n            sprintf(\n                'Ya existe un estudiante registrado con documento %s %s',\n                $documentType,\n                $documentNumber\n            )\n        );\n    }\n\n    public static function withDocumentObject(string $documentType, string $documentNumber): self\n    {\n        return self::withDocument($documentType, $documentNumber);\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 13.5s)

_Thinking:_

Now let me create DuplicateStudentCodeException.
















































**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\Exceptions\\DuplicateStudentCodeException.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Domain\\Exceptions;\n\nuse DomainException;\n\nfinal class DuplicateStudentCodeException extends DomainException\n{\n    public static function withCode(string $studentCode): self\n    {\n        return new self(\n            sprintf('Ya existe un estudiante con el código: %s', $studentCode)\n        );\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 10.4s)

_Thinking:_

Now let me create the Domain Policy.
Now let me create the Policy for students.













**Tool: todowrite**

**Input:**
```json
{
  "todos": [
    {
      "content": "Create Value Objects (StudentId, Document, FullName, DateOfBirth, BloodType, StudentCode, Eps)",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Student Entity",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Repository Interfaces",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Domain Services",
      "status": "completed",
      "priority": "medium"
    },
    {
      "content": "Create Domain Events",
      "status": "completed",
      "priority": "medium"
    },
    {
      "content": "Create Domain Exceptions",
      "status": "completed",
      "priority": "medium"
    },
    {
      "content": "Create Domain Policy",
      "status": "in_progress",
      "priority": "medium"
    }
  ]
}
```

**Output:**
```
[
  {
    "content": "Create Value Objects (StudentId, Document, FullName, DateOfBirth, BloodType, StudentCode, Eps)",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Student Entity",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Repository Interfaces",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Domain Services",
    "status": "completed",
    "priority": "medium"
  },
  {
    "content": "Create Domain Events",
    "status": "completed",
    "priority": "medium"
  },
  {
    "content": "Create Domain Exceptions",
    "status": "completed",
    "priority": "medium"
  },
  {
    "content": "Create Domain Policy",
    "status": "in_progress",
    "priority": "medium"
  }
]
```

---

## Assistant (Build · MiniMax M2.5 Free · 10.0s)

_Thinking:_

Now let me check the UserPolicy to follow the same pattern.




















**Tool: glob**

**Input:**
```json
{
  "pattern": "src/SMS/Users/Domain/Policies/*.php"
}
```

**Output:**
```
No files found
```

---

## Assistant (Build · MiniMax M2.5 Free · 16.7s)

_Thinking:_

There's no Policy in the Users module yet. Let me create the StudentPolicy.






































**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\Policies\\StudentPolicy.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Domain\\Policies;\n\nuse Src\\SMS\\Users\\Domain\\Entities\\User;\nuse Src\\SMS\\Students\\Domain\\Entities\\Student;\nuse Src\\SMS\\Users\\Domain\\ValueObjects\\Role;\n\nfinal class StudentPolicy\n{\n    public function canView(User $user, Student $student): bool\n    {\n        if ($this->isAdmin($user)) {\n            return true;\n        }\n\n        if ($this->isTeacher($user)) {\n            return true;\n        }\n\n        if ($this->isStudent($user) && $this->isOwnRecord($user, $student)) {\n            return true;\n        }\n\n        return false;\n    }\n\n    public function canCreate(User $user): bool\n    {\n        return $this->isAdmin($user);\n    }\n\n    public function canUpdate(User $user, Student $student): bool\n    {\n        if ($this->isAdmin($user)) {\n            return true;\n        }\n\n        if ($this->isTeacher($user)) {\n            return true;\n        }\n\n        return false;\n    }\n\n    public function canDelete(User $user, Student $student): bool\n    {\n        return $this->isAdmin($user);\n    }\n\n    public function canEnroll(User $user, Student $student): bool\n    {\n        return $this->isAdmin($user);\n    }\n\n    public function canViewGrades(User $user, Student $student): bool\n    {\n        if ($this->isAdmin($user)) {\n            return true;\n        }\n\n        if ($this->isTeacher($user)) {\n            return true;\n        }\n\n        if ($this->isStudent($user) && $this->isOwnRecord($user, $student)) {\n            return true;\n        }\n\n        return false;\n    }\n\n    public function canViewAttendance(User $user, Student $student): bool\n    {\n        if ($this->isAdmin($user)) {\n            return true;\n        }\n\n        if ($this->isTeacher($user)) {\n            return true;\n        }\n\n        if ($this->isStudent($user) && $this->isOwnRecord($user, $student)) {\n            return true;\n        }\n\n        return false;\n    }\n\n    public function canExport(User $user): bool\n    {\n        return $this->isAdmin($user);\n    }\n\n    private function isAdmin(User $user): bool\n    {\n        return $user->getRole()->equals(Role::ADMIN()) || $user->getRole()->equals(Role::SUPER_ADMIN());\n    }\n\n    private function isTeacher(User $user): bool\n    {\n        return $user->getRole()->equals(Role::TEACHER());\n    }\n\n    private function isStudent(User $user): bool\n    {\n        return $user->getRole()->equals(Role::STUDENT());\n    }\n\n    private function isOwnRecord(User $user, Student $student): bool\n    {\n        return $user->getId()->value() === $student->getId()->value();\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 11.2s)

_Thinking:_

Let me verify the Role enum has the methods I used in the policy.









**Tool: read**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Users\\Domain\\ValueObjects\\Role.php"
}
```

**Output:**
```
<path>C:\Cursos\php\sms\src\SMS\Users\Domain\ValueObjects\Role.php</path>
<type>file</type>
<content>
1: <?php
2: 
3: declare(strict_types=1);
4: 
5: namespace Src\SMS\Users\Domain\ValueObjects;
6: 
7: enum Role: string
8: {
9:     case SUPER_ADMIN = 'super_admin';
10:     case ADMIN       = 'admin';
11:     case STUDENT     = 'student';
12:     case TEACHER     = 'teacher';
13:     case ATTENDANT   = 'attendant';
14: 
15:     public function equals(Role $other): bool
16:     {
17:         return $this->value === $other->value;
18:     }
19: 
20:     public function label(): string
21:     {
22:         return match ($this) {
23:             self::SUPER_ADMIN => 'Super administrador',
24:             self::ADMIN       => 'Administrador',
25:             self::STUDENT     => 'Estudiante',
26:             self::TEACHER     => 'Docente',
27:             self::ATTENDANT   => 'Acudiente'
28:         };
29:     }
30: }

(End of file - total 30 lines)
</content>
```

---

## Assistant (Build · MiniMax M2.5 Free · 20.1s)

_Thinking:_

I see that Role is an enum with `case` but in my Policy I'm using `Role::ADMIN()` which is how you call a backed enum case with a value. Since this is a backed enum (string), you can use `Role::ADMIN()` (without parentheses as it's a case, not a method). Let me fix the Policy.

Actually, in PHP 8.1+ with backed enums, you can call `Role::ADMIN` (as a case) or `Role::from('admin')`. The syntax `Role::ADMIN()` would be incorrect for an enum case.

Let me verify and fix if necessary.

Actually, wait - for a backed enum, you can use:
- `Role::ADMIN` - to get the case
- `Role::from('admin')` - to get the case from a value

But `Role::ADMIN()` would be wrong. Let me check again how the User entity uses it...

In User.php I see:
- `$this->role->equals($newRole)` - using equals method
- `$this->role === UserStatus::SUSPENDED` - using comparison

So it seems I need to check how to properly compare. Let me update my policy to use the correct comparison. Actually, since this is a PHP enum, the correct way would be:
- `Role::ADMIN->equals($other)` - but that's wrong because Role doesn't have an equals method
- `$user->getRole() === Role::ADMIN` - direct comparison

Let me fix the StudentPolicy.

Actually, let me look at how it's used in the User entity:
```php
if ($this->role->equals($newRole)) {
```

Oh wait, I see there's an `equals` method defined in Role! So `Role::ADMIN()->equals(...)` would work... but that's wrong because you don't call cases as methods for backed enums. Let me check...

Actually in a backed enum with string values, you can call:
- `Role::ADMIN` - returns the case


- `Role::from('admin')` - returns the case from value

So the correct usage should be:
- `$user->getRole()->equals(Role::ADMIN)` - if equals accepts a case

But looking at my code, I used `Role::ADMIN()` which is incorrect. Let me fix this.

Actually, I can test both - `Role::ADMIN` returns the case itself, so `$user->getRole() === Role::ADMIN` works for comparison, while `Role::ADMIN()->equals(...)` would fail since you can't invoke a case as a method. I need to update the Policy to use the correct syntax.







**Tool: edit**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\Policies\\StudentPolicy.php",
  "oldString": "private function isAdmin(User $user): bool\n    {\n        return $user->getRole()->equals(Role::ADMIN()) || $user->getRole()->equals(Role::SUPER_ADMIN());\n    }\n\n    private function isTeacher(User $user): bool\n    {\n        return $user->getRole()->equals(Role::TEACHER());\n    }\n\n    private function isStudent(User $user): bool\n    {\n        return $user->getRole()->equals(Role::STUDENT());\n    }",
  "newString": "private function isAdmin(User $user): bool\n    {\n        return $user->getRole() === Role::ADMIN || $user->getRole() === Role::SUPER_ADMIN;\n    }\n\n    private function isTeacher(User $user): bool\n    {\n        return $user->getRole() === Role::TEACHER;\n    }\n\n    private function isStudent(User $user): bool\n    {\n        return $user->getRole() === Role::STUDENT;\n    }"
}
```

**Output:**
```
Edit applied successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 10.0s)

_Thinking:_

Now let me update the todo list and verify everything was created.










**Tool: todowrite**

**Input:**
```json
{
  "todos": [
    {
      "content": "Create Value Objects (StudentId, Document, FullName, DateOfBirth, BloodType, StudentCode, Eps)",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Student Entity",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Repository Interfaces",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Domain Services",
      "status": "completed",
      "priority": "medium"
    },
    {
      "content": "Create Domain Events",
      "status": "completed",
      "priority": "medium"
    },
    {
      "content": "Create Domain Exceptions",
      "status": "completed",
      "priority": "medium"
    },
    {
      "content": "Create Domain Policy",
      "status": "completed",
      "priority": "medium"
    }
  ]
}
```

**Output:**
```
[
  {
    "content": "Create Value Objects (StudentId, Document, FullName, DateOfBirth, BloodType, StudentCode, Eps)",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Student Entity",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Repository Interfaces",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Domain Services",
    "status": "completed",
    "priority": "medium"
  },
  {
    "content": "Create Domain Events",
    "status": "completed",
    "priority": "medium"
  },
  {
    "content": "Create Domain Exceptions",
    "status": "completed",
    "priority": "medium"
  },
  {
    "content": "Create Domain Policy",
    "status": "completed",
    "priority": "medium"
  }
]
```

---

## Assistant (Build · MiniMax M2.5 Free · 18.9s)

_Thinking:_

Now let me verify what files were created with a glob.






Verifiquemos los archivos creados:


**Tool: glob**

**Input:**
```json
{
  "pattern": "src/SMS/Students/**/*.php"
}
```

**Output:**
```
C:\Cursos\php\sms\src\SMS\Students\Domain\Policies\StudentPolicy.php
C:\Cursos\php\sms\src\SMS\Students\Domain\Exceptions\DuplicateStudentCodeException.php
C:\Cursos\php\sms\src\SMS\Students\Domain\Exceptions\DuplicateDocumentException.php
C:\Cursos\php\sms\src\SMS\Students\Domain\Exceptions\StudentNotFoundException.php
C:\Cursos\php\sms\src\SMS\Students\Domain\Events\StudentUpdatedEvent.php
C:\Cursos\php\sms\src\SMS\Students\Domain\Events\StudentCreatedEvent.php
C:\Cursos\php\sms\src\SMS\Students\Domain\Services\StudentCodeGenerator.php
C:\Cursos\php\sms\src\SMS\Students\Domain\Repositories\StudentQueryInterface.php
C:\Cursos\php\sms\src\SMS\Students\Domain\Repositories\StudentRepositoryInterface.php
C:\Cursos\php\sms\src\SMS\Students\Domain\Entities\Student.php
C:\Cursos\php\sms\src\SMS\Students\Domain\ValueObjects\Eps.php
C:\Cursos\php\sms\src\SMS\Students\Domain\ValueObjects\StudentCode.php
C:\Cursos\php\sms\src\SMS\Students\Domain\ValueObjects\BloodType.php
C:\Cursos\php\sms\src\SMS\Students\Domain\ValueObjects\DateOfBirth.php
C:\Cursos\php\sms\src\SMS\Students\Domain\ValueObjects\FullName.php
C:\Cursos\php\sms\src\SMS\Students\Domain\ValueObjects\Document.php
C:\Cursos\php\sms\src\SMS\Students\Domain\ValueObjects\StudentId.php
```

---

## Assistant (Build · MiniMax M2.5 Free · 23.2s)

_Thinking:_

All 17 files have been created. Let me summarize what was done.




## ✅ Módulo Students - Capa Dominio Completada

Se crearon **17 archivos** siguiendo la arquitectura hexagonal:

```
src/SMS/Students/Domain/
├── Entities/
│   └── Student.php
├── ValueObjects/
│   ├── StudentId.php
│   ├── Document.php
│   ├── FullName.php
│   ├── DateOfBirth.php
│   ├── BloodType.php
│   ├── StudentCode.php
│   └── Eps.php
├── Repositories/
│   ├── StudentRepositoryInterface.php
│   └── StudentQueryInterface.php
├── Services/
│   └── StudentCodeGenerator.php
├── Events/
│   ├── StudentCreatedEvent.php
│   └── StudentUpdatedEvent.php
├── Exceptions/
│   ├── StudentNotFoundException.php
│   ├── DuplicateDocumentException.php
│   └── DuplicateStudentCodeException.php
└── Policies/
    └── StudentPolicy.php
```

### Características implementadas:

| Componente | Funcionalidad |
|------------|---------------|
| **Document** | Validación de documentos colombianos (TI, CC, CE) |
| **DateOfBirth** | Validación de edad (3-25 años), cálculo automático de edad |
| **BloodType** | Validación + compatibilidad donante/receptor |
| **StudentCode** | Generador automático con formato configurable |
| **Student** | Entidad completa con métodos de dominio, gestión de eventos |
| **Policy** | Control de acceso por roles (Admin, Teacher, Student) |

### Siguiente paso

Cuando desees continuar con el plan **Core + Infraestructura**, se implementarán:
- Use Cases (CreateStudent, UpdateStudent, SearchStudents)
- DTOs (Request/Response)
- Eloquent Repository Implementation
- Controller + Routes

---

## User

El email de la entidad @src\SMS\Students\Domain\Entities\Student.php es un string pero puede ser un value object, de @src\SMS\Shared\Domain\ValueObjects\Email.php ya hice los cambios puedes decirme si es correcto, tanto para el email del estudiante como del acudiente parentEmail, es correcto, o rompe las regras de negocio, @src\SMS\Shared\Domain\ValueObjects/ tiene value object que se pueden compartir

---

## Assistant (Build · MiniMax M2.5 Free · 16.5s)

_Thinking:_

El usuario quiere que analice si el uso del Email Value Object en la entidad Student es correcto y si no rompe las reglas de negocio de la arquitectura hexagonal.

Analizando:

1. **Shared Domain**: El directorio `src/SMS/Shared/Domain/ValueObjects/` contiene objetos de valor que pueden ser compartidos entre módulos. Esto es correcto en arquitectura hexagonal - el Dominio Shared es el " núcleo compartido" entre módulos.

2. **Email como VO**: 
   - `src/SMS/Shared/Domain/ValueObjects/Email.php` existe y tiene validación incorporada
   - El Email está en el namespace `Src\SMS\Shared\Domain\ValueObjects` - es un Value Object **compartido** entre módulos
   - Esto es exactamente lo que indica el SAD: `src/SMS/Shared/` es para componentes reutilizables

3. **Reglas de arquitectura hexagonal**:
   - Los Value Objects en Shared son entidades del dominio que NO dependen de frameworks
   - La entidad Student (Domain) puede usar Email (también Domain) desde Shared
   - Esto NO rompe las reglas porque ambos están en la capa de Dominio

4. **Análisis del código**:
   - `use Src\SMS\Shared\Domain\ValueObjects\Email;` ✓ Correcto
   - `$this->email` ahora es `?Email` en lugar de `?string` ✓ Mejora
   - `getEmail(): ?Email` ✓ Correcto
   - `changeEmail(Email $newEmail)` ✓ Correcto
   - `hasValidEmail()` usa `filter_var` - esto podría simplificarse ya que Email VO ya valida

5. **Problema**: El método `updateParentContact` todavía espera `?string $parentEmail`, debería ser `?Email` para consistencia.
   
La decisión es correcta: usar Email desde Shared respeta las reglas de arquitectura hexagonal porque Domain puede depender de Domain. No hay violación de dependencias - el Dominio no conoce frameworks como Laravel o Eloquent. Solo falta ajustar `updateParentContact` para que acepte el tipo Email en lugar de string.




**Sí, es correcto y no rompe las reglas de arquitectura hexagonal.**

### Análisis

1. **Email está en Shared/Domain**: El directorio `src/SMS/Shared/Domain/ValueObjects/` es exactamente para esto: Value Objects reutilizables entre módulos. Es el **Shared Kernel** del proyecto.

2. **Regla R1 de hexagonal**: *"El Dominio no conoce frameworks"* - tanto `Email` como `Student` están en capas de Dominio, así que pueden usarse entre sí sin violar dependencias.

3. **Corrección necesaria**: El método `updateParentContact()` todavía espera `?string`:

```php
// Actual (línea 290-298)
public function updateParentContact(
    ?string $parentName,
    ?string $parentPhone,
    ?string $parentEmail  // <-- string, debe ser ?Email
): void
```

Déjame corregirlo:


**Tool: edit**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\Entities\\Student.php",
  "oldString": "public function updateParentContact(\n        ?string $parentName,\n        ?string $parentPhone,\n        ?string $parentEmail\n    ): void {\n        $this->parentName = $parentName;\n        $this->parentPhone = $parentPhone !== null ? preg_replace('/[^0-9]/', '', $parentPhone) : null;\n        $this->parentEmail = $parentEmail;\n    }",
  "newString": "public function updateParentContact(\n        ?string $parentName,\n        ?string $parentPhone,\n        ?Email $parentEmail = null\n    ): void {\n        $this->parentName = $parentName;\n        $this->parentPhone = $parentPhone !== null ? preg_replace('/[^0-9]/', '', $parentPhone) : null;\n        $this->parentEmail = $parentEmail;\n    }\n\n    public function changeParentEmail(?Email $newEmail): void\n    {\n        if ($this->parentEmail !== null && $this->parentEmail->equals($newEmail)) {\n            return;\n        }\n        $this->parentEmail = $newEmail;\n    }"
}
```

**Output:**
```
Edit applied successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 6.1s)

_Thinking:_

Ahora también mejoro el método hasValidEmail ya que Email ya hace la validación internamente:







**Tool: edit**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Domain\\Entities\\Student.php",
  "oldString": "public function hasValidEmail(): bool\n    {\n        return $this->email !== null && filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;\n    }",
  "newString": "public function hasValidEmail(): bool\n    {\n        return $this->email !== null;\n    }\n\n    public function hasValidParentEmail(): bool\n    {\n        return $this->parentEmail !== null;\n    }"
}
```

**Output:**
```
Edit applied successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 4.3s)

_Thinking:_

Perfecto. Ahora la entidad Student está correctamente usando los Value Objects compartidos de Shared. Resumamos lo que se hizo y lo que es correcto.




### Resumen

| Aspecto | Estado |
|---------|--------|
| `Student::$email` → `?Email` | ✅ Correcto |
| `Student::$parentEmail` → `?Email` | ✅ Corregido |
| `getEmail(): ?Email` | ✅ Retorna VO |
| `changeEmail(Email)` | ✅ Acepta VO |
| `hasValidEmail()` | ✅ Simplificado |
| `updateParentContact(?Email)` | ✅ Corregido |

**Correcto**: Usar `Email` desde `Shared/Domain/ValueObjects` es exactamente el patrón correcto en arquitectura hexagonal. El Dominio puede consumir otros dominios/Value Objects compartidos sin violar la regla de dependencias hacia el centro.

---

## User

Ahora continua con el siguientes paso Core + Infraestructura, si es demasiado, separalo en tareas pequeñas

---

## Assistant (Build · MiniMax M2.5 Free · 31.1s)

_Thinking:_

El usuario quiere que continúe con el plan "Core + Infraestructura" para el módulo Students. Esto incluye:

1. **Capa Aplicación (Use Cases)**:
   - CreateStudentUseCase
   - UpdateStudentUseCase
   - DeleteStudentUseCase
   - SearchStudentsUseCase
   - GetStudentByIdUseCase

2. **DTOs**:
   - CreateStudentRequestDTO
   - UpdateStudentRequestDTO
   - StudentResponseDTO

3. **Capa Infraestructura**:
   - Eloquent Repository Implementation
   - Eloquent Student Mapper
   - StudentEloquent Model
   - Controller + Routes

Esto es bastante trabajo, voy a separarlo en tareas pequeñas y ejecutarlo paso a paso.

Primero, déjame crear el todo list y empezar con los Use Cases.







**Tool: todowrite**

**Input:**
```json
{
  "todos": [
    {
      "content": "Create DTOs (CreateStudentDTO, UpdateStudentDTO, StudentResponseDTO)",
      "status": "in_progress",
      "priority": "high"
    },
    {
      "content": "Create Use Cases (Create, Update, Delete, GetById, Search)",
      "status": "pending",
      "priority": "high"
    },
    {
      "content": "Create Eloquent Model and Migration",
      "status": "pending",
      "priority": "high"
    },
    {
      "content": "Create Eloquent Repository Implementation and Mapper",
      "status": "pending",
      "priority": "high"
    },
    {
      "content": "Create Controller and Routes",
      "status": "pending",
      "priority": "high"
    }
  ]
}
```

**Output:**
```
[
  {
    "content": "Create DTOs (CreateStudentDTO, UpdateStudentDTO, StudentResponseDTO)",
    "status": "in_progress",
    "priority": "high"
  },
  {
    "content": "Create Use Cases (Create, Update, Delete, GetById, Search)",
    "status": "pending",
    "priority": "high"
  },
  {
    "content": "Create Eloquent Model and Migration",
    "status": "pending",
    "priority": "high"
  },
  {
    "content": "Create Eloquent Repository Implementation and Mapper",
    "status": "pending",
    "priority": "high"
  },
  {
    "content": "Create Controller and Routes",
    "status": "pending",
    "priority": "high"
  }
]
```

---

## Assistant (Build · MiniMax M2.5 Free · 11.3s)

_Thinking:_

Voy a empezar creando los DTOs. Primero necesito ver cómo están los DTOs en el módulo Users para seguir el mismo patrón.







**Tool: read**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Users\\Application\\DTOs\\CreateUserDTO.php"
}
```

**Output:**
```
<path>C:\Cursos\php\sms\src\SMS\Users\Application\DTOs\CreateUserDTO.php</path>
<type>file</type>
<content>
1: <?php
2: 
3: declare(strict_types=1);
4: 
5: namespace Src\SMS\Users\Application\DTOs;
6: 
7: use Src\SMS\Users\Domain\ValueObjects\Role;
8: 
9: final readonly class CreateUserDTO
10: {
11:     public function __construct(
12:         public string $email,
13:         public string $plainPassword,
14:         public string $role,
15:     ) {}
16: 
17:     public function getRole(): Role
18:     {
19:         return Role::from($this->role);
20:     }
21: 
22:     public static function fromArray(array $data): self
23:     {
24:         return new self(
25:             email: $data['email'] ?? '',
26:             plainPassword: $data['password'] ?? '',
27:             role: $data['role'] ?? Role::STUDENT->value,
28:         );
29:     }
30: }

(End of file - total 30 lines)
</content>
```

---

## Assistant (Build · MiniMax M2.5 Free · 17.2s)

_Thinking:_

Ahora veo el patrón de los DTOs. Voy a crear los DTOs para el módulo Students.







**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Application\\DTOs\\CreateStudentDTO.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Application\\DTOs;\n\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\BloodType;\n\nfinal readonly class CreateStudentDTO\n{\n    public function __construct(\n        public string $documentType,\n        public string $documentNumber,\n        public string $firstName,\n        public string $lastName,\n        public string $birthDate,\n        public string $gender,\n        public ?string $bloodType = null,\n        public ?string $epsName = null,\n        public ?string $epsCode = null,\n        public ?string $address = null,\n        public ?string $phone = null,\n        public ?string $email = null,\n        public ?string $photoPath = null,\n        public ?string $parentName = null,\n        public ?string $parentPhone = null,\n        public ?string $parentEmail = null,\n    ) {}\n\n    public static function fromArray(array $data): self\n    {\n        return new self(\n            documentType: $data['document_type'] ?? '',\n            documentNumber: $data['document_number'] ?? '',\n            firstName: $data['first_name'] ?? '',\n            lastName: $data['last_name'] ?? '',\n            birthDate: $data['birth_date'] ?? '',\n            gender: $data['gender'] ?? '',\n            bloodType: $data['blood_type'] ?? null,\n            epsName: $data['eps_name'] ?? null,\n            epsCode: $data['eps_code'] ?? null,\n            address: $data['address'] ?? null,\n            phone: $data['phone'] ?? null,\n            email: $data['email'] ?? null,\n            photoPath: $data['photo_path'] ?? null,\n            parentName: $data['parent_name'] ?? null,\n            parentPhone: $data['parent_phone'] ?? null,\n            parentEmail: $data['parent_email'] ?? null,\n        );\n    }\n\n    public function toArray(): array\n    {\n        return [\n            'document_type' => $this->documentType,\n            'document_number' => $this->documentNumber,\n            'first_name' => $this->firstName,\n            'last_name' => $this->lastName,\n            'birth_date' => $this->birthDate,\n            'gender' => $this->gender,\n            'blood_type' => $this->bloodType,\n            'eps_name' => $this->epsName,\n            'eps_code' => $this->epsCode,\n            'address' => $this->address,\n            'phone' => $this->phone,\n            'email' => $this->email,\n            'photo_path' => $this->photoPath,\n            'parent_name' => $this->parentName,\n            'parent_phone' => $this->parentPhone,\n            'parent_email' => $this->parentEmail,\n        ];\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 45.7s)

_Thinking:_

Ahora creo el UpdateStudentDTO:










**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Application\\DTOs\\UpdateStudentDTO.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Application\\DTOs;\n\nfinal readonly class UpdateStudentDTO\n{\n    public function __construct(\n        public ?string $firstName = null,\n        public ?string $lastName = null,\n        public ?string $birthDate = null,\n        public ?string $gender = null,\n        public ?string $bloodType = null,\n        public ?string $epsName = null,\n        public ?string $epsCode = null,\n        public ?string $address = null,\n        public ?string $phone = null,\n        public ?string $email = null,\n        public ?string $photoPath = null,\n        public ?string $parentName = null,\n        public ?string $parentPhone = null,\n        public ?string $parentEmail = null,\n    ) {}\n\n    public static function fromArray(array $data): self\n    {\n        return new self(\n            firstName: $data['first_name'] ?? null,\n            lastName: $data['last_name'] ?? null,\n            birthDate: $data['birth_date'] ?? null,\n            gender: $data['gender'] ?? null,\n            bloodType: $data['blood_type'] ?? null,\n            epsName: $data['eps_name'] ?? null,\n            epsCode: $data['eps_code'] ?? null,\n            address: $data['address'] ?? null,\n            phone: $data['phone'] ?? null,\n            email: $data['email'] ?? null,\n            photoPath: $data['photo_path'] ?? null,\n            parentName: $data['parent_name'] ?? null,\n            parentPhone: $data['parent_phone'] ?? null,\n            parentEmail: $data['parent_email'] ?? null,\n        );\n    }\n\n    public function toArray(): array\n    {\n        return array_filter([\n            'first_name' => $this->firstName,\n            'last_name' => $this->lastName,\n            'birth_date' => $this->birthDate,\n            'gender' => $this->gender,\n            'blood_type' => $this->bloodType,\n            'eps_name' => $this->epsName,\n            'eps_code' => $this->epsCode,\n            'address' => $this->address,\n            'phone' => $this->phone,\n            'email' => $this->email,\n            'photo_path' => $this->photoPath,\n            'parent_name' => $this->parentName,\n            'parent_phone' => $this->parentPhone,\n            'parent_email' => $this->parentEmail,\n        ], fn($value) => $value !== null);\n    }\n\n    public function hasChanges(): bool\n    {\n        return !empty($this->toArray());\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 45.6s)

_Thinking:_

Ahora el StudentResponseDTO para la respuesta:


















**Tool: read**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Users\\Application\\DTOs\\UserResponseDTO.php"
}
```

**Output:**
```
<path>C:\Cursos\php\sms\src\SMS\Users\Application\DTOs\UserResponseDTO.php</path>
<type>file</type>
<content>
1: <?php
2: 
3: declare(strict_types=1);
4: 
5: namespace Src\SMS\Users\Application\DTOs;
6: 
7: use Src\SMS\Users\Domain\Entities\User;
8: 
9: final readonly class UserResponseDTO
10: {
11:     public function __construct(
12:         public string $id,
13:         public string $email,
14:         public string $role,
15:         public string $status,
16:         public string $createdAt = '',
17:     ) {}
18: 
19:     public static function fromEntity(User $user): self
20:     {
21:         return new self(
22:             id: $user->getId()->value(),
23:             email: $user->getEmail()->value(),
24:             role: $user->getRole()->value,
25:             status: $user->getStatus()->value,
26:         );
27:     }
28: 
29:     /**
30:      * @return array<string, string>
31:      */
32:     public function toArray(): array
33:     {
34:         return [
35:             'id' => $this->id,
36:             'email' => $this->email,
37:             'role' => $this->role,
38:             'status' => $this->status,
39:             'created_at' => $this->createdAt,
40:         ];
41:     }
42: }

(End of file - total 42 lines)
</content>
```

---

## Assistant (Build · MiniMax M2.5 Free · 19.9s)

_Thinking:_

Ahora creo el StudentResponseDTO:





























**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Application\\DTOs\\StudentResponseDTO.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Application\\DTOs;\n\nuse Src\\SMS\\Students\\Domain\\Entities\\Student;\n\nfinal readonly class StudentResponseDTO\n{\n    public function __construct(\n        public string $id,\n        public string $documentType,\n        public string $documentNumber,\n        public string $firstName,\n        public string $lastName,\n        public string $fullName,\n        public string $birthDate,\n        public int $age,\n        public string $gender,\n        public ?string $bloodType,\n        public ?string $epsName,\n        public ?string $address,\n        public ?string $phone,\n        public ?string $email,\n        public ?string $studentCode,\n        public ?string $photoPath,\n        public ?string $parentName,\n        public ?string $parentPhone,\n        public ?string $parentEmail,\n        public string $createdAt = '',\n    ) {}\n\n    public static function fromEntity(Student $student): self\n    {\n        return new self(\n            id: $student->getId()->value(),\n            documentType: $student->getDocument()->type(),\n            documentNumber: $student->getDocument()->number(),\n            firstName: $student->getFullName()->firstName(),\n            lastName: $student->getFullName()->lastName(),\n            fullName: $student->getFullName()->value(),\n            birthDate: $student->getBirthDate()->toString(),\n            age: $student->calculateAge(),\n            gender: $student->getGender(),\n            bloodType: $student->getBloodType()?->value(),\n            epsName: $student->getEps()?->name(),\n            address: $student->getAddress(),\n            phone: $student->getPhone(),\n            email: $student->getEmail()?->value(),\n            studentCode: $student->getStudentCode()->value(),\n            photoPath: $student->getPhotoPath(),\n            parentName: $student->getParentName(),\n            parentPhone: $student->getParentPhone(),\n            parentEmail: $student->getParentEmail()?->value(),\n        );\n    }\n\n    public function toArray(): array\n    {\n        return [\n            'id' => $this->id,\n            'document_type' => $this->documentType,\n            'document_number' => $this->documentNumber,\n            'first_name' => $this->firstName,\n            'last_name' => $this->lastName,\n            'full_name' => $this->fullName,\n            'birth_date' => $this->birthDate,\n            'age' => $this->age,\n            'gender' => $this->gender,\n            'blood_type' => $this->bloodType,\n            'eps_name' => $this->epsName,\n            'address' => $this->address,\n            'phone' => $this->phone,\n            'email' => $this->email,\n            'student_code' => $this->studentCode,\n            'photo_path' => $this->photoPath,\n            'parent_name' => $this->parentName,\n            'parent_phone' => $this->parentPhone,\n            'parent_email' => $this->parentEmail,\n            'created_at' => $this->createdAt,\n        ];\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 22.2s)

_Thinking:_

Ahora voy a crear un DTO de búsqueda también, similar al StudentSearchCriteria. Pero primero, voy a crear un SearchCriteriaDTO para las búsquedas:








**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Application\\DTOs\\SearchStudentsDTO.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Application\\DTOs;\n\nfinal readonly class SearchStudentsDTO\n{\n    public function __construct(\n        public ?string $name = null,\n        public ?string $documentNumber = null,\n        public ?string $studentCode = null,\n        public ?string $gender = null,\n        public ?int $minAge = null,\n        public ?int $maxAge = null,\n        public ?string $eps = null,\n        public int $page = 1,\n        public int $perPage = 20,\n        public string $orderBy = 'full_name',\n        public string $orderDirection = 'asc',\n    ) {}\n\n    public static function fromArray(array $data): self\n    {\n        return new self(\n            name: $data['name'] ?? null,\n            documentNumber: $data['document_number'] ?? null,\n            studentCode: $data['student_code'] ?? null,\n            gender: $data['gender'] ?? null,\n            minAge: isset($data['min_age']) ? (int)$data['min_age'] : null,\n            maxAge: isset($data['max_age']) ? (int)$data['max_age'] : null,\n            eps: $data['eps'] ?? null,\n            page: isset($data['page']) ? max(1, (int)$data['page']) : 1,\n            perPage: isset($data['per_page']) ? min(100, max(1, (int)$data['per_page'])) : 20,\n            orderBy: $data['order_by'] ?? 'full_name',\n            orderDirection: in_array($data['order_direction'] ?? 'asc', ['asc', 'desc']) ? $data['order_direction'] : 'asc',\n        );\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 14.2s)

_Thinking:_

DTOs completados. Ahora actualizo el todo y paso a los Use Cases:






Actualizo el estado y creo los Use Cases:


**Tool: todowrite**

**Input:**
```json
{
  "todos": [
    {
      "content": "Create DTOs (CreateStudentDTO, UpdateStudentDTO, StudentResponseDTO)",
      "status": "completed",
      "priority": "high"
    },
    {
      "content": "Create Use Cases (Create, Update, Delete, GetById, Search)",
      "status": "in_progress",
      "priority": "high"
    },
    {
      "content": "Create Eloquent Model and Migration",
      "status": "pending",
      "priority": "high"
    },
    {
      "content": "Create Eloquent Repository Implementation and Mapper",
      "status": "pending",
      "priority": "high"
    },
    {
      "content": "Create Controller and Routes",
      "status": "pending",
      "priority": "high"
    }
  ]
}
```

**Output:**
```
[
  {
    "content": "Create DTOs (CreateStudentDTO, UpdateStudentDTO, StudentResponseDTO)",
    "status": "completed",
    "priority": "high"
  },
  {
    "content": "Create Use Cases (Create, Update, Delete, GetById, Search)",
    "status": "in_progress",
    "priority": "high"
  },
  {
    "content": "Create Eloquent Model and Migration",
    "status": "pending",
    "priority": "high"
  },
  {
    "content": "Create Eloquent Repository Implementation and Mapper",
    "status": "pending",
    "priority": "high"
  },
  {
    "content": "Create Controller and Routes",
    "status": "pending",
    "priority": "high"
  }
]
```

---

## Assistant (Build · MiniMax M2.5 Free · 16.4s)

_Thinking:_

Ahora voy a crear los Use Cases. Primero, veré el patrón del CreateUserUseCase:







**Tool: read**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Users\\Application\\UseCases\\CreateUserUseCase.php"
}
```

**Output:**
```
<path>C:\Cursos\php\sms\src\SMS\Users\Application\UseCases\CreateUserUseCase.php</path>
<type>file</type>
<content>
1: <?php
2: 
3: declare(strict_types=1);
4: 
5: namespace Src\SMS\Users\Application\UseCases;
6: 
7: use Src\SMS\Shared\Domain\ValueObjects\Email;
8: use Src\SMS\Users\Application\DTOs\CreateUserDTO;
9: use Src\SMS\Users\Application\DTOs\UserResponseDTO;
10: use Src\SMS\Users\Domain\Entities\User;
11: use Src\SMS\Users\Domain\Exceptions\DuplicateEmailException;
12: use Src\SMS\Users\Domain\Repositories\UserRepositoryInterface;
13: 
14: final readonly class CreateUserUseCase
15: {
16:     public function __construct(
17:         private UserRepositoryInterface $userRepository,
18:     ) {
19:     }
20: 
21:     /**
22:      * @throws DuplicateEmailException
23:      * @throws \InvalidArgumentException
24:      */
25:     public function execute(CreateUserDTO $dto): UserResponseDTO
26:     {
27:         $email = new Email($dto->email);
28: 
29:         // Validate that email is not already registered
30:         if ($this->userRepository->existsByEmail($email)) {
31:             throw DuplicateEmailException::fromEmail($email);
32:         }
33: 
34:         // Create the user aggregate
35:         $user = User::create(
36:             $email,
37:             $dto->plainPassword,
38:             $dto->getRole()
39:         );
40: 
41:         // Persist the user
42:         $this->userRepository->save($user);
43: 
44:         // Return the response DTO
45:         return UserResponseDTO::fromEntity($user);
46:     }
47: }

(End of file - total 47 lines)
</content>
```

---

## Assistant (Build · MiniMax M2.5 Free · 25.7s)

_Thinking:_

Ahora voy a crear el CreateStudentUseCase:











**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Application\\UseCases\\CreateStudentUseCase.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Application\\UseCases;\n\nuse Src\\SMS\\Shared\\Domain\\ValueObjects\\Email;\nuse Src\\SMS\\Students\\Application\\DTOs\\CreateStudentDTO;\nuse Src\\SMS\\Students\\Application\\DTOs\\StudentResponseDTO;\nuse Src\\SMS\\Students\\Domain\\Entities\\Student;\nuse Src\\SMS\\Students\\Domain\\Exceptions\\DuplicateDocumentException;\nuse Src\\SMS\\Students\\Domain\\Exceptions\\DuplicateStudentCodeException;\nuse Src\\SMS\\Students\\Domain\\Repositories\\StudentRepositoryInterface;\nuse Src\\SMS\\Students\\Domain\\Services\\StudentCodeGenerator;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\BloodType;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\DateOfBirth;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\Document;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\Eps;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\FullName;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\StudentCode;\n\nfinal readonly class CreateStudentUseCase\n{\n    public function __construct(\n        private StudentRepositoryInterface $studentRepository,\n        private StudentCodeGenerator $codeGenerator,\n    ) {\n    }\n\n    public function execute(CreateStudentDTO $dto): StudentResponseDTO\n    {\n        $document = new Document($dto->documentType, $dto->documentNumber);\n\n        if ($this->studentRepository->existsByDocument($document)) {\n            throw DuplicateDocumentException::withDocumentObject(\n                $dto->documentType,\n                $dto->documentNumber\n            );\n        }\n\n        $fullName = new FullName($dto->firstName, $dto->lastName);\n        $birthDate = new DateOfBirth($dto->birthDate);\n        $studentCode = $this->codeGenerator->generate((int)date('Y'));\n\n        if ($this->studentRepository->existsByCode($studentCode)) {\n            throw DuplicateStudentCodeException::withCode($studentCode->value());\n        }\n\n        $bloodType = $dto->bloodType !== null ? new BloodType($dto->bloodType) : null;\n        $eps = $dto->epsName !== null ? new Eps($dto->epsName, $dto->epsCode) : null;\n        $email = $dto->email !== null ? new Email($dto->email) : null;\n        $parentEmail = $dto->parentEmail !== null ? new Email($dto->parentEmail) : null;\n\n        $student = Student::create(\n            document: $document,\n            fullName: $fullName,\n            birthDate: $birthDate,\n            gender: $dto->gender,\n            studentCode: $studentCode,\n            bloodType: $bloodType,\n            eps: $eps,\n            address: $dto->address,\n            phone: $dto->phone,\n            email: $email,\n            photoPath: $dto->photoPath,\n            parentName: $dto->parentName,\n            parentPhone: $dto->parentPhone,\n            parentEmail: $parentEmail,\n        );\n\n        $this->studentRepository->save($student);\n\n        return StudentResponseDTO::fromEntity($student);\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 15.2s)

_Thinking:_

Ahora creo el GetStudentByIdUseCase:


















**Tool: write**

**Input:**
```json
{
  "filePath": "C:\\Cursos\\php\\sms\\src\\SMS\\Students\\Application\\UseCases\\GetStudentByIdUseCase.php",
  "content": "<?php\n\ndeclare(strict_types=1);\n\nnamespace Src\\SMS\\Students\\Application\\UseCases;\n\nuse Src\\SMS\\Students\\Application\\DTOs\\StudentResponseDTO;\nuse Src\\SMS\\Students\\Domain\\Exceptions\\StudentNotFoundException;\nuse Src\\SMS\\Students\\Domain\\Repositories\\StudentRepositoryInterface;\nuse Src\\SMS\\Students\\Domain\\ValueObjects\\StudentId;\n\nfinal readonly class GetStudentByIdUseCase\n{\n    public function __construct(\n        private StudentRepositoryInterface $studentRepository,\n    ) {\n    }\n\n    public function execute(string $studentId): StudentResponseDTO\n    {\n        $id = new StudentId($studentId);\n\n        $student = $this->studentRepository->findById($id);\n\n        if ($student === null) {\n            throw StudentNotFoundException::withId($studentId);\n        }\n\n        return StudentResponseDTO::fromEntity($student);\n    }\n}"
}
```

**Output:**
```
Wrote file successfully.
```

---

## Assistant (Build · MiniMax M2.5 Free · 21.1s)

_Thinking:_

Ahora el UpdateStudentUseCase:





















<minimax:tool_call>
<invoke name="write">
<parameter name="filePath">C:\Cursos\php\sms\src\SMS\Students\Application\UseCases\UpdateStudentUseCase.php</parameter>
<parameter name="content"><?php

declare(strict_types=1);

namespace Src\SMS\Students\Application\UseCases;

use Src\SMS\Shared\Domain\ValueObjects\Email;
use Src\SMS\Students\Application\DTOs\StudentResponseDTO;
use Src\SMS\Students\Application\DTOs\UpdateStudentDTO;
use Src\SMS\Students\Domain\Exceptions\StudentNotFoundException;
use Src\SMS\Students\Domain\Repositories\StudentRepositoryInterface;
use Src\SMS\Students\Domain\ValueObjects\BloodType;
use Src\SMS\Students\Domain\ValueObjects\DateOfBirth;
use Src\SMS\Students\Domain\ValueObjects\Eps;
use Src\SMS\Students\Domain\ValueObjects\FullName;
use Src\SMS\Students\Domain\ValueObjects\StudentId;

final readonly class UpdateStudentUseCase
{
    public function __construct(
        private StudentRepositoryInterface $studentRepository,
    ) {
    }

    public function execute(string $studentId, UpdateStudentDTO $dto): StudentResponseDTO
    {
        $id = new StudentId($studentId);

        $student = $this->studentRepository->findById($id);

        if ($student === null) {
            throw StudentNotFoundException::withId($studentId);
        }

        if ($dto->firstName !== null || $dto->lastName !== null) {
            $firstName = $dto->firstName ?? $student->getFullName()->firstName();
            $lastName = $dto->lastName ?? $student->getFullName()->lastName();
            $fullName = new FullName($firstName, $lastName);
            $student->updateFullName($fullName);
        }

        if ($dto->birthDate !== null) {
            $birthDate = new DateOfBirth($dto->birthDate);
            $student->updateBirthDate($birthDate);
        }

        if ($dto->gender !== null) {
            $student->updateGender($dto->gender);
        }

        if ($dto->bloodType !== null) {
            $bloodType = new BloodType($dto->bloodType);
            $student->updateBloodType($bloodType);
        } elseif ($dto->bloodType === '') {
            $student->updateBloodType(null);
        }

        if ($dto->epsName !== null) {
            $eps = new Eps($dto->epsName, $dto->epsCode);
            $student->updateEps($eps);
        } elseif ($dto->epsName === '') {
            $student->updateEps(null);
        }

        if ($dto->address !== null) {
            $student->changeAddress($dto->address);
        }

        if ($dto->phone !== null) {
            $student->changePhone($dto->phone);
        }

        if ($dto->email !== null) {
            $email = new Email($dto->email);
            $student->changeEmail($email);
        } elseif ($dto->email === '') {
            $student->changeEmail(null);
        }

        if ($dto->photoPath !== null) {
            $student->updatePhoto($dto->photoPath);
        }

        if ($dto->parentName !== null || $dto->parentPhone !== null || $dto->parentEmail !== null) {
            $parentName = $dto->parentName ?? $student->getParentName();
            $parentPhone = $dto->parentPhone ?? $student->getParentPhone();
            $parentEmail = $dto->parentEmail !== null
                ? new Email($dto->parentEmail)
                : ($dto->parentEmail === '' ? null : $student->getParentEmail());

            $student->updateParentContact($parentName, $parentPhone, $parentEmail);
        }

        $this->studentRepository->save($student);

        return StudentResponseDTO::fromEntity($student);
    }
}</parameter>
</invoke>
</minimax:tool_call>



---

