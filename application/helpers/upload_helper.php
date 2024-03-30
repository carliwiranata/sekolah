<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

function upload_foto($field_name, $tempat)
{
    $CI = &get_instance();
    $CI->load->library('upload');

    // Set konfigurasi upload
    $config['upload_path']   = './assets/img/' . $tempat . '/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']      = 1024 * 2;

    $CI->upload->initialize($config);

    // Cek apakah file berhasil diupload
    if (!$CI->upload->do_upload($field_name)) {
        // Set flashdata untuk error
        $CI->session->set_flashdata('gagal', 'Foto gagal diupload');
        redirect('admin/tambah' . $tempat);
    } else {
        // Kembalikan data file yang diupload
        $foto = $CI->upload->data();
        return $foto['file_name'];
    }
}


// update foto
function update_foto($id, $foto_lama, $tempat)
{
    $CI = &get_instance();

    if ($_FILES['foto']['name']) {
        // Hapus foto lama yang ada di folder
        unlink('./assets/img/' . $tempat . '/' . $foto_lama);

        // Konfigurasi upload
        $config['upload_path']   = './assets/img/' . $tempat . '/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 1024 * 2;

        $CI->load->library('upload', $config);

        // Cek apakah upload berhasil
        if ($CI->upload->do_upload('foto')) {
            $upload_data = $CI->upload->data();
            $foto = $upload_data['file_name'];
        } else {
            $CI->session->set_flashdata('gagal', 'Foto gagal diupload');
            redirect('admin/edit' . $tempat . '/' . $id);
        }
    } else {
        $foto = $foto_lama;
    }

    return $foto;
}
