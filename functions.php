<?php
    date_default_timezone_set("Asia/Yekaterinburg");

    // Очистка от опасных тегов
    function esc($str) {
        $text = strip_tags($str);

        return $text;
    };

    // Вывод времени до полуночи
    function get_time() {
        $cur_time = time();
        $tom_time = strtotime('Tomorrow');
        
        $delta = $tom_time - $cur_time;
        $time = gmdate('H:i', $delta);
        return $time;
    };
        

    // Форматирование цены
    function format_price($number) {
        define(limin_num, 1000);
        $sum = ceil($number); // округляем
        
        if ($sum >= limin_num) {
            $sum = number_format($sum, 0, '.', ' ');
        }
        $sum = $sum . ' ' . '&#8381;';
      
        return $sum;
    };

    // Шаблонизатор
    function include_template($name, $data) {
        $name = 'templates/' . $name;
        $result = '';

        if (!is_readable($name)) {
            return $result;
        }

        ob_start();
        extract($data);
        require $name;

        $result = ob_get_clean();

        return $result;
    };

?>