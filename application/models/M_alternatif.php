<?php
class M_alternatif extends CI_Model
{
    public function sumData()
    {
        $data = $this->db->get('alternatif')->result_array();
        $hitung = count($data);
        return $hitung;
    }

    public function get_alternatif()
    {
        return $this->db->get('alternatif')->result_array();
    }

    public function hitung()
    {
        $bobot_kriteria = [];
        $hasil_bobot = [];
        $bobot = 0;
        $alternatif = $this->db->get('alternatif')->result_array();
        $kriteria = $this->db->get('kriteria')->result_array();

        //Mengambil Nilai Bobot  dengan menggunakan Kode id kriteria sebagai index key
        for ($x = 0; $x < count($kriteria); $x++) {
            $bobot_kriteria[$x]['bobot_kriteria'] = $kriteria[$x]['bobot_kriteria'];
            $bobot_kriteria[$x]['atribut_kriteria'] = $kriteria[$x]['atribut_kriteria'];
            $bobot += (int)$kriteria[$x]['bobot_kriteria'];
        }

        //Perbaikan bobot Kriteria
        for ($x = 0; $x < count($bobot_kriteria); $x++) {
            $hasil_bobot[$x]['p_bobot'] = ($bobot_kriteria[$x]['bobot_kriteria'] / $bobot) * $bobot_kriteria[$x]['atribut_kriteria'];
        }

        // sum(b1^pb)+(b2^pb)+(b3^pb)+(b4^pb)+(b5^pb)
        $totalS = [];
        $nTS = [];
        $arr = [];

        //VEKTOR S
        foreach ($alternatif as $i => $alt) {
            // $b1 = $alt['b1']
            $t = 0;
            foreach ($hasil_bobot as $j => $hb) {
                $h = $alt['b' . ($j + 1)] ** $hb['p_bobot'];
                $t = ($t != 0) ? $t * $h : $h;
            }
            $totalS[] = $t;
        }
        //VEKTOR V

        $v = [];
        for ($i = 0; $i < count($alternatif); $i++) {
            $v[$i]['name'] = $alternatif[$i]['name'];
            $v[$i]['type'] = $alternatif[$i]['type'];
            $v[$i]['c5'] = $alternatif[$i]['c5'];
            $v[$i]['nilai_v'] = $totalS[$i] / array_sum($totalS);
        }
        foreach ($totalS as $i => $t) {
            $nTS[] = $t / array_sum($totalS);
        }
        return $v;
    }

    public function totalS()
    {
        $bobot_kriteria = [];
        $hasil_bobot = [];
        $bobot = 0;
        $alternatif = $this->db->get('alternatif')->result_array();
        $kriteria = $this->db->get('kriteria')->result_array();

        //Mengambil Nilai Bobot  dengan menggunakan Kode id kriteria sebagai index key
        for ($x = 0; $x < count($kriteria); $x++) {
            $bobot_kriteria[$x]['bobot_kriteria'] = $kriteria[$x]['bobot_kriteria'];
            $bobot_kriteria[$x]['atribut_kriteria'] = $kriteria[$x]['atribut_kriteria'];
            $bobot += (int)$kriteria[$x]['bobot_kriteria'];
        }

        //Perbaikan bobot Kriteria
        for ($x = 0; $x < count($bobot_kriteria); $x++) {
            $hasil_bobot[$x]['p_bobot'] = ($bobot_kriteria[$x]['bobot_kriteria'] / $bobot) * $bobot_kriteria[$x]['atribut_kriteria'];
        }

        // sum(b1^pb)+(b2^pb)+(b3^pb)+(b4^pb)+(b5^pb)
        $dataVS = [];
        $totalS = [];
        foreach ($alternatif as $i => $alt) {
            // $b1 = $alt['b1']
            $t = 0;
            foreach ($hasil_bobot as $j => $hb) {
                $h = $alt['b' . ($j + 1)] ** $hb['p_bobot'];
                $t = ($t != 0) ? $t * $h : $h;
                // b1^2*b2^2
            }
            $totalS[] = $t;
        }
        for ($x = 0; $x < count($alternatif); $x++) {
            $dataVS[$x]['name'] = $alternatif[$x]['name'];
            $dataVS[$x]['type'] = $alternatif[$x]['type'];
            $dataVS[$x]['totalS'] = $totalS[$x];
        }
        return $dataVS;
    }

    public function pBobot()
    {
        $bobot_kriteria = [];
        $hasil_bobot = [];
        $bobot = 0;
        $kriteria = $this->db->get('kriteria')->result_array();

        //Mengambil Nilai Bobot  dengan menggunakan Kode id kriteria sebagai index key
        for ($x = 0; $x < count($kriteria); $x++) {
            $bobot_kriteria[$x]['bobot_kriteria'] = $kriteria[$x]['bobot_kriteria'];
            $bobot_kriteria[$x]['atribut_kriteria'] = $kriteria[$x]['atribut_kriteria'];
            $bobot += (int)$kriteria[$x]['bobot_kriteria'];
        }

        //Perbaikan bobot Kriteria
        for ($x = 0; $x < count($bobot_kriteria); $x++) {
            $hasil_bobot[$x]['nama_kriteria'] = $kriteria[$x]['nama_kriteria'];
            $hasil_bobot[$x]['p_bobot'] = ($bobot_kriteria[$x]['bobot_kriteria'] / $bobot) * $bobot_kriteria[$x]['atribut_kriteria'];
        }
        return $hasil_bobot;
    }

    public function inputlaporan()
    {
        
    }
}
