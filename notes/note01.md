Modelo:
---
- Clases que representan entidades
- Relaciones entre modelos
- Eventos cuando se crea, modifica, elimina

Vista:
---
- HTML => Blade (Motor de plantillas)

Controlador:
---
- Lógica que responde a peticiones
- GET | POST | PUT | PATCH | DELETE

Ruta:
---
- http://mipag.com/login

Desarrollo de proyectos en equipo
---
- Framework: Laravel
- Ctrl de versiones: GIT (FTP)

```php
	// ORM: Object relational map
	$appointment = Appointment::find(100);
	$name = $appointment->patient->name;

	$appointment = Appointment::find(100);
	$patient_id = $appointment->patient_id;
	$name = Patient::find($patient_id)->name;
```

Próxima clase
---
- CRUD
	CREATE
	READ
	UPDATE
	DELETE

- Ajax
- Validaciones
