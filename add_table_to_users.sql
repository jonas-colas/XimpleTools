ALTER TABLE `users` ADD `subtotal_perfil` VARCHAR(100) NULL 
AFTER `remember_token`, ADD `conciencia_de_si_mismo` VARCHAR(100) NULL 
AFTER `subtotal_perfil`, ADD `agilidad_de_cambio` VARCHAR(100) NULL 
AFTER `conciencia_de_si_mismo`, ADD `agilidad_mental` VARCHAR(100) NULL 
AFTER `agilidad_de_cambio`, ADD `agilidad_interpersonal` VARCHAR(100) NULL 
AFTER `agilidad_mental`, ADD `agilidad_de_resultados` VARCHAR(100) NULL 
AFTER `agilidad_interpersonal`, ADD `posicion_potencial_automatica` VARCHAR(100) NULL 
AFTER `agilidad_de_resultados`, ADD `posicion_potencial_sugerida` VARCHAR(100) NULL
AFTER `posicion_potencial_automatica`;



ALTER TABLE `users` CHANGE `subtotal_perfil` `subtotal_perfil` VARCHAR(100) NOT NULL, 
CHANGE `conciencia_de_si_mismo` `conciencia_de_si_mismo` VARCHAR(100) NOT NULL, 
CHANGE `agilidad_de_cambio` `agilidad_de_cambio` VARCHAR(100) NOT NULL, 
CHANGE `agilidad_mental` `agilidad_mental` VARCHAR(100) NOT NULL, 
CHANGE `agilidad_interpersonal` `agilidad_interpersonal` VARCHAR(100) NOT NULL, 
CHANGE `agilidad_de_resultados` `agilidad_de_resultados` VARCHAR(100) NOT NULL, 
CHANGE `posicion_potencial_automatica` `posicion_potencial_automatica` VARCHAR(100) NOT NULL, 
CHANGE `posicion_potencial_sugerida` `posicion_potencial_sugerida` VARCHAR(100) NOT NULL;


ALTER TABLE `users` 
DROP `subtotal_perfil`, 
DROP `conciencia_de_si_mismo`,
DROP `agilidad_de_cambio`, 
DROP `agilidad_mental`, 
DROP `agilidad_interpersonal`, 
DROP `agilidad_de_resultados`, 
DROP `posicion_potencial_automatica`, 
DROP `posicion_potencial_sugerida`;