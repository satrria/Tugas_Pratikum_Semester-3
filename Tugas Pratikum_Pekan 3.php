<?php

# membuat class Animal
class Animal
{
  # property animals
    #untuk bisa mengakses property lain maka buat kode public dengan array untuk tersusun
    public $binatang = array();


  # method constructor - mengisi data awal
  # parameter: data hewan (array)
  public function __construct($binatang) #$data ini sebagai parameter this pada binatang
  {
    $this->animal = $binatang;
  }

  # method index - menampilkan data animals
  public function index()
  {
    # gunakan foreach untuk menampilkan data animals (array)
    foreach($this->animal as $this->data){
        #as digunakan untuk mengganti parameter animal menjadi data
        echo "$this->data" . PHP_EOL;
        echo "<br>";
    }
  }

  # method store - menambahkan hewan baru
  # parameter: hewan baru
  public function store($data)
  {
    # gunakan method array_push untuk menambahkan data baru
    array_push($this->animal, $data);

  }

  # method update - mengupdate hewan
  # parameter: index dan hewan baru
  public function update($index, $data)
  {
    

    if(isset($this->animal[$index])) {
        return $this->index = array_push($this->animal, $data);
    }

    
  }

  # method delete - menghapus hewan
  # parameter: index
  public function destroy($index)
  {
    # gunakan method unset atau array_splice untuk menghapus data array  
    
    #boleh gunakan if atau to the point dengan return dan tahu index array yang dihapus
    if(isset($this->animal[$index])) {
        return $this->index = array_splice($this->animal,  $index , 1);
    }
   
  }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(["Kerbau", "Buaya", "Kambing", "Ayam"]);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora',);
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(3);
$animal->index();
echo "<br>";