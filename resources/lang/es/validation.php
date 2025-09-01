<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El campo :attribute debe ser aceptado.',
    'accepted_if' => 'El campo :attribute debe ser aceptado cuando :other es :value.',
    'active_url' => 'El campo :attribute no es una URL válida.',
    'after_or_equal' => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'after' => 'el campo :attribute debe ser una fecha posterior a :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'El campo :attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_spaces' => 'El campo :attribute solo puede contener letras y espacios.',
    'alpha_num' => 'el campo :attribute solo puede contener letras y números.',
    'array' => 'El campo :attribute debe ser un array.',
    'ascii' => 'El campo :attribute solo puede contener caracteres alfanuméricos de un solo byte y símbolos.',
    'before' => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'array' => 'El campo :attribute debe tener entre :min y :max elementos.',
        'file' => 'El campo :attribute debe estar entre :min y :max kilobytes.',
        'numeric' => 'El campo :attribute debe estar entre :min y :max.',
        'string' => 'El campo :attribute debe tener entre :min y :max caracteres.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'El campo de confirmación :attribute no coincide.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'El campo :attribute no es una fecha válida.',
    'date_equals' => 'El campo :attribute debe ser una fecha igual a :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'decimal' => 'El campo :attribute debe tener :decimal decimales.',
    'declined' => 'El campo :attribute debe ser rechazado.',
    'declined_if' => 'El campo :attribute debe ser rechazado cuando :other es :value.',
    'different' => 'El campo :attribute y :other deben ser diferentes.',
    'digits' => 'El campo :attribute debe ser :digits dígitos.',
    'digits_between' => 'El campo :attribute debe tener entre :min y :max dígitos.',
    'dimensions' => 'El campo :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'doesnt_end_with' => 'El campo :attribute no debe terminar con uno de los siguientes: :values.',
    'doesnt_include' => 'El campo :attribute no debe incluir uno de los siguientes valores: :values.',
    'doesnt_start_with' => 'El campo :attribute no debe comenzar con uno de los siguientes: :values.',
    'email' => 'El campo :attribute debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El campo :attribute debe terminar con uno de los siguientes: :values.',
    'enum' => 'El :attribute seleccionado es inválido.',
    'exists' => 'El :attribute seleccionado es inválido.',
    'file' => 'El campo :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'array' => 'El campo :attribute debe tener más de :value elementos.',
        'file' => 'El campo :attribute debe ser mayor que :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser mayor que :value.',
        'string' => 'El campo :attribute debe ser mayor que :value caracteres.',
    ],
    'gte' => [
        'array' => 'El campo :attribute debe tener :value elementos o más.',
        'file' => 'El campo :attribute debe ser mayor o igual a :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser mayor o igual a :value.',
        'string' => 'El campo :attribute debe ser mayor o igual a :value caracteres.',
    ],
    'hex_color' => 'El campo :attribute debe ser un color hexadecimal válido.',
    'hex_color_alpha' => 'El campo :attribute debe ser un color hexadecimal válido con transparencia.',
    'image' => 'El campo :attribute debe ser una imagen.',
    'in' => 'El :attribute seleccionado es inválido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => 'El campo :attribute debe ser un número entero.',
    'ip' => 'El campo :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El campo :attribute debe ser una cadena JSON válida.',
    'lowercase' => 'El campo :attribute debe estar en minúsculas.',
    'lt' => [
        'array' => 'El campo :attribute debe tener menos de :value elementos.',
        'file' => 'El campo :attribute debe ser menor que :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser menor que :value.',
        'string' => 'El campo :attribute debe ser menor que :value caracteres.',
    ],
    'lte' => [
        'array' => 'El campo :attribute no debe tener más de :value elementos.',
        'file' => 'El campo :attribute debe ser menor o igual a :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser menor o igual a :value.',
        'string' => 'El campo :attribute debe ser menor o igual a :value caracteres.',
    ],
    'mac_address' => 'El campo :attribute debe ser una dirección MAC válida.',
    'max' => [
        'array' => 'El campo :attribute no debe tener más de :max elementos.',
        'file' => 'El campo :attribute no debe ser mayor que :max kilobytes.',
        'numeric' => 'El campo :attribute no debe ser mayor que :max.',
        'string' => 'El campo :attribute no debe ser mayor que :max caracteres.',
    ],
    'max_digits' => 'El campo :attribute no debe tener más de :max dígitos.',
    'mimes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'array' => 'El campo :attribute debe tener al menos :min elementos.',
        'file' => 'El campo :attribute debe ser al menos :min kilobytes.',
        'numeric' => 'El campo :attribute debe ser al menos :min.',
        'string' => 'El campo :attribute debe ser al menos :min caracteres.',
    ],
    'min_digits' => 'El campo :attribute debe tener al menos :min dígitos.',
    'missing' => 'El campo :attribute debe estar ausente.',
    'missing_if' => 'El campo :attribute debe estar ausente cuando :other es :value.',
    'missing_unless' => 'El campo :attribute debe estar ausente a menos que :other sea :value.',
    'missing_with' => 'El campo :attribute debe estar ausente cuando :values está presente.',
    'missing_with_all' => 'El campo :attribute debe estar ausente cuando :values están presentes.',
    'multiple_of' => 'El campo :attribute debe ser un múltiplo de :value.',
    'not_in' => 'El :attribute seleccionado es inválido.',
    'not_regex' => 'El formato del campo :attribute es inválido.',
    'numeric' => 'El campo :attribute debe ser un número.',
    'password' => [
        'letters' => 'El campo :attribute debe contener al menos una letra.',
        'mixed' => 'El campo :attribute debe contener al menos una letra mayúscula y una minúscula.',
        'numbers' => 'El campo :attribute debe contener al menos un número.',
        'symbols' => 'El campo :attribute debe contener al menos un símbolo.',
        'uncompromised' => 'El :attribute proporcionado ha aparecido en una filtración de datos. Por favor, elige un :attribute diferente.',
    ],
    'present' => 'El campo :attribute debe estar presente.',
    'prohibited' => 'El campo :attribute está prohibido.',
    'prohibited_if' => 'El campo :attribute está prohibido cuando :other es :value.',
    'prohibited_unless' => 'El campo :attribute está prohibido a menos que :other esté en :values.',
    'prohibits' => 'El campo :attribute prohíbe que :other esté presente.',
    'regex' => 'El formato del campo :attribute es inválido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_array_keys' => 'El campo :attribute debe contener entradas para: :values.',
    'required_if' => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_if_accepted' => 'El campo :attribute es obligatorio cuando :other es aceptado.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que :other esté en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :values están presentes.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de :values está presente.',
    'same' => 'El campo :attribute y :other deben coincidir.',
    'size' => [
        'array' => 'El campo :attribute debe contener :size elementos.',
        'file' => 'El campo :attribute debe ser de :size kilobytes.',
        'numeric' => 'El campo :attribute debe ser :size.',
        'string' => 'El campo :attribute debe ser de :size caracteres.',
    ],
    'starts_with' => 'El campo :attribute debe comenzar con uno de los siguientes: :values.',
    'string' => 'El campo :attribute debe ser una cadena de texto.',
    'timezone' => 'El campo :attribute debe ser una zona horaria válida.',
    'unique' => 'El campo :attribute ya ha sido tomado.',
    'uploaded' => 'El campo :attribute falló al subir.',
    'uppercase' => 'El campo :attribute debe estar en mayúsculas.',
    'url' => 'El campo :attribute debe ser una URL válida.',
    'ulid' => 'El campo :attribute debe ser un ULID válido.',
    'uuid' => 'El campo :attribute debe ser un UUID válido.',
    'invalid_json' => 'El campo :attribute debe ser una cadena JSON válida.',
    'invalid_date' => 'El campo :attribute debe ser una fecha válida.',
    'invalid_time' => 'El campo :attribute debe ser una hora válida.',
    'invalid_datetime' => 'El campo :attribute debe ser una fecha y hora válidas.',
    'invalid_file' => 'El campo :attribute debe ser un archivo válido.',
    'invalid_image' => 'El campo :attribute debe ser una imagen válida.',
    'invalid_url' => 'El campo :attribute debe ser una URL válida.',
    'invalid_email' => 'El campo :attribute debe ser una dirección de correo electrónico válida.',
    'invalid_phone' => 'El campo :attribute debe ser un número de teléfono válido.',
    'invalid_password' => 'El campo :attribute debe ser una contraseña válida.',
    'invalid_mac_address' => 'El campo :attribute debe ser una dirección MAC válida.',
    'invalid_ip' => 'El campo :attribute debe ser una dirección IP válida.',
    'invalid_ipv4' => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'invalid_ipv6' => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'invalid_hex_color' => 'El campo :attribute debe ser un color hexadecimal válido.',
    'invalid_hex_color_alpha' => 'El campo :attribute debe ser un color hexadecimal válido con transparencia.',
    'invalid_mime_type' => 'El campo :attribute debe ser un tipo MIME válido.',
    'invalid_mime_types' => 'El campo :attribute debe ser uno de los siguientes tipos MIME: :values.',
    'invalid_enum' => 'El campo :attribute debe ser uno de los siguientes valores: :values.',
    'invalid_enum_value' => 'El valor del campo :attribute no es válido. Debe ser uno de los siguientes: :values.',
    'invalid_file_extension' => 'El campo :attribute debe tener una de las siguientes extensiones: :values.',
    'invalid_file_type' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'invalid_file_size' => 'El campo :attribute debe ser un archivo de tamaño válido. Debe ser menor que :max kilobytes.',
    'invalid_file_dimensions' => 'El campo :attribute debe ser una imagen con dimensiones válidas. Debe tener un ancho máximo de :width píxeles y una altura máxima de :height píxeles.',
    'invalid_file_mime_type' => 'El campo :attribute debe ser un archivo de tipo MIME válido. Debe ser uno de los siguientes: :values.',
    'invalid_file_mime_types' => 'El campo :attribute debe ser un archivo de tipo MIME válido. Debe ser uno de los siguientes: :values.',
    'invalid_file_encoding' => 'El campo :attribute debe ser un archivo con codificación válida. Debe ser UTF-8 o ASCII.',
    'invalid_file_encoding_utf8' => 'El campo :attribute debe ser un archivo con codificación UTF-8 válida.',
    'invalid_file_encoding_ascii' => 'El campo :attribute debe ser un archivo con codificación ASCII válida.',
    'invalid_file_encoding_iso_8859_1' => 'El campo :attribute debe ser un archivo con codificación ISO-8859-1 válida.',
    'invalid_file_encoding_windows_1252' => 'El campo :attribute debe ser un archivo con codificación Windows-1252 válida.',
    'invalid_file_encoding_utf16' => 'El campo :attribute debe ser un archivo con codificación UTF-16 válida.',
    'invalid_file_encoding_utf32' => 'El campo :attribute debe ser un archivo con codificación UTF-32 válida.',
    'invalid_file_encoding_big5' => 'El campo :attribute debe ser un archivo con codificación Big5 válida.',
    'invalid_file_encoding_gb2312' => 'El campo :attribute debe ser un archivo con codificación GB2312 válida.',
    'invalid_file_encoding_shift_jis' => 'El campo :attribute debe ser un archivo con codificación Shift JIS válida.',
    'invalid_file_encoding_euc_jp' => 'El campo :attribute debe ser un archivo con codificación EUC-JP válida.',
    'invalid_file_encoding_euc_kr' => 'El campo :attribute debe ser un archivo con codificación EUC-KR válida.',
    'invalid_file_encoding_iso_2022_jp' => 'El campo :attribute debe ser un archivo con codificación ISO-2022-JP válida.',
    'invalid_file_encoding_iso_2022_kr' => 'El campo :attribute debe ser un archivo con codificación ISO-2022-KR válida.',
    'invalid_file_encoding_iso_2022_cn' => 'El campo :attribute debe ser un archivo con codificación ISO-2022-CN válida.',
    'invalid_file_encoding_iso_2022_jp_1' => 'El campo :attribute debe ser un archivo con codificación ISO-2022-JP-1 válida.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
