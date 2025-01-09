<?php

function authorize_user($roles = 'admin')
{
    $CI = &get_instance();
    $user_role = $CI->session->userdata('user_role');

    if (!$user_role) {
        redirect('auth');
    }

    if (is_string($roles)) {
        $roles = [$roles];
    }

    if (!in_array($user_role, $roles)) {
        if ($user_role == 'admin') {
            redirect('dashboard');
        } else {
            redirect('loker/info');
        }
    }

    return true;
}

function dd($data)
{
    var_dump($data);
    die();
}

function upload_file($file_upload)
{
    $CI = get_instance();
    $image_type = pathinfo($_FILES[$file_upload]['name'], PATHINFO_EXTENSION);

    $config['upload_path'] = "./file/";
    $config['file_name'] = time();
    $config['allowed_types'] = '*';

    $CI->upload->initialize($config);

    if (!$CI->upload->do_upload($file_upload)) {
        var_dump($CI->upload->display_errors());
        die();
    } else {
        return $CI->upload->data()['file_name'];
    }
}
