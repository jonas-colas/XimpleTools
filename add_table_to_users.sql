ALTER TABLE `users` ADD `subtotal_perfil` INT NULL 
AFTER `remember_token`, ADD `conciencia_de_si_mismo` INT NULL 
AFTER `subtotal_perfil`, ADD `agilidad_de_cambio` INT NULL 
AFTER `conciencia_de_si_mismo`, ADD `agilidad_mental` INT NULL 
AFTER `agilidad_de_cambio`, ADD `agilidad_interpersonal` INT NULL 
AFTER `agilidad_mental`, ADD `agilidad_de_resultados` INT NULL 
AFTER `agilidad_interpersonal`, ADD `posicion_potencial_automatica` INT NULL 
AFTER `agilidad_de_resultados`, 
ADD `posicion_potencial_sugerida` INT NULL 
AFTER `posicion_potencial_automatica`;