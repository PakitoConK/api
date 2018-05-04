Estructura de la respuesta básica del Api
============

Los parámetros básicos de un API REST se utilizan en el API de BeepQuest

Parametro | Descripcion
------ | ---------
limit | Límite de registros a consultar
skip | Número de registros a saltar

La respuesta tendrá una estructura básica que comprende:

Campo | Descripción
------ | -----------
total | Número de resultados de la petición realizada.
list | Arreglo de objetos con la información solicitada, el número de objetos regresados nunca es mayor al parámetro limite enviado.

## Ejemplos

### Petición al endpoint **/v1/question_module_answers**

Parámetro | Valor
------ | ----------
user | (vacío)
initialDate | 2018-01-01
finalDate | (vacío)
limit | 10
skip | 20

### Respuesta

Campo        | Descripción
------------ | -----------
total | 65
list | ```[10]``` registros del 21 al 30 


### Dominio Base

El dominio base para la conexión al api es ```api.beepquest.com``` *ejemplo* ```api.beepquest.com/v1/question_engine_answers&...```

