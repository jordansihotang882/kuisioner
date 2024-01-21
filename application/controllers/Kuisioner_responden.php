<?php 
class Kuisioner_responden extends CI_Controller  {

    public function index()
    {
        $data['pertanyaan'] = $this->model_admin->tampil_data('tb_pertanyaan')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kuisioner', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_kuisioner()
    {
        $data['pertanyaan'] = $this->db->query("SELECT * FROM tb_pilihan py, tb_pertanyaan ks WHERE  py.id_pertanyaan=ks.id_pertanyaan")->result();
        $data['pilihan'] = $this->model_admin->tampil_data('tb_pilihan')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('form_input_kuisioner', $data);
        $this->load->view('templates_admin/footer');    
    }
    public function tambah_kuisioner_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE) {
            $this->tambah_kuisioner();
        }else{
            $nama = $this->input->post('nama');
            $status = $this->input->post('status');
            $p1 = $this->input->post('p1');
            $p2 = $this->input->post('p2');
            $p3 = $this->input->post('p3');
            $p4 = $this->input->post('p4');
            $p5 = $this->input->post('p5');
            $p6 = $this->input->post('p6');
            $p7 = $this->input->post('p7');
            $p8 = $this->input->post('p8');
            $p9 = $this->input->post('p9');
            $p10 = $this->input->post('p10');
            $p11 = $this->input->post('p11');
            $p12 = $this->input->post('p12');
            $p13 = $this->input->post('p13');
            $p14 = $this->input->post('p14');
            $p15 = $this->input->post('p15');
            $p16 = $this->input->post('p16');
            $p17 = $this->input->post('p17');
            $p18 = $this->input->post('p18');
            $p19 = $this->input->post('p19');
            $p20 = $this->input->post('p20');
            $p21 = $this->input->post('p21');
            $p22 = $this->input->post('p22');
            $p23 = $this->input->post('p23');
            $p24 = $this->input->post('p24');
            $p25 = $this->input->post('p25');
            $p26 = $this->input->post('p26');
            
            $data = array(
            'nama'    => $nama, 
            'status'      => $status,
            'p1'    => $p1, 
            'p2'      => $p2,
            'p3'    => $p3, 
            'p4'      => $p4,
            'p5'    => $p5, 
            'p6'      => $p6,
            'p7'    => $p7, 
            'p8'      => $p8,
            'p9'    => $p9, 
            'p10'      => $p10,
            'p11'    => $p11, 
            'p12'      => $p12,
            'p13'    => $p13, 
            'p14'      => $p14,
            'p15'    => $p15, 
            'p16'      => $p16,
            'p17'    => $p17, 
            'p18'      => $p18,
            'p19'    => $p19, 
            'p20'      => $p20,
            'p21'    => $p21, 
            'p22'      => $p22, 
            'p23'      => $p23,
            'p24'    => $p24, 
            'p25'      => $p25,
            'p26'      => $p26
        );
            $this->model_admin->insert_data($data,'tb_hasil');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Berhasil ditambahkan!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span></button>
                </div>');
            redirect('kuisioner_responden/ucapan');
        }

    }
    public function _rules()
    {
        $this->form_validation->set_rules('nama','nama','required',['required' => 'Nama admin Wajib diisi']);
        $this->form_validation->set_rules('status','status','required',['required' => 'Username Wajib diisi']);
        
    }

     public function ucapan()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('ucapan');
        $this->load->view('templates_admin/footer');
    }


     public function excel()
    {
        $data['kuisioner'] = $this->model_admin->tampil_data('tb_hasil')->result();
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
        $object = new PHPExcel();
        $object->getProperties()->setCreator("Kuisioner Siak");
        $object->getProperties()->setLastModifiedBy("Kuisioner Siak");
        $object->getProperties()->setTitle("Data Kuisioner");

        $object->setActiveSheetIndex(0);

        $object->setActiveSheetIndex()->setCellValue('A1','No');
        $object->setActiveSheetIndex()->setCellValue('B1','Nama');
        $object->setActiveSheetIndex()->setCellValue('C1','Status');
        $object->setActiveSheetIndex()->setCellValue('D1','Pertanyaan 1');
        $object->setActiveSheetIndex()->setCellValue('E1','Pertanyaan 2');
        $object->setActiveSheetIndex()->setCellValue('F1','Pertanyaan 3');
        $object->setActiveSheetIndex()->setCellValue('G1','Pertanyaan 4');
        $object->setActiveSheetIndex()->setCellValue('H1','Pertanyaan 5');
        $object->setActiveSheetIndex()->setCellValue('I1','Pertanyaan 6');
        $object->setActiveSheetIndex()->setCellValue('J1','Pertanyaan 7');
        $object->setActiveSheetIndex()->setCellValue('K1','Pertanyaan 8');
        $object->setActiveSheetIndex()->setCellValue('L1','Pertanyaan 9');
        $object->setActiveSheetIndex()->setCellValue('M1','Pertanyaan 10');
        $object->setActiveSheetIndex()->setCellValue('N1','Pertanyaan 11');
        $object->setActiveSheetIndex()->setCellValue('O1','Pertanyaan 12');
        $object->setActiveSheetIndex()->setCellValue('P1','Pertanyaan 13');
        $object->setActiveSheetIndex()->setCellValue('Q1','Pertanyaan 14');
        $object->setActiveSheetIndex()->setCellValue('R1','Pertanyaan 15');
        $object->setActiveSheetIndex()->setCellValue('S1','Pertanyaan 16');
        $object->setActiveSheetIndex()->setCellValue('T1','Pertanyaan 17');
        $object->setActiveSheetIndex()->setCellValue('U1','Pertanyaan 18');
        $object->setActiveSheetIndex()->setCellValue('V1','Pertanyaan 19');
        $object->setActiveSheetIndex()->setCellValue('W1','Pertanyaan 20');
        $object->setActiveSheetIndex()->setCellValue('X1','Pertanyaan 21');
        $object->setActiveSheetIndex()->setCellValue('Y1','Pertanyaan 22');
        $object->setActiveSheetIndex()->setCellValue('Z1','Pertanyaan 23');
        $object->setActiveSheetIndex()->setCellValue('AA1','Pertanyaan 24');
        $object->setActiveSheetIndex()->setCellValue('AB1','Pertanyaan 25');
        $object->setActiveSheetIndex()->setCellValue('AC1','Pertanyaan 26');
        
        $baris = 2;
        $no = 1;

        foreach($data['kuisioner'] as $ksn){
        $object->setActiveSheetIndex()->setCellValue('A1'.$baris,$no++);
        $object->setActiveSheetIndex()->setCellValue('B1'.$baris,$ksn->nama);
        $object->setActiveSheetIndex()->setCellValue('C1'.$baris,$ksn->status);
        $object->setActiveSheetIndex()->setCellValue('D1'.$baris,$ksn->p1);
        $object->setActiveSheetIndex()->setCellValue('E1'.$baris,$ksn->p2);
        $object->setActiveSheetIndex()->setCellValue('F1'.$baris,$ksn->p3);
        $object->setActiveSheetIndex()->setCellValue('G1'.$baris,$ksn->p4);
        $object->setActiveSheetIndex()->setCellValue('H1'.$baris,$ksn->p5);
        $object->setActiveSheetIndex()->setCellValue('I1'.$baris,$ksn->p6);
        $object->setActiveSheetIndex()->setCellValue('J1'.$baris,$ksn->p7);
        $object->setActiveSheetIndex()->setCellValue('K1'.$baris,$ksn->p8);
        $object->setActiveSheetIndex()->setCellValue('L1'.$baris,$ksn->p9);
        $object->setActiveSheetIndex()->setCellValue('M1'.$baris,$ksn->p10);
        $object->setActiveSheetIndex()->setCellValue('N1'.$baris,$ksn->p11);
        $object->setActiveSheetIndex()->setCellValue('O1'.$baris,$ksn->p12);
        $object->setActiveSheetIndex()->setCellValue('P1'.$baris,$ksn->p13);
        $object->setActiveSheetIndex()->setCellValue('Q1'.$baris,$ksn->p14);
        $object->setActiveSheetIndex()->setCellValue('R1'.$baris,$ksn->p15);
        $object->setActiveSheetIndex()->setCellValue('S1'.$baris,$ksn->p16);
        $object->setActiveSheetIndex()->setCellValue('T1'.$baris,$ksn->p17);
        $object->setActiveSheetIndex()->setCellValue('U1'.$baris,$ksn->p18);
        $object->setActiveSheetIndex()->setCellValue('V1'.$baris,$ksn->p19);
        $object->setActiveSheetIndex()->setCellValue('W1'.$baris,$ksn->p20);
        $object->setActiveSheetIndex()->setCellValue('X1'.$baris,$ksn->p21);
        $object->setActiveSheetIndex()->setCellValue('Y1'.$baris,$ksn->p22);
        $object->setActiveSheetIndex()->setCellValue('Z1'.$baris,$ksn->p23);
        $object->setActiveSheetIndex()->setCellValue('AA1'.$baris,$ksn->p24);
        $object->setActiveSheetIndex()->setCellValue('AB1'.$baris,$ksn->p25);
        $object->setActiveSheetIndex()->setCellValue('AC1'.$baris,$ksn->p26);

$baris++;
        }
        $filename="Data_Kuisioner".'.xlsx';
        $object->getActiveSheet()->setTitle("Data Kuisioner");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');

        $writer=PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;


    }

     public function excel2()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach(range('A','AB') as $coulomID){

            $spreadsheet->getActiveSheet()->getColumnDimension($coulomID)->setAutoSize(true);

        }
        $sheet->setCellValue('A1','nama');
        $sheet->setCellValue('B1','status');
        $sheet->setCellValue('C1','pertanyaan 1');
        $sheet->setCellValue('D1','pertanyaan 2');
        $sheet->setCellValue('E1','pertanyaan 3');
        $sheet->setCellValue('F1','pertanyaan 4');
        $sheet->setCellValue('G1','pertanyaan 5');
        $sheet->setCellValue('H1','pertanyaan 6');
        $sheet->setCellValue('I1','pertanyaan 7');
        $sheet->setCellValue('J1','pertanyaan 8');
        $sheet->setCellValue('K1','pertanyaan 9');
        $sheet->setCellValue('L1','pertanyaan 10');
        $sheet->setCellValue('M1','pertanyaan 11');
        $sheet->setCellValue('N1','pertanyaan 12');
        $sheet->setCellValue('O1','pertanyaan 13');
        $sheet->setCellValue('P1','pertanyaan 14');
        $sheet->setCellValue('Q1','pertanyaan 15');
        $sheet->setCellValue('R1','pertanyaan 16');
        $sheet->setCellValue('S1','pertanyaan 17');
        $sheet->setCellValue('T1','pertanyaan 18');
        $sheet->setCellValue('U1','pertanyaan 19');
        $sheet->setCellValue('V1','pertanyaan 20');
        $sheet->setCellValue('W1','pertanyaan 21');
        $sheet->setCellValue('X1','pertanyaan 22');
        $sheet->setCellValue('Y1','pertanyaan 23');
        $sheet->setCellValue('Z1','pertanyaan 24');
        $sheet->setCellValue('AA1','pertanyaan 25');
        $sheet->setCellValue('AB1','pertanyaan 26');


        $kuisioner = $this->db->query("SELECT * FROM tb_hasil")->result_array();
        $x=2;
        foreach ($kuisioner as $row)
        {
            $sheet->setCellValue('A'.$x, $row['nama']);
        $sheet->setCellValue('B'.$x, $row['status']);
        $sheet->setCellValue('C'.$x, $row['p1']);
        $sheet->setCellValue('D'.$x, $row['p2']);
        $sheet->setCellValue('E'.$x, $row['p3']);
        $sheet->setCellValue('F'.$x, $row['p4']);
        $sheet->setCellValue('G'.$x, $row['p5']);
        $sheet->setCellValue('H'.$x, $row['p6']);
        $sheet->setCellValue('I'.$x, $row['p7']);
        $sheet->setCellValue('J'.$x, $row['p8']);
        $sheet->setCellValue('K'.$x, $row['p9']);
        $sheet->setCellValue('L'.$x, $row['p10']);
        $sheet->setCellValue('M'.$x, $row['p11']);
        $sheet->setCellValue('N'.$x, $row['p12']);
        $sheet->setCellValue('O'.$x, $row['p13']);
        $sheet->setCellValue('P'.$x, $row['p14']);
        $sheet->setCellValue('Q'.$x, $row['p15']);
        $sheet->setCellValue('R'.$x, $row['p16']);
        $sheet->setCellValue('S'.$x, $row['p17']);
        $sheet->setCellValue('T'.$x, $row['p18']);
        $sheet->setCellValue('U'.$x, $row['p19']);
        $sheet->setCellValue('V'.$x, $row['p20']);
        $sheet->setCellValue('W'.$x, $row['p21']);
        $sheet->setCellValue('X'.$x, $row['p22']);
        $sheet->setCellValue('Y'.$x, $row['p23']);
        $sheet->setCellValue('Z'.$x, $row['p24']);
        $sheet->setCellValue('AA'.$x, $row['p25']);
        $sheet->setCellValue('AB'.$x, $row['p26']);
          
          $x++;


            }

            $writer = new Xlsx($spreadsheet);
            $filename='data_kuisioner.xlsx';

            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
            $writer->save('php://output');
        }
}