# SMS-EDUCOL — Sistema de Gestión Académica

**SMS-EDUCOL** (Sistema de Manejo Escolar Educativo de Colombia) es una plataforma integral diseñada para automatizar y optimizar la gestión administrativa y académica de instituciones educativas de nivel básico y medio.

Este proyecto ha sido desarrollado como una **demostración avanzada de ingeniería de software**, aplicando patrones arquitectónicos modernos y estándares de alta calidad para resolver problemas complejos de lógica de negocio en el sector educativo.

---

## 🚀 Capacidades Técnicas y Arquitectura

El proyecto destaca por ir más allá del uso convencional del framework, implementando una estructura robusta preparada para el crecimiento y la mantenibilidad:

- **Arquitectura Hexagonal (Ports & Adapters):** El dominio de negocio es totalmente independiente del framework (Laravel) y de la infraestructura (Base de Datos), facilitando tests unitarios puros y cambios tecnológicos sin riesgos.
- **Domain-Driven Design (DDD):** Uso de tácticas de DDD como *Entities*, *Value Objects*, *Aggregates* y *Domain Events* para modelar fielmente las reglas del sistema educativo colombiano.
- **Estructura Modular:** Organizado en módulos de dominio autónomos (`Users`, `Students`, `Academic`, `Grades`, etc.), permitiendo una escalabilidad modular y facilitando la transición a microservicios si fuera necesario.
- **Testing Riguroso:** Implementación de pirámide de pruebas con **Pest PHP**, cubriendo lógica de dominio (Unit), persistencia (Integration) y flujos críticos de usuario (Feature).
- **ADRs (Architectural Decision Records):** Todas las decisiones técnicas críticas están documentadas, justificando el "por qué" detrás de cada elección tecnológica.

---

## ✨ Características Principales

### 🏫 Gestión Académica Core
- **Configuración Multianual:** Gestión de años lectivos, períodos académicos (bimestres/trimestres) y jornadas.
- **Estructura Educativa:** Definición jerárquica de Grados, Grupos y Asignaturas.
- **Carga Académica:** Asignación dinámica de docentes a asignaturas y grupos.

### 👥 Gestión de Comunidad
- **Estudiantes y Docentes:** Perfiles completos con seguimiento de historial, documentos legales (TI, CC, CE) y datos de contacto.
- **Matrículas Inteligentes:** Control de cupos en tiempo real, procesos de retiro y traslado entre grupos.

### 📊 Seguimiento y Evaluación
- **Control de Asistencia:** Registro diario por asignatura con estados (presente, ausente, tardanza, justificado).
- **Sistema de Calificaciones Flexible:** Escalas configurables (0-100 o 1.0-5.0), pesos porcentuales por tipo de evaluación y cálculo automático de promedios.
- **Reportes Profesionales:** Generación de boletines de calificaciones en PDF y exportación de listados administrativos a Excel.

---

## 🛠️ Stack Tecnológico

- **Backend:** PHP 8.4 + Laravel 13.x
- **Arquitectura:** Hexagonal + DDD
- **Base de Datos:** PostgreSQL 16+ (Relaciones complejas, índices GIN para búsquedas)
- **Caché/Colas:** Redis 7.x
- **Frontend:** Tailwind CSS v4 + Alpine.js
- **Testing:** Pest PHP 4.x
- **Herramientas:** Laravel Boost para desarrollo asistido por IA.

---

## 📂 Estructura del Proyecto

El código fuente sigue el estándar definido en el Documento de Arquitectura (SAD):

```text
src/SMS/
├── Shared/             # Código compartido entre dominios
└── [Modulo]/           # Ejemplo: Users, Students, Grades
    ├── Domain/         # Entidades, Value Objects, Puertos (Interfaces)
    ├── Application/    # Casos de Uso, DTOs, Mappers
    └── Infrastructure/ # Implementación de Repositorios (Eloquent), Controladores, Drivers
```

---

## 🛠️ Instalación y Configuración

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/tu-usuario/sms-educol.git
   cd sms-educol
   ```

2. **Instalar dependencias:**
   ```bash
   composer install
   npm install
   ```

3. **Configurar el entorno:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Ejecutar migraciones y seeders:**
   ```bash
   php artisan migrate --seed
   ```

5. **Iniciar el servidor:**
   ```bash
   php artisan serve
   ```

---

## 🧪 Ejecución de Pruebas

Para validar la integridad del sistema y las reglas de negocio:

```bash
php artisan test --compact
```

---

## 📄 Documentación Detallada

Para más información técnica, consulte la carpeta `/docs`:
- **[SRS]**: Especificación de Requisitos de Software.
- **[SAD]**: Documento de Arquitectura de Software.
- **[Schema]**: Especificación detallada de la base de datos.
