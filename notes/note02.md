Sin ajax
---
* HTML => Form (Action -> Ruta -> Controlador)
* PHP (Controlador) 
 - Definir reglas de validación
 - Errores: return back();

Con ajax
---
* HTML => Form (JS -> Ruta -> Controlador)
* PHP (Controlador) 
 - Definir reglas de validación
 - Errores: return $errors;
 - Bien: return $patient;

Tipos de respuesta
---
* return view (.blade.php)
* return json (devolver un objeto, devolver una colección)
* return cadena

Comparación PHP puro VS Laravel
---
```php
	mysqli($con, "INSERT patient VALUES (...)");
	$patient['name'] = $_GET['name'];
	...
	json_encode($patient);

	$patient = Patient::create([...]);
	return $patient;
```
