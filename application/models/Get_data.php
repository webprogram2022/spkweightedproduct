<?php

class Get_data extends CI_Model
{
    public function GetData()
    {
        return $this->db->get('kriteria')->result_array();
    }

    public function GetLaporan()
    {
        return $this->db->get('laporan')->result_array();
    }

    public function Alter()
    {
        return $this->db->get('alternatif')->result_array();
    }

    public function ubahData($id, $data, $table)
    {
        $this->db->where($id);
        $this->db->update($table, $data);
    }

    public function bobot()
    {
        $hbobot = [];
        $bobot = $this->db->get('kriteria')->result_array();
        foreach ($bobot as $data) {
            $hbobot = [
                'b1' => $data['b1'],
                'b2' => $data['b2'],
                'b3' => $data['b3'],
                'b4' => $data['b4'],
                'b5' => $data['b5']
            ];
        }
        return $hbobot;
    }

    public function atribut()
    {
        $hAtribut = [];
        $atribut = $this->db->get('kriteria')->result_array();
        foreach ($atribut as $data) {
            $hAtribut = [
                'a1' => $data['a1'],
                'a2' => $data['a2'],
                'a3' => $data['a3'],
                'a4' => $data['a4'],
                'a5' => $data['a5']
            ];
        }
        return $hAtribut;
    }
}
