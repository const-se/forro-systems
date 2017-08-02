<?php

if (!defined('FORRO_SYSTEMS')) {
    header('HTTP/1.0 404 Not Found');
    exit;
}

function prepareContent($content)
{
    $content['header']['phone_number_link'] =
        '+7' . mb_substr(preg_replace('/[^0-9]/', '', $content['header']['phone_number']), -10);

    $content['main_slider'] = array_map(function ($slide) {
        $slide['style'] = array('background-image' => "url('/images/main-slider/{$slide['image']}')");

        return $slide;
    }, $content['main_slider']);
    shuffle($content['main_slider']);

    $content['usage']['slider'] = array_map(function ($slide) {
        $slide['style'] = array('background-image' => "url('/images/usage-slider/{$slide['image']}')");

        return $slide;
    }, $content['usage']['slider']);

    $content['suppliers']['slider'] = array_map(function ($image) {
        return '/images/suppliers-slider/' . $image;
    }, $content['suppliers']['slider']);

    $content['stages']['stages'] = array_map(function ($stage) {
        $stage['style'] = array('background-image' => "url('/images/stages/{$stage['image']}')");

        return $stage;
    }, $content['stages']['stages']);

    $months = ['нулября', 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
    $date = strtotime('now + 2 day');
    $content['stock']['caption'] =
        preg_replace('/{{date}}/', intval(date('d', $date)) . ' ' . $months[intval(date('m', $date))], $content['stock']['caption']);
    $content['stock']['caption'] = preg_replace('/{{sum}}/', $content['stock']['sum'], $content['stock']['caption']);
    $content['stock']['date'] = date('m/d/Y 14:00:00', strtotime('now + 2 day'));

    $content['feedback']['slider'] = array_map(function ($slide) {
        $slide['photo_style'] = array('background-image' => "url('/images/feedback/{$slide['image']}')");

        return $slide;
    }, $content['feedback']['slider']);

    $content['footer']['phones'] = array_map(function ($phone) {
        return [
            'number' => $phone,
            'number_link' => '+7' . mb_substr(preg_replace('/[^0-9]/', '', $phone), -10),
        ];
    }, $content['footer']['phones']);
    $content['footer']['years'] = '2015-' . date('Y', time());
    $content['footer']['networks'] = array_map(function ($network) {
        $network['class'] = 'footer__network_' . $network['class'];

        return $network;
    }, $content['footer']['networks']);

    return json_encode($content);
}

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    $success = false;
    $sendOrder = true;

    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $comment = isset($_POST['comment']) ? $_POST['comment'] : null;
    $recaptcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : null;

    if (empty($recaptcha)) {
        $sendOrder = false;
    } else {
        $curl = curl_init('https://www.google.com/recaptcha/api/siteverify');
        curl_setopt_array($curl, array(
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => array(
                'secret' => '6LcQLh0UAAAAAMAge7XJ70smqgNG5GnCuN79xijJ',
                'response' => $recaptcha,
            ),
        ));
        $curlResult = curl_exec($curl);

        if (empty($curlResult)) {
            $sendOrder = false;
        } else {
            $curlResult = json_decode($curlResult, true);

            if (empty($curlResult['success'])) {
                $sendOrder = false;
            }
        }
    }

    if ($sendOrder) {
        $text = <<<HTML
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <strong>Отклик c лэндинга</strong><br/>
        Имя: <strong>$name</strong><br/>
        Телефон: <strong>$phone</strong><br/>
        E-mail: <strong>$email</strong><br/>
        Комментарий: <strong>$comment</strong>
    </body>
</html>
HTML;
        $headers = array(
            'From: <noreply@forro-systems.ru>',
            'MIME-Version: 1.0',
            "Content-Type: text/html; charset=utf-8\r\n"
        );
        $success = mail('info@forro-systems.ru', 'Заявка с лендинга!', $text, $headers);
    }

    if ($success) {
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode(array('success' => true));
    } else {
        header('HTTP/1.0 500 Internal Server Error');
    }

    exit;
}