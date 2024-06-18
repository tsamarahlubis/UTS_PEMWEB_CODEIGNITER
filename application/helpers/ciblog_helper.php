<?php

function is_login()
{
   $CI = &get_instance(); // Mendapatkan instance CI

   $CI->load->library('session');

   // Memeriksa apakah sesi 'isLogin' telah diatur
   $isLogin = $CI->session->userdata('isLogin');

   // Jika sesi 'isLogin' tidak diatur atau bernilai false, arahkan pengguna ke halaman login
   if (!isset($isLogin) || !$isLogin) {
      redirect('auth/login');
   }
}


function isAdmin()
{
}



function slugify($text)
{
   // replace non letter or digits by -
   $text = preg_replace('~[^\pL\d]+~u', '-', $text);

   // transliterate
   $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

   // remove unwanted characters
   $text = preg_replace('~[^-\w]+~', '', $text);

   // trim
   $text = trim($text, '-');

   // remove duplicate -
   $text = preg_replace('~-+~', '-', $text);

   // lowercase
   $text = strtolower($text);

   if (empty($text)) {
      return 'n-a';
   }

   return $text;
}

// function getDropDownList($table, $columns){
//    $CI =& get_instance();

//    $query = $CI->db->select($columns)->from($table)->get();

//    if($query->num_rows() >= 1){
//       $option1 = ['' => '- Pilih -'];
//       $option2 = array_column($query->result_array(), $columns[1], $columns[0]);
//       $options = $option1 + $option2;

//       return $options;
//    }

//    return $options = ['' => '- Pilih -'];
// }