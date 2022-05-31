<?php namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ProductModel;
 
class Products extends ResourceController
{
    use ResponseTrait;
    // get all product
    public function index()
    {
        $model = new ProductModel();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
 
    // get single product
    public function show($id = null)
    {
        $model = new ProductModel();
        $data = $model->getWhere(['id_produk' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Tidak ada produk dengan id '.$id);
        }
    }
 
    // create
    public function create()
    {
        $rules = [
			"nama_produk" => "required",
			"jenis_produk" => "required",
			"harga_produk" => "required|numeric|min_length[4]",
            "stok_produk" => "required",
		];

		$messages = [
			"nama_produk" => [
				"required" => "Nama produk belum diisi"
			],
			"jenis_produk" => [
				"required" => "Jenis produk belum diisi"
			],
			"harga_produk"      => [
				"required"      => "Harga produk belum diisi",
                "numeric"       => "Format harga tidak valid!",
                "min_length"    => "Harga tidak valid!"
			],
            "stok_produk" => [
				"required" => "Stok produk belum diisi"
			],
		];

		if (!$this->validate($rules, $messages)) {

			$response = [
				'status' => 500,
				'error' => true,
				'message' => $this->validator->getErrors(),
				'data' => []
			];
		} else {

			$emp = new ProductModel();

			$data['nama_produk'] = $this->request->getVar("nama_produk");
			$data['jenis_produk'] = $this->request->getVar("jenis_produk");
			$data['harga_produk'] = $this->request->getVar("harga_produk");
            $data['stok_produk'] = $this->request->getVar("stok_produk");

			$emp->save($data);

			$response = [
				'status' => 200,
				'error' => false,
				'message' => 'Produk berhasil ditambahkan!',
				'data' => []
			];
		}

		return $this->respondCreated($response);
    }
 
    // update product
    public function update($id = null)
    {
        $model = new ProductModel();
        $json = $this->request->getJSON();
        if($json){
            $data = [
                'nama_produk' => $json->nama_produk,
                'jenis_produk' => $json->jenis_produk,
                'harga_produk' => $json->harga_produk,
                'stok_produk' => $json->stok_produk
            ];
        }else{
            $input = $this->request->getRawInput();
            $data = [
                'nama_produk' => $input['nama_produk'],
                'jenis_produk' => $input['jenis_produk'],
                'harga_produk' => $input['harga_produk'],
                'stok_produk' => $input['stok_produk']
            ];
        }
        // Insert to Database
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data Diperbaharui'
            ]
        ];
        return $this->respond($response);
    }
 
    // delete product
    public function delete($id = null)
    {
        $model = new ProductModel();
        $data = $model->find($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Dihapus'
                ]
            ];
             
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('Tidak ada produk dengan id '.$id);
        }
         
    }
 
}