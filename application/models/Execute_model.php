<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Execute_model extends CI_Model {

    public function __construct() {
        
        date_default_timezone_set('Asia/Jakarta');
    }


    public function temukan($table, $field = '', $value = '', $order_by = '', $order_type = '') {
        if ($field != '' && $value != '') {
            $this->db->where($field, $value);
        }

        if ($order_by != '') {
            if ($order_type != '') {
                $this->db->order_by($order_by, $order_type);
            } else {
                $this->db->order_by($order_by, 'ASC');
            }
        }

        return $this->db->get($table);
    }


    /**
     * save()
     * Fungsi untuk menyimpan data kedalam tabel
     * @return boolean
     */
    public function save($table, $data) {
        return $this->db->insert($table, $data);
    }

    public function save_batch($table, $data) {
        return $this->db->insert_batch($table, $data);
    }

    /**
     * update()
     * Fungsi untuk mengupdate record data dalam tabel
     * @return boolean
     */
    public function update($field, $value, $table, $data) {
        return $this->db->where($field, $value)->update($table, $data);
    }

    /**
     * delete()
     * Fungsi untuk menghapus record data dalam tabel
     * @return boolean
     */
    public function delete($field, $value, $table) {
        if (is_array($value)) {
            $this->db->where_in($field, $value);
        } else {
            $this->db->where($field, $value);
        }
        return $this->db->delete($table);
    }

    /**
     * dropdown()
     * Fungsi untuk membuat form dropdown
     * @return array
     */
    public function dropdown($key, $value, $table, $is_null = FALSE) {
        $query = $this->db->get($table);
        if ($query->num_rows() > 0) {
            if ($is_null != FALSE) {
                $data[NULL] = 'Pilih :';
            }
            foreach ($query->result() as $row) {
                $data[$row->$key] = $row->$value;
            }
            return $data;
        } 
        return [];
    }

    /**
     * is_exist()
     * Fungsi untuk mengecek ketersediaan record data
     * @return boolean
     */
    public function is_exist($field, $value, $table, $pk = '', $id = '') {
        $this->db->where($field, $value);
        if ($id != '') {
            $this->db->where($pk . ' != ', $id);
        }
        return $this->db->count_all_results($table) > 0 ? TRUE : FALSE;
    }


    /*
     * fungsi untuk membuat widget category
     */
    public function widget_post_category() {
        return $this->db->query("
            SELECT p.category_id
                , c.category
                , COUNT(*) as jumlah
            FROM posts p
            LEFT JOIN category c ON c.category_id = p.category_id
            WHERE p.post_type = 'post'
            GROUP BY p.category_id
            ORDER BY c.category ASC
        ");
    }

    /**
     * Fungsi untuk widget arsip post
     */
    public function widget_archive_posts() {
        return $this->db->query("
            SELECT SUBSTR(post_date, 6, 2) as kode
                , MONTHNAME(post_date) AS bulan,
                (SELECT COUNT(*) FROM posts WHERE MONTHNAME(post_date) = bulan AND post_type = 'post') AS jumlah
            FROM posts
            WHERE YEAR(post_date) = YEAR(CURDATE())
            AND post_type = 'post'
            GROUP BY 1,2
            ORDER BY SUBSTR(post_date, 6, 2)
        ");
    }

   

    /**
     * Set Captcha
     * @return String
     */
    public function set_captcha() {
        create_dir('./assets/captcha/');
        $vals = [
            'word' => random_string('numeric', 5),
            'img_path' => './assets/captcha/',
            'img_url' => base_url() . 'assets/captcha/',
            'img_width' => 180,
            'img_height' => 60,
            'expiration' => 7200,
            'colors' => [
                'background' => [255, 255, 255],
                'border' => [0, 0, 0],
                'text' => [0, 0, 0],
                'grid' => [255, 255, 255],
            ],
        ];
        $cap = create_captcha($vals);
        $data = [
            'captcha_time' => $cap['time'],
            'ip_address' => $this->input->ip_address(),
            'word' => $cap['word'],
        ];
        $query = $this->db->insert_string('captcha', $data);
        $this->db->query($query);
        return $cap;
    }

    public function is_valid_captcha($str) {
        $expiration = time() - 7200; // Two hour limit
        $this->db->where('captcha_time < ', $expiration)->delete('captcha');
        $sql = 'SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?';
        $binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
        $query = $this->db->query($sql, $binds);
        $row = $query->row();
        return $row->count > 0;
    }

    public function is_mail_exist($email, $table) {
        return $this->db->where('email', $email)->count_all_results($table) == 0;
    }

    public function getLoker()
    {
        $this->db->select('loker.*, grup.nm_grup, grup.logo, devisi.nm_devisi');
        $this->db->from('loker');
        $this->db->join('grup', 'grup.id = loker.grup_id');
        $this->db->join('devisi', 'devisi.id = loker.devisi_id');
        $this->db->where('loker.status','0');
        $this->db->where('grup.status','0');
        $this->db->order_by('loker.id','desc');
        $query = $this->db->get();
        return $query;
    }

    public function getLokerById($id)
    {
        $this->db->select('loker.*, grup.nm_grup, grup.logo, devisi.nm_devisi');
        $this->db->from('loker');
        $this->db->join('grup', 'grup.id = loker.grup_id');
        $this->db->join('devisi', 'devisi.id = loker.devisi_id');
        $this->db->where('loker.status','0');
        $this->db->where('grup.status','0');
        $this->db->where('loker.devisi_id',$id);
        $query = $this->db->get();
        return $query;
    }

    public function cariLoker($id)
    {
        $this->db->select('loker.*, grup.nm_grup, grup.logo, devisi.nm_devisi');
        $this->db->from('loker');
        $this->db->join('grup', 'grup.id = loker.grup_id');
        $this->db->join('devisi', 'devisi.id = loker.devisi_id');
        $this->db->where('loker.status','0');
        $this->db->where('grup.status','0');
        $this->db->like('loker.title',$id);
        $this->db->or_like('grup.nm_grup',$id);
        $this->db->or_like('loker.lokasi',$id);
        $this->db->or_like('devisi.nm_devisi',$id);
        $query = $this->db->get();
        return $query;
    }

}